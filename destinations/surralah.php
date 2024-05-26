<?php
session_start();
require '../db/db_connection.php';

if (!isset($_SESSION['user_id'])) {
    die('User not logged in');
}

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT firstname, lastname FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($firstname, $lastname);
$stmt->fetch();
$stmt->close();

$full_name = $firstname . ' ' . $lastname;
$place_name = 'surralah';

$stmt = $conn->prepare("SELECT * FROM bookings WHERE user_full_name = ? AND place_name = ?");
$stmt->bind_param("ss", $full_name, $place_name);
$stmt->execute();
$result = $stmt->get_result();
$is_booked = $result->num_rows > 0;
$stmt->close();

$stmt = $conn->prepare("SELECT COUNT(*) FROM bookings WHERE place_name = ?");
$stmt->bind_param("s", $place_name);
$stmt->execute();
$stmt->bind_result($total_bookings);
$stmt->fetch();
$stmt->close();

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/destination-min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>surralah</title>

<body id="top">
    <style>
        .navbar-list a {
            color: black;
        }

        .login a {
            color: rgb(255, 255, 255);
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
                        <a href="/index.php" class="logo-lm">
                            <img src="../assets/images/logoLM-dark.png" alt="Lakbay Marista" data-original-src="../assets/images/logoLM-dark.png">
                        </a>

                    </li>
                </ul>

                <nav class="navbar" data-navbar>

                    <div class="navbar-top">

                        <a href="/index.php" class="logo">
                            <img src="../assets/images/logo-text-v2.png" alt="Lakbay Marista">
                        </a>

                        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>

                    </div>

                    <ul class="navbar-list">
                        <li>
                            <a href="/index.php" class="navbar-link" data-nav-link>home</a>
                        </li>
                        <li>
                            <a href="/gallery.php" class="navbar-link" data-nav-link>gallery</a>
                        </li>
                        <li>
                            <a href="/destination.php" class="navbar-link" data-nav-link>destinations</a>
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
                                <div class="login"> <a href="/login.php" class="btn btn-primary">Login</a></div>

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


    <main class='main' style="padding-top: 80px;">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">

                <section class="islands swiper-slide">
                    <img src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/432110673_287846981003039_4133516281026849524_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF5fdG4AwaMquFB6zHhZ0GvPahvx5J9j349qG_Hkn2Pfqxu0pBavKLnpR72cIto95a0-MFUoEcLkXa6h5NK2_Ir&_nc_ohc=70WTtQ32BHwQ7kNvgEoHQdn&_nc_ht=scontent-hkg4-1.xx&oh=00_AYB6JmB1HrRXrIEawvVLtT3res2NDLADm3VyKsYjgo0__Q&oe=6647F636" alt="" class="islands__bg">

                    <div class="islands__container bd-container">
                        <div class="islands__data">
                            <h2 class="islands__subtitle"></h2>
                            <h1 class="islands__title">Surallah</h1>
                            <p class="islands__description">Visiting the Tri-People Monument is a great way to get a taste of the vibrant cultural heritage of Surallah. It's a perfect stop for a quick photo opportunity or a starting point to learn more about the fascinating T'boli, Ubo, and Blaan people.
                            </p>
                            <a href="/destinationcontents/surralahtri.html" class="islands__button">View More <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                        </div>
                    </div>
                </section>


                <section class="islands swiper-slide">
                    <img src="https://scontent-hkg1-2.xx.fbcdn.net/v/t39.30808-6/432084176_287847317669672_9092270557578000862_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEAgp4OdxJjW3RJTSaA4YQfmA8vczLq4zCYDy9zMurjMLUCx_12E2CyqKDTm31aO0-GILTaqlUdOtcPocwisoQt&_nc_ohc=GdyyQvJ4r8cQ7kNvgEVi9uM&_nc_ht=scontent-hkg1-2.xx&oh=00_AYCqWPIwl67_3jB_RpINB_z_w24EdNb0w8cqEEQkpalYVg&oe=6647C90B" alt="" class="islands__bg">

                    <div class="islands__container bd-container">
                        <div class="islands__data">
                            <h2 class="islands__subtitle"></h2>
                            <h1 class="islands__title">Surallah</h1>
                            <p class="islands__description">Located in a central area of Surallah, the Tri-People Monument is a popular landmark and a great stop to add to your itinerary while exploring the region.</p>
                            <a href="/destinationcontents/surralahtri.html" class="islands__button">View More <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                        </div>
                    </div>
                </section>
                <section class="islands swiper-slide">
                    <img src="https://scontent-mnl1-1.xx.fbcdn.net/v/t39.30808-6/432156389_287847484336322_4685623601550315455_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGOtVWLlNKfBsnv8tlNzu5G9bj8xNhmI3n1uPzE2GYjeVd1i23IO3if97P2kAVwXg6kA53CFxxkHMPDI6gOWTtH&_nc_ohc=R3CXbEFhzSkQ7kNvgEwkCOc&_nc_ht=scontent-mnl1-1.xx&oh=00_AYBfdgRJYuBM5wl8tdtswPerTsh25uUakChELNFpdGp-og&oe=6647C163" alt="" class="islands__bg">

                    <div class="islands__container bd-container">
                        <div class="islands__data">
                            <h2 class="islands__subtitle"></h2>
                            <h1 class="islands__title">Surallah</h1>
                            <p class="islands__description">United around a towering Hegalong, a traditional T'boli instrument, the figures represent the harmony and unity between these three communities.</p>
                            <a href="/destinationcontents/surralahtri.html" class="islands__button">View More <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </div>

        <!--========== CONTROLS ==========-->
        <div class="controls gallery-thumbs">
            <div class="controls__container swiper-wrapper">
                <img src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/432110673_287846981003039_4133516281026849524_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF5fdG4AwaMquFB6zHhZ0GvPahvx5J9j349qG_Hkn2Pfqxu0pBavKLnpR72cIto95a0-MFUoEcLkXa6h5NK2_Ir&_nc_ohc=70WTtQ32BHwQ7kNvgEoHQdn&_nc_ht=scontent-hkg4-1.xx&oh=00_AYB6JmB1HrRXrIEawvVLtT3res2NDLADm3VyKsYjgo0__Q&oe=6647F636" alt="" class="controls__img swiper-slide">
                <img src="https://scontent-hkg1-2.xx.fbcdn.net/v/t39.30808-6/432084176_287847317669672_9092270557578000862_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEAgp4OdxJjW3RJTSaA4YQfmA8vczLq4zCYDy9zMurjMLUCx_12E2CyqKDTm31aO0-GILTaqlUdOtcPocwisoQt&_nc_ohc=GdyyQvJ4r8cQ7kNvgEVi9uM&_nc_ht=scontent-hkg1-2.xx&oh=00_AYCqWPIwl67_3jB_RpINB_z_w24EdNb0w8cqEEQkpalYVg&oe=6647C90B" alt="" class="controls__img swiper-slide">
                <img src="https://scontent-mnl1-1.xx.fbcdn.net/v/t39.30808-6/432156389_287847484336322_4685623601550315455_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGOtVWLlNKfBsnv8tlNzu5G9bj8xNhmI3n1uPzE2GYjeVd1i23IO3if97P2kAVwXg6kA53CFxxkHMPDI6gOWTtH&_nc_ohc=R3CXbEFhzSkQ7kNvgEwkCOc&_nc_ht=scontent-mnl1-1.xx&oh=00_AYBfdgRJYuBM5wl8tdtswPerTsh25uUakChELNFpdGp-og&oe=6647C163" alt="" class="controls__img swiper-slide">
            </div>
        </div>
    </main>

    <link rel="stylesheet" href="../assets/css/destination-min.css">



    <div id="content">
        <div class="wrapper">
            <div class="postbody">
                <article id="post-40871" class="post-40871 hentry" itemscope="itemscope" itemtype="http://schema.org/CreativeWorkSeries">
                    <div class="ts-breadcrumb bixbox">
                        <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="../index.php"><span itemprop="name">Lakbay Marista</span></a>
                                <meta itemprop="position" content="1">
                            </li>
                            ›
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="../destinations/surralah.php"><span itemprop="name">Surallah</span></a>
                                <meta itemprop="position" content="2">
                            </li>
                        </ol>
                    </div>
                    <div class="bixbox animefull">
                        <div class="bigcontent nobigcover">
                            <div class="thumbook">
                                <div class="thumb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                    <img class="wp-post-image" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjH8m3f7utowcrdvp6i9pXcS8YyszI9Om0XFl8vNhvIcTrPGBSNLlKQJd8n6Npiatx6XDs-CBfHHY8dOCln21iHc5aSiTSVja1DttcKkqflRFWhaYx6hh4IHCS2fySAVtz18uKz6fGoKkiWsZkJ0AVpZgNUaWrKpWSB2dnaRtDJmWhdahWNFmTpnH4WJmg8/w640-h434/362660300_6573904922648561_4995648859316839645_n.jpg" title="" alt="surralah" decoding="async" itemprop="image" fetchpriority="high">
                                </div>
                                <div class="rt">
                                <div data-id="40871" class="bookmark <?php echo $is_booked ? 'booked' : ''; ?>">
                                        <button id="bookingBtn" class="<?php echo $is_booked ? 'booked' : ''; ?>" onclick="handleBooking()">
                                            <?php echo $is_booked ? 'Booked' : 'Booking'; ?>
                                        </button>
                                    </div>
                                    <div class="rating">
                                        <div class="rating-prc" itemscope="itemscope" itemprop="aggregateRating" itemtype="//schema.org/AggregateRating">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="10">
                                            <meta itemprop="ratingCount" content="10">
                                            <div class="rtp">
                                                <div class="rtb"><span style="width:100%"></span></div>
                                            </div>
                                            <div class="num" itemprop="ratingValue" content="10">10</div>
                                        </div>
                                    </div>
                                    <div class="tsinfo">
                                        <div class="imptdt">
                                            Status <i>Open</i>
                                        </div>
                                        <div class="imptdt">
                                            Type <a href="">Falls</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="infox">
                                <h1 class="entry-title" itemprop="name">Tri- People Monument</h1>
                                <div class='socialts'>
                                    <a href="" target="_blank" class="fb">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>Facebook</span>
                                    </a>
                                    <a href="" target="_blank" class="twt">
                                        <i class="fab fa-twitter"></i>
                                        <span>Twitter</span>
                                    </a>
                                    <a href="" target="_blank" class="wa">
                                        <i class="fab fa-whatsapp"></i>
                                        <span>WhatsApp</span>
                                    </a>
                                    <a href="" target="_blank" class="pntrs">
                                        <i class="fab fa-pinterest-p"></i>
                                        <span>Pinterest</span>
                                    </a>
                                </div>

                                <div class="wd-full">

                                    <div class="entry-content entry-content-single" itemprop="description">
                                        <p>Journey to Surallah, South Cotabato, and you'll be greeted by a unique landmark - the Tri-People Monument. This impressive structure isn't just a pretty sight, it's a powerful symbol of unity and cultural diversity.

                                        </p>



                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                                <div class="flex-wrap">
                                    <div class="fmed">
                                        <b>Location</b>
                                        <span>
                                            Lakesebu, South Cotabato
                                        </span>
                                    </div>
                                    <div class="fmed">
                                        <b>Mobile Number</b>
                                        <span>
                                            +63XXXXXXX
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-wrap">
                                    <div class="fmed">
                                        <b>Owner</b>
                                        <span>
                                            Unidentified
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-wrap">
                                    <div class="fmed">
                                        <b>Posted On</b>
                                        <span>
                                            <time itemprop="datePublished" datetime="2021-03-23T19:16:32+00:00">March 13, 2024</time>
                                        </span>
                                    </div>
                                    <div class="fmed">
                                        <b>Updated On</b>
                                        <span>
                                            <time itemprop="dateModified" datetime="2024-05-11T08:25:49+00:00">May 11, 2024</time>
                                        </span>
                                    </div>
                                </div>
                                <div class="wd-full">
                                    <b>Genres</b>
                                    <span class="mgen">
                                        <a href="" rel="tag">New</a>
                                        <a href="" rel="tag">Popular</a>
                                        <a href="" rel="tag">Featured</a>
                                        <a href="" rel="tag">Closed</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>


    <div id="disqus_thread"></div>
    <script>
        (function() {
            var d = document,
                s = d.createElement('script');
            s.src = 'https://lakbaymarista.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <form id="bookingForm" action="../booking.php" method="POST" style="display: none;">
        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user_id); ?>">
        <input type="hidden" name="place_name" value="surralah">
    </form>

    <form id="cancelBookingForm" action="../cancel_booking.php" method="POST" style="display: none;">
        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user_id); ?>">
        <input type="hidden" name="place_name" value="surralah">
    </form>


    <script src="../assets/js/gsap.min.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../destinations/script.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        function handleBooking() {
            const bookingBtn = document.getElementById('bookingBtn');
            if (bookingBtn.classList.contains('booked')) {
                if (confirm('Do you want to cancel the booking?')) {
                    document.getElementById('cancelBookingForm').submit();
                }
            } else {
                document.getElementById('bookingForm').submit();
            }
        }
    </script>

</body>

</html>