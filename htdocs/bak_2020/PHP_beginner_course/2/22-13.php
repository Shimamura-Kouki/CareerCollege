<pre>
<?php

/*
�K�؂ȁu�s���v�u�s���v�Ƃ�
  \A      ������擪
  \z      �����񖖔�
�ƂȂ�܂��B
*/

//
$string = "javascript code\nhttp://example.com";
$ret = preg_match('/\Ahttp:/m', $string, $matches);
var_dump($ret);
var_dump($matches);

//
$string = "0123\n";
$ret = preg_match('/[0-9]\z/', $string, $matches);
var_dump($ret);
var_dump($matches);
