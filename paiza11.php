<?php

$n    = intval(trim(fgets(STDIN))); // 3
$data = [];
for ($i = 0; $i < $n; $i++) {
    $data[] = trim(fgets(STDIN));
}

foreach($data as &$value){
    if (preg_match('/(sh|ch|s|x|o)$/', $value)) {
        $value = $value . 'es';
    } elseif (preg_match('/fe$/', $value)) {
        $value = preg_replace('/fe$/', 'ves', $value);
    } elseif (preg_match('/f$/', $value)) {
        $value = preg_replace('/f$/', 'ves', $value);
    } elseif (preg_match('/[^aeiou]y$/', $value)) {
        $value = preg_replace('/y$/', 'ies', $value);
    } else {
        $value = $value . 's';
    }
    echo $value."\n";
}
