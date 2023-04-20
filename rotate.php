<?php
function rotate($size, $times) {
    $arr = range(1, $size);
    $remainder = $times % $size;
    $rotated = array_merge(array_slice($arr, $remainder), array_slice($arr, 0, $remainder));
    echo "[" . implode(",", $rotated) . "]";
}
rotate(5,4);