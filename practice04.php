<?php

/*
function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);
*/

// 1
function double($i) {
    return $i * 2;
}
$result = double(4);
echo $result;

echo "\n";

// 2
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 5);
echo $result;

echo "\n";

// 3
function multiplication($arr) {
    $result = 1;
    foreach ($arr as $value) {
        $result *= $value;
    }
    return $result;
}

$arr = array(1, 3, 5, 7, 9);
$result =multiplication($arr);
echo $result;

echo "\n";

// 4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if ($a > $max_number) {
        $max_number = $a;
    }
  }

  return $max_number;
}

$arr = array(1, 3, 5, 7, 9);
$result = max_array($arr);
echo $result;

echo "\n";

// 5
// strip_tags
$html = "<p>This is <strong>book</strong> and <em>red</em> pen.</p>";
$text = strip_tags($html);
echo $text;

echo "\n";

// array_push
$fruits = array("apple", "banana");
array_push($fruits, "orange", "strawberry");
print_r($fruits);

echo "\n";

// array_merge
$array1 = array("abc", "def");
$array2 = array("ghi", "jkl");
$result = array_merge($array1, $array2);
print_r($result);

echo "\n";

// time mktime
$current_timestamp = time();
echo $current_timestamp;

echo "\n";

$timestamp = mktime(12, 0, 0, 3, 24, 2024);
echo $timestamp;

echo "\n";

// date
$current_date = date('Y-m-d H:i:s');
echo $current_date;

echo "\n";