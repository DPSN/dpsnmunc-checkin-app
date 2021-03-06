<?php
function form_error() {
    die(header('Location: ../wrong.html'));
}

//Form Validation
if(isset($_POST['institution']) == false || isset($_POST['number']) == false || isset($_POST['cnumber']) == false) {
    form_error();
}

if(empty($_POST['institution']) || empty($_POST['number']) || empty($_POST['cnumber'])) {
    form_error();
}

$number = intval(htmlspecialchars($_POST['number']));
$institution = htmlspecialchars($_POST['institution']);
$cnumber = htmlspecialchars($_POST['cnumber']);

?>
<!doctype html>
<html>
    <head>
        <title>DPSNMUNC'16 CHECK IN APPLICATION | SCHOOL DELEGATION</title>
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <link rel="stylesheet" href="../style.css" type="text/css" />
        <link rel="icon" href="http://swghosh.cu.cc/favicon.png" type="image/png" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <meta name="theme-color" content="#336">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class="header">
                <br/>
                <div id="imageatr"><img src="../images/labtocat.png"></div>
                <h1><small>check-in app </small>DPSNMUNC'16 <sup><small id="beta">&nbsp;beta&nbsp;</small></sup><br/><span id="tagline">Model United Nations Elite<br>#mune</span></h1>
                <br/>
            </div>
            <div class="navbar">
	            <ul>
                    <li id="togglemenu"><a href="#menu" id="menubutton">&equiv;</a></li>
                    <li id="flogo"><span class="flogolink"><a href="/">DPSNMUNC'16 Check-In App</a></span></li>
                    <li><a href="../schooldel/">School Delegation</a></li>
                    <li><a href="../indidel/">Individual Applicant</a></li>
                    <li><a href="../dpsndel/">DPS Newtown Delegate</a></li>
	            </ul>
            </div>
        </header>
        <div class="content1">
            <br>
            <form id="application" method="POST" action="checkin.php">
                <?php
                $string = "<label for=\"name\" id=\"name\">Name</label><br>
                <input type=\"text\" name=\"name[]\" placeholder=\"full name\" id=\"name\"><br><br>
                <label for=\"committee\">Committee</label><br>
                <select name=\"committee[]\">
                    <option value=\"general assembly\">General Assembly - DISEC</option>
                    <option value=\"security council\">Security Council</option>
                    <option value=\"ecosoc\">ECOSOC</option>
                    <option value=\"international press\">International Press Corps</option>
                    <option value=\"coc\">Clash of Caricatures</option>
                    <option value=\"photo\">Photography Videography</option>
                    <option value=\"faculty\">Faculty Advisor</option>
                </select><br><hr><br>";
                for($i = 1; $i <= $number; $i++) {
                  echo $string."\n";
                }
                ?>
                <input type="hidden" name="institution" value="<?php echo $institution; ?>">
                <input type="hidden" name="number" value="<?php echo $cnumber; ?>">
                <button class="button" type="submit"> check-in </button>
            </form>
            <br>
        </div>
        <footer>
            <div class="foot">
                <br/>
                <h1>Thanks for stopping by!</h1>
                <p>Welcome to our conference.</p>
                <br/>
                <br/>Creativity &copy; <a href="https://facebook.com/swghosh">Swarup Ghosh</a>, 2k16.<br/>Made with <span class="heart">&hearts;</span> and JavaScript.<br/><a href="https://twitter.com/SwG_Ghosh" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @SwG_Ghosh</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br/><br/>
            </div>
        </footer>
        <script src="../base.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="suggestion.js"></script>
    </body>
</html>
