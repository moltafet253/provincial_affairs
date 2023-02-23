<?php include_once __DIR__ . '/../../config/connection.php'; ?>
    Wisdom_id="+Wisdom_id+"&Macro_id="+Macro_id+"&subject="+subject+"&factor="+factor+"&status="+status+"&help="+help+"&repetable="+repetable+"&active="+active,true);

<?php
session_start();
$Wisdom_id = $_GET['Wisdom_id'];
$subject = $_GET['subject'];
$factor = $_GET['factor'];
$status = $_GET['status'];
$help = $_GET['help'];
$repetable = $_GET['repetable'];
$active = $_GET['active'];
$adder=$_SESSION['id'];

$query = mysqli_query($connection, "select * from gauge_options where subject='$subject'");
foreach ($query as $CheckSubjectForNonDuplication) {}
if ($CheckSubjectForNonDuplication==null and ($subject!=null or $subject!='')){
    mysqli_query($connection,"insert into gauge_options (parent_id, subject, factor, status, help, repetable, active, adder, added_date) values ('$Wisdom_id','$subject','$factor','$status','$help','$repetable','$active','$adder','$datewithtime')");
}
mysqli_close($connection);
session_abort();
?>