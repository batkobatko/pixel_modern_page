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
                <a href="/en"><img width="150" height="auto" src="{{ ('front/images/pixel_5.svg')
                }}" alt=""></a>
            </div>
        </div>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ ('/en') }}">HOME</a>
                </li>
                <li>
                    <a  href="{{ ('/o-nama-en') }}">ABOUT US</a>
                </li>
                <li><a  href="{{ ('/en/#cjenovnik') }}">PRICE LIST</a>
                <li class="dropdown"><a class="dropdown-toggle" href="#"
                data-toggle="dropdown">SERVICES</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a class="dropdown-toggle" href="#"
                        data-toggle="dropdown">WEBSITE DESIGN </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ ('/en/#cms') }}">DESIGN OF CMS PAGE </a>
                                </li>
                                <li>
                                    <a href="{{ ('/en/#special') }}">CREATING A CUSTOMIZED WEBSITE</a>
                                </li>
                                <li>
                                    <a href="{{ ('/en/#web-prodavnica-info') }}">E-COMMERCE WEBSITE</a>
                                </li>
                                <li>
                                    <a href="{{ ('/en/#blog-info') }}">CREATING BLOG WEBSITE</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ ('/en/#oglasavanje') }}">ADVERISING </a></li>
                        <li><a href="{{ ('/en/#seo') }}">OPTIMIZATION - SEO</a></li>
                        <li><a href="{{ ('/aktuelno-en') }}">SPECIAL OFFER</a></li>
                    </ul>
                </li>
                <li><a  href="{{ ('/en/#download') }}">DOWNLOAD</a>
                <li><a  href="{{ ('/en/#users') }}">REGISTRATION</a>
                <li><a  href="{{ ('/kontakt-en') }}">CONTACT</a></li>
                <li>&nbsp;&nbsp;&nbsp;</li>
                <li><a  href="{{ ('/') }}">SR</a></li>


            </ul>
        </div>
    </div>
</nav>
