<?php

list($w, $p,$q) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$result = $w*(1-$p/100)*(1-$q/100);
echo $result."\n";