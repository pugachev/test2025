<?php

list($n, $k, $m) = array_map('intval', explode(" ", trim(fgets(STDIN))));

$wordlist = [];
for ($i = 0; $i < $k; $i++) {
    $wordlist[] = trim(fgets(STDIN));
}

$comments = [];
for ($i = 0; $i < $m; $i++) {
    $comments[] = trim(fgets(STDIN));
}

$out = array_fill(0, $n, false); // 脱落したか
$used = []; // 使用済み単語
$prev = null;

for ($i = 0; $i < $m; $i++) {
    $player = $i % $n;
    if ($out[$player]) continue; // 脱落者はスキップ

    $word = $comments[$i];

    // ルール1：単語リストに含まれているか
    if (!in_array($word, $wordlist)) {
        $out[$player] = true;
        continue;
    }

    // ルール2：しりとりルール（前の単語の末尾と一致）
    if ($prev !== null && !$out[$prev['player']]) {
        if (substr($word, 0, 1) !== substr($prev['word'], -1)) {
            $out[$player] = true;
            continue;
        }
    }

    // ルール3：使い回し禁止
    if (in_array($word, $used)) {
        $out[$player] = true;
        continue;
    }

    // ルール4：zで終わると脱落
    if (substr($word, -1) === 'z') {
        $out[$player] = true;
        continue;
    }

    // セーフ
    $used[] = $word;
    $prev = ['player' => $player, 'word' => $word];
}

// 生き残った人
$alive = [];
for ($i = 0; $i < $n; $i++) {
    if (!$out[$i]) $alive[] = $i + 1; // 人は1始まり
}

// 出力
echo count($alive) . "\n";
foreach ($alive as $v) {
    echo $v . "\n";
}
