<?php

namespace App\controllers;

class Request
{
    public static $data;

    public static function get()
    {
        return self::$data = $_POST;
    }
}