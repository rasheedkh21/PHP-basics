<?php

//Arifmetik operatorlar
// $x = 5;
$y = 5;

echo $x + $y . "<br/>"; 
echo $x - $y. "<br/>"; 
echo $x / $y. "<br/>"; 
echo $x * $y. "<br/>"; 
echo $x ** $y. "<br/>"; ;
echo $x % $y. "<br/>"; 


// O'zlashtirish Operatorlar
$x = $y;
$x += $y; //$x= $x+$y
$x /= $y; //$x= $x+$y
$x *= $y; //$x= $x+$y

echo $x;

// pass the argumnet by reference
$a = 5;
$b = &$a;

echo $b;

// increment decrement operators

$x = 5;
echo $x++;
echo '<br/>';
echo $x;


echo ++$x;
echo '<br/>';
echo $x+5;

$a =99;
$b = 9;
$c = 8;

$c = $a++ / $b++ + --$c;
echo $c;


// taqqoslash operatorlari

$x= 5;
$y= 4;

var_dump($x != $y);
var_dump($x <=> $y);


$a = 10;
echo $a==15 ? "salom" : "hayr"; //natiha xayr 


$score = 5;

echo ($score > 4) ? 'good' : 'bad';

$month = false;
echo $month ?? 3; 


// teskari sanoq
$a = 784;
$A = $a%10;
$B = $a% 100;
$C = ($B - $A)/10;
$D = ($a - $B)/100;
echo $A. $C .$D;

//mantiqiy shart operatorlar
$b = 12;
 echo  ($b>0) && ($b <10) ? 
 "$b - 0 va 10 orasida joylashgan" : "$b - 0 va 10 orasida joylashmagan";


$b = 94;
 if  (($b>100) || ($b <10)){
    echo "$b -  10 sonidan sonidan katta";
 } else {
    echo "$b -  100 sonidan kichkina";
 }
$c = 12;

echo ($c%2 == 1) ? " A toq son" :" A juft son";


$a = 2;
$b = 12;
echo ($b % 2 == 1 || $a % 2 == 1) ? " A va B sonlarininng kamida bittasi toq" : " A va B sinlarning ikkalasi ham juft";

//1-masala
$son = 21;
echo "$son <br/>";

//2-masala
$x=10;
$y=15;

echo "x=$x " . "y=$y <br/>";

//3-masala
$x = 10;
$y= 15;
$z = $x+$y;

echo "$z <br/>";

//4-masala
$a =2;
$b =3;
echo $a+$b;
echo "<br/>";
echo $a-$b;
echo "<br/>";
echo $a*$b;
echo "<br/>";
echo $a/$b;
echo "<br/>";
//5-masala
$a =10;
$b =15;
$c=20;
echo $a+$b+$c;
echo "<br/>";
echo $a-$b+$c;
echo "<br/>";
echo $a*$b+$c;
echo "<br/>";
echo $a/$b+$c;
echo "<br/>";


//6-masala
$v=18;
$e =5;
echo $v%$e;
echo "<br/>";


//7-masala
$v=18;
$e =5;
echo $v%$e +1;


// 2chi blok 
// 1-masala.
// A va B sonlarning qiymatlarini almashtiring. A va B ning yangi qiymatlari ekranga chiqsin. Boshqa yangi o'zgaruvchi ishlatmasdan qiymatlarini almashtiring.

$a = 154;
$A = $a % 10; // Oxirgi raqamni topish
$B = $a % 100; // Oxirgi ikkita raqamni topish

// Almashtirish
$temp = $A;
$A = $B;
$B = $temp;

// Yangi qiymatlarni chiqarish
echo "A yangi qiymati: $A <br>";
echo "B yangi qiymati: $B";



// 2-masala

$son = 73; // 2 xonali son
$birinchi_raqam = floor($son / 10); 
$ikkinchi_raqam = $son % 10; 

$yigindisi = $birinchi_raqam + $ikkinchi_raqam; 

echo "Berilgan son: $son ";
echo "Raqamlar yig'indisi: $yigindisi ";


//3-masala  3 xonali son berilgan ularning yuzlar xonasidagi raqamni aniqlang
$son = 867;
$yuzlar_xonasi_raqami = floor($son / 100);



// echo " Berilgan raqam: ". $son;
// echo " Yuzlar xonasidagi raqam: ". $yuzlar_xonasi_raqami;

//4-masala.
//3 xonali son berilgan. Uning raqamlarini teskari tartibda yozilishidan hosil bo’lgan raqamni aniqlang.

$son = 567; // 3 xonali son
$birinchi_raqam = $son % 10; // Birinchi raqam
$ikkinchi_raqam = floor(($son % 100) / 10); // Ikkinchi raqam
$uchinchi_raqam = floor($son / 100); // Uchinchi raqam

// Teskari tartibda raqamlarni yozish
$teskari_son = $birinchi_raqam * 100 + $ikkinchi_raqam * 10 + $uchinchi_raqam;

echo "Berilgan son: $son \n";
echo "Teskari tartibdagi son: $teskari_son \n";


//5-masala

$N = 86295; // N sekundlar

// Soatni aniqlash
$soat = floor($N / 3600);

// Qoldiqni aniqlash
$qoldiq = $N % 3600;

// Daqiqani aniqlash
$daqiqa = floor($qoldiq / 60);

// Sekundni aniqlash
$sekund = $qoldiq % 60;


echo "Kun boshidan $soat soat, $daqiqa daqiqa, $sekund soniya o'tdi.\n";
echo $qoldiq;

//6-masala 
 //8-masala
$kafel_uzunligi = 0.8; // kafel uzunligi cm
$tomon_uzunligi1 = 17; // birinchi tomon uzunligi (metrda)
$tomon_uzunligi2 = 24; // ikkinchi tomon uzunligi (metrda)

// Kafelning yuzasini hisoblash
$kafel_yuzasi = $kafel_uzunligi**2; // kvadratmetrlarda
// xona yuzasi
$xona_yuzasi = $tomon_uzunligi1*$tomon_uzunligi2;
$kerak_kafel = floor($kafel_yuzasi/$xona_yuzasi);
echo "Xonaning yuzasi: $xona_yuzasi metrkvadrat\n ";
echo "Kerak bo'ladigan kafel soni: $kerak_kafel\n";