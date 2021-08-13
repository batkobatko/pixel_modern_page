@extends('layouts.front_layout.front_lay_sec')
<!--
    Document Title
    =============================================
    -->
<title>PIXEL - blog</title>
    <body>
    <style>
        /*--------------------------------------------------------------
        Preloader
    --------------------------------------------------------------*/
        .page-loader {
            position: fixed;
            background: #000;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            z-index: 9998;
            min-height: 100vh;

        }

        .loader {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            animation: ring 2s linear infinite;
        }

        .loader,
        .loader{
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            animation: loader 2s linear infinite;
        }

        @keyframes loader {
            0%{
                transform: rotate(0deg);
                box-shadow: 1px 5px 2px #492bb7;
            }
            50%{
                transform: rotate(180deg);
                box-shadow: 1px 5px 2px rgba(221, 221, 221, 0.01);
            }
            100%{
                transform: rotate(360deg);
                box-shadow: 1px 5px 2px #1e71c8;
            }
        }
        .loader:before{
            position: absolute;
            content: '';
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(255,255,255,.3);
        }

        .load-ring {
            color: #737373;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            line-height: 200px;
            animation: text 3s ease-in-out infinite;
        }

        @keyframes text {
            50%{
                color: black;
            }
        }
    </style>
    <div class="page-loader">
        <div class="loader" ></div>
        <span class="load-ring">PIXEL...</span>
    </div>title>
    <div class="main">
    <!-- Banner blog -->
    <section class="module bg-dark-30 about-page-header" data-background="{{ ('front/images/about_bg.jpg') }}" style="background-image: {{ url('front/images//about_bg.jpg')}} ; " >
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">About</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- END banber blog -->
    </div>
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="font-alt">Blogy</h5><br>
                    <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                    <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                </div>

            </div>
        </div>
    </section>



    @extends('layouts.front_layout.front_footer')

    <section class="module-medium" id="demos">
        <div class="container">
            <div class="row multi-columns-row">
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box"                                                                href="index_mp_fullscreen_video_background.html">
                        <div class="content-box-image"><img
                                src="{{ asset('front/images/screenshots/main_demo.jpg') }}"
                                alt="Main Demo"></div>
                        <h3 class="content-box-title font-serif">Main Demo</h3></a></div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box"
                                                            href="index_agency.html">
                        <div class="content-box-image"><img
                                src="{{ asset('front/images/screenshots/agency.jpg') }}"
                                alt="Agency"></div>
                        <h3 class="content-box-title font-serif">Agency</h3></a></div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box"
                                                            href="index_portfolio.html">
                        <div class="content-box-image"><img
                                src="{{ asset('front/images/screenshots/portfolio.jpg') }}"
                                alt="Portfolio"></div>
                        <h3 class="content-box-title font-serif">Portfolio</h3></a></div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box"
                                                            href="index_restaurant.html">
                        <div class="content-box-image"><img
                                src="{{ asset('front/images/screenshots/restaurant.jpg') }}"
                                alt="Restaurant"></div>
                        <h3 class="content-box-title font-serif">Restaurant</h3></a></div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box"
                                                            href="index_finance.html">
                        <div class="content-box-image"><img
                                src="{{ asset('front/images/screenshots/finance.jpg') }}"
                                alt="Finance"></div>
                        <h3 class="content-box-title font-serif">Finance</h3></a></div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box"
                                                            href="index_landing.html">
                        <div class="content-box-image"><img
                                src="{{ asset('front/images/screenshots/landing.jpg') }}"
                                alt="Landing"></div>
                        <h3 class="content-box-title font-serif">Landing</h3></a></div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box"
                                                            href="index_photography.html">
                        <div class="content-box-image"><img
                                src="{{ asset('front/images/screenshots/photography.jpg') }}"
                                alt="Photography"></div>
                        <h3 class="content-box-title font-serif">Photography</h3></a></div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box"
                                                            href="index_shop.html">
                        <div class="content-box-image"><img
                                src="{{ asset('front/images/screenshots/shop.jpg') }}"
                                alt="Shop"></div>
                        <h3 class="content-box-title font-serif">Shop</h3></a></div>
                <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box"
                                                            href="index_op_fullscreen_gradient_overlay.html">
                        <div class="content-box-image"><img
                                src="{{ asset('front/images/screenshots/one_page.jpg') }}"
                                alt="One Page"></div>
                        <h3 class="content-box-title font-serif">One Page</h3></a></div>
            </div>
        </div>
    </section>
    <section class="module pb-0" id="works">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Our Works</h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="filter font-alt" id="filters">
                        <li><a class="wow fadeInUp" href="#" data-filter="*" style="visibility: visible; animation-name: fadeInUp;">All</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Illustration</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".marketing" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Marketing</a></li>
                        <li><a class="wow fadeInUp" href="#" data-filter=".photography" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Photography</a></li>
                        <li><a class="wow fadeInUp current" href="#" data-filter=".webdesign" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Web Design</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid" style="position: relative; height: 275.391px;">
            <li class="work-item illustration webdesign" style="position: absolute; left: 0px; top: 0px;"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="" alt="Portfolio Item"></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Corporate Identity</h3>
                        <div class="work-descr">Illustration</div>
                    </div></a></li>
            <li class="work-item marketing photography" style="position: absolute; left: 0px; top: 0px; display: none;"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="" alt="Portfolio Item"></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Bag MockUp</h3>
                        <div class="work-descr">Marketing</div>
                    </div></a></li>
            <li class="work-item illustration photography" style="position: absolute; left: 449px; top: 0px; display: none;"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="" alt="Portfolio Item"></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Disk Cover</h3>
                        <div class="work-descr">Illustration</div>
                    </div></a></li>
            <li class="work-item marketing photography" style="position: absolute; left: 899px; top: 0px; display: none;"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="" alt="Portfolio Item"></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Business Card</h3>
                        <div class="work-descr">Photography</div>
                    </div></a></li>
            <li class="work-item illustration webdesign" style="position: absolute; left: 449px; top: 0px;"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="" alt="Portfolio Item"></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Business Card</h3>
                        <div class="work-descr">Webdesign</div>
                    </div></a></li>
            <li class="work-item marketing webdesign" style="position: absolute; left: 899px; top: 0px;"><a href="portfolio-single-1.html">
                    <div class="work-image"><img src="" alt="Portfolio Item"></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">Business Cards in paper clip</h3>
                        <div class="work-descr">Marketing</div>
                    </div></a>
            </li>
        </ul>

    </section>

