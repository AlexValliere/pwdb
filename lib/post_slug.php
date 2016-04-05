<?php
require_once(PWDB_LIB_DIR . 'remove_accent.php');

function post_slug($str) 
{
	return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), 
	array('', '_', ''), remove_accent($str))); 
}
?>