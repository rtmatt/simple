<?php

namespace App;

class PagesController
{

    public static function showPage($page)
    {
        $str = __DIR__ . "/../views/{$page}.php";
        if ( ! file_exists($str)) {
            throw new \Phroute\Phroute\Exception\HttpRouteNotFoundException('View for page not found:\'' . $page . '\'');
        }
        ob_start();
        include $str;
        extract([ 'content' => ob_get_clean() ]);
        ob_start();
        include __DIR__ . '/../views/main.php';

        return ob_get_clean();
    }

}