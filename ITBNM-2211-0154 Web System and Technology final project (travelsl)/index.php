<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Travel.SriLanka</title>
  </head>
  <body>
    <header id="home">
      <nav class="nav">
        <div class="nav__bar">
          <div class="nav__logo"><a href="#">Travel.<br>SriLanka</a></div>
          <ul class="nav__links">
            <li class="link"><a href="index.php">Home</a></li>
            <li class="link"><a href="gallery.php">Gallery</a></li>
            <li class="link"><a href="contactus.php">Contact</a></li>
            <li class="link"><a href="about.php">About Us</a></li>
            <li class="link search">
              <span><i class="ri-search-line"></i></span>
            </li>
          </ul>
          <div class="auth-buttons">
            <a href="login.php" class="btn sign-in">Sign In</a>
            <a href="signup.php" class="btn sign-up">Sign Up</a>
          </div>
        </div>
      </nav>

      <div class="section__container header__container">
        <h1>The new way to plan your next adventure</h1>
        <h4>Explore the wonderful island</h4>
        <button class="btn">
          Explore More <i class="ri-arrow-right-line"></i>
        </button>
      </div>

    </header>

    <section class="blogs" id="blog">
      <div class="blogs__container">
        <h2 class="section__header">Latest on the blogs</h2>
        <p class="section__subheader">We want to help youto travel better!</p>
        <div class="blogs__grid">
          <div class="blogs__card">
            <img src="assets/blog-1.jpg" alt="blog" />
            <div class="blogs__content">
              10 Mistakes A First Time Traveler Makes And How To Avoid Them!
            </div>
          </div>
          <div class="blogs__card">
            <img src="assets/blog-2.jpg" alt="blog" />
            <div class="blogs__content">
              22 things you need to know before going to Sri Lanka.
            </div>
          </div>
          <div class="blogs__card">
            <img src="assets/blog-3.jpg" alt="blog" />
            <div class="blogs__content">
              Various cultural festivals and religions in Sri Lanka.
            </div>
          </div>
          <div class="blogs__card">
            <img src="assets/blog-4.jpg" alt="blog" />
            <div class="blogs__content">
              What is it really like to move to a country where your native language is not spoken?
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="hero">
      <div class="section__container hero__container">
        <p>Travel.<br>SriLanka</p>
      </div>
    </section>



    <section class="contact" id="contact">
      <div class="section__container contact__container">
        <div class="contact__col">
          <h4>Contact a travel researcher</h4>
          <p>We always aim to reply within 24 hours.</p>
        </div>
        <div class="contact__col">
          <div class="contact__card">
            <span><i class="ri-phone-line"></i></span>
            <h4>Call us</h4>
            <h5>+94 765432121</h5>
            <p>We are online now</p>
          </div>
        </div>
        <div class="contact__col">
          <div class="contact__card">
            <span><i class="ri-mail-line"></i></span>
            <h4>Email</h4>
            <p>contact@travelsrilanka.com</p>
          </div>
        </div>
      </div>
    </section>

    <section class="footer">
      <div class="section__container footer__container">
        <h4>Travel.SriLanka</h4>
        <div class="footer__socials">
          <span>
            <a href="#"><i class="fa fa-facebook"></i></a>
          </span>
          <span>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </span>
          <span>
            <a href="#"><i class="fa fa-twitter"></i></a>
          </span>
          <span>
            <a href="#"><i class="fa fa-whatsapp"></i></a>
          </span>
        </div>
        <p>
          Many people feel that there is a limited
          amount of abundance, wealth, or chance to succeed in life. Work, Travel, Save, Repeat.
        </p>
        <ul class="footer__nav">
          <li class="footer__link"><a href="#home">Home</a></li>
          <li class="footer__link"><a href="#accommodation">Accommodation</a></li>
          <li class="footer__link"><a href="#gallery">Gallery</a></li>
          <li class="footer__link"><a href="#contact">Contact</a></li>
          <li class="footer__link"><a href="#about">About Us</a></li>
        </ul>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Travel.SriLanka.<br> All rights reserved.
      </div>
    </section>

    <script src="main.js"></script>
  </body>
</html>
