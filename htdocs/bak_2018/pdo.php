<?php // pdo.php
// XXX �{����config�t�@�C���Ƃ��ɏ����Ă���
$dsn  = 'mysql:dbname=furu;host=localhost;charset=utf8mb4';
$user = 'furu';
$pass = 'furu';
// MySQL�ŗL�̐ݒ�
$opt = [
    // �ÓI�v���[�X�z���_���w��
    PDO::ATTR_EMULATE_PREPARES => false,
];
//
try {
    $dbh = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
    echo 'DB Connect error: ', $e->getMessage();
    exit;
}
//
var_dump($dbh);
