<pre>
<?php
// hash.php
$s = 'a';

$hash = hash('sha256', $s);
var_dump($hash);
//
$s = '0123456789';
$hash = hash('sha256', $s);
var_dump($hash);

// ����������ł��u���̒����v�ɂȂ�
$uri = 'https://www.google.co.jp/?gws_rd=ssl';
$s = file_get_contents($uri);
var_dump( strlen($s) );
$hash = hash('sha256', $s);
var_dump($hash);
