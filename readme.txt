=== WpKicker ===

Contributors: automattic, bootstrap, wpgulp
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready

Requires at least: 4.5
Tested up to: 5.4
Requires PHP: 5.6
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE

A starter theme called WpKicker.

== Description ==

WordPress Starter theme which flies on the power of _S, Bootstrap 4, FontAwesome and WP Gulp

== Theme Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Dev Notes ==

* Rename WpKicker to your project name
* Before Running NMP Start command, remove not needed styles or scripts (Bootstrap, FontAwesome...)

* 1. Install WPGulp in your WordPress theme/plugin. Use "npx wpgulp"

* 2. Configure the project paths and other variables inside the wpgulp.config.js file. This is a compulsory step.
* 2.1 - Add additionial Packages (inside package.json) needed for this project and include them

* 3. Start your npm build workflow. Use "npm start"
* 3.1 # To stop press CTRL (⌃) + C
* 3.2 - To optimize images use "gulp images"
* 3.3 - To generate WP POT translation file use "gulp translate"
* 3.4 - To generate RTL stylesheets and Sourcemap use "gulp stylesRTL"

== Dev Frequently Asked Questions ==

* Download all the latest files in the WPGulp/src folder inside the root folder of your WordPress plugin/theme by running npx install-wpgulp it will overwrite all the wpgulp files.

* Open terminal and Install WPGulp's node dependencies by running the npm install commands in the root folder of your WordPress plugin/theme.
 

== General Theme Frequently Asked Questions ==

= Does this theme support any plugins? =

WpKicker includes support for WooCommerce and for Infinite Scroll in Jetpack.

== Changelog ==

= 1.0 - May 12 2020 =
* Initial release

== Credits ==

* Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html) 
* Bootstrap  https://getbootstrap.com/
* WPGulp https://github.com/ahmadawais/WPGulp/