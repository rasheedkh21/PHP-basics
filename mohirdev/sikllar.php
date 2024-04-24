<?php
//while operatori har doim shart bajargandan keyin oziga qaytadi va tekshiradi qachonki shart bajarilib tugasa keyin boshqa elementga o'tadi 
$x = 1;
while ($x <= 5) {
    echo "x = $x <br>";
    $x++;
}

$chelak = 3;
$bochka = 100;
$suv = 0;
$hisoblovchi = 0;
while ($suv < $bochka) {
    $suv = $suv + $chelak;
    echo " bochkadagi suv $suv litr <br>";
    $hisoblovchi++;

}
echo $hisoblovchi;

//while ichida while lar 

$i = 1;
while ($i <= 3) {
    $j = 1;
    while ($j <= 30) {
        echo " $i $j <br>";
        $j++;
    }
    $i++;
}


//do while 
$a = 1;

do {
    echo "a = $a <br>";
    $a++;
} while ($a <= 10);

//masala
$s = 0;
$i = 1;
$n = 100;
do {
    $s = $s + $i;
    $i++;
} while ($i <= 100);

// echo "1 dan $n gacha boldan sonlar yigindisi $s <br>";

while ($i <= 100) {
    $s = $s + $i;
    $i++;
}
echo $s . "<br>";

// for loop (sikli haqida)
for ($i = 1; $i <= 9; $i++) {
    echo " bu hozir $i <br> gacha hisobladi <br>";
}
// shart yoqlik varianti 

for ($i=1; ; $i++) { 
    if ($i >10) {
        break;
    }
    echo($i . "<br>");
}

//boshlangich qiymat tepada berib hech qanday shart berilmaydigan holati 

$i = 1;
for (;  ; ) { 
    if ($i>10) {
        break; 
    }
    echo($i);
    echo $i++;
}

//mashxur misol
// * hosil qilish
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

//1dan 10gacha soanlar yigindisini hisoblash
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}
echo $sum . "<br>";

//1dan 20gacha barcha toq sonlarni  chiqarish

for ($i = 0; $i < 20; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . "<br>";
}

//masalalar 
//1-masala
$sanoq_boshi = 1;
$sanoq_oxiri = 100;
$sum = 0;
while ($sanoq_boshi <= $sanoq_oxiri) {
    $sum = $sum + $sanoq_boshi;
    $sanoq_boshi++;
}
echo $sum . "<br>";

//2-masala 
$count = 0;
while ($count < 16) {
    echo "* ";
    $count++;
}
//3-masala
function factorial($N) {
    if ($N < 0) {
        return "Manfiy sonning faktoriali mavjud emas";
    } elseif ($N == 0 || $N == 1) {
        return 1;
    } else {
        $result = 1;
        $i = 2;
        do {
            $result *= $i;
            $i++;
        } while ($i <= $N);
        return $result;
    }
}

$N = 5; 
echo "$N faktoriali: " . factorial($N) ."<br>";

//4-masala 
function kopaytirish_jadvali($number){
    $i=1;
    do {
        $result = $number * $i;
        echo "$number x $i = $result <br>";
        $i++;
    } while ($i <= 10);
}
kopaytirish_jadvali(9);
kopaytirish_jadvali(8);

//5-masala

//forga doir masalalar 
//1-masala 
$N = 100;
for ($i = 1; $i < $N; $i++) {
    echo $i . ", ";
}

//2-masala 
$sum = 0;
for ($i = 1; $i <= $N; $i++) {
    $sum = $sum + $i;

}
echo $sum . " - 1 dan $N gacha sonalar yigindisi <br>";

//3-masala 
$N = 5;
$sum = 1;
for ($i = 1; $i <= $N; $i++) {
    $sum *= $i;
}
echo "$sum - 1 dan $N gacha sonlar ko'paytmasi <br>";

//4-masala 
$n = 100;
$sum = 0;
for ($i = 2; $i <= $n; $i += 2) {
    $sum += $i;
}
echo "1 dan $n gacha bo'lgan juft sonlarining yig'indisi: $sum <br>";


//5-masala
function sumRange($N, $M)
{
    $sum = 0;
    for ($i = $N; $i <= $M; $i++) {
        $sum += $i;
    }
    return $sum;
}
$M = 1;
$N = 12;
echo "$M dan $N gacha sonlarining yig'indisi: " . sumRange($M, $N) . "<br>";

// 6- masala 
function tortgakarrali($N, $M)
{
    $sum = 0;

    for ($i = $N; $i <= $M; $i++) {
        if ($i % 4 == 0) {
            $sum += $i;
        }
    }
    return $sum;
}
echo "$M dan $N gacha faqat 4ga karrali sonlar  yig'indisi: " . tortgakarrali($M, $N) . "<br>";

//7-masala 
function count_even_numbers($M, $N)
{
    $count = 0;
    for ($i = $M; $i <= $N; $i++) {
        if ($i % 2 == 0) {
            $count++;
        }
        return $count;
    }
}

$M = 1;
$N = 10;
echo "$M dan $N gacha $count ta juft son bor" . count_even_numbers($M, $N) . "<br>";

//8-masala 
for ($i = 10; $i >= 1; $i--) {
    echo $i . "";

}
//9-masala 
$text = "Salom";
$reversed_text = "";

for ($i = strlen($text) - 1; $i >= 0; $i--) {
    $reversed_text .= $text[$i];
}

echo "<br>" . $reversed_text . "<br>";
//11-masala 
function calculateSum($N)
{
    $sum = 0;
    $number = 0;

    for ($i = 1; $i <= $N; $i++) {
        $number = $number * 10 + 1; // Keyingi sonni hosil qilish
        $sum += $number;
    }

    return $sum;
}

$N = 5;
echo "Yig'indi: " . calculateSum($N) . "<br>";


//13- masala
$size = 7; // I harfining hajmi

for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size; $j++) {
        if ($i == 1 || $i == $size || $j == floor($size / 2) + 1) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}


$num = 2;
do {
    $num += 2;
    echo $num, "\n";
} while (false );