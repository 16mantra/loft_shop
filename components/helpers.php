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

function redirect($path){
    ?>
    <script>
        let path = "<?=$path;?>";
        console.log(path);
        location.replace(path);
    </script>
    <?php

}
