<?php

namespace Radiergummi\Foundation\Framework\Schema;

use OutOfRangeException;
use Radiergummi\Foundation\Framework\Utils\ArrayUtil;
use function array_merge;
use function array_search;
use function array_splice;
use function array_unique;
use function in_array;

/**
 * User class
 *
 * @package Radiergummi\Foundation\Framework\Schema
 */
class User extends SchemaChange {

    /**
     * whether the password is given as a hash
     *
     * @var int
     */
    const PASSWORD_HASH = 1;

    /**
     * whether the password is given as plain text
     *
     * @var int
     */
    const PASSWORD_PLAIN = 0;

    /**
     * maximum username length
     *
     * @var int
     */
    const USERNAME_MAXIMUM_LENGTH = 60;

    /**
     * minimum username length
     *
     * @var int
     */
    const USERNAME_MINIMUM_LENGTH = 1;

    /**
     * username
     *
     * @var string
     */
    protected $username = '';

    /**
     * password
     *
     * @var string
     */
    protected $password = '';

    /**
     * whether the password is plain text or a hash
     *
     * @var int
     */
    protected $passwordType = 0;

    /**
     * emailAddress
     *
     * @var string
     */
    protected $emailAddress = '';

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * properties
     *
     * @var array
     */
    protected $properties = [];

    /**
     * capabilities
     *
     * @var array
     */
    protected $capabilities = [];

    /**
     * roles
     *
     * @var \Radiergummi\Foundation\Framework\Schema\Role[]
     */
    protected $roles = [];

    /**
     * User constructor
     *
     * @param string $username
     * @param array  $options
     *
     * @throws \OutOfRangeException
     */
    public function __construct( string $username, array $options = [] ) {
        $this->setUsername( $username );
    }

    /**
     * retrieves the username
     *
     * @return string
     */
    public function getUsername(): string {
        return $this->username;
    }

    /**
     * sets the username
     *
     * @param string $username username to set
     *
     * @throws \OutOfRangeException if the name is not between 1 and 60 characters
     */
    public function setUsername( string $username ) {
        $usernameLength = strlen( $username );

        if (
            ( $usernameLength >= User::USERNAME_MINIMUM_LENGTH ) &&
            ( $usernameLength <= User::USERNAME_MAXIMUM_LENGTH )
        ) {
            $this->username = $username;
        } else {
            throw new OutOfRangeException(
                'Username must be 1 to 60 characters in length (current length is ' . $usernameLength . ')'
            );
        }
    }

    /**
     * retrieves the password as plain text or hash.
     * Note: This is *not* a security issue. Foundation is meant as a build tool, not as a production environment (you
     * would have a hard time transforming it into any meaningful frontend application anyway), so if you define users
     * with foundation, you are expected to use temporary passwords for them.
     * More on this will be available in the documentation (TODO: Create docs)
     *
     * @return string
     */
    public function getPassword(): string {
        return $this->password;
    }

    /**
     * sets the password as plain text or hash, depending on the second argument. Two constants are available to
     * set the type: User::PASSWORD_PLAIN (0) and User::PASSWORD_HASH (1). Defaults to plain, since hashing will
     * be applied by WordPress later on if necessary.
     *
     * @param string $password password to set
     * @param int    $type     one of 0 (plain) or 1 (hash), defaults to plain
     */
    public function setPassword( string $password, int $type = User::PASSWORD_PLAIN ) {
        $this->password     = $password;
        $this->passwordType = $type;
    }

    /**
     * retrieves a users email address
     *
     * @return string
     */
    public function getEmailAddress(): string {
        return $this->emailAddress;
    }

    /**
     * sets a users email address
     * We could try and validate emails here, but actually - that makes no sense at all. I can only encourage you to
     * *not* validate email addresses at all, see here:
     *
     * @link https://hackernoon.com/the-100-correct-way-to-validate-email-addresses-7c4818f24643
     *
     * @param string $emailAddress
     */
    public function setEmailAddress( string $emailAddress ) {
        $this->emailAddress = $emailAddress;
    }

    /**
     * retrieves the users name (not username!)
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * sets the users name
     *
     * @param string $name
     */
    public function setName( string $name ) {
        $this->name = $name;
    }

    /**
     * retrieves a users properties
     *
     * @return array
     */
    public function getProperties(): array {
        return $this->properties;
    }

