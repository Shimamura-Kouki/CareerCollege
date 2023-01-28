<?php  // sql.php
//
require_once('pdo.php');

// INSERT
$num = 100;
$string = " '); DELETE FROM php_test;-- ";
/*
// XXX ��Ȃ������΂ɂ��ȁI�I�I�I�I
// SQL�̍쐬
$sql = "INSERT INTO php_test(num, string) VALUES({$num}, '{$string}');";
var_dump($sql);
// �N�G���̔��s
$dbh->query($sql);
var_dump($dbh->errorinfo());
*/

// �������ꂽ��(�v���y�A�h�X�e�[�g�����g)�̍쐬
$sql = 'INSERT INTO php_test(num, string)
          VALUES(:num, :string);';
$pre = $dbh->prepare($sql);

// �v���[�X�z���_�ւ̒l��bind
$pre->bindValue(':num'   , $num   , PDO::PARAM_INT);
$pre->bindValue(':string', $string, PDO::PARAM_STR);

// SQL�̎��s
$r = $pre->execute();

// SELECT
// �������ꂽ��(�v���y�A�h�X�e�[�g�����g)�̍쐬
$sql = "SELECT * FROM php_test;";
$pre = $dbh->prepare($sql);

// �v���[�X�z���_�ւ̒l��bind
// XXX ����͒l�Ȃ�

// �N�G���̔��s
$res = $pre->execute();

// �f�[�^�̎擾
while($row = $pre->fetch()) {
    var_dump($row);
}
