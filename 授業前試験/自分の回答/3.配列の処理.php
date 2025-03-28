<?php
$arr = [];
$arr = [1, 2, 3];
foreach ($arr as $key => $value) {
    echo $value, ",";
}
echo "\n";
?>
<?php
echo "不正解", "\n";
$arr = [];
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
foreach ($arr as $v) {
    echo "{$v} \n";
}
?>