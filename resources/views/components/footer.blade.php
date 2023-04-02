<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Restaurantly</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home.index') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home.menu') }}">Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home.contact') }}">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home.reservations') }}">Book a Table</a></li>
              
            </ul>
          </div>

        
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Join our newsletter and get the newest updates about our restaurant</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/js/main.js') }}"></script>