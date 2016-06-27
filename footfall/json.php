<?php
include_once("../db.php");

$sql = "SELECT * FROM `participants`;";
$res = mysqli_query($db, $sql);
$number = mysqli_num_rows($res);

$sql = "SELECT * FROM `participants` WHERE `type` = 'indidel';";
$res = mysqli_query($db, $sql);
$indidel = mysqli_num_rows($res);

$sql = "SELECT * FROM `participants` WHERE `type` = 'schooldel';";
$res = mysqli_query($db, $sql);
$schooldel = mysqli_num_rows($res);

$sql = "SELECT * FROM `participants` WHERE `type` = 'dpsndel';";
$res = mysqli_query($db, $sql);
$dpsndel = mysqli_num_rows($res);

header('Content-Type: application/json');

$kext = array('total' => $number,
              'indidel' => $indidel,
              'schooldel' => $schooldel,
              'dpsndel' => $dpsndel;
 );

print(json_encode($kext))
