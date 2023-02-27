<?php
include_once __DIR__ . '/../../../config/connection.php';

if (isset($_POST['add_wisdom']) and !empty($_POST['wisdom_subject'])) {

    session_start();
    $wisdom_subject = $_POST['wisdom_subject'];
    $macro_id=$_POST['macro_id'];
    $active = $_POST['active'];
    $section=$_POST['section_id'];
    $registrar = $_SESSION['id'];

    $QueryForCheckSubjectExists = mysqli_query($connection, "select * from wisdom_index_options where subject='$wisdom_subject'");
    foreach ($QueryForCheckSubjectExists as $item) {
    }
    if (!empty($item)) {
        header("Location: ../../../unit_catalogs.php?WisdomFounded");
    } else {
        mysqli_query($connection, "insert into wisdom_index_options (parent_id,subject,active,adder, added_date)
        values ('$macro_id','$wisdom_subject','$active','$registrar','$datewithtime')");
        header("Location: ../../../unit_catalogs.php?WisdomAdded&subject=$wisdom_subject#$section");
    }
}