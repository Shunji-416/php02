<?php
$name = '伊藤峻志';
if ($name = '伊藤峻志') {
 echo "私は伊藤峻志です";
} else {
    echo "私は伊藤峻志ではありません";
}

$total = 0;
for ($i = 1; $i <= 10000; $i ++) {
    $total += $i;
}
echo $total;

$fruits = array("apple", "orange", "grape", "banana", "strawberry" );
foreach($fruits as $fruits) {
    echo $fruits;
}

$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
    if($i % 5 == 0){
        echo $i;
    }
}

