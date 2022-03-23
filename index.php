<?php

$name = $_GET["name"] ?? "World";
$version = phpversion();
echo "Hello ".$name." from PHP v".$version;

?>