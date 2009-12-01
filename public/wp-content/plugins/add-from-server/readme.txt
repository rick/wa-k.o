=== Add From Server ===
Contributors: dd32
Tags: 2.5, admin, media, uploads, post
Requires at least: 2.7
Stable tag: 2.1

"Add From Server" is a quick plugin which allows you to import media & files into the WordPress uploads manager from the Webservers filesystem

== Description ==

Note: Requires WordPress 2.7 for version 2.0+, If you're using WordPress 2.6, get version 1.4 from http://wordpress.org/extend/plugins/add-from-server/download/

WordPress 2.5+ includes a new Media manager, However, It only knows about files which have been uploaded via the WordPress interface, Not files which have been uploaded via other means(eg, FTP).

So i present, "Add From Server" a WordPress plugin which allows you to browse the filesystem on the webserver and copy any files into the WordPress uploads system, Once "imported" it'll be treated as any other uploaded file, and you can access it via the Media 

Note: French, Spanish, German, Persion, Italian and Russian translations are included. I cannot nativly speak these languages, If you find an error, or would like me to add your translation, You can contact me via: http://dd32.id.au/contact-me/

== FAQ ==

 Q. Where is the page for this plugins?
 A. You can find the page for this plugin in the Add-Media dialogue. The Add Media dialogue is accessable via the New Post/New Page screen, They're the Icons beside the Visual/HTML tab option. Under 2.7, There is also a tab under Media.

 Q. What happens when I import a file?
 A. When a file is imported, It is first Copied to the /wp-content/uploads/ folder and placed in the current months folder. The date will be set to today.

 Q. What happens when I import a file which is allready in the uploads folder?
 A. If a file is allready in the uploads folder, Then it is not copied anywhere, Instead, the file will stay in its current location, and the date for the media manager will be taken from the URL (ie. import a file in /uploads/2008/01/ and it will be stored in the media library as January 2008)

== Changelog ==

= 1.0 =
 * Initial Release
= 1.1 =
 * Fixed a bug which causes the original import file to be deleted upon removing from the media library, The file in /uploads/2008/03/ remains however. Will now delete the file in the uploads folder instead of the original imported file, However, Be warned, files previously imported WILL remain as they are, and the original import file will be deleted(if you delete from the media library)
= 1.2 =
 * Fixed filename oddness including old directory names
 * Added a check to see if the file exists in the Media library allready
 * Added a check to see if the file is allready in the uploads folder before importing, and if so, simply add it to the database, do not mash the filesystem
= 1.3 =
 * Internationalisation; French translation
 * Internationalisation; Spanish translation
 * Checkbox select all
 * Import into non-post attachment
= 1.3.2 =
 * French translation changes from Ozh & Olivier
 * Fixed the checkbox list for certain unknown browsers.
= 1.4 =
 * German Translation
 * More stuffing around with the checkbox that doesnt work for anyone, yet works on every test system i've tried
 * Set the date on imported files to that of their uploads folder
= 2.0 =
 * Requires WordPress 2.7+ (From now on, My Plugins will only be supported for the current stable branch)
 * WP2.7 SSL Support
 * WP2.7 checkbox support
 * WP2.7 upload modifications
 * WP2.7 Styling
 * Files/folders are sorted by name
 * Update Notification changelogs (On the plugins page)
 * Completely rewritten, Hopefully this'll fix some long-time bugs which have affected some.
 * Persion translation from sourena
 * Italian translation from Stafano
= 2.0.1 =
 * Russian Translation from Lecactus
= 2.1 =
 * Introduce QuickJump
 * Fix bugs related to the Admin navigation disapearing
 * Fix bugs related to hints showing up linking to the wrong page
 * Do not show the Inline uploaders tabs in the normal uploader :)
 * Fix 2.8.1's plugin security mashes..

== Future Features ==
Please note that these are simply features i'd like to do, There is no timeframe, or guarantee that it will be in the next version.
1. Watch folder, New files detected in the watch manager automatically get imported
1. The ability to select a file and switch directly to adding it to the post

== Screenshots ==

1. The import manager