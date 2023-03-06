<?php
var_dump("it");
var_dump($_SERVER);
require "../components/QueryBuilder.php";
//require "../components/helpers.php";
//require "../components/Router.php";
require "../components/controllers/SliderController.php";
//

var_dump("quee");


var_dump("qe");
$config = require "../config.php";


$db = new QueryBuilder($config["database"]["host"], $config["database"]["dbname"], $config["database"]["username"], $config["database"]["password"]);

$slider_controller = new SliderController($db);

if(isset($_POST["store"])) {
    $img = $_FILES["image"];
    $image_path = $file_uploader->picture_uploader($img);
    $data = [
        "image" => $image_path,
        "title" => $_POST["title"],
        "link_text" => $_POST["link_text"],
        "link_href" => $_POST["link_href"],
        "sort" => $_POST["sort"],
    ];
    var_dump($data);
    $slider_controller->create($data);

}
redirect("/admin/slider");


