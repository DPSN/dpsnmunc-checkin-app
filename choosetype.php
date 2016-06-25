<?php
if($_GET['type'] == 'schooldel') {
    die(header('Location: schooldel'));
}
else if($_GET['type'] == 'indidel') {
    die(header('Location: indidel'));
}
else if($_GET['type'] == 'dpsndel') {
    die(header('Location: dpsndel'));
}
else {
    die(header('Location: wrong.html'));
}