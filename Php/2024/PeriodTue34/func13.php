<?php  // func13.php
declare(strict_types=1);

function hoge() {
	$i = 0;
	static $j = 0;
	++ $i;
	++ $j;
	echo "i is {$i}, j is {$j} <br>\n";
}

hoge();
hoge();
hoge();

