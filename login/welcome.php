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
    <link rel="stylesheet" href="./loginstyle.css">
    <!-- favicons
      ================================================== -->
    <link rel="shortcut icon" href="../Rotary Mons/favicon2.ico" type="image/x-icon">
    <link rel="icon" href="../Rotary Mons/favicon2.ico" type="image/x-icon">
</head>
<body id="bodyWel">


  <!-- header
    ================================================== -->
  <header class="s-header">

    <div class="header-logo">
      <a class="site-logo" href="../Rotary Mons/index.html" ><img src="../Rotary Mons/images/logo.png" alt="Homepage"><span class="entete">Espace Membres</span></a>

    </div>

  </header>
  <!-- end s-header -->


  <!-- home
    ================================================== -->
  <section id="home" class="s-home target-section" data-parallax="scroll" src="../Rotary Mons/images/rotary-logo-text.svg" class="responsive">


    <div class="overlay"></div>
    <div class="shadow-overlay"><img src="../Rotary Mons/images/rotary-logo-text.svg" alt="" class="responsive"></div>

    <div class="home-content">

      <div class="row ">

        <h3></h3>

        <h1 id="php">Bienvenue</h1>
        <h3 id="wel">
        <?php
        echo $_SESSION['email'];
        ?>
        ,</h3>
    <p id="intro"> vous êtes sur l'epace membres du Rotary Club de Mons!</p>

        <div class="home-content__buttons">
          <a href="logout.php" class="smoothscroll btn btn--stroke" id="logout">Deconnection</a>
          <a href="#" class="smoothscroll btn btn--stroke" id="membres">Membres</a>
        </div>

      </div>

      <div class="home-content__scroll">
        <a href="#contenus" class="scroll-link smoothscroll"><span>Défiler vers le bas</span></a>
      </div>

      <div class="home-content__line"></div>

    </div>
    <!-- end home-content -->


  </section>
  <!-- end s-home -->

  <!-- Contenus
    ================================================== -->
  <section id='contenus' class="s-about">

    <div class="row section-header has-bottom-sep" data-aos="">
      <div class="col-full">
        <h3 class="subhead subhead--dark">....................</h3>
        <p><br>.............................................................................................................................................................................................................................................. . <a href="#">..........</a></p>
        <h1 class="display-1 display-1--light">......................................</h1>
      </div>
    </div>
    <!-- end section-header -->

    <div class="row about-desc" data-aos="">
      <div class="col-full">
        <p>
          <p>..............................................................................................................................................................................................................................................................................................................................................................................................................................................................................</p>

          <p>..........................................................................................................................................
            <br>..... <a href="#services">..........</a>.</p>

      </div>
      <div><u class="spelling">...................................</u>
        <div class="criteres1">
          <p><br>....................................................................................................................
        </div>
        <ul class="criteres2">
          <li>................
            <li>....................
              <li>...............................
                <li>..........................................
        </ul>

        <br>....................... <a href="http://www.rotarybelux.org/index.php?id=8&L=fr" target="_blank">......................</a>
        </p>
      </div>
    </div>
    <!-- end about-desc -->

  </section>
  <!-- end s-about -->

  <!-- footer
    ================================================== -->
  <footer>
    <section id="footer">
      <div class="row section-header has-bottom-sep" >
        <div>
          <h3 class="subhead">.....</h3>
          <p>
            ........................................................................
            <br>........................................................
          </p>
          <!-- <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.1144361924694!2d4.009303015730984!3d50.43896907947378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c24585e6e61d19%3A0x68ebe7eb265f311!2sMaxens!5e0!3m2!1sfr!2sbe!4v1519393502415"
              width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div> -->
        </div>
      </div>
    </section>
    <div class="row footer-main">

      <div class="col-six tab-full left footer-desc">

        <div class="footer-logo"></div>
        <a href="https://mons.rotary1620.org/" target="_blank">Cliquez ici</a>, pour accéder à la page du club sur Harmony.
      </div>

      <div class="col-six tab-full right footer-subscribe">

        <h4>..................................................</h4>
        <p>..............................................................................................</p>

      </div>

    </div>
    <!-- end footer-main -->

    <div class="row footer-bottom">
        <br>
      <div class="col-twelve">
        <div class="copyright">
          <span>© Copyright 2018 By <a href="https://github.com/corent01"target="_blank">Corentin W.</a> @ <a href="https://www.becode.org/"target="_blank"> BeCode-Brussels</a></span>

        </div>

        <div class="go-top">
          <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
        </div>
      </div>

    </div>
    <!-- end footer-bottom -->

  </footer>
  <!-- end footer -->

</body>

</html>
