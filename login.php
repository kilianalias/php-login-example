<?php
session_start();

$at_uname = $_REQUEST['uname'];
$at_pword = $_REQUEST['pword'];
if ($at_uname == "test" && $at_pword == "test") {
    $_SESSION['auth'] = "1";
    header("Location: /home.php");
    die();
}
header("Location: /");
die();

?>