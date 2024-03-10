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
    <link href="css/slick.css" rel="stylesheet" type="text/css">
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
                                    <li><a href="blog.html">Blog</a>
                 
                                    </li>
                                   
                                </ul>
                            </nav>
                        </div>
                        <!-- SOCIAL MEDIA ICONS -->
                        <?php include_once('./social-media-icons.php')?>
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
                <!-- SLIDER WITH ONE POST -->
                <div class="dawsonsgeek-carousel-container dawsonsgeek-bg-loader">
                    <div id="dawsonsgeek-post-slider" class="dawsonsgeek-slider">
                        <!-- SLIDE -->
                        <div>
                            <a class="dawsonsgeek-slider-img" href="#"></a>
                            <ul class="dawsonsgeek-slider-image-meta dawsonsgeek-image-meta-post">
                                <li>
                                    <a href="single-post.html"><span class="badge badge-default">May 28, 2018</span></a>
                                </li>
                                <li>
                                    <a href="category.html"><span class="badge badge-default">Food &amp; Drink</span></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <img src="images/1200x600.png" alt="Ketchup Flavored Ice Cream!" />
                            <div class="dawsonsgeek-slider-desc">
                                <div class="dawsonsgeek-slider-desc-inner">
                                    <h2 class="card-title">Ketchup Flavored Ice Cream!</h2>
                                    <p>Mandaremus illum possumus ullamco e qui de nisi enim anim. Si nulla si nisi, veniam litteris sed excepteur ne ut amet deserunt tempor nam expetendis de enim mandaremus. Ita ea minim esse cillum ut eram arbitror ullamco. Tamen ad expetendis ab ipsum proident</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BLOG POSTS -->
                <div class="dawsonsgeek-masonry-grid">
                    <div class="dawsonsgeek-two-columns" data-columns>
                        <!-- POST 1 -->
                        <div class="card-masonry">
                            <div class="card">
                                <a href="single-post.html">
                                        <img class="card-vertical-img" src="images/900x600.png" alt="Hair You&#8217;ve Always Dreamed Of" />   
                                    </a>
                                <div class="card-border">
                                    <div class="card-body">
                                        <div class="card-category">
                                            <span><a href="category.html">Lifestyle</a></span>
                                        </div>
                                        <h3 class="card-title"><a href="single-post.html">Hair You&#8217;ve Always Dreamed Of</a></h3>
                                        <p>Ex si esse deserunt, et dolore occaecat, singulis tamen e possumus voluptatibus, varias cernantur si aute quid. Noster vidisse iis exquisitaque, deserunt te irure. Ubi illum nostrud fidelissimae id occaecat duis probant. Occaecat hic quorum aliquip se&#8230;</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="dawsonsgeek-author-meta">
                                            By <a class="author-meta" href="author.html">Dawson Richey</a>
                                        </div>
                                        <div class="dawsonsgeek-date-meta">
                                            <a href="single-post.html">May 27, 2018</a>
                                        </div>
                                        <div class="dawsonsgeek-reading-meta">3 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- POST 2 -->
                        <div class="card-masonry">
                            <div class="card">
                                <a href="single-post.html">
                                    <img class="card-vertical-img" src="images/900x600.png" alt="15 Of The World&#8217;s Best Carnivals" />   
                                </a>
                                <div class="card-border">
                                    <div class="card-body">
                                        <div class="card-category">
                                            <span><a href="category.html">Lifestyle</a>, <a href="category.html">Travel</a></span>
                                        </div>
                                        <h3 class="card-title"><a href="single-post.html">15 Of The World&#8217;s Best Carnivals</a></h3>
                                        <p>Aliquip e duis. Se labore ullamco excepteur iis ullamco sint duis laboris amet sed ita occaecat de cernantur quo fore coniunctione voluptate enim senserit. Si ut nulla laboris, an eiusmod e incididunt. Non varias enim duis singulis, a quorum cupidatat. Voluptate summis&#8230;</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="dawsonsgeek-author-meta">
                                            By <a class="author-meta" href="author.html">Dawson Richey</a>
                                        </div>
                                        <div class="dawsonsgeek-date-meta">
                                            <a href="single-post.html">May 25, 2018</a>
                                        </div>
                                        <div class="dawsonsgeek-reading-meta">2 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- POST 3 -->
                        <div class="card-masonry">
                            <div class="card">
                                <a href="single-post.html">
                                    <img class="card-vertical-img" src="images/900x600.png" alt="5 Ways to a Healthy Lifestyle" />   
                                </a>
                                <div class="card-border">
                                    <div class="card-body">
                                        <div class="card-category">
                                            <span><a href="category.html">Lifestyle</a></span>
                                        </div>
                                        <h3 class="card-title"><a href="single-post.html">5 Ways to a Healthy Lifestyle</a></h3>
                                        <p>Mandaremus veniam ab cupidatat exquisitaque, e quae laboris domesticarum, non sint mentitum fabulas de anim proident transferrem, ita aliqua imitarentur in in labore illum eram offendit, nisi fidelissimae possumus noster ullamco se eiusmod multos ex&#8230;</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="dawsonsgeek-author-meta">
                                            By <a class="author-meta" href="author.html">Dawson Richey</a>
                                        </div>
                                        <div class="dawsonsgeek-date-meta">
                                            <a href="single-post.html">May 25, 2018</a>
                                        </div>
                                        <div class="dawsonsgeek-reading-meta">3 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- POST 4 -->
                        <div class="card-masonry">
                            <div class="card">
                                <a href="single-post.html">
                                    <img class="card-vertical-img" src="images/900x600.png" alt="Best Breakfast In The World" />   
                                </a>
                                <div class="card-border">
                                    <div class="card-body">
                                        <div class="card-category">
                                            <span><a href="category.html">Food &amp; Drink</a>, <a href="category.html">Travel</a></span>
                                        </div>
                                        <h3 class="card-title"><a href="single-post.html">Best Breakfast In The World</a></h3>
                                        <p>Fabulas relinqueret aut quamquam. Lorem possumus pariatur ut quibusdam transferrem an tempor. E consequat nam senserit, aliquip tamen est commodo illustriora. An cillum sunt ut quamquam. Laboris culpa occaecat, quo fugiat dolore varias consequat&#8230;</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="dawsonsgeek-author-meta">
                                            By <a class="author-meta" href="author.html">Dawson Richey</a>
                                        </div>
                                        <div class="dawsonsgeek-date-meta">
                                            <a href="single-post.html">May 23, 2018</a>
                                        </div>
                                        <div class="dawsonsgeek-reading-meta">3 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- POST 5 -->
                        <div class="card-masonry">
                            <div class="card">
                                <a href="single-post.html">
                                    <img class="card-vertical-img" src="images/900x600.png" alt="Best and Worst Summer Foods" />   
                                </a>
                                <div class="card-border">
                                    <div class="card-body">
                                        <div class="card-category">
                                            <span><a href="category.html">Food &amp; Drink</a></span>
                                        </div>
                                        <h3 class="card-title"><a href="single-post.html">Best and Worst Summer Foods</a></h3>
                                        <p>Admodum comprehenderit id non cillum anim de appellat, ubi tamen singulis sempiternum, occaecat sunt appellat appellat ex varias an in quem laborum an si ita quid multos irure do excepteur culpa quamquam. Nam aliqua iudicem aliquip o sunt cupidatat&#8230;</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="dawsonsgeek-author-meta">
                                            By <a class="author-meta" href="author.html">Dawson Richey</a>
                                        </div>
                                        <div class="dawsonsgeek-date-meta">
                                            <a href="single-post.html">May 22, 2018</a>
                                        </div>
                                        <div class="dawsonsgeek-reading-meta">3 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- POST 6 -->
                        <div class="card-masonry">
                            <div class="card">
                                <a href="single-post.html">
                                    <img class="card-vertical-img" src="images/900x600.png" alt="What Is Perfect Training?" />   
                                </a>
                                <div class="card-border">
                                    <div class="card-body">
                                        <div class="card-category">
                                            <span><a href="category.html">Lifestyle</a></span>
                                        </div>
                                        <h3 class="card-title"><a href="single-post.html">What Is Perfect Training?</a></h3>
                                        <p>Non in familiaritatem, esse mentitum deserunt. Sunt excepteur quamquam. Enim ullamco consequat, nisi se singulis non fugiat. Nulla laboris tractavissent, tempor hic illum vidisse. Tempor qui noster incurreret, officia in ingeniis ubi in sunt arbitror ubi&#8230;</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="dawsonsgeek-author-meta">
                                            By <a class="author-meta" href="author.html">Dawson Richey</a>
                                        </div>
                                        <div class="dawsonsgeek-date-meta">
                                            <a href="single-post.html">May 21, 2018</a>
                                        </div>
                                        <div class="dawsonsgeek-reading-meta">2 min read</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- VIEW ALL BUTTON -->
                <div class="dawsonsgeek-view-more">
                    <a class="btn btn-default" href="blog.html">VIEW ALL POSTS</a>
                </div>

                <!-- DIVIDER -->
                <hr class="section-divider" />

                <!-- CAROUSEL -->
                <div class="dawsonsgeek-widget-title">
                    <h3 class="dawsonsgeek-carousel-title"><span>POPULAR POSTS</span></h3>
                </div>

                <div class="dawsonsgeek-carousel-container">
                    <div class="dawsonsgeek-carousel-view-more">
                        <a href="blog.html">VIEW ALL</a>
                    </div>

                    <div id="dawsonsgeek-post-carousel" class="dawsonsgeek-carousel">
                        <!-- CAROUSEL ITEM 1 -->
                        <div>
                            <div class="card-masonry card-small">
                                <div class="card">
                                    <a href="single-post.html">
                                        <img class="card-vertical-img" src="images/900x600.png" alt="Ketchup Flavored Ice Cream!" />   
                                    </a>
                                    <div class="card-border">
                                        <div class="card-body">
                                            <div class="card-category">
                                                <a href="single-post.html">May 28, 2018</a>
                                            </div>
                                            <h5 class="card-title"><a href="single-post.html">Ketchup Flavored Ice Cream!</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CAROUSEL ITEM 2 -->
                        <div>
                            <div class="card-masonry card-small">
                                <div class="card">
                                    <a href="single-post.html">
                                        <img class="card-vertical-img" src="images/900x600.png" alt="Hair You've Always Dreamed Of" />   
                                    </a>
                                    <div class="card-border">
                                        <div class="card-body">
                                            <div class="card-category">
                                                <a href="single-post.html">May 27, 2018</a>
                                            </div>
                                            <h5 class="card-title"><a href="single-post.html">Hair You've Always Dreamed Of</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CAROUSEL ITEM 3 -->
                        <div>
                            <div class="card-masonry card-small">
                                <div class="card">
                                    <a href="single-post.html">
                                        <img class="card-vertical-img" src="images/900x600.png" alt="15 Of The World's Best Carnivals" />   
                                    </a>
                                    <div class="card-border">
                                        <div class="card-body">
                                            <div class="card-category">
                                                <a href="single-post.html">May 25, 2018</a>
                                            </div>
                                            <h5 class="card-title"><a href="single-post.html">15 Of The World's Best Carnivals</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CAROUSEL ITEM 4 -->
                        <div>
                            <div class="card-masonry card-small">
                                <div class="card">
                                    <a href="single-post.html">
                                        <img class="card-vertical-img" src="images/900x600.png" alt="5 Ways to a Healthy Lifestyle" />   
                                    </a>
                                    <div class="card-border">
                                        <div class="card-body">
                                            <div class="card-category">
                                                <a href="single-post.html">May 25, 2018</a>
                                            </div>
                                            <h5 class="card-title"><a href="single-post.html">5 Ways to a Healthy Lifestyle</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CAROUSEL ITEM 5 -->
                        <div>
                            <div class="card-masonry card-small">
                                <div class="card">
                                    <a href="single-post.html">
                                        <img class="card-vertical-img" src="images/900x600.png" alt="Best Breakfast In The World" />   
                                    </a>
                                    <div class="card-border">
                                        <div class="card-body">
                                            <div class="card-category">
                                                <a href="single-post.html">May 23, 2018</a>
                                            </div>
                                            <h5 class="card-title"><a href="single-post.html">Best Breakfast In The World</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <a href="single-post.html">Ketchup Flavored Ice Cream!</a>
                            <span class="post-date">May 28, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.html">Hair You've Always Dreamed Of</a>
                            <span class="post-date">May 27, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.html">15 Of The World's Best Carnivals</a>
                            <span class="post-date">May 25, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.html">5 Ways to a Healthy Lifestyle</a>
                            <span class="post-date">May 25, 2018</span>
                        </li>
                        <li>
                            <a href="single-post.html">Best Breakfast In The World</a>
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
    <script src="js/slick.min.js"></script>
    <script src="js/panel.js"></script>
    <script src="js/reading-position-indicator.js"></script>
    <script src="js/custom.js"></script>
    <!-- POST SLIDER -->
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $('#dawsonsgeek-post-slider').slick({
                    autoplay: true,
                    autoplaySpeed: 5000,
                    slidesToScroll: 1,
                    adaptiveHeight: true,
                    slidesToShow: 1,
                    arrows: true,
                    dots: false,
                    fade: true
                });
            });
            $(window).on('load', function() {
                $('#dawsonsgeek-post-slider').css('opacity', '1');
                $('#dawsonsgeek-post-slider').parent().removeClass('dawsonsgeek-bg-loader');
            });
        })(jQuery);

    </script>
    <!-- POST CAROUSEL -->
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $('#dawsonsgeek-post-carousel').slick({
                    infinite: false,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false,
                    slidesToShow: 3,
                    responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }]

                });
                $('#dawsonsgeek-post-carousel').css('opacity', '1');
            });
        })(jQuery);

    </script>
</body>

</html>