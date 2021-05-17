<?php
$array = [
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5]
];
$sumCol = 0;
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array); $j++) {
        if ($i >= 0 && $j == 1) {
            $sumCol += $array[$i][$j];
        }

    }
}

echo $sumCol;