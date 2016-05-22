
<html>
<head>
	<title>Mt.Bikers club - Register</title>
	<meta  charset=iso-8859-1" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <script>
        function validateForm(theform)
        {
            var a=theform.C_name.value;
            var b=theform.C_address.value;
            var c=theform.C_phone.value;
            var d=theform.citizenshipno.value;
            var e=theform.username.value;
            var f=theform.password.value;
            if(a==null||a=="")
            {
                alert ("Enter your name");
                theform.C_name.focus();
                return (false);
            }
            if(b==null||b=="")
            {
                alert ("Enter your address");
                theform.C_address.focus();
                return (false);
            }
            if(c==null||c=="")
            {
                alert ("Enter your phone number");
                theform.C_phone.focus();
                return (false);
            }
            if(d==null || d=="")
            {
                alert("Enter the citizenship number");
                theform.citizenshipno.focus();
                return false;
            }

            if(e==null||e=="")
            {
                alert ("Enter your username");
                theform.username.focus();
                return (false);
            }
            if(f==null||f=="")
            {
                alert ("Enter your password");
                theform.password.focus();
                return (false);
            }
        }
    </script>
</head>

<body>
	<div id="page">
		<div id="header"> <!-- start of header -->
			<div>
				<a href="register.php" class="join"></a>
				<h3>Join us to hire the bikes</h3>
				<p>register to join us</p>
			</div>
		</div> <!-- end of header -->

		<div id="body">  
			<div class="contents">
				<h1>REGISTRATION</h1>
				<div class="registration">
					<form name="signupform" action="signedup.php" onsubmit="return validateForm(this)" method="post">
                        <table cellspacing="0" cellpadding="0">
                            <tbody>
							<tr><td><label>Full Name</label></td><td><input type="text" name="C_name" class="txtfield" /></td></tr>
							<tr><td><label>Address</label></td><td><input type="text" name="C_address" class="txtfield" /></td></tr>
							<tr><td><label>Phone no.</label></td><td><input type="text" name="C_phone" class="txtfield" /></td></tr>
                            <tr><td><label>Citizenship no.</label></td><td><input type="text" name="citizenshipno" class="txtfield" /></td></tr>
							<tr><td><label>Username</label></td><td><input type="text" name="username" class="txtfield" /></td></tr>
							<tr><td><label>Password</label></td><td><input type="password" name="password" class="txtfield" /></td></tr>
							<tr><td colspan="2"><input type="checkbox" class="checkbox" /><label>Join Our Newsletter</label></td></tr>
							<tr><td colspan="2"><input type="checkbox" class="checkbox" /><label>I agree to the Terms of Use and Privacy Policy</label></td></tr>
							<tr><td colspan="2"><input type="submit" value="Submit" class="button" /></td></tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>  <!-- end of body wrapper -->
	</div>
    <?php require('footer.php')?>
</body>
</html>
