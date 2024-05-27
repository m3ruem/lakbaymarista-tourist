<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lakbay Marista</title>

  <link rel="shortcut icon" href="./assets/images/logoLM-dark.png" type="image/svg+xml">

  <link rel="stylesheet" href="./assets/css/style.css">
  <link type="text/css" rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">


  <header class="header" data-header>

    <div class="overlay" data-overlay></div>
    <div class="header-top">
      <div class="container">
        <div class="toggle-switch">
          <input type="checkbox" id="mode-switch" onclick="toggleMode()">
          <label for="mode-switch"></label>
        </div>
        <ul class="social-list">
          <li>
            <a href="index.php" class="logo-lm">
              <img src="./assets/images/logoLM.png" alt="Lakbay Marista" data-original-src="./assets/images/logoLM.png">
            </a>

          </li>
        </ul>

        <nav class="navbar" data-navbar>
          <div class="navbar-top">
            <a href="#" class="logo">
              <img src="./assets/images/logo-text-v2.png" alt="Lakbay Marista">
            </a>
            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>
          <ul class="navbar-list">
            <li>
              <a href="#home" class="navbar-link" data-nav-link>home</a>
            </li>
            <li>
              <a href="gallery.php" class="navbar-link" data-nav-link>gallery</a>
            </li>
            <li>
              <a href="destination.php" class="navbar-link" data-nav-link>destinations</a>
            </li>
            <li>
              <a href="contactus.php" class="navbar-link" data-nav-link>contact us</a>
            </li>

            <?php if (isset($_SESSION['loggedin']) && $_SESSION['access_level'] >= 20) : ?>
              <li>
                <div class="dropdown">
                  <a href="#" class="navbar-link dropdown-toggle">
                    <div class="profile"><ion-icon name="person-circle-outline"></ion-icon></div>
                  </a>
                  <div class="dropdown-menu">
                    <a href="profile.php" class="dropdown-item">Profile</a>
                    <a href="activity.php" class="dropdown-item">Activity</a>
                    <a href="subscription.php" class="dropdown-item">Subscription</a>
                    <a href="./dashboard/" class="dropdown-item">Dashboard</a>
                    <a href="logout.php" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </li>
            <?php elseif (isset($_SESSION['loggedin'])) : ?>
              <li>
                <div class="dropdown">
                  <a href="#" class="navbar-link dropdown-toggle">
                    <div class="profile"><ion-icon name="person-circle-outline"></ion-icon></div>
                  </a>
                  <div class="dropdown-menu">
                    <a href="profile.php" class="dropdown-item">Profile</a>
                    <a href="activity.php" class="dropdown-item">Activity</a>
                    <a href="subscription.php" class="dropdown-item">Subscription</a>
                    <a href="logout.php" class="dropdown-item">Logout</a>
                  </div>
                </div>
              </li>
            <?php else : ?>
              <li>
                <div class="login"> <a href="login.php" class="btn btn-primary">Login</a></div>
              </li>
            <?php endif; ?>
          </ul>
        </nav>



        <div class="header-btn-group">

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

      </div>
    </div>

  </header>

  <main>
    <article>


      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">South Cotabato Tourism</h2>

          <p class="hero-text">
            Explore the best tourist destinations and plan your next adventure
          </p>
          <div class="btn-group1">
            <button id="explorrrr" class="btn btn-primary">EXPLORE DESTINATIONS</button>
          </div>

          


        </div>
      </section>


      <section class="popular" id="destination">
        <div class="container">

          <p class="section-subtitle">Uncover place</p>

          <h2 class="h2 section-title">Popular destination</h2>

          <p class="section-text">
            Discover our hand-picked destinations for your next trip
          </p>

          <ul class="popular-list">

            <li>
              <div class="popular-card">
                <a href="/destinations/7-falls.php">

                  <figure class="card-img">
                    <img src="./assets/images/featured/lakesebu-zipline.png" alt="Lake Sebu, South Cotabato" loading="ZIPLINE">
                  </figure>

                  <div class="card-content">

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="card-subtitle">
                      <a href="#">Lake Sebu</a>
                    </p>

                    <h3 class="h3 card-title">
                      <a href="#">SEVEN FALLS ZIPLINE</a>
                    </h3>

                    <p class="card-text">
                      The zipline experience in Lake Sebu is truly exhilarating! If you’re looking for an adventure that combines breathtaking views and adrenaline-pumping action, this is the place to be.
                    </p>

                  </div>

              </div>
            </li>

            <li>
              <div class="popular-card">
                <a href="/destinations/divinemercy.php">
                  <figure class="card-img">
                    <img src="./assets/images/featured/divinemercy.png" alt="Divine Mercy, Lake Sebu" loading="lazy">
                  </figure>

                  <div class="card-content">

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="card-subtitle">
                      <a href="#">LAKE SEBU</a>
                    </p>

                    <h3 class="h3 card-title">
                      <a href="#">DIVINE MERCY</a>
                    </h3>

                    <p class="card-text">
                      Nestled amidst the breathtaking landscapes of Lake Sebu in South Cotabato, the Divine Mercy Shrine stands as a beacon of spiritual tranquility and natural splendor.
                    </p>

                  </div>

              </div>
            </li>

            <li>
              <div class="popular-card">
                <a href="/destinations/lakeholon.php">
                  <figure class="card-img">
                    <img src="./assets/images/featured/lakeholon.png" alt="Lakeholon, T'boli" loading="lazy">
                  </figure>

                  <div class="card-content">

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="card-subtitle">
                      <a href="#">T'BOLI</a>
                    </p>

                    <h3 class="h3 card-title">
                      <a href="#">Lake holon</a>
                    </h3>

                    <p class="card-text">
                      Lake Holon is a clear blue crater lake in Mount Parker, surrounded by lush mountains and indigenous Tboli community.
                    </p>

                  </div>

              </div>
            </li>

          </ul>

          <button id="more-destination-button" class="btn btn-primary">More destination</button>

        </div>
      </section>


      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Popular Packages</p>

          <h2 class="h2 section-title">Checkout Our Packages</h2>

          <p class="section-text">
            
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packages/package-1.jpg" alt="A Hidden Paradise Spring in Tupi, South Cotabato" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">A Hidden Paradise Spring in Tupi, South Cotabato</h3>

                  <p class="card-text">
                    Escape from the hustle and bustle of the city.
                    Visit Shellrock Garden Resort in Tupi, South
                    Cotabato
                    Shellrock Garden Resort
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">12H</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Tupi, South Cotabato</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(0 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    ₱250
                    <span>/ per person</span>
                  </p>

                  <button class="btn btn-secondary">Book Now</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packages/package-2.jpg" alt="Trip to Lake Holon" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Trip to Lake Holon</h3>

                  <p class="card-text">
                    Lake Holon is one of the hidden gems in Mindanao and a perfect destination for adventurers.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">T'boli, South Cotabato</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(0 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    ₱250
                    <span>/ per person</span>
                  </p>

                  <button class="btn btn-secondary">Book Now</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packages/package-3.jpg" alt="Strawberry Guyabano Farm" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Strawberry Guyabano Farm</h3>

                  <p class="card-text">
                    Discover extraordinary farm life and give your loved one the most romantic getaway imaginable!
                    Experience unparalleled farm life with breathtaking views of the majestic Mt.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Tupi, South Cotabato</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(0 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    ₱250
                    <span>/ per person</span>
                  </p>

                  <button class="btn btn-secondary">Book Now</button>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary">View All Packages</button>

        </div>
      </section>

      <section class="tour-location-container" id="tour-location-container">
        <div class="tour-info">
          <h2 class="h2 section-title">Tour Location</h2>
          <p class="section-text">Check out our exciting tour packages tailored for different interests.</p>
          <div class="icons ">
            <div class="icon-wrapper">
              <a href="adventuretour.html" class="icon"><i class="fas fa-hiking"></i></a>
              <h3 class="h3 card-title">Adventure Tours</h3>
            </div>
            <p class="section-text">For Adrenaline Junkies</p>

            <div class="icon-wrapper">
              <a href="swimmingpools.html" class="icon"><i class="fas fa-swimmer"></i></a>
              <h3 class="h3 card-title">Swimming Pool</h3>
            </div>
            <p class="section-text">Relax and Unwind</p>

            <div class="icon-wrapper">
              <a href="cityexploration.html" class="icon"><i class="fas fa-camera"></i></a>
              <h3 class="h3 card-title">City/Municipality Explorations</h3>
            </div>
            <p class="section-text">emmerse in Urban Culture</p>

          </div>
        </div>
        <img class="tourlocpic" src="/assets/images/colorwheel.JPG">
      </section>

      <section class="video_section" id="video_section">
        <h2 class="h2 section-title">TOUR VIDEOS</h2>
        <p class="section-text">Find out more with our video of the most beautiful and pleasant places for you and your family.</p>

        <div class="video__container container">
          <div class="video__content">
            <iframe width="1280" height="720" src="https://www.youtube.com/embed/bKi3Q7J6lgY" title="SOUTH COTABATO: The Land of the Dreamweavers" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <button class="button button--flex video__button" id="video-button">
              <i class="ri-pause-line video__button-icon" id="video-icon"></i>
            </button>
          </div>
        </div>
      </section>

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text">
            "Capturing the essence of South Cotabato, Philippines, through the eyes of adventurous travelers."
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="https://files01.pna.gov.ph/ograph/2020/08/28/tuna-gsc.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="https://transitpinas.com/wp-content/uploads/2020/06/FB_IMG_1590900977648.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="https://asanasadsijames.files.wordpress.com/2018/03/lrm_export_20180319_1438241.jpg?w=1200" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="https://live.staticflickr.com/8302/7813185554_b54fa99081_b.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="https://i2.wp.com/joansfootprints.com/wp-content/uploads/2020/04/IMG_6928.jpg?fit=1024%2C683&ssl=1" alt="Gallery image">
              </figure>
            </li>
          </ul>
          <div class="viewmore"> <a href="gallery.php" class="btn btn-primary">gallery</a></div>

        </div>
      </section>




    </article>
  </main>
  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo-lm">
            <img src="./assets/images/logo-text-white.png" alt="Tourly logo">
          </a>

          <p class="footer-text">
            "Embark on your next journey with us. Explore, discover, and create unforgettable memories together."
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+639123456789</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:lakbaymarista@gmail.com" class="contact-link">lakbaymarista@gmail.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>Koronadal, South Cotabato</address>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
            Subscribe our newsletter for more update & news !!
          </p>

          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

            <button type="submit" class="btn btn-secondary">Subscribe</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="">LakbayMarista</a>. All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>



  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>

  <script src="./assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    document.getElementById('more-destination-button').addEventListener('click', function() {
      window.location.href = 'destination.php';
    });
  </script>
  <script>
    document.getElementById('explorrrr').addEventListener('click', function() {
      window.location.href = 'destination.php';
    });
  </script>
</body>

</html>