<?php
$input_nuumber = $argv[1];

if($input_nuumber % 2 == 0){
    echo $input_nuumber . "は偶数です" . PHP_EOL;
}else{
    echo $input_nuumber . "は奇数です" . PHP_EOL;
}