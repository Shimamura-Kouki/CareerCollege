<pre>
<?php

/*
���ɕ����N���X�ł��B�����́u�����N���X�̒��̃��^�����v�Ƃ����P�[�X������܂��B
�܂��A�����̐��K�\���Ŏg���郁�^�����Łu�ے�v������܂��B
[^abc]
�Ƃ���ꍇ�B�擪��^���u�ے�v���Ӗ����邽�߂Ɂuabc�ȊO�v�Ƃ����Ӗ��ɂȂ�܂��B
*/

//
$string = '0123456789abcdefghijka.c';
$ret = preg_match('/[^1-9]/', $string, $matches);
var_dump($ret);
var_dump($matches);
