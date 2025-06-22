<?php

list($h, $w,$n) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$table=[];
for ($i = 0; $i < $h; $i++) {
    $table[$i] = array_map('intval', explode(" ", trim(fgets(STDIN))));
}
$len = intval(trim(fgets(STDIN))); // 3
$player=0;
$result = array_fill(0, $n, 0);
//二組のカードのポジションをうけとる
for ($i = 0; $i < $len; $i++) {
    
    list($x1,$y1,$x2,$y2) = array_map('intval', explode(" ", trim(fgets(STDIN))));
    $x1--;
    $y1--;
    $x2--;
    $y2--;
    if (
        $table[$x1][$y1] !== -1 &&
        $table[$x2][$y2] !== -1 &&
        $table[$x1][$y1] === $table[$x2][$y2]
    ) {
        $result[$player] += 2;
        $table[$x1][$y1] = -1;
        $table[$x2][$y2] = -1;
    }else{
        $player = ($player + 1) % $n;
    }
}

for($i=0;$i<$n;$i++){
    echo $result[$i]."\n";
}
