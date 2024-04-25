<?php 
//massiv turdagi o;zgaruvchi 
$web_programming = ["html", "css","js", "php", "mysql", "12"];
$test = 10 ; //simple variable

if (is_array($web_programming)){
    echo "This variable is Array <br>";
}
if (!is_array($test)) {
    echo "we put a condition of array <br>";
}

$web_programming = ["html", "css","js", "php", "mysql","12"];

if (in_array("C++", $web_programming)) {
    echo "C++ is in web programming array <br>";
} else {
    echo "C++ is not in web programing array <br>";
}


$web_programming = ["html", "css","js", "php", "mysql","12", "yii"];

$search = array_search("yii", $web_programming);
if ($search) {
    echo 'your searched option is in array here its index in array : '. $search . "<br>";
}

if (!array_search('yii', $web_programming)){
    echo 'checks whether in array or not';
}


//bu funksiya faqat ko'p o'lchamli massivlar uchun

$person = array(
    array(
        'id' => 1,
        'name'=> 'Rashid',
        'last_name'=> 'Bozoriy',
    ),
    array(
        'id' => 2,
        'name'=> 'Izzat',
        'last_name'=> 'Jakbarov',
    ),
    array(
        'id' => 3,
        'name'=> 'Islom',
        'last_name'=> 'Karimov',
    ),
);

$column = array_column( $person,'name');
print_r($column);
echo"<br>";

$web_programming = ["html", "css","js", "php", "mysql","12", "yii"];

echo "Massiv elementlarining soni: ". count($web_programming) ."<br>";

//array_push
$web_programming = ["html", "css","js", "php", "mysql","12", "yii"];
array_push($web_programming, "jquery");
print_r( $web_programming );

// array_pop()
$web_programming = ["html", "css","js", "php", "mysql","12", "yii"];
$result = array_pop( $web_programming );
echo "<br>".$result ."<br>";
print_r( $web_programming );
echo"<br>";

// array_diff()
$web_programming = ["html", "css","js", "php", "mysql","yii"];
$programming = ["html", "css","js", "php", "mysql", "java","c++"];

$new_system = array_diff( $web_programming, $web_programming );
 print_r( $new_system );
 echo"<br>";
//birinchi turgan $web_programmingni boshqalar bilan solishtiradi


// array_flip()
$web_programming = ["html", "style"=> "css", "java-script" => "js", "php", "mysql","12", "yii"];
$new_system = array_flip( $web_programming );
print_r( $new_system );
echo"<br>";
// array_merge()
$array1 = ["html", "css", "test"=>"js", "php", "mysql","12", "yii"];
$array2 = ["C++", "java","test"=> "jquery",];

$new_array = array_merge( $array1, $array2 );
print_r( $new_array );
echo"<br>";
//agar assotsativ massivlarda bir xil indeksli elementlar bor bolsa, 1-massivning qiymatini ustiga ikkinchi massivning qiymatini yozadi

// array_count_values()
$web_programming = ["html","css", "js","mysql","js"];
$new_array = array_count_values( $web_programming );
print_r( $new_array );
echo"<br>";
// implode()
$web_programming = ["html", "css", "js", "php", "mysql","12", "yii"];
$matn = implode(", ", $web_programming );
print_r( $matn );
echo "<br>";


// explode()
$Matn = "html, css, js, php, mysql, 12, yii";
$new_function = explode(", ", $Matn );
print_r( $new_function );
echo"<br>";

// array_combine()
$dasturlash = ["postgrade","C++","java",];
$web_dasturlash = ["html","css","js",];

$yangi_massiv = array_combine( $dasturlash, $web_dasturlash );
print_r( $yangi_massiv );
echo "<br>";


// array_slice()
$web = ["html","css","js","mysql","yii","yii2"];
$slice_array = array_slice( $web,2,4);
print_r( $slice_array );
echo "<br>";    


// array_splice()
$web = ["html","css","js","mysql","yii","yii2"];
$new_slice = array_splice( $web,0,3);
print_r( $new_slice);
//0chinindexdan 3gacha qirqib chiqaradi
echo "<br>";
print_r( $web );
//qolgan elementlarni chiqaradi yani 0 dan 3 gacha indexdagi elementlarnin boshqa arrayga berdi
echo "<br>";

//2-holat

$web = ["html","css","js","php","yii2","js"];
$dasturlash = ["postgrade", "c++","java","c#",];
//berilgan indexdan belgilangan joygacha qirqib tashlab yangi arrayni elementlarini qo'shsin
array_splice( $web,0,3, $dasturlash);
print_r($web);
echo '<br>';

//3-holat 
$web_dasturlash = ['html','css','js','mysql','yii2','yii'];
$dasturlash = ['mysql','java','c#','c++','python'];
array_splice($web_dasturlash,1,0, $dasturlash);
//1-indexdan boshlab boshqa massiv elemenini qoshadi lekin 1 - massivdan hech nima o'chirmaydi.
print_r($web_dasturlash);
echo '<br>';

// array_intersect() retutn array
$web_dasturlash = ['html','css','js','mysql','yii2','yii', 'python'];
$dasturlash = ['java','c#','c++','python','mysql','yii2','yii'];
//2lasidan bir xillarini topib faqat oshalarni array qilib qaytaradi.

$new_func = array_intersect( $web_dasturlash, $dasturlash );
print_r($new_func);
echo '<br>';

// array_unique();
$ismlar = ['izzat','Rashid','javlon','aziz','sarvar','kevin', 'sarvar', 'izzat', 'rashid'];
$sort_ismlar = array_unique( $ismlar );
print_r($sort_ismlar);
echo '<br>';

