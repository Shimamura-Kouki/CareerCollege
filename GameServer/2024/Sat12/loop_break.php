<?php  // loop_break.php

for ($i = 0; $i < 10; ++$i) {
    echo "{$i}, ";
}
echo "<br>";

for ($i = 0; $i < 10; ++$i) {
    if ($i >= 5) {
        break;
    }
    echo "{$i}, ";
}
echo "<br>";

for ($i = 0; $i < 10; ++$i) {
    if ($i % 2 === 0) {
        continue;
    }
    echo "{$i}, ";
}
echo "<br>";
