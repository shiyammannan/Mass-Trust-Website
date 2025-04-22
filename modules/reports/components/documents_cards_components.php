<?php
require_once '../../../config/sparrow.php';
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))  { ?>

<div class="document-container">
  <div class="document-card">
      <div class="doc-icon">
          <img src="<?= GLOBAL_PATH . '/images/pdf.png'?>" alt="PDF" />
          <div class="icon preview-icon" title="Preview" onclick="openModal('<?= GLOBAL_PATH . '/images/pdf_file.pdf'?>')">
              <!-- SVG eye icon -->
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                  <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/>
              </svg>
          </div>
          <a href='<?= GLOBAL_PATH . '/images/pdf_file.pdf'?>' download class="icon download-icon" title="Download">
              <!-- SVG download icon -->
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                  <path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/>
              </svg>
          </a>
      </div>
      <div class="doc-description">
          <h3>One Common Document Name Is A "Project Proposal."</h3>
          <p>Anticipated Outcomes, Serving As A Blueprint For Stakeholders To Review And Approve Before Project Implementation.</p>
      </div>
  </div>
  <div class="document-card">
      <div class="doc-icon">
          <img src="<?= GLOBAL_PATH . '/images/pdf.png'?>" alt="PDF" />
          <div class="icon preview-icon" title="Preview" onclick="openModal('<?= GLOBAL_PATH . '/images/pdf_file.pdf'?>')">
              <!-- SVG eye icon -->
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                  <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/>
              </svg>
          </div>
          <a href='<?= GLOBAL_PATH . '/images/pdf_file.pdf'?>' download class="icon download-icon" title="Download">
              <!-- SVG download icon -->
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                  <path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/>
              </svg>
          </a>
      </div>
      <div class="doc-description">
          <h3>One Common Document Name Is A "Project Proposal."</h3>
          <p>Anticipated Outcomes, Serving As A Blueprint For Stakeholders To Review And Approve Before Project Implementation.</p>
      </div>
  </div>
  <div class="document-card">
      <div class="doc-icon">
          <img src="<?= GLOBAL_PATH . '/images/pdf.png'?>" alt="PDF" />
          <div class="icon preview-icon" title="Preview" onclick="openModal('<?= GLOBAL_PATH . '/images/pdf_file.pdf'?>')">
              <!-- SVG eye icon -->
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                  <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/>
              </svg>
          </div>
          <a href='<?= GLOBAL_PATH . '/images/pdf_file.pdf'?>' download class="icon download-icon" title="Download">
              <!-- SVG download icon -->
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                  <path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/>
              </svg>
          </a>
      </div>
      <div class="doc-description">
          <h3>One Common Document Name Is A "Project Proposal."</h3>
          <p>Anticipated Outcomes, Serving As A Blueprint For Stakeholders To Review And Approve Before Project Implementation.</p>
      </div>
  </div>
  </div>

<!-- Modal Structure -->
<div id="pdfModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <iframe id="pdfFrame" src="" frameborder="0" style="width:100%; height:100%;"></iframe>
    </div>
</div>

<?php
}
?>
