<?php

while (true) {
    $line = trim(fgets(STDIN));
    if ($line === '') {
        continue;
    }
    // 空行ならスキップ

    // 入力データを処理（例: 出力するだけ）
    echo "入力: {$line}\n";
}
