<?php include_once __DIR__ . '/../../../config/connection.php'; ?>
<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$coderater = $_GET['coderater'];
$codeasar = $_GET['codeasar'];
$registrar = $_SESSION['id'];
mysqli_query($connection_maghalat, "update article set tafsili1_ratercode_g2='$coderater',tafsili1_registrar_g2='$registrar',tafsili1_set_date_g2='$datewithtime' where article_id='$codeasar'");
$codeasar = null;
$coderater = null;
mysqli_close($connection_maghalat);
?>

</body>
</html>