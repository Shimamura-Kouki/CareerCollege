<?php
// cookie.php
ob_start(); // �o�̓o�b�t�@
var_dump($_COOKIE);
//
$i = @$_COOKIE['count'] + mt_rand(1, 10);
//
setcookie('count', $i);
//
var_dump($i);
//
ob_end_flush(); // �o�b�t�@�̏I���Əo��
