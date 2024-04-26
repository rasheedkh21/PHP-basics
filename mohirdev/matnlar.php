<?php
$text = "sardor";
// index   0 1 2 3 4 5
// string  s a r d o r

echo $text[2]; //r


//strlen matndagi baytlar sonini hisoblab beradi matn uzunligini emas 
$str = 'absdfefghjklmn';
echo strlen($str). "\n";

echo strtoupper($str). "\n";
echo ucfirst($str);

//substr matnda berilgan positsiyadan boshlab ,kerakli moqdorda belgini olish.

// .  1 2 3 4 5 6
//    s a r d o r 
// . -6-5-4-3-2-1
echo substr("sardoroga", 1); //ardoroga
echo substr("sardoroga", -1); //a


//strpos matndan qidirilayongan qiymatni positsiyasini aniqlaydi
$mystring = " abdurashid bozorov";
$findme = "u";
echo strpos($mystring, $findme); // 4

// echo strrpos($mystring, "bozorov" );

//str_shuffle -- matndagi harflarni random orqali turgan o'rnini almashtiradi.

// $str = "mohirdev";
// $shufled = str_shuffle($str);

// echo ($shufled);

// str_replace 

// $count = 0;
// $str = "Salom Bevafo Dunyo, ajib Dunyo";
// $new= str_replace(search:"Dunyo", replace:"Mohirdev",$str, &: $count);
// echo $count;

//md5 -- matnni md5 hashga almashtirib beradi (shifrlaydi)
// $shifr = "Abdurashid";
// echo md5($shifr);

// htmlspecialchars() -- html belgilarni HTML entityga almashtiradi.

$convert = "<li><a href=index.php>Phpni o'rganamiz</a></li>";

echo "Orginal : " .$convert;
echo htmlspecialchars($convert);

// strip_tags() -- mantndan html taglarni olib tashlaydi.

$convert ="<b><a href='index.php'>PHPni o'rganamiz </a></b> ";
// echo $convert;
echo strip_tags($convert , allowed_tags:"<b>");

// substr_count -- matndda qidirilayontgan so'z matnda nechta joyda borligini aniqlaydi

// $str = "Bugun mening kunim hechkim kunim bo'la olmaydi";

// echo substr_count(($str), needle:"kunim", offset:18 ."\n");
// needle kerakli so'z, offset qayedan yani nechinchi indexdan keyin qidirish

$text = "Salom Dunyo";
echo "$text \n";

//2-masala
$text1 = "Salom,";
$text2 = "Dunyo!";

echo ($text1 . $text2 . "\n ");

//3-masala
$ism = "Abdurashid";
$hardfan_iborat = str_word_count($ism);

echo($ism. "-" . $hardfan_iborat."ta harfdan iborat");  
// 4-masala

$ism = "Abdurashid";
echo substr($ism, 6 );

//5-masala

$str = "Bugun havo yaxshi";
$soz =  strpos($str,"havo");
echo "Qidirilgan so'z {$soz}chi indexdan boshlanadi <br/>";
 

//6-masala
$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

// Parol hosil qilish
$password = substr(str_shuffle($data), 0, 8);

echo "8 xonali parol: $password <br>";

//7-masala

$string = 'Assalomu aleykum Ozbekiston.';
$replacement = 'jonajon ';

echo substr_replace($string, $replacement, 17, 0). "<br>";

//8-masala
$email = "example@gmail.com";
$domen = substr($email, strpos($email, '@') + 1);
echo $domen;
echo "<br>";

//9-masala
$son = '000346023.24';
$sliceed_num = substr($son, strpos($son, '3'));



//10-masala
$url = "https://kun.uz/50487176";
$raqam = substr($url, strrpos($url, '/') + 1);

echo $raqam. "<br>";

//11-masala
$path = "/Users/sardordushamov/darslar/kurs/index.php";

// Fayl nomini ajratish
$file = substr(strrchr($path, '/'), 1);

echo $file;

//12-masala
function telefonNomeriniTekshirish($raqam) {
    // Matn uzunligi tekshirish
    if(strlen($raqam) != 12) {
        return "Natija: Telefon raqami emas";
    }
    
    // Matndagi barcha belgilar raqam bo'lishini tekshirish
    $index = 0;
    while($index < strlen($raqam)) {
        if(!is_numeric($raqam[$index])) {
            return "Natija: Telefon raqami emas";
        }
        $index++;
    }

    // Agar raqam +998 bilan boshlanmasa
    if(substr($raqam, 0, 4) !== "+998") {
        return "Natija: Telefon raqami emas";
    }

    // Agar barcha shartlar qanoatlansa, telefon raqamini qaytarish
    return "Natija: Telefon raqami";
}

// Test qilish
$raqam1 = "+998999999999";
$raqam2 = "+99899999999912";

echo telefonNomeriniTekshirish($raqam1). "<br>"; // Natija: Telefon raqami
echo telefonNomeriniTekshirish($raqam2); // Natija: Telefon raqami emas
