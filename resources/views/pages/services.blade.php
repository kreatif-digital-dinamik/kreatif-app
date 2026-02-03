@extends('layouts.layout2')
@section('title', __('common.services_page_title'))
@php
    $title = __('common.Our Services Title');
    $subtitle = __('common.services_portfolio_subtitle');
@endphp
@section('content')

<x-strickyHeader/>

<!-- Top Navigation for Services -->
<div class="container my-4">
    <nav class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="#service1" class="btn btn-outline-primary">{{ __('common.service_1_title') }}</a>
        <a href="#service2" class="btn btn-outline-primary">{{ __('common.service_2_title') }}</a>
        <a href="#service3" class="btn btn-outline-primary">{{ __('common.service_3_title') }}</a>
        <a href="#service4" class="btn btn-outline-primary">{{ __('common.service_4_title') }}</a>
        <a href="#service5" class="btn btn-outline-primary">{{ __('common.service_5_title') }}</a>
        <a href="#service6" class="btn btn-outline-primary">{{ __('common.service_6_title') }}</a>
        <a href="#service7" class="btn btn-outline-primary">{{ __('common.service_7_title') }}</a>
    </nav>
</div>
<style>
    .service-one__item__image-fixed {
        height: 250px; /* You can adjust this value as needed */
        width: 100%;
        object-fit: cover;
        object-position: center;
    }
    .service-carousel-small {
        max-width: 480px;
        margin-left: auto;
        margin-right: auto;
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
                
                {{-- 5 Services --}}
                <!-- Service Sections as Divs -->
                <div id="service1" class="service-section my-5 p-4 border rounded bg-white">
                    <div class="row align-items-center">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <img src="{{ asset('/assets/images/new-images/IMG_0091-comp.jpg') }}" alt="{{ __('common.service_1_image_alt') }}" style="width:100%; max-width:350px; height:auto; object-fit:cover; border-radius:15px;" class="mb-3">
                        </div>
                        <div class="col-md-7">
                            <h2>{{ __('common.service_1_heading') }}</h2>
                            <p>{!! __('common.service_1_intro') !!}</p>
                            <p><strong>{{ __('common.service_1_scope_heading') }}</strong></p>
                            <ul>
                                <li>{{ __('common.service_1_scope_1') }}</li>
                                <li>{{ __('common.service_1_scope_2') }}</li>
                                <li>{{ __('common.service_1_scope_3') }}</li>
                                <li>{{ __('common.service_1_scope_4') }}</li>
                                <li>{{ __('common.service_1_scope_5') }}</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div id="service2" class="service-section my-5 p-4 border rounded bg-white">
                    <div class="row align-items-center flex-md-row-reverse">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <img src="{{ asset('/assets/images/gallery/untitled-4-2.jpg') }}" alt="{{ __('common.service_2_image_alt') }}" style="width:100%; max-width:350px; height:auto; object-fit:cover; border-radius:15px;" class="mb-3">
                        </div>
                        <div class="col-md-7">
                            <h2>{{ __('common.service_2_heading') }}</h2>
                            <p>{!! __('common.service_2_intro') !!}</p>
                            <p><strong>{{ __('common.service_2_scope_heading') }}</strong></p>
                            <ul>
                                <li>{{ __('common.service_2_scope_1') }}</li>
                                <li>{{ __('common.service_2_scope_2') }}</li>
                                <li>{{ __('common.service_2_scope_3') }}</li>
                                <li>{{ __('common.service_2_scope_4') }}</li>
                                <li>{{ __('common.service_2_scope_5') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="service3" class="service-section my-5 p-4 border rounded bg-white">
                    <div class="row align-items-center">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <img src="{{ asset('/assets/images/gallery/untitled-1-2.jpg') }}" alt="{{ __('common.service_3_image_alt') }}" style="width:100%; max-width:350px; height:auto; object-fit:cover; border-radius:15px;" class="mb-3">
                        </div>
                        <div class="col-md-7">
                            <h2>{{ __('common.service_3_heading') }}</h2>
                            <p>{!! __('common.service_3_intro') !!}</p>
                            <p><strong>{{ __('common.service_3_scope_heading') }}</strong></p>
                            <ul>
                                <li>{{ __('common.service_3_scope_1') }}</li>
                                <li>{{ __('common.service_3_scope_2') }}</li>
                                <li>{{ __('common.service_3_scope_3') }}</li>
                                <li>{{ __('common.service_3_scope_4') }}</li>
                                <li>{{ __('common.service_3_scope_5') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="service4" class="service-section my-5 p-4 border rounded bg-white">
                    <div class="row align-items-center flex-md-row-reverse">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <img src="{{ asset('/assets/images/new-images/image-ws2.jpeg') }}" alt="{{ __('common.service_4_image_alt') }}" style="width:100%; max-width:350px; height:auto; object-fit:cover; border-radius:15px;" class="mb-3">
                        </div>
                        <div class="col-md-7">
                            <h2>{{ __('common.service_4_heading') }}</h2>
                            <p>{!! __('common.service_4_intro') !!}</p>
                            <p><strong>{{ __('common.service_4_scope_heading') }}</strong></p>
                            <ul>
                                <li>{{ __('common.service_4_scope_1') }}</li>
                                <li>{{ __('common.service_4_scope_2') }}</li>
                                <li>{{ __('common.service_4_scope_3') }}</li>
                                <li>{{ __('common.service_4_scope_4') }}</li>
                                <li>{{ __('common.service_4_scope_5') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="service5" class="service-section my-5 p-4 border rounded bg-white">
                    <div class="row align-items-center">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <img src="{{ asset('/assets/images/gallery/untitled-1-4.jpg') }}" alt="{{ __('common.service_5_image_alt') }}" style="width:100%; max-width:350px; height:auto; object-fit:cover; border-radius:15px;" class="mb-3">
                        </div>
                        <div class="col-md-7">
                            <h2>{{ __('common.service_5_heading') }}</h2>
                            <p>{!! __('common.service_5_intro') !!}</p>
                            <p><strong>{{ __('common.service_5_scope_heading') }}</strong></p>
                            <ul>
                                <li>{{ __('common.service_5_scope_1') }}</li>
                                <li>{{ __('common.service_5_scope_2') }}</li>
                                <li>{{ __('common.service_5_scope_3') }}</li>
                                <li>{{ __('common.service_5_scope_4') }}</li>
                                <li>{{ __('common.service_5_scope_5') }}</li>
                                <li>{{ __('common.service_5_scope_6') }}</li>
                                <li>{{ __('common.service_5_scope_7') }}</li>
                                <li>{{ __('common.service_5_scope_8') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="service6" class="service-section my-5 p-4 border rounded bg-white">
                    <div class="row align-items-center flex-md-row-reverse">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <img src="{{ asset('/assets/images/gallery/untitled-1-32-crop.jpg') }}" alt="{{ __('common.service_6_image_alt') }}" style="width:100%; max-width:350px; height:auto; object-fit:cover; border-radius:15px;" class="mb-3">
                        </div>
                        <div class="col-md-7">
                            <h2>{{ __('common.service_6_heading') }}</h2>
                            <p>{!! __('common.service_6_intro') !!}</p>
                            <p><strong>{{ __('common.service_6_scope_heading') }}</strong></p>
                            <ul>
                                <li>{{ __('common.service_6_scope_1') }}</li>
                                <li>{{ __('common.service_6_scope_2') }}</li>
                                <li>{{ __('common.service_6_scope_3') }}</li>
                                <li>{{ __('common.service_6_scope_4') }}</li>
                                <li>{{ __('common.service_6_scope_5') }}</li>
                                <li>{{ __('common.service_6_scope_6') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="service7" class="service-section my-5 p-4 border rounded bg-white">
                    <div class="row align-items-center">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <img src="{{ asset('/assets/images/new-images/image-web.png') }}" alt="{{ __('common.service_7_image_alt') }}" style="width:100%; max-width:350px; height:auto; object-fit:cover; border-radius:15px;" class="mb-3">
                        </div>
                        <div class="col-md-7">
                            <h2>{{ __('common.service_7_heading') }}</h2>
                            <p>{!! __('common.service_7_intro') !!}</p>
                            <p><strong>{{ __('common.service_7_scope_heading') }}</strong></p>
                            <ul>
                                <li>{{ __('common.service_7_scope_1') }}</li>
                                <li>{{ __('common.service_7_scope_2') }}</li>
                                <li>{{ __('common.service_7_scope_3') }}</li>
                                <li>{{ __('common.service_7_scope_4') }}</li>
                                <li>{{ __('common.service_7_scope_5') }}</li>
                                <li>{{ __('common.service_7_scope_6') }}</li>
                                <li>{{ __('common.service_7_scope_7') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-footer/>
<x-mobileMenu/>
<x-sidebar/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection