<?php

@session_start();
if(isset($_SESSION['login_alert'])){
    ?>
    <script>alert("<?php echo $_SESSION['login_alert'] ?>");</script>
<?php
    unset($_SESSION['login_alert']);
}

?>
<html>
<head>
    <title>Mt.Bikers Club - Log in</title>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script>
        function form_validate()
        {
            var a=document.forms["loginform"]["username"].value;
            var b=document.forms["loginform"]["password"].value;
            if(a==null || a=="")
            {
                alert("Enter your username");
                loginform.username.focus();
                return (false);
            }
            if(b==null || b=="")
            {
                alert("Enter your password");
                loginform.password.focus();
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

    </div>

    <!-- end of header -->

    <div id="body">
        <div class="contents">
            <h1>Log in </h1>
            <div class="registration">
                <form name="loginform" action="login.php" onsubmit="return form_validate()" method="post">
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td><label>username</label></td>
                            <td><input type="text" name="username" class="txtfield" /></td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>
                            <td><input type="password" name="password" class="txtfield" /></td>
                        </tr>
                        <tr><td colspan="2"><input type="submit" value="Log in" class="button" /></td></tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div> <!-- end of body wrapper -->
</div>
<?php require('footer.php') ?>
</body>
</html>
