@extends('site.layout.main')
@section('title', 'Ecofemenino - Artigos de Notícias')
@section('content')

    <!--================= Author Profile Section Start Here =================-->
    <div class="rts-author-profile-area section-gap-2" style="background: #e9ecef !important;" id="editorial">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Editorial</h2>
                <div class="wide-border" style="background: #a09797 !important;width: 55rem !important"></div>
            </div>

            <div class="author-profile-box" style="background: #e9ecef !important;">
                <div class="author-profile-picture"><img style="height: 40rem"
                        src="{{ asset('assets/user/images/vice.jpg') }}" alt="author-profile-picture">
                </div>

                <div class="author-information" {{-- style="margin-top: -10rem !important" --}}>
                    {{-- <span class="author-level">Senior Author</span> --}}
                    <h2 class="author-name mb--20">Esperança Maria Eduardo Francisco da Costa</h2>
                    <p class="mb--50">Bióloga e política angolana filiada ao partido MPLA e actual Vice-Presidente da
                        República de Angola, mandato iniciado a 15 de Setembro de
                        2022, após tomada de posse, na Praça da República, Luanda. <br> <br>

                        Desenvolveu um intenso trabalho para a
                        promoção da investigação científica com ajuda de referenciados acadêmicos. Mais tarde, faria parte
                        do Colégio Reitoral da Universidade Agostinho Neto, na qualidade de vice-reitora para a expansão
                        universitária, cujo papel era a coordenação da expansão do ensino nas várias regiões do país e
                        conseguir uma investigação científica com grande impacto na qualidade de ensino.</p>
                    <div class="author-achives">
                        <div class="author-follow">
                            <span class="follow-title">Follow:</span>
                            <ul class="social-links">
                                <li> <a href="#" class="platform"><i class="fab fa-facebook-f"></i></a></li>
                                <li> <a href="#" class="platform"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li><a href="#" class="platform"><i class="fab fa-linkedin-in"></i></a></li>
                                <li> <a href="#" class="platform"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="articles-published"><span class="article-value">44</span>Articles Published</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Author Profile Section End Here =================-->

    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" id="debate-femenino" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Debate Feminino</h2>
                <div class="wide-border" style="background: #a09797 !important;"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="gallery-item">
                    <a class="image-popup-vertical-fit" href="{{ url('assets/user/images/gallery/popup/auria.jpg') }}"
                        style="height: 350px !important"
                        title="<h5>Auria Machado</h5><p>Conhecida como 'Rainha dos Porcos', personalidade marcante no cenário cultural.</p>">
                        <img src="{{ url('assets/user/images/gallery/auria.jpg') }}" alt="Auria Machado" />
                    </a>
                    <div class="contents">
                        <h5 class="member-role">Rainha dos Porcos</h5>
                        <a href="#" class="member-name">Auria Machado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured video Section End Here =================-->

    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" style="background: #e9ecef !important;"
        id="direitos-humanos" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Direitos Humanos</h2>
                <div class="wide-border" style="background: #a09797 !important;"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="gallery-item">
                    <a class="image-popup-vertical-fit"
                        href="{{ url('assets/user/images/gallery/popup/Silvia Lutucuta Ministra da Saude.jpg') }}"
                        style="height: 350px !important"
                        title="<h5>Silvia Lutucuta</h5><p>Ministra da Saúde de Angola desde 2017. Médica cardiologista e professora universitária.</p>">
                        <img src="{{ url('assets/user/images/gallery/Silvia Lutucuta Ministra da Saude.jpg') }}"
                            alt="Silvia Lutucuta" />
                    </a>
                    <div class="contents">
                        <h5 class="member-role">Ministra da Saúde</h5>
                        <a href="#" class="member-name">Silvia Lutucuta</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--================= Featured video Section End Here =================-->

    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" id="coluna-internacional"
        data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Coluna Internacional</h2>
                <div class="wide-border" style="background: #a09797 !important;"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 col-sm-6">
                <div class="gallery-item">
                    <a class="image-popup-vertical-fit"
                        href="{{ url('assets/user/images/gallery/popup/Vera Daves Ministra das Financas.jpeg') }}"
                        style="height: 350px !important"
                        title="<h5>Vera Daves</h5><p>Ministra das Finanças de Angola, primeira mulher a assumir a pasta.</p>">
                        <img src="{{ url('assets/user/images/gallery/Vera Daves Ministra das Financas.jpeg') }}"
                            alt="Vera Daves" />
                    </a>
                    <div class="contents">
                        <h5 class="member-role">Ministra das Finanças</h5>
                        <a href="#" class="member-name">Vera Daves</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured video Section End Here =================-->

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Ou se quiser mais controle */
        .rts-sports-section {
            scroll-margin-top: 100px;
            /* Ajuste conforme a altura do seu header */
        }
    </style>

@endsection
