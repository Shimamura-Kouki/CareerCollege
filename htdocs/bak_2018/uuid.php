<?php  // uuid.php

//
$uuid = trim(`uuidgen -r`); // �����p�~����邩���c�c
$uuid = trim(exec('uuidgen -r'));
var_dump($uuid);
