<pre>
<?php

/*
�u�c�� |�v�͏��� or �ŁA�u�����ꂩ�v�Ƃ����Ӗ��ɂȂ�܂��B
���ʂ������Ĉꊇ��ɂ���Ɨǂ��ł����A�����Ă������܂��B
*/

//
$string = '0123456789abcdefghijk';
$ret = preg_match('/(abc)|(456)|(ABC)/', $string, $matches);
var_dump($ret);
var_dump($matches);
