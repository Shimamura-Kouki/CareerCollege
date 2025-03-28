<?php
$height = random_int(100, 160);
$age = random_int(54, 74);
// $height = 130;
// $age = 64;

echo "$height , $age", "\n";

if ($height >= 130 && $age <= 64) {
    echo "can ride";
} else {
    echo "can't ride";
}
echo "正解";
