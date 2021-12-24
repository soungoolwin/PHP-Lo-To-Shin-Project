<?php

namespace Helpers;

class HTTP
{
    public static $base = "http://localhost:8080/";
    public static function redirect($path, $query="")
    {
        $url = static::$base . $path;
        if ($query) {
            $url .= "?$query";
        }
        header("location: $url");
        exit();
    }
}
