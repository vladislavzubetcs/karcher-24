<?php

class PageController
{
    public static function index()
    {
        require_once(ROOT . '/views/index.php');
        return true;
    }
}