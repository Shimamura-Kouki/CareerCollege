<?php  // init_auth.php

// ��������
require_once('./init.php');

// �F�`�F�b�N
if (false === Authorization::isAuth()) {
    header('Location: ./index.html');
    return ;
}

