<?php
/*
Plugin Name: IP Access Notification
Version: 1.0
Plugin URI: http://www.schloebe.de/
Description: Sends out an email to the blog admin when a user accesses the blog with a certain IP address.
Author: Oliver Schl&ouml;be
Author URI: http://www.schloebe.de/
*/

function os_ip_check() {
    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    $zugriff_ort = $_SERVER['REQUEST_URI'];
    $notify_ips = array("xxx.xxx.xxx.xxx"); // IPs to check for
    if ( in_array( $visitor_ip, $notify_ips ) ) {
        $absender = get_option('admin_email');
        $empfaenger = get_option('admin_email');
        $betreff = "New blog access from IP " . $visitor_ip . " on " . wp_specialchars( get_option('blogname') );
        $headers = "From: " . wp_specialchars( get_option('blogname') ) . " <$absender>\n";
        $headers .= "Content-Type: text/html\n";
        $headers .= "Content-Transfer-Encoding: 8bit\n";
        $mailtext = "New access on " . wp_specialchars( get_option('blogname') ) . " with IP " . $visitor_ip . " on page " . $zugriff_ort;
        if( !isset( $_COOKIE["wp_ip_access_" . COOKIEHASH] ) ) {
            setcookie( "wp_ip_access_" . COOKIEHASH, $visitor_ip );
            mail($empfaenger, $betreff, $mailtext, $headers);
        }
    }
}

add_action('init', 'os_ip_check');
?>