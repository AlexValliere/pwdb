<?php
function loadClass($classname)
{
	require_once(PWDB_HOME_DIR . 'models/' . $classname . '.class.php');
}

spl_autoload_register('loadClass');
?>