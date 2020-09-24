<?php


namespace App\Classes;


class Str
{
    public static function slug($param)
    {
        $slugify = new Slugify();
        return $slugify->slugify($param);
    }
}