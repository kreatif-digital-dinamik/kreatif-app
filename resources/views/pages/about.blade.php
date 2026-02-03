@extends('layouts.layout2')
@section('title', __('common.about_page_title'))
@php
    $title = __('common.about_page_header_title');
    $subtitle = __('common.about_page_header_subtitle');
@endphp
@section('content')

    <x-strickyHeader />

    <!--Start About One-->
    <section class="about-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-three__image">
                        <div class="about-three__image__shape">
                            <img src="{{ asset('assets/images/shapes/about-3-shape-1.png') }}" alt="tolak">
                        </div>
                        <div class="about-three__image__shape-two">
                            <img src="{{ asset('assets/images/shapes/about-3-shape-2.png') }}" alt="tolak">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-three__image__one">
                                    <img src="{{ asset('assets/images/gallery/untitled-2.jpg') }}" alt="tolak">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="about-three__image__two">
                                    <img src="{{ asset('assets/images/gallery/untitled-1-3.jpg') }}" alt="tolak">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Company Profile Download Section -->
                    <div class="company-profile-download" style="margin-top: 40px; padding: 30px; background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); border-radius: 15px; border: 1px solid #e2e8f0;">
                        <div class="text-center">
                            <h5 style="color: #1e293b; margin-bottom: 15px; font-weight: 600;">
                                <i class="fas fa-file-pdf" style="color: #dc2626; margin-right: 10px;"></i>
                                {{ __('common.company_profile_title') }}
                            </h5>
                            <p style="color: #64748b; margin-bottom: 20px; font-size: 14px;">
                                {{ __('common.company_profile_description') }}
                            </p>
                            <a href="{{ asset('assets/documents/Company-Profile-Official-2026.pdf') }}" 
                               class="btn btn-primary" 
                               style="background: linear-gradient(135deg, #1e293b 0%, #334155 100%); border: none; padding: 12px 25px; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;"
                               download="Kreatif-Digital-Dinamik-Company-Profile-2026.pdf"
                               onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(30, 41, 59, 0.3)'"
                               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(30, 41, 59, 0.2)'">
                                <i class="fas fa-download"></i>
                                {{ __('common.download_profile') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-three__content">
                        <div class="sec-title-two text-left">
                            <h6 class="sec-title-two__tagline">
                                <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                                {{ __('common.about_who_we_are') }}
                                <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
                            </h6>
                            <h3 class="sec-title-two__title">{{ __('common.about_company_name') }}</h3>
                        </div>
                        <p class="about-three__content__text">
                            {{ __('common.about_company_description_1') }}
                            <br><br>{{ __('common.about_company_description_2') }}
                        </p>
                        <div class="about-three__content__bar"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="about-three__content__list">
                                    <li>{{ __('common.about_service_photography') }}</li>
                                    <li>{{ __('common.about_service_graphic_design') }}</li>
                                    <li>{{ __('common.about_service_social_media') }}</li>
                                    <li>{{ __('common.about_service_digital_marketing') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About One-->
    <section class="why-choose-us-section" style="padding: 10px 0;">
        <div class="container">
            <div class="about-three__content__skill">
                <h5 class="about-three__content__skill__title text-center">{{ __('common.about_why_choose_us') }}</h5>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-4 text-center">
                        <p class="about-three__content__skill__text">
                            <b>{{ __('common.about_high_quality_title') }}</b>
                            {{ __('common.about_high_quality_text') }}
                        </p>
                    </div>

                    <div class="col-md-4 text-center">
                        <p class="about-three__content__skill__text">
                            <b>{{ __('common.about_experienced_title') }}</b>
                            {{ __('common.about_experienced_text') }}
                        </p>
                    </div>
                    
                    <div class="col-md-4 text-center">
                        <p class="about-three__content__skill__text">
                            <b>{{ __('common.about_consistent_title') }}</b>
                            {{ __('common.about_consistent_text') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="about-three__content__quote" style="margin-top: 30px; text-align: center;">
                {{ __('common.about_company_quote') }}
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5 class="about-three__content__author__text text-center">{{ __('common.about_company_tagline') }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start Vision & Mission Section-->
    <section class="about-vision-mission" style="padding: 60px 0 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft text-center" data-wow-delay="100ms">
                    <div class="about-three__content">
                        <div class="sec-title-two text-left">
                            <h6 class="sec-title-two__tagline">
                                <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                                {{ __('common.our_vision_title') }}
                                <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
                            </h6>
                            <h5 class="">{{ __('common.vision_heading') }}</h5>
                        </div>
                        <p class="about-three__content__text">
                            {{ __('common.vision_text') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight text-center" data-wow-delay="200ms">
                    <div class="about-three__content">
                        <div class="sec-title-two text-left">
                            <h6 class="sec-title-two__tagline">
                                <span class="sec-title-two__tagline__left icofont-rounded-double-left"></span>
                                {{ __('common.our_mission_title') }}
                                <span class="sec-title-two__tagline__right icofont-rounded-double-right"></span>
                            </h6>
                            <h5 class="">{{ __('common.mission_heading') }}</h5>
                        </div>
                        <p class="about-three__content__text">
                            {{ __('common.mission_text') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Vision & Mission Section-->

    <section class="funfact-two">
        <div class="container">
            <ul class="list-unstyled funfact-two__list">

                {{-- 1. Projek Korporat Berjaya --}}
                <li class="funfact-two__item count-box">
                    <div class="funfact-two__icon"><i class="icon-briefing"></i></div>
                    <div class="funfact-two__content">
                        {{-- Sila GANTI angka 100 dengan data sebenar anda --}}
                        <h3 class="funfact-two__count"><span class="count-text" data-stop="100" data-speed="1500"></span> +
                        </h3>
                        <p class="funfact-two__text">{{ __('common.stats_successful_projects') }}</p>
                    </div>
                </li>

                {{-- 2. Jenama Dibangunkan --}}
                <li class="funfact-two__item count-box">
                    <div class="funfact-two__icon"><i class="icon-ancestors"></i></div>
                    <div class="funfact-two__content">
                        {{-- Sila GANTI angka 55 dengan data sebenar anda --}}
                        <h3 class="funfact-two__count"><span class="count-text" data-stop="55" data-speed="1500"></span> +
                        </h3>
                        <p class="funfact-two__text">{{ __('common.stats_brands_developed') }}</p>
                    </div>
                </li>

                {{-- 3. Tahun Strategi Jenama --}}
                <li class="funfact-two__item count-box">
                    <div class="funfact-two__icon"><i class="icon-admin"></i></div>
                    <div class="funfact-two__content">
                        {{-- Sila GANTI angka 7 dengan data sebenar anda --}}
                        <h3 class="funfact-two__count"><span class="count-text" data-stop="3" data-speed="1500"></span> +
                        </h3>
                        <p class="funfact-two__text">{{ __('common.stats_years_experience') }}</p>
                    </div>
                </li>

                {{-- 4. Jangkauan Audiens Impak --}}
                <li class="funfact-two__item count-box">
                    <div class="funfact-two__icon"><i class="icon-trophy"></i></div>
                    <div class="funfact-two__content">
                        {{-- Sila GANTI angka 10 dengan data sebenar anda --}}
                        <h3 class="funfact-two__count"><span class="count-text" data-stop="10" data-speed="1500"></span> M+
                        </h3>
                        <p class="funfact-two__text">{{ __('common.stats_audience_reach') }}</p>
                    </div>
                </li>

            </ul>
        </div>
    </section>
    <section class="cta-one cta-one--reverse">
        <div class="cta-one__bg">
            <div class="cta-one__bg__shape"
                style="background-image: url({{ asset('assets/images/shapes/cta-bg-1-rtl.png') }});"></div>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="100ms">
                    <div class="cta-one__content">
                        <div class="cta-one__box">
                            {{-- Shield icon for "Guarantee" --}}
                            <div class="cta-one__box__icon"><span class="icofont-shield"></span></div>
                            <h3 class="cta-one__box__title">{{ __('common.cta_guarantee_title') }}</h3>
                            <p class="cta-one__box__text">
                                {{ __('common.cta_guarantee_description') }}
                            </p>
                        </div>
                        <div class="cta-one__author">
                            {{-- Biarkan ini untuk menunjukkan wajah-wajah pasukan teras anda --}}
                            {{-- <img src="{{ asset('assets/images/resources/cta-1-author-1.jpg') }}" alt="Pakar KDD 1">
                            <img src="{{ asset('assets/images/resources/cta-1-author-2.jpg') }}" alt="Pakar KDD 2">
                            <img src="{{ asset('assets/images/resources/cta-1-author-3.jpg') }}" alt="Pakar KDD 3"> --}}

                            <a class="cta-one__author__rm" href="{{ url('contact') }}">
                                {{ __('common.cta_contact_us') }} <span class="fas fa-arrow-right"></span>
                            </a>
                        </div>
                        <p class="cta-one__content__text">
                            {{ __('common.cta_success_text') }}
                            <a href="{{ url('contact') }}">
                                {{ __('common.cta_start_now') }}
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="100ms">
                    <div class="cta-one__image">
                        {{-- Gantikan dengan imej KDD yang menunjukkan Pasukan/Pusat Operasi/Visual Korporat --}}
                        <img src="{{ asset('assets/images/gallery/1-team.jpg') }}" alt="Strategi KDD">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
    <x-mobileMenu />
    <x-sidebar />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
