<?php

// DB�ɐڑ�
$user = 'tech';
$pass = 'tech';
$dsn = 'mysql:dbname=tech;host=localhost;charset=utf8mb4';

// �ڑ��I�v�V�����̐ݒ�
$opt = array (
    // �ÓI�v���[�X�z���_���w��
    PDO::ATTR_EMULATE_PREPARES => false,
);
// �u�����֎~�v���\�Ȃ�t�������Ă���
if (defined('PDO::MYSQL_ATTR_MULTI_STATEMENTS')) {
    $opt[PDO::MYSQL_ATTR_MULTI_STATEMENTS] = false;
}

//
try {
    $dbh = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    echo "connect error!! (" , $e->getMessage() , ")";
    return ;
}
//
var_dump($dbh);
