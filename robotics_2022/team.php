<?php
$pageFr = 'equipe';
$pageTitle = 'Team';
$active = 4;
require 'layouts/header.php'; ?>

<section class="hero is-link has-text-left">
  <div class="hero-body">
    <div class="">
      <p class="title">
        Our team
      </p>
    </div>
  </div>
</section>

<main class="content-area fadeInUp show">
  <div class="columns">
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/chris.jpg";
      $name = "Chris";
      $years = "Robot team";
      $content = "I'm a hard worker and a bundle of laughs!";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/anon.png";
      $name = "Youssef";
      $years = "Robot team";
      $content = "Hi! My name is Youssef chahboune and as a new member of the robotics club I have had the opportunity to expand my knowledge on robotics.";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/aline.jpg";
      $name = "Aline";
      $years = "Robot team";
      $content = "Hi! My name is Aline. My nickname is Bob and some people call me Bob the builder. I've been participating in robotics competitions since sec 4 with my tiny little highschool team, SLI. I ABSOLUTELY LOVED the memories and experiences I had then so I've continued into cegep. This is my last year competing and I'm going to miss this so much. It has been rough the last two years with the pandemic and all. I think I take robotics a little too seriously. I consider it my baby. I'll fight tooth and nail for it's survival to get administrations to recognize the work the club does. Do I procrastinate on my homework too much for this club? Maybe but I still survive and have a pretty good R-score. I still had so much fun these last two years but I wish the new members I've pursuaded to join would've experience what I experienced. That's my biggest motivation to continue robotics and keep it alive, so other people can obtain this love for building things, challenging themselves, meeting new people, everything that comes with robotics and the CRC. 
      Since this is my last year doing this with the CRC, I will share the defining feature all past team mates mock me by. I have a HUGE love for duct tape. Ask anyone, it is my first suggestion to all problems. The most ubsurd use for duct tape that I've done is attaching a banebot motor to the frame using duct tape and attaching aluminum extrusion at a 45 degree angle with duct tape. All of this was done in one comp, our robot looked incredible. My last advice to all. Duct tape is your best friend. It can do anything.";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/elessia.jpg";
      $name = "Elessia";
      $years = "Robot team";
      $content = "I first started robotics 2 years ago: when I was introduced I knew nothing. Now, due to the amazing people I met, I learnt so much and made so many memories. Robotics isn't just about building and programming, it's about having fun with the family we built!
      I am now the treasurer of robotics, anything having to do with money just come see me!";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/anon.png";
      $name = "Elie";
      $years = "Programming team";
      $content = "I'm a computer science and maths student with some experience in programming. I've been part of my secondary school's robotics team for two years and I liked it, so I decided to join Champlain's team.
      ";
      require 'layouts/card.php';
      ?>
    </div>
</div>
<div class="columns">
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/arisha.png";
      $name = "Ari";
      $years = "Kiosk team";
      $content = "Hey lovelies! My name is Arisha Ali and I'm a part of the robotics team. I'm a soon to be executive member looking to take over the new role of communications officer. While part of my job will be to handle advertisement and keeping our members up to date on announcements and decisions, communication is very much a two-way street so feel free to reach out to me for anything! If I can't offer a solution on the spot, I'll certainly be able to get the other execs to step in. 
      ";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/cece.jpeg";
      $name = "Cece";
      $years = "Kiosk team";
      $content = "I'm a lot louder than I realize according to my friends and the team. (my friends are the team ;(). I am a big ball of fire and energy.If you haven't realized IM A LESSSBIAAAANNNNNN";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/anon.png";
      $name = "Sami";
      $years = "Kiosk team";
      $content = "I am a hardworking and artistic person. I love to make small things that add up to a beautiful and interesting picture.";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/anon.png";
      $name = "Breanna";
      $years = "Kiosk team";
      $content = "When I first started my academic college life, I never considered joining the robotics club. However, upon meeting the members and understanding all that really 
      goes into robotics, I decided to try my hand at it. I've found myself getting out of my comfort zone on multiple occasions and I've developed different skills that I'll be 
      carrying with me in my future endeavors!(By the way, I was forced into this by my buddyyy)";
      require 'layouts/card.php';
      ?>
    </div>
</div>
<div class="columns">
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/anon.png";
      $name = "Jess Al Fahad";
      $years = "Web/journalism team";
      $content = "&amp;#115; &amp;#117; &amp;#115;";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/anon.png";
      $name = "Cat";
      $years = "Kiosk";
      $content = "I'm a cat. Meow.";
      require 'layouts/card.php';
      ?>
    </div>
  </div>
</main>
<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
/*
$sql = "INSERT INTO MyGuests(firstname,lastname,email)
VALUES('Duncan', 'B-H', 'j.alfahad@gmail.com');";

$sql = "SELECT email FROM MyGuests";
if ($result = $conn -> query($sql)) {
  while ($row = $result -> fetch_row()) {
    echo $row[0], ", ";
  }
  $result -> free_result();
}
/*

if ($conn->query($sql) === TRUE) {
 echo "Table MyGuests created successfully";
} else {
 echo "Error creating table: " . $conn->error;
}

$conn->close();*/
require 'layouts/footer.php';
?>
