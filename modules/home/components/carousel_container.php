<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>


<div class="rectangles">
      <div class="carousel">
          <div class="carousel-slide">
              <img src="<?= GLOBAL_PATH . '/images/1.jpg'?>" alt="Picture 1" class="carousel-images active" />
              <img src="<?= GLOBAL_PATH . '/images/2.jpg'?>" alt="Picture 2" class="carousel-images" />
              <img src="<?= GLOBAL_PATH . '/images/3.jpg'?>" alt="Picture 3" class="carousel-images" />
              <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>" alt="Picture 4" class="carousel-images" />
          </div>
      </div>
      <hr />
      <div class="topic">Our Surrounding</div>
      <div class="topics">
          In the serene confines of the ashram, where the outside world fades into whispers, achievement takes on a profound meaning. Here, amidst the rustle of leaves and the gentle hum of prayers,
          <div>seekers embark on a journey of self-discovery.</div>
      </div>
      <div class="profile-container">
          <div class="profile">
              <img src="<?= GLOBAL_PATH . '/images/pic.jpeg'?>" alt="Profile 1" />
          </div>
          <div class="profile">
              <img src="<?= GLOBAL_PATH . '/images/pic.jpeg'?>" alt="Profile 2" />
          </div>
          <div class="profile">
              <img src="<?= GLOBAL_PATH . '/images/pic.jpeg'?>" alt="Profile 3" />
          </div>
          <div class="profile">
              <img src="<?= GLOBAL_PATH . '/images/pic.jpeg'?>" alt="Profile 4" />
          </div>
      </div>
  </div>
  <?php
}
?>