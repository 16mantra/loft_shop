<?php

class FileUploader{
    public $upload_folder;

    public function __construct(){
       $this->upload_folder = require "../config.php";
       $this->upload_folder = $this->upload_folder["img_upload"];
    }
    public function picture_uploader($img){
        $tmp_name = $img["tmp_name"];
        $name = $img["name"];
        $unique_folder = uniqid();
        mkdir($this->upload_folder.$unique_folder);
        move_uploaded_file($tmp_name, $this->upload_folder.$unique_folder."/".$name);
        $full_path = $this->upload_folder.$unique_folder."/".$name;
        return $full_path;

    }
}

// function create_avatar_name($input){
//     $tmp_name = $_FILES[$input]["tmp_name"];
//     $extension = pathinfo($_FILES["img"]["name"])["extension"];
//     $name = uniqid() . "." . $extension;
//     $path = "img/";
//     move_uploaded_file($tmp_name, $path.$name);
//     return $name;
// }