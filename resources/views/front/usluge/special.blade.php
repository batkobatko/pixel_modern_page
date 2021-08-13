@extends('layouts.front_layout.front_lay_sec')
<!--
    Document Title
    =============================================
    -->
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
</div>
<section class="module bg-dark-30 about-page-header" data-background="{{ ('front/images/banner/banner-bgr-2.png') }}" style="background-image: {{ url('ront/images/banner/banner-bgr.png') }} ; " >
    <div class="container">
        <div class="row">
            <a href="#special">
                <div class="card-animate-special">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="cmb-sm-20 wow fadeInUp " style="visibility: visible; animation-name: fadeInUp;">
                            <div class="card border">
                                <div class="card-body">
                                    <div class="card-title">
                                    </div>
                                    <p class="">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <!--
                <h2 class="module-title font-alt">O nama</h2>
                -->
                <!--
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                -->
            </div>
        </div>
    </div>
</section>

<title>PIXEL - special</title>

<div class="main">
    <!-- Banner CMS -->
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
    <!-- END banber CMS -->

    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="font-alt">Mi smo special</h5><br>
                    <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                    <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                </div>

            </div>
        </div>
    </section>

    <footer class="footer bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="copyright font-alt">© 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
                </div>
                <div class="col-sm-6">
                    <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>