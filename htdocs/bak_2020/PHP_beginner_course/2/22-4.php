<pre>
<?php

/*
�h�b�g��c���Ȃǂ��u���ꕶ��(���^���� / ���^�L�����N�^)�v�ƌď̂��܂��B
���^����(����̓h�b�g)���u�����Ƃ��āv�����������̓o�b�N�X���b�V������p���܂��B
*/

//
$string = '0123456789abcdefghijka.c';
$ret = preg_match('/a\.c/', $string, $matches);
var_dump($ret);
var_dump($matches);
