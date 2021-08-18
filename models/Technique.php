<?php

class Technique
{
    private static function slugify($text) {
        $replace = [
            '&lt;' => '', '&gt;' => '', '&#039;' => '', '&amp;' => '',
            '&quot;' => '', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä'=> 'Ae',
            '&Auml;' => 'A', 'Å' => 'A', 'Ā' => 'A', 'Ą' => 'A', 'Ă' => 'A', 'Æ' => 'Ae',
            'Ç' => 'C', 'Ć' => 'C', 'Č' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C', 'Ď' => 'D', 'Đ' => 'D',
            'Ð' => 'D', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ē' => 'E',
            'Ę' => 'E', 'Ě' => 'E', 'Ĕ' => 'E', 'Ė' => 'E', 'Ĝ' => 'G', 'Ğ' => 'G',
            'Ġ' => 'G', 'Ģ' => 'G', 'Ĥ' => 'H', 'Ħ' => 'H', 'Ì' => 'I', 'Í' => 'I',
            'Î' => 'I', 'Ï' => 'I', 'Ī' => 'I', 'Ĩ' => 'I', 'Ĭ' => 'I', 'Į' => 'I',
            'İ' => 'I', 'Ĳ' => 'IJ', 'Ĵ' => 'J', 'Ķ' => 'K', 'Ł' => 'K', 'Ľ' => 'K',
            'Ĺ' => 'K', 'Ļ' => 'K', 'Ŀ' => 'K', 'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N',
            'Ņ' => 'N', 'Ŋ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O',
            'Ö' => 'Oe', '&Ouml;' => 'Oe', 'Ø' => 'O', 'Ō' => 'O', 'Ő' => 'O', 'Ŏ' => 'O',
            'Œ' => 'OE', 'Ŕ' => 'R', 'Ř' => 'R', 'Ŗ' => 'R', 'Ś' => 'S', 'Š' => 'S',
            'Ş' => 'S', 'Ŝ' => 'S', 'Ș' => 'S', 'Ť' => 'T', 'Ţ' => 'T', 'Ŧ' => 'T',
            'Ț' => 'T', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'Ue', 'Ū' => 'U',
            '&Uuml;' => 'Ue', 'Ů' => 'U', 'Ű' => 'U', 'Ŭ' => 'U', 'Ũ' => 'U', 'Ų' => 'U',
            'Ŵ' => 'W', 'Ý' => 'Y', 'Ŷ' => 'Y', 'Ÿ' => 'Y', 'Ź' => 'Z', 'Ž' => 'Z',
            'Ż' => 'Z', 'Þ' => 'T', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a',
            'ä' => 'ae', '&auml;' => 'ae', 'å' => 'a', 'ā' => 'a', 'ą' => 'a', 'ă' => 'a',
            'æ' => 'ae', 'ç' => 'c', 'ć' => 'c', 'č' => 'c', 'ĉ' => 'c', 'ċ' => 'c',
            'ď' => 'd', 'đ' => 'd', 'ð' => 'd', 'è' => 'e', 'é' => 'e', 'ê' => 'e',
            'ë' => 'e', 'ē' => 'e', 'ę' => 'e', 'ě' => 'e', 'ĕ' => 'e', 'ė' => 'e',
            'ƒ' => 'f', 'ĝ' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g', 'ĥ' => 'h',
            'ħ' => 'h', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ī' => 'i',
            'ĩ' => 'i', 'ĭ' => 'i', 'į' => 'i', 'ı' => 'i', 'ĳ' => 'ij', 'ĵ' => 'j',
            'ķ' => 'k', 'ĸ' => 'k', 'ł' => 'l', 'ľ' => 'l', 'ĺ' => 'l', 'ļ' => 'l',
            'ŀ' => 'l', 'ñ' => 'n', 'ń' => 'n', 'ň' => 'n', 'ņ' => 'n', 'ŉ' => 'n',
            'ŋ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'oe',
            '&ouml;' => 'oe', 'ø' => 'o', 'ō' => 'o', 'ő' => 'o', 'ŏ' => 'o', 'œ' => 'oe',
            'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r', 'š' => 's', 'ù' => 'u', 'ú' => 'u',
            'û' => 'u', 'ü' => 'ue', 'ū' => 'u', '&uuml;' => 'ue', 'ů' => 'u', 'ű' => 'u',
            'ŭ' => 'u', 'ũ' => 'u', 'ų' => 'u', 'ŵ' => 'w', 'ý' => 'y', 'ÿ' => 'y',
            'ŷ' => 'y', 'ž' => 'z', 'ż' => 'z', 'ź' => 'z', 'þ' => 't', 'ß' => 'ss',
            'ſ' => 'ss', 'ый' => 'iy', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G',
            'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO', 'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I',
            'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
            'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F',
            'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH', 'Ъ' => '',
            'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA', 'а' => 'a',
            'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
            'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l',
            'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's',
            'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
            'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e',
            'ю' => 'yu', 'я' => 'ya'
        ];

        $text = strtr($text, $replace);
        $text = preg_replace('~[^\\pL\d.]+~u', '_', $text);
        $text = trim($text, '_');
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = mb_strtolower($text);

        return $text;
    }

