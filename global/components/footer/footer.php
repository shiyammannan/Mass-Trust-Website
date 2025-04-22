<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<footer class="footer">
        <div class="wave-container">
          <div class="image-container">
            <img src="<?= GLOBAL_PATH . '/images/dark.jpg'?>" alt="Ashram Image" class="footer-image" />
            <p class="card-descriptions">Coordinator 1 is known for their outstanding organizational skills and dedication to fostering peace and love in our community.</p>
          </div>
          <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FFE5B4" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,234.7C384,245,480,235,576,218.7C672,203,768,181,864,181.3C960,181,1056,203,1152,213.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
          </svg>
        </div>
        <div class="footer-container">
          <div class="footer-section ashram-info">
            <h2>ASHRAM</h2>
            <p>An Ashram, A Tranquil Haven For Spiritual Seekers</p>
            <button class="feedback-button">
              Feedback Us <span class="arrow">→</span>
            </button>
          </div>
          <div class="footer-section">
            <h3>About</h3>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Service</a></li>
              <li><a href="#">Pages</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h3>Privacy</h3>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Service</a></li>
              <li><a href="#">Pages</a></li>
            </ul>
          </div>
          <div class="footer-section contact-info">
            <h3>Contact</h3>
            <p>8888888888</p>
            <p><a href="mailto:Service@Gmail.Com">Service@Gmail.Com</a></p>
            <div class="social-icons">
    <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
            <path d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 
                c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 
                l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z"/>
        </svg>
    </a>
    <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
            <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 
                41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 
                37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z 
                M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z"/>
        </svg>
    </a>
</div>

          </div>
        </div>
      </footer>
      <?php
}
?>