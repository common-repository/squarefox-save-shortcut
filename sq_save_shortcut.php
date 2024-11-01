<?php
/*
Plugin Name: SquareFox Save Shortcut
Plugin Script: sq_save_shortcut.php
Plugin URI: https://github.com/orangepixel/wp_sq_save_shortcut
Author: squarefox - Maurix Suarez
Author URI: http://gosquarefox.com/
Donate link: https://paypal.me/squarefox
Tags: keyboard,save,shortcut,simple,command
Version: 1.0.9
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Description: Keyboard shortcut -- CTRL + S or COMMAND + S to save
*/

//Security entry
define('SQUAREFOX',1);


//using a class avoids conflicts with loose functions
class SquareFoxSaveShortcut {

	function __construct(){
		
		if(is_admin()){
			
			add_action('admin_enqueue_scripts', function(){
				wp_enqueue_script('sq-save-shortcut', plugin_dir_url(__FILE__) . '/sq_save_shortcut.js');
				return;
			});
			
		}

		return;
				
	}
	
}
//init the class
$saveShortcut = new SquareFoxSaveShortcut();


?>