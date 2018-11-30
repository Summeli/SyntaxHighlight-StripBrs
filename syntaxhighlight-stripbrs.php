<?php
/*
Plugin Name: SyntaxHighlight StripBrs
Depends: syntaxhighlighter
Description: Plugin that configures SyntaxHighlight to Strip Brs
*/

function add_js_config() {
    wp_register_script( 'syntaxhighlighter_config', 
                       plugins_url('syntaxhighlightstripbrs.js',__FILE__), 
                       array('jquery','syntaxhighlighter'), 
                       '1.0', 
                       true);
    wp_enqueue_script('syntaxhighlighter_config');
}   


add_action( 'wp_enqueue_scripts', 'add_js_config' );
?>