    /**
     * sets a users properties
     *
     * @param array $properties
     */
    public function setProperties( array $properties ) {
        foreach ( $properties as $key => $value ) {
            $this->addProperty( $key, $value );
        }
    }

    /**
     * adds a property to the user
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return void
     */
    public function addProperty( string $key, $value ) {
        if ( ! $this->hasProperty( $key ) ) {
            ArrayUtil::set( $this->properties, $key, $value );
        }
    }

    /**
     * checks whether the user has a property
     *
     * @param string $key
     *
     * @return bool
     */
    public function hasProperty( string $key ): bool {
        return ArrayUtil::has( $this->properties, $key );
    }

    /**
     * retrieves a property from the user
     *
     * @param string $key
     *
     * @return mixed|null
     */
    public function getProperty( string $key ) {
        return ArrayUtil::get( $this->properties, $key );
    }

    /**
     * removes a property from the user
     *
     * @param string $key
     *
     * @return void
     */
    public function removeProperty( string $key ) {
        if ( $this->hasProperty( $key ) ) {
            ArrayUtil::remove( $this->properties, $key );
        }
    }

    /**
     * retrieves the users capabilities
     *
     * @return array
     */
    public function getCapabilities(): array {
        return $this->getCapabilityList();
    }

    /**
     * sets the users capabilities
     *
     * @param array $capabilities
     */
    public function setCapabilities( array $capabilities ) {
        foreach ( $capabilities as $capability ) {
            $this->addCapability( $capability );
        }
    }

    /**
     * merges all role capabilities and additionally assigned capabilities into a single list. Additionally
     * assigned capabilities have higher priority.
     *
     * @return string[]
     */
    protected function getCapabilityList(): array {
        $roleCapabilities = [];

        /** @var \Radiergummi\Foundation\Framework\Schema\Role $role */
        foreach ( $this->getRoles() as $role ) {
            $roleCapabilities = array_merge( $roleCapabilities, $role->getCapabilities() );
        }

        return array_unique( array_merge( $roleCapabilities, $this->capabilities ) );
    }

    /**
     * retrieves a users roles
     *
     * @return \Radiergummi\Foundation\Framework\Schema\Role[]
     */
    public function getRoles(): array {
        return $this->roles;
    }

    /**
     * adds a capability
     *
     * @param string $name
     *
     * @return void
     */
    public function addCapability( string $name ) {
        if ( ! $this->hasCapability( $name ) ) {
            $this->capabilities[] = $name;
        }
    }

    /**
     * checks whether the user has a capability
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasCapability( string $name ): bool {
        return in_array( $name, $this->getCapabilityList() );
    }

    /**
     * sets all roles for a user
     *
     * @param \Radiergummi\Foundation\Framework\Schema\Role[] $roles
     */
    public function setRoles( array $roles ) {
        foreach ( $roles as $role ) {

            /** @var \Radiergummi\Foundation\Framework\Schema\Role $role */
            $this->addRole( $role );
        }
    }

    /**
     * adds a role to the user
     *
     * @param \Radiergummi\Foundation\Framework\Schema\Role $role
     *
     * @return void
     */
    public function addRole( Role $role ) {
        if ( ! $this->hasRole( $role ) ) {
            $this->roles[] = $role;
        }
    }

    /**
     * removes a capability from the user
     *
     * @param string $name
     *
     * @return void
     */
    public function removeCapability( string $name ) {
        if ( $this->hasCapability( $name ) ) {
            $this->capabilities = array_splice(
                $this->capabilities,
                array_search( $name, $this->capabilities )
            );
        }
    }

    /**
     * removes a role from the user
     *
     * @param \Radiergummi\Foundation\Framework\Schema\Role $role
     *
     * @return void
     */
    public function removeRole( Role $role ) {
        if ( $this->hasRole( $role ) ) {
            $this->roles = array_splice(
                $this->roles,
                array_search( $role, $this->roles )
            );
        }
    }

    /**
     * checks whether the user has a role
     *
     * @param \Radiergummi\Foundation\Framework\Schema\Role $role
     *
     * @return bool
     */
    public function hasRole( Role $role ): bool {
        return in_array( $role, $this->roles );
    }

    /**
     * @inheritdoc
     */
    public function toJson(): string {
        // TODO: Implement toJson serialization
    }

}
