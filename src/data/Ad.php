<?php

class Ad extends ORM
{
    public static $tableName = "ads";
    public static $fields = [
        'id'                    => 'i',
        'date'                  => 'i',
        'title'                 => 's',
        'content'               => 's',
    ];

    public static $computedFields = [];

    public static function findByLast() {
        return self::findByWhere("1 ORDER BY id DESC");
    }
}