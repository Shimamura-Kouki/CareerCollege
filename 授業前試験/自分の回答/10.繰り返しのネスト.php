<?php
for ($i = 1; $i <= 9; $i++) {
    for ($a = 1; $a <= 9; $a++) {
        echo "{$i}×{$a}=", $i * $a, ",";
        // echo $i * $a, ",";
    }
    echo "\n";
}
echo "正解";
