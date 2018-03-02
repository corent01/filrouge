
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link rel="stylesheet" href="./loginstyle.css">
    <title>Rotary ADMIN-NouveauxMembres</title>
    <!-- favicons
      ================================================== -->
    <link rel="shortcut icon" href="../Rotary Mons/favicon2.ico" type="image/x-icon">
    <link rel="icon" href="../Rotary Mons/favicon2.ico" type="image/x-icon">
</head>
<body>

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Rotary Admin-Nouveaux Membres</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-warning btn-block" type="submit" value="Nouveaux Membres" name="register" id="inBuEntree">

                        </fieldset>
                    </form>
                    <center><b>Déjà menbre ?</b> <br></b><a href="login.php">Login ICI</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>
<footer>

  <div class="bHome">
    <form class="bHome" action="../Rotary Mons/index.html">
      <input class="btn btn-lg btn-warning btn-block" id="inBuHome" type="submit" value="Home" />
    </form>
  </div>
  <div class="bAdminLogin">
    <form class="bAdminLogin" action="../login/admin_login.php">
      <input class="btn btn-lg btn-warning btn-block" id="inBuAdminLogin" type="submit" value="Admin" />
    </form>
  </div>

</footer>
</body>

</html>

<?php

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $user_email=$_POST['email'];//same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }

}

?>
