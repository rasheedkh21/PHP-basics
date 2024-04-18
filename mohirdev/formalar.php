<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php

$firstname = null;
$phone = null;
$password = null;
// var_dump($_POST)
if (isset($_POST['firstname']) && !empty($_POST['firstname']) && 
isset($_POST['phone']) && !empty($_POST['phone']) &&
isset($_POST['password']) && !empty($_POST['password']) 
) { 
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    if(strlen($firstname)<6 || strlen($password)<6){
        echo "Your first name entered less than 6 letters";
    }
    if ($phone[0] != '+') {
        echo 'Your phone number should start with +';
    }
    if (substr($phone,offset:1, length:3)!= '998') {
        echo 'Telefon raqam 998 bilan boshlanishi kerak!';
    }
    if (strlen($phone) !=13 || !is_numeric(substr($phone, offset:1))) {
        echo "Faqat sonlarni kirgizing!";
    } else{
        "Sizning ma'lumotlaringiz yozib olindi Rahmat";
    }
    // echo "Here is users information " .  $_POST['firstname'].  '/' . $_POST['phone']. '/' . $_POST['password'];
    // echo "User's password  is: {$_POST['password']} <br> ";
    // echo "User's phone number is: {$_POST['phone']} <br>";
}

?>
<div class="col-md-3">
<form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Ism</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" placeholder="Enter name" value=" <?=$firstname?>">
</div>
<div class="form-group">
    <label for="exampleInputPhone ">Phone number</label>
    <input type="text" class="form-control" id="exampleInputPhone" name="phone" placeholder="phone" value="<?=$phone?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="<?=$password?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


