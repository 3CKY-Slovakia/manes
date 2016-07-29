@extends('layouts.master')

@section('css')
    <style>
        header{
            background: #fff!important;
        }
    </style>
@endsection

@section('content')
    <!-- =========================
     PAGE TITLE SECTION
    ============================== -->
    <div id="map" class="big_map"></div>

    <!-- =========================
     START CONTACT US SECTION
    ============================== -->

    <section class="contact-us-1">
        <div class="welcome-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="Title-area">
                            <h3>Neváhajte nás kontaktovať</h3>
                            <h2>Konzultácia zdarma</h2>
                            <p>Kontaktujte nás s konkrétnymi otázkami a jeden z našich priateľských zamestnancov Vám odpovie čo najskôr. Sme tu pre Vás.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title -->
        <div class="contact-us-1-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-8 no-padding">
                        <div class="contact-us-1-form">
                            <form>
                                <div class="col-sm-6 no-padding-left">
                                    <input type="text" class="form-control" id="Name" placeholder="MENO A PRIEZVISKO">
                                </div>
                                <div class="col-sm-6 no-padding-right">
                                    <input type="email" class="form-control" id="Email" placeholder="EMAIL"> 
                                </div>
                                <div class="col-sm-12 no-padding contact-us-custom-padding">
                                    <input type="text" class="form-control" id="Subject" placeholder="PREDMET">
                                </div>
                                <div class="col-sm-12 no-padding contact-us-custom-padding">
                                    <textarea class="form-control" rows="8" id="Message" placeholder="SPRÁVA"></textarea>
                                </div>
                                <div class="col-sm-12 no-padding contact-us-custom-padding">
                                    <button type="button" id="contact_submit" class="btn btn-dm">ODOSLAŤ SPRÁVU</button>
                                </div>
                            </form>                        
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 no-padding-right">
                        <div class="address-area">
                            <!-- address title -->
                            <div class="Title-area home-8-title-area contact-1-title-area">
                                <p>Trust is a business theme perfectly suited legal advisers and offices, lawyers, attorneys, and other legal and law related services. </p>
                            </div>                        
                        </div>
                        <div class="col-md-6">
                            <div class="address-details">
                                <span>Phone :</span>
                                <span><i class="fa  fa-phone"></i> +421 948 773 307</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="address-details">
                                <span>Email :</span>
                                <span><i class="fa   fa-envelope"></i>info@manes.sk</span>
                            </div>
                        </div>
                        <div class="view-location">
                            <span>Address :</span>
                            <span><i class="fa fa-map-marker"></i> Ružová dolina 6, 821 08 Bratislava</span>
                            <a href="https://www.google.sk/maps/place/Ru%C5%BEov%C3%A1+dolina+480%2F6,+821+08+Bratislava/@48.1541508,17.1353935,17z/data=!3m1!4b1!4m5!3m4!1s0x476c893398b941b1:0xf6ff7fc1b39b4cd1!8m2!3d48.1541508!4d17.1375822?hl=sk" target="_blank">Pozrieť na mape</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section> <!-- end contact us area -->

@endsection

@section('js')
    <script src="{{ asset('js/map.js') }}"></script>
    <script>
        if ($(window).scrollTop() > 10) {
            $(".p-title-header-area").css("background-color", "#fff");

            //$("#blue-logo").animate({ opacity: 1 });
            //$("#white-logo").animate({ opacity: 0 });
        } else {
            $(".p-title-header-area").css("background-color", "#fff");
            //$("#blue-logo").animate({ opacity: 0 });
            //$("#white-logo").animate({ opacity: 1 });
        }

        if ($(window).scrollTop() > 10 && $(window).width() > 992) {
            $(".p-title-header-area").css("background-color", "#fff");
            $(".p-title-header-area").addClass("ds_padding");
            $(".p-title-header-area div > div > ul > li > a").css("color", "#333");

            $("#blue-logo").css('opacity', 1 );
            $("#white-logo").css('opacity', 0 );
        } else {
            $(".p-title-header-area").css("background-color", "transparent");
            $(".p-title-header-area").removeClass("ds_padding");
            $(".p-title-header-area div > div > ul > li > a").css("color", "#333");

            $("#blue-logo").css('opacity', 1 );
            $("#white-logo").css('opacity', 0 );
        }

        if ($(window).scrollTop() > 10) {
            $(".header-12-bg").addClass("menuzord-12");
        } else {
            $(".header-12-bg").removeClass("menuzord-12");
        }

        if ($(window).scrollTop() > 30) {
            $(".header-13").css("padding-top", "0px");
        } else {
            $(".header-13").css("padding-top", "30px");
        }
    </script>
@endsection