# WordPress Basis Theme
Basis provides a highly customizable starting point for your theme development

## Descripton
Basis has been built to make theme development for WordPress easier. If you are an experienced theme developer or a total beginner, Basis provides a highly customizable starting point for your theme development and give your the typicly development with WordPress by use Hooks. Basis comes with a pre-defined set of templates, no styles or style-framework for pure development. The theme is widget-ready and introduces a number of custom functions.

Basis has an long tradition, development and maintenance since 2007 - see on the [project page](http://wpbasis.de).
The new version with the codename `namespace` ;) is usable, but changed in the course of time.

* The plugin have a lot of hooks, always startet with `wp_basis_`
  * also the next string is the string of the template `wp_basis_single_`
  * the next string on the hook logic is 'before' or 'after' an element in the markup, sometimes 'content' - `wp_basis_single_before_content`
* the `functions.php` is current only for check the functions, include a minimium from the often used defaults;
  * older solutions do you find in the `classes-old` in branch `stacker`

## Installation
### Requirements
* WordPress (also Multisite) version 3.3 and later (tested at 3.4)
* PHP 5.3 (use PHP namespaces)

## Grunt usage
### What is Grunt?
Grunt is a JavaScript task runner. For a detailed description see [Grunt.js homepage](http://gruntjs.com/).

### Requirements
* [Node.js](http://nodejs.org/)

### Installation
It's quite simple. After Node.js installation, just run the following command (in the theme's folder, where the `package.json` file is located):
```shell
npm install
```
The Node Package Management (npm) will read the `package.json` and will install all the packages listed in the `devDependencies` object.

### Usage
By default, there's one main task configured: `default`. For configuration see `Gruntfile.js`. In the command line, you can run
```shell
grunt
```
Grunt will watch all JavaScript and CSS files within the `assets` folder. If a file is changed and saved, Grunt will run `jshint` for JavaScript files and `cssmin` for CSS files automatically. Feel free to edit the configuration :)

## Other Notes
### Licence
Good news, this plugin is free for everyone! Since it's released under the GPL, you can use it free of charge on your personal or commercial blog.

### Contact & Feedback
The plugin is designed and developed current by me ([Frank Bültge](http://bueltge.de))

Please let me know if you like the plugin or you hate it or whatever ... Please fork it, add an issue for ideas and bugs.

### Disclaimer
I'm German and my English might be gruesome here and there. So please be patient with me and let me know of typos or grammatical farts. Thanks