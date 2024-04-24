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