<?php  // lsb_3.php
// static�ȃN���X�Ŏ���(����Ȃ��P�[�X)
class Hoge {
    protected static function test() {
        echo "hoge#test\n";
    }
    protected static function test_2() {
        echo "hoge#test2\n";
    }
    public static function t() {
        static::test(); // static�ɏ�������
        static::test_2(); // static�ɏ�������
    }
}
//
class Foo extends Hoge {
    protected static function test_2() {
        echo "foo#test2\n";
    }
}
//
Hoge::t();
//
Foo::t();

