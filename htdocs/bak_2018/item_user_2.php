<?php  // item_user_2.php

//
function use_item($e_string, $obj) {
    echo "{$e_string}<br>\n";
    // ���ʕ�������u�P�́v�ɕ�������
    $e_array = explode(',', $e_string);
    //var_dump($e_array);
    foreach($e_array as $e_mono) {
        $awk = explode(':', trim($e_mono));
        //var_dump($awk, (int)$awk[1]);
        switch(strtoupper($awk[0])) {
            case 'HP':
                $obj->healHP((int)$awk[1]);                break;
            case 'MP':
                $obj->healMP((int)$awk[1]);
                break;
            default:
                break;
        }
    }
}

//
class PC {
    //
    public function __construct($hp, $mp) {
        $this->max_hp = $this->hp = $hp;
        $this->max_mp = $this->mp = $mp;
    }
    public function print() {
       echo "HP: {$this->hp}/{$this->max_hp}<br>\n";
       echo "MP: {$this->mp}/{$this->max_mp}<br>\n";
       echo "<br>\n";
    }
    public function damageHp($d) {
       if (0 < $d) {
           //$this->hp = $this->hp - $d;
           $this->hp -= $d;
       }
    }
    public function damageMp($d) {
       if (0 < $d) {
           $this->mp -= $d;
       }
    }
    //
    public function healHP($h) {
       $this->hp += $h;
       if ($this->max_hp < $this->hp) {
           $this->hp = $this->max_hp;
       }
    }
    public function healMP($h) {
       $this->mp += $h;
       if ($this->max_mp < $this->mp) {
           $this->mp = $this->max_mp;
       }
    }
    //
    private $max_hp;
    private $hp;
    private $max_mp;
    private $mp;
}

//
$obj = new PC(500, 300);
$obj->print();

// �_���[�W�𕉂킹��
$obj->damageHp( mt_rand(1, 300) );
$obj->damageMp( mt_rand(1, 300) );
$obj->print();

$item_array = [
    'HP:+10',		// HP+10��
    'MP:+10',		// MP+10��
    'HP:+500',		// HP+500��
    'hp:+100,MP:+100',	// HP+100, MP+100��
    'HP:-10,MP:+100',	// HP-10, MP+100��
];
// �A�C�e�����g��
use_item($item_array[mt_rand(0, 4)], $obj);
$obj->print();


