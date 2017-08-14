# Foundation ![Travis badge](https://api.travis-ci.org/Radiergummi/foundation.svg?branch=master "Travis test status")
A WordPress meta generator.

**Please note: This is so early in development, I'm almost afraid to present it to another pair of eyes. Please don't judge on code organization, optimization issues or missing functionality yet** :smile:  

## How it works
Building a WordPress application is really cumbersome if you are used to modern PHP development: PHP7 is everywhere, Object oriented programming is pretty much default, frameworks use PSR standards and abstract so much that you almost forgot to work on low-level details.  
What many people seem to come up with to cope with this, is hacky, OOP themes, each with their own pitfalls, coding style and conventions.  

I believe the best way to produce a high-performance, easy to use and maintain WordPress application is to stick with the procedural, well-known "WordPress way". That's a problem though: Nobody likes to write and maintain a 1000+ lines functions.php. You can split the code up, you can write tons of helpers, but that doesn't change the fact that it's a frustrating development experience.

To solve this, I set out to create what I call a *meta generator*. Basically, *Foundation* provides a framework to describe your WordPress-based application in abstract terms, add dependencies, define a frontend workflow and provide installation defaults. Once you're done, it will output a complete, bundled, optimized and ready-to-deploy application. *Foundation* strictly adheres to WordPress best practices, conforms to the WordPress coding style when it writes actual code and ensures your code is as up-to-date and optimized as possible.  
You can stop thinking in terms of (mu-)plugins and themes - *Foundation* will intelligently take care of that, making sure the frontend logic goes into themes and all schema data (like post types, meta boxes etc.) into plugins.  
All code will be concatenated into the relevant `functions.php` or `plugin.php` to keep the results optimized - no more nested helper includes.

On a conceptual level, Foundation is exactly what it says: A foundation to build your projects on. If this works out as I intend it to, you'll never have to touch your functions.php again - kind of like nobody writes plain CSS anymore.

Look at the following code that attaches a new action to `init`:

````php
$myAction = new Action('example name', $callback);
$this->actions->add('init', $myAction);
````

What *Foundation* will write looks like this:

````php
function wpf_theme_name_0729171315_action_example($arg1, $arg2) {
  # content of $callback
}
add_action('init', 'wpf_theme_name_0729171315_action_example_name', 10, 2);
````

In development, you'll have full IDE support available: That's because *Foundation* defines WordPress as a dependency and runs all your code within a WordPress context. The actual code transformation is achieved using reflection - So while you just write the code you want to, *Foundation* intelligently uses the string content and builds your application from it.  
Additionally, every aspect of *Foundation* is configurable and extensible - From the console application accepting custom commands simply by dropping them below `app/Console/Commands`, overwriting default output templates by dropping them below `app/templates` to extending the `Generator` classes. There is extensive configuration with sensible defaults located below `app/config`.  
*Foundation* is written with a TDD workflow, so you can expect tested functionality to work. Run `peridot` to start the tests.


## Usage
The core of *Foundation* is the CLI application at `bin/foundation`: It controls the application dependencies, keeps track of changes (in the form of migrations), lets you quickly generate boilerplate code (kind of meta-meta) and kickstarts the build.  
On the first build, *Foundation* will download WordPress, build the folder structure and write out all required files - that'll obviously take some time. On subsequent builds, though, it only writes deltas, so you can expect changes to be written quickly.  
Due to *Foundation* using a CLI application, it can easily be integrated in other task runners: I plan on creating `gulp` and `grunt` plugins as well as a standard Makefile.

### General workflow
CLI preset => PHP meta code => JSON configuration => Themes/Plugins/Boilerplate

What this means is:
 - You can use the CLI to build basic boilerplate meta code as a first step. That will populate the `app` directory with several easy to use presets (post types, backend configuration etc.)
 - Next, you modify the meta code to fit your needs, if necessary. That will allow you control over anything, since the
   code will be transformed into the resulting output JSON. Here, you can use the fine-grained available configuration
   classes and extend them as necessary. All classes are ready to be serialized to JSON already.
 - As a last configuration step, the meta code will be transpiled to JSON configuration files. This has several
   advantages: Any particular option or schema change (more on that later) is **portable**. You can reuse the resulting
   JSON over and over again, as long as you don't expect it to be overly readable (no comments, after all).
 - Once the JSON files are ready, *Foundation* will transpile them into your common WordPress application.
 
Several things to note:  
*Foundation* essentially builds PHP code from templates as instructed by JSON files. The meta code mentioned above is a standalone framework to build these JSON files.  
This means you *can* skip the entire meta code if you want to and write JSON directly. Though the aim of the meta code is to create an easy framework to build your apps with, as readable and reusable as possible.

## Structure
 - `/app`: Holds your specific application logic
 - `/src`: Holds the generator framework itself
 - `/templates`: Holds the code template files 

### App
The app directory holds 

### Source

### Templates
Templates are actually [moustache](https://github.com/bobthecow/mustache.php) files, used as boilerplate to create PHP files. This allows to generalize the definitions for control structures.  
The top-level `/templates` folder will be extended with the templates defined in `/app/templates`, so you can overwrite the default templates.

## Current Todo-List, plans
After the basic functionality is given, I'd like to go into the optimization details: It is essential to deduplicate the code and minimize pathways between features. To do this, I plan to go as procedural as possible - it isn't necessary to write human-readable code anymore. That means, many functions can be combined or shortened into their purest form.

- [x] Working CLI
- [ ] Config files
- [ ] Read PHP code
- [ ] Render templates
