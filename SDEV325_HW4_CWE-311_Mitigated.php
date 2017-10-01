<?php
//MITIGATED CWE-311 VULNERABILITY: USERNAME/PASSWORD IN SESSION AND NOT IN UN-ENCRYPTED COOKIE//
session_start();
$_SESSION['userName']=$_POST["username"];
$_SESSION['userPassword']=$_POST["password"];
?>

<!--
    JASON HOWARTH
    SDEV325 6380
    HOMEWORK 4 - MITIGATED CWE-311: Missing Encryption of Sensitive Data
    02 JULY 2017
    SDEV325_HW4_CWE-311_Mitigated.php
-->

<!DOCTYPE html>
<html>
    
    <head>
        <title>Login</title>
        
        <!--STYLING-->
        <style>
            html {
                background-color: #F3F3F3;
            }
            .container {
                border: 0;
                font-family: sans-serif;
                margin: 0;
                padding: 0;
            }
            .login {
                width:300px;
                background-color: #fff;
                border-radius:10px;
                border:0;
                padding:10px 40px 45px;
                margin: 0 auto;
            }
            h2 {}
            form {
                text-align: center;
            }
            input[type=text],input[type=password] {
                width:225px;
                padding:10px;
                margin: 10px 0 10px 0;
                border:1px solid #ccc;
                font-size:16px;
            }
            input[type=submit] {
                width:245px;
                background-color:#FFBC00;
                color:#fff;
                border:0;
                padding:10px;
                font-size:20px;
                cursor:pointer;
                border-radius:5px;
                margin: 0 auto;
                margin-top:15px
            }
            input[type=submit]:hover {
                background-color:#FFE000;
            }
            .cookie-data {
                padding: 10px;
                width: 200px;
                margin: 10px auto;
                color: red;
                background-color: #fff;
                border-radius:10px;
                border:0;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <!--LOGIN FORM WITH USERNAME AND PASSWORD-->
            <div class="login">
                <form action="SDEV325_HW4_CWE-311_Mitigated.php" method="post">
                    <h2>Login Form</h2>
                    <label>UserName :</label>
                    <input id="name" name="username" placeholder="username" type="text">
                    <label>Password :</label>
                    <input id="password" name="password" placeholder="**********" type="password">
                    <input name="submit" type="submit" value=" Login ">
                </form>
            </div>
        

<!-- CHECKS FOR UN-ENCRYPTED SENSITIVE DATA IN COOKIE AND PRINTS IT-->
<?php  
    if($_COOKIE) {
        print_r($_COOKIE);
    } else {
        echo "COOKIE is not set";    
    }
?>

            </div>
    </body>
</html>