<?php
include_once "lib/load.php";
get_file("head");
get_file("header");
get_file(basename($_SERVER['SCRIPT_NAME'], '.php'));
get_file("footer");
?>
