<?php
/*
 �{�R�[�h�́A�Ӑ}�I��Shift_JIS�ŋL�q���Ă��܂�
 */

header("Content-type: text/html charset=Shift_JIS");
?>
<meta charset="Shift_JIS">
<pre>
<?php
// magic_quotes_gpc �̌��݂̐ݒ�
echo "magic_quotes_gpc is ...\n";
var_dump( get_magic_quotes_gpc() );

// �[���I�ȁAmagic_quotes�̋����̊m�F
$s = "O'Reilly";
var_dump($s);
var_dump( addslashes($s) );

//
$s = 'test"test';
var_dump($s);
var_dump( addslashes($s) );

//
$s = 'test\\test';
var_dump($s);
var_dump( addslashes($s) );

//
$s = '���ѕ\ ';
var_dump($s);
var_dump( addslashes($s) );

//
$s = addslashes($s);
var_dump($s);
var_dump( addslashes($s) );

//
$s = addslashes($s);
var_dump($s);
var_dump( addslashes($s) );
