<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Rotary MEMBERS-Bienvenue</title>
    <link rel="stylesheet" href="../Rotary Mons/css/main.css">
    <link rel="stylesheet" href="../Rotary Mons/css/base.css">
    <link rel="stylesheet" href="../Rotary Mons/css/vendor.css">
</head>
<style>
      body {
          background-color: black;
        }
        @media screen and (max-width: 400px) {
          body {
            background-size: auto;
          }
          #logout {
            width: 150px;
          }
          #membres {
            width: 150px;
          }
          #php {
            padding-bottom: 25px;
          }
        }
</style>

<body>
  <!-- header
    ================================================== -->
  <header class="s-header">

    <div class="header-logo">
      <a class="site-logo" href="index.html"><img src="../Rotary Mons/images/logo.png" alt="Homepage"></a>
    </div>

  </header>
  <!-- end s-header -->




  <!-- home
    ================================================== -->
  <section id="home" class="s-home target-section" data-parallax="scroll" src="../Rotary Mons/images/rotary-logo-text.svg" class="responsive">


    <div class="overlay"></div>
    <div class="shadow-overlay"><img src="../Rotary Mons/images/rotary-logo-text.svg" alt="" class="responsive"></div>

    <div class="home-content">

      <div class="row home-content__main">

        <h3>Espace Membres</h3>

        <h1 id="php">Bienvenue</h1>
        <h3>
        <?php
        echo $_SESSION['email'];
        ?>
      </h3>
        <p>sur l'epace membres du Rotary Club de Mons!</p>

        <div class="home-content__buttons">
          <a href="logout.php" class="smoothscroll btn btn--stroke" id="logout">Quitter</a>
          <a href="#" class="smoothscroll btn btn--stroke" id="membres">Membres</a>
        </div>

      </div>

      <div class="home-content__scroll">
        <a href="#about" class="scroll-link smoothscroll"><span>Défiler vers le bas</span></a>
      </div>

      <div class="home-content__line"></div>

    </div>
    <!-- end home-content -->


  </section>
  <!-- end s-home -->






</body>

</html>
