<?php
include_once __DIR__.'/../../../config/connection.php';

if (isset($_POST['Add_User']) and !empty($_POST['username'])){
    $username=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_ARGON2I);
    $name=$_POST['name'];
    $family=$_POST['family'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    @$address=$_POST['address'];
    @$bank_name=$_POST['bank_name'];
    @$bank_id=$_POST['bank_id'];
    @$debit_card_id=$_POST['debit_card_id'];
    @$shaba=$_POST['shaba'];
    $type=$_POST['type'];
    @$scientific_group=implode('||',$_POST['scientific_group']);
    echo $scientific_group;

    $registrar=$_SESSION['id'];

    $QueryForCheckUserExists=mysqli_query($connection_maghalat,"select * from users where username='$username'");
    foreach ($QueryForCheckUserExists as $item){}
    if (!empty($item)){
        header("Location: ../../../user_manager.php?UserFounded");
    }
    else{
        mysqli_query($connection_maghalat,"insert into users (username, password, name, family, gender, national_code, phone, address, bank_name, bank_id, shaba, debit_card_id, scientific_group, type, date_added, registrar)
        values ('$username','$password','$name','$family','$gender','$username','$mobile','$address','$bank_name','$bank_id','$shaba','$debit_card_id','$scientific_group','$type','$datewithtime','$registrar')");
        header("Location: ../../../user_manager.php?UserAdded&user=$username");
    }
}