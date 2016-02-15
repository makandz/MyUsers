<?php
/*
MyUsers: v0.27b
UserCake: v2.0.2
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
include("models/menu.php");
include("include/html-templates/index.php");
include("models/plugins.php");
?>