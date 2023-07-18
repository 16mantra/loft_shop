<?php

class Router
{

    public static function route($url)
    {
        if ($url == "/about") {
            return "../view/pages/about.php";
        } else if ($url == "/contact") {
            return "../view/pages/contact.php";
        } else if ($url == "/") {
            return "../view/pages/main.php";
        }


    }

    public static function title($url)
    {
        if ($url == "/about")
            return "About";
        else if ($url == "/contact")
            return "Contact";
        else if ($url == "/")
            return "Main";
    }

    public static function admin_router($url)
    {
        $pos = strpos($url, '?');
        if($pos)
            $url = substr($url, 0, $pos);

        if ($url == "/admin/") {
            return "../admin/pages/main.php";
        }
        else if ($url == "/admin/slider") {
            return "../admin/pages/slider_pages/slider_index.php";
        }
        else if ($url == "/admin/slider_add") {
            return "../admin/pages/slider_pages/slider.php";
        }
        else if ($url == "/admin/slider_store") {

            return "components/action/slider_action.php";
        }
        else if ($url == "/admin/slider_edit") {
            return "../admin/pages/slider_pages/edit_slider.php";
        }
        else if($url == "/admin/category_index"){
            return "../admin/pages/category_pages/category_index.php";
        }
        else if($url == "/admin/category_add"){
            return "../admin/pages/category_pages/category_add.php";
        }
        else if($url == "/admin/category_edit"){
            return "../admin/pages/category_pages/category_edit.php";
        }
        else if($url == "/admin/category_action"){
            return "components/action/category_action.php";
        }
        else if($url == "/admin/product_index"){
            return "../admin/pages/product_pages/product_index.php";
        }
        else if($url == "/admin/product_add"){
            return "../admin/pages/product_pages/product_add.php";
        }
        else if($url == "/admin/product_action"){
            return "components/action/product_action.php";
        }
        else if($url == "/admin/product_show"){
            return "../admin/pages/product_pages/product_show.php";
        }
        else if($url == "/admin/product_edit"){
            return "../admin/pages/product_pages/product_edit.php";
        }
    }
}