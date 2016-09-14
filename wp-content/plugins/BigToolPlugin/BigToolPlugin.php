<?php 
/*
Plugin Name: BigToolPlugin
Description: 
*/


function filter_my_bazar($text){
	$badwords = array('козел', 'баран');
	$text = str_ireplace($badwords, '***', $text);
	return $text;

}
#add_filter('the_title', 'filter_my_bazar');
add_filter('the_content', 'filter_my_bazar');

function action_attention_text(){
	$attention = "Внимание! Ваш блог под цензурой";
	echo "<p style='color: red'>$attention</p>";
}

add_action('admin_notices', 'action_attention_text');

function email_friends($email){
	$friends = 'ghtcdesx@gmail.com';
	mail($friends, "test email messaging", 'lalalalalala');

	add_action('emailer', 'mail');
}

?>