<?php  // password.php

// ���ƂɂȂ�p�X���[�h
$raw_pass = 'password';

// DB�ɕۑ�����p�X���[�h�̏������@�e��

// ��΃_���I�I�I�I�I
$saved_pass = $raw_pass; // ���p�X���[�h�ۑ�

// ��΃_���I�I�I�I�I
$saved_pass = md5($raw_pass); // MD5�ɂ��n�b�V��
var_dump($saved_pass);
$saved_pass = sha1($raw_pass); // SHA-1�ɂ��n�b�V��
var_dump($saved_pass);

// ��΃_���I�I�I�I�I
$salt = 'abcdefg'; // ���ʂ̃\���g(��)
$saved_pass = md5($salt . $raw_pass); // ���t��MD5�ɂ��n�b�V��
var_dump($saved_pass);
$saved_pass = sha1($salt . $raw_pass); // ���t��SHA-1�ɂ��n�b�V��
var_dump($saved_pass);

// �܂��ア
$salt = uniqid(); // �ʂ̃\���g(��)�Funiqid���������Ȃ�
$salt = md5(random_bytes(64)); // �ʂ̃\���g(��)
$saved_pass = md5($salt . $raw_pass); // ���t��MD5�ɂ��n�b�V��
var_dump($saved_pass);
$saved_pass = sha1($salt . $raw_pass); // ���t��SHA-1�ɂ��n�b�V��
var_dump($saved_pass);

// ����Ȃ�܂����S
$salt = md5(random_bytes(64)); // �ʂ̃\���g(��)
$saved_pass = $raw_pass;
for($i = 0; $i < 1000; ++$i) {
    //$saved_pass = sha1($salt . $saved_pass); // �X�g���b�`
    $saved_pass = hash('sha512', $salt . $saved_pass); // �X�g���b�`
}
var_dump($saved_pass);

// ���ꂪ�{��
$saved_pass = password_hash($raw_pass, PASSWORD_DEFAULT);
var_dump($saved_pass);

