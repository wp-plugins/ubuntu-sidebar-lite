<?php
/**
 * @package ubuntu-sidebar-lite
 * @version 0.1
 */
/*
Plugin Name: Ubuntu sidebar lite
Plugin URI: http://wordpress.org/plugins/ubuntu-sidebar-lite
Description: When activated, this plugin will put a Ubuntu sidebar lite on the right side of your website.
Author: Željko Popivoda
Version: 0.1
License: GPLv2
Author URI: http://popivoda.com
*/

function render_ubuntu_sidebar_lite() {
	$ubuntucom_url = plugins_url('images/ubuntu-com.png', __FILE__ );
	$ubuntuloco_url = plugins_url('images/ubuntu-loco.png', __FILE__ );
	$whyubuntu_url = plugins_url('images/why-ubuntu.png', __FILE__ );
	$ubuntutour_url = plugins_url('images/ubuntu-tour.png', __FILE__ );
	$downloadubuntu_url = plugins_url('images/download-ubuntu.png', __FILE__ );
	$ubuntudvd_url = plugins_url('images/ubuntu-dvd.png', __FILE__ );	
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 148 : 120;
	} else {
		$padding_top = 120;
	}
	echo "
		
	<div id='ubuntuSidebarLite' style='position:fixed; top:".$padding_top."px; right:-3px; z-index:10000; cursor: pointer; border:none;'>
	
	<div class='ubuntuNetwork'>
	<a target='_blank' title='Ubuntu' href='http://www.ubuntu.com/'>
	<img style='z-index: 10000;' src='{$ubuntucom_url}' /></a></div>
	
	<div class='ubuntuNetwork'>
	<a target='_blank' title='Ubuntu LoCo' href='http://loco.ubuntu.com/'>
	<img style='z-index: 10000;' src='{$ubuntuloco_url}' /></a></div>
	
	<div class='ubuntuNetwork'>
	<a target='_blank' title='Why use Ubuntu' href='http://www.ubuntu.com/ubuntu/why-use-ubuntu'>
	<img style='z-index: 10000;' src='{$whyubuntu_url}' /></a></div>
	
	<div class='ubuntuNetwork'>
	<a target='_blank' title='Ubuntu online tour' href='http://www.ubuntu.com/tour'>
	<img style='z-index: 10000;' src='{$ubuntutour_url}' /></a></div>
	
	<div class='ubuntuNetwork'>
	<a target='_blank' title='Download Ubuntu' href='http://www.ubuntu.com/download'>
	<img style='z-index: 10000;' src='{$downloadubuntu_url}' /></a></div>
	
	<div class='ubuntuNetwork'>
	<a target='_blank' title='Get Ubuntu CD/DVD' href='http://shop.canonical.com/index.php?cPath=17'>
	<img style='z-index: 10000;' src='{$ubuntudvd_url}' /></a></div>
	
	</div>
	
	<style>
	.ubuntuNetwork:hover {
	margin-left:-3px;
	}
	</style>
	
	";
}
add_action('wp_footer', 'render_ubuntu_sidebar_lite');
