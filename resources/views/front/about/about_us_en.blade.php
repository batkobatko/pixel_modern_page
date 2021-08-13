@extends('layouts.front_layout.front_lay_sec_en')
<!--
    Document Title
    =============================================
    -->
<title>PIXEL - o nama | izrada web stranica - specijalna ponuda - kalkulator cijena! </title>
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
            <a href="#o-nama">
                <div class="card-animate-about">
                    <div class="col-sm-4 col-sm-offset-4">
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

        <section class="module-home">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                    <!--
                    <h2 class="module-title font-alt">O NAMA</h2>
                    -->
                        <div class="module-subtitle font-serif large-text"><br><br>PIXEL is engaged in the development of clear, modern, but above all functional web applications. We follow world trends and try to bring them closer to the client. We are constantly learning new technologies to give our clients a web application that sets them apart from others. PIXEL is focused on the needs of our customers ... </div>
                    </div>
                </div>
                <section class="module-page">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="large-text align-center">
                            <a class="section-scroll" href="#services"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    <hr class="divider-w mt-10 mb-20">
        <section class="module-home" id="services">
            <div class="container">
                <div class = "row multi-columns-row">
                    <div class = "col-md-3 col-sm-6 col-xs-12">
                        <div class = "features-item">
                            <div class = "features-icon"> <span class = "icon-lightbulb"> </span> </div>
                            <h3 class = "features-title font-alt"> Ideas and concepts </h3>
                            <p> We are professionals with many years of experience in creating top internet presentations and applications </p>
                        </div>
                    </div>
                    <div class = "col-md-3 col-sm-6 col-xs-12">
                        <div class = "features-item">
                            <div class = "features-icon"> <span class = "icon-bike"> </span> </div>
                            <h3 class = "features-title font-alt"> In step with the times </h3>
                            <p> We're keeping up with new technologies and web standards. </p>
                        </div>
                    </div>
                    <div class = "col-md-3 col-sm-6 col-xs-12">
                        <div class = "features-item">
                            <div class = "features-icon"> <span class = "icon-tools"> </span> </div>
                            <h3 class = "features-title font-alt"> DESIGN AND INTERFACE </h3>
                            <p> Our websites are modern in design, providing visitors with an easy search and a pleasant user experience </p>
                        </div>
                    </div>
                    <div class = "col-md-3 col-sm-6 col-xs-12">
                        <div class = "features-item">
                            <div class = "features-icon"> <span class = "icon-gears"> </span> </div>
                            <h3 class = "features-title font-alt"> We offer solutions </h3>
                            <p> We have excellent knowledge of several different programming languages ​​and offer complete solutions of different levels of complexity. </p>
                        </div>
                    </div>
                    <div class = "col-md-3 col-sm-6 col-xs-12">
                        <div class = "features-item">
                            <div class = "features-icon"> <span class = "icon-tools-2"> </span> </div>
                            <h3 class = "features-title font-alt"> SEO </h3>
                            <p> Our presentations are search engine optimized (SEO) to make them more accessible and visited on the web. <br> <br> </p>
                        </div>
                    </div>
                    <div class = "col-md-3 col-sm-6 col-xs-12">
                        <div class = "features-item">
                            <div class = "features-icon"> <span class = "icon-genius"> </span> </div>
                            <h3 class = "features-title font-alt"> ANALYTICS </h3>
                            <p> After creating the web application, we perform hosting, login to search engines, enable you to monitor site traffic statistics and perform the necessary updates. We provide a complete service, all in one place. </p>
                        </div>
                    </div>
                    <div class = "col-md-3 col-sm-6 col-xs-12">
                        <div class = "features-item">
                            <div class = "features-icon"> <span class = "icon-mobile"> </span> </div>
                            <h3 class = "features-title font-alt"> Responsive pages </h3>
                            <p> Our websites are mobile friendly. Content adapts to different screen resolutions so it's easy to read on mobile devices. </p>
                        </div>
                    </div>
                    <div class = "col-md-3 col-sm-6 col-xs-12">
                        <div class = "features-item">
                            <div class = "features-icon"> <span class = "icon-lifesaver"> </span> </div>
                            <h3 class = "features-title font-alt"> Delivery and technical support </h3>
                            <p> We offer and deliver web solutions on time, at an agreed price and with technical support </p> <br> <br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module pt-0 pb-0" id="o-nama">
            <div class="row position-relative m-0">
                <div class="col-xs-12 col-md-6 side-image side-image-text" data-background="{{ ('front/images/banner/pixel-home-++-.png') }}" style="background-image: {{ url('front/images/section-14.jpg')}} ; " >
                </div>
                <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="module-title font-alt align-left">Basic information:</h2><br>
                            <div class="module-subtitle font-serif align-left"><p>
                                   </p>
                                <p>
                                    PIXEL -&nbsp; Design, programming and intellectual services - Director - dipl ing Saša Novaković</p>
                               </div>
                            <p style="font-size:16px">
                                Locations: <span class="module-subtitle font-serif" >Desanke Maksimović 23, 79000 Prijedor</span><br>
                                Tax:: <span class="module-subtitle font-serif" >4511534720008<br></span>
                                Registration number: <span class="module-subtitle font-serif" >646893<br></span>
                                Bank Account:	<span class="module-subtitle font-serif" >395551000050740959, &nbsp;
                                NOVA BANKA AD</span><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     <section class="module" id="about">
            <div class="col-md-6 col-sm-6 col-xs-12">
            </div>
         <div class="scroll-up" style="display: block;"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
     </section>
</body>