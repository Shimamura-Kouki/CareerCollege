<?php  // dq_damage.php
declare(strict_types=1);

/*
代表的なドラゴンクエストシリーズのダメージ計算式は
攻撃力÷2－守備力÷4＝ダメージ基礎値
となります。

実際にはそこからランダム数値によって多少上下します。ダメージ幅は
ダメージ基礎値 ÷16＋1（端数切捨）
で求めることができます。

例）攻撃力200のプレイヤーが守備力100の敵を攻撃した場合のダメージ。
（200÷2－100÷4） ±（75÷16＋1） ＝最小70～75～80最大
となります。
*/
function calDamage($攻撃力, $守備力) {
    // バフやデバフの確認

    // 攻撃力÷2－守備力÷4＝ダメージ基礎値
    $ダメージ基礎値 = ($攻撃力 / 2) - ($守備力 / 4);
    $ダメージ基礎値 = (int)$ダメージ基礎値;

    // 種族特攻の影響(ダメージ基礎値を変動させる)
    
    $ダメージ幅 = intval($ダメージ基礎値/16) + 1;
    // var_dump($ダメージ幅);

    // 属性の影響(ダメージ基礎値を変動させる)
    
    $ダメージ = $ダメージ基礎値 - $ダメージ幅;
    $ダメージ = $ダメージ + random_int(0, $ダメージ幅*2);

    return $ダメージ;
}

$r = calDamage(200, 100);
var_dump($r);

