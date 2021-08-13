@extends('layouts.front_layout.front_lay_sec')
<!--
    Document Title
    =============================================
    -->
<title>PIXEL - About Us </title>
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
                        <div class="module-subtitle font-serif large-text"><br><br>PIXEL se bavi izradom preglednih, modernih, ali prije svega funkcionalnih web aplikacija. Pratimo svjetske trendove i trudimo se da ih približimo klijentu. Neprestano učimo nove tehnologije kako bi naši klijenti dobili web aplikaciju koji ih izdvaja od drugih. PIXEL je fokusiran na potrebe naših klijenata...</div>
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
                <div class="row multi-columns-row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-lightbulb"></span></div>
                            <h3 class="features-title font-alt">Ideje i koncepti</h3>
                            <p>Mi smo profesionalci sa višegodišnjim iskustvom u izradi vrhunskih internet prezentacija i aplikacija</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-bike"></span></div>
                            <h3 class="features-title font-alt">U koraku s vremenom</h3>
                            <p>Idemo u korak sa novim tehnologijama i web standardima.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-tools"></span></div>
                            <h3 class="features-title font-alt">DIZAJN I INTERFEJS</h3>
                            <p>Naše internet prezentacije su modernog dizajna, posjetiocima omogućuju jednostavno pretraživanje i prijatno korisničko iskustvo</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-gears"></span></div>
                            <h3 class="features-title font-alt">Nudimo rješenja</h3>
                            <p>Posedujemo odlično poznavanje više različitih programskih jezika i nudimo kompletna rješenja različitih nivoa složenosti.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-tools-2"></span></div>
                            <h3 class="features-title font-alt">SEO</h3>
                            <p>Naše prezentacije su optimizovane za pretraživače (SEO) kako bi bile dostupnije i posećenije na web-u.<br><br></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-genius"></span></div>
                            <h3 class="features-title font-alt">ANALITIKA</h3>
                            <p>Nakon izrade web aplikacije vršimo objavljivanje (hosting), prijavljivanje na pretraživače, omogućavamo Vam praćenje statistike posećenosti sajta i vršimo potrebna ažuriranja. Pružamo kompletnu uslugu, sve na jednom mestu.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-mobile"></span></div>
                            <h3 class="features-title font-alt">Responsivne stranice</h3>
                            <p>Naše internet prezentacije su mobile friendly. Sadržaj se prilagođava različitim rezolucijama ekrana tako da se jednostavno čitaju na mabilnim uređajima.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-lifesaver"></span></div>
                            <h3 class="features-title font-alt">Isporuka i tehnička podrška</h3>
                            <p>Nudimo i isporučujemo web rešenja na vrijeme, po dogovorenoj cijeni i uz tehničku podršku</p><br><br>
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
                            <h2 class="module-title font-alt align-left">Osnovni podaci</h2><br>
                            <div class="module-subtitle font-serif align-left"><p>
                                   </p>
                                <p>
                                    PIXEL -&nbsp; Dizajn, programiranje i intelektualne usluge - Direktor - dipl ing Saša Novaković</p>
                               </div>
                            <p style="font-size:16px">
                                Sjedište: <span class="module-subtitle font-serif" >Desanke Maksimović 23, 79000 Prijedor</span><br>
                                Poreski br: <span class="module-subtitle font-serif" >4511534720008<br></span>
                                Registarski broj: <span class="module-subtitle font-serif" >646893<br></span>
                                Žiro račun:	<span class="module-subtitle font-serif" >395551000050740959, &nbsp;
                                NOVA BANKA AD</span><br>
                                Fiskalizacija: <span class="module-subtitle font-serif" >DA</span>
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