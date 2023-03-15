<?php


    require "../components/QueryBuilder.php";
//require "../components/helpers.php";
//require "../components/Router.php";
    require "../components/controllers/SliderController.php";
//


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



function get_data(){
        global $slider_controller;
        return $slider_controller->get_all("slider");

}

