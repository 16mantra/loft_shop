<?php

require "../components/controllers/CategoryController.php";

$config = require "../config.php";
$file_uploader = new FileUploader();
//$db = new QueryBuilder($config["database"]["host"], $config["database"]["dbname"], $config["database"]["username"], $config["database"]["password"]);
$category_controller = new CategoryController($db);

if(isset($_POST["category_add"])){


    $img = $_FILES["image"];
    $image_path = $file_uploader->picture_uploader($img);
    $image = ltrim($image_path, "./");
    $data = [
        "image" => $image,
        "name" => $_POST["name"],
    ];
    var_dump($data);

    $category_controller->create($data, "category");
    redirect("/admin/category_index");
}
if(isset($_POST["category_edit"])){

    if(empty($_FILES["image"]["name"])){
        $data = [
            "name" => $_POST["name"],
        ];
    }
    else{
        $img = $_FILES["image"];
        $image_path = $file_uploader->picture_uploader($img);
        $image = ltrim($image_path, "./");
        $data = [
            "image" => $image,
            "name" => $_POST["name"],
        ];
    }

    

    $category_controller->edit($data, "category", $_GET["id"]);
    redirect("/admin/category_index");
}
if (isset($_GET["category_delete"])) {
    $category_controller->delete($_GET["category_delete"], "category");
    redirect("/admin/category_index");
}
function get_category()
{
    global $category_controller;
    return $category_controller->get_all("category");

}