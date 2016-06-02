@extends('layouts.master')

@section('content')
    @include('sections.preloader')
    @include('sections.slider')
    @include('sections.countdown')
    @include('sections.welcome')
    {{--@include('sections.practice')--}}
{{--    @include('sections.testimonials')--}}
{{--    @include('sections.our_team')--}}
    @include('sections.clients')
    @include('sections.contact_us')
@endsection