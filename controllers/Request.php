<?php

namespace App\controllers;

class Request
{
    public static array $dataPost;
    public static array $dataSession;

    public static function get(): array
    {
        return self::$dataPost = $_POST;
    }

    public static function session(): array
    {
        return self::$dataSession = $_SESSION;
    }
}