@extends('layouts.front_layout.front_lay_sec_en')
<!--
    Document Title
    =============================================
    -->
<title>PIXEL - POPULAR</title>
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
                    @include('layouts.front_layout.front_sidebar_blog_en')
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="post">

                            <div class="post-entry">
                                <div class="module-subtitle font-serif"><h3>Web store LARA SHOP</h3>
                                </div>
                                    <BLOCKQUOTE>
                                        Web store "Lara Shop" is our project that we are very proud of. It is a completely autonomous Web application intended for small and medium-sized stores.
                                        Lara Shop was made in the Laravel framework, and the languages used are PHP, JavaScript, CSS, SCSS, HTML.                                     </BLOCKQUOTE>
                                    <div class="post-meta">Autor:&nbsp;<a href="/en/#o-nama">Dipl ing Saša Novaković</a>&nbsp;| 23 Mart | Comments |&nbsp;<a href="#">Technical documentation&nbsp;</a>|<a href="/en/#cms"> CREATE CMS WEBSITE</a>
                                            </div>
                                    </div>
                                    <hr class="divider-w mt-10 mb-20">

                                <div class=""><div class="post-header font-alt">
                                        <h1 class="post-title">LARA SHOP</h1></div>
                                    <ul>
                                        <li> Access to all parameters of the WEB store is maximally simplified, and it comes down to filling in predefined items (photos, product specifications, attributes, prices) that you want to change on your page.
                                        </li>
                                        <li> Products are divided into sections (eg men / women / children /) into categories (eg T-shirts, jeans, sneakers, tools, household appliances), and the categories are again divided into products / articles.
                                        </li>
                                        <li> Lara Shop has a filtering system that depends on the parameters and values ​​that suit you, and thus the system allows you to narrow and direct the customer to a specific product.
                                        </li>
                                        <li> The Lara Shop system also allows you to give discounts based on sections and categories.
                                        </li>
                                        <li> The "coupon" module is a special add-on. Here you can generate an unlimited number of codes. You can generate codes automatically or manually, assign them to all registered users (automatically) or to individual customers as a reward for any item or group of items. The coupon can be narrowly limited in time, and the discount can be in percentages or in the current currency.
                                        </li>
                                        <li> The "Orders" module enables efficient recording and monitoring of the purchase and delivery system, as well as an overview of all active parameters. This model also includes automatic notification of the user via the message system (mail service) of any change in the status of the shipment. In addition to the messaging system, it is possible to activate the SMS notification system if necessary.
                                        </li>
                                        <li> The Lara Shop system, within the standard setting, enables automatic generation of electronic invoices (invoice) for purchased goods in PDF format.
                                        </li>
                                        <li> A special modular segment of the "Orders" system includes printing and automatic generation of bar codes for each order individually. With the coding system, we envisaged harmonization and implementation with courier services.
                                        </li>
                                        <li> Administration is also enabled. After the initial settings of the administrator account, you are subsequently able to change the account code, wallpaper (avatar) or phone number.
                                        </li>
                                        <li> One of the key modules is the "Shipments" module. Here is a list of all current countries in the world, and for each of them it is possible to enter the appropriate postage.
                                        </li>
                                        <li> Users of the WEB store services are able to purchase in the registration mode and outside it. Registration mode has many benefits over anonymous shopping. Registered users have the opportunity to receive generated coupons from the seller via mail service or sms module, have the ability to view purchased items, which includes all important parameters, starting with photos of purchased items, dates, attributes, etc.
                                        </li>
                                        <li> Users of the services of our WEB store have the opportunity to choose the method of purchase, cash on delivery or via PayPal (and possibly card payment) in all countries where PayPal is represented.
                                        </li>
                                        <hr class="divider-w mt-10 mb-20">
                                        <BLOCKQUOTE>See an example of a modern Lara Shop stores  <a href="https://shop.vunena.com">LaraShop</a><br>
                                            check Technical documentation<a href="{{ ('/en/#download') }}">&nbsp;&nbsp;Download</a>
                                        </BLOCKQUOTE>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('front.banners.mini_baner_en')

    </body>
