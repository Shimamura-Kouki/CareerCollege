<?php  // time.php
//
$t = time();
var_dump($t);
echo "<br>\n";
//
echo date(DATE_ATOM, $t) , "<br>\n";
echo date(DATE_ATOM, $t - 3600) , "<br>\n";

//
echo "<br>\n";
$t = strtotime('2/18/2015');
echo date(DATE_ATOM, $t) , "<br>\n";
$t = strtotime('February 18th, 2015');
echo date(DATE_ATOM, $t) , "<br>\n";
//$t = strtotime('18/2/2015'); // �C�M���X���炵��
//echo date(DATE_ATOM, $t) , "<br>\n";
$t = strtotime('18th February 2015');
echo date(DATE_ATOM, $t) , "<br>\n";




