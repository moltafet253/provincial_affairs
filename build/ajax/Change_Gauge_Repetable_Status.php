<?php include_once __DIR__ . '/../../config/connection.php';
session_start();
$Gauge_id = $_GET['Gauge_id'];
$Value = $_GET['Value'];
$editor=$_SESSION['id'];

$query = mysqli_query($connection, "select * from gauge_options where id='$Gauge_id'");
foreach ($query as $CheckGaugeIDForExists) {}
if ($CheckGaugeIDForExists!=null){
    mysqli_query($connection,"update gauge_options set repetable='$Value',editor='$editor',edited_date='$datewithtime' where id='$Gauge_id'");
}
mysqli_close($connection);
session_abort();
?>
