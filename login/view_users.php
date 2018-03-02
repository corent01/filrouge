<?php
session_start();
?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <link rel="stylesheet" href="./loginstyle.css">
    <title>Rotary ADMIN-View Users</title>
    <!-- favicons
      ================================================== -->
    <link rel="shortcut icon" href="../favicon2.ico" type="image/x-icon">
    <link rel="icon" href="../favicon2.ico" type="image/x-icon">

</head>
<body>

  <header class="s-header">
    <container>
      <nav class="header-nav">
        <div class="header-nav__content">
          <div class="bHome">
            <form class="viewMem" action="../index.html">
              <input class="btn btn-lg btn-block" id="inBuHome2" type="submit" value="Site du Rotary" />
            </form>
          </div>

          <div class="bRegistr">
            <form class="viewMem" action="registration.php">
              <input class="btn btn-lg btn-block" id="inBuRegistr" type="submit" value="Nouveau Membre" />
            </form>
          </div>

          <div class="bMembre">
            <form class="viewMem" action="welcome.php">
              <input class="btn btn-lg btn-block" id="inBuMem" type="submit" value="Espace Membres" />
            </form>
          </div>

          <div class="bMembre">
            <form class="viewMem" action="logout.php">
              <input class="btn btn-lg btn-block" id="inBuMem" type="submit" value="Deconnection" />
            </form>
          </div>
        </div>
      </nav>
    </container>
  </header>

<div class="table-scrol">

  <p><br><br><h1 align="center">ADMIN - CONTROLE des MEMBRES</h1>
    <h2 align="center">Tous Les Utilisateurs</h2></p>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Id Utilisateurs</th>
            <th>Nom Utilisateurs</th>
            <th>Pass Utilisateurs</th>
            <th>E-mail Utilisateurs</th>
            <th>Supprimer Utilisateurs</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from users";
        $run=mysqli_query($dbcon,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[2];
            $user_pass=$row[3];



        ?>

        <tr>
<!--table -->
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Supprimer</button></a></td>
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
