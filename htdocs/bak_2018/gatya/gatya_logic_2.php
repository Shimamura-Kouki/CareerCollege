<?php  // gatya_logic_2.php
/*
card_id 1 �� 50%
card_id 2 �� 30%
card_id 3 �� 15%
card_id 4 �� 4%
card_id 5 �� 1%
 */

// �u���v���v��c��
$total = 50 + 30 + 15 + 4 + 1;

// �����𐶐�
$key = mt_rand(0, $total - 1);
var_dump($key);

// �u�ǂ�Ƀq�b�g���邩�v�𔻒�
       if ($key < 50) {
    // card_id 1 �� 50%
    $card_id = 1;
} else if ($key < (50+30)) {
    // card_id 2 �� 30%
    $card_id = 2;
} else if ($key < (50+30+15)) {
    // card_id 3 �� 15%
    $card_id = 3;
} else if ($key < (50+30+15+4)) {
    // card_id 4 �� 4%
    $card_id = 4;
} else if ($key < (50+30+15+4+1)) {
    // card_id 5 �� 1%
    $card_id = 5;
} else {
    // �����ɂ͓���Ȃ��͂��I�I
    $card_id = -1;
}

var_dump($card_id);
