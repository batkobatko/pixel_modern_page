@extends('layouts.front_layout.front_lay_sec')
<!--
    Document Title
    =============================================
    -->
<title>PIXEL - cms</title>
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
                <a href="#CMS">
                    <div class="card-animate-cms">
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
    </section>
        <section class="module-small">
            <div class="container">
                <div class="row">
                    @include('layouts.front_layout.front_sidebar_blog')
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="post">

                            <div class="post-entry">
                                <div class="module-subtitle font-serif"><h3>Sistem za dinami??ko upravljanje sadr??ajem.</h3></div>
                                    <BLOCKQUOTE>
                                        Content Management system (CMS) Vam omogu??ava da samostalno postavljate ili mijenjate sadr??aje Va??ih web stranica nezavisno o tome koliko poznajete strukturu same web stranica. U mogu??nosti ste da uz minimalno op??te znanje i poznavanje rada na ra??unaru.
                                    </BLOCKQUOTE>
                                    <div class="post-thumbnail">
                                        <div class="post-meta">Autor:&nbsp;<a href="{{ ('/o-nama') }}">Dipl ing Sa??a Novakovi??</a>&nbsp;| 23 Mart | Comments |&nbsp;<a href="#">Tehni??ka dokumentacija &nbsp;</a>|<a href="{{ ('/aktuelno') }}"> Lara Shop</a>
                                        </div>
                                    </div>
                                <hr class="divider-w mt-10 mb-20">
                                <div class="">
                                    <p>
                                        <strong>Administratorski panel</strong><br>
                                        <br>
                                        Admin panelu pristupate preko svog korisni??kog imena i lozinke tako da je ono u potpunosti za??ti??eno od ne??eljenih upada.<br>
                                        <br>
                                        Unos podataka je za Vas maksimalno pojednostavljen, a svodi se na ispunjavanje unaprijed definisanih stavki (fotografije i teksta) koje ??elite mijenjati na svojoj stranici. Jednim klikom na dugme "SNIMI" ili "A??URIRAJ" na stranicu postavljate novi sadr??aj.</p>
                                    <p>
                                        <strong>Korisnici/konzumenti sadr??aja</strong><br>
                                        <br>
                                        Visok nivo interakcije sa korinsicima web stranica danas je ne samo po??eljno, nego predstavlja nu??nost ukoliko posjetioca ??elite zadr??ati ??to du??e na stranici, a posebno ako putem interneta direktno  <a href="{{ ('/#web-prodavnica-info') }}">ostvarujete neku dobit ili vr??ite prodaju.</a><br>
                                        <br>
                                        Upravo zbog toga je dobro omogu??iti korisnicima komunikaciju s Vama kako biste ih zainteresovali i stupili s njima u kontakt, saznali vi??e o njihovim potrebama, interesima, navikama..
                                        U tu svrhu mo??ete i njima omogu??iti da budu sukreatori Va??ih stranica postavljaju??i na njih sve vrste sadr??aja - svoje podatke,&nbsp; pitanja, komentare ili materijale preko korisni??kog su??elja.<br>
                                        <br>
                                    </p>
                                    <blockquote>
                                        Ukoliko se ??elite informisati ili nam postaviti dodatna pitanja, slobodno nas <a href="{{ ('/#') }}">kontaktirajte.</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    @include('front.banners.mini_baner')

