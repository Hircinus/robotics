<?php 
  $filePath = explode("/", $_SERVER['REQUEST_URI']);
  $hashParts = explode("#", $_SERVER['REQUEST_URI']);
  $hashLink = "";
  if($hashParts[1]) {
    $hashLink = $hashParts[1];
  }
  $pathPrefix;
  if($filePath[2] == "fr") {
    $isFrench = true;
    $pathPrefix = "../";
  } else {
    $isFrench = false;
    $pathPrefix = "";
  }
  ?>
<!DOCTYPE html>
<html <?php if(!$isFrench) { echo "lang='en-CA'"; } else { echo "lang='fr-CA'"; }?>>
<head>
  <link rel="stylesheet" id="main-style" type="text/css" href="<?php echo $pathPrefix; ?>assets/bulma.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $pathPrefix; ?>assets/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $pathPrefix; ?>assets/custom.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <?php
  if(!$isFrench) { echo '<meta name="description" content="The Champlain Robotics\' club website.">'; }
  else { echo '<meta name="description" content="La site web du club de robotique de Champlain.">'; }
  ?>
  <meta name="author" content="Champlain Robotics">
  <title><?php 
    if(!$isFrench) { echo $pageTitle, " - CRC Robotics 2022"; }
    else { echo $pageTitle, " - CRC Robotique 2022"; }
    ?></title>
