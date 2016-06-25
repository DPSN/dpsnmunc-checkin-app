<?php
include_once("../db.php");

function form_error() {
    die(header('Location: ../wrong.html'));
}

//Form Validation
if(isset($_POST['name']) == false || isset($_POST['number']) == false || isset($_POST['institution']) == false || isset($_POST['committee']) == false) {
    form_error();
}

if(empty($_POST['name']) || empty($_POST['number']) || empty($_POST['institution']) || empty($_POST['committee'])) {
    form_error();
}

if(strlen($_POST['number']) != 10) {
    form_error();
}

//Data Entry into Database
$name = htmlspecialchars($_POST['name']);
$number = htmlspecialchars($_POST['number']);
$institution = htmlspecialchars($_POST['institution']);
$committee = htmlspecialchars($_POST['committee']);
$type = 'dpsndel';

$sql = "INSERT INTO `participants` (`name`,`number`,`institution`,`committee`,`type`) VALUES '$name','$number','$committee','$type'";
if(mysqli_query($db, $sql) == false) {
    die("Form Data Submission Error.");
}
?>
