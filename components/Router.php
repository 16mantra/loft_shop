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
            return "../admin/pages/slider_index.php";
        }
        else if ($url == "/admin/slider_add") {
            return "../admin/pages/slider.php";
        }
        else if ($url == "/admin/slider_store") {

            return "components/action/slider_action.php";
        }
        else if ($url == "/admin/slider_edit") {
            return "../admin/pages/edit_slider.php";
        }
    }
}