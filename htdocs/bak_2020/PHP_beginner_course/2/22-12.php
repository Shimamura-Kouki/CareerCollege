<pre>
<?php

/*
��ʓI�Ɂu�s���́O�A�s���́��ŕ\���v�Ƃ����L�q�������̂ł����A���ۂɂ͉��s�R�[�h�Ƃ̑g�ݍ��킹�ŁA�K�������Ӑ}���Ȃ������񂪃}�b�`����\��������܂��B
�����u�N���b�N���ۂ��v������Ŋm�F�����Ă݂܂��B
*/

//
$string = "javascript code\nhttp://example.com";
$ret = preg_match('/^http:/m', $string, $matches);
var_dump($ret);
var_dump($matches);

//
$string = "0123\n";
$ret = preg_match('/[0-9]$/', $string, $matches);
var_dump($ret);
var_dump($matches);
