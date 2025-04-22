<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<div class="gif_containers">
        <div class="gif_containers_headings">Our Servises</div>
        <div class="card-containers">
          <div class="cards">
            <img src="" alt="Coordinator 1" class="card-images"  />
            <div class="card-names">Coordinator 1</div>
            <p class="card-description">Coordinator 1 is known for their outstanding organizational skills and dedication to fostering peace and love in our community.</p>
          </div>
          <div class="cards">
            <img src="" alt="Coordinator 2" class="card-images"  />
            <div class="card-names">Coordinator 2</div>
            <p class="card-description">Coordinator 2 brings a warm and caring approach to every project, ensuring that everyone feels valued and respected.</p>
          </div>
          <div class="cards">
            <img src="" alt="Coordinator 3" class="card-images"  />
            <div class="card-names">Coordinator 3</div>
            <p class="card-description">Coordinator 3 excels in creating an environment where peace and love can flourish through effective communication and empathy.</p>
          </div>
        </div>
      </div>
      <?php
}
?>