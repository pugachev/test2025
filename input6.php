<?php

$data = [];

while (true) {
    $line = trim(fgets(STDIN));
    if ($line === 'exit') {
        break;
    }

    $data[] = $line;
    echo "データ追加: $line\n";
}

echo "受け取ったデータ:\n";
print_r($data);
