<?php // object.php

// �C���X�^���X�̍쐬
$obj = new stdClass();
var_dump($obj);

// ��O�̓�����/�󂯎���
try {
    echo "in to try before throw<br>\n";
    throw new Exception('hoge error');
    echo "in to try after throw<br>\n";
} catch(Exception $e) {
    //var_dump($e);
    echo $e->getMessage();
}
