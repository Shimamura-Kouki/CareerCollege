<pre>
<?php

// �s��/�s����\�����^�����Ƃ��ẮA�O�Ɓ�������܂��B


//
$string = '0a01ab0123abc01234abcde012345abcdef';

//
$ret = preg_match('/^0a0/', $string, $matches);
var_dump($ret);
var_dump($matches);

//
$ret = preg_match('/\w$/', $string, $matches);
var_dump($ret);
var_dump($matches);
