<?php
// loop.php
// http://dev2.m-fr.net/XXXXX/loop.php

// for 10��J��Ԃ�
for($i = 0; $i < 10; ++$i) {
    echo $i, "<br>\n";
}
// 1�`10�܂ł��J�E���g
for($i = 1; $i <= 10; ++$i) {
    echo $i, "<br>\n";
}

// while 10��J��Ԃ�
$i = 0;
while($i < 10) {
    echo $i, "<br>\n";
    ++$i;
}

// do-wihle 10��J��Ԃ�
$i = 0;
do {
    echo $i, "<br>\n";
    ++$i;
} while($i < 10);

// while��do-while�̈Ⴂ
while(false) {
    echo "in while <br>\n"; // �ʂ�Ȃ�
}
//
do {
    echo "in do-while <br>\n"; // �ʂ�
} while(false);

