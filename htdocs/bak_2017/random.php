<pre>
<?php
// random.php
// �����̃V�[�h(��)��ݒ肷��
//mt_srand(time());
//mt_srand( 1 );
// ���������
for($i = 0; $i < 10; ++$i) {
    // ���������
    //$r = rand(0, 99);
    $r = mt_rand(0, 99);
    //$r = random_int(0, 99);
    echo "{$r}\n";
}

