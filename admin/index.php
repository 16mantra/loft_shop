<?php
session_start();

require "../components/Router.php";
require "../components/helpers.php";
require "../components/FileUploader.php";
require "components/action/slider_action.php";
require "components/action/category_action.php";
require "components/action/product_action.php";

$config = require "../config.php";
$db = new QueryBuilder($config["database"]["host"], $config["database"]["dbname"], $config["database"]["username"], $config["database"]["password"]);






$url = $_SERVER["REQUEST_URI"];

require "template/header.php";
require "template/aside.php";

require Router::admin_router($url);

require "template/footer.php";


//TODO сделать Route и написать приветствие и сделать подключение slider.php
?>
    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->

    <!-- /.content-wrapper -->
