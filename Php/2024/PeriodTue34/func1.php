<?php  // func1.php

// 関数の宣言
function 関数名($引数) {
	// 処理
	// 処理
	// 処理
	echo "処理 {$引数}<br>";

	return "戻り値";
}

// 関数を使う / 関数を呼ぶ
関数名("引数 1");

// 関数を呼ぶ＋戻り値を受け取る
$r = 関数名("引数 2");
var_dump($r);
