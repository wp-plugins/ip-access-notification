=== IP Access Notification ===
Contributors: Alphawolf
Donate link: http://www.schloebe.de/donate/
Tags: ip, notification, frontend, admin, email
Requires at least: 1.5
Tested up to: 2.6
Stable tag: trunk

Sends out an email to the blog admin when a user accesses the blog with a certain IP address.

== Description ==

**Discontinued**

Sends out an email to the blog admin when a user accesses the blog with a certain IP address. The email will be sent out only once a visitor's browser session to avoid email spam to you. ;-)

There's only one thing to be edited in order to make this work properly. Line 14:

`<?php $notify_ips = array("xxx.xxx.xxx.xxx"); // IPs to check for ?>`


That's where you put the IP(s). If you want to check for more than one IP, add more like that:

`<?php $notify_ips = array("xxx.xxx.xxx.xxx", "xxx.xxx.xxx.xxx", "xxx.xxx.xxx.xxx"); // IPs to check for ?>`


You may also find this plugin helpful: [Cookie Access Notification](http://wordpress.org/extend/plugins/cookie-access-notification/)

**Want update feeds, code documentation and more? Visit [extend.schloebe.de](http://extend.schloebe.de)**

== Installation ==

1. Download the plugin and unzip it.
2. Upload the folder ip-access-notification/ to your /wp-content/plugins/ folder.
3. Activate the plugin from your WordPress admin panel.
4. Installation finished.

== Usage ==

Inside the plugin file ip-access-notification.php, there's only one thing to be edited in order to make this work properly. Line 14:

`<?php $notify_ips = array("xxx.xxx.xxx.xxx"); // IPs to check for ?>`


That's where you put the IP(s). If you want to check for more than one IP, add more like that:

`<?php $notify_ips = array("xxx.xxx.xxx.xxx", "xxx.xxx.xxx.xxx", "xxx.xxx.xxx.xxx"); // IPs to check for ?>`