<?php
function dd($obj){
    echo "<pre style='background:black; color:red; padding: 10px;'>";
    var_dump($obj);
    echo "</pre>";
    die;
}
function debug($obj){
    echo "<pre style='background:black; color:white;; padding: 10px;'>";
    var_dump($obj);
    echo "</pre>";
}