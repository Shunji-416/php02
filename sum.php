<?php
function sum($x) {
   return $x *2;  
}
echo sum(5);

//課題2
function add($a, $b){
    return $a + $b;
}
echo add(3, 5);

//課題3
function sum2($arr) {
    $result = 1;
    
    foreach($arr as $a) {
        $result = $result * $a;
    }
    
    return $result;
}
//ここまでがsum2関数の定義
function sum3($arr) {
    $result = 1;
    
    foreach($arr as $a) {
        $result = $result + $a;
    }
    
    return $result;
}

$ar =array(1,3,5,7,9);

echo sum2( $ar );
echo sum3( $ar );
echo sum2($ar) + sum3( $ar );

//課題4
function max_array($arr){
    
 $max_number = $arr[0];
 foreach($arr as $a){
$a = $a > $max_number;}

 return $max_number;
 }