@extends('layout.layout')

@section('content')

    @include('partials.home.slide')

    @include('partials.home.quality')

    @include('partials.home.domain')

    @include('partials.home.pricing')

    @include('partials.home.newsletter')

{{--    @include('partials.home.stats')--}}

    @include('partials.home.testy')

    @include('partials.home.service')

    @include('partials.home.info')

    @include('partials.home.domain_pricing')

    @include('partials.home.builder')

    @include('partials.home.trophy')

@endsection