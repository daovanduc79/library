<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="../style/login.css">
</head>
<body>
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>

        <div class="login-form">
            <form method="post" action="../action/login.php">
                <div class="sign-in-htm">
                    <?php
                    if (isset($_SESSION['errorLogin'])):
                        ?>
                        <p class="text-danger"><?php echo $_SESSION['errorLogin'] ?></p>

                    <?php endif; ?>
                    <div class="group">
                        <label for="user" class="label">Username or Email</label>
                        <input id="user" type="text" name="email" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" name="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                </div>
            </form>
            <div class="for-pwd-htm">
                <div class="group">
                    <label for="user" class="label">Username or Email</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Reset Password">
                </div>
                <div class="hr"></div>
            </div>
        </div>
    </div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>