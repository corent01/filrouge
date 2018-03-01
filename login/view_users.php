<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <title>Rotary ADMIN-View Users</title>
</head>
<style>
body {
    background-color: black;
    color: white;
    }
    .login-panel {
        margin-top: 150px;
    }
    th {
      color: white;
    }
    .table {
        margin-top: 50px;
        color: black;
    }
    #inBuRegistr {
      width: 130px;
      background-color: black !important;
      border: 1px solid #F7A81B !important;
    }
    #inBuMem {
      width: 175px;
      background-color: black !important;
      border: 1px solid #F7A81B !important;
      display: flex;
      margin: auto;
      margin-top: 10px;


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
<header>
  <div class="bMembre">
    <form class="bMembre" action="../login/welcome.php">
      <input class="btn btn-lg btn-block" id="inBuMem" type="submit" value="Espace Membres" />
    </form>
  </div>

  <div class="bHome">
    <form class="bHome" action="../Rotary Mons/index.html">
      <input class="btn btn-lg btn-block" id="inBuHome" type="submit" value="Home" />
    </form>
  </div>

  <div class="bRegistr">
    <form class="bRegistr" action="../login/registration.php">
      <input class="btn btn-lg btn-block" id="inBuRegistr" type="submit" value="Registration" />
    </form>
  </div>

</header>

<div class="table-scrol">
  <h1 align="center">ADMIN CONTROLE</h1>
    <h2 align="center">All the Users</h2>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>User Id</th>
            <th>User Name</th>
            <th>User E-mail</th>
            <th>User Pass</th>
            <th>Delete User</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from users";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
            $user_pass=$row[3];



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
