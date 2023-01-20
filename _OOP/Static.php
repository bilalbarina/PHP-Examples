<?php

class ListData {
    static $data = [];
    
    public static function addData($item) {
        self::$data[] = $item;
    }

    public static function getData() {
        return self::$data;
    }
}

ListData::addData('item 1');
ListData::addData('item 2');

var_dump(ListData::getData());
