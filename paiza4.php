<?php

$n    = intval(trim(fgets(STDIN))); // 3
$data = [];
for ($i = 0; $i < $n; $i++) {
    $data[] = trim(fgets(STDIN));
}
// $data = ['apple', 'banana', 'grape']

$ball = 0;
$strike = 0;
$out = 0;
$fourball = 0;

foreach($data as $value){
    if($value=='strike'){
        $strike++;
        if($strike==3){
            echo "out!"."\n";
            $strike = 0;
        }else{
            echo "strike!"."\n";
        }
    }else if($value=='ball'){
        $ball++;
        if($ball==4){
            echo "fourball!"."\n";
            $ball = 0;
        }else{
            echo "ball!"."\n";
        }
    }
}