<?php include_once __DIR__ . '/../../config/connection.php'; ?>
<?php
session_start();
$stateid = $_GET['state'];
$city = mysqli_query($connection, "select distinct name from city where state_id='$stateid' order by name asc");
echo "<option>" . "انتخاب کنید" . "</option>";
foreach ($city as $cityinfo) {
    echo "<option value=" . $cityinfo['id'] . ">" . $cityinfo['name'] . "</option>";
}
mysqli_close($connection);
session_abort();
?>