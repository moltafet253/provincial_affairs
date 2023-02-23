<?php
include_once 'jdf.php';
include_once 'GDate.php';
//include_once 'PHPExcel/Classes/PHPExcel.php';
//ini_set('session.gc_maxlifetime', 36000);
date_default_timezone_set("Asia/Tehran");
$main_url="https://localhost/provincial_affairs/";
$year=jdate('Y');
$month=jdate('n');
$day=jdate('j');
$hour=jdate('H');
$min=jdate('i');
$sec=jdate('s');
$date=$year."/".$month."/".$day;
$datewithtime=$year."/".$month."/".$day.' '.$hour.":".$min.":".$sec;

$connection = @mysqli_connect('localhost', 'root', '', 'provincial_affairs');
if (mysqli_connect_errno()) {
    echo 'ارتباط با دیتابیس دچار اختلال شده است. خطا به این صورت میباشد:' . mysqli_connect_error();
    exit();
}
mysqli_set_charset($connection, 'utf8');


//$conn = "";
//
//try {
//    $servername = "localhost";
//    $dbname = "pooyagra_helli-info";
//    $username = "pooyagra_adminhelli";
//    $password = "Mohammad1377";
//
//    $conn = new PDO(
//        "mysql:host=$servername; dbname=$dbname",
//        $username, $password
//    );
//
//    $conn->setAttribute(PDO::ATTR_ERRMODE,
//        PDO::ERRMODE_EXCEPTION);
//} catch (PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//}
//
