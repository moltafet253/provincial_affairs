<?php
include_once __DIR__ . '/../../../config/connection.php';

if (isset($_POST['Add_User']) and !empty($_POST['username'])) {

    session_start();
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_ARGON2I);
    $name = $_POST['name'];
    $family = $_POST['family'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    @$state = $_POST['state'];
    @$city = $_POST['city'];
    @$unit = $_POST['unit'];
    @$address = $_POST['address'];
    $type = $_POST['type'];
    $registrar = $_SESSION['id'];

    $QueryForCheckUserExists = mysqli_query($connection, "select * from users where username='$username'");
    foreach ($QueryForCheckUserExists as $item) {
    }
    if (!empty($item)) {
        header("Location: ../../../user_manager.php?UserFounded");
    } else {
        mysqli_query($connection, "insert into users (username, password, name, family, gender, national_code,state,city,unit, phone, address, type,adder, added_date)
        values ('$username','$password','$name','$family','$gender','$username','$state','$city','$unit','$mobile','$address','$type','$registrar','$datewithtime')");
        header("Location: ../../../user_manager.php?UserAdded&user=$username");
    }
}