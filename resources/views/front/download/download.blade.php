@extends('layouts.front_layout.front_lay_sec')
<!--
    Document Title
    =============================================
    -->
<title>PIXEL - pruzimanje tehničke dokumentaicije </title>
<div class="page-loader" style="display: none;">
    <div class="loader" style="display: none;">Loading...</div>
</div>
<section class="module bg-dark-30 about-page-header" data-background="{{ ('front/images/banner/banner-bgr-2.png') }}" style="background-image: {{ url('ront/images/banner/banner-bgr.png') }} ; " >
    <div class="container">

        <div class="row">
            <a href="#download">
                <div class="card-animate-download">
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
</section>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">U pripremi</h2>
        <div class="module-subtitle font-serif">        </div>
    </div>
</div>@include('front.banners.mini_baner')