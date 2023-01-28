<?php  // DB.php

class DB {
    //
    protected function __construct() {
    }
    //
    static public function getHandle() {
        static $obj = null;
        if (null === $obj) {
            // XXX �{����config�t�@�C���Ƃ��ɏ����Ă���
            $dsn  = 'mysql:dbname=game_2018;host=localhost;charset=utf8mb4';
            $user = 'game_2018';
            $pass = 'game_2018';

            // MySQL�ŗL�̐ݒ�
            $opt = [
                // �ÓI�v���[�X�z���_���w��
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            //
            try {
                $obj = new PDO($dsn, $user, $pass, $opt);
            } catch (PDOException $e) {
                echo 'DB Connect error: ', $e->getMessage();
                exit;
            }
        }
        return $obj;
    }
}
/*
var_dump(DB::getHandle());
var_dump(DB::getHandle());
*/
