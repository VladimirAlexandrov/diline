<?php
/*
Plugin Name: UCWords in Plugin
Description: меняет маленькие на большие буквы
*/


add_filter('the_title', 'myfunc');

function myfunc($title){
	$title = ucwords($title);
	return $title;
}

function replacetitle($title){
	global $str;
	

}




?>