    public static function encodeImagePath($path) {
        $temp = explode('.', $path);
        $format = '.' . end($temp);

        $path = md5($path);
        $path = str_replace(' ', '', $path);

        return str_shuffle(preg_replace('/[^A-Za-z\-]/', '', $path)).$format;
    }

    public static function get($slug)
    {
        $technique = array();

        try {
            $db = Db::getConnection();

            $result = $db->prepare('SELECT * FROM technique WHERE slug = :slug ORDER BY id');
            $result->bindParam(':slug', $slug, PDO::PARAM_STR);
            $result->execute();

            if($result->rowCount() <= 0)
                return false;

            while ($row = $result->fetch()) {
                $technique['id'] = $row['id'];
                $technique['name'] = $row['name'];
                $technique['slug'] = $row['slug'];
                $technique['image'] = $row['image'];
                $technique['problems'] = json_decode($row['problems'], true);
            }
        }
        catch(Error $e) {
            return false;
        }

        return $technique;
    }

    public static function getAll()
    {
        $technique = array();

        try {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM technique ORDER BY id', PDO::FETCH_ASSOC);

            if($result->rowCount() <= 0)
                return array();

            while ($row = $result->fetch()) {
                $technique[$row['id']] = array();
                $technique[$row['id']]['name'] = $row['name'];
                $technique[$row['id']]['slug'] = $row['slug'];
                $technique[$row['id']]['image'] = $row['image'];
                $technique[$row['id']]['problems'] = json_decode($row['problems'], true);
            }
        }
        catch(Error $e) {
            return array();
        }

        return $technique;
    }

    public static function getRelated()
    {
        $technique = array();

        try {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM technique ORDER BY id LIMIT 6', PDO::FETCH_ASSOC);

            if($result->rowCount() <= 0)
                return array();

            while ($row = $result->fetch()) {
                $technique[$row['id']] = array();
                $technique[$row['id']]['name'] = $row['name'];
                $technique[$row['id']]['slug'] = $row['slug'];
                $technique[$row['id']]['image'] = $row['image'];
                $technique[$row['id']]['problems'] = json_decode($row['problems'], true);
            }
        }
        catch(Error $e) {
            return array();
        }

        return $technique;
    }

    public static function create($name, $image, $problems)
    {
        try {
            $db = Db::getConnection();

            $sql = 'INSERT INTO technique VALUES (default, :name, :slug, :image, :problems)';

            $slug = self::slugify($name);
            $problems = json_encode($problems);

            $result = $db->prepare($sql);
            $result->bindParam(':name', $name, PDO::PARAM_STR);
            $result->bindParam(':slug', $slug, PDO::PARAM_STR);
            $result->bindParam(':image', $image, PDO::PARAM_STR);
            $result->bindParam(':problems', $problems, PDO::PARAM_STR);
            $result->execute();
        }
        catch(Error $e) {
            return false;
        }

        return $slug;
    }

    public static function edit($old_slug, $name, $image, $problems)
    {
        try {
            $db = Db::getConnection();

            $slug = self::slugify($name);
            $problems = json_encode($problems);

            $result = $db->prepare('UPDATE technique SET name = :name, slug = :slug, image = :image, problems = :problems WHERE slug = :old_slug');
            $result->bindParam(':name', $name, PDO::PARAM_STR);
            $result->bindParam(':slug', $slug, PDO::PARAM_STR);
            $result->bindParam(':image', $image, PDO::PARAM_STR);
            $result->bindParam(':problems', $problems, PDO::PARAM_STR);
            $result->bindParam(':old_slug', $old_slug, PDO::PARAM_STR);
            $result->execute();
        }
        catch(Error $e) {
            return false;
        }

        return $slug;
    }

    public static function delete($slug)
    {
        try {
            $db = Db::getConnection();

            $result = $db->prepare('DELETE FROM technique WHERE slug = :slug');
            $result->bindParam(':slug', $slug, PDO::PARAM_STR);
            $result->execute();
        }
        catch(Error $e) {
            return false;
        }

        return true;
    }
}
