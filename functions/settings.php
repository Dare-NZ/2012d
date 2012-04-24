<?php
<<<<<<< HEAD
/*
if (!current_user_can('manage_options')) {  
    wp_die('You do not have sufficient permissions to access this page.');  
}  
*/
=======

if (!current_user_can('manage_options')) {  
    wp_die('You do not have sufficient permissions to access this page.');  
}  
>>>>>>> cbd76a282b3688fb5525e48bf8ae9b296ae2d84e


function setup_theme_admin_menus() {  
    add_menu_page('Theme settings', 'Example theme', 'manage_options',  
        'tut_theme_settings', 'theme_settings_page');  
  
    add_submenu_page('tut_theme_settings',  
        'Front Page Elements', 'Front Page', 'manage_options',  
        'tut_theme_settings', 'theme_front_page_settings');  
}  
  
function theme_settings_page() {  
  echo "Hello, world!";  
} 

function theme_front_page_settings() {  
    echo "Hello, world!";  
} 

add_action("admin_menu", "setup_theme_admin_menus");  

  

