@extends('layouts.layout5')
@section('title', 'Kreatif Digital Dinamik | Penyelesaian Pemasaran Digital & Strategi Jenama SME')

@section('content')

    <x-strickyHeader />

    <!-- Hero Video Section -->
    <section class="hero-video-section">
        <!-- Background Video Container -->
        <div class="video-background-container">
            <iframe id="background-video"
                src="https://www.youtube.com/embed/hFklkIWCuDM?autoplay=1&mute=1&loop=1&controls=0&rel=0&modestbranding=1&playsinline=1&playlist=hFklkIWCuDM"
                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen title="Background Video">
            </iframe>
            <div class="video-overlay"></div>
        </div>

        <!-- Hero Content -->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="hero-content">
                        <h5 class="hero-subtitle">{{ __('common.welcome_to_kreatif') }}</h5>
                        <h3 class="hero-title-secondary">{{ __('common.we_marketing_process') }}</h3>
                        <h2 class="hero-title-primary">{{ __('common.solution_service') }}</h2>

                        <div class="hero-description">
                            <p>{{ __('common.business_description') }}</p>
                        </div>

                        <div class="hero-buttons">
                            {{-- <a href="{{ url('services') }}" class="btn btn-primary">
                                <span>{{ __('common.get_quote') }}</span>
                            </a> --}}
                            <a href="{{ url('contact') }}" class="btn btn-secondary">
                                <span>{{ __('common.contact_now') }}</span>
                            </a>
                        </div>

                        <div class="video-play-button" onclick="openVideoModal()">
                            <div class="play-icon">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                            <span class="play-text">{{ __('common.watch_full_video') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-video-hero-end -->

    <!-- Video Modal -->
    <div id="videoModal" class="video-modal">
        <div class="video-modal-content">
            <span class="video-modal-close" onclick="closeVideoModal()">&times;</span>
            <div class="video-modal-body">
                <iframe id="modal-video" src="" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <style>
        /* ==========================================================================
                   Hero Video Section Styles
                   ========================================================================== */

        /* Base Layout */
        .hero-video-section {
            position: relative;
            height: 100vh;
            min-height: 700px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            margin: 0;
            padding: 0;
            margin-left: calc(-50vw + 50%);
            margin-right: calc(-50vw + 50%);
        }

        /* Video Background */
        .video-background-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .video-background-container iframe {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100vw;
            height: 56.25vw;
            /* 16:9 aspect ratio */
            min-width: 177.78vh;
            /* 16:9 aspect ratio */
            min-height: 100vh;
            transform: translateX(-50%) translateY(-50%);
            pointer-events: none;
            border: none;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg,
                    rgba(0, 0, 0, 0.7) 0%,
                    rgba(0, 0, 0, 0.5) 50%,
                    rgba(0, 0, 0, 0.7) 100%);
            z-index: 1;
        }

        /* Content Container */
        .hero-video-section .container {
            position: relative;
            z-index: 10;
            max-width: 1200px;
            width: 100%;
            padding: 0 15px;
        }

        /* ==========================================================================
                   Hero Content Styles
                   ========================================================================== */

        .hero-content {
            color: white;
            text-align: center;
            position: relative;
            z-index: 11;
        }

        /* Typography */
        .hero-subtitle {
            font-size: 1.125rem;
            /* 18px */
            font-weight: 600;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .hero-title-secondary {
            font-size: 3rem;
            /* 48px */
            font-weight: 700;
            color: #fff;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.9);
            margin-bottom: 0.75rem;
            line-height: 1.2;
        }

        .hero-title-primary {
            font-size: 3.5rem;
            /* 56px */
            font-weight: 800;
            color: #fff;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.9);
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero-description {
            margin-bottom: 2rem;
        }

        .hero-description p {
            font-size: 1.125rem;
            /* 18px */
            font-weight: 400;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            line-height: 1.6;
            margin: 0;
        }

        /* ==========================================================================
                   Button Styles
                   ========================================================================== */

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
        }

        .hero-buttons .btn {
            padding: 0.875rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            border: 2px solid transparent;
        }

        .hero-buttons .btn-primary {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .hero-buttons .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
        }

        .hero-buttons .btn-secondary {
            background-color: transparent;
            color: white;
            border-color: white;
        }

        .hero-buttons .btn-secondary:hover {
            background-color: white;
            color: #333;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.3);
        }

        /* ==========================================================================
                   Video Play Button Styles
                   ========================================================================== */

        .video-play-button {
            display: inline-flex;
            align-items: center;
            gap: 1.25rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .video-play-button:hover {
            transform: translateY(-5px);
        }

        .play-icon {
            width: 5rem;
            /* 80px */
            height: 5rem;
            /* 80px */
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            border: 3px solid rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            flex-shrink: 0;
        }

        .play-icon:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: white;
            transform: scale(1.1);
        }

        .play-icon i {
            font-size: 1.5rem;
            /* 24px */
            color: white;
            margin-left: 0.25rem;
            /* Slight offset for play icon */
        }

        .play-text {
            font-size: 1.25rem;
            /* 20px */
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            letter-spacing: 0.5px;
            text-transform: uppercase;
            border-left: 3px solid rgba(255, 255, 255, 0.8);
            padding-left: 1rem;
            transition: all 0.3s ease;
        }

        .video-play-button:hover .play-text {
            border-left-color: white;
            transform: translateX(5px);
        }

        /* ==========================================================================
                   Modal Styles
                   ========================================================================== */

        .video-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            animation: modalFadeIn 0.3s ease;
        }

        .video-modal-content {
            position: relative;
            margin: 3% auto;
            width: 90%;
            max-width: 1000px;
            height: 80%;
            background: #000;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .video-modal-close {
            position: absolute;
            top: -3rem;
            right: 0;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            cursor: pointer;
            z-index: 10000;
            transition: all 0.3s ease;
            width: 3rem;
            height: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .video-modal-close:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.1);
        }

        .video-modal-body {
            width: 100%;
            height: 100%;
        }

        .video-modal-body iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* ==========================================================================
                   Responsive Design
                   ========================================================================== */

        /* Large Desktop */
        @media (min-width: 1200px) {
            .hero-title-secondary {
                font-size: 3.5rem;
                /* 56px */
            }

            .hero-title-primary {
                font-size: 4rem;
                /* 64px */
            }
        }

        /* Desktop */
        @media (max-width: 1199px) {
            .hero-title-secondary {
                font-size: 2.75rem;
                /* 44px */
            }

            .hero-title-primary {
                font-size: 3.25rem;
                /* 52px */
            }
        }

        /* Tablet */
        @media (max-width: 768px) {
            .hero-video-section {
                min-height: 600px;
            }

            .video-background-container iframe {
                width: 177.77vh;
                height: 100vh;
                min-width: 100vw;
                min-height: 177.77vw;
            }

            .hero-title-secondary {
                font-size: 2rem;
                /* 32px */
            }

            .hero-title-primary {
                font-size: 2.25rem;
                /* 36px */
            }

            .hero-description p {
                font-size: 1rem;
                /* 16px */
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .hero-buttons .btn {
                width: 200px;
            }

            .play-icon {
                width: 3.75rem;
                /* 60px */
                height: 3.75rem;
                /* 60px */
            }

            .play-icon i {
                font-size: 1.125rem;
                /* 18px */
            }

            .play-text {
                font-size: 1rem;
                /* 16px */
            }

            .video-modal-content {
                width: 95%;
                height: 70%;
                margin: 10% auto;
            }
        }

        /* Mobile */
        @media (max-width: 480px) {
            .hero-video-section {
                min-height: 500px;
            }

            .hero-video-section .container {
                padding: 0 1rem;
            }

            .hero-title-secondary {
                font-size: 1.5rem;
                /* 24px */
            }

            .hero-title-primary {
                font-size: 1.75rem;
                /* 28px */
            }

            .hero-description p {
                font-size: 0.875rem;
                /* 14px */
            }

            .hero-description br {
                display: none;
            }

            .video-play-button {
                flex-direction: column;
                gap: 0.75rem;
            }

            .play-icon {
                width: 3.125rem;
                /* 50px */
                height: 3.125rem;
                /* 50px */
            }

            .play-icon i {
                font-size: 1rem;
                /* 16px */
            }

            .play-text {
                font-size: 0.875rem;
                /* 14px */
                border-left: none;
                padding-left: 0;
                text-align: center;
            }

            .video-modal-content {
                margin: 15% auto;
                height: 60%;
            }
        }

        /* Global Reset */
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
    </style>

    <script>
        /**
         * Video Modal Controller
         * Handles video modal functionality with proper error handling
         */
        class VideoModal {
            constructor() {
                this.modal = null;
                this.modalVideo = null;
                this.videoId = 'hFklkIWCuDM';
                this.isInitialized = false;

                // Initialize when DOM is ready
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', () => this.init());
                } else {
                    this.init();
                }
            }

            /**
             * Initialize the modal elements and event listeners
             */
            init() {
                try {
                    this.modal = document.getElementById('videoModal');
                    this.modalVideo = document.getElementById('modal-video');

                    if (!this.modal || !this.modalVideo) {
                        console.warn('Video modal elements not found');
                        return;
                    }

                    this.setupEventListeners();
                    this.isInitialized = true;
                } catch (error) {
                    console.error('Failed to initialize video modal:', error);
                }
            }

            /**
             * Set up event listeners for modal interaction
             */
            setupEventListeners() {
                // Close modal when clicking outside
                this.modal.addEventListener('click', (event) => {
                    if (event.target === this.modal) {
                        this.close();
                    }
                });

                // Close modal with escape key
                document.addEventListener('keydown', (event) => {
                    if (event.key === 'Escape' && this.isOpen()) {
                        this.close();
                    }
                });

                // Prevent modal content clicks from closing modal
                const modalContent = this.modal.querySelector('.video-modal-content');
                if (modalContent) {
                    modalContent.addEventListener('click', (event) => {
                        event.stopPropagation();
                    });
                }
            }

            /**
             * Open the video modal
             */
            open() {
                if (!this.isInitialized) {
                    console.warn('Video modal not initialized');
                    return;
                }

                try {
                    // Construct video URL with autoplay
                    const videoSrc =
                        `https://www.youtube.com/embed/${this.videoId}?autoplay=1&rel=0&modestbranding=1&iv_load_policy=3`;

                    // Set video source
                    this.modalVideo.src = videoSrc;

                    // Show modal
                    this.modal.style.display = 'block';

                    // Prevent body scrolling
                    document.body.style.overflow = 'hidden';

                    // Add modal-open class for additional styling
                    document.body.classList.add('modal-open');

                } catch (error) {
                    console.error('Failed to open video modal:', error);
                }
            }

            /**
             * Close the video modal
             */
            close() {
                if (!this.isInitialized) {
                    return;
                }

                try {
                    // Hide modal
                    this.modal.style.display = 'none';

                    // Stop video by clearing source
                    this.modalVideo.src = '';

                    // Restore body scrolling
                    document.body.style.overflow = 'auto';

                    // Remove modal-open class
                    document.body.classList.remove('modal-open');

                } catch (error) {
                    console.error('Failed to close video modal:', error);
                }
            }

            /**
             * Check if modal is currently open
             */
            isOpen() {
                return this.modal && this.modal.style.display === 'block';
            }

            /**
             * Update video ID and refresh if modal is open
             */
            setVideoId(newVideoId) {
                if (typeof newVideoId !== 'string' || !newVideoId.trim()) {
                    console.warn('Invalid video ID provided');
                    return;
                }

                this.videoId = newVideoId.trim();

                // If modal is open, update the video source
                if (this.isOpen()) {
                    const videoSrc =
                        `https://www.youtube.com/embed/${this.videoId}?autoplay=1&rel=0&modestbranding=1&iv_load_policy=3`;
                    this.modalVideo.src = videoSrc;
                }
            }
        }

        // Initialize video modal
        const videoModalController = new VideoModal();

        /**
         * Global functions for backward compatibility
         * These functions are called from the HTML onclick attributes
         */
        function openVideoModal() {
            videoModalController.open();
        }

        function closeVideoModal() {
            videoModalController.close();
        }

        /**
         * Additional utility functions
         */

        /**
         * Lazy load background video for performance
         */
        function initBackgroundVideo() {
            const backgroundVideo = document.getElementById('background-video');

            if (!backgroundVideo) {
                return;
            }

            // Add intersection observer for lazy loading if needed
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // Video is already loaded via iframe src, but we can add additional logic here
                            observer.unobserve(entry.target);
                        }
                    });
                });

                observer.observe(backgroundVideo);
            }
        }

        /**
         * Handle video loading errors
         */
        function handleVideoError(event) {
            console.error('Video failed to load:', event);

            // Could implement fallback image or alternative content here
            const videoContainer = event.target.closest('.video-background-container');
            if (videoContainer) {
                videoContainer.classList.add('video-error');
                // You could add a fallback background image via CSS
            }
        }

        // Initialize additional features when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            initBackgroundVideo();

            // Add error handling to background video
            const backgroundVideo = document.getElementById('background-video');
            if (backgroundVideo) {
                backgroundVideo.addEventListener('error', handleVideoError);
            }

            // Performance optimization: preload modal video thumbnail
            const link = document.createElement('link');
            link.rel = 'prefetch';
            link.href = `https://img.youtube.com/vi/${videoModalController.videoId}/maxresdefault.jpg`;
            document.head.appendChild(link);
        });

        // Export for potential module usage
        if (typeof module !== 'undefined' && module.exports) {
            module.exports = {
                VideoModal,
                openVideoModal,
                closeVideoModal
            };
        }
    </script>

    <section class="about-four">
        <div class="container tabs-box">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__image">
                        <img src="{{ asset('/assets/images/gallery/resize.jpg') }}" alt="kreatif">
                        <img src="{{ asset('/assets/images/gallery/DSC09582-3.jpg') }}" alt="kreatif">
                        <div class="about-four__image__shape tolak-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                            <img src="{{ asset('/assets/images/shapes/about-4-shape-1.png') }}" alt="kreatif">
                        </div>
                        <div class="about-four__fact count-box tolak-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                            <div class="about-four__fact__icon"><i class="icon-check-mark"></i></div>
                            <h3 class="about-four__fact__count"><span class="count-text" data-stop="100"
                                    data-speed="1500"></span>+</h3><!-- /.about-four__fact__number -->
                            <p class="about-four__fact__text">{{ __('common.successful_projects') }}</p><!-- /.about-four__fact__title -->
                        </div><!-- /.about-four__fact -->
                    </div>
                </div><!-- /.col-xl-6 -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-four__content">
                        <div class="sec-title-two text-left">
                            <h6 class="sec-title-two__tagline"><span
                                    class="sec-title-two__tagline__left icofont-rounded-double-left"></span>{{ __('common.about_us') }}<span class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6>
                            <!-- /.sec-title-two__tagline -->
                            <h3 class="sec-title-two__title">{{ __('common.company_title') }} <span>{{ __('common.company_subtitle') }}</span></h3>
                            <!-- /.sec-title-two__title -->
                        </div><!-- /.sec-title-two -->
                        <p class="about-four__content__text">
                            {{ __('common.company_description_1') }}
                        </p>
                        <p>
                            {{ __('common.company_description_2') }}
                        </p>
                        <p>
                            {{ __('common.company_description_3') }}
                        </p>
                        <a href="{{ route('about') }}" class="btn btn-primary" style="margin-top: 20px;">{{ __('common.discover_more') }}</a>
                        
                    </div><!-- /.about__content -->
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-four -->

    <!-- Service Start -->
    <section class="service-one service-one--home-four"
        style="background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #1e293b 100%); position: relative; padding: 80px 0;">
        <div class="container">
            <div class="sec-title-two text-center">
                <h6 class="sec-title-two__tagline" style="color: white;"><span
                        class="sec-title-two__tagline__left icofont-rounded-double-left"></span>{{ __('common.our_services') }}<span
                        class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6>
                <!-- /.sec-title-two__tagline -->
                <h3 class="sec-title-two__title" style="color: white;">{{ __('common.services_description_full') }}</h3>
                <!-- /.sec-title-two__title -->
            </div><!-- /.sec-title-two -->
            
            <!-- Services Carousel Layout -->
            <div class="services-carousel-container" style="margin-top: 50px;">
                <div class="service-carousel__one tolak-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 3,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop": true,
                    "autoplay": 4000,
                    "nav": true,
                    "dots": true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1,
                            "margin": 15
                        },
                        "576":{
                            "items":2,
                            "margin": 20
                        },
                        "768":{
                            "items":2,
                            "margin": 25
                        },
                        "992":{
                            "items": 3,
                            "margin": 30
                        },
                        "1200":{
                            "items": 3,
                            "margin": 30
                        }
                    }
                }'>
                
                    <!-- Service 1: Social Media -->
                    <div class="service-carousel__item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset('/assets/images/new-images/image3.jpg') }}" alt="{{ __('common.service_1_title') }}">
                            </div>
                            <div class="service-one__item__content">
                                <h3 class="service-one__item__title">
                                    <a href="{{ url('services#service1') }}">{{ __('common.service_1_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_1_description') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2: Marketing -->
                    <div class="service-carousel__item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset('/assets/images/new-images/DSC09581-2.jpg') }}" alt="{{ __('common.service_2_title') }}">
                            </div>
                            <div class="service-one__item__content">
                                <h3 class="service-one__item__title">
                                    <a href="{{ url('services#service2') }}">{{ __('common.service_2_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_2_description') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3: Content Creation -->
                    <div class="service-carousel__item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset('/assets/images/new-images/image1.jpeg') }}" alt="{{ __('common.service_3_title') }}">
                            </div>
                            <div class="service-one__item__content">
                                <h3 class="service-one__item__title">
                                    <a href="{{ url('services#service3') }}">{{ __('common.service_3_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_3_description') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4: Campaign -->
                    <div class="service-carousel__item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset('/assets/images/new-images/IMG_9832-2.jpg') }}" alt="{{ __('common.service_4_title') }}">
                            </div>
                            <div class="service-one__item__content">
                                <h3 class="service-one__item__title">
                                    <a href="{{ url('services#service4') }}">{{ __('common.service_4_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_4_description') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 5: Branding -->
                    <div class="service-carousel__item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset('/assets/images/gallery/untitled-1-4.jpg') }}" alt="{{ __('common.service_5_title') }}">
                            </div>
                            <div class="service-one__item__content">
                                <h3 class="service-one__item__title">
                                    <a href="{{ url('services#service5') }}">{{ __('common.service_5_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_5_branding_short') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 6: Visual Production -->
                    <div class="service-carousel__item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset('/assets/images/gallery/untitled-1-32-crop.jpg') }}" alt="{{ __('common.service_6_title') }}">
                            </div>
                            <div class="service-one__item__content">
                                <h3 class="service-one__item__title">
                                    <a href="{{ url('services#service6') }}">{{ __('common.service_6_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_6_description') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service 7: Web Solutions -->
                    <div class="service-carousel__item">
                        <div class="service-one__item text-center">
                            <div class="service-one__item__image">
                                <img src="{{ asset('/assets/images/new-images/image-web-2.png') }}" alt="{{ __('common.service_7_title') }}">
                            </div>
                            <div class="service-one__item__content">
                                <h3 class="service-one__item__title">
                                    <a href="{{ url('services#service7') }}">{{ __('common.service_7_title') }}</a>
                                </h3>
                                <p class="service-one__item__text">
                                    {{ __('common.service_7_description') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <img class="service-one--home-four__shape" src="{{ asset('/assets/images/shapes/counter-border-1.png') }}"
            alt="tolak">
    </section>
    
    <!-- Custom CSS for Services Carousel -->
    <style>
        /* Services Carousel Container */
        .services-carousel-container {
            position: relative;
            padding: 0 20px;
        }

        /* Service Carousel Item */
        .service-carousel__item {
            padding: 0 15px;
        }

        /* Service Box Styling */
        .service-one__item {
            display: flex;
            flex-direction: column;
            height: 450px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .service-one__item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        
        .service-one__item__image {
            height: 220px;
            overflow: hidden;
            border-radius: 15px;
            position: relative;
        }
        
        .service-one__item__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
            border-radius: 15px;
        }

        .service-one__item:hover .service-one__item__image img {
            transform: scale(1.1);
        }
        
        .service-one__item__content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 25px 20px;
            text-align: center;
        }
        
        .service-one__item__title {
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
        }

        .service-one__item__title a {
            color: #1e293b;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .service-one__item__title a:hover {
            color: #0047ab;
        }
        
        .service-one__item__text {
            flex: 1;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            text-align: center;
            font-size: 14px;
            line-height: 1.6;
            color: #555;
            margin: 0;
        }

        /* Carousel Navigation Styling */
        .service-carousel__one .owl-nav {
            margin-top: 30px;
            text-align: center;
        }

        .service-carousel__one .owl-nav button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.9) !important;
            color: #1e293b !important;
            font-size: 18px;
            margin: 0 10px;
            border: 2px solid #1e293b;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .service-carousel__one .owl-nav button:hover {
            background: #1e293b !important;
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(30, 41, 59, 0.3);
        }

        /* Carousel Dots Styling */
        .service-carousel__one .owl-dots {
            text-align: center;
            margin-top: 25px;
        }

        .service-carousel__one .owl-dot {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            margin: 0 6px;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.6);
        }

        .service-carousel__one .owl-dot.active {
            background: white;
            transform: scale(1.2);
            border-color: white;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .service-carousel__one .owl-dot:hover {
            background: rgba(255, 255, 255, 0.8);
            transform: scale(1.1);
        }

        /* Responsive Design for Carousel */
        @media (max-width: 1199px) {
            .service-one__item {
                height: 420px;
            }
            
            .service-one__item__image {
                height: 200px;
            }

            .service-one__item__title {
                font-size: 17px;
                min-height: 55px;
            }

            .service-one__item__text {
                font-size: 13px;
            }
        }

        @media (max-width: 991px) {
            .services-carousel-container {
                padding: 0 10px;
            }

            .service-one__item {
                height: 400px;
            }
            
            .service-one__item__image {
                height: 180px;
            }

            .service-one__item__content {
                padding: 20px 15px;
            }

            .service-one__item__title {
                font-size: 16px;
                min-height: 50px;
            }

            .service-one__item__text {
                font-size: 13px;
            }

            .service-carousel__one .owl-nav button {
                width: 40px;
                height: 40px;
                font-size: 16px;
                margin: 0 8px;
            }
        }

        @media (max-width: 768px) {
            .service-one__item {
                height: 380px;
                margin-bottom: 20px;
            }
            
            .service-one__item__image {
                height: 160px;
            }

            .service-one__item__content {
                padding: 18px 12px;
            }

            .service-one__item__title {
                font-size: 15px;
                min-height: 45px;
            }

            .service-one__item__text {
                font-size: 12px;
            }

            .service-carousel__one .owl-nav {
                margin-top: 20px;
            }

            .service-carousel__one .owl-nav button {
                width: 35px;
                height: 35px;
                font-size: 14px;
                margin: 0 5px;
            }

            .service-carousel__one .owl-dots {
                margin-top: 15px;
            }

            .service-carousel__one .owl-dot {
                width: 10px;
                height: 10px;
                margin: 0 4px;
            }
        }

        @media (max-width: 480px) {
            .services-carousel-container {
                padding: 0 5px;
            }

            .service-carousel__item {
                padding: 0 5px;
            }

            .service-one__item {
                height: 350px;
            }
            
            .service-one__item__image {
                height: 140px;
            }

            .service-one__item__content {
                padding: 15px 10px;
            }

            .service-one__item__title {
                font-size: 14px;
                min-height: 40px;
            }

            .service-one__item__text {
                font-size: 11px;
                line-height: 1.5;
            }
        }
    </style>

    <!-- Professional Layout CSS for Clean Positioning -->
    <style>
        /* Clean and Professional Solution Section */
        .our-solution {
            padding: 80px 0;
        }

        .our-solution__content {
            padding-left: 30px;
        }

        .our-solution__content__text {
            font-size: 16px;
            line-height: 1.7;
            color: #555;
            margin-bottom: 30px;
            font-weight: 400;
        }

        /* Benefits Section Styling */
        .benefit-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border-left: 3px solid #0047ab;
        }

        .benefit-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,71,171,0.15);
        }

        .benefit-icon {
            flex-shrink: 0;
        }

        /* Solution Section Improvements */
        .our-solution__list {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .our-solution__list__title {
            color: #1a1a1a;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 22px;
        }

        .our-solution__list ul li {
            padding: 12px 0;
            border-bottom: 1px solid #f1f5f9;
            font-size: 15px;
            color: #555;
            display: flex;
            align-items: center;
        }

        .our-solution__list ul li:last-child {
            border-bottom: none;
        }

        .our-solution__list ul li span.fas {
            color: #0047ab;
            margin-right: 12px;
            font-size: 14px;
        }

        .our-solution__box {
            background: #0047ab;
            color: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,71,171,0.3);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .our-solution__box__icon {
            margin-bottom: 20px;
        }

        .our-solution__box__icon span {
            font-size: 40px;
            color: white;
        }

        .our-solution__box__text {
            font-size: 16px;
            font-weight: 600;
            line-height: 1.4;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .our-solution__content {
                padding-left: 0;
                margin-top: 50px;
            }
        }

        @media (max-width: 768px) {
            .our-solution {
                padding: 60px 0;
            }

            .benefit-item {
                padding: 15px;
                margin-bottom: 15px;
            }
        }

        /* Client Carousel Logo Styling */
        .client-carousel__one__item {
            display: flex !important;
            align-items: center;
            justify-content: center;
            padding: 15px;
            height: 120px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .client-carousel__one__item:hover {
            background: rgba(255, 255, 255, 1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .client-carousel__one__item img {
            max-width: 150px;
            max-height: 90px;
            width: auto;
            height: auto;
            object-fit: contain;
            opacity: 1.0 !important;
            transition: all 0.3s ease;
        }

        .client-carousel__one__item:hover img {
            transform: scale(1.05);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .client-carousel__one__item {
                height: 100px;
                padding: 10px;
            }

            .client-carousel__one__item img {
                max-width: 120px;
                max-height: 70px;
            }
        }

        @media (max-width: 480px) {
            .client-carousel__one__item {
                height: 80px;
                padding: 8px;
            }

            .client-carousel__one__item img {
                max-width: 100px;
                max-height: 60px;
            }
        }
    </style>
    <!-- Service End -->

    <!-- Client Carousel Section -->
    <section class="client-carousel-section" style="padding: 80px 0; background-color: #f8fafc;">
        <div class="client-carousel client-carousel--no-border">
            <div class="container">
                <!-- Section Header -->
                <div class="text-center mb-5">
                    <div class="sec-title">
                       
                        <h3 class="sec-title__title">{{ __('common.our_clients') }}</h3>
                         <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>{{ __('common.trusted_by') }}<span class="sec-title__tagline__right"></span></h6>
                    </div>
                </div>
                <div class="client-carousel__one tolak-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1
                },
                "360":{
                    "items":2
                },
                "575":{
                    "items":3
                },
                "768":{
                    "items":3
                },
                "992":{
                    "items": 4
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/pnb.png') }}" alt="PNB">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/sme-bank-seeklogo.png') }}" alt="SME Bank">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/johorean_comrade.jpg') }}" alt="Johorean Comrade">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/al-ikhsan.png') }}" alt="Al-Ikhsan">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/madad.jpg') }}" alt="Madad Dakwah Centre">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/Logo-Protasa-Website.png') }}" alt="Protasa Properties">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/mergong-tiling.jpg') }}" alt="Mergong Tiling Sdn Bhd">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/EMS-Logo-06.png') }}" alt="EMS - Esthetic Medical Solution">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/logo.png') }}" alt="Client Logo">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/wsc_20220927113056220960.jpeg') }}" alt="WSC">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/PERKIM-LOGO-BARU.jpg') }}" alt="PERKIM">
                    </div><!-- /.owl-slide-item-->
                    <div class="client-carousel__one__item">
                        <img src="{{ asset('/assets/images/clients/beta.png') }}" alt="PERKIM">
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->
    </section><!-- /.client-carousel-section -->

    <section class="our-solution" style="background: linear-gradient(135deg, #051d1f, #1e3a8a, #1e3a8a 100%); position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="our-solution__image">
                        <div class="our-solution__border-one"></div>
                        {{-- <div class="our-solution__border-two"></div> --}}
                        <img src="{{ asset("/assets/images/new-images/image-ws3.jpeg") }}" alt="tolak">
                        <div class="our-solution__border-three"></div>
                        <div class="our-solution__image__shape"><img
                                src="{{ asset('/assets/images/shapes/solution-1-shape-1.png') }}" alt="tolak"></div>
                    </div><!-- /.our-solution__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="our-solution__content">
                        <div class="sec-title text-left">
                            <h6 class="sec-title__tagline"><span class="sec-title__tagline__left"></span>{{ __('common.why_choose_us') }}<span class="sec-title__tagline__right"></span></h6>
                            <!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">{{ __('common.strategic_partner_title') }}</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        {{-- <p class="our-solution__content__text">
                            Dengan pengalaman melayani lebih 100+ perniagaan di Malaysia, kami memahami cabaran sebenar yang dihadapi oleh syarikat tempatan. Berpusat di Alor Setar, Kedah, kami melayani klien dari seluruh Malaysia dengan komitmen memberikan solusi pemasaran digital yang berkesan dan terukur.
                        </p> --}}
                        
                        <!-- Key Benefits Section -->
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5">
                                <div class="our-solution__box">
                                    <div class="our-solution__box__icon">
                                        <img src="{{ asset('/assets/images/logo-4.png') }}" alt="Kreatif Digital Dinamik" style="max-width: 120px; height: auto;">
                                    </div>
                                    <p class="our-solution__box__text">
                                       <br>
                                        <span style="font-size: 14px; opacity: 0.9;">{{ __('common.strategic_partner_tagline') }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7">
                                <div class="our-solution__list">
                                    <h5 class="our-solution__list__title">{{ __('common.quality_commitment_title') }}</h5>
                                    <ul>
                                        <li><span class="fas fa-check-circle"></span>{{ __('common.portfolio_proven') }}</li>
                                        <li><span class="fas fa-check-circle"></span>{{ __('common.roi_measured') }}</li>
                                        <li><span class="fas fa-check-circle"></span>{{ __('common.quick_response') }}</li>
                                        <li><span class="fas fa-check-circle"></span>{{ __('common.personal_approach') }}</li>
                                        <li><span class="fas fa-check-circle"></span>{{ __('common.comprehensive_service') }}</li>
                                    </ul>
                                    <div class="our-solution__list__border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.our-solution -->
    <!-- Feature Start -->

    

  <section class="faq-one faq-one--dark" style="background-image: url(assets/images/shapes/faq-bg-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-one__accordion tolak-accrodion" data-grp-name="tolak-accrodion">
                    
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>
                                {{ __('common.faq_q1') }}
                                <span class="accrodion-title__icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>
                                    {{ __('common.faq_a1') }}
                                </p>
                            </div>
                        </div>
                    </div><div class="accrodion active">
                        <div class="accrodion-title">
                            <h4>
                                {{ __('common.faq_q2') }}
                                <span class="accrodion-title__icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>
                                    {{ __('common.faq_a2') }}
                                </p>
                            </div>
                        </div>
                    </div><div class="accrodion">
                        <div class="accrodion-title">
                            <h4>
                                {{ __('common.faq_q3') }}
                                <span class="accrodion-title__icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>
                                    {{ __('common.faq_a3') }}
                                </p>
                            </div>
                        </div>
                    </div><div class="accrodion">
                        <div class="accrodion-title">
                            <h4>
                                {{ __('common.faq_q4') }}
                                <span class="accrodion-title__icon"></span>
                            </h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>
                                    {{ __('common.faq_a4') }}
                                </p>
                            </div>
                        </div>
                    </div></div>
            </div><div class="col-lg-6 d-flex align-items-center">
                <div class="faq-one__content">
                    <div class="sec-title-two text-left">
                        <h6 class="sec-title-two__tagline"><span
                                class="sec-title-two__tagline__left icofont-rounded-double-left"></span>{{ __('common.faq_tagline') }}<span 
                                class="sec-title-two__tagline__right icofont-rounded-double-right"></span></h6>
                        <h3 class="sec-title-two__title">{{ __('common.company_title') }}<br><span></span>{{ __('common.company_subtitle') }} </h3>
                    </div><div class="row">
                        <div class="col-md-5">
                            <div class="faq-one__image tolak-tilt"
                                data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 7, "speed": 700, "scale": 1 }'>
                                <img src="{{ asset('/assets/images/gallery/untitled-5crop.jpg') }}" alt="Kreatif Digital Dinamik">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="faq-one__right">
                                <div class="faq-one__experiance count-box">
                                    <h3 class="faq-one__experiance__count"><span class="count-text" data-stop="100"
                                            data-speed="1500"></span>+</h3>
                                    <h5 class="faq-one__experiance__title">{{ __('common.projects_successful') }}</h5>
                                </div>
                                <h4 class="faq-one__right__title">{{ __('common.faq_right_title') }}</h4>
                                <p class="faq-one__right__text">{{ __('common.faq_right_text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></section>


    <x-footer />
    <x-mobileMenu />
    <x-sidebar />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
