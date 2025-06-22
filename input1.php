<?php

$n    = intval(trim(fgets(STDIN))); // 3
$data = [];
for ($i = 0; $i < $n; $i++) {
    $data[] = trim(fgets(STDIN));
}
// $data = ['apple', 'banana', 'grape']
