<?php
// echo "Assalomu aleykum \n";
// function talk(){
//     echo "Funksiya chaqirildi";
// }

// talk();

// function gapir (){
//     return 14;
// }
// $result = gapir();
// echo $result;

// function find($a){
//     if ($a>0) {
//         return "musbat";
//     }else {
//         return "manfiy";
//     }
// }

// echo find(-10);


//tvni ochirib yoqish

// $tv = false;
// function turnOnOffTV($tv){
//     if ($tv == true) {
//         echo "TV is turned off";
//         //bunday holatda kiritsak ham boladi
//         // $tv = false;
//         // return $tv;
//         $tv = false;
//     }else{
//         echo "TV is turned on";
//         // return true;
//         $tv = true;
//     }
//     //har bitta ifni ichiga yozib otirmasdan oxirida bitta qilib yozsak ham bo'ladi
//     return $tv;
// }

// $tv = turnOnOffTV($tv);
// $tv = turnOnOffTV($tv);

// var_dump( $tv);

//argumentli funkdiyalarga misollar
// $yosh = 18;
// function showAge($age, $height, $weight)
// {
//    echo $age;
//    echo $height;
//    echo $weight;
// }

// showAge($yosh, 178, 56);

// function burn($fuel)
// {
//    echo "Biz {$fuel} yoqamiz <br> \n";
// }

// burn("tappi");
// burn("komir");

// //argumentlarga boshlangich qiymatini ham berish mumkin 
// //  declare(strict_types = 1);   
// function makeCoffee($coffee = "americano")
// {
//    echo "I would like to drink {$coffee}. <br>";
// }
// makeCoffee();
// makeCoffee("latte");
// makeCoffee("cappuchino");

// //funksiya  argumrntlarining tiplarini ham korsatish mumkkin 
// function sum(int $a, int $b)
// {
//    echo $a + $b . "<br>";
// }

// sum(4, 5);
// sum(14, 60);

// //MASALAA
// function tv_Switch($arg1 , $tv_name = "Artel")
// {
//    echo $tv_name . " tokka ulandi <br>";
// }

// tv_Switch(12);
// tv_Switch(14,"Samsung");
// tv_Switch(16,"LG");

// //rekursiv funksiyalar  
// function rekursivFunc($number) {
//    if ($number >= 10) {
//       echo $number . "<br>";
//       rekursivFunc($number-1);
//    }else{
//       echo $number . " Iltimos 10dan katta raqamni tanlang ";
//    }
// }

// rekursivFunc(9);


// //local o'zgaruvchiga misol
// function login(){
//    $x= "Bu local o'zgaruvchi <br>";
//    echo $x;
// }
// login();

// $x = "salom <br>";
// echo $x;

// function signin(){
//    global $y;
//    echo $y;
// }  
// $y = 45 ."<br>";
// signin();

// //static o'zgaruvchilar
// function statik(){
//    $a = 10;
//    $a += 20;
//    echo $a;
// }

// statik();

// funksiyalarga  doir masalalar 

// //1-masala
// function Factorial($number)
// {
//    if ($number <= 1) {
//       return 1;
//    } else {
//       return $number * Factorial($number - 1);
//    }
// }
// $fact = Factorial(6);
// echo "Factorial  is {$fact} <br> ";
// ?>


// <?php
// //2-masala
// function calculate($num1, $num2, $operator)
// {
//    switch ($operator) {
//       case 'add':
//          return $num1 + $num2;
//          break;
//       case 'minus':
//          return $num1 - $num2;
//          break;
//       case 'multiply':
//          return $num1 * $num2;
//          break;
//          break;
//       case 'divide':
//          if ($num2 != 0) {
//             return $num1 / $num2;
//          } else {
//             return "Nolga bo'lib bo'lmaydi";
//          }
//          break;
//       default:
//          return "Noma'lum amal";
//    }
// }

// $result = '';
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $num1 = $_POST['number1'];
//    $num2 = $_POST['number2'];
//    $operator = $_POST['operator'];

//    $result = calculate($num1, $num2, $operator);
// }
// ?>

<!-- // <form action="" method="post">
   // <input type="number" name="number1" id="number1">
   // <label for="number1">First Number</label> <br><br>

   // <input type="number" name="number2" id="number2">
   // <label for="number2">Second Number</label> <br><br>

   // <div>
      // <input type="submit" name="operator" id="add" value="add">
      // <input type="submit" name="operator" id="minus" value="Minus">
      // <input type="submit" name="operator" id="multiply" value="multiply">
      // <input type="submit" name="operator" id="divide" value="divide">
      // </div>
   // </form>

