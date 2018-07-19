<!DOCTYPE html>
<html>
<head>
<title>Welcome to steve lis DevOps world </title>
</head>
<body>
<?php
require 'welcome.php';
$welcome=new welcome();
?>
<h1>
<?php echo $welcome->greeting()  ?>
</h1>
</body>
</html>
