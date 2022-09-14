<?php
$pageFr = 'crc';
$pageTitle = 'Competition';
$active = 2;
require 'layouts/header.php'; ?>

<section class="hero is-link has-text-left">
  <div class="hero-body">
    <div class="">
      <p class="title">
        The competition
      </p>
    </div>
  </div>
</section>

<main class="content-area fadeInUp show">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Canadian Robotics Competition (CRC)</h1>
        <hr>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-three-quarters">
      <div class="content">
        <p>
        The competition is hosted by the C.R.C. which stands for Canadian Robotics Competition. It's a competition consisting of both high schools and CEGEPS around Canada from the 
        West coast to the East coast. The C.R.C. was founded in Montreal 21 years ago and has grown exponentially throughout the years. The aspects of the game and changes have 
        changed each year but one thing that remains constant is the spectacular experience all students gain. This year's competition is a new challenge for all where five teams 
        work TOGETHER to complete various tasks in order to obtain points. These tasks consist of manipulating actuators, moving and dropping balls at various heights and collecting 
        balls. These balls are golf balls that in the game are called nanobots. Since the nanobots are fragile, they cannot be thrown around or shot out of any robots. The task of 
        manipulating actuators is to "fix" the broken spaceship the teams are travelling on.
        <br>
        At the beginning of each heat, each robot can be preloaded with 4 game pieces/nanobots. There is a total of five stations that require "fixing" on the spaceship. One of the 
        stations that would require fixing is called the particle accelerator. This station requires the robot to insert a ball into the tube at the far right and then press a 
        button on the other side to open a trap door, allowing the nanobot to pass through and fix the actuator. Another station called the Triage Center requires the robot to drop 
        nanobots into three different coloured vertical tubes in a specific order indicated by a light. The third station on the ship is called the Reservoir where the goal is to 
        fill the reservoir with nanobots in order to tip it over, dropping the ten extra nanobots hidden inside. The fourth station is the airlock where a nanobot must be dropped at 
        the top of the station and three trap doors must be pulled or pushed horizontally to open a pathway for the nanobot to fall through reaching the bottom to fix the station. 
        Finally, the last remaining station is the control center which composes 4 buttons that are spread throughout the playing field. To fix the station, all four buttons must be 
        pushed but no specific order is required. However, all four buttons must remain pushed to fix the station.
        <br>
        Each station with has an indicating red light to signify to the pilots (robot drivers) which station is broken. IF the indicating light is green, that means the station has 
        been fixed or does not require fixing. The game is divided into waves where a wave of actuators breaks. The challenge is to fix a certain number of stations within one minute 
        of the wave. If all stations are fixed before the 1min mark, the wave is considered complete, but if not all broken actuators are fixed during the wave, it is considered 
        incomplete and the stations will repair themselves automatically. Any station that was broken in a previous wave may break again in the subsequent wave. Note that no points 
        are awarded for stations that are repaired automatically. Once one wave ends, a new one will begin automatically. At the beginning of each heat, all 5 pilots must agree on 
        the level of difficulty from 1-to 3. The level of difficulty correlates to the number of stations to be fixed in each wave and it also determines the number of bonus points 
        awarded if a wave is complete. All heats are 5min long.
        </p>
      </div>
    </div>
    <div class="column is-one-quarter">
      <div class="content">
        <img width="auto" height="auto" alt="an image" src="assets/champlain.jpeg">
      </div>
    </div>
  </div>
</main>

<?php
require 'layouts/footer.php';
?>
