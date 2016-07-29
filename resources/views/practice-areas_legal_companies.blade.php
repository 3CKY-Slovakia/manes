@extends('layouts.master')

@section('content')

    <!-- =========================
         PAGE TITLE SECTION
    ============================== -->
    <section class="page-title-area-small practice-block-title-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-padding">
                        <div class="page-title-content text-center">
                            {{--<p>Služby pre</p>--}}
                            <h2>Právnické osoby</h2>
                        </div>
                        <div class="breadcrumbs text-center">
                            <ul class="page-breadcrumbs">
                                <li><a href="{{ url('/') }}">Domov</a></li>
                                <li><a href="{{ url('sluzby/pravnicke-osoby') }}">Pre právnícké osoby</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     START PRACTICE SECTION
    ============================== -->

    <section class="practice-area">
        <div class="welcome-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="Title-area">
                            <h3>Služby pre</h3>
                            <h2>Právnicke osoby</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut molestie ipsum. Duis nec odio malesuada, tincidunt dui sed, finibus urna. Donec vitae sem eget lectus pulvinar ultrices at nec ipsum. Pellentesque aliquam, arcu sed vestibulum molestie, metus nulla faucibus nisi, feugiat euismod dolor erat eu odio. Sed gravida enim tristique est gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title -->

        <!-- start practice content area -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>Mimos&uacute;dne inkaso</li>
                        <li>Kompletn&aacute; spr&aacute;va pohľad&aacute;vky</li>
                        <li>Služby Call &ndash; centra</li>
                        <li>Zasielanie hromadn&yacute;ch upomienok</li>
                        <li>Priame n&aacute;v&scaron;tevy dlžn&iacute;ka</li>
                        <li>Uzatv&aacute;ranie a&nbsp;nastavovanie spl&aacute;tkov&yacute;ch kalend&aacute;rov</li>
                        <li>Kontrola spl&aacute;tkov&yacute;ch kalend&aacute;rov</li>
                        <li>Spisovanie not&aacute;rskych z&aacute;pisov</li>
                        <li>Rann&eacute; inkaso - vym&aacute;hacie riadenie do 30 dn&iacute;</li>
                        <li>Sekund&aacute;rne inkaso &ndash; Pohľad&aacute;vky star&scaron;ie ako 360 dn&iacute; a&nbsp;v&nbsp;spr&aacute;ve ich mala jedna a&nbsp;viac inkasn&yacute;ch agent&uacute;r.</li>
                        <li>Leasing</li>
                        <li>Kontrola predmetov financovania leasingu</li>
                        <li>Vyhľad&aacute;vanie motorov&yacute;ch vozidiel (detekt&iacute;vna činosť)</li>
                        <li>S&uacute;dne a&nbsp;pr&aacute;vne zastupovanie</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Zabezpečenie platobn&eacute;ho rozkazu</li>
                        <li>Vym&aacute;hanie dlžn&yacute;ch spl&aacute;tok u&nbsp;akt&iacute;vnych leasingov&yacute;ch zml&uacute;v</li>
                        <li>Vym&aacute;hanie spl&aacute;tok leasingov u&nbsp;neakt&iacute;vnych zml&uacute;v</li>
                        <li>Znaleck&eacute; posudky pri predmetoch financovania leasingu</li>
                        <li>Podanie trestn&yacute;ch ozn&aacute;men&iacute;</li>
                        <li>S&uacute;dne a&nbsp;pr&aacute;vne zastupovanie</li>
                        <li>Zabezpečenie platobn&eacute;ho rozkazu</li>
                        <li>Exek&uacute;cia
                            <ul>
                                <li>Leasing</li>
                                <li>Bankov&eacute; produkty</li>
                                <li>Nebankov&eacute; produkty</li>
                                <li>Poisťovn&iacute;ctvo</li>
                                <li>Obchod</li>
                                <li>Vydavateľstvo</li>
                                <li>Doprava a&nbsp;logistika</li>
                                <li>Prisp&ocirc;sobenie sa podľa oblasti klienta</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- end practice area -->

    <!-- =========================
     START PRACTICE SECTION
    ============================== -->

    <section class="practice-area home-2-practice-area type-1-bg">
        <div class="welcome-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="Title-area">
                            <h3>Všetky oblasti</h3>
                            <h2>Ďalšie služby</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut molestie ipsum. Duis nec odio malesuada, tincidunt dui sed, finibus urna. Donec vitae sem eget lectus pulvinar ultrices at nec ipsum. Pellentesque aliquam, arcu sed vestibulum molestie, metus nulla faucibus nisi, feugiat euismod dolor erat eu odio. Sed gravida enim tristique est gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title -->

        <!-- start practice content area -->
        <div class="container">
            <div class="row">
                <div class="h-2-practice-content clearfix">
                    <div class="col-sm-4 col-md-4">
                        <div class="h-2-p-c-details">
                            <div class="h-2-p-c-default">
                                <i class="fa fa-legal"></i>
                                <h2><a href="{{ url('sluzby/pravnicke-osoby') }}">Právnické osoby</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut molestie ipsum. Duis nec odio malesuada, tincidunt dui sed, finibus urna.</p>
                                <a href="{{ url('sluzby/pravnicke-osoby') }}">Viac <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="h-2-p-c-details">
                            <div class="h-2-p-c-default">
                                <i class="fa  fa-male"></i>
                                <h2><a href="{{ url('sluzby/fyzicke-osoby') }}">Fyzické osoby</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut molestie ipsum. Duis nec odio malesuada, tincidunt dui sed, finibus urna.</p>
                                <a href="{{ url('sluzby/fyzicke-osoby') }}">Viac <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="h-2-p-c-details">
                            <div class="h-2-p-c-default">
                                <i class="fa fa-info"></i>
                                <h2><a href="{{ url('sluzby/doplnkove-sluzby') }}">Doplnkové služby</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut molestie ipsum. Duis nec odio malesuada, tincidunt dui sed, finibus urna.</p>
                                <a href="{{ url('sluzby/doplnkove-sluzby') }}">Viac <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end practice area -->

@endsection