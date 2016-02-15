<?php

$plugin_directory = "include/plugins/inc/";
$plugins = glob($plugin_directory . "*.php");

foreach ($plugins as $plugin){
	$row[$plugin] = $plugin;
}

foreach ($row as $pluginCatch){
	include($pluginCatch);
}

?>