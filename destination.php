<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lakbay Marista | Destinations </title>

  <link rel="shortcut icon" href="./assets/images/logoLM-dark.png" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/destinations.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link type="text/css" rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">
  <style>
    .navbar-list a {
      color: black;
    }
  </style>


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
            <a href="#" class="logo-lm">
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
              <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
            </li>
            <li>
              <?php if (isset($_SESSION['loggedin'])) : ?>
                <div class="dropdown">
                  <a href="#" class="navbar-link dropdown-toggle">
                    <div class="profile"><ion-icon name="person-circle-outline"></ion-icon></div>
                  </a>
                  <div class="dropdown-menu">
                    <a href="profile.php" class="dropdown-item">Profile</a>
                    <a href="activity.php" class="dropdown-item">Activity</a>
                    <a href="membership.php" class="dropdown-item">Membership</a>
                    <a href="logout.php" class="dropdown-item">Logout</a>
                  </div>
                </div>
              <?php else : ?>
                <div class="login"> <a href="login.php" class="btn btn-primary">Login</a></div>

              <?php endif; ?>
            </li>
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

  <section class="featured">
    <div class="gallery">
      <div class="filter-buttons" style="justify-content:space-between; align-items:center; padding-bottom:250px; display:flex">
        <button id="popular-btn">Popular</button>
        <button id="featured-btn">Featured</button>
        <button id="new-btn">New</button>
        <button id="all-btn">All</button>
      </div>
      <div class="box box1">
        <span class="label">Popular</span>
        <img src="/imgs/destinations/lakeholon.jpg" alt="">
        <div class="content">
          <h2 style="font-family: Kanit, sans-serif;">LAKE HOLON</h2>
          <p>T'boli, South Cotabato</p>
          <div class="review-and-idr">
            <div class="review"><i class="fa fa-star"></i> 4.9 | 853 review</div>
            <p></p>
            <div class="writ"></div>

          </div>
          <div></div>
        </div>
      </div>
      <div class="box box2">
        <span class="label">Popular</span>
        <img src="/imgs/destinations/7-falls.jpg" alt="">
        <div class="content">
          <h2 style="font-family: Kanit, sans-serif;">7-FALLS</h2>
          <p>Lake Sebu, South Cotabatos</p>
          <div class="review-and-idr">
            <div class="review"><i class="fa fa-star"></i> 4.8 | 852 review</div>
            <p>P0</p>
          </div>
        </div>
      </div>
      <div class="box box3">
        <span class="label">Featured</span>
        <img src="/imgs/destinations/sgfarm.png" alt="">
        <div class="content">
          <h2>SG-FARM</h2>
          <p>Tupi, South Cotabato</p>
          <div class="review-and-idr">
            <div class="review"><i class="fa fa-star"></i> 4.7 | 851 review</div>
            <p>P0</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>

  <script src="imgs\destinations\featured.js"></script>
  <script src="/assets/js/script.js"></script>
  <script>
    var galleryItems = document.querySelectorAll(".box");

    galleryItems.forEach(function(item) {
      item.addEventListener("click", function() {
        var destinationName = this.querySelector("h2").textContent;
        window.location.href = "destination_detail.php?name=" + encodeURIComponent(destinationName);
      });
    });
  </script>
  <script>
    document.getElementById('popular-btn').addEventListener('click', function() {
      filterDestinations('popular');
    });

    document.getElementById('featured-btn').addEventListener('click', function() {
      filterDestinations('featured');
    });

    document.getElementById('new-btn').addEventListener('click', function() {
      filterDestinations('new');
    });

    document.getElementById('all-btn').addEventListener('click', function() {
      filterDestinations('all');
    });

    function filterDestinations(category) {
      var boxes = document.querySelectorAll('.box');
      boxes.forEach(function(box) {
        var isPopular = box.querySelector('.label') && box.querySelector('.label').innerText === 'Popular';
        var isNew = box.querySelector('.label') && box.querySelector('.label').innerText === 'New';
        var isFeatured = box.querySelector('.label') && box.querySelector('.label').innerText === 'Featured';
        var isNull = box.querySelector('.label') && box.querySelector('.label').innerText === '';
        if (category === 'all' || (category === 'popular' && isPopular) || (category === 'featured' && isFeatured) || (category === 'new' && isNew)) {
          box.style.display = 'block';
        } else {
          box.style.display = 'none';
        }
      });
    }
  </script>

</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>