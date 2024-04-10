<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Dawsons Geek - HTML Template</title>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="css/featherlight.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- READING POSITION INDICATOR -->
    <progress value="0" id="dawsonsgeek-progress-bar">
        <span class="dawsonsgeek-progress-container">
            <span class="dawsonsgeek-progress-bar"></span>
        </span>
    </progress>
    <!-- SITE WRAPPER -->
    <div id="dawsonsgeek-site-wrapper">
        <!-- MAIN CONTAINER -->
        <main id="dawsonsgeek-main-container">
            <div class="container">
                <!-- SIDEBAR -->
                <div id="dawsonsgeek-sidebar">
                    <div id="dawsonsgeek-sidebar-wrapper" class="d-flex align-items-start flex-column h-100 w-100">
                        <!-- LOGO -->
                        <div id="dawsonsgeek-logo-cell" class="w-100">
                            <a class="dawsonsgeek-logo-link" href="index.html">
                                <img src="images/logo.png" class="dawsonsgeek-logo" alt="dawsonsgeek" />
                            </a>
                        </div>
                        <!-- MENU CONTAINER -->
                        <div id="dawsonsgeek-sidebar-cell" class="w-100">
                            <!-- MOBILE MENU BUTTON -->
                            <div id="dawsonsgeek-menu-toggle">MENU</div>
                            <!-- MENU -->
                            <nav id="dawsonsgeek-main-menu" class="menu-main-menu-container">
                                <ul class="dawsonsgeek-menu-ul">
                                    <li><a href="index.html">Home</a>
   
                                    </li>
                                   <!--  <li><a href="#">About Me</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">Demo 1</a></li>
                                            <li><a href="about-2.html">Demo 2</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="blog.php">Blog</a>
                 
                                    </li>
                                   
                                </ul>
                            </nav>
                        </div>
                        <!-- SOCIAL MEDIA ICONS -->
                        <div id="dawsonsgeek-social-cell" class="mt-auto w-100">
                            <div id="dawsonsgeek-social-inner">
                                <ul class="dawsonsgeek-social-icons">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TOP ICONS -->
                <ul class="dawsonsgeek-top-icons">
                    <li id="dawsonsgeek-panel-icon">
                        <a href="#dawsonsgeek-panel" class="dawsonsgeek-panel-open"><i class="fa fa-bars"></i></a>
                    </li>
                    <li id="dawsonsgeek-search-icon">
                        <a id="dawsonsgeek-open-search" href="#"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <!-- PAGE TITLE -->
                <div class="dawsonsgeek-page-title">
                    <h1><span>Dawson Richey</span></h1>
                    <p class="dawsonsgeek-page-subtitle">Web Designer &amp; Developer</p>
                </div>
                <!-- ABOUT ME -->
                <div class="row">
                    <div class="col-12 col-lg-7 order-2 order-lg-1">
                        <p>Laborum varias in possumus philosophari nam mandaremus ad malis. Sint fidelissimae tempor fugiat expetendis. Est nisi quibusdam admodum ut noster laborum se tamen culpa aut labore. Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id.</p>
                        <p>Est nisi quibusdam admodum ut noster. Quamquam malis illum ex elit, anim arbitrantur cupidatat aute admodum, cernantur noster mentitum cupidatat.</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>PHP</span> 100%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span>WordPress</span> 85%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 65%" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span>Javascript</span> 65%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>ASP</span> 50%</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 order-1 order-lg-2 mb-5 mb-lg-0">
                        <img src="images/600x600.png" alt="Jane Doe" class="img-fluid mx-auto d-block dawsonsgeek-img-shadow" />
                    </div>
                </div>
                <!-- DIVIDER -->
                <hr />
                <!-- TABS -->
                <h2>EXPERIENCE &amp; EDUCATION</h2>
                <!-- ACCORDION -->
                <div id="mp-accordion-1" data-children=".mp-accordion-item" class="mp-accordion">
                    <!-- ACCORDION ITEM 1 -->
                    <div class="mp-accordion-item">
                        <a class="mp-accordion-title" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-1" aria-expanded="false" aria-controls="mp-accordion-item-1">2014 to Present</a>
                        <div id="mp-accordion-item-1" class="collapse show" role="tabpanel">
                            <div class="mp-accordion-content">
                                <h5>Senior Developer - Google Inc</h5>
                                Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                            </div>
                        </div>
                    </div>
                    <!-- ACCORDION ITEM 2 -->
                    <div class="mp-accordion-item">
                        <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-2" aria-expanded="false" aria-controls="mp-accordion-item-2">2014 - 2010</a>
                        <div id="mp-accordion-item-2" class="collapse" role="tabpanel">
                            <div class="mp-accordion-content">
                                <h5>Art Director - Designs Ltd</h5>
                                Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                            </div>
                        </div>
                    </div>
                    <!-- ACCORDION ITEM 3 -->
                    <div class="mp-accordion-item">
                        <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-3" aria-expanded="false" aria-controls="mp-accordion-item-3">2010 - 2008</a>
                        <div id="mp-accordion-item-3" class="collapse" role="tabpanel">
                            <div class="mp-accordion-content">
                                <h5>Web Designer - Freelance</h5>
                                Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                            </div>
                        </div>
                    </div>
                    <!-- ACCORDION ITEM 4 -->
                    <div class="mp-accordion-item">
                        <a class="mp-accordion-title collapsed" data-toggle="collapse" data-parent="#mp-accordion-1" href="#mp-accordion-item-4" aria-expanded="false" aria-controls="mp-accordion-item-4">2008 - 2004</a>
                        <div id="mp-accordion-item-4" class="collapse" role="tabpanel">
                            <div class="mp-accordion-content">
                                <h5>University - Cambridge</h5>
                                Senserit sed commodo. Ubi nescius a iudicem, non veniam si amet a tempor ad fabulas id ipsum excepteur relinqueret non fore commodo quibusdam, incidi imitaren do mentitum. Et enim offendit ingeniis. Dolor probant senserit si mandaremus do nulla laborum, hic aute iudicem expetendis id cupidatat tamen iudicem proident ut eram arbitror aut veniam enim, nostrud. Ex velit arbitror possumus, labore proident consequat, non aute cillum o fabulas ut probant ubi consequat. Excepteur ea probant, expetendis quid proident sed nostrud.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DIVIDER -->
                <hr />
                <h2>PORTFOLIO</h2>
                <p>Possumus e aute sed se litteris in aliquip, a tamen quem qui pariatur ex pariatur nam nulla possumus, magna do nostrud non quid qui cernantur eram aliqua e illum labore proident consequat.</p>
                <!-- IMAGE GALLERY -->
                <div class="dawsonsgeek-masonry-grid dawsonsgeek-gallery">
                    <div class="dawsonsgeek-three-columns" data-columns>
                        <!-- GALLERY ITEM 1 -->
                        <div class="dawsonsgeek-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="dawsonsgeek-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 2 -->
                        <div class="dawsonsgeek-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="dawsonsgeek-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 3 -->
                        <div class="dawsonsgeek-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="dawsonsgeek-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 4 -->
                        <div class="dawsonsgeek-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="dawsonsgeek-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 5 -->
                        <div class="dawsonsgeek-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="dawsonsgeek-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                        <!-- GALLERY ITEM 6 -->
                        <div class="dawsonsgeek-gallery-item">
                            <a href="#" data-featherlight="images/1400x1000.png" class="dawsonsgeek-lightbox">
                                <img src="images/900x600.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- DIVIDER -->
                <hr />
                <h2>CONTACT ME</h2>
                <p>Possumus e aute sed se litteris in aliquip, a tamen quem qui pariatur ex pariatur nam nulla possumus, magna do nostrud non quid qui cernantur eram aliqua e illum labore proident consequat.</p>
                <!-- CONTACT FORM -->
                <form id="ajax-form" action="mailer.php" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p>
                                <label>Your Name</label><br />
                                <input type="text" name="sendername" id="sendername" class="form-control" required="required" maxlength="50" />
                            </p>
                            <p>
                                <label>Your Email</label><br />
                                <input type="email" name="senderemail" id="senderemail" class="form-control" required="required" maxlength="50" />
                            </p>
                            <p>
                                <label>Phone Number</label><br />
                                <input type="text" name="senderphone" id="senderphone" class="form-control" maxlength="50" />
                            </p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <p>
                                <label>Your Message</label><br />
                                <textarea name="sendermessage" id="sendermessage" required="required" class="form-control form-fixed-height"></textarea>
                            </p>
                            <button id="sendbutton" type="submit" class="btn btn-lg w-100">Send Message</button>
                        </div>
                    </div>
                </form>
                <div id="form-messages"></div>
            </div>
        </main>
        <!-- FOOTER -->
        <footer id="dawsonsgeek-footer">
            <div class="container">
                <div class="row dawsonsgeek-footer-wrapper">
                    <!-- FOOTER WIDGET 1 -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                        <h5 class="dawsonsgeek-title-with-border"><span>About Me</span></h5>
                        <p>Trusted by thousands of customers, my unique themes and plugins help you make beautiful responsive web sites with ease.</p>
                        <p><a href="about.html" class="btn btn-default">Read More</a></p>
                    </div>
                    <!-- FOOTER WIDGET 2 -->
                    <div class="col-12 col-lg-6">
                        <h5 class="dawsonsgeek-title-with-border"><span>Newsletter</span></h5>
                        <form method="post" action="index.html">
                            <label>Subscribe to our mailing list!</label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="EMAIL" placeholder="Your email address" required />
                                <div class="input-group-append">
                                    <input type="submit" value="Sign up" class="btn btn-default" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CREDITS -->
                <div class="dawsonsgeek-footer-credits">
                    <p>
                        Learn more  <a href="https://github.com/dawsonsgeek" target="_blank">Dawson Richey</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <!-- GO TO TOP BUTTON -->
    <a id="dawsonsgeek-gototop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- SLIDE PANEL OVERLAY -->
    <div id="dawsonsgeek-overlay"></div>
    <!-- SLIDE PANEL -->
    <div id="dawsonsgeek-panels">
        <aside id="dawsonsgeek-panel" class="dawsonsgeek-panel">
            <div class="dawsonsgeek-panel-inner">
                <!-- CLOSE SLIDE PANEL BUTTON -->
                <a href="#" class="dawsonsgeek-panel-close"><i class="fa fa-times"></i></a>
                <!-- AUTHOR BOX -->
                <div class="dawsonsgeek-author-box dawsonsgeek-widget">
                    <div class="dawsonsgeek-author-img">
                        <img src="images/300x300.png" alt="Dawson Richey" />
                    </div>
                    <h3><span>Dawson Richey</span></h3>
                    <p class="dawsonsgeek-author-subtitle">WEB DESIGNER &amp; DEVELOPER</p>
                    <p class="dawsonsgeek-author-description">I'm a Web Developer and Designer with a strong passion for UX/UI design. I have experience building websites, web applications, and brand assets. Contact me if you have any questions!</p>
                    <div class="dawsonsgeek-author-box-btn">
                        <a class="btn btn-default" href="about.html">CONTACT ME</a>
                    </div>
                </div>
                <!-- RECENT POSTS -->
                <div class="dawsonsgeek-recent-entries dawsonsgeek-widget">
                    <h5 class="dawsonsgeek-title-with-border"><span>Recent Posts</span></h5>
                    <ul>
                        <li>
                            <a href="single-post.php">Ketchup Flavored Ice Cream!</a>
                            <span class="post-date">May 28, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.php">Hair You've Always Dreamed Of</a>
                            <span class="post-date">May 27, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.php">15 Of The World's Best Carnivals</a>
                            <span class="post-date">May 25, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.php">5 Ways to a Healthy Lifestyle</a>
                            <span class="post-date">May 25, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.php">Best Breakfast In The World</a>
                            <span class="post-date">May 23, 2018</span>
                        </li>
                    </ul>
                </div>
                <!-- CATEGORIES -->
                <div class="dawsonsgeek-categories dawsonsgeek-widget">
                    <h5 class="dawsonsgeek-title-with-border"><span>Categories</span></h5>
                    <ul>
                        <li>
                            <a href="category.html" title="The best restaurants, cafes, bars and shops in town.">Food &amp; Drink</a> <span class="badge badge-pill badge-default">5</span>
                        </li>
                        <li>
                            <a href="category.html" title="An up-to-date, personal urban guide.">Lifestyle</a> <span class="badge badge-pill badge-default">5</span>
                        </li>
                        <li>
                            <a href="category.html" title="Latest technology news and updates.">Technology</a> <span class="badge badge-pill badge-default">4</span>
                        </li>
                        <li>
                            <a href="category.html" title="Travel advice, information and inspiration.">Travel</a> <span class="badge badge-pill badge-default">5</span>
                        </li>
                        <li>
                            <a href="category.html" title="The latest news about movies and TV shows.">TV &amp; Movies</a> <span class="badge badge-pill badge-default">4</span>
                        </li>
                    </ul>
                </div>
                <!-- TAGS -->
                <div class="dawsonsgeek-widget">
                    <h5 class="dawsonsgeek-title-with-border"><span>Tags</span></h5>
                    <div class="dawsonsgeek-tag-cloud">
                        <a href="category.html">aute<span>7</span></a>
                        <a href="category.html">enim<span>7</span></a>
                        <a href="category.html">commodo<span>7</span></a>
                        <a href="category.html">voluptatibus<span>7</span></a>
                        <a href="category.html">culpa<span>7</span></a>
                        <a href="category.html">offendit<span>7</span></a>
                        <a href="category.html">magna<span>7</span></a>
                        <a href="category.html">quorum<span>7</span></a>
                        <a href="category.html">mandaremus<span>7</span></a>
                        <a href="category.html">ingeniis<span>7</span></a>
                        <a href="category.html">tempor<span>7</span></a>
                        <a href="category.html">summis<span>7</span></a>
                        <a href="category.html">consequat<span>6</span></a>
                        <a href="category.html">iudicem<span>6</span></a>
                        <a href="category.html">expetendis<span>6</span></a>
                        <a href="category.html">deserunt<span>6</span></a>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <!-- FULLSCREEN SEARCH -->
    <div id="dawsonsgeek-fullscreen-search">
        <div id="dawsonsgeek-fullscreen-search-content">
            <a href="#" id="dawsonsgeek-close-search"><i class="fa fa-times"></i></a>
            <form role="search" method="get" action="search.html" class="dawsonsgeek-lg-form">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter a keyword..." name="s" />
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- JS FILES -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/salvattore.min.js"></script>
    <script src="js/panel.js"></script>
    <script src="js/reading-position-indicator.js"></script>
    <script src="js/featherlight.js"></script>
    <script src="js/ajax-contact-form.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>