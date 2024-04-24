<?php
$car1 = "Kia";
$car2 = "BMW";
$car3 = "Tesla";
$car4 = "Toyota";

$cars = array("Kia", "BMW", "Tesla", "Toyota");

echo $cars[2] . "<br>";

$fruits = ["olma", "anor", "banan", "uzum"];

echo $fruits[2] . "<br>";
echo $fruits[1] . "<br>";
echo $fruits[3] . "<br>";

//arraylarga misollar

$mix = array("olma", 3, "1", true, "nok", 12, 12.5);
echo $mix[6] . "<br>";

//nechta elemet borligini hisoblab beradi
$size = count($mix);
echo $size . "<br>";


for ($i = 0; $i < $size; $i++) {
    //indexlariga bittalab murojat qilish 
    echo $mix[$i] . "<br>";
}

$array = array(
    //agar son bermasak 0 chi indexdan boshlab hisoblaydi
    "a",
    "b",
    6 => "c",
    //7chi index
    "d",
    3 => "sd",
    // 8- index   !! doim oxirgi kelgan raqamdan hisblab ketadi
    "asd"
);
// var_dump($array) . "<br>";

//arraylarga qiymat berish  
//[] - index raqami korsatilishi mumkin 
$arr = []; //elon qilindi
$arr[] = 56; //1 - elementiga 56 qiymatini berdi
$arr[] = 136; //2 - elementiga 136 qiymatini berdi
$arr[5] = "hello"; // 5 - elementiga "hello" qiyamti berildi 
$arr[] = "world"; // 6 - elementiga "world" qiyamti berildi 

var_dump($arr) . "<br>";

//masala 1 dan Ngacha bolgan sonlardan massiv hosil qiling 
$n = 10;
$sonlar = [];
//agar 1 dan 10gacha faqat juft sonlarni chiqarish kerak deyilsa  $i +=2 
for ($i = 0; $i <= $n; $i++) {
    $sonlar[] = $i . "<br>";
}
var_dump($sonlar);

//associative arrays 

//indexed array 
$month = array(
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
);
//associative array 
$monthDays = array(
    `January` => 31,
    `February` => 28,
    `March` => 31,
    `April` => 30,
    `May` => 31,
    `June` => 30,
    `July` => 31,
    `August` => 31,
    `September` => 30,
    `October` => 31,
    `November` => 30,
    `December` => 31,
);
// echo $monthDays[`March`];
//arrayga yangi qiymat qoshish
$monthDays["year"] = 2022;

var_dump($monthDays) . "<br>";


// $array = array(
//     1 => "a",
//     // php da true bolsa 1 false bolsa 0 deb hisoblab ketadi shuning uchun yana 
//     // qaytadan  1chi index qiymatini beradi natijada "d" boladi
//     true => "d",
//     // butun qismini oladi va tepadagi 2ta qiymatni emas "c" qiymatni oladi
//     1.5 => "c",
//     "1" => "b",
// );
// echo $array();

//massivlarga doir masalalar
// $numbers = [1,2,3,4,5,6];
// $sum = 1;
// for ($i= 0; $i < count($numbers); $i++) {
//     $sum = $sum * $numbers [$i];
// }
// echo $sum;

//          0  1  2  3  4  5  6  7  8 
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9,10];
$sum = 0;
for ($i = 0; $i < count($numbers); $i= $i+3) {
    // if ($i%3 == 0) 
    $sum = $sum + $numbers[$i];
}
echo $sum . "<br>";


//associative arrayga misol
 $students = array(
    "jasur" => 41,
    "eshmat" => 31,
    "toshmat" => 39,
    "anvar" => 40,
    "sardor" => 43,
    "alisher" => 23,
    "dilshod" => 17,
);

$temp = 0;
$temp_index = null;
foreach ($students as $key => $value) {
    if ($temp < $value) {
        $temp = $value;
        $temp_index = $key;
    }
}
echo $temp_index;


//massivni o'sish  tartibida saralang va yangi massivni ekranga chiqarish

$data = array(12,4,6,1,5,2,90,3,7,99,101);
for($i = 0; $i < count($data); $i++) {
    $min = $data[$i];
    for ($j=$i+1; $j < count($data); $j++) {
        if ($min > $data[$j]) {
            $min = $data[$j];
            // $temp = $data [$j];
            $data[$j] = $data[$i];
            $data[$i] = $min;
        }
    }
    
}     

print_r($data);