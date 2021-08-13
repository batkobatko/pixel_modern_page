@extends('layouts.front_layout.front_lay_sec_en')
<!--
    Document Title
    =============================================
    -->
<title>PIXEL - MESSAGES </title>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="{{ url('front/css/pass.css') }}" rel="stylesheet">

<section class="module bg-dark-30 about-page-header" data-background="{{ ('front/images/banner/banner-bgr-res.png') }}" style="background-image: {{ url('ront/images/banner/banner-bgr-res.png') }} ; ">


    <div class="about-area area-padding" id="about">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Contact Us</h2>
                    @if(Session::has('message'))
                        <div class="col-sm-12">
                            <div class="alert alert-success alert-dismissable fade in">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{ Session('message') }}
                            </div>
                        </div>
                    @endif
                    <!--
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                    -->
                </div>
            </div>
            <div class="row multi-columns-row">
                <section class="module">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5 col-sm-offset-1 mb-sm-40">
                                <h4 class="font-alt"></h4>
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2821.836866946594!2d16.733625915054393!3d44.98762497313794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476734a23de8d5df%3A0x1c3d484a9ae7a790!2sDesanke%20Maksimovi%C4%87!5e0!3m2!1sen!2sba!4v1621237083400!5m2!1sen!2sba" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe><a href="https://www.whatismyip-address.com"></a></div>
                                    <style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                    <div class="col-sm-10">
                                        <form method="post" action="{{ url('sendmessage-en') }}">
                                            <div class="form-group">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="tbl" value="{{ encrypt('messages') }}">
                                            </div>
                                             <div class="form-group col-md-12">
                                                <div class="field-1">&nbsp;
                                                    <span class="fa fa-user"></span>
                                                    <input type="text" name="name" required placeholder="Name ">
                                                </div>
                                             </div>
                                            <div class="form-group col-md-12">
                                                <div class="field-1">&nbsp;
                                                    <span class="fa fa-envelope-open"></span>
                                                    <input type="email" name="email" required placeholder="Email ">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="field-1">&nbsp;
                                                    <span class="fa fa-phone"></span>
                                                    <input type="tel" name="phone" required placeholder="Phone number">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <h4 class="font-alt">MESSAGE</h4>
                                                    <textarea style="color: #0f0f0f" name="message" required placeholder="YOUR MESSAGE" class="form-control" rows="12" class="form-control"> </textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button class="btn btn-success" style="alignment: right">Send message</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>





<!--

<div class="col-sm-5">
                                        <h4 class="font-alt"></h4>
                                        <div class="menu">
                                            <div class="row">
                                                 Start contact icon column
                        <div class="col-md-6">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <h4><i class="fa fa-mobile"></i></h4><br>
                                </div></div>

                            <p>
                                Broj tel: &nbsp; +387 65 542 710<br>
                                <span>Radno vrijeme: Ponedeljak-Petak (8.00-15.00)</span>
                            </p>
                            <br>

                        </div>
                    </div>

            <div class="row">
                 Start contact icon column
                <div class="col-md-5">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i><br><br></div></div>
                    <p>
                        Email:&nbsp;it.sasa.novakovic@gmail.com<br>
                        <span>Web:&nbsp;<a href="://www.pixelprijedor.com">www.pixelprijedor.com</a></span>
                    </p><br>

                </div>
            </div>

            <div class="row">
                Start contact icon column
                <div class="col-md-6">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-map-marker"></i><br><br></div></div>
                    <p>
                        Lokacija: PIXEL Prijedor <br>
                        Desanke Maksimović 23.<br>
                        <span>79 000 Prijedor, <br> Republika&nbsp;Srpska,&nbsp;Bosna&nbsp;i&nbsp;Hercegovina</span>
                    </p><br>

                </div>
            </div>
        </div>

    </div>

    -->

















        </form>

        </div>
    </div>

</div>    </section>