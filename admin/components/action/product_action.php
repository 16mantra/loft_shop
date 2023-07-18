<?php 
require "../components/controllers/ProductController.php";

$config = require "../config.php";
$file_uploader = new FileUploader();
$product_controller = new ProductController($db, $category_controller);


if(isset($_POST["product_add"])){
    $img = $_FILES["image"];
    $image_path = $file_uploader->picture_uploader($img);
    $image = ltrim($image_path, "./");
    if(!is_numeric($_POST["cat_id"])){
        create_message("Choose a category", "error");
        redirect("/admin/product_add");
        die;
    }
    create_message("Product has been added", "success");
    $data = [
        "image" => $image,
        "name" => $_POST["name"],
        "price" => $_POST["price"],
        "cat_id" => $_POST["cat_id"],
        "discription" => $_POST["discription"],
        "small_discription" => $_POST["small_discription"],
    ];
    $product_controller->create($data);
    redirect("/admin/product_index");
    var_dump($data);
}

if(isset($_POST["product_edit"])){
  
    if (empty($_FILES["image"]["name"])) {
        
        $data = [
            
            "name" => $_POST["name"],
            "price" => $_POST["price"],
            "cat_id" => $_POST["cat_id"],
            "discription" => $_POST["discription"],
            "small_discription" => $_POST["small_discription"],
        ];
        
    }
  
    else {
      
        $img = $_FILES["image"];
        $image_path = $file_uploader->picture_uploader($img);
        $image = ltrim($image_path, "./");
        $data = [
            "image" => $image,
            "name" => $_POST["name"],
            "price" => $_POST["price"],
            "cat_id" => $_POST["cat_id"],
            "discription" => $_POST["discription"],
            "small_discription" => $_POST["small_discription"],
        ];
    }
        $product_controller->edit($data, $_GET["id"]);
        redirect("/admin/product_show?id={$_GET['id']}");
    
}
if (isset($_GET["product_delete"])) {
    $product_controller->delete($_GET["product_delete"]);
    redirect("/admin/product_index");
}
?>