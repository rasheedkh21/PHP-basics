<?php
//1-masala 
if (
    isset($_POST['phone']) && !empty($_POST['phone'])
) {
    $phone = $_POST['phone'];
    if ($phone[0] != '+') {
        echo 'Your phone number should start with +';
    }
    if (substr($phone, offset: 1, length: 3) != '998') {
        echo 'Telefon raqam 998 bilan boshlanishi kerak!';
    }
    if (strlen($phone) != 13 || !is_numeric(substr($phone, offset: 1))) {
        echo "Faqat sonlarni kirgizing!";
    }
}

?>
<div>
    <form action="" method="post">
        <label for="phone">Phone</label>
        <input type="text" name="phone" placeholder="phone">
        <input type="submit">
    </form>
</div> <br>
 
<?php
//2- masala
if (isset($_POST['number1']) && !empty($_POST['number2'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $sum = $number1 + $number2;
    echo "Kiritilgan sonlarning yig'indisi: $sum";
}


?>

<div>
    <form action="" method="post">
        <label for="number1">Birinchi son:</label>
        <input type="number" id="number1" name="number1"><br><br>

        <label for="number2">Ikkinchi son:</label>
        <input type="number" id="number2" name="number2"><br><br>

        <button type="submit">Hisoblash</button>
    </form>
</div>

<?php
//3-masala
if (isset($_POST['number']) && !empty($_POST['number'])) {

    $number= $_POST['number'];
    switch ($number) {
        case 1:
            echo 'Dushanba';
            break;
        case 2:
            echo 'Seshanba';
            break;
        case 3:
            echo 'Chorshanba';
            break;
        case 4:
            echo 'Payshanba';
            break;
        case 5:
            echo 'Juma';
            break;
        case 6:
            echo 'Shanba';
            break;
        case 7:
            echo 'Yakshanba';
            break;
        default:
            echo "Noto'g'ri raqam kiritildi. Iltimos, 1 dan 7 gacha bo'lgan son kiriting!";

            break;
    }
}
?>
<form action="" method="post">
    <label for="number1">Sonni kiriting :</label>
    <input type="number" id="number" name="number" required><br>
     <button type="submit">Hafta kunini
    aniqlash</button>
<br>
</form>


<?php 
//4-masala
if (isset($_POST['number1']) && !empty($_POST['number2']))  {
  
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    

    $operator = $_POST['operator'];
    

    switch ($operator) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            // Nolga bo'lishni tekshiramiz
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Nolga bo'lish mumkin emas";
            }
            break;
        default:
            $result = "Noto'g'ri operator tanlandi";
            break;
    }
    
    // Natijani chiqarish
    echo "Natija: $result";
}
?>
 <form action="" method="post">
        <label for="number1">Birinchi son:</label>
        <input type="number" id="number1" name="number1" required><br><br>
        
        <label for="number2">Ikkinchi son:</label>
        <input type="number" id="number2" name="number2" required><br><br>
        
        <input type="radio" id="add" name="operator" value="add">
        <label for="add">+</label>
        
        <input type="radio" id="subtract" name="operator" value="subtract">
        <label for="subtract">-</label>
        
        <input type="radio" id="multiply" name="operator" value="multiply">
        <label for="multiply">*</label>
        
        <input type="radio" id="divide" name="operator" value="divide">
        <label for="divide">/</label><br><br>
        
        <button type="submit">Hisoblash</button>
    </form>

    <?php 
//5- masala
if (isset($_POST['number1']) && isset($_POST['number2'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    if (isset($_POST['add'])) { 
        $result = $number1 + $number2;
    } elseif (isset($_POST['minus'])) {
        $result = $number1 - $number2;
    } elseif (isset($_POST['subtract'])) {
        $result = $number1 / $number2;
    } elseif (isset($_POST['multiply'])) {
        // Nolga bo'lishni tekshiramiz
        if ($number2 != 0) {
            $result = $number1 * $number2;
        } else {
            $result = "Nolga bo'lish mumkin emas";
        }
    } else {
        $result = "Noto'g'ri operator tanlandi";
    }
} 
?> 

    <form action="" method="post">
        <input type="number" name="number1">
        <label for="number1">First Number</label> <br><br>

        <input type="number" name="number2">
        <label for="number2">Secomnd Number</label> <br><br>

        <input type="text" name="result"value="<?php echo isset($result) ? $result : ''; ?>">
        <label for="result"> Result </label> <br><br>
        <div>
            <input type="submit" name="add" id="add" value="Add">
            <input type="submit" name="minus" id="minus" value="Minus">
            <input type="submit" name="subtract" id="subtract" value="Subtract">
            <input type="submit" name="multiply" id="multiply" value="multiply">
        </div>
    </form>

    <?php 
    // 6 - 7 -8 masalalarni ishlab qoyaman
    ?>