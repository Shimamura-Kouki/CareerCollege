<pre>
<?php

/*
[^foo]bar �Ƃ������K�\���́A�ufoo�ł͂Ȃ�������ɑ�����bar�Ƃ��������񂪑������́v �ł͂���܂���B
[^foo]bar �Ƃ������K�\���́uf�ł�o�ł�o�ł��Ȃ��P����(�Ȃ̂�o���d�����Ă镪�͂����̖���)�v�u�ɑ�����bar�̂R�����v�Ƃ����Ӗ������ɂȂ�܂��B
*/

//
$string = 'abcfoobarhogebar';
$ret = preg_match('/[^foo]bar/', $string, $matches);
var_dump($ret);
var_dump($matches);
