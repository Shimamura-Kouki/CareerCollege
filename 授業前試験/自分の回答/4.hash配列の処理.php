<?php
$harr = [
    "key_1" => 111,
    "key_2" => "2nd",
    "key_3" => 3.14
];
foreach ($harr as $key => $value) {
    echo $value, ",";
};
echo "\n";
echo "不正解", "\n";

foreach ($harr as $k => $v) {
    echo "{$k}: {$v} \n";
}
