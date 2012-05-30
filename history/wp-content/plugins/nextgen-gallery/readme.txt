=== NextGEN Gallery ===
Contributors: alexrabe
Donate link: http://alexrabe.de/donation/
Tags: photos,flash,slideshow,images,gallery,media,admin,post,photo-albums,pictures,widgets,photo,picture,image,nextgen-gallery,nextgen gallery
Requires at least: 3.2
Tested up to: 3.3
Stable tag: trunk

NextGEN Gallery is a fully integrated Image Gallery plugin for WordPress with dozens of options and features.

== Description ==

NextGEN Gallery is a fully integrated Image Gallery plugin for WordPress with a slideshow option. Before I started writing the plugin I studied all the existing image and gallery plugins for WordPress. 
Some of them are really good and well designed, but the gap I filled was a simple administration system at the back end which can also handle multiple galleries.

[Demonstration](http://nextgen-gallery.com/) |
[FAQ](http://alexrabe.de/wordpress-plugins/nextgen-gallery/faq/)|
[Support](http://wordpress.org/tags/nextgen-gallery?forum_id=10)|
[Translations](http://code.google.com/p/nextgen-gallery/downloads/list?q=label:Translation)

= Features =

* Templates : You can add custom templates for your theme.
* Media RSS feed : Add the Cooliris Effect to your gallery
* Role settings : Each gallery has a author
* AJAX based thumbnail generator : No more server limitation during the batch process
* Copy/Move : Copy or move images between galleries 
* Sortable Albums : Create your own sets of images 
* Upload or pictures via a zip-file (Not in Safe-mode)
* Watermark function : You can add a watermark image or text 
* JavaScript Effect : Use any available popular image effect : Shutter, Thickbox, Lightbox or Highslide
* Multiple CSS Stylesheet : Use a nice shadow effect for your thumbnails with your own CSS file 
* Slideshow : Full integrated slideshow as jQuery or Flash solution
* TinyMCE : Button integration for easy adding the gallery tags
* Sidebar Widget : Show a slideshow, random or recent picture at your sidebar 
* Language support : Translated in more than 30 languages
* Translation downloader : Download with one click the new translation file
* Upload tab integration : You have access to all pictures via the upload tab
* Tag support for images : Append related images to your post, create a image tag-cloud
* Meta data support : Import EXIF, IPTC or XMP meta data 
* Sort images feature
* Support for XML Sitemaps : Add Images to your sitemaps with the <a href="http://wordpress.org/extend/plugins/wordpress-seo/" title="WordPress SEO by Yoast plugin">WordPress SEO by Yoast plugin</a>

== Credits ==

Copyright 2007-2012 by Alex Rabe & NextGEN DEV-Team

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

** Please note **

The JW Image Rotator (Flash Slideshow) is not part of this license and is available
under a Creative Commons License, which allowing you to use, modify and redistribute 
them for noncommercial purposes. 

For commercial use please look at the Jeroen's homepage : http://www.longtailvideo.com/

== Installation ==

1. 	Install & Activate the plugin

2.	Add a gallery and upload some images (the main gallery folder must have write permission)

3. 	Go to your post/page an enter the tag '[nggallery id=x]' or '[slideshow id=x]'.	See more tags in the FAQ section

That's it ... Have fun

http://www.youtube.com/watch?v=Le_ZsNSuIvM

== Screenshots ==

1. Screenshot Admin Area 
2. Screenshot Album Selection
3. Screenshot Shutter Effect
4. Screenshot Watermark function
5. Screenshot Flexible template layout
6. Screenshot Show Exif data

== Frequently Asked Questions ==

When writing a page/post, you can use the follow tags:

For a slideshow : **[slideshow id=x w=width h=height]**

Example : http://nextgen-gallery.com/slideshow/

For a album : **[album id=x template=extend]** or **[album id=x template=compact]**

Example : http://nextgen-gallery.com/album/

For a gallery : **[nggallery id=x]**

Example : http://nextgen-gallery.com/gallery-page/

For a single picture : **[singlepic id=x w=width h=height mode=web20|watermark float=left|right]**

Example : http://nextgen-gallery.com/singlepic/

For a image browser : **[imagebrowser id=x]**

Example : http://nextgen-gallery.com/image-browser/

To show image sorted by tags : **[nggtags gallery=mytag,wordpress,... ]**

Example : http://nextgen-gallery.com/gallery-tags/

To show tag albums : **[nggtags album=mytag,wordpress,... ]**

Example : http://nextgen-gallery.com/albumtags/

To show random mages : **[random max=x ]**

To show the most recent added mages : **[recent max=x ]**

**A further FAQ you can found here :** http://alexrabe.de/wordpress-plugins/nextgen-gallery/faq/

**And at least request your question here :** http://wordpress.org/tags/nextgen-gallery?forum_id=10

== Changelog == 

= V1.9.3 - 26.02.2012 =
* Bugfix : Ensure to set the slug for "all" albums
* Bugfix : Updated german translation ( THX to Roger Hunziker )
* Bugfix : Ensure error checking on IPTC array (THX to Kristian Edlund)
* Bugfix : Handle IE8 cached images better in slideshow
* Bugfix : Show album preview image if selected  (THX to Kristian Edlund)

= V1.9.2 - 17.01.2012 =
* NEW : Added more XMLRPC commands (THX to Vladimir Vinogradsky)
* Changed : Rework Post-thumbnail function (THX to Kristian Edlund)
* Bugfix : Check first for valid images on unzip (only Mac OS zip-files)
* Bugfix : Increase z-index for twenty eleven theme
* Bugfix : Support non latin chars in tagcloud
* Bugfix : Allow other tinymce intance
* Bugfix : Better support for WPML translation

= V1.9.1 - 10.12.2011 =
* Bugfix : Security hardness for untrusted filenames/meta data (THX to Brian St. Pierre)
* Bugfix : Fixed security vulnerability (TXH to Jon Cave)
* Bugfix : Load piclens script via other function
* Bugfix : IE7 script fix for add gallery 
* Bugfix : IE7/IE8 width set correctly for edit album autocomplete field

= V1.9.0 - 27.11.2011 = 
* NEW : Keep images transparency for PNG and GIF format
* NEW : Switch to Plupload, support now HTML5 Upload (only with WordPress 3.3)
* NEW : Added client side resize feature (only with WordPress 3.3)
* NEW : Support for gallery templates in album shortcodes [ album id=x template="name" gallery="templatename" ]
* NEW : Added new hook ngg_delete_picture
* Changed : Updated to jQuery Cycle Version 2.9995
* Changed : Always cache the single pictures, remove option
* Bugfix : Couldn't use bulk operation for search results
* Bugfix : Bugfix for Edit thumbnails under IE 8 + 9
* Bugfix : Allow empty altext in ngg.editImage
* Bugfix : Various PHP notice fixes
* Bugfix : Resize fix for Shutter effect and mobile Browser
* Bugfix : FTP Import missing slug field into database
* Bugfix : Check also EXIF field "DateTimeOriginal" for timestamp

= V1.8.4 - 26.10.2011 =
* Bugfix : Fixed security vulnerability (TXH to Alain Schneider)

= V1.8.3 - 07.08.2011 =
* Changed : Support for simple custom permalink structures (i.e. /%category%/%postname%/)
* Bugfix : Sub-Albums in Albums didn't create the correct link 
* Bugfix : AJAX Pagination didn't work anymore
* Bugfix : Adding index.php to home_url()
* Bugfix : Preview picture lost on backend gallery page 2 or higher

= V1.8.2 - 12.07.2011 =
* Bugfix : Set pagination variables for search result, otherwise update failed
* Bugfix : Update failed for paged galleries since WordPress 3.2

= V1.8.1 - 18.06.2011 =
* Bugfix : Special case for pagination, instead of showing page-1, we show the clean url
* Bugfix : Various PHP notice fixes
* Bugfix : Typo in rewrite rules
* Bugfix : Flush rewrite rules during upgrade later

= V1.8.0 - 12.06.2011 =
* NEW : Full rework of permalink url structure
* NEW : Adding Google Sitemaps for Images (require WordPress SEO plugin by YOAST )
* NEW : Support for WPML ( WordPress Multilingual Plugin )
* NEW : Adding support for arrow key in shutter effect (THX to Flyvans)
* NEW : Adding sort operation for galleries overview page
* Changed : Updated pagination to new WP3.1 style
* Bugfix : Create unique slug in a better way
* Bugfix : Rework screen options filter for gallery and image table 
* Bugfix : Empty values in XMLRPC update calls are ignored
* Bugfix : Create gallery failed when safe-mode on
* Bugfix : Permalink didn't work in combination with album & imagebrowser

= V1.7.4 - 15.02.2011 =
* Bugfix : Disallow direct call of ajax file to avoid path disclosure (THX to High-Tech Bridge SA)
* Bugfix : Rework jQuery Cycle slideshow for IE compat reason (THX to Justin Dickenson)
* Bugfix : Resize only larger images in slideshow
* Bugfix : Improved image format detection in gd.thumbnail class (THX to Kupar.b)

= V1.7.3 - 20.01.2011 =
* NEW : Introduce plugin health check for conflicts with other plugins/themes
* NEW : Adding new XMLRPC method ngg.deleteImage
* NEW : Adding new XMLRPC method ngg.editImage
* Changed : Rework register script for autocomplete feature
* Bugfix : Bugfix for Multisite setup and flash upload
* Bugfix : WP3.1 compat issue, show site admin page only on Multisite installation

= V1.7.2 - 13.12.2010 =
* Bugfix : Adding images to database require slug (NOT NULL)

= V1.7.1 - 13.12.2010 =
* Changed : Disable upgrade for PHP4 user
* Changed : Disable colorpicker for option page
* Bugfix : Compat fix for upgrade

= V1.7.0 - 11.12.2010 =
* NEW : Publish a new post direct from the gallery admin page
* NEW : Added filter hook 'ngg_get_image_metadata' to add more exif/iptc information
* NEW : Adding Autocomplete field to TinyMCE Popup and Album page
* NEW : More methods for XMLRPC interface
* Changed : New hooks for gallery table (THX to Alexander Schneider)
* Changed : Introduce jQuery dialog as new UI element
* Changed : Call TinyMCE window via admin-ajax
* Bugfix : Better support for SSL blogs
* Bugfix : Install/Upgrade failed when table prefix contain captial letters
* Bugfix : Fix validation issues in Media-RSS
* Bugfix : Empty tags in XMP Meta causes PHP error
* Bugfix : Rework load mechanism for slideshow
* Bugfix : Copy meta data when image is copied
* Bugfix : Icon Support for Ozh' Admin Drop Down Menu
* Bugfix : Use correct sort order in slideshow

= V1.6.2 - 19.09.2010 =
* NEW : Added constant NGG_SKIP_LOAD_SCRIPTS to avoid script load
* Bugfix : Load Tags library with core files
* Bugfix : Slideshow script failed in IE7, load script now in header
* Bugfix : Load slideshow widget always
* Changed : New admin notice for database upgrade
* Changed : Rework crop feature for featured images
* Changed : Use site_url() instead get_option ('siteurl'), required for SSL support

= V1.6.1 - 08.09.2010 =
* Bugfix : Script load of swfobject.js failed
* Bugfix : Show sideshow also with 1 or 2 images
* Bugfix : Rework null byte check in zip upload

= V1.6.0 - 07.09.2010 =
* NEW : Wordpress 3.0 Network (Multi-Site) support
* NEW : Integrate jQuery Cycle as NON-Flash slideshow 
* NEW : Adding jQuery File Tree for import folder (THX to Sergey Pasyuk )
* NEW : Added action hook 'ngg_show_imagebrowser_first' on custom request
* NEW : Added filter hook 'ngg_slideshow_size' to resize sildeshow for mobile browser plugins
* Changed : Reorder tabs for upload
* Changed : New menu icon and screen icon (THX to Ben Dunkle)
* Changed : Load frontend libs always
* Changed : Rework of overview page
* Bugfix : Security bugfix for Zip-Upload (THX to Dominic Szablewski)
* Bugfix : Allow JPG, PNG, GIF extension
* Bugfix : New German translation (THX to Martin Kramarz)
* Bugfix : Copy/Move also backup file
* Bugfix : Calculate correct ratio for fix thumbnail size (THX to Alekz Keck)

= V1.5.5 - 14.06.2010 =
* Bugfix : Compat issue for post thumbnails with WP2.9
* NEW : Adding more hooks for custom fields plugin

= V1.5.4 - 14.06.2010 =
* Bugfix : No resize of smaller images
* Bugfix : Compat issues for Post Thumbnails under WP3.0
* Bugfix : Esc_URL in Media RSS

= V1.5.3 - 11.04.2010 =
* New : Adding pagination to footer
* Changed : Perpare new filter to replace slideshow
* Bugfix : Remove non-breaking space from navigation
* Bugfix : Pagination of galleries
* Bugfix : Fixed brackets position for old shortcode query 
* Bugfix : Slideshow option 'Show next image on click" has wrong default value 

= V1.5.2 - 25.03.2010 =
* Bugfix : XSS security vulnerability (THX to Core Security Advisories Team , Pedro Varangot) 
* Bugfix : Missing $wpdb in shortcodes.php

= V1.5.1 - 23.03.2010 =
* Bugfix : PHP4 compat issue for Add gallery & options page
* Bugfix : Gallery widget can now have a empty title
* Bugfix : Adding correct stripslash for gallery title

= V1.5.0 - 18.03.2010 =
* NEW : Support for Post thumbnail feature
* NEW : Backup and Recover function for images (THX to Simone Fumagalli)
* NEW : Resize images after upload (THX to Simone Fumagalli)
* NEW : Added a JSON class for fetching galleries in a RESTful way (see xml/json.php)
* NEW : Adding various new capabilities for user roles
* NEW : Auto downloader for translation file
* Changed : Rename query var from slideshow to callback for compat reason with other plugin
* Changed : Convert widget function to new WP structure
* Changed : Include lookup for tags into the backend search 
* Changed : Restructure addgallery and settings page to enable custom tabs
* Bugfix : Select album preview from gallery preview pics instead random list
* Bugfix : Keep fix dimension in edit thumbnail operation
* Bugfix : Import meta data didn't work correct for existing images
* Bugfix : Fix onload bug for Chrome 4 in Shutter script
* Bugfix : Remove various PHP notices for a better world
* Removed : Canonical link is now part of Wordpress 2.9

== Upgrade Notice ==

= 1.5.5 =
Compat issue for post thumbnails with WP2.9 and WP3.0. No Database changes...
