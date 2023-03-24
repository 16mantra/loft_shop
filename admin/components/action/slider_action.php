<?php


    require "../components/QueryBuilder.php";
    require "../components/controllers/SliderController.php";

    $config = require "../config.php";
    $file_uploader = new FileUploader();
    $db = new QueryBuilder($config["database"]["host"], $config["database"]["dbname"], $config["database"]["username"], $config["database"]["password"]);
    $slider_controller = new SliderController($db);

    if(isset($_POST["store"])) {

        $img = $_FILES["image"];
        $image_path = $file_uploader->picture_uploader($img);
        $image = ltrim($image_path, "./");
        $data = [
            "image" => $image,
            "title" => $_POST["title"],
            "link_text" => $_POST["link_text"],
            "link_href" => $_POST["link_href"],
            "sort" => $_POST["sort"],
        ];

        $slider_controller->create($data);
        redirect("/admin/slider");
    }
    if(isset($_POST["edit"])) {

    $img = $_FILES["image"];
    $image_path = $file_uploader->picture_uploader($img);
    $image = ltrim($image_path, "./");
    $data = [
        "image" => $image,
        "title" => $_POST["title"],
        "link_text" => $_POST["link_text"],
        "link_href" => $_POST["link_href"],
        "sort" => $_POST["sort"],
    ];

    $slider_controller->edit($data, $_GET["id"]);
    redirect("/admin/slider");
    }

    if(isset($_GET["delete"])){
        $slider_controller->delete($_GET["delete"]);
        redirect("/admin/slider");
    }



function get_data(){
        global $slider_controller;
        return $slider_controller->get_all("slider");

}

