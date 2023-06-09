<?php include 'feed.php';?>
<?php
//create  variables
if ($_POST) {
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['cname'];
$d=$_POST['em'];
$e=$_POST['ph'];
$f=$_POST['address'];
$g=$_POST['feedback'];

if(!filter_var($d,FILTER_VALIDATE_EMAIL)==false)
{
 echo( " " );
 }
 else
 {
 echo ( " ");
 }

 $mysqli = new mysqli("localhost", "root", "", "travel");
if (!$mysqli)
{
   die('could not connect :' . $mysqli->error);
}
$sql="INSERT INTO customer(fname,lname,cname,em,ph,address,feedback)VALUES('$a','$b','$c','$d','$e','$f','$g')";
if(!$mysqli->query($sql))
{
  die('error '.$mysqli->error);
}
echo "data added";
$mysqli->close();
}
 # echo mysqli_error ($connect);

 ?>


