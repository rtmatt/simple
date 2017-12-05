<?php

namespace App;

class PagesController
{


    private static function getMasterLayout()
    {
        return __DIR__ . '/../views/layouts/main.php';
    }

    public static function showPage($page)
    {
        $self = new static();
        $viewFile = __DIR__ . "/../views/{$page}.php";
        if ( ! file_exists($viewFile)) {
            throw new \Phroute\Phroute\Exception\HttpRouteNotFoundException('View for page not found:\'' . $page . '\'');
        }

        ob_start();
        include $viewFile;
        extract([ 'content' => ob_get_clean() ]);
        ob_start();
        include self::getMasterLayout();
        return ob_get_clean();
    }

}