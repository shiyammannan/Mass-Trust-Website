<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>
    <h1 class="gallerytitle">Image title</h1>
    <div class="gallery">
        <div class="images" data-paragraph="Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph.">
            <img src="<?= GLOBAL_PATH . '/images/1.jpg'?>" alt="Image 1">
        </div>
        <div class="images" data-paragraph="This is the paragraph content for Image 2.">
            <img src="<?= GLOBAL_PATH . '/images/1.jpg'?>" alt="Image 2">
        </div>
        <div class="images" data-paragraph="This is the paragraph content for Image 3.">
            <img src="<?= GLOBAL_PATH . '/images/1.jpg'?>" alt="Image 3">
        </div>
        <div class="images" data-paragraph="This is the paragraph content for Image 4.">
            <img src="<?= GLOBAL_PATH . '/images/1.jpg'?>" alt="Image 4">
        </div>
    </div>
     <!-- Popup Structure -->
    <div id="imagePopup" class="popup">
        <div class="popup-content">
            <span class="close" id="close">&times;</span>
            <div class="popup-image-container">
                <img id="popupImage" alt="">
                <div class="popup-text">
                    <p id="popupParagraph"></p>
                </div>
            </div>
            <a class="prev" id="prev">&#10094;</a>
            <a class="next" id="next">&#10095;</a>
        </div>
    </div>
    <script src="<?= MODULES . '/gallery/js/gallery.js' ?>"></script>
      <?php
}?>