<?php
// session.php
ob_start(); // �o�̓o�b�t�@
session_start(); // �Z�b�V�����J�n
var_dump($_COOKIE);
var_dump($_SESSION);
//
$i = @$_SESSION['count'] + mt_rand(1, 10);
//
$_SESSION['count'] = $i;
//
var_dump($i);
//
ob_end_flush(); // �o�b�t�@�̏I���Əo��
