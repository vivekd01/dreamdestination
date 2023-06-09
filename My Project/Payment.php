<html>
<head>
<title>Payment</title>
<link rel="stylesheet" href="bookstyle.css">

</head>
<body bgcolor=#e8f3f8>

<center><font color="black" size="6"><h1>Payment</h1></font>
<form method="post" action="connect3.php">
<h2>We Accept: </h2>
<img src="pay2.jpg" height="50" width="90" hspace="35px">
<img src="pay4.jpg" height="50" width="90" hspace="35px">
<img src="pay.jpg" height="50" width="90" hspace="35px">
<img src="pay3.jpg" height="50" width="90" hspace="35px"></img><br><br></center>
<center>
<b><h2>Amount</h2></b>
<input type="number"  placeholder="2000" name="amt" required>

<b><h2>Name on Card</h2></b>
<input type="text"  placeholder="John More Doe" name="noc" required>
<b><h2>Card Number</h2></b>
<input type="number" pattern="[0-9] {16}"  placeholder="xxxx-xxxx-xxxx-xxxx" name="cardnumber"  required>
<h2><b>Exp Month</h2></b>
<input type="text"  placeholder="September" name="expmonth" required>
<h2><b>CVV</h2></b>
<input type="number"  placeholder="352" name="cvv" pattern="[0-9] {3}" required>
<h2><b>Exp Year</h2></b>
<input type="number"  placeholder="2018" name="expyear" required><br></center>
<center><input type="submit" value="submit" onclick="myfunction()"></center>

<script>
function myfunction()
{
alert("Your payment is successfully done.");
}
</script>
</form>
</body>
</html>
