@extends('layouts.front_layout.front_lay_sec')
<!--
    Document Title
    =============================================
    -->
<title>PIXEL - PRIJAVA </title>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="{{ url('front/css/pass.css') }}" rel="stylesheet">

    <section class="home-section home-fade bg-dark-30 agency-page-header" data-background="{{ ('front/images/banner/banner-bgr-res.png') }}" style="background-image: {{ url('ront/images/banner/banner-bgr-res.png') }} ; ">

                    <div class="content-1">
                        <header>Prijavi&nbsp;se</header>
                        <form action="#">
                            <div class="field-1">
                                <span class="fa fa-user"></span>
                                <input type="text" required placeholder="Email ">
                            </div>
                            <div class="field-1 space">
                                <span class="fa fa-lock"></span>
                                <input type="password" class="pass-key" required placeholder="Lozinka">
                                <span class="vidi">vidi&nbsp;</span>
                            </div>
                            <div class="pass">
                                <a href="#">Zaboravili ste lozinku?</a><br>&nbsp;
                            </div>
                            <div class="field-1">
                                <input type="submit" value="LOGIN">
                            </div>
                        </form>
                        <div class="login"><br>&nbsp;Uloguj se pomoću:</div>
                       <div class="row multi-columns-row col-sm-5">
                           <div class="links">
                            <a href="#" class="facebook fa fa-facebook"></a>
                                <i class=""><span></span></i>
                                <i class="instagram"><span></span></i>
                            </div>
                        </div>
                        <div class="signup">
                            <a href="#">Kreiraj nalog</a>
                        </div>
                    </div>
    </section>
<script>
    const pass_field = document.querySelector('.pass-key');
    const showBtn = document.querySelector('.vidi');
    showBtn.addEventListener('click', function(){
        if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "sakrij ";
            showBtn.style.color = "#3498db";
        }else{
            pass_field.type = "password";
            showBtn.textContent = "vidi";
            showBtn.style.color = "#222";
        }
    });
</script>