=== Momtaz Nmwdhj ===
Contributors: alex-ye
Tags: forms, api, html, settings, options, momtaz
Requires at least: 3.1
Tested up to: 3.6
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Momtaz Nmwdhj is an API for creating forms elements via code.

== Description ==

= Important Notes: =
1. This plugin requires PHP 5.3.x
2. This plugin is for developers, not general users.

Momtaz Nmwdhj is an API for creating, editing and rendering forms programatically.
This plugin doesn't have a GUI, It's only a helper library for the PHP & WP developers.

You can use this plugin to create individual form elements in the meta boxes, front-end, or anything else you might want a form for.

Momtaz Nmwdhj is keeping things as small and light as possible while still allowing for great add-on features. What does all that mean? Momtaz Nmwdhj is lean, mean, and ready to make your job easier.

= TODO List: =
* Throw the PHP Exceptions when needed.
* Add more WP filters and actions when needed.
* Develop a better and easier way to decorate an element.
* Implement some methods to control the 'class' attribute.
* Implement Momtaz_Nmwdhj_Form and Momtaz_Nmwdhj_Fieldset classes.
* Register some WP shortcodes to create the forms elements easily.
* Implement a smarter way to late-translate the titles and labels using the WP l18n functions.

== Installation ==

1. Upload and install the plugin
2. Use the rich API to powerfull your theme/plugin.

== Basic Usage ==

You can use this plugin in many ways depending on your needs, this examples only for the most common usage cases.

= -Creating an element =

`
// Creating the element object.
$element = Momtaz_Nmwdhj::create_element( 'input_text' )
                ->set_value( get_bloginfo( 'name' ) )
                ->set_name( 'blog_name' );

// Output the element markup.
$element->output();
`

= -Decorating an element =

`
// Decorating the element with label.
$element = Momtaz_Nmwdhj::decorate_element( 'label', $element )
                ->set_label( __( 'Blog name:' ) );

// Output the decorated element markup.
$element->output();
`

== Frequently Asked Questions ==

= What this plugin for? =

Momtaz Nmwdhj is an API for creating forms elements via code.

= Why I build the Momtaz Nmwdhj? =

In the past creating the meta-boxes/theme-settings options or even the front-end forms, was dirty,hard and heavy!

I searched for a good/clean/easy library to build the HTML forms easily, to make my theme/plug-in Forms more clever and elegant!, but unfortunately most the plug-ins I found was very complicated and hard to develop, I start thinking to use the 'Zend Forms' but the idea of loading the Zend Framework just to use the Zend Forms looks like a stupid idea!

So I started to build my own plug-in, I focused to made it easy,simple and fast!

== Changelog ==

= 1.0 =
* The Initial version.