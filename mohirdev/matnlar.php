<?php
// $text = "sardor";
//index   0 1 2 3 4 5
//string  s a r d o r

// echo $text[2]; //r


//strlen matndagi baytlar sonini hisoblab beradi matn uzunligini emas 
// $str = 'absdfefghjklmn';
// echo strlen($str). "\n";

// echo strtoupper($str). "\n";
// echo ucfirst($str);

//substr matnda berilgan positsiyadan boshlab ,kerakli moqdorda belgini olish.

// .  1 2 3 4 5 6
//    s a r d o r 
// . -6-5-4-3-2-1
// echo substr("sardoroga", 1); //ardoroga
// echo substr("sardoroga", -1); //a


//strpos matndan qidirilayongan qiymatni positsiyasini aniqlaydi
// $mystring = " abdurashid bozorov";
// $findme = "u";
// echo strpos($mystring, $findme); // 4

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

// $convert = "<li><a href=index.php>Phpni o'rganamiz</a></li>";

// echo "Orginal : " .$convert;
// echo htmlspecialchars($convert);

//strip_tags() -- mantndan html taglarni olib tashlaydi.

// $convert ="<b><a href='index.php'>PHPni o'rganamiz </a></b> ";
// // echo $convert;
// echo strip_tags($convert , allowed_tags:"<b>");

//substr_count -- matndda qidirilayontgan so'z matnda nechta joyda borligini aniqlaydi

// $str = "Bugun mening kunim hechkim kunim bo'la olmaydi";

// echo substr_count(($str), needle:"kunim", offset:18 ."\n");
// //needle kerakli so'z, offset qayedan yani nechinchi indexdan keyin qidirish

// $text = "Salom Dunyo";
// echo "$text \n";

// //2-masala
// $text1 = "Salom,";
// $text2 = "Dunyo!";

// echo ($text1 . $text2 . "\n ");

// //3-masala
// $ism = "Abdurashid";
// $hardfan_iborat = str_word_count($ism);

// echo($ism. "-" . $hardfan_iborat."ta harfdan iborat");  
//4-masala

$ism = "Abdurashid";
echo substr($ism, 6 );

//5-masala

$str = "Bugun havo yaxshi";
$soz =  strpos($str,"havo");

echo "Qidirilgan so'z {$soz}chi indexdan boshlanadi <br/>";