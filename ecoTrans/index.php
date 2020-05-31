<?php

include("functions/connection.php");

if(isset($_GET['use'])) { $use = $_GET['use']; } else {$use = 'about'; }

switch($use) {
case 'about':

require "about.php";

break;


case 'form':

require "form.php";

break;

case 'tracking':

require "tracking.php";

break;

case 'branch':

require "branch.php";

case 'test':

require "test.php";

break;

}
?>

<!DOCTYPE html>
<html>
<head>

<?php require_once "blocks/head.php" ?>
</head>
<body>

<? 
echo $echo;  
?> 
<footer>
<?php require_once "blocks/footer.php" ?>
</footer>

</body>
</html>