// extract()
$ismlar = ['talaba'=>'Izzat','professor'=>'choi','oquvchi'=>'abdulloh','ishchi'=>'lee',];
extract($ismlar);
echo ' endi biz bularni indexlarini elemtnlarni nomini indexlarni ozgarubchi qilib chiqarsak boladi ' . $talaba ."/".$professor."/".$oquvchi."/".$ishchi;
echo "<br>";

//compact()
$fruit = "apple";
$vegetable= "carrot";
$car = "hyundai";
$ship = "titanic";

$result = compact("fruit","vegetable","car","ship");
print_r($result);
echo "<br>";

// array_values();
$ismlar = ['talaba'=>'Izzat','professor'=>'choi','oquvchi'=>'abdulloh','ishchi'=>'lee',];
$new_array = array_values( $ismlar );
print_r( $new_array );
echo '<br>';

// array_keys()
$ismlar = ['talaba'=>'Izzat','professor'=>'choi','oquvchi'=>'abdulloh','ishchi'=>'lee',];
$key_array = array_keys( $ismlar );
print_r( $key_array );
echo '<br>';

// array_key_exists() returs boolean
$ismlar = ['talaba'=>'Izzat','professor'=>'choi','oquvchi'=>'abdulloh','ishchi'=>'lee',];
if (array_key_exists("joja", $ismlar )) {
    echo "joja indexli element bor <br>";
} elseif (array_key_exists("talaba", $ismlar )) {
    echo " tabala indexli element bor";
} else{
    echo "bunday indexli elelment yo'q";
}
echo "<br>";

// array_rand()
$ismlar = ['talaba'=>'Izzat','professor'=>'choi','oquvchi'=>'abdulloh','ishchi'=>'lee',];
//aaray elementalaridan xoxlagan 4tassini tanlab berdi 
$yangi_massiv = array_rand( $ismlar, 2 );
print_r( $yangi_massiv );
echo '<br>';


// list()
$web_dasturlash = ['html','css','js','mysql','yii2','yii'];
list($_1, $_2, $_3) = $web_dasturlash;
echo "Biz {$_1}, {$_2}, {$_3} ni  6 oyda o'rgandik";
echo "<br>";


// range() 
$array = range(20,60, step:5);
print_r( $array );
echo "<br>";

// shuffle()
$numbers = range(1,20);
shuffle( $numbers );
print_r( $numbers );
echo "<br>";

// sort()
$web_dasturlash = ['html','css','js','mysql','yii2','yii' ,"13",12];
sort( $web_dasturlash );
print_r( $web_dasturlash );
echo "<br>";
rsort( $web_dasturlash );
print_r( $web_dasturlash );
echo "<br>";


// asort()
$ismlar = ['talaba'=>'Izzat','professor'=>'choi','oquvchi'=>'abdulloh','ishchi'=>'lee',];
asort(  $ismlar );
print_r( $ismlar );
echo '<br>';

// krsort()
$ismlar = ['talaba'=>'Izzat','professor'=>'choi','oquvchi'=>'abdulloh','ishchi'=>'lee',];
krsort( $ismlar );
print_r( $ismlar ); 
echo '<br>';

// str_replace()
$search = array("a", "e", "i", "o", "u", "A", "el", "I", "O", "U");
$result = str_replace($search , "", "Hello World of PHP");
echo $result;
    echo "<br>";

$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject);
// Natija F chiqadi.Chunki A harfi B ga almashtiriladi,
// keyin B harfi Cga, C hargi Dga... oxirida F ga almashtiriladi
echo '<br>';

$search = array('a', 'p');
$replace   = array('apple', 'pear');
$text    = 'a p';
$result = str_replace($search, $replace, $text);
echo $result; 
echo '<br>';
echo '<br>';
echo '<br>';
// - $search massividan 1-elementni oladi va matndan qidiradi
// - 'a' harfi topildi va 'a' harfini 'apple' ga almashtiradi
// - matnning yangi holati quyidagicha: yani $text = 'apple p'
// - endi massivning 2-elementini $text ('apple p')dan qidiradi
// - demak matnda 3 ta joyda 'p' harfi ishlatilgan
// - shu ishlatilganlarni almashtiriladi
// - oxirgi natija - 'apearpearle pear'



//multidimensional arrays 
$students = [
    [
        'name'=> 'Abdurashid',
        'age'=> '20',
        'number'=> '58347771',
    ],
    [
        'name'=> 'Eshmat',
        'age'=> '40',
        'number'=> '89882233',
    ],
    [
        'name'=> 'Izzat',
        'age'=> '19',
        'number'=> '909407047',
    ]
    ];

//     print_r($students[0]['name']);
//     echo '<br>';

//     //arrau lelementining qiymatini o'zgartirish
//     $students[1]['name'] = 'Aziz';
//     $students[1]['age'] = '18';
//     print_r($students[1]);
// echo '<br>';
    // //yangi element qoshish
    // $students[]['name'] = 'Guli';
    // $students[]['age'] = '21';
    // $students[]['number'] = '992103456';
    
    // print_r($students[3]);

    $item = [
        'name'=> 'Ali',
        'age'=> '13',
        'number'=> '909876543',
    ];
    $students[] = $item;
    print_r($students[3 ]);
    echo '<br>';

    $yer = [
        array(2,34,44,51,69,7),
        array("213", "salom", "dunyo",123),
        array("a","b","c",0),
        array("os"=>"os","name"=> "iphone",),
    ];

    foreach ($yer as $item => $qiymat) {
        echo "Arrayning $item - indexli elementining qiymatlari : ";
        echo  "<br>";
        foreach ($qiymat as $key => $value) {
            echo $key ." => ". $value. "<br>";
        }
        echo "<br>";
    }
  