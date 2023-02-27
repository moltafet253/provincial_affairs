<?php
include_once __DIR__ . '/../../../config/connection.php';

if (isset($_POST['add_macro']) and !empty($_POST['macro_subject'])) {

    session_start();
    $macro_subject = $_POST['macro_subject'];
    $active = $_POST['active'];
    $registrar = $_SESSION['id'];

    $QueryForCheckSubjectExists = mysqli_query($connection, "select * from macro_index_options where subject='$macro_subject' and status=2");
    foreach ($QueryForCheckSubjectExists as $item) {
    }
    if (!empty($item)) {
        header("Location: ../../../unit_catalogs.php?MacroFounded");
    } else {
        mysqli_query($connection, "insert into macro_index_options (subject, status,active,adder, added_date)
        values ('$macro_subject',2,'$active','$registrar','$datewithtime')");
        header("Location: ../../../unit_catalogs.php?MacroAdded&subject=$macro_subject");
    }
}