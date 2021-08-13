@extends('layouts.front_layout.front_layout')
@section('content')

    <section class="module-home">
        <div class="row-row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Mi Kreiramo</h2>
                <!--
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                -->
            </div>
            <div class="post">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="post-header font-alt">
                        <div class="post-meta">Autor:&nbsp;<a href="/o-nama">Dipl ing Saša Novaković</a>&nbsp;| 23 Mart | Comments |&nbsp;<a href="#">Tehnička dokumentacija &nbsp;</a>|<a href="/aktuelno"> Lara Shop</a>
                        </div>
                    </div>
                    <div class="post-entry">
                        <p>Novi smo na našem tržitu, ali ne i bez iskustva!</p>
                        <p>Nudimo nova rješnja, drugačiji i potpuno moderan vizuelni identitet. Odvojite malo vremena da nas upoznate i pokazaćemo Vam kako da se izdvojite iz mase i kako da svoje poslove obavljate na funcionalan i jednostavan način. Pandemija novog virusa je prinudila mnoge osobe da razmišljaju o alternativnom načinu predstavljanja. Samim tim što ste nas posjetili svjesni ste da alternativa postoji, i ne samo da postoji već je to idealna prilika da predstavite sebe, a svoje usluge i proizvode ponudite projektovanim ciljnim grupama.</p>

                        <blockquote>Trenutna situacija je samo ubrzala procese koji su nepovratni - preuzmite stvari u svoje ruke.</blockquote>
                        <hr class="divider-w mt-10 mb-20">
                    </div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <li>Ako se bavite bilo kojom vrstom prodaje, naša online prodavnica <a href="/aktuelno"> Lara Shop</a> koju je kodirao pixel tim je idealna za Vas i omogućiće Vam da uz veoma mala ulaganja postignete vrhunske rezultate.</li>
                                        <li>Ako želite da se predstavite klijentima na vizuleno prihvatljiv i drugačiji način onda su interaktivne piksel stranice ili blogovi odlično rješenje</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li>Ako Vam je potreban redizajn već postojeće web stranice, na pravom ste mjestu - nudimo nove ideje i rješenja</li>
                                        <li>Ako su Vam potrebne usluge optimizacije već postojeće web stranice, kvalitetan hosting, siguran domen - nudimo jednostavna rješenja</li>
                                        <li>Ako Vam je potrebna efektna reklama na pravom ste mjestu.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cards -->
    <section class="" id="pricing">
        <div class="container">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Naši paketi</h2>
                    <!--
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                    -->
                </div>

            <div class="row" >
                <div class="mx-auto">
                    <div class="col-lg-12">
                        <div class="text-center my-3">
                            <h6 class="text-center my-5"><!--Transform Transition cards samples--></h6>
                            <div class="card-deck no-gutters">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3" style="padding-bottom: 50px; padding-top: 50px; background: #f2f2f2;">
                                    <div class="card h-100 mb-4">
                                        <div class="card-header">
                                            <h5 class="card-title m-0 p-0 font-weight-bolder text-secondary">Laravel prodavnica</h5>
                                        </div>
                                        <div class="card-price-body text-left">
                                            <p class="card-text">
                                                <span>&#8226;</span>&nbsp;&nbsp;Učinite svoj posao direktnijim i &nbsp;&nbsp;&nbsp;pronađite udaljene korisnike &nbsp;&nbsp;&nbsp;bez posrednika<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Bez dodatnih troškova zakupa &nbsp;&nbsp;&nbsp;poslovnog prostora <br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Potpuno autonoman sistem &nbsp;&nbsp;&nbsp;kupo-prodaje za mala i srednja &nbsp;&nbsp;&nbsp;preduzeća <br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Kupovina na klik</p>
                                            <span class="font-lead-base font-weight-bold text-muted"></span>
                                            <div class="promotion-promo"> </div>
                                            <div class="promotion-price">
                                                <div class="promotion-price-desc">Cijena</div>
                                                <div class="promotion-price-text">420&nbsp;€</div>
                                            </div>
                                        </div>
                                        <div class="card-footer"><a href="{{('/aktuelno')}}" class="btn btn-warning">Pogledaj</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3" style="padding-bottom: 50px; padding-top: 50px; background: #f2f2f2;">
                                    <div class="card h-100 mb-4">
                                        <div class="card-header">
                                            <h5 class="card-title m-0 p-0 font-weight-bolder text-secondary">OSNOVNI SAJT - WordPress</h5>
                                        </div>
                                        <div class="card-price-body text-left">
                                            <p class="card-text">
                                                <span>&#8226;</span>&nbsp;&nbsp;Do 5 web strana<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Do 10 fotografija<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Osnovni dizajn<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Jedan govorni jezik<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Prijava sajta na Google</p>
                                            <span class="font-lead-base font-weight-bold text-muted">&nbsp;&nbsp;25% popust</span>
                                            <div class="promotion-promo" style="padding-left: 5px">160&nbsp;€</div>
                                            <div class="promotion-price-1">
                                                <div class="promotion-price-desc">Cijena</div>
                                                <div class="promotion-price-text">128&nbsp;€</div>
                                            </div>
                                        </div>
                                        <div class="card-footer"><a href="#" class="btn btn-warning">Pogledaj</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3" style="padding-bottom: 50px; padding-top: 50px; background: #f2f2f2;">
                                    <div class="card h-100 mb-4">
                                        <div class="card-header">
                                            <h5 class="card-title m-0 p-0 font-weight-bolder text-secondary">OSNOVNI SAJT - Laravel</h5>
                                        </div>
                                        <div class="card-price-body text-left">
                                            <p class="card-text">
                                                <span>&#8226;</span>&nbsp;&nbsp;Do 10 web strana<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Do 20 fotografija<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Reklamni baner<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Kontakt Forma<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Osnovni dizajn<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Jedan govorni jezik<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Prijava sajta na Google</p>
                                            <span class="font-lead-base font-weight-bold text-muted">20% popust</span>
                                            <div class="promotion-promo" style="padding-left: 5px">190&nbsp;€</div>
                                            <div class="promotion-price-1">
                                                <div class="promotion-price-desc">Cijena</div>
                                                <div class="promotion-price-text">152&nbsp;€</div>
                                            </div>
                                        </div>
                                        <div class="card-footer"><a href="#" class="btn btn-warning">Pogledaj</a></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3" style="padding-bottom: 50px; padding-top: 50px; background: #f2f2f2;">
                                    <div class="card h-100 mb-4">
                                        <div class="card-header">
                                            <h5 class="card-title m-0 p-0 font-weight-bolder text-secondary">Redizajn Web stranica</h5>
                                        </div>
                                        <div class="card-price-body text-left">
                                            <p class="card-text">
                                                <span>&#8226;</span>&nbsp;&nbsp;Redizajn Loga<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Dodatne stranice<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Kontakt forme i obavještenja<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Statički i dinamički baneri<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Kairon baneri<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Fotogalerije<br>
                                                <span>&#8226;</span>&nbsp;&nbsp;Hover efekti<br></p>
                                            <span class="font-lead-base font-weight-bold text-muted"></span>
                                            <div class="promotion-promo"></div>
                                            <div class="promotion-price-2">
                                                <div class="promotion-price-desc">Već od</div>
                                                <div class="promotion-price-text">80&nbsp;€</div>
                                            </div>
                                        </div>
                                        <div class="card-footer"><a href="#" class="btn btn-warning">Pogledaj</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="module-page">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="large-text align-center">
                <a class="section-scroll" href="#footer"><i class="fa fa-angle-down"></i><br><br></a>
            </div>
        </div>
        </section>
    </section>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>

@endsection

