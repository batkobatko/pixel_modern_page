<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="content">
            <div class="pull-right">
                <a href="/"><img width="150" height="auto" src="{{ ('front/images/pixel_5.svg')
                }}" alt=""></a>
            </div>
        </div>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ ('/') }}">NASLOVNA</a>
                </li>
                <li>
                    <a  href="{{ ('/o-nama') }}">O NAMA</a>
                </li>
                <li><a  href="{{ ('/cjenovnik') }}">CJENOVNIK</a>
                <li class="dropdown"><a class="dropdown-toggle" href="#"
                data-toggle="dropdown">USLUGE</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a class="dropdown-toggle" href="#"
                        data-toggle="dropdown">IZRADA STRANICA</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ ('/cms') }}">IZRADA CMS STRANICA</a>
                                </li>
                                <li>
                                    <a href="{{ ('/#special') }}">IZRADA NAMJENSKIH STRANICA</a>
                                </li>
                                <li>
                                    <a href="{{ ('/#web-prodavnica-info') }}">IZRADA WEB PRODAVNICA</a>
                                </li>
                                <li>
                                    <a href="{{ ('/#blog-info') }}">IZRADA BLOG STRANICA</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ ('/#oglasavanje') }}">OGLAŠAVANJE </a></li>
                        <li><a href="{{ ('/#seo') }}">OPTIMIZACIJA - SEO</a></li>
                        <li><a href="{{ ('/aktuelno') }}">SPECIJALNA PONUDA</a></li>
                    </ul>
                </li>
                <li><a  href="{{ ('/#download') }}">PREUZIMANJE</a>
                <li><a  href="{{ ('/users') }}">REGISTRACIJA</a>
                <li><a  href="{{ ('/kontakt') }}">KONTAKT</a></li>
                <li>&nbsp;&nbsp;&nbsp;</li>
                <li><a  href="{{ ('/en') }}">EN</a></li>


            </ul>
        </div>
    </div>
</nav>
