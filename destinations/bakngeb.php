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


    <title>7-falls</title>

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
                    <img src="https://www.traveltothephilippines.info/wp-content/uploads/2019/10/South-Cotabato-Bakngeb-River-Cave16.jpg" alt="" class="islands__bg">
                    

                    <div class="islands__container bd-container">
                        <div class="islands__data">
                            <h2 class="islands__subtitle"></h2>
                            <h1 class="islands__title">Bakngeb River Cave</h1>
                            <p class="islands__description">Stepping into the cave is like entering another world. Sunlight gives way to a cool, refreshing darkness illuminated by strategically placed headlamps.


                            </p>
                            <a href="/destinationcontents/bakngeb.html" class="islands__button">View More <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                        </div>
                    </div>
                </section>


                <section class="islands swiper-slide">
                    <img src="https://4.bp.blogspot.com/-rHaFeCra2CQ/Vq5kVYNTF_I/AAAAAAAAcug/cyol9C7jBAc/s640/bakngeb006.jpg" alt="" class="islands__bg">

                    <div class="islands__container bd-container">
                        <div class="islands__data">
                            <h2 class="islands__subtitle"></h2>
                            <h1 class="islands__title">Bakngeb River Cave</h1>
                            <p class="islands__description">The true magic of Bakngeb River Cave unfolds as you reach the heart of the cavern.  A wide river emerges, its crystal-clear waters fed by an underground source. This natural pool beckons you in for a refreshing dip.  Imagine the feeling of cool water washing away the heat of the day as you float amidst the grandeur of the cave.

</p>
                            <a href="/destinationcontents/bakngeb.html" class="islands__button">View More <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                        </div>
                    </div>
                </section>
                <section class="islands swiper-slide">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhYR2zZJzrhQQZwmvBeEu2rN4Qy7813MwQu_T2OTGz8jTfMYnOAaukaszjNYlZff3Q3xJWiQ2PmBkz2r4gkScuHf6pw49MaEN3IbnGjDWt8v0nBwXkpNwMr6MrYCHJpULjJ7hCbJEs2iLKe/s640/bakngeb008.jpg" alt="" class="islands__bg">

                    <div class="islands__container bd-container">
                        <div class="islands__data">
                            <h2 class="islands__subtitle"></h2>
                            <h1 class="islands__title">Bakngeb River Cave</h1>
                            <p class="islands__description">Bakngeb River Cave offers more than just a swim.  Several options allow you to explore the cave in a unique way.  Climb aboard a sturdy bamboo raft and navigate the river, marveling at the towering rock formations from a different perspective.</p>
                            <a href="/destinationcontents/bakngeb.html" class="islands__button">View More <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </div>

        <!--========== CONTROLS ==========-->
        <div class="controls gallery-thumbs">
            <div class="controls__container swiper-wrapper">
                <img src="https://www.traveltothephilippines.info/wp-content/uploads/2019/10/South-Cotabato-Bakngeb-River-Cave16.jpg" alt="" class="controls__img swiper-slide">
                <img src="https://4.bp.blogspot.com/-rHaFeCra2CQ/Vq5kVYNTF_I/AAAAAAAAcug/cyol9C7jBAc/s640/bakngeb006.jpg" alt="" class="controls__img swiper-slide">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhYR2zZJzrhQQZwmvBeEu2rN4Qy7813MwQu_T2OTGz8jTfMYnOAaukaszjNYlZff3Q3xJWiQ2PmBkz2r4gkScuHf6pw49MaEN3IbnGjDWt8v0nBwXkpNwMr6MrYCHJpULjJ7hCbJEs2iLKe/s640/bakngeb008.jpg" alt="" class="controls__img swiper-slide">
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
                                <a itemprop="item" href="../destinations/7-falls.php"><span itemprop="name">Bakngeb</span></a>
                                <meta itemprop="position" content="2">
                            </li>
                        </ol>
                    </div>
                    <div class="bixbox animefull">
                        <div class="bigcontent nobigcover">
                            <div class="thumbook">
                                <div class="thumb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                    <img class="wp-post-image" src="https://steemitimages.com/DQmVeXtB64FvZUmPGDxGKLVskze6tFTeZrPvhk2XmyPncKz/12046762_1142855979075757_3387131697337026791_n.jpg" title="" alt="7-falls" decoding="async" itemprop="image" fetchpriority="high">
                                </div>
                                <div class="rt">
                                    <div data-id="40871" class="bookmark"><i class="far fa-booking" aria-hidden="true"></i> Booking </div>
                                    <div class="bmc">booked by 0 people</div>
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
                                <h1 class="entry-title" itemprop="name">Bakngeb River Cave</h1>
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
                                        <p>It's a chance to challenge yourself, witness geological wonders, cool off in refreshing waters, and gain a glimpse into the local culture. So, pack your sense of adventure, grab your headlamp, and embark on a journey to discover the hidden gem that awaits in the heart of South Cotabato.

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
                                            T'boli, South Cotabato
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


    <script src="../assets/js/gsap.min.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../destinations/script.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>