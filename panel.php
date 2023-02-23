<?php include_once __DIR__.'/header.php';
switch ($_SESSION['head']){
    case 1:
        include_once 'Pages/Panels/Unit.php';
        break;
    case 2:
        include_once 'Pages/Panels/State.php';
        break;
    case 3:
        include_once 'Pages/Panels/Admins.php';
        break;
}
include_once __DIR__.'/footer.php';



