<?php //sec_string.php

// UUIDv4���g��
$uuid = trim(exec('uuidgen -r'));
var_dump($uuid);

// random_bytes���g��
$id = random_bytes(32);
var_dump( bin2hex($id) );
var_dump( base64_encode($id) );
