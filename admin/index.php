<?php
require "../components/Router.php";
require "../components/helpers.php";
require "../components/FileUploader.php";


$file_uploader = new FileUploader();


$config = require "../config.php";

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
