<html><head>
<title>Booking</title>
<link rel="stylesheet" href="bookstyle.css">
</head><body bgcolor=#e8f3f8>
<center><font color="steelblue" size="6"><i><h1>Make a Booking</h1></i></font></center>
<form method="post" action="connect11.php">
<h2><b>First Name</h2></b>
<input type="text"  placeholder="First Name" name="fname" required>
<h2><b>Last Name</h2></b>
<input type="text"  placeholder="Last Name" name="lname" required>
<h2><b>Mobile Number</h2></b>
<input type="number"  placeholder="Mobile Number" name="mobilenumber" required>
<h2><b>Email</h2></b>
<input type="email"  placeholder="email" name="email" required>
<h2><b>Aadhar Number/Passport number</h2></b>
<input type="number"  placeholder="Aadhar/passport number" name="ap" required>
<h2><b>Date of Birth</b></h2>
<input type="date"  placeholder="dd/mm/yyyy" name="dob" required>
<h2><b>Country</h2></b>
<input type="text"  placeholder="Country" name="country" required>
<h2><b>Preferred travel month & year</h2></b>
<input type="date"  placeholder="Preferred travel month & year" name="prefer" required>
<h2><b>Mode of Travel</h2></b>
<select name="mode">
<option value="Bus" >Bus</option>
<option value="Train">Train</option>
<option value="Flight" >Flight</option> </select>
<h2><b>Destination Place</h2></b>
<input type="text"  placeholder="Destination" name="destination" required>
<h2><b>Number of days</h2></b>
<input type="number"  placeholder="No of days" name="nodays" required>
<h2><b>Number of Person</h2></b>
<input type="number"  placeholder="No of Person" name="noperson" required>
<h2><b>Special Requirements</h2></b>
<input type="text"  placeholder="Special Requirements" name="sr"><br>
<center><input type="submit" value="Confirm Booking" onclick="func()"><center>
<h2><b>To pay Online:</h2></b>
<a href="Payment.php"><img src="payclick.jpg"></a></center>
<script>
function func()
{
	alert(" Your form is submitted successfully.");
}	
</script></form></body></html>
