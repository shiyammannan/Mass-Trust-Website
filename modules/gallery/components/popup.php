<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>
<div id="imagePopup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <div class="popup-image-container">
                <img id="popupImage"  src="" alt="">
                <div class="popup-text">
                    <p id="popupParagraph"></p>
                </div>
            </div>
            <a class="prev" id="prev">&#10094;</a>
            <a class="next" id="next">&#10095;</a>
        </div>
    </div>
    
      <?php
}?>