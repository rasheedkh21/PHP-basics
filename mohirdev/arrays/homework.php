<?php
//Arraylarga oid vazifalar 1.1
//1-masala
$n = 10;
$sonlar = [];
for ($i = 0; $i <= $n; $i++) {
    $sonlar[] = $i . "<br>";
}
var_dump($sonlar);
echo "<br>";

//2-masala
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}
echo $sum . "<br>";

//3-masala
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 1;
for ($i = 0; $i < count($numbers); $i++) {
    $sum *= $numbers[$i];
}
echo $sum . "<br>";

//4-masala 
function sum_odd_numbers($N)
{
    $massiv = array();
    for ($i = 0; $i < $N; $i++) {
        $massiv[] = $i;
    }
    $yigindi = 0;
    foreach ($massiv as $key => $value) {
        if ($key % 2 == 0) {
            $yigindi += $value;
        }
    }
    return $yigindi;
}

$N = 100;
echo " 1 dan $N gacha Toq indeksdagi elementlar yig'indisi: " . sum_odd_numbers($N);
echo "<br>";

//5-masala 
$N = 10;
$massiv = range(0, $N);
$sum = 0;
for ($i = 0; $i < $N; $i++) {
    if ($i % 3 == 0) {
        $sum = $sum + $massiv[$i];
    }
}

echo " 1da $N gacha Massivning 3 ga karrali indeksdagi elementlari yig'indisi: " . $sum;
echo "<br>";

//6-masala
$N = 13;
$massiv = range(0, $N);
$sum = 0;
for ($i = 0; $i < $N; $i++) {
    if ($i % 4 == 0) {
        $sum = $sum + $massiv[$i];
    }
}

echo " 1da $N gacha Massivning 4 ga karrali indeksdagi elementlari yig'indisi: " . $sum;
echo "<br>";

//7-masala
$N = 7;
$massiv = range(1, $N);
$sum = 0;
foreach ($massiv as $element) {
    if ($element % 2 == 0) {
        $sum += $element;
    }
}
echo "1 dan $N gacha Massivning juft sonlari yig'indisi: " . $sum;
echo "<br>";
//8-masala
$N = 12;
$massiv = range(1, $N);
$bor = false;
$target = 9;

foreach ($massiv as $key => $value) {
    if ($value == $target) {
        $bor = true;
        break;
    }
}

if ($bor) {
    echo "$target-indexli element bor <br>";
} else {
    echo "bunday indexli element yo'q <br>";
}
//9-masala
$N = 8;
$massiv = range(1, $N);

// 2-va 5-indeksdagi elementlarni almashtirish
$tmp = $massiv[2];
$massiv[2] = $massiv[5];
$massiv[5] = $tmp;

// Hosil bo'lgan massivni ekranga chiqarish
echo "Almashtirilgan massiv: ";
foreach ($massiv as $element) {
    echo $element . " ";
}
