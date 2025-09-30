<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EcoFeminino')</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ url('assets/user/images/24..png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/user/images/ecofem1.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('assets/user/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/user/css/all.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ url('assets/user/css/animate.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ url('assets/user/css/magnific-popup.css') }}">
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ url('assets/user/css/swiper.min.css') }}">
    <!-- Menu -->
    <link rel="stylesheet" href="{{ url('assets/user/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/css/rtsmenu.css') }}">
    <!-- Main -->
    <link rel="stylesheet" href="{{ url('assets/user/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/css/my_style.css') }}">
</head>

<body class="bg-1">

    @include('layouts._site.header')
    @yield('content')
    @include('layouts._site.footer')

    <!-- Scroll to Top -->
    <div class="scroll-top-btn">
        <i class="fas fa-angle-up arrow-up"></i>
        <i class="fas fa-circle-notch"></i>
    </div>

    <!-- Scripts -->
    <script src="{{ url('assets/user/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('assets/user/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/user/js/vendors/wow.min.js') }}"></script>
    <script src="{{ url('assets/user/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/user/js/vendors/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/user/js/vendors/rtsmenu.js') }}"></script>
    <script src="{{ url('assets/user/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/user/js/main.js') }}"></script>

    <!-- Inicialização única -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1) Remove slides duplicados POR DATA-ID (antes de inicializar o Swiper)
            document.querySelectorAll('.rts-cmmnSlider').forEach(function(slider) {
                const seen = new Set();
                // seleciona slides *originais* na wrapper
                slider.querySelectorAll('.swiper-wrapper > .swiper-slide').forEach(function(slide) {
                    // chave única: data-id (se existir) ou src da imagem
                    const key = slide.getAttribute('data-id') || (slide.querySelector('img') ? slide
                        .querySelector('img').src : null);
                    if (key) {
                        if (seen.has(key)) {
                            slide.remove();
                        } else {
                            seen.add(key);
                        }
                    }
                });
            });

            // 2) Inicializa Swiper apenas uma vez por elemento (evita reinit duplicado)
            document.querySelectorAll('.rts-cmmnSlider').forEach(function(slider) {
                // se já tiver um swiper associado, pula
                if (slider.swiper) return;

                // só inicializa se tiver ao menos 1 slide
                const slideCount = slider.querySelectorAll('.swiper-slide').length;
                if (slideCount === 0) return;

                slider.swiper = new Swiper(slider, {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    loop: false,
                    autoplay: false,
                    navigation: {
                        nextEl: slider.querySelector('.swiper-button-next'),
                        prevEl: slider.querySelector('.swiper-button-prev'),
                    },
                    breakpoints: {
                        1200: {
                            slidesPerView: 4
                        },
                        992: {
                            slidesPerView: 3
                        },
                        768: {
                            slidesPerView: 2
                        },
                        576: {
                            slidesPerView: 1
                        }
                    }
                });
            });

            // 3) Inicializa Magnific Popup uma vez
            if (typeof jQuery !== 'undefined' && typeof jQuery.fn.magnificPopup !== 'undefined') {
                jQuery('.rts-cmmnSlider').magnificPopup({
                    delegate: 'a.image-popup',
                    type: 'image',
                    gallery: {
                        enabled: true
                    },
                    mainClass: 'mfp-img-mobile mfp-with-zoom',
                    image: {
                        verticalFit: true,
                        titleSrc: function(item) {
                            return item.el ? item.el.attr('title') || '' : '';
                        }
                    }
                });
            }
        });
    </script>

</body>

</html>
