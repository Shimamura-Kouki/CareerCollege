<?php  // gatya_logic_2_new.php

function gatya($param) {
    // �u���v���v��c��
    $total = 0;
    foreach($param as $card_id => $num) {
        $total += $num;
    }

    // �����𐶐�
    $key = mt_rand(0, $total - 1);
//var_dump($key);

    // �u�ǂ�Ƀq�b�g���邩�v�𔻒�
    $before = 0;
    foreach($param as $card_id => $num) {
        $before += $num;
        if ($key < $before) {
            return $card_id;
        }
    }
    // else
    return -1;
}
/*
$param = [
    1 => 50,
    2 => 30,
    3 => 15,
    4 => 4,
    5 => 1,
];
//
$card_id = gatya($param);
var_dump($card_id);
*/

