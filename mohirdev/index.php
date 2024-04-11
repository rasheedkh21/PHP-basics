<!-- <?php
echo "Bismillah";
?>
<?php

echo "<h1> Salom </h1>";
?> -->
<!-- <div>
    <?php 
    // echo "Bu div <br/>";
    // echo "Bu div <br/>";
    // echo "Bu div <br/>";
    

    ?>
</div> -->

<!-- <?php 

echo " <h1>O'zgaruvchilar</h1>";
 

$my_name = "Rasheed";
$my_surname = "Bozorov";

echo "My name is {$my_name} " . $my_surname;

?> -->

<?php 
echo "<h1> Malumot turlari </h1>";

// string 
$matn = "Bismillah";

//integer 
$son = 123;

//float (butun bolmagan sonlar)
$number = 88.8;

//boolean
$active = true;

//NULL
$name = null;

// var_dump($son, $number);

$result = is_string($matn);
$result1 = is_integer($son);
$result2 = is_bool($active);

// print($result1);
// var_dump($result2);

$natija =gettype($matn);
print($natija);