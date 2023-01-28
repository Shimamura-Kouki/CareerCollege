<pre>
<?php
// password_hash.php
$raw_pass = 'password';

// �P����hash(�_���ȃp�^�[��)
$t_start = microtime(true);
$pass = hash('md5', $raw_pass);
$t_end = microtime(true);
//var_dump($pass);
var_dump($t_end - $t_start);

// salt + hash(�_���ȃp�^�[��)
$t_start = microtime(true);
$salt = 'abcdefg';
$pass = hash('md5', $salt . $raw_pass);
$t_end = microtime(true);
//var_dump($pass);
var_dump($t_end - $t_start);

// �u�ʂ�salt�v�{�X�g���b�`
$t_start = microtime(true);
$salt = random_bytes(10); // �ʂ�salt
$pass = $raw_pass;
// �X�g���b�`
for($i = 0; $i < 1000; ++$i) {
    $pass = hash('md5', $salt . $pass);
}
$t_end = microtime(true);
//var_dump($pass);
var_dump($t_end - $t_start);

// �{��
$t_start = microtime(true);
$pass = password_hash($raw_pass, PASSWORD_DEFAULT);
$t_end = microtime(true);
var_dump($pass);
var_dump($t_end - $t_start);

// �{��2
$t_start = microtime(true);
$pass = password_hash($raw_pass, PASSWORD_DEFAULT, ['cost' => 14]);
$t_end = microtime(true);
var_dump($pass);
var_dump($t_end - $t_start);



