# Ransom WordPress Starter Theme

Ransom is a WordPress starter theme built by [Staple Web Design](http://www.staplewebdesign.com). It includes some of the most common elements of my WordPress Theme Development projects, and tries to stick with less vs more.

## Dependancies
* [Sass](http://sass-lang.org)
* [Bourbon](http://www.bourbon.io) and [Neat](http://neat.bourbon.io)
* [Gulp](http://gulpjs.com) (simply remove package.json and gulpfile.js if you'd like to compile sass without Gulp)

## Getting Started
This is targeted towards my workflow, but you can easily remove the need for Sass, Bourbon, Gulp, etc. If you have any questions on how simply ask nicely on twitter [@AndyStaple](http://twitter.com/andystaple)

Install dependancies. Check out the link to sass-lang.org above for info on how to install Sass, Gulp, and other dependencies. Depending on your computer, it'd go something like this.

`$ sudo gem install sass`

`$ gem install bourbon`

`$ gem install neat`

`$ npm install --global gulp`

Next navigate in your terminal to your Ransom directory and run
`$ npm install`

This will install all dev dependencies for Gulp, which are listed in the `package.json` file. That is about it, now you should be just about set to start using gulp to watch your theme scss files.

## Additional Info

### Theme Wrapper
This theme makes use of a Theme Wrappper (wrapper.php) to keep things a bit more DRY than your typical WP theme. [More info on Theme Wrappers](http://scribu.net/wordpress/theme-wrappers.html)
