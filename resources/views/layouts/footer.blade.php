<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h6 style="font-weight:bold;">{{ config('app.name') }}</h6>
            <p>
                SmartSoft International is an established Software and security company based in Kenya. The sole mandate of the company is to
                provide custom Software and security measures to help in smooth running of any bussiness. We utilise cutting-edge technology,
                extensive knowledge  and experience for you to avoid security breaches and interuptions that may cause you money or lead to any
                loss to the business.
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About us</a></li>
              <li><a href="#services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <strong>Phone:</strong> +254 (0) 704 922 042<br>
              <strong>Email:</strong> info@smartsoftinternational.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Submit your email to receive timely updates from us</p>
            <form action="{{route('lUXpoba1Xm7k5J612UwjzOkFevdSeeWJqPjeKHnfIgOJRUl7jPKhK')}}" method="post">
              @csrf
              <input type="email" name="Email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <?php echo date('Y');?> <strong>{{ config('app.name') }}</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="{{ url('') }}">{{ config('app.name') }}</a>
      </div>
    </div>
  </footer>
