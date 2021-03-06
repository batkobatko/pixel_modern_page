@extends('layouts.front_layout.front_lay_sec')
<!--
    Document Title
    =============================================
    -->
<title>PIXEL - AKTUELNO</title>
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
                <a href="#aktuelno">
                    <div class="card-animate-aktuelno">
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
                                <div class="module-subtitle font-serif"><h3>Web prodavnica LARA SHOP</h3>
                                </div>
                                    <BLOCKQUOTE>
                                        Web prodavnica "Lara Shop" je nas projekat na koji smo veoma ponosni. Rije?? je o potpuno autonomnoj Web aplikaciji koju je namjenjena malim i srednjim prodavnicama.

                                        Lara Shop je ra??ena u Laravel frejmvorku, a koristeni jezici su PHP, JavaScript, CSS, SCSS, HTML.
                                    </BLOCKQUOTE>
                                    <div class="post-header font-alt">
                                        <div class="post-meta">Autor:&nbsp;<a href="{{ ('/o-nama') }}">Dipl ing Sa??a Novakovi??</a>&nbsp;| 23 Mart | Comments |&nbsp;<a href="#">Tehni??ka dokumentacija &nbsp;</a>|<a href="{{ ('/cms') }}"> IZRADA CMS STRANICA</a>
                                        </div>
                                    </div>
                                    <hr class="divider-w mt-10 mb-20">

                                <div class=""><div class="post-header font-alt">
                                        <h1 class="post-title">LARA SHOP</h1></div>
                                    <ul>
                                        <li>Pristup svim parametrima WEB prodavnice je maksimalno pojednostavljen, a svodi se na ispunjavanje unaprijed definisanih stavki (fotografije, specifikacija artikala, atributa, cijena) koje ??elite mijenjati na svojoj stranici.
                                        </li>
                                        <li>Proizvodi su podjeljeni unutar sekcija (npr. mu??karci/??ene/djeca/) na kategorije (npr. majice, farmerke, patike, alat, ku??anski aparati), a kategorije su opet podjeljene na proizvode/artikle.
                                        </li>
                                        <li>Lara Shop posjeduje sistem filtriranja koji zavisi od parametara i vrijednosti po koji Vama odgovara, i na taj na??in sistem Vam omogu??ava tzv su??avanje i usmjeravanje kupca ka konkretnom proizvodu.
                                        </li>
                                        <li>Sistem Lara Shop omogu??ava i davanje popusta na osnovu sekcija i kategorija.
                                        </li>
                                        <li>Modul "kupon" je poseban dodatak. Ovdje mo??ete generisati neograni??en broj kodova. Kodove mo??ete generisati automatski ili manuelno, dodjeljivati svim registrovanim korisnicima (automatski) ili pojedinim kupcima u vidu nagrade na bilo koji artikl ili grupu artikala. Kupon mo??e da bude usko vremenski ograni??en, a popust mo??e biti u procentima ili u aktuelnoj valuti.
                                        </li>
                                        <li>Modul "Narud??be" omogu??ava efikasnu evidenciju i pra??enje sistema kuopovine i dostave, kao i pregled svih aktivnih parametara. U ovaj model je uklju??eno i automatsko obavje??tenje korisnika putem sistema poruka (mail servisa) o svakoj promjeni statusa po??iljke. Uz sistem poruka mogu??e je po potrebi aktivirati i SMS sistem obavje??tenja.
                                        </li>
                                        <li>Sistem Lara Shop u okviru standardne postavke omogu??ava automatsko genirisanje elektronskih ra??una (invoice) o kupljenoj robi u PDF formatu.
                                        </li>
                                        <li>Poseban modularni segment sistema "Narud??be" uklju??uje ??tampanje i automatsko generisanje bar kodova za svaku narud??bu ponaosob. Sistemom kodiranja smo predvidjeli uskla??ivanje i implementaciju sa kurirskim slu??bama.
                                        </li>
                                        <li>Administriranje administracije je tako??e omogu??eno. Nakon inicijalnih pode??avanja administratorskog naloga naknadno ste u mogu??nosti da mijenjate sifru naloga, pozadinsku sli??icu (avatar) ili broj telefona.
                                        </li>
                                        <li>Jedan od klju??nih modula jeste modul "Po??iljke". Ovdje se nalazi spisak svih aktuelnih dr??ava svijeta, a za svako od njih mogu??e je unijeti odgovaraju??u po??tarinu.
                                        </li>
                                        <li>Korisnici usluga WEB prodavnice su u mogu??nosti kupovine u registracijskom modu i izvan njega. Registracijski mod ima mnoge povoljnosti u odnosu na anonimnu kupovinu. Registrovani korisnici imaju mogu??nost primanja generisanih kupona od stane prodavca putem mail servisa ili sms modula, imaju mogu??nost pregleda kupljenih artikala, koji uklju??uje sve bitne parametre, po??ev od fotografija kupljenih artikla, datuma, atributa i sl.
                                        </li>
                                        <li>Korisnici usluga na??e WEB prodavnice su umogu??nosti da biraju na??in kupovine, pouze??em ili putem PayPal-a (te eventualno karti??no pla??anje) u svim dr??avama u kojima je PayPal zastupljen.
                                        </li>
                                        <hr class="divider-w mt-10 mb-20">
                                        <BLOCKQUOTE>Pogledajte primjer jednog Lara Shop moderne prodavnice <a href="https://shop.vunena.com">LaraShop</a><br>
                                            Preuzmite dokumentaciju <a href="{{ ('/download') }}">preuzimanje</a>
                                        </BLOCKQUOTE>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
