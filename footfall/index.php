<?php
include_once("../db.php");

$sql = "SELECT * FROM `participants`;"
$res = mysqli_query($db, $sql);
$number = mysqli_num_rows($res);

$sql = "SELECT * FROM `participants` WHERE `type` = 'indidel';"
$res = mysqli_query($db, $sql);
$indidel = mysqli_num_rows($res);

$sql = "SELECT * FROM `participants` WHERE `type` = 'schooldel';"
$res = mysqli_query($db, $sql);
$schooldel = mysqli_num_rows($res);

$sql = "SELECT * FROM `participants` WHERE `type` = 'dpsndel';"
$res = mysqli_query($db, $sql);
$dpsndel = mysqli_num_rows($res);
?>
<!doctype html>
<html>
    <head>
        <title>DPSNMUNC'16 CHECK IN APPLICATION RECIEPT</title>
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <link rel="stylesheet" href="../style2.css" type="text/css" />
        <link rel="icon" href="http://swghosh.cu.cc/favicon.png" type="image/png" />
        <meta name="theme-color" content="#336">
    </head>
    <body>
      <h1><?php echo $number;?></h1>
      <ul>
        <li><span>Individual Applicants: <?php echo $indidel; ?></span></li>
        <li><span>School Delegation: <?php echo $schooldel; ?></span></li>
        <li><span>DPS Newtown Delegates: <?php echo $dpsndel;?></span></li>
      </ul>
      <p>Delhi Public School Newtown Model United Nations Conference 2016</p>
    </body>
</html>
