<?php 
echo "<pre>";
// var_dump($_POST);

// echo $_POST['username'];
// echo $_POST['gender'];

if (isset($_POST['password']) && empty($_POST['password']) && is_null($_POST['password'])) {
    echo 'ha <br>';
}else{
    echo "yoq <br>";
}


?>

