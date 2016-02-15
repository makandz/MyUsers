<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
include("models/menu.php");
include("include/html-templates/admin_plugin.php");
?>