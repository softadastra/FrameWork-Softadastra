<?php

namespace App\Meta;

class ManagerHeadPage
{
    private static $title = 'Website';
    private static $content = "";

    public static function getTitle()
    {
        return self::$title;
    }

    public static function setTitle(string $titre)
    {
        self::$title = $titre;
    }

    public static function getContent()
    {
        return self::$content;
    }

    public static function setContent(string $content)
    {
        self::$content = $content;
    }
}
