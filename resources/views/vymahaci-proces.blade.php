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
                            <h2>Vymáhací proces</h2>
                        </div>
                        <div class="breadcrumbs text-center">
                            <ul class="page-breadcrumbs">
                                <li><a href="{{ url('/') }}">Domov</a></li>
                                <li><a href="{{ url('sluzby/vymahaci-proces') }}">Vymáhací proces</a></li>
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
                            <h2>Vymáhací proces</h2>
                            {{--<p class="red">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut molestie ipsum. Duis nec odio malesuada, tincidunt dui sed, finibus urna. Donec vitae sem eget lectus pulvinar ultrices at nec ipsum. Pellentesque aliquam, arcu sed vestibulum molestie, metus nulla faucibus nisi, feugiat euismod dolor erat eu odio. Sed gravida enim tristique est gravida.</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end title. it will use all pages title -->

        <!-- start practice content area -->
        <div class="container">
            <div class="row text-center">
                <object id="graph_desktop" data="{{ asset('images/graphs/postup.svg') }}" type="" style="max-width: 720px;"></object>
            </div>
        </div>
    </section> <!-- end practice area -->

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

@section('js')
    <script src="{{ asset('js/svg_graph.js') }}"></script>
@endsection