<?php

// パラメタから「読み込むデータのプライマリキー」を取得：悪意のあるupdate
// $id = $_GET['id'];
$id = "1;UPDATE practice_5 SET data='crack';--";

// SQLの組み立て
$sql = "SELECT * FROM practice_5 WHERE practice_id={$id};";

// 「組み立てたSQL」の表示
echo $sql;
