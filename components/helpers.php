<?php
function dd($obj){
    echo "<pre style='background:black; color:red; padding: 10px;'>";
    var_dump($obj);
    echo "</pre>";
    die;
}
function debug($obj){
    echo "<pre style='background:black; color:white; position: absolute; left:0; top:0; z-index: 100; padding: 10px;'>";
    var_dump($obj);
    echo "</pre>";
}
function assets($string){
    return "public/asset/{$string}";
}
function create_message($string, $name){
    $_SESSION[$name] = $string;

}
function flash_message($name, $type){
    if(isset($_SESSION[$name])){
        echo "<div class='alert alert-{$type}' role=''alert'>";
        echo $_SESSION[$name];
      echo "</div>";
      unset($_SESSION[$name]);
    }
}
function redirect($path){
    ?>
    <script>
        let path = "<?=$path;?>";
        console.log(path);
        location.replace(path);
    </script>
    <?php

}
