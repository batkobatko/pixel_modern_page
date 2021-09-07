<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--
        Document Title
        =============================================
        -->
        <title>PIXEL | Naruči svoj savršen dizajn | izrada web stranica - specijalna ponuda - kalkulator cijena! </title>
        <meta name="description" content="Izrada web stranica, rješenja za Vaš dizajn. Izdvajamo - Naše rješenje (Web prodavnica) - potpuno autonoman sistem kupoprodaje -VIDEO!">
        <meta name="web_author" content="Saša Novaković - Pixel Prijedor">
        <meta name="author" content="dipl ing Saša Novaković">
        <meta name="designer" content="Renata Šikanjić">
        <meta name="keywords" content="pixelprijedor.com, pixel, prijedor, laravel, wordpress,online, prodaja, prodavnica, shop, savršen, dizajn, redizajn, kalkulator, cijena, već, od">
        <meta name='revised' content='Sunday, May 2th, 2021, 5:15 pm'>
     @php //  < {!! SEOMeta::generate() !!}> @endphp
        <meta property="og:url"                content="www.pixelprijedor" />
        <meta property="og:type"               content="article" />
        <meta property="og:title"              content="PIXEL | Naruči svoj savršen dizajn | izrada web stranica - specijalna ponuda - kalkulator cijena! " />
        <meta property="og:description"        content="Nudimo nova rješnja, drugačiji i potpuno moderan vizuelni identitet. Odvojite malo vremena da nas upoznate i pokazaćemo Vam kako da se izdvojite iz mase i kako da svoje poslove obavljate na funcionalan i jednostavan način. Pandemija novog virusa je prinudila mnoge osobe da razmišljaju o alternativnom načinu predstavljanja. Samim tim što ste nas posjetili svjesni ste da alternativa postoji, i ne samo da postoji već je to idealna prilika da predstavite sebe, a svoje usluge i proizvode ponudite projektovanim ciljnim grupama." />
        <meta property="og:image"              content="{{ asset('front/images/pixel/pixel.png') }}" />
    <!--

    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="apple-touch-icon" sizes="60x60"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="apple-touch-icon" sizes="76x76"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ asset('front/images/pixel/pixel.png') }}">
    <link rel="manifest" href="{{ asset('front/images/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('front/images/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!--
    Stylesheets
    =============================================

    -->
    <!-- Default stylesheets-->
    <link href="{{ url('front/lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link href="{{ url('front/lib/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('front/lib/components-font-awesome/css/font-awesome.min.css') }}"
          rel="stylesheet">
    <link href="{{ url('front/lib/et-line-font/et-line-font.css') }}" rel="stylesheet">
    <link href="{{ url('front/lib/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href="{{ url('front/lib/owl.carousel/dist/assets/owl.carousel.min.css') }}"
          rel="stylesheet">
    <link href="{{ url('front/lib/owl.carousel/dist/assets/owl.theme.default.min.css') }}"
          rel="stylesheet">
    <link href="{{ url('front/lib/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ url('front/lib/simple-text-rotator/simpletextrotator.css') }}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="{{ url('front/css/style.css') }}" rel="stylesheet">
    <!-- <link id="color-scheme" href=" url('assets/css/colors/default.css')" rel="stylesheet"-->

    <!-- Update css -->
    <!-- <link href=" url('front/update/css/forma.css') " rel="stylesheet"> -->
</head>

    <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
        <main>
            <div class="page-loader">
                <div class="loader" ></div>
                <span class="load-ring">PIXEL...</span>
            </div>
            <!--start header-->
            @include('layouts.front_layout.front_header')
            <!-- Header End====================================================================== -->
            <!--start banner-->
            @include('front.banners.home_page_banners')
            <!--pozivamo baners fajl-->

            <div id="mainBody">
                <div class="container">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>

        <!-- Footer ================================================================== -->
        @include('layouts.front_layout.front_footer')

        </main>
        <!--
        JavaScripts
        =============================================
        -->
    <script src="{{ url('front/lib/jquery/dist/jquery.js') }}"></script>
    <script src="{{ url('front/lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('front/lib/wow/dist/wow.js') }}"></script>
    <script src="{{ url('front/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ url('front/lib/isotope/dist/isotope.pkgd.js') }}"></script>
    <script src="{{ url('front/lib/imagesloaded/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ url('front/lib/flexslider/jquery.flexslider.js') }}"></script>
    <script src="{{ url('front/lib/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ url('front/lib/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('front/lib/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
    <script src="{{ url('front/lib/simple-text-rotator/jquery.simple-text-rotator.min.js') }}"></script>
    <script src="{{ url('front/js/plugins.js') }}"></script>
    <script src="{{ url('front/js/main.js') }}"></script>

    <!-- Update js-->
    <!--<script src=""></script>-->
    </body>
</html>