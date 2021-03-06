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

$number = htmlspecialchars($_POST['number']);
$institution = htmlspecialchars($_POST['institution']);
$type = 'schooldel';
?>
<!doctype html>
<html>
    <head>
        <title>DPSNMUNC'16 CHECK IN APPLICATION RECEIPT</title>
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <link rel="stylesheet" href="../style2.css" type="text/css" />
        <link rel="icon" href="http://swghosh.cu.cc/favicon.png" type="image/png" />
        <meta name="theme-color" content="#336">
    </head>
    <body>
      <h1>DPSNMUNC'16 check-in successful!</h1>
      <ul>
        <li><span>School Delegation</span></li>
        <li><span><?php echo $institution; ?></span></li>
        <li><span><?php echo $number; ?></span></li>
        <?php
        for($i = 0; $i < sizeof($_POST['name']); $i++) {
          $name = $_POST['name'][$i];
          $committee = $_POST['committee'][$i];
          $sql = "INSERT INTO `participants` (`name`,`number`,`institution`,`committee`,`type`) VALUES ('$name','$number','$institution','$committee','$type');";
          if(mysqli_query($db, $sql) == false) {
              die("Form Data Submission Error.");
          }
          echo "<li><span>".$name." - ".$committee."</span></li>\n";
        }
        ?>
      </ul>
      <p>Welcome aboard!</p>
      <p><small><a href="/">another check-in</a></small></p>
    </body>
</html>
<?php
include('../flockincominghook.php');
$string = "DPSNMUNC'16 CHECK-IN SUCCESSFUL\\nSchool Delegation\\n".$institution."\\n".$number."\\n";
for($i = 0; $i < sizeof($_POST['name']); $i++) {
  $name = $_POST['name'][$i];
  $committee = $_POST['committee'][$i];
  $string = $string." ".$name." - ".$committee."\\n";
}
flock_group_post($string);
?>
