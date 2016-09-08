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
                            <h2>Etický kódex</h2>
                        </div>
                        <div class="breadcrumbs text-center">
                            <ul class="page-breadcrumbs">
                                <li><a href="{{ url('/') }}">Domov</a></li>
                                <li><a href="{{ url('sluzby/fyzicke-osoby') }}">Etický kódex</a></li>
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
                            <h2>Etický kódex</h2>
                            <div class="row">
                                <p class="col-md-6">
                                    <strong class="colored">Všeobecné zásady MANES</strong><br>
                                    Hlavným účelom etického kódexu MANES je dodržiavanie právnych a etických noriem vo vzťahu ku klientom taktiež k dlžníkom, ale tiež voči svojim vlastným zamestnancom a ostatným tretím spolupracujúcim stranám. Etický kódex znamená postupovať podľa platných právnych predpisov a rešpektovať dobré mravy.
                                </p>

                                <p class="col-md-6">
                                    <strong class="colored">Diskriminácia</strong><br>
                                    Naša spoločnosť týmto tiež deklaruje nulovú toleranciu voči akémukoľvek prejavu diskriminácie na základe pohlavia, rasy, sexuálnej orientácie, vierovyznania, veku, pôvodu alebo akéhokoľvek iného dôvodu definovaného zákonom.
                                </p>
                            </div>
                            <div class="row">
                                <p class="col-md-6">
                                    <strong class="colored">Štandardy MANES</strong><br>
                                    Profesionálny prístup, spolahlivosť , efektivita a diskrétnosť sú štandardy našej spoločnosti, na ktoré dbáme  a dodrživame pri všetkých činnostiach a služiebách určených našim obchodným partnerom.
                                    <br>
                                    Naša spoločnosť kladie dôraz na dodržiavanie a rešpektovanie základných ľudských práv, etických a morálnych noriem a ochrany ľudských práv.
                                    Všetky naše pracovné postupy sú realizované na odbornej a profesionálnej úrovni s cieľom zachovať si dobré meno. Cieľom je taktiež zachovať dobrú povesť nášho klienta a našich extérnych spolupracovníkov.  Pri všetkých našich činnostiach a rozhodnutiach je podmienkou striktne dodržiavať aktuálne platné zákony a iné externé aj interné predpisy.
                                </p>
                                <p class="col-md-6">
                                    <strong class="colored">Diskrétnosť</strong><br>
                                    Jednou z našich najväčších zásad je zachovanie absolútnej diskrétnosti o zmluvných podmienkach, zverených, ale i nových skutočnostiach súvisiacich s výkonom našich činností, s cieľom zachovať nestrannosť a lojalitu voči klientom, ale i všetkým ostatným spolupracujúcim.
                                    <br>
                                    Naša spoločnosť využíva služby rôznych extérnych spoločností verejne dostupných databáz a rôznych sociálnych sieťach ktré taktiež dbajú na dodržiavanie právnych noriem a etického kódexu.
                                </p>
                            </div>
                            <div class="row">
                                <p class="col-md-12">
                                    <strong class="colored">Ochrana osobných údajov</strong><br>
                                    Všetky osobné údaje zverené do našej správy striktne podliehajú platnej úprave zákona č. 428/2002 Z. z. o ochrane osobných údajov. Dodržiavanie podmienok platnej právnej úpravy je pravidelne monitorované a kontrolované. Všetky podmienky vyššie uvedenej platnej právnej úpravy sú tiež premietnuté do všetkých procesov súvisiacich s výkonom našich služieb.    
                                    <br>
                                    Náš tým dbá na 100% zabezpečenie vlastných i zverejných informácií a
                                    kompletnú evidenciu všetkých dokumentov v písomnej, ale i elektronickej podobe. Kladieme dôraz na zabezpečenie bez možnosti straty, zneužitia alebo znehodnotenia.
                                    <br>
                                    Hardvérové a Softvérové riešenia, ktoré plnia funkciu úložiska a správy údajov v elektronickej podobe, sú zabezpečené pred možným napadnutím a zneužitím na najmodernejšej technologickej úrovni a sú tiež viac krát zálohované.
                                    <br>
                                    Právne oddelenie našej spoločnosti vypracovalo project na ochranu osobných údajov, ktorý je súčasťou zakladateľských listín spoločnosti.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title -->


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