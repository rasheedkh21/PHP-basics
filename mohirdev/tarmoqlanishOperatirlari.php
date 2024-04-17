<?php
//1chi usul  holati faqat True holatda ish bajarsin
$yosh = 0;

// if($yosh == 18){
//     echo "Siz 18 yoshda emassiz";
// }
// if(($yosh >= 18) &&($yosh <=40)){
//     echo "Siz qirchillama yoshdasiz";
// }


//2- usul holati agar true bolsa bu ishni false bolsa boshqa ishni bajarishi kerak.

// if(($yosh >= 18) &&($yosh <=40)){
//     echo "Siz qirchillama yoshdasiz";
// }else{
//     echo "Bratim davriz tugapti-ku";
// }


//3chi usul holati 
$yosh1 = 99;
// if (($yosh1>= 18)&&($yosh1 <= 40)) {
//     echo ("Siz biz uchun to'ri kelasiz");
// } elseif (($yosh1<=18)&& ($yosh1 >=0)) {
//     echo ("Biz uchun yoshlik qilasiz");
// } else {
//     echo ("Davriz o'tibdi-ku bratim");
// }


//MASALA if elseif else VA swich case 

// $kun = 1;
// //if elseif else
// if ($kun == 1) {
//     echo "Dushanba";
// } elseif ($kun == 2) {
//     echo "Seshnaba";
// } elseif ($kun == 3) {
//     echo "Chorshanba";
// } elseif ($kun == 4) {
//     echo "Payshanba";
// } elseif ($kun == 5) {
//     echo "Juma";
// } elseif ($kun == 6) {
//     echo "Shanba";
// } elseif ($kun == 7) {
//     echo "Yakshabna";
// } else {
//     echo "Hafta kuni sonini noto'g'ri kiritdingiz";
// }

// //switch case
// $kun1 = 5;
// switch ($kun1) {
//     case 1:
//         echo "Dushanba";
//         break;
//     case 2:
//         echo "Seshanba";
//         break;
//     case 3:
//         echo "Chorshanba";
//         break;
//     case 4:
//         echo "Payshanba";
//         break;
//     case 5:
//         $title = "Bugun soat 13:00 da JUMA namozi o'qiladi \n";
//         echo "Juma" . $title;
//         break;
//     case 6:
//         echo "Shanba";
//         break;
//     case 7:
//         echo "Yakshanab";
//         break;

//     default:
//         echo "Hafta kuni raqamini to'g'ri belgilang";
//         break;
// }

// //MATCH

// $return_value = match($kun1){
//     1=> "Dushanba",
//     2=> "Seshanba",
//     3=> "Chorshanba",
//     4=> "Payshanba",
//     5=> "Juma",
//     6=> "Shanba",
//     7=> "Yaskshanba",
// };
// var_dump($return_value);


$son = 0;
if ($son > 0) {
    echo $son .  "- son musbat \n";
} elseif ($son < 0) {
    echo $son . "- son manfiy\n";
} else {
    echo "siz {$son}ni tanladingiz  \n";
}

//2-masala

$kun = 1;
//if elseif else
if ($kun == 1) {
    echo "Dushanba\n";
} elseif ($kun == 2) {
    echo "Seshnaba";
} elseif ($kun == 3) {
    echo "Chorshanba";
} elseif ($kun == 4) {
    echo "Payshanba";
} elseif ($kun == 5) {
    echo "Juma";
} elseif ($kun == 6) {
    echo "Shanba";
} elseif ($kun == 7) {
    echo "Yakshabna";
} else {
    echo "Hafta kuni sonini noto'g'ri kiritdingiz";
}
//3-masala
$soz = "sardoroga";
$uzunlik = strlen($soz);

if ($uzunlik <= 3) {
    echo strtoupper($soz);
} else {
    $oxirgi_harf = substr($soz, -3);
    $bosh_qism = substr($soz, 0, $uzunlik - 3);
    echo $bosh_qism . strtoupper($oxirgi_harf);
}

//4-masala
$soz = "Olma";
$bosh = strtolower(substr($soz, 0, 1));
$oxir = strtolower(substr($soz, -1));
//if else
if ($bosh == 'o' && $oxir == 'a') {
    echo "OleOleGoGo\n";
} elseif ($bosh == 'o') {
    echo "OleOle";
} elseif ($oxir == 'a') {
    echo "GoGo";
} else {
    echo $soz;
}
//switch case 
switch ($bosh) {
    case 'o':
        switch ($oxir) {
            case 'a':
                echo "OleOleGoGo";
                break;
            default:
                echo "OleOle";
                break;
        }
        break;
    case 'a':
        echo "GoGo";
        break;
    default:
        echo $soz;
}
//5-masala
$sonlar = [5, -3, 0, 8];
$musbat = 0;
$manfiy = 0;

foreach ($sonlar as $son) {
    if ($son > 0) {
        $musbat++;
    } elseif ($son < 0) {
        $manfiy++;
    }
}

echo "Musbat sonlar soni: $musbat\n";
echo "Manfiy sonlar soni: $manfiy\n";


//switch case masalalar
$a = 9;
$b = 10;
if ($a == $b || ++$a > $b)
    echo "shart 1";
elseif ($a > $b || ++$a > $b)
    echo "shat 2";
else
    echo "shart 3";


// $x= '';
// if ($x==0) 
//     print "true";
// else print "false";
//  print "true";


$b = "1";
switch ($b) {
    case "1":
        print "string 1";
    case 1:
        print "1";
    default:
        print "default"; //string 1 default 
}

//  $x = 10;
//  $y=20;
//  if ($x>$y+$y != 3) {
//     print "true";
//  } else {
//     print"false";
//  } //true



$x = 5;
$y = 5;
if ($x++ == 5 && $y++ == 6) {
    echo "true";
} else {
    echo "false";
}
echo "x=$x y=$y";  //false x=6 y=6

$num = abs(92 - 100);
switch ($num) {
    case '10':
        echo "string 10";
        break;
    case 10:
        echo "10";
        break;
    default:
        echo "boshqa"; //string 10

}

$x = 0;
if ($x == 1)
    if ($x >= 0)
        echo "true";
    else
        echo "false"; //nothing will be shown

switch ($b) {
    case false:
        print "false";
        break;
    case 'b':
        print "true";
        break;
}


$a = "1";
$b = "0";
if ((int)$a && $b)
    print "true";
else
    print "false"; //false 

$x = '';
if ($x == 0)
    print "true";
else print "false";
print "true";

switch ($b) {
    case false:
        print "false";
        break;
    case 'b':
        print "true";
        break;
}
$x = 0;
if ($x++)
    print "true";
else
    print "false"; //false


    $a = "1";
    switch ($a) {
        case 1;
            break;
            print "string 1";
        case 2:
            print "1";
            break;
            default:
            print "hech qaysi";
    }