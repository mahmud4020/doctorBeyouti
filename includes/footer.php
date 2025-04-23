</div>

<footer class="footer">
  <div class="container-lg">
    <div class="row h-100 g-3">
      <div class="col-md-6 footer-left">
        <div class="footer-social-icons">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="made-in-germany">
          <img src="./images/Screenshot-2025-04-19-at-11.37.30 PM-1024x165.webp" alt="Made in Germany Flag" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6 footer-right">
        <div class="d-flex gap-md-2 gap-1 justify-content-center mb-3">
          <a href="/agb.php" class="footer-links <?php echo basename($_SERVER['PHP_SELF']) == 'AGB.php' ? 'active' : ''; ?>">AGB</a>
          <a href="/datenschutzerklarung.php" class="footer-links <?php echo basename($_SERVER['PHP_SELF']) == 'datenschutzerklarung.php' ? 'active' : ''; ?>">Datenschutzerklärung</a>
          <a href="/impressum.php" class="footer-links <?php echo basename($_SERVER['PHP_SELF']) == 'impressum.php' ? 'active' : ''; ?>">Impressum</a>       
        </div>
        <p class="copy-right-txt">© 2025 Doctor BeYouti. Alle Rechte vorbehalten.</p>
      </div>
    </div>

  </div>
</footer>
<div class="modal fade custom-modal" id="customModal" tabindex="-1" aria-labelledby="customModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="left-side">
        <div class="logo-container">
          <img src="./images/Screenshot-2025-04-18-at-8.37.27 PM-1.png" alt="Doctor BeYouti Logo">
        </div>
      </div>
      <div class="right-side">
        <h5 class="modal-title" id="customModalLabel">Bereit für deine persönliche<br>Einfach registrieren & deine<br>Beauty Erfahrung beginnt.</h5>
        <div class="mobile-store-img">
          <a href="#playstore">
            <img src="./images/GP-removebg-preview.png" alt="" class="img-fluid">
          </a>
          <a href="#applestore">
            <img src="./images/as-removebg-preview.png" alt="" class="img-fluid">
          </a>
        </div>
        <div class="qr-code">
          <img src="./images/Screenshot-2025-04-19-at-1.28.30 PM.webp" alt="QR Code">
        </div>
      </div>
      <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px;"></button>
    </div>
  </div>
</div>

<script src="../js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/script.js"></script>


</body>

</html>