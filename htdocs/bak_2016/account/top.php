<?php
//
require_once('init_auth.php');

?><!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=1;">
<title>カフェショップ会計</title>
</head>

<body>
<h1>カフェショップ会計　ログイン後Top</h1>
<a href="./logout.php">ログアウト</a><br>

<ul>
  <li><a href="./user_list.php">ログインユーザ一覧</a>
  <li><a href="./payment_list.html">入金一覧</a>
  <li><a href="./withdrawal_list.html">出金一覧</a>
  <li><a href="./subject.php">科目マスタ一覧</a>
  <li><a href="./monthly_totals.html">月次集計</a>
  <li>年次集計
</ul>


</body>
</html>
