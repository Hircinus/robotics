<?php
$filePath = explode("/", $_SERVER['REQUEST_URI']);
$pathPrefix;
if($filePath[2] == "fr") {
  $isFrench = true;
  $pathPrefix = "../";
} else {
  $isFrench = false;
  $pathPrefix = "";
}
$pageFr = 'Erreur 404';
$pageTitle = 'Error 404';
$active = 69;
include 'header.php';

if(!$isFrench) {
  echo '<main class="content-area fadeInUp show">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Whoops!</h1>
        <hr>
        <h2>Seems like the link you entered or followed doesn\'t exist.</h2>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h3>
          Check out some links that <em>do</em> work ;)
        </h3>
        <a href="#">Random Link</a>
      </div>
    </div>
  </div>
</main>';
} else {
  echo '<main class="content-area fadeInUp show">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Zut!</h1>
        <hr>
        <h2>Le lien que t\'as suivi ou entrer retrouve rien.</h2>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h3>
          Voici quelques liens qui <em>vont</em> marcher ;)
        </h3>
        <a href="#">Lien random</a>
      </div>
    </div>
  </div>
</main>';
}

include 'footer.php';
?>
