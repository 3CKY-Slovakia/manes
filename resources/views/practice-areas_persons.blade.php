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
                            <h2>Fyzické osoby</h2>
                        </div>
                        <div class="breadcrumbs text-center">
                            <ul class="page-breadcrumbs">
                                <li><a href="{{ url('/') }}">Domov</a></li>
                                <li><a href="{{ url('sluzby/fyzicke-osoby') }}">Pre Fyzické osoby</a></li>
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
                            <h2>Fyzické osoby</h2>
                            <p>Fyzickým osobám sa naša spoločnosť venuje v projekte e-inkaso, kde si klienti prostredníctvom internetovej stránky www.einkaso.sk vložia svoju pohľadávku do našej správy bezplatne a pohodlne prostredníctvom internetu. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title -->

        <!-- start practice content area -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul style="list-style: none" class='justify big'>
                        <li><strong class="colored">Bezplatné poradenstvo</strong><br>Naša spoločnosť poskytuje komplexný balík právneho poradenstva v oblasti vymáhania pohľadávok. Operátorky aj inkasný špecialisti sú k dispozícií telefonicky alebo prostredníctvom elektronického formuláru.</li>
                        <li><strong class="colored">Analýza pohľadávky</strong><br>Každá pohľadávka prejde dôkladnou analýzou spracovávateľov a informačným systémom.</li>
                        <li><strong class="colored">Mimosúdne inkaso</strong><br>Mimosúdne inkaso je služba tretej strany, ktorá využíva všetky zákonné prostriedky na vyriešenie pohľadávky rýchlo, efektívne a mimosúdne.</li>
                        <li><strong class="colored">Zaistenie pohľadávky</strong><br>je služba, pomocou ktorej sa nezabezpečená pohľadávka zaistí splátkovým kalendárom, uznaním dlhu, zmenkou a notárskou zápisnicou s priamou vykonateľnosťou.</li>
                     </ul>
                </div>
                <div class="col-md-6">
                    <ul style="list-style: none" class='justify big'>
                        <li><strong class="colored">Vytváranie splátkových kalendárov a ich kontrola</strong><br>Pre úspešnejšie vymáhanie pohľadávok zabezpečujeme dlžníkom bezplatné nastavovanie splátkových kalendárov na mieru a ich následnú kontrolu.</li>
                        <li><strong class="colored">Odkúpenie pohľadávky</strong><br>Ak nemáte záujem o spravovanie pohľadávky a s pohľadávkou máte iba starosti, naša spoločnosť po bezplatnej komplexnej analýze môže odkúpiť Vašu pohľadávku do svojho portfólia</li>
                        <li><strong class="colored">Zabezpečenie platobného rozkazu a exekúcie</strong><br>Ak prejde vaša pohľadávka naším interným procesom mimosúdneho inkasa neúspešne, je možné vašu pohľadávku postúpiť na súdne vymáhanie, kde je možné zabezpečiť platobný rozkaz a následne exekúciu.</li>
                        <li><strong class="colored">Súdne vymáhanie</strong><br>V prípade neúspešného mimosúdneho vymáhania zabezpečuje naša spoločnosť aj kompletné právne služby.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- end practice area -->
    <img class="maneslogo" src="{{ asset('images/logo-bg.png')  }}">

    <!-- =========================
     START PRACTICE SECTION
    ============================== -->

    {{--<section class="practice-area home-2-practice-area type-1-bg">--}}
        {{--<div class="welcome-title-area">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-12 col-sm-12">--}}
                        {{--<div class="Title-area">--}}
                            {{--<h3>Všetky oblasti</h3>--}}
                            {{--<h2>Ďalšie služby</h2>--}}
                            {{--<p class="red">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut molestie ipsum. Duis nec odio malesuada, tincidunt dui sed, finibus urna. Donec vitae sem eget lectus pulvinar ultrices at nec ipsum. Pellentesque aliquam, arcu sed vestibulum molestie, metus nulla faucibus nisi, feugiat euismod dolor erat eu odio. Sed gravida enim tristique est gravida.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div> <!-- end title. it will use all pages title -->--}}

        {{--<!-- start practice content area -->--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="h-2-practice-content clearfix">--}}
                    {{--<div class="col-sm-4 col-md-4">--}}
                        {{--<div class="h-2-p-c-details">--}}
                            {{--<div class="h-2-p-c-default">--}}
                                {{--<i class="fa fa-legal"></i>--}}
                                {{--<h2><a href="{{ url('sluzby/pravnicke-osoby') }}">Právnické osoby</a></h2>--}}
                                {{--<p class="red">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut molestie ipsum. Duis nec odio malesuada, tincidunt dui sed, finibus urna.</p>--}}
                                {{--<a href="{{ url('sluzby/pravnicke-osoby') }}">Viac <i class="fa fa-long-arrow-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-4 col-md-4">--}}
                        {{--<div class="h-2-p-c-details">--}}
                            {{--<div class="h-2-p-c-default">--}}
                                {{--<i class="fa  fa-male"></i>--}}
                                {{--<h2><a href="{{ url('sluzby/fyzicke-osoby') }}">Fyzické osoby</a></h2>--}}
                                {{--<p class="red">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut molestie ipsum. Duis nec odio malesuada, tincidunt dui sed, finibus urna.</p>--}}
                                {{--<a href="{{ url('sluzby/fyzicke-osoby') }}">Viac <i class="fa fa-long-arrow-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-4 col-md-4">--}}
                        {{--<div class="h-2-p-c-details">--}}
                            {{--<div class="h-2-p-c-default">--}}
                                {{--<i class="fa fa-info"></i>--}}
                                {{--<h2><a href="{{ url('sluzby/doplnkove-sluzby') }}">Doplnkové služby</a></h2>--}}
                                {{--<p class="red">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut molestie ipsum. Duis nec odio malesuada, tincidunt dui sed, finibus urna.</p>--}}
                                {{--<a href="{{ url('sluzby/doplnkove-sluzby') }}">Viac <i class="fa fa-long-arrow-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section> <!-- end practice area -->--}}

@endsection
