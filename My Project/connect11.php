<?php include 'Booking.php';?>
<?php
//create a variable
if ($_POST) {
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['mobilenumber'];
$d=$_POST['email'];
$s=$_POST['ap'];
$t=$_POST['dob'];
$e=$_POST['country'];
$f=$_POST['prefer'];
$k=$_POST['mode'];
$g=$_POST['destination'];
$h=$_POST['nodays'];
$i=$_POST['noperson'];
$j=$_POST['sr'];
 $errPassport="";
if(!filter_var($d,FILTER_VALIDATE_EMAIL)==false)
{
 echo( " " );
 }
 else
 {
 echo ( " ");
 }
 if(preg_match("/^d{10}$|^d{12}$/", $_POST["ap"]) === 0)
$errPassport = '<p>Passport must be 10 or 12 digits</p>';
//execute the querry
$mysqli = new mysqli("localhost", "root", "", "travel");
if (!$mysqli)
{
   die('could not connect :' .$mysqli->error);
}
$sql="INSERT INTO booking (fname,lname,mobilenumber,email,ap,dob,country,prefer,mode,destination,nodays,noperson,sr)VALUES('$a','$b','$c','$d','$s','$t','$e','$f','$k','$g','$h','$i','$j')";
if(!$mysqli->query($sql))
{
  die('error'.$mysqli->error);
}
echo "data added";
$mysqli->close();
}
 # echo mysqli_error ($connect);

 ?>
