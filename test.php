<?php

list($n, $m) = array_map('intval', explode(" ", trim(fgets(STDIN))));

// 利益データの読み込み
$grid = [];
for ($i = 0; $i < $m; $i++) {
    $line = explode(" ", trim(fgets(STDIN)));
    $grid[] = array_map('intval', $line);
}

$maxProfit = PHP_INT_MIN; // 最小値で初期化

// 再帰関数でイベント選択を全探索
function dfs($i, $chosen, $grid, $n, $m) {
    global $maxProfit;

    // 全イベントを見終わったら、利益を計算
    if ($i === $m) {
        // 各会員ごとの損益を合計
        $total = 0;
        for ($user = 0; $user < $n; $user++) {
            $sum = 0;
            foreach ($chosen as $eventIndex) {
                if (isset($grid[$eventIndex][$user])) {
                    $sum += $grid[$eventIndex][$user];
                }
            }
            $total += $sum;
        }
        // 最大値を更新
        $maxProfit = max($maxProfit, $total);
        return;
    }

    // イベント i を「開催しない」場合
    dfs($i + 1, $chosen, $grid, $n, $m);

    // イベント i を「開催する」場合
    $chosen[] = $i;
    dfs($i + 1, $chosen, $grid, $n, $m);
}

dfs(0, [], $grid, $n, $m);

echo $maxProfit . "\n";