</head>
<body>
  <?php
  if(!$isFrench) {
    echo '
    <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="home">
        <img src="assets/logo.png">
      </a>
  
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div class="navbar-menu">
      <div class="navbar-start">
        <a href="home" class="navbar-item ';
         if ($active == 0) { echo "active"; }
         echo '">
          Home
        </a>
        <a href="about" class="navbar-item ';
        if ($active == 1) { echo "active"; }
        echo '">
          About us
        </a>
        <a href="crc" class="navbar-item ';
        if ($active == 2) { echo "active"; }
        echo '">
          The competition
        </a>
        <a href="robot" class="navbar-item ';
        if ($active == 3) { echo "active"; }
        echo '">
          Our robot
        </a>
        <a href="team" class="navbar-item ';
        if ($active == 4) { echo "active"; }
        echo '">
          Team
        </a><!--
        <div id="dropdownBox" class="navbar-item has-dropdown ';
        if ($active == 3) { echo "active"; }
        echo '" data-target="0">
          <a class="navbar-link">
            Team
          </a>
  
          <div class="navbar-dropdown">
            <a href="team#robot" class="navbar-item checkHash">
              Robot team
            </a>
            <a href="team#programming" class="navbar-item checkHash">
              Programming team
            </a>
            <a href="team#kiosk" class="navbar-item checkHash">
              Kiosk Team
            </a>
            <a href="team#web" class="navbar-item checkHash">
              Webjournalism team
            </a>
            <a href="team#video" class="navbar-item checkHash">
              Video team
            </a>
            <hr class="navbar-divider">
            <a href="team#mentor" class="navbar-item checkHash">
              Mentors & mentions
            </a>
          </div>
        </div>-->
        <a href="media" class="navbar-item ';
        if ($active == 5) { echo "active"; }
        echo '">
          Media
        </a>
      </div>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a href="', "fr/", $pageFr, '" class="button is-light">
              Fran&ccedil;ais
            </a>
            <!--
            <a id="darkMode" class="button is-dark">
              <i class="far fa-moon"></i>
            </a>
            -->
          </div>
        </div>
      </div>
      </div>
    </nav>
    <nav id="nav" class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="home">
        <img src="assets/logo.png">
      </a>
  
      <a role="button" onclick="toggleNav()" class="navbar-burger" id="navbar-toggle" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbar-menu" class="navbar-menu">
      <div class="navbar-start">
        <a href="home" class="navbar-item ';
         if ($active == 0) { echo "active"; }
         echo '">
          Home
        </a>
        <a href="about" class="navbar-item ';
        if ($active == 1) { echo "active"; }
        echo '">
          About us
        </a>
        <a href="crc" class="navbar-item ';
        if ($active == 2) { echo "active"; }
        echo '">
          The competition
        </a>
        <a href="robot" class="navbar-item ';
        if ($active == 3) { echo "active"; }
        echo '">
          Our robot
        </a>
        <a href="team" class="navbar-item ';
        if ($active == 4) { echo "active"; }
        echo '">
          Team
        </a><!--
        <div id="dropdownBox" class="navbar-item has-dropdown ';
        if ($active == 3) { echo "active"; }
        echo '" data-target="0">
          <a class="navbar-link">
            Team
          </a>
  
          <div class="navbar-dropdown">
            <a href="team#robot" class="navbar-item checkHash">
              Robot team
            </a>
            <a href="team#programming" class="navbar-item checkHash">
              Programming team
            </a>
            <a href="team#kiosk" class="navbar-item checkHash">
              Kiosk Team
            </a>
            <a href="team#web" class="navbar-item checkHash">
              Webjournalism team
            </a>
            <a href="team#video" class="navbar-item checkHash">
              Video team
            </a>
            <hr class="navbar-divider">
            <a href="team#mentor" class="navbar-item checkHash">
              Mentors & mentions
            </a>
          </div>
        </div>-->
        <a href="media" class="navbar-item ';
        if ($active == 5) { echo "active"; }
        echo '">
          Media
        </a>
      </div>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a href="', "fr/", $pageFr, '" class="button is-light">
              Fran&ccedil;ais
            </a>
            <!--
            <a id="darkMode" class="button is-dark">
              <i class="far fa-moon"></i>
            </a>
            -->
          </div>
        </div>
      </div>
      </div>
    </nav>';
  } else {
    echo '
    <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand bounceIn">
      <a class="navbar-item" href="accueil">
        <img src="../assets/logo.png">
      </a>
  
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div class="navbar-menu">
      <div class="navbar-start">
        <a href="accueil" class="navbar-item ';
         if ($active == 0) { echo "active"; }
         echo '">
          Accueil
        </a>
        <a href="a_propos" class="navbar-item ';
        if ($active == 1) { echo "active"; }
        echo '">
          &Agrave; propos
        </a>
        <a href="crc" class="navbar-item ';
        if ($active == 2) { echo "active"; }
        echo '">
          Le concours
        </a>
        <a href="robot" class="navbar-item ';
        if ($active == 3) { echo "active"; }
        echo '">
          Notre robot
        </a>
        <a href="equipe" class="navbar-item ';
        if ($active == 4) { echo "active"; }
        echo '">
          &Eacute;quipe
        </a>
        <a href="media" class="navbar-item ';
        if ($active == 5) { echo "active"; }
        echo '">
          M&eacute;dia
        </a>
      </div>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a href="', "../", $pageEn, '" class="button is-light">
              English
            </a>
          </div>
        </div>
      </div>
      </div>
    </nav>
    <nav id="nav" class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand bounceIn">
      <a class="navbar-item" href="accueil">
        <img src="../assets/logo.png">
      </a>
  
      <a role="button" onclick="toggleNav()" class="navbar-burger" id="navbar-toggle" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbar-menu" class="navbar-menu">
      <div class="navbar-start">
        <a href="accueil" class="navbar-item ';
         if ($active == 0) { echo "active"; }
         echo '">
          Accueil
        </a>
        <a href="a_propos" class="navbar-item ';
        if ($active == 1) { echo "active"; }
        echo '">
          &Agrave; propos
        </a>
        <a href="crc" class="navbar-item ';
        if ($active == 2) { echo "active"; }
        echo '">
          Le concours
        </a>
        <a href="robot" class="navbar-item ';
        if ($active == 3) { echo "active"; }
        echo '">
          Notre robot
        </a>
        <a href="equipe" class="navbar-item ';
        if ($active == 4) { echo "active"; }
        echo '">
          &Eacute;quipe
        </a>
        <a href="media" class="navbar-item ';
        if ($active == 5) { echo "active"; }
        echo '">
          M&eacute;dia
        </a>
      </div>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a href="', "../", $pageEn, '" class="button is-light">
              English
            </a>
          </div>
        </div>
      </div>
      </div>
    </nav>';
  }
  ?>
