<?php

session_start();
if(isset($_SESSION["user_data"]))
{
	header("location:./dashboard/admin/");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Gym | Login</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/entypo.css">
</head>

<body style="background-image: url(images/hero-bg.jpg)">

    <body class="page-body login-page login-form-fall">
        <div id="container">

            <br>
            <br>
            <br>
            <br>

            <h1 style="color:white;">

                <center>
                    <h1>GYM MANAGEMENT SYSTEM</h1>
                </center>
            </h1>



            <div class="login-progressbar">
                <div></div>
            </div>


            <div class="login-form">

                <div class="login-content">

                    <form action="secure_login.php" method='post' id="bb">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>
                                <input type="text" placeholder="User ID" class="form-control" name="user_id_auth"
                                    id="textfield" data-rule-minlength="6" data-rule-required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-key"></i>
                                </div>
                                <input type="password" name="pass_key" id="pwfield" class="form-control"
                                    data-rule-required="true" data-rule-minlength="6" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="btnLogin" class="btn btn-primary">
                                Login In
                                <i class="entypo-login"></i>
                            </button>
                        </div>
                    </form>

                    <div class="login-bottom-links">
                        <a href="forgot_password.php" class="link">Forgot your password?</a>
                    </div>
                </div>

            </div>

        </div>

        </div>

    </body>

</html>