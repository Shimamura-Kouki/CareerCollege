<pre>
<?php


// �����Z
$i = PHP_INT_MAX + 1;
var_dump($i);
$r = bcadd(PHP_INT_MAX, '1', 0);
var_dump($r);

// �����Z
$i = (PHP_INT_MAX * -1) - 2;
var_dump($i);
$r = bcsub((string)(PHP_INT_MAX * -1), '2', 0);
var_dump($r);


