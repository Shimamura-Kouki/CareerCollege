<?php
// hash2.php
$s = 'furu'; // �K���ɍD���ȕ�����
$s = $s . date('Ymd');
//
$h = md5($s);
var_dump($h);
//
$h = sha1($s);
var_dump($h);
