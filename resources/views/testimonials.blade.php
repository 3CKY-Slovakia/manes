@extends('layouts.master')

@section('content')
    <!-- =========================
     PAGE TITLE SECTION
    ============================== -->  
    <section class="page-title-area testmonial-title-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-padding">
                        <div class="page-title-content text-center">
                           <p class="text-center">Čo o nás vravia klienti</p>
                           <h2>Referencie</h2>
                        </div>
                        <div class="breadcrumbs text-center">
                           <ul class="page-breadcrumbs">
                               <li><a href="{{ url('/') }}">Domov</a></li>
                               <li><a href="{{ url('referencie') }}">Referencie</a></li>
                           </ul>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <!-- =========================
     START TESTMONIAL SECTION
    ============================== -->

    <section class="testimonial-area testimonial-details-area type-1-bg">
        <div class="welcome-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="Title-area">
                            <h3>Čo o nás vravia klienti</h3>
                            <h2>Referencie</h2>
                            <p>Zistite čo o nás vravia naši klienti. Sme známi tým, že držíme slovo a zameriavame sa na dodanie priaznivých výsledkov v čo najkratšom možnom čase.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title --> 

        <div class="testimonial-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div id="testimonial-details-demo" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="owl-testimonial-content owl-testimonial-details">
                                    <i class="fa fa-quote-left"></i>
                                    <h2> <span><img src="images/testimonial-user.png" alt="user"></span>At Trust, Each Lawyer Focuses Only  On Civil Matters !</h2>
                                    <p>Aiming to provide high quality legal consultancy, support and results for your legal issues. Using their expertise and experience, Trust law firm documents and builds their clients' cases to obtain the best results they could achieve in their particular situation. <br> Trust has been known for doing what he says, aiming to bring favourable results for its customers as soon as possible.</p>                                    
                                </div>
                                <div class="testimonial-quote t-details-quote">
                                    <span>Begha</span>
                                    <span>Art Director, 7oroof Agency.</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="owl-testimonial-content owl-testimonial-details">
                                    <i class="fa fa-quote-left"></i>
                                    <h2> <span><img src="images/testimonial-user-2.png" alt="user"></span>Get Reliable & Effective Legal Soultions At Trust.</h2>
                                    <p>Aiming to provide high quality legal consultancy, support and results for your legal issues. Using their expertise and experience, Trust law firm documents and builds their clients' cases to obtain the best results they could achieve in their particular situation. <br> Trust has been known for doing what he says, aiming to bring favourable results for its customers as soon as possible.</p>                                    
                                </div>
                                <div class="testimonial-quote t-details-quote">
                                    <span>Amr Sadek</span>
                                    <span>UI Developer</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="owl-testimonial-content owl-testimonial-details">
                                    <i class="fa fa-quote-left"></i>
                                    <h2> <span><img src="images/testimonial-user.png" alt="user"></span>At Trust, Each Lawyer Focuses Only  On Civil Matters !</h2>
                                    <p>Aiming to provide high quality legal consultancy, support and results for your legal issues. Using their expertise and experience, Trust law firm documents and builds their clients' cases to obtain the best results they could achieve in their particular situation. <br> Trust has been known for doing what he says, aiming to bring favourable results for its customers as soon as possible.</p>                                    
                                </div>
                                <div class="testimonial-quote t-details-quote">
                                    <span>Begha</span>
                                    <span>Art Director, 7oroof Agency.</span>
                                </div>
                            </div> 
                            <div class="item">
                                <div class="owl-testimonial-content owl-testimonial-details">
                                    <i class="fa fa-quote-left"></i>
                                    <h2> <span><img src="images/testimonial-user-2.png" alt="user"></span>Get Reliable & Effective Legal Soultions At Trust.</h2>
                                    <p>Aiming to provide high quality legal consultancy, support and results for your legal issues. Using their expertise and experience, Trust law firm documents and builds their clients' cases to obtain the best results they could achieve in their particular situation. <br> Trust has been known for doing what he says, aiming to bring favourable results for its customers as soon as possible.</p>                                    
                                </div>
                                <div class="testimonial-quote t-details-quote">
                                    <span>Amr Sadek</span>
                                    <span>UI Developer</span>
                                </div>
                            </div>                           
                        </div>
                        <div class="testimonial-customNavigation t-detalis-customNavigation">
                          <a class="btn prev"><i class="fa fa-long-arrow-left"></i></a>
                          <a class="btn next"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </section><!-- end testimonial area -->

    <!-- =========================
     FUN FACT SECTION
    ============================== -->

    <section class="fun-fact-area">
        <div class="welcome-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="Title-area contact-title h-5-title">
                            <h3>Fun Facts</h3>
                            <h2>Trust In Numbers</h2>
                            <p>Since 1900, Trust start working aiming to build awide range circle of customers, and to win all the cases brought by the customers, have alook in our numbers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title -->

        <!-- START COUNTDOWN -->
        <div class="countdown h-5-countdown-icon">
            <div class="container">
                <div class="row no-margin">
                    <div class="countdown-inner h-5-countdown-inner clearfix">
                        <div class="col-xs-12 col-sm-6 col-md-4 no-padding">
                            <div class="countdown-content h-5-countdown-content">
                                <h2 style="color: #333"><span class="counter" style="color: #333">5</span>+ </h2>
                                <p style="color: #333">Kvalifikovaných operátorov</p>
                            </div>
                            <div class="countdown-icon h-5-countdown-icon">
                                <i class="icon icon-Users"></i>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 no-padding">
                            <div class="countdown-content h-5-countdown-content">
                                <h2 style="color: #333"><span class="counter" style="color: #333">27</span>+</h2>
                                <p style="color: #333">Verných klientov</p>
                            </div>
                            <div class="countdown-icon h-5-countdown-icon">
                                <i class="icon icon-Briefcase"></i>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 no-padding">
                            <div class="countdown-content h-5-countdown-content">
                                <h2 style="color: #333"><span class="counter" style="color: #333">700</span>+</h2>
                                <p style="color: #333">Úspešných prípadov</p>
                            </div>
                            <div class="countdown-icon h-5-countdown-icon">
                                <i class="icon icon-Column"></i>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div> <!-- end countdown -->
    </section>

    <!-- =========================
     START OUR CLIENT SECTION
    ============================== -->

    <section class="our-client-area">
        <div class="welcome-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="Title-area">
                            <h3>Dôverujú nám</h3>
                            <h2>Naši klienti</h2>
                            <p>Results recommend Trust  Law Firm as a good lawyers office, a trusted partners of his customers’ business and a honest adviser and consultant for legal situation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title -->   
        <div class="client-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-content">
                            <div id="client-demo" class="owl-carousel owl-theme home-client-content">
                                <div class="item client-item">
                                    <a href="#"><img src="images/clients/cesmad.png" alt=""></a>
                                </div>
                                <div class="item client-item">
                                    <a href="#"><img src="images/clients/frieb.png" alt=""></a>
                                </div>
                                <div class="item client-item">
                                    <a href="#"><img src="images/clients/hedak.png" alt=""></a>
                                </div>
                                <div class="item client-item">
                                    <a href="#"><img src="images/clients/madast.png" alt=""></a>
                                </div>
                                <div class="item client-item">
                                    <a href="#"><img src="images/clients/schuller_ehklar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="testimonial-customNavigation client-customNavigation">
                              <a class="btn prev"><i class="fa fa-long-arrow-left"></i></a>
                              <a class="btn next"><i class="fa fa-long-arrow-right"></i></a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </section> <!-- end client area -->

@endsection