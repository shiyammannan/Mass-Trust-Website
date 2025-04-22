<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<div class="card-container">
        <div class="card expanded" onclick="expandCard(this)">
            <div class="card-content">
                <div class="card-topic">Topic 1</div>
                <img src="<?= GLOBAL_PATH . '/images/pdf.png'?>" alt="PDF Thumbnail" class="card-image">
                <div class="card-description">Description for Topic 1. This PDF contains detailed information on Topic 1.</div>
                <button class="download-button"><a href="file1.pdf" download>Download PDF</a></button>
            </div>
        </div>
        <div class="card" onclick="expandCard(this)">
            <div class="card-content">
                <div class="card-topic">Topic 2</div>
                <img src="<?= GLOBAL_PATH . '/images/pdf.png'?>" alt="PDF Thumbnail" class="card-image">
                <div class="card-description">Description for Topic 2. This PDF provides insights on Topic 2.</div>
                <button class="download-button"><a href="file2.pdf" download>Download PDF</a></button>
            </div>
        </div>
        <div class="card" onclick="expandCard(this)">
            <div class="card-content">
                <div class="card-topic">Topic 3</div>
                <img src="<?= GLOBAL_PATH . '/images/pdf.png'?>" alt="PDF Thumbnail" class="card-image">
                <div class="card-description">Description for Topic 3. Explore this PDF for more details on Topic 3.</div>
                <button class="download-button"><a href="file3.pdf" download>Download PDF</a></button>
            </div>
        </div>
        <div class="card" onclick="expandCard(this)">
            <div class="card-content">
                <div class="card-topic">Topic 4</div>
                <img src="<?= GLOBAL_PATH . '/images/pdf.png'?>" alt="PDF Thumbnail" class="card-image">
                <div class="card-description">Description for Topic 4. This PDF covers comprehensive information on Topic 4.</div>
                <button class="download-button"><a href="file4.pdf" download>Download PDF</a></button>
            </div>
        </div>
        <div class="card" onclick="expandCard(this)">
            <div class="card-content">
                <div class="card-topic">Topic 5</div>
                <img src="<?= GLOBAL_PATH . '/images/pdf.png'?>" alt="PDF Thumbnail" class="card-image">
                <div class="card-description">Description for Topic 5. Learn more about Topic 5 by downloading this PDF.</div>
                <button class="download-button"><a href="file5.pdf" download>Download PDF</a></button>
            </div>
        </div>
    </div>
    <?php
}
?>