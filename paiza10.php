<?php

list($n, $m) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$grid = [];
for ($i = 0; $i < $m; $i++) {
    $grid[] = array_map('intval', explode(" ", trim(fgets(STDIN))));
}
// $grid = [[10, 20, 30], [40, 50, 60]]
$result = 0;
for($i=0;$i<$m;$i++){
    $count = 0;
    for($j=0;$j<$n;$j++){
        $count += $grid[$i][$j];
    }
    if($count>0){
        $result+= $count;
    }
}

echo $result."\n";