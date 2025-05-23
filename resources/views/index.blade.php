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


</head>

<body>

<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="#"> {{ __('all.Old') }} <span class="tooplate-red"> {{ __('all.furniture') }}</span><span class="tooplate-green"></span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
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
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper($current_locale ?? 'uz') }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        @foreach($all_locales ?? [] as $locale)
                            <li>
                                <a class="dropdown-item text-uppercase {{ $locale === $current_locale ? 'active' : '' }}"
                                   href="{{ route('locale.change', ['locale' => $locale]) }}">
                                    {{ $locale }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>

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

                        <h2 class="hero-title text-white mt-2 mb-4"> {{ __('all.title_service1')  }}  </h2> </n>
                        <h2 class="hero-title text-white mt-2 mb-4"> {{ __('all.title_service2')  }} </h2>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5 col-12">
                    <small class="section-small-title">{{ __('all.our_service') }}</small>

                    <h2 class="mt-2 mb-4"><span class="text-muted">{{ __('all.title_service1') }}</span> {{ __('all.title_service2') }}</h2>

                    <h4 class="text-muted mb-3">{{ __('all.title_service3') }}</h4>

                    <p>
                    <h2> {{ __('all.title_service4') }} </h2>

                    <ul>
                        <li> Barcha turdagi maishiy texnikalar (Muzlatkich, kir yuvosh mashinasi, elektr pech,konditsioner,televizor,gaz plita) </li>
                        <li> Barcha turdagi yumshoq mebellar (divan, kreslo, burchak  oshxona mebel) </li>
                        <li> Barcha turdagi mebellar (shkaf, stol, stul) </li>
                        <li> Gilam va boshqa uydagi barcha jihozlarni</li>
                    </ul>
                    </p>
                </div>

                <div class="col-lg-3 col-md-5 col-5 mx-lg-auto">
                    <img src=" {{ asset('images/sharing-design-ideas-with-family.jpg')}}" class="about-image about-image-small img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-7 col-7">
                    <img src="{{ assert('images/living-room-interior-wall-mockup-warm-tones-with-leather-sofa-which-is-kitchen-3d-rendering.jpg') }}" class="about-image img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>


    <section class="featured-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-12">
                    <div class="custom-block featured-custom-block">
                        <h2 class="mt-2 mb-4">{{ __('all.work_time') }}</h2>

                        <div class="d-flex">
                            <i class="featured-icon bi-clock me-3"></i>

                            <div>
                                <div class="work-time-image-wrapper mx-lg-auto">
                                    <img src="{{ asset('images/work_time.avif') }}" class="img-fluid rounded shadow-sm work-time-image" alt="work time">
                                </div>
                            </div>
                        </div>
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

                {{-- Ma'lumotlar chap tomonda, forma o‘rnida --}}
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
                                <a href="#" class="social-icon-link social-icon-twitter bi-telegram">
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

                {{-- Chapdagi karta bilan yonma-yon turadi: Google map --}}
                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <iframe class="google-map mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1347.2503359261257!2d69.27160507982973!3d41.27933340866762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8abb00b58e8b%3A0x6f1a8650ab6bd42a!2z0YPQu9C40YbQsCDQkdC-0LPQuNCx0LDQu9Cw0L3QtCA1MSwg0KLQvnNoa2VudCwgVG9zaGtlbnQsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e1!3m2!1sru!2s!4v1747990078223!5m2!1sru!2s" width="370" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36363e" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
</main>

<footer class="site-footer section-padding">
    <div class="container">
        <div class="row">

{{--            <div class="col-lg-3 col-md-3 col-12 ms-lg-auto mb-3">--}}
{{--                <h3 class="text-white mb-3">{{ __('all.address') }}</h3>--}}

{{--                <p class="text-white mt-2">--}}
{{--                    <i class="bi-geo-alt"></i>--}}
{{--                   {{ __('all.address_store') }}--}}
{{--                </p>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-4 col-12 mb-3">--}}
{{--                <h3 class="text-white mb-3">{{ __('all.Contact_info') }}</h3>--}}

{{--                <p class="text-white mb-1">--}}
{{--                    <i class="bi-telephone me-1"></i>--}}

{{--                    <a href="tel: 090-080-0760" class="text-white">--}}
{{--                        +998909460909--}}
{{--                    </a>--}}
{{--                </p>--}}

{{--                <p class="text-white mb-0">--}}
{{--                    <i class="bi-envelope me-1"></i>--}}

{{--                    <a href="mailto:info@company.com" class="text-white">--}}
{{--                        akmalfayziyev203@gmail.com--}}
{{--                    </a>--}}
{{--                </p>--}}
{{--            </div>--}}

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
