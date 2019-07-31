<?php
   include('conn.php');
 ?> 
<!DOCTYPE html>
<html>
	<head>
		<title>REGISTRATION FORM</title>
		<body background="sp.jpg">
			
		<center><h1> Registration Form</h1></center>
		<form name="registration" method="post" action="registration.php">
<!-- we will create registration.php after registration.html -->
		Email ID:<input type="text" name="emailid" value=""></br><br>
		Password:<input type="text" name="password" value=""></br></br><hr>
		<h2>Personal Details:</h2>
		First Name:<input type="text" name="firstname" value="">
		Last Name:<input type="text" name="lastname" value=""></br></br>
		
        Gender:<input type="radio" name="gender" value="male"> Male
 		<input type="radio" name="gender" value="female"> Female
  	
 		Birth Date: <input type="date" name="bday" value=""><br><br>
		Country:<input type="text" name="country" value=""></br></br>
		Address:<textarea name="address"></textarea>	<br><br>
		Phone No:<input type="phoneno" name="phoneno" value=""></br></br>
		Status:<input type="radio" name="status" value="">Married
 		<input type="radio" name="status" value="">Unmarried<br><br>
 		Hobbies:<input type="text" name="hobbies" value=""></br></br>
 		Describe userself in a single word:<input type="text" name="single" value=""></br></br>
 		About Yourself:<input type="text" name="about" value=""></br></br>
 		Skills:<input type="checkbox" name="skills" value="">HTML
  		<input type="checkbox" name="skills" value="">PHP
  		<input type="checkbox" name="skills" value="">Javascript
  		<input type="checkbox" name="skills" value="">CSS<br><br>
  		What do you think you can do as a programmer:<textarea name="think"></textarea><br><br>
  		<input type="checkbox" name="feedback" value="">I want to receive news.<br><br>
  		<input type="checkbox" name="terms" value="">I agree with terms and conditions.<br><br>

		<input type="submit" name="submit" value="submit">
		</form>

		</body>
	</head>
</html>