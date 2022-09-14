  <a href="#top">
    <div id="backTop" class="back-to-top">
      <i class="fas fa-arrow-up"></i>
    </div>
  </a>
  <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <?php
      if(!$isFrench) { echo 'Site created with <i class="fa fa-heart" aria-hidden="true"></i> by the robotics team at Champlain Regional College.'; }
      else { echo 'Site cr&eacute;e avec <i class="fa fa-heart" aria-hidden="true"></i> par le club de robotique du Coll&egrave;ge R&eacute;gionale Champlain Saint-Lambert.'; }
      ?>
    </p>
    <a target="_blank" class="has-text-center mr-4 is-size-2" href="https://www.instagram.com/champlainrobotics/">
      <i class="fab fa-instagram" aria-hidden="true"></i>
    </a>
    <a target="_blank" class="has-text-center is-size-2" href="https://www.youtube.com/channel/UCqnd90MuElgZ-gmstRkA8DQ">
      <i class="fab fa-youtube" aria-hidden="true"></i>
    </a>
  </div>
  </footer>
  <script src="<?php echo $pathPrefix; ?>assets/script.js"></script>
  </body>
</html>
