<pre>
<?php

/*
�����Z�b�g�́A�Ⴆ�� [0123456789]�Ə����Ɓu0����9�܂ł̊e�����̂����ꂩ��v�Ƃ����悤�ȈӖ��ɂȂ�܂��B[abc]�Ȃ�ua��b��c�̂����ꂩ��v�ƂȂ�܂��B
���ɁA�����Z�b�g�͗Ⴆ��[0-9]�Ə������Ŕ͈͂��w��ł��܂��B�A���t�@�x�b�g�啶���������A�Ȃ�A[a-zA-Z]�Ƃ������������ł��܂��B
*/

//
$string = '0123456789abcdefghijka.c';
$ret = preg_match('/[a-z]/', $string, $matches);
var_dump($ret);
var_dump($matches);
