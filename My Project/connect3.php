<?php include 'Payment.php';?>
<?php
//create a variable
if ($_POST) {
  $q=$_POST['amt'];
  $l=$_POST['noc'];
  $m=$_POST['cardnumber'];
  $n=$_POST['expmonth'];
  $o=$_POST['cvv'];
  $p=$_POST['expyear'];


  if(!filter_var(FILTER_VALIDATE_EMAIL)==false)
  {
  echo(" ");
  }
  else
  {
  echo (" ");
  }


  $mysqli = new mysqli("localhost", "root", "", "travel");
if (!$mysqli)
{
   die('could not connect :' .$mysqli->error);
}
$sql="INSERT INTO payment (amt,noc,cardnumber,expmonth,cvv,expyear)VALUES('$q','$l','$m','$n','$o','$p')";
if(!$mysqli->query($sql))
{
  die('error'.$mysqli->error);
}
echo "data added";
$mysqli->close();
}
 # echo mysqli_error ($connect);

 ?>
