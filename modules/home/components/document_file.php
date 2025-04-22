<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>


<div class="rect">
      <div class="file-download-card" id="fileDownloadCard">
          <div class="thumbnail" id="thumbnail">
              <img src="<?= GLOBAL_PATH . '/images/4.jpg'?>"  alt="Document Thumbnail" />
          </div>
          <div class="file-info">
              <h2 id="fileName">Document.pdf</h2>
              <p id="fileSize">475 KB</p>
              <a href="" download class="download-button" id="downloadButton">Download</a>
          </div>
      </div>
      <div class="headz">THE DOCUMENT OF MASS ASHRAM</div>
  </div>
  <?php
}
?>