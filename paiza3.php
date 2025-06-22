<?php

list($n, $c) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$grid = [];
for ($i = 0; $i < $c; $i++) {
    $grid[] = trim(fgets(STDIN));
}
// $grid = [[10, 20, 30], [40, 50, 60]]

$result = [];
for($j=0;$j<$c;$j++){
    $tmp = round($grid[$j]/$n);
    if($tmp==0){
        $result[] = $n;
    }else{
        $result[] = $tmp*$n;
    }
}

foreach($result as $value){
    echo $value."\n";
}