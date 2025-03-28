<?php
$i = random_int(0, 2);
echo "$i", "\n";

switch ($i) {
    case 0:
        echo "Zero";
        break;

    case 1;
        echo "1st";
        break;

    default:
        echo "any";
        break;
};
