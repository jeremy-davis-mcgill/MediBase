<?php
  session_start();
?>

<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>
function validate()
{
var fname=document.getElementById('fname').value;
var regFname=/^[a-z ,.'-]+$/i;
	if (regFname.test(fname) && fname!="")
	{
		var lname=$('#lname').val();
		var regLname=/^[a-z ,.'-]+$/i;
		if(regLname.test(lname)&& lname!="")
		{
			var email=$('#email').val();
			var regEmail=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if (regEmail.test(email)&& email!="")
			{
				var phone=$('#phonenum').val();
				var regPhone=/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
				if (regPhone.test(phone)&& phone!="")
				{
					var city=$('#city').val();
					var regCity=/^[a-z ,.'-]+$/i;
					if(regCity.test(city) && city!="")
					{
						var day=$("#day").val();
						var regDay=/^[0-9]*$/;
						if (regDay.test(day)&&day!="")
						{
							var year=$("#year").val();
							var regYear=/^[0-9]*$/;
							if (regYear.test(year) && year!="")
							{
							var month=$("#month").val();
							var gender=$("input[name='gender']:checked").val();
							if (gender!=null)
							{
							alert("Processing to the next page");
							}
							else
							{
								alert("Error with gender!");
								return false;
							}
							}
							else
							{
								alert("Error with year!");
								return false;
							}
						}
						else
						{
							alert("Error with day!");
							return false;
						}
					}
					else
					{
						alert("Error with city!");
						return false;
					}
				}
				else
				{
					alert("Error with phone number!");
					return false;
				}
			}
			else
			{
				alert("Error with email!");
				return false;
			}
		}
		else
		{
		alert("Error with last name!");
		return false;
		}
	}
	else
	{
		alert("Error with first name!");
		return false;
	}
}
</script>
<style>
label {float:left;}
input[type=text] {float:left;}
</style>
</head>
<body>
<form action="Database.php" method="POST" onsubmit="return validate()">
<p>Registration for Placeholder.com</p>
<br>
First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="textbox" name="name_first" id="fname">
<br>
<br>
<label>Last Name </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="textbox" name="name_last" id="lname">
<br>
<br>
<label>Middle Name </label>&nbsp; <input type="textbox" name="name_middle" id="mname">
<br>
<br>
<label>Email </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="textbox" name="email" id="email">
<br>
<br>
<label>Phone Number &nbsp;</label> <input type="textbox" name="phone" id="phonenum">
<br>
<br>
<label>City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input type="text" name="city" id="city">
<br><br>
<label>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input type="textbox" name="address" id="address">
<br>
<br>
<label>Date of birth &nbsp;&nbsp;</label> <input type="text" id="day" name="dateOfBirth" value="Enter day">

<input type="text" id ="month" name = "month" value="Enter month">
<!-- <select id="month" name = "month" >
<option value="January" name = "month" >January</option>
<option value="February" name = "month" >February</option>
<option value="March" name = "month" >March</option>
<option value="April" name = "month" >April</option>
<option value="May" name = "month" >May</option>
<option value="June" name = "month" >June</option>
<option value="July" name = "month" >July</option>
<option value="August" name = "month" >August</option>
<option value="September" name = "month" >September</option>
<option value="October" name = "month" >October</option>
<option value="November" name = "month" >November</option>
<option value="December" name = "month" >December</option>
</select> -->

<input type="text" id ="year" name = "year" value="Enter year"><br>
<br>
<label>Gender </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="genders" name="gender" value="Males"> Male <input type="radio" id="genders" name="gender" value="Female"> Female <input type="radio" id="genders" name="gender" value="Other"> Other
<br>
<Br>
<input type="submit" value="Submit">
</body>
<footer>
</footer>
</html>