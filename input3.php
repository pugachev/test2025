<?php

list($h, $w) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$grid        = [];
for ($i = 0; $i < $h; $i++) {
    $grid[] = array_map('intval', explode(" ", trim(fgets(STDIN))));
}
// $grid = [[10, 20, 30], [40, 50, 60]]
