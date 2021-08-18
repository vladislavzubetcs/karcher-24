<?php

class TechniqueController
{
    public static function index()
    {
        $technique = Technique::getRelated();
        $technique_all = Technique::getAll();

        require_once(ROOT . '/views/technique/index.php');
        return true;
    }

    public static function create()
    {
        if(!User::checkLogin()) {
            Router::pageNotFound();
            return true;
        }

        if(isset($_POST) && !empty($_POST) && isset($_POST['name'])) {
            $name = $_POST['name'];
            $problems = array();

            if(isset($_POST['problems']) && !empty($_POST['problems']))
                $problems = $_POST['problems'];

            $image = '/uploads/default.jpg';

            if(isset($_FILES['image'])) {

                if($_FILES['image']['size'] > 0) {
                    $temp_path = Technique::encodeImagePath($_FILES['image']['name']);

                    while(file_exists(ROOT . '/uploads/' . $temp_path) === true)
                        $temp_path = Technique::encodeImagePath($_FILES['image']['name']);
        
                    move_uploaded_file($_FILES['image']['tmp_name'], ROOT . '/uploads/' . $temp_path);

                    $image = $temp_path;
                }
            }

            $result = false;
            $result = Technique::create($name, $image, $problems);
        
            if($result) {
                header('Location: /technique/' . $result);
                return true;
            }
        }

        $technique = Technique::getRelated();

        require_once(ROOT . '/views/technique/edit.php');
        return true;
    }

    public static function show($slug)
    {
        $technique = Technique::getRelated();
        $technique_item = Technique::get($slug);

        if(!$technique_item) {
            Router::pageNotFound();
            return true;
        }

        require_once(ROOT . '/views/technique/show.php');
        return true;
    }

    public static function edit($slug)
    {
        if(!User::checkLogin()) {
            Router::pageNotFound();
            return true;
        }

        $technique = Technique::getRelated();
        $technique_item = Technique::get($slug);
        
        if(isset($_POST) && !empty($_POST) && isset($_POST['name'])) {
            $name = $_POST['name'];
            $problems = array();

            if(isset($_POST['problems']) && !empty($_POST['problems']))
                $problems = $_POST['problems'];

            $image = $technique_item['image'];

            if(isset($_FILES['image'])) {

                if($_FILES['image']['size'] > 0) {
                    $temp_path = Technique::encodeImagePath($_FILES['image']['name']);

                    while(file_exists(ROOT . '/uploads/' . $temp_path) === true)
                        $temp_path = Technique::encodeImagePath($_FILES['image']['name']);
        
                    move_uploaded_file($_FILES['image']['tmp_name'], ROOT . '/uploads/' . $temp_path);

                    $image = $temp_path;
                }
            }

            $result = false;
            $result = Technique::edit($slug, $name, $image, $problems);
        
            if($result) {
                header('Location: /technique/' . $result);
                return true;
            }
        }

        require_once(ROOT . '/views/technique/edit.php');
        return true;
    }

    public static function delete($slug)
    {
        if(!User::checkLogin()) {
            Router::pageNotFound();
            return true;
        }

        Technique::delete($slug);
        header('Location: /technique');
        return true;
    }
}