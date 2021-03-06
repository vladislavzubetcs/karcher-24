<?php

class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        // $params = array(
        //     'host' => 'localhost',
        //     'dbname' => 'karcher',
        //     'user' => 'root',
        //     'password' => '',
        // );
        $params = array(
            'host' => 'localhost',
            'dbname' => 'karcherb_main',
            'user' => 'karcherb_admin',
            'password' => 'WxR^WV30WijK',
        );

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        $db->exec("set names utf8");

        return $db;
    }
}
