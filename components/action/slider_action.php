<?php
require "../components/QueryBuilder.php";
$config = require "../config.php";


$db = new QueryBuilder($config["database"]["host"], $config["database"]["dbname"], $config["database"]["username"], $config["database"]["password"]);


$slider_controller = new SliderController();
var_dump($slider_controller);