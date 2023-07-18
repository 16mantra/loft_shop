<?php
session_start();

require "../components/QueryBuilder.php";
require "../components/controllers/SliderController.php";
require "../components/controllers/CategoryController.php";
require "../components/controllers/ProductController.php";
require "../components/Router.php";
require "../components/helpers.php";

$config = require "../config.php";
$db = new QueryBuilder($config["database"]["host"], $config["database"]["dbname"], $config["database"]["username"], $config["database"]["password"]);
$slider_controller = new SliderController($db);
$category_controller = new CategoryController($db);
$product_controller = new ProductController($db, $category_controller);
$url = $_SERVER["REQUEST_URI"];

$title = Router::title($url);

require "../view/template/header.php";

require Router::route($url);

require "../view/template/footer.php";

//TODO создать стат.метод, который будет возвращать  заголовок в зависимости от страницы
?>
