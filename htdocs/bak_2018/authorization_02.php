<?php  // authorization_02.php

// �A�v�����Ŏg���₷�����@
$sid = hash('sha512', random_bytes(128));
var_dump($sid);

$sid = hash('sha256', random_bytes(128));
var_dump($sid);

