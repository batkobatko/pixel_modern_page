@extends('layouts.front_layout.front_lay_sec')
<title>PIXEL - CJENOVNIK</title>

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
    <!-- cards::before -->
    <div class="container">
        <div class="row multi-columns-row">
            <a href="#price_cost">
                <div class="card-animate">
                    <div class="cmb-sm-20 wow fadeInUp col-sm-6 col-md-4" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card border">
                            <div class="card-body">
                                <div class="card-title">
                                </div>
                                <p class="">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#price_laravel">
                <div class="card-animate-1">
                    <div class="cmb-sm-20 wow fadeInUp col-sm-6 col-md-4" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card border">
                            <div class="card-body">
                                <div class="card-title">
                                </div>
                                <p class="">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#price_form">
                <div class="card-animate-2">
                    <div class="cmb-sm-20 wow fadeInUp col-sm-6 col-md-4" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card border">
                            <div class="card-body">
                                <div class="card-title">
                                </div>
                                <p class="">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    </div>
</section>
<div class="main">
    <section class="module">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">
                @if(Session::has('message'))
                    <div class="col-sm-12">
                        <div class="alert alert-success alert-dismissable fade in">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            {{ Session('message') }}
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <div class="post">
                    <div class="post-entry">
                        <div class="module-subtitle font-serif">
                            <h3>Provjeri troškove izrade sajta.</h3>
                        </div>
                        <blockquote>
                            Osnovna struktura modernog sajta rađenog u WordPress tehnologiji iznosi 128 €, a u Laravelu 152 €. Personalizacija novog i redizajn već postojećeg sajta zavisi od niza faktora uključujući i broja radnih sati. Kalkulator cijena će Vam dati uvid u potencijalne troškove. Popunjavanjem mail polja i eventualnim komentarom, te klikom na dugme "ažuriraj" obavijestićete PIXEL tim, koji će Vam se javiti u kratkom roku.
                        </blockquote>
                        <hr class="divider-w mt-10 mb-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5>WordPress Sajtovi sadrže:</h5>
                                <ul>
                                    <li>Do 5 web strana</li>
                                    <li>Do 10 fotografija</li>
                                    <li>Osnovni dizajn</li>
                                    <li>Jedan govorni jezik</li>
                                    <li>Prijava sajta na Google</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <h5>Laravel sajtovi sadrže:</h5>
                                <ul>
                                    <li>Do 10 web strana</li>
                                    <li>Do 20 fotografija</li>
                                    <li>Reklamni baner</li>
                                    <li>Kontakt Forma</li>
                                    <li>Osnovni dizajn</li>
                                    <li>Jedan govorni jezik</li>
                                    <li>Prijava sajta na Google</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <form id="form_calc" action="{{ route('post') }}" method="post">
                @csrf
                <div class="calc">
                    <div class="row multi-columns-row"> <a id="price_cost"></a>
                        <div class="col-sm-12">
                            <div class="menu">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="menu-detail font-serif">
                                            <label for="checkbox" style="float: left; margin-top: 5px;" class="checkbox">Označi sve stavke&nbsp;&nbsp;&nbsp;</label>
                                            <input style="float: left; margin-top: 12px;" class="checkbox" type="checkbox" onClick="toggle(this)" name="choice[]" value="0 € | check"/> <br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" >
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Osnovi sajt - WordPress</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="128 € | WordPress site" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 128&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="menu-title font-alt">IZDVAJAMO</h4>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Osnovi sajt - Laravel</div>
                                    </div>
                                    <div>
                                        <h6>&nbsp;&nbsp; Vidi: |<a href="{{ ('/#') }}"> Laravel sajtovi</a></h6>
                                    </div>
                                    <a id="price_laravel"></a>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="148 € | Laravel Site" checked/>
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 152&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="menu-title font-alt">IZDVAJAMO</h4>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Laravel 8 - LaraShop prodavnica</div>
                                    </div>
                                    <div>
                                        <h6>&nbsp;&nbsp; Vidi: |<a href="{{ ('/aktuelno') }}"> Lara Shop</a></h6>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="420 € | LaraShop" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp;420&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Mjesečno Ažuriranje sadržaja web sajta</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="35 € | Mjesečno ažuriranje" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 35&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Mjesečni backup web sajta</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Mjesečno ažuriranje" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Web hosting godišnje (preporučeni)</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="25 € | Web hosting" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 25&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Registracija i zakup domena na godinu dana</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Registracija i zakup domena" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Kontakt forma</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Registracija i zakup domena" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="menu-title font-alt">Dodajte vašem web sajtu atraktivnost</h4>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Dodatna strana +1</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="5 € | Dodatna strana" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 5&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Kontakt forma</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Kontakt forma" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Foto slider</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="14 € | Foto slider" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 14&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Fotogalerija do 40 fotografija</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Fotogalerija do 40" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Fotogalerija do 60 fotografija</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Fotogalerija do 60" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 30&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Fotogalerija do 100 fotografija</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="35 € | Fotogalerija do 100" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 35&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Audio / Video player na web sajtu</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Audio / Video player" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="menu-title font-alt">Informišite posjetioce vašeg web sajta</h4>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Google mapa na web sajtu</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Google mapa" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Vremenska prognoza</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Kontakt forma" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20 € </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Brojač posjeta</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="15 € | Brojač posjeta" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 15&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Polje za newsletter</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Polje za newsletter" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Live chat sa operaterom</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Live chat sa operaterom" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Preuzimanje dokumenata sa web sajta (pdf, word)</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="10 € | Preuzimanje dokumenata" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 10&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="menu-title font-alt">Povećajte broj posjeta</h4>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Optimizacija web sajta za Google</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="120 € | Optimizacija web sajta za Google" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 110&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Preuzimanje dokumenata sa web sajta (pdf, word)</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="10 € | Preuzimanje dokumenata" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 10&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Preuzimanje dokumenata sa web sajta (pdf, word)</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="10 € | Preuzimanje dokumenata" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 10&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Google analytics</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="10 € | Google analytics" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 15&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Povezivanje web sajta sa društvenim mrežama</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="10 € | Povezivanje sa društvenim mrežama" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 10&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Kreiranje Fejsbuk Fan web stranice</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="15 € | Kreiranje Fejsbuk Fan" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 15&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Oglašavanje na popularnim sajtovima - cjenovni raspon</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="50 € | Kreiranje Fejsbuk Fan" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 50&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Oglašavanje na popularnim sajtovima - cjenovni raspon</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="80 € | Kreiranje Fejsbuk Fan" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 80&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">| Oglašavanje na popularnim sajtovima - cjenovni raspon</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="150 € | Kreiranje Fejsbuk Fan" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 150&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Prijava web sajta u internet poslovne adresare</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="20 € | Prijava web sajta" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 20&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Unikatni logo dizajn</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="60 € |  Unikatni logo" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 60&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Statični reklamni baner</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="15 € | Statični reklamni baner" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 15&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Animirani reklamni baner</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="30 € | Animirani reklamni baner" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 30&nbsp;€ </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-calc">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="menu-detail font-serif">Animirani kairon reklamni baner</div>
                                    </div>
                                    <div class="col-sm-4 menu-price-detail">
                                        <h4 class="menu-price font-alt">
                                            <input style="float: left; margin-top: 5px;" class="checkbox" type="checkbox" name="choice[]" value="30 € | Animirani kairon reklamni baner" />
                                            <label for="checkbox" style="float: left; margin-top: 3px;" class="checkbox">&nbsp; 30 € </label>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="calc-form">
                    <p></p>
                    <div class="row">
                        <a id="price_form"></a>
                        <div class="col-sm-6">
                            <h4 class="font-alt">Unesite kontakt podatke</h4>
                            <hr class="divider-w mb-10">
                            <div class="form-group">
                                <input id="name" class="form-control" type="text" name="name" placeholder="vaše ime *" value="" required="required" data-validation-required-message="Molimo Vas unesite vaše ime">
                            </div>
                            <div class="form-group">
                                <input id="last_name" class="form-control" type="text" name="last_name" placeholder="vaše prezime *" required="required" value="" data-validation-required-message="Molimo Vas unesite vaše prezime">
                            </div>
                            <div class="form-group">
                                <input id="email" class="form-control" type="text" name="email" placeholder="unesite email *" value="" required="required" data-validation-required-message="Molimo Vas unesite email">
                            </div>
                            <div class="form-group">
                                <input id="site" class="form-control" type="text" name="site"  placeholder="naziv Vašeg sajta | opciono"  value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="font-alt">UPIT</h4>
                            <hr class="divider-w mb-10">
                            <div class="form-group">
                                <textarea class="form-control" rows="7" id="message" name="question" placeholder="Proslijedite nam Više detalja | opciono" style="margin: 0px -126.531px 0px 0px; width: 100%; height: 178px;"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div id="price" style="margin: 0px -126.531px 0px 0px; width: 100%;" class="alert alert-success">Ukupan iznos: <span >0</span> €</div><br>
                    <button class="btn btn-g btn-round" value="proslijedi upit" type="submit"><i class="fa fa-cog fa-spin"></i> Proslijedi upit</button>
                </div>
            </form>
        </div>
    </section>
</div>
</body>
@include('front.banners.mini_baner')


