
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Rotary ADMIN-Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
      }
      body {
          background-color: black;
        }
        footer{
          margin-top: 100px;
        }
        .login-panel{
          border-color: #F7A81B !important;
        }
        .panel-heading{
          background-color: #F7A81B !important;
        }
        #inBuAdminLogin {
          width: 100px;
          background-color: black !important;
          border: 1px solid #F7A81B !important;
        }
        #inBuHome {
          display: block;
          float: right;
          width: 100px;
          background-color: black !important;
          border: 1px solid #F7A81B !important;
        }
        #inBuEntree {
          background-color: white !important;
          border: 3px solid #F7A81B !important;
          color: black;
        }
</style>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Rotary ADMIN Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="admin_login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-warning btn-block" type="submit" value="Entrée Admin" name="admin_login" id="inBuEntree" >


                        </fieldset>
                    </form>
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
    <form class="bAdminLogin" action="../login/login.php">
      <input class="btn btn-lg btn-warning btn-block" id="inBuAdminLogin" type="submit" value="Login" />
    </form>
  </div>

</footer>

</body>

</html>

<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/24/2014
 * Time: 3:26 AM
 */
include("database/db_conection.php");

if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.
{
    $admin_name=$_POST['admin_name'];
    $admin_pass=$_POST['admin_pass'];

    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $run_query=mysqli_query($dbcon,$admin_query);

    if(mysqli_num_rows($run_query)>0)
    {

        echo "<script>window.open('view_users.php','_self')</script>";
    }
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}

}

?>
