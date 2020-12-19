<?php
session_start();

if ($_SESSION['auth'] == "1") {
    echo "Auth Status 1";
    die();
}
echo "Auth Status 0";
header("Location: /");
die();
?>