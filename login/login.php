<?php
session_start();//session starts here

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Rotary Login Members</title>
    <!-- favicons
      ================================================== -->
    <link rel="shortcut icon" href="../favicon2.ico" type="image/x-icon">
    <link rel="icon" href="../favicon2.ico" type="image/x-icon">
</head>
<body id="memLogin">


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Entrée Menbres Rotary</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mot de passe" name="pass" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-warning btn-block" type="submit" value="Entrée Membres" name="login" id="inBuEntree" >

                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>

  <div class="bHome">
    <form class="bHome" action="../index.html">
      <input class="btn btn-lg btn-warning btn-block" id="inBuHome" type="submit" value="Home" />
    </form>
  </div>
  <div class="bAdminLogin">
    <form class="bAdminLogin" action="admin_login.php">
      <input class="btn btn-lg btn-warning btn-block" id="inBuAdminLogin" type="submit" value="Admin" />
    </form>
  </div>

</footer>
</body>

</html>

<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>
