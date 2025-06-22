<?php

while (true) {
    echo "データ数を入力してください（Ctrl+Cで終了）: ";
    $n = intval(trim(fgets(STDIN)));

    for ($i = 0; $i < $n; $i++) {
        echo "[$i] 入力: ";
        $line = trim(fgets(STDIN));
        echo "  → 入力内容: $line\n";
    }

    echo "--- 処理完了 ---\n";
}
