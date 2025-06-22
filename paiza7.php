<?php

list($n,$k,$m) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$wordlist = [];
$commentlist = [];
// $commentedlist = [];
$flg = false;
$outUserList = [];
for ($i = 0; $i < $k; $i++) {
    $wordlist[] =trim(fgets(STDIN));
}
for ($i = 0; $i < $m; $i++) {
    $commentlist[] = trim(fgets(STDIN));
}
$userlist=[];
for($i=0;$i<$n;$i++){
    $userlist[] = $i;
}

//画面で入力されたコメントが既存コメントに存在するかをチェック
foreach($commentlist as $key => $value){
    foreach($wordlist as $word){
        //コメントされた言葉がwordlistにあるかを調べる
        if($value!==$word){
            $outUserList[] = $key%$n;
        }
    }
}
//画面で入力されたコメントの末尾がzかどうかをチェック
foreach($commentlist as $key => $value){
    // echo $value."\n";
    if (substr($value, -1) === 'z') {
        $outUserList[] = $key%$n;
    }
}
// 画面で入力されたコメントの先頭文字が一つ前の単語の末尾と同じかをチェック
for($i=0;$i<$m;$i++){
    if($i>0 && $outUserList[$i%$n]){
        if(substr($commentlist[$i], 0, 1) === substr($commentlist[$i-1], -1)){
            $outUserList[] = $i%$n;
        }
    }
}
//コメントを出力
$tmp =  array_diff($userlist, $outUserList);
foreach($tmp as $value){
    echo $value."\n";
}



