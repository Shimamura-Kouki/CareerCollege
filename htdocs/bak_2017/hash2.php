<?php
// hash2.php
$s = 'furu'; // 適当に好きな文字列
$s = $s . date('Ymd');
//
$h = md5($s);
var_dump($h);
//
$h = sha1($s);
var_dump($h);
