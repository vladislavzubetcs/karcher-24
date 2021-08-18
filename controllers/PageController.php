<?php

class PageController
{
    public static function index()
    {
        $technique = Technique::getRelated();

        require_once(ROOT . '/views/index.php');
        return true;
    }

    public static function about()
    {
        $technique = Technique::getRelated();

        require_once(ROOT . '/views/about.php');
        return true;
    }
}