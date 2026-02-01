@extends('layouts.layout2')
@section('title', __('common.services_page_title'))
@php
    $title = __('common.Our Services Title');
    $subtitle = __('common.services_portfolio_subtitle');
@endphp
@section('content')

<x-strickyHeader/>

<style>
    .service-one__item__image-fixed {
        height: 250px; /* You can adjust this value as needed */
        width: 100%;
        object-fit: cover;
        object-position: center;
    }
    .service-details__sidebar__nav li a {
        padding: 10px 20px;
    }
</style>

<section class="service-one">
    <div class="container">
        <div class="sec-title-two text-center">
            <h6 class="sec-title-two__tagline">
                <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                {{ __('common.services_tagline') }}
                <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
            </h6>
            <h3 class="sec-title-two__title">{{ __('common.services_main_title') }}</h3>
        </div>
        
        {{-- Navigation for 5 services --}}
        <div class="service-details__sidebar">
            <ul class="list-unstyled service-details__sidebar__nav justify-content-center d-flex flex-wrap">
                <li><a href="#service-1">Strategi Pemasaran Digital</a></li>
                <li><a href="#service-2">Pengurusan Media Sosial</a></li>
                <li><a href="#service-3">Penerbitan Media Korporat</a></li>
                <li><a href="#service-4">Rekaan Grafik Korporat</a></li>
                <li><a href="#service-5">Kajian Kes & Laporan</a></li>
            </ul>
        </div>
    </div>
</section>

<div id="service-1" class="service-details">
    <div class="container">
        <div class="service-details__content">
            <h2 class="service-details__title">Strategi Pemasaran Digital</h2>
            <p class="service-details__text">
                Content for Strategi Pemasaran Digital.
            </p>
        </div>
    </div>
</div>

<div id="service-2" class="service-details">
    <div class="container">
        <div class="service-details__content">
            <h2 class="service-details__title">Pengurusan Media Sosial</h2>
            <p class="service-details__text">
                Content for Pengurusan Media Sosial.
            </p>
        </div>
    </div>
</div>

<div id="service-3" class="service-details">
    <div class="container">
        <div class="service-details__content">
            <h2 class="service-details__title">Penerbitan Media Korporat</h2>
            <p class="service-details__text">
                Kreatif Digital Dinamik (KDD) menyediakan solusi menyeluruh untuk memastikan bisnes anda bukan sahaja 
                kelihatan lebih menarik, tetapi juga mendapat hasil yang berterusan. Servis **Penerbitan Media Korporat** kami 
                adalah tulang belakang kepada strategi visual jenama anda.
            </p>
        </div>
    </div>
</div>

<div id="service-4" class="service-details">
    <div class="container">
        <div class="service-details__content">
            <h2 class="service-details__title">Rekaan Grafik Korporat</h2>
            <p class="service-details__text">
                Content for Rekaan Grafik Korporat.
            </p>
        </div>
    </div>
</div>

<div id="service-5" class="service-details">
    <div class="container">
        <div class="service-details__content">
            <h2 class="service-details__title">Kajian Kes & Laporan</h2>
            <p class="service-details__text">
                Content for Kajian Kes & Laporan.
            </p>
        </div>
    </div>
</div>

<x-footer/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection
