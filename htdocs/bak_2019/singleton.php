<?php  // singleton.php

class Singleton {
    // �O����� new �̋֎~
    protected function __construct() {
    }
    // clone�֎~
    protected function __clone() {
    }

    public static function getInstance() {
        static $obj = [];
        $class_name = get_called_class();
        if (false === isset($obj[$class_name])) {
            $obj[$class_name] = new static();
        }
        return $obj[$class_name];
    }
}
//
$obj = Singleton::getInstance();
var_dump($obj);
$obj2 = Singleton::getInstance();
var_dump($obj2);

//$obj3 = new Singleton();
//var_dump($obj3);

//$obj3 = clone $obj2;
//var_dump($obj3);



/*
// �V���O���g���u����Ȃ��v�N���X
class Hoge {
}
//
$obj = new Hoge();
var_dump($obj);
$obj2 = new Hoge();
var_dump($obj2);
*/
