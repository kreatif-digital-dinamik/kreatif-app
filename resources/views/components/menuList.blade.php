<ul class="main-menu__list">

    {{-- <li class="megamenu megamenu-clickable megamenu-clickable--toggler {{ Request::is('/') || Request::is('index-*') ? 'current' : '' }}">
        <a href="{{ url('/') }}">Demos</a>
        <ul>
            <li>
                <div class="megamenu-popup">
                    <a href="#" class="megamenu-clickable--close"><span class="icon-close"></span></a>
                    <!-- /.megamenu-clickable--close -->
                    <div class="megamenu-popup__content">
                        <div class="demo-one">
                            <div class="container">
                                <div class="row">
                                    <!-- Home Page 05 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-5.jpg" alt="tolak">
                                                <span class="demo-one__image__new">New</span>
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('/index-5') }}" class="tolak-btn demo-one__btn {{ Request::is('index-5') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('/index-5-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-5-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('/index-5') }}" class="{{ Request::is('index-5') ? 'current' : '' }}">Home Page 05</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 06 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-6.jpg" alt="tolak">
                                                <span class="demo-one__image__new">New</span>
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('/index-6') }}" class="tolak-btn demo-one__btn {{ Request::is('index-6') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('/index-6-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-6-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('/index-6') }}" class="{{ Request::is('index-6') ? 'current' : '' }}">Home Page 06</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 07 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-7.jpg" alt="tolak">
                                                <span class="demo-one__image__new">New</span>
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('/index-7') }}" class="tolak-btn demo-one__btn {{ Request::is('index-7') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('/index-7-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-7-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('/index-7') }}" class="{{ Request::is('index-7') ? 'current' : '' }}">Home Page 07</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 01 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-1.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('/') }}" class="tolak-btn demo-one__btn {{ Request::is('/') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('/index-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('/index-dark') }}" class="tolak-btn demo-one__btn {{ Request::is('index-dark') ? 'current' : '' }}">
                                                        <b>Dark Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'current' : '' }}">Home Page 01</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 02 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-2.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('index-2') }}" class="tolak-btn demo-one__btn {{ Request::is('index-2') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-2-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-2-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-2-dark') }}" class="tolak-btn demo-one__btn {{ Request::is('index-2-dark') ? 'current' : '' }}">
                                                        <b>Dark Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('index-2') }}" class="{{ Request::is('index-2') ? 'current' : '' }}">Home Page 02</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 03 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-3.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('index-3') }}" class="tolak-btn demo-one__btn {{ Request::is('index-3') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-3-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-3-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-3-dark') }}" class="tolak-btn demo-one__btn {{ Request::is('index-3-dark') ? 'current' : '' }}">
                                                        <b>Dark Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('index-3') }}" class="{{ Request::is('index-3') ? 'current' : '' }}">Home Page 03</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Page 04 -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-4.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('index-4') }}" class="tolak-btn demo-one__btn {{ Request::is('index-4') ? 'current' : '' }}">
                                                        <b>Multi Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-4-one-page') }}" class="tolak-btn demo-one__btn {{ Request::is('index-4-one-page') ? 'current' : '' }}">
                                                        <b>One Page</b><span></span>
                                                    </a>
                                                    <a href="{{ url('index-4-dark') }}" class="tolak-btn demo-one__btn {{ Request::is('index-4-dark') ? 'current' : '' }}">
                                                        <b>Dark Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('index-4') }}" class="{{ Request::is('index-4') ? 'current' : '' }}">Home Page 04</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home Boxed -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-boxed.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('index-boxed') }}" class="tolak-btn demo-one__btn {{ Request::is('index-boxed') ? 'current' : '' }}">
                                                        <b>View Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('index-boxed') }}" class="{{ Request::is('index-boxed') ? 'current' : '' }}">Home Boxed</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Home RTL -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="demo-one__card">
                                            <div class="demo-one__image">
                                                <img src="assets/images/landing/home-rtl.jpg" alt="tolak">
                                                <div class="demo-one__btns">
                                                    <a href="{{ url('index-rtl') }}#googtrans(en|ar)" class="tolak-btn demo-one__btn {{ Request::is('index-rtl') ? 'current' : '' }}">
                                                        <b>View Page</b><span></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="demo-one__content">
                                                <h3 class="demo-one__title">
                                                    <a href="{{ url('index-rtl') }}#googtrans(en|ar)" class="{{ Request::is('index-rtl') ? 'current' : '' }}">Home RTL</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div><!-- /.demos-one -->
                    </div><!-- /.megamenu-popup__content -->
                </div><!-- /.megamenu-popup -->
            </li>
        </ul>
    </li> --}}

    <li class="{{ Request::is('/') || Request::is('home') ? 'current' : '' }}">
        <a href="{{ url('home') }}">{{ __('common.home') }}</a>
    </li>
    {{-- <li class="{{ Request::is('about') ? 'current' : '' }}">
        <a href="{{ url('about') }}">{{ __('common.about') }}</a>
    </li> --}}

    {{-- <li class="dropdown {{ Request::is('project*') || Request::is('team*') || Request::is('reviews*') || Request::is('packages*') || Request::is('gallery*') || Request::is('faq') || Request::is('login') || Request::is('404') ? 'current' : '' }}">
        <a href="#">{{ __('common.pages') }}</a>
        <ul>
            <li class="{{ Request::is('project') ? 'current' : '' }}">
                <a href="{{ url('project') }}">{{ __('common.menu_our_project') }}</a>
                <ul>
                    <li class="{{ Request::is('project') ? 'current' : '' }}"><a href="{{ url('project') }}">{{ __('common.menu_project_page') }}</a></li>
                    <li class="{{ Request::is('project-carousel') ? 'current' : '' }}"><a href="{{ url('project-carousel') }}">{{ __('common.menu_project_carousel') }}</a></li>
                    <li class="{{ Request::is('project-details') ? 'current' : '' }}"><a href="{{ url('project-details') }}">{{ __('common.menu_project_details') }}</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('team') ? 'current' : '' }}"><a href="{{ url('team') }}">{{ __('common.menu_our_team') }}</a></li>
            <li class="{{ Request::is('team-carousel') ? 'current' : '' }}"><a href="{{ url('team-carousel') }}">{{ __('common.menu_team_carousel') }}</a></li>
            <li class="{{ Request::is('team-details') ? 'current' : '' }}"><a href="{{ url('team-details') }}">{{ __('common.menu_team_details') }}</a></li>
            <li class="{{ Request::is('reviews') ? 'current' : '' }}"><a href="{{ url('reviews') }}">{{ __('common.menu_testimonial') }}</a></li>
            <li class="{{ Request::is('reviews-carousel') ? 'current' : '' }}"><a href="{{ url('reviews-carousel') }}">{{ __('common.menu_testimonial_carousel') }}</a></li>
            <li class="{{ Request::is('packages') ? 'current' : '' }}"><a href="{{ url('packages') }}">{{ __('common.menu_pricing_page') }}</a></li>
            <li class="{{ Request::is('packages-carousel') ? 'current' : '' }}"><a href="{{ url('packages-carousel') }}">{{ __('common.menu_pricing_carousel') }}</a></li>
            <li class="{{ Request::is('gallery*') ? 'current' : '' }}">
                <a href="{{ url('gallery') }}">{{ __('common.menu_gallery') }}</a>
                <ul>
                    <li class="{{ Request::is('gallery') ? 'current' : '' }}"><a href="{{ url('gallery') }}">{{ __('common.menu_gallery_masonry') }}</a></li>
                    <li class="{{ Request::is('gallery-filter') ? 'current' : '' }}"><a href="{{ url('gallery-filter') }}">{{ __('common.menu_gallery_filter') }}</a></li>
                    <li class="{{ Request::is('gallery-grid') ? 'current' : '' }}"><a href="{{ url('gallery-grid') }}">{{ __('common.menu_gallery_grid') }}</a></li>
                    <li class="{{ Request::is('gallery-carousel') ? 'current' : '' }}"><a href="{{ url('gallery-carousel') }}">{{ __('common.menu_gallery_carousel') }}</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('faq') ? 'current' : '' }}"><a href="{{ url('faq') }}">{{ __('common.menu_faq') }}</a></li>
            <li class="{{ Request::is('login') ? 'current' : '' }}"><a href="{{ url('/login') }}">{{ __('common.menu_login') }}</a></li>
            <li class="{{ Request::is('404') ? 'current' : '' }}"><a href="{{ url('404') }}">{{ __('common.menu_error_404') }}</a></li>
        </ul>
    </li> --}}

    <li
        class="dropdown {{ Request::is('project*') || Request::is('team*') || Request::is('reviews*') || Request::is('packages*') || Request::is('gallery*') || Request::is('faq') || Request::is('login') || Request::is('404') ? 'current' : '' }}">
        <a href="#">{{ __('common.profile') }}</a>
        <ul>
            <li class="{{ Request::is('about') ? 'current' : '' }}">
                <a href="{{ url('about') }}">{{ __('common.about') }}</a>
            </li>
            <li class="dropdown {{ Request::is('project*') || Request::is('photo-gallery') || Request::is('video-gallery') ? 'current' : '' }}">
               
                {{-- <a href="{{ url('project') }}">{{ __('common.menu_our_project') }}</a> --}}
                <a href="#">{{ __('common.menu_our_project') }}</a>
                <ul class="sub-menu">
                     <li class="{{ Request::is('photo-gallery') ? 'current' : '' }}"><a href="{{ url('photo-gallery') }}">{{ __('common.menu_photos_gallery') }}</a></li>
                    <li class="{{ Request::is('video-gallery') ? 'current' : '' }}"><a
                            href="{{ url('video-gallery') }}">{{ __('common.menu_video_gallery') }}</a></li>
                </ul>
            </li>


            {{-- <li class="{{ Request::is('team') ? 'current' : '' }}"><a
                    href="{{ url('team') }}">{{ __('common.menu_our_team') }}</a></li>
            <li class="{{ Request::is('team-carousel') ? 'current' : '' }}"><a
                    href="{{ url('team-carousel') }}">{{ __('common.menu_team_carousel') }}</a></li>
            <li class="{{ Request::is('team-details') ? 'current' : '' }}"><a href="{{ url('team-details') }}">{{ __('common.menu_team_details') }}</a></li>
            <li class="{{ Request::is('reviews') ? 'current' : '' }}"><a
                    href="{{ url('reviews') }}">{{ __('common.menu_testimonial') }}</a></li>
            <li class="{{ Request::is('reviews-carousel') ? 'current' : '' }}"><a
                    href="{{ url('reviews-carousel') }}">{{ __('common.menu_testimonial_carousel') }}</a></li>
            <li class="{{ Request::is('packages') ? 'current' : '' }}"><a
                    href="{{ url('packages') }}">{{ __('common.menu_pricing_page') }}</a></li>
            <li class="{{ Request::is('packages-carousel') ? 'current' : '' }}"><a
                    href="{{ url('packages-carousel') }}">{{ __('common.menu_pricing_carousel') }}</a></li>
            <li class="{{ Request::is('gallery*') ? 'current' : '' }}">
                <a href="{{ url('gallery') }}">{{ __('common.menu_gallery') }}</a>
                <ul>
                    <li class="{{ Request::is('gallery') ? 'current' : '' }}"><a
                            href="{{ url('gallery') }}">{{ __('common.menu_gallery_masonry') }}</a></li>
                    <li class="{{ Request::is('gallery-filter') ? 'current' : '' }}"><a
                            href="{{ url('gallery-filter') }}">{{ __('common.menu_gallery_filter') }}</a></li>
                    <li class="{{ Request::is('gallery-grid') ? 'current' : '' }}"><a
                            href="{{ url('gallery-grid') }}">{{ __('common.menu_gallery_grid') }}</a></li>
                    <li class="{{ Request::is('gallery-carousel') ? 'current' : '' }}"><a
                            href="{{ url('gallery-carousel') }}">{{ __('common.menu_gallery_carousel') }}</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('faq') ? 'current' : '' }}"><a
                    href="{{ url('faq') }}">{{ __('common.menu_faq') }}</a></li>
            <li class="{{ Request::is('login') ? 'current' : '' }}"><a
                    href="{{ url('/login') }}">{{ __('common.menu_login') }}</a></li>
            <li class="{{ Request::is('404') ? 'current' : '' }}"><a
                    href="{{ url('404') }}">{{ __('common.menu_error_404') }}</a></li> --}}
        </ul>
    </li>

    <li class="{{ Request::is('services') ? 'current' : '' }}">
    <a href="{{ url('/services') }}">{{ __('common.Our Services Title') }}</a>
    </li>

    {{-- <li class="dropdown {{ Request::is('services*') ? 'current' : '' }}">
        <a href="#">{{ __('common.services') }}</a>
        <ul>
            <li class="{{ Request::is('services') ? 'current' : '' }}"><a
                    href="{{ url('/services') }}">{{ __('common.Our Services Title') }}</a></li>
           <li class="{{ Request::is('services-carousel') ? 'current' : '' }}"><a
                    href="{{ url('services-carousel') }}">{{ __('common.menu_services_one_carousel') }}</a></li> 
            <li class="{{ Request::is('services-two') ? 'current' : '' }}"><a
                    href="{{ url('services-two') }}">{{ __('common.menu_services_two') }}</a></li>
            <li class="{{ Request::is('services-two-carousel') ? 'current' : '' }}"><a
                    href="{{ url('services-two-carousel') }}">{{ __('common.menu_services_two_carousel') }}</a></li>
            <li class="{{ Request::is('business-growth') ? 'current' : '' }}"><a
                    href="{{ url('business-growth') }}">{{ __('common.menu_business_growth') }}</a></li>
            <li class="{{ Request::is('business-solution') ? 'current' : '' }}"><a
                    href="{{ url('business-solution') }}">{{ __('common.menu_business_solution') }}</a></li>
            <li class="{{ Request::is('marketing-solution') ? 'current' : '' }}"><a
                    href="{{ url('marketing-solution') }}">{{ __('common.menu_marketing_solution') }}</a></li>
            <li class="{{ Request::is('technology-services') ? 'current' : '' }}"><a
                    href="{{ url('technology-services') }}">{{ __('common.menu_technology_services') }}</a></li>
            <li class="{{ Request::is('business-marketing') ? 'current' : '' }}"><a
                    href="{{ url('business-marketing') }}">{{ __('common.menu_business_marketing') }}</a></li>
            <li class="{{ Request::is('business-support') ? 'current' : '' }}"><a
                    href="{{ url('business-support') }}">{{ __('common.menu_business_support') }}</a></li>
        </ul>
    </li> --}}

    {{-- <li class="dropdown {{ Request::is('shop*') || Request::is('products*') || Request::is('cart') || Request::is('checkout') ? 'current' : '' }}">
        <a href="#">{{ __('common.shop') }}</a>
        <ul class="sub-menu">
            <li class="dropdown {{ Request::is('products*') ? 'current' : '' }}">
                <a href="#">{{ __('common.menu_products') }}</a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('products') ? 'current' : '' }}"><a href="{{ url('products') }}">{{ __('common.menu_no_sidebar') }}</a></li>
                    <li class="{{ Request::is('products-left') ? 'current' : '' }}"><a href="{{ url('products-left') }}">{{ __('common.menu_left_sidebar') }}</a></li>
                    <li class="{{ Request::is('products-right') ? 'current' : '' }}"><a href="{{ url('products-right') }}">{{ __('common.menu_right_sidebar') }}</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('products-carousel') ? 'current' : '' }}"><a href="{{ url('products-carousel') }}">{{ __('common.menu_products_carousel') }}</a></li>
            <li class="{{ Request::is('product-details') ? 'current' : '' }}"><a href="{{ url('product-details') }}">{{ __('common.menu_product_details') }}</a></li>
            <li class="{{ Request::is('cart') ? 'current' : '' }}"><a href="{{ url('cart') }}">{{ __('common.menu_cart') }}</a></li>
            <li class="{{ Request::is('checkout') ? 'current' : '' }}"><a href="{{ url('checkout') }}">{{ __('common.menu_checkout') }}</a></li>
        </ul>
    </li> --}}

    {{-- <li class="dropdown {{ Request::is('blog*') ? 'current' : '' }}">
        <a href="#">{{ __('common.news') }}</a>
        <ul class="sub-menu">
            <li class="dropdown {{ Request::is('blog-grid*') ? 'current' : '' }}">
                <a href="#">{{ __('common.menu_news_grid') }}</a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('blog-grid') ? 'current' : '' }}"><a href="{{ url('blog-grid') }}">{{ __('common.menu_no_sidebar') }}</a></li>
                    <li class="{{ Request::is('blog-grid-left') ? 'current' : '' }}"><a href="{{ url('blog-grid-left') }}">{{ __('common.menu_left_sidebar') }}</a></li>
                    <li class="{{ Request::is('blog-grid-right') ? 'current' : '' }}"><a href="{{ url('blog-grid-right') }}">{{ __('common.menu_right_sidebar') }}</a></li>
                </ul>
            </li>
            <li class="dropdown {{ Request::is('blog-list*') ? 'current' : '' }}">
                <a href="#">{{ __('common.menu_news_list') }}</a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('blog-list') ? 'current' : '' }}"><a href="{{ url('blog-list') }}">{{ __('common.menu_no_sidebar') }}</a></li>
                    <li class="{{ Request::is('blog-list-left') ? 'current' : '' }}"><a href="{{ url('blog-list-left') }}">{{ __('common.menu_left_sidebar') }}</a></li>
                    <li class="{{ Request::is('blog-list-right') ? 'current' : '' }}"><a href="{{ url('blog-list-right') }}">{{ __('common.menu_right_sidebar') }}</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('blog-carousel') ? 'current' : '' }}"><a href="{{ url('blog-carousel') }}">{{ __('common.menu_news_carousel') }}</a></li>
            <li class="dropdown {{ Request::is('blog-details*') ? 'current' : '' }}">
                <a href="#">{{ __('common.menu_news_details') }}</a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('blog-details') ? 'current' : '' }}"><a href="{{ url('blog-details') }}">{{ __('common.menu_no_sidebar') }}</a></li>
                    <li class="{{ Request::is('blog-details-left') ? 'current' : '' }}"><a href="{{ url('blog-details-left') }}">{{ __('common.menu_left_sidebar') }}</a></li>
                    <li class="{{ Request::is('blog-details-right') ? 'current' : '' }}"><a href="{{ url('blog-details-right') }}">{{ __('common.menu_right_sidebar') }}</a></li>
                </ul>
            </li>
        </ul>
    </li> --}}

    <li class="{{ Request::is('career') ? 'current' : '' }}">
        <a href="{{ url('/career') }}">{{ __('common.menu_career') }}</a>
    </li> 
    
    <li class="{{ Request::is('contact') ? 'current' : '' }}">
        <a href="{{ url('/contact') }}">{{ __('common.contact') }}</a>
    </li>

    <li class="dropdown language-selector">
        <a href="#">
            <i class="fa fa-globe"></i> <span class="current-lang"> &nbsp; {{ strtoupper(app()->getLocale()) }}</span>

        </a>
        <ul>
            <li class="{{ app()->getLocale() == 'ms' ? 'current' : '' }}">
                <a href="{{ route('language.switch', ['locale' => 'ms']) }}">
                    <span class="flag-emoji">🇲🇾</span>&nbsp;
                    <span>{{ __('common.malay') }}</span>
                </a>
            </li>
            <li class="{{ app()->getLocale() == 'en' ? 'current' : '' }}">
                <a href="{{ route('language.switch', ['locale' => 'en']) }}">
                    <span class="flag-emoji">🇬🇧</span> &nbsp;
                    <span>{{ __('common.english') }}</span>
                </a>
            </li>
        </ul>
    </li>


</ul>
