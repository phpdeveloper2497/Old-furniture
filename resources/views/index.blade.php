<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Tooplate">

    <title> Old furniture</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{ asset('css/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{ asset('css/tooplate-moso-interior.css')}}" rel="stylesheet">

    <style>
        body {
            font-family: 'League Spartan', sans-serif;
            line-height: 1.7;
            color: #333;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 600;
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .section-small-title {
            font-size: 1.2rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-link {
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
        }

        h3 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin: 1.5rem 0;
            line-height: 1.6;
        }

        .contact-section h2,
        .about-section h2 {
            color: #2c3e50;
            margin-bottom: 2rem;
        }

        .hero-section-text {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 10px;
        }

        #section_2 ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0.8rem;
        }

        #section_2>.container>.row ul>li {
            position: relative;
            padding: 6px 0 6px 22px;
            margin-bottom: 6px;
            font-size: 1.05rem;
            color: #2c3e50;
            font-weight: 500;
        }

        #section_2>.container>.row>div>ul>li:before {
            content: '➤';
            position: absolute;
            left: 0;
            color: #e74c3c;
            font-size: 0.9rem;
            top: 8px;
        }

        #section_2 ul ul {
            margin-top: 4px;
            padding-left: 15px;
        }

        #section_2 ul ul li {
            position: relative;
            padding: 3px 0 3px 18px;
            color: #505c68;
            font-size: 0.95rem;
        }

        #section_2 ul ul li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #27ae60;
            font-size: 1rem;
            top: 4px;
        }

        #section_2 ul li:hover {
            transform: translateX(3px);
            transition: transform 0.2s ease;
            color: #e74c3c;
        }

        #section_2 ul ul li:hover {
            color: #27ae60;
        }

        .language-selector {
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .language-selector a {
            padding: 4px 8px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.85rem;
            transition: all 0.2s ease;
            text-transform: uppercase;
            color: #333;
            background: #f8f9fa;
            border: 1px solid #dee2e6;
        }

        .language-selector a.active {
            background: #28a745;
            color: white;
            border-color: #28a745;
        }

        .language-selector a:hover {
            background: #28a745;
            color: white;
            transform: translateY(-1px);
        }

        @media (max-width: 991px) {
            .navbar-brand {
                font-size: 1.2rem;
            }

            .language-selector a {
                padding: 3px 6px;
                font-size: 0.8rem;
            }

            .navbar-nav {
                text-align: center;
            }
        }

        #section_2 {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            position: relative;
            padding: 80px 0;
            overflow: hidden;
        }

        #section_2::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 100% 50%, transparent 20%, rgba(231, 76, 60, 0.03) 21%, rgba(231, 76, 60, 0.03) 34%, transparent 35%, transparent),
                radial-gradient(circle at 0% 50%, transparent 20%, rgba(231, 76, 60, 0.03) 21%, rgba(231, 76, 60, 0.03) 34%, transparent 35%, transparent) 50px -50px;
            background-size: 100px 100px;
            opacity: 0.6;
        }

        #section_2 .section-small-title {
            color: #e74c3c;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1rem;
            display: inline-block;
            padding: 5px 15px;
            background: rgba(231, 76, 60, 0.1);
            border-radius: 20px;
        }

        #section_2 h2 {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
        }

        #section_2 h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: #e74c3c;
            border-radius: 2px;
        }

        #section_2 .service-list {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(0,0,0,0.05);
            position: relative;
        }

        #section_2 .service-list > li {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 1rem;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        #section_2 .service-list > li:hover {
            background: #ffffff;
            transform: translateX(10px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        #section_2 .service-list ul {
            list-style: none;
            padding-left: 20px;
            margin-top: 10px;
        }

        #section_2 .service-list ul li {
            color: #34495e;
            padding: 8px 0;
            position: relative;
            transition: all 0.2s ease;
        }

        #section_2 .service-list ul li:before {
            content: '✓';
            position: absolute;
            left: -20px;
            color: #e74c3c;
        }

        #section_2 .service-list ul li:hover {
            color: #e74c3c;
            transform: translateX(5px);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#"> {{ __('all.Old') }} <span class="tooplate-red"> {{ __('all.furniture') }}</span><span class="tooplate-green"></span></a>

            <div class="d-flex align-items-center d-lg-none">
                <div class="language-selector me-2">
                    @foreach($all_locales ?? [] as $locale)
                    <a href="{{ route('locale.change', ['locale' => $locale]) }}"
                        class="{{ $locale === $current_locale ? 'active' : '' }}">
                        {{ $locale }}
                    </a>
                    @endforeach
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">{{ __('all.Home') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">{{__('all.Service')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_5">{{ __('all.Contact') }}</a>
                    </li>
                </ul>

                <div class="language-selector d-none d-lg-flex">
                    @foreach($all_locales ?? [] as $locale)
                    <a href="{{ route('locale.change', ['locale' => $locale]) }}"
                        class="{{ $locale === $current_locale ? 'active' : '' }}">
                        {{ $locale }}
                    </a>
                    @endforeach
                </div>

            </div>
        </div>
    </nav>


    <main>

        <section class="hero-section hero-slide d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 text-center mx-auto">
                        <div class="hero-section-text">
                            <small class="section-small-title"> {{ __('all.home_title') }} <i class="hero-icon bi-house"></i></small>

                            <h2 class="hero-title text-white mt-2 mb-4"> {{ __('all.title_service1')  }} </h2>
                            </n>
                            <h2 class="hero-title text-white mt-2 mb-4"> {{ __('all.title_service2')  }} </h2>

                        </div>
                    </div>

                </div>
            </div>
        </section>

       <section class="about-section section-padding " id="section_2">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-12">
                        <small class="section-small-title">{{ __('all.our_service') }}</small>


                        <h5 class="text-muted mb-3">{{ __('all.title_service4') }}</h5>

                        <p>
                        <h2> {{ __('all.title_service3') }} </h2>
                        <ul class="service-list">
                            <li> Barcha turdagi maishiy texnikalar
                                <ul>
                                    <li>Muzlatkich</li>
                                    <li>Kir yuvish mashinasi</li>
                                    <li>Elektr pech</li>
                                    <li>Konditsioner</li>
                                    <li>Televizor</li>
                                    <li>Gaz plita</li>
                                </ul>
                            </li>
                            <li> Barcha turdagi yumshoq mebellar
                                <ul>
                                    <li>Divan</li>
                                    <li>Kreslo</li>
                                    <li>Burchak oshxona mebel</li>
                                    <li>Kravat va spalniy</li>
                                </ul>
                            </li>
                            <li> Barcha turdagi mebellar
                                <ul>
                                    <li>Shkaf</li>
                                    <li>Stol</li>
                                    <li>Stul</li>
                                </ul>
                            </li>
                            <li> Gilam va boshqa uydagi barcha jihozlarni</li>
                        </ul>
                        </p>

                        <p>
                        <h2> {{ __('all.title_service5') }} </h2>

                        <h3 class="text-center"> Barcha turdagi maishiy texnikalar, mebellar va uy jihozlarini </h3>

                        </p>
                    </div>

                    {{-- <div class="col-lg-5 col-12">--}}
                    {{-- <img src="{{ asset('images/service.png')}}" class="img-fluid w-100" alt="Service Image" style="max-width: 100%; height: auto; object-fit: contain;">--}}
                    {{-- </div>--}}

                </div>
            </div>
        </section>


        <section class="featured-section section-padding" style="background: #ffffff;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="custom-block text-center p-4" style="background: #ffffff; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.05);">
                            <h2 class="mt-2 mb-4">{{ __('all.work_time') }}</h2>
                            <div class="d-flex justify-content-center">
                                <div class="work-time-image-wrapper" style="max-width: 200px;">
                                    <img src="{{ asset('images/work_time.avif') }}" class="img-fluid rounded work-time-image" alt="work time" style="width: 100%; height: auto; object-fit: contain; background: #ffffff;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <div class="service-image-wrapper">
                            <img src="{{ asset('images/service.png') }}" class="img-fluid rounded shadow-sm" alt="Service Image" style="width: 100%; height: auto; object-fit: contain;">
                        </div>
                    </div>

                </div>
            </div>
        </section>




        <section class="contact-section" id="section_5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f9f9f9" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
            </svg>
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="mb-4">{{ __('all.contact_all') }}</h2>
                    </div>


                    <div class="col-lg-6 col-12">
                        <div class="custom-block">
                            <h3 class="text-white mb-2">{{ __('all.address') }}</h3>

                            <p class="text-white mb-2">
                                <i class="contact-icon bi-geo-alt me-1"></i>
                                {{ __('all.address_store') }}
                            </p>

                            <h3 class="text-white mt-3 mb-2">{{ __('all.Contact_info') }}</h3>

                            <div class="d-flex flex-wrap">
                                <p class="text-white mb-2 me-4">
                                    <i class="contact-icon bi-telephone me-1"></i>
                                    <a href="tel:090-080-0760" class="text-white">
                                        +998909460909
                                    </a>
                                </p>

                                <p class="text-white">
                                    <i class="contact-icon bi-envelope me-1"></i>
                                    <a href="mailto:info@company.com" class="text-white">
                                        akmalfayziyev203@gmail.com
                                    </a>
                                </p>

                                <p class="text-white">
                                    <a href="https://t.me/kuplyuveshidoma" class="social-icon-link social-icon-twitter bi-telegram">
                                        {{ __('all.telegram_canal') }}
                                    </a>
                                </p>

                                <p class="text-white">
                                    <a href="https://www.facebook.com/share/1DMvMXytPU/" class="social-icon-link social-icon-facebook bi-facebook">
                                        Facebook
                                    </a>
                                </p>
                                <p class="text-white">
                                    <a href="https://www.instagram.com/4283.akmal?igsh=MXhqeHh1b3d6Z25xYQ==" class="social-icon-link social-icon-instagram bi-instagram">
                                        Instagram
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <iframe class="google-map mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1347.2503359261257!2d69.27160507982973!3d41.27933340866762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8abb00b58e8b%3A0x6f1a8650ab6bd42a!2z0YPQu9C40YbQsCDQkdC-0LPQuNCx0LDQu9Cw0L3QtCA1MSwg0KLQvnNoa2VudCwgVG9zaGtlbnQsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e1!3m2!1sru!2s!4v1747990078223!5m2!1sru!2s" width="370" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </section>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#36363e" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                {{-- <div class="col-lg-3 col-md-3 col-12 ms-lg-auto mb-3">--}}
                {{-- <h3 class="text-white mb-3">{{ __('all.address') }}</h3>--}}

                {{-- <p class="text-white mt-2">--}}
                {{-- <i class="bi-geo-alt"></i>--}}
                {{-- {{ __('all.address_store') }}--}}
                {{-- </p>--}}
                {{-- </div>--}}

                {{-- <div class="col-lg-3 col-md-4 col-12 mb-3">--}}
                {{-- <h3 class="text-white mb-3">{{ __('all.Contact_info') }}</h3>--}}

                {{-- <p class="text-white mb-1">--}}
                {{-- <i class="bi-telephone me-1"></i>--}}

                {{-- <a href="tel: 090-080-0760" class="text-white">--}}
                {{-- +998909460909--}}
                {{-- </a>--}}
                {{-- </p>--}}

                {{-- <p class="text-white mb-0">--}}
                {{-- <i class="bi-envelope me-1"></i>--}}

                {{-- <a href="mailto:info@company.com" class="text-white">--}}
                {{-- akmalfayziyev203@gmail.com--}}
                {{-- </a>--}}
                {{-- </p>--}}
                {{-- </div>--}}

                <div class="col-lg-9 col-md-2 copyright-text-wrap col-6 d-flex flex-wrap align-items-center mt-2 ms-auto">
                    <p class="copyright-text mb-0 me-4"> © Toshkent 2025</p>

                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link social-icon-twitter bi-telegram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://www.facebook.com/share/1DMvMXytPU/" class="social-icon-link social-icon-facebook bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://www.instagram.com/4283.akmal?igsh=MXhqeHh1b3d6Z25xYQ==" class="social-icon-link social-icon-instagram bi-instagram"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
