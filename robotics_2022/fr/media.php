<?php
$pageEn = 'media';
$pageTitle = 'M&eacute;dia';
$active = 5;
require '../layouts/header.php'; ?>

<section class="hero is-link has-text-left">
  <div class="hero-body">
    <div class="">
      <p class="title">
        M&eacute;dia
      </p>
    </div>
  </div>
</section>

<main class="content-area fadeInUp show">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Vid&eacute;os</h1>
        <hr>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-three-quarters">
      <div class="content">
      <iframe width="100%" style="height: 50vh" src="https://www.youtube-nocookie.com/embed/UP2XoGfhJ1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="column is-one-quarter">
      <div class="content">
        <p>
        This production was created to show off Champlain College Saint-Lambert and features their Robotics club!
        </p>
      </div>
    </div>
  </div>
</main>

<?php
require '../layouts/footer.php';
?>
