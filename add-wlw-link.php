<?php 
 /* 
 Plugin Name: Add WLW Link
 Plugin URI: http://fedom.jp/plugin 
 Description: This plugin append WLW Link below with a-tag on your single post page.
 Author: mitsuo0114
 Version: 0.1 
 Author URI: http://blog.fedom.jp
 */ 
 
 function add_wlw_link($content){
   if ( is_user_logged_in() && is_single() ) {
     $blog_url = site_url('','http');
     $wlw_url = str_replace('http://', 'wlw://', $blog_url);
     return '<a href="' . $wlw_url . '/?postid=' . get_the_ID() .'" target="_blank">Edit with WLW</a>' . $content;
   }else{
     return $content;
   }
 }

 add_filter('the_content', 'add_wlw_link');

?>