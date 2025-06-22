<?php

list($n, $m) = array_map('intval', explode(" ", trim(fgets(STDIN))));

//ファイルにあるポケット数(表・裏)
$file = $n*2;

// $mがどのファイルにあるのか
$fp = intval(($m-1)/$file);
// $mがそのファイルの何番目か
$pp = ($m-1)%$file;

//背中合わせの数をだす
$reverse1 = ($file-1)-$pp;
$reverse2 = $fp*$file+$reverse1+1;

// echo $reverse1."\n";
echo $reverse2."\n";