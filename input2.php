<?php

$n     = intval(trim(fgets(STDIN))); // 2
$table = [];
for ($i = 0; $i < $n; $i++) {
    $table[] = array_map('intval', explode(" ", trim(fgets(STDIN))));
}
// $table = [[1, 2, 3], [4, 5, 6]]
