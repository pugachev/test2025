<?php

list($seatnum, $group) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$reserved = [];
$reserved = array_fill(0, $seatnum, false);
$result = 0;
$flg = false;
for ($i = 0; $i < $group; $i++) {
    list($people, $startpos) = array_map('intval', explode(" ", trim(fgets(STDIN))));
    //ここで$reserved[$startpos]から$people分の席をtrueにする
    for($j=0;$j<$people;$j++){
        $seat = ($startpos-1+$j)%$seatnum;
        if($reserved[$seat]){
            $flg = false;
            break;
        }else{
            $reserved[$seat] = true;
            $flg = true;
        }
    }
    if($flg){
        $result+=$people;
    }
    $flg = false;
}

echo $result."\n";
