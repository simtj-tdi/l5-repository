<?php


namespace App\Http\Utils;


class Docuemnt
{
    protected static $documents = [
      1 => 'RG',
      2 => 'CPF',
      3 => 'CNPJ',
    ];

    public static function all()
    {
        return static::$documents;
    }

    public static function getDocument($type)
    {
        return static::$documents[$type];
    }
}