// <?php if ($result !== ''): ?>
   // <h3>Natija: <?php echo $result; ?></h3> <br> <br>
   // <?php endif; ?> -->


// <?php
// //3-masala
// function convertSecondsToTime($seconds)
// {
//    $hours = floor($seconds / 3600);
//    $seconds %= 3600;
//    $minutes = floor($seconds / 60);
//    $seconds %= 60;
//    return "$hours soat, $minutes minut, $seconds sekund";
// }


// $seconds = 60000;
// echo convertSecondsToTime($seconds);
// ?>

// <?php
// //4- masala
// function numberToWord($number)
// {
//    $birliklar = array(
//       0 => 'nol',
//       1 => 'bir',
//       2 => 'ikki',
//       3 => 'uch',
//       4 => 'to\'rt',
//       5 => 'besh',
//       6 => 'olti',
//       7 => 'yetti',
//       8 => 'sakkiz',
//       9 => 'to\'qqiz'
//    );

//    $onlikllar = array(
//       10 => 'o\'n',
//       20 => 'yigirma',
//       30 => 'o\'ttiz',
//       40 => 'qirq',
//       50 => 'ellik',
//       60 => 'oltmish',
//       70 => 'yetmish',
//       80 => 'sakson',
//       90 => 'to\'qson'
//    );

//    if ($number < 10) {
//       return $birliklar[$number];
//    } elseif ($number < 20) {
//       return $onlikllar[10] . '-' . $birliklar[$number % 10];
//    } elseif ($number < 100) {
//       return $onlikllar[$number - $number % 10] . ' ' . $birliklar[$number % 10];
//    } else {
//       return 'uch xonali son';
//    }
// }

// for ($i = 1; $i <= 100; $i++) {
//    echo "$i - " . numberToWord($i) . "<br>";
// }
// ?>

// <?php
// //5-masala
// function checkPhoneNumber($number)
// {

//    $uzbek_numers = array(
//       '9989', // Beeline
//       '9988', // Ucell
//       '9987', // UMS
//       '+9989' // Beeline
//    );

//    // formatini tekshirish
//    foreach ($uzbek_numers as $format) {
//       if (strpos($number, $format) === 0) {
//          return true;
//       }
//    }

//    return false;
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $phone_number = $_POST['phone_number'];

//    if ($phone_number[0] != '+') {
//       echo 'Telefon raqamingiz "+" belgisi bilan boshlanishi kerak!';
//    } elseif (substr($phone_number, 0, 4) != '+998') {
//       echo 'Telefon raqami +998 bilan boshlanishi kerak!';
//    } elseif (!is_numeric(substr($phone_number, 1))) {
//       echo "Faqat sonlarni kirgizing!";
//    } elseif (strlen($phone_number) != 13) {
//       echo "Telefon raqami noto'g'ri uzunlikda!";
//    } elseif (!checkPhoneNumber($phone_number)) {
//       echo "Telefon raqami noto'g'ri formatda!";
//    } else {
//       echo "Telefon raqami to'g'ri formatda! <br>";

//       // Raqamning operatori
//       if (substr($phone_number, 0, 5) == '+9989' || substr($phone_number, 0, 5) == '+9989') {
//          echo "Beeline";
//       } elseif (substr($phone_number, 0, 5) == '+9987') {
//          echo "UMS";
//       } elseif (substr($phone_number, 0, 5) == '+9988') {
//          echo "Ucell";
//       } else {
//          echo "Boshqa operator";
//       }
//    }
// }
// ?>

<!-- // <form action="" method="post">
   // <label for="phone_number">Telefon raqami:</label>
   // <input type="text" id="phone_number" name="phone_number" placeholder="99897XXXXXXX" required>
   // <button type="submit">Tekshirish</button>
   // </form> -->

// <?php
// //6-masala
// function sum_of_odd_numbers($N){
//    $sum = 0;
//    for ($i=0; $i<=$N; $i+=2) { 
//       $sum += $i;
//    }
//    return $sum;
// }
// $N=20;
// sum_of_odd_numbers($N);

// echo "1 dan {$N} gacha bo'lgan toq sonlar yig'indisi: " . sum_of_odd_numbers($N);
?>
<?php 

function my($num)
{
   if ($num < 0)
      return -1;
   if ($num == 0)
      return 1;
   return ($num * my($num - 1));
}