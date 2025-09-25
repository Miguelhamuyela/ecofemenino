@extends('site.layout.main')
@section('title', 'EcoFeminino - Perfil Inspirador')
@section('content')

    <!--================= News Details Section End Here =================-->
    <div class="rts-news-details-section section-gap-2" style="background-color: #e9ecef;">
        <div class="container">
            <div class="rts-post-heading mb--50">
                <div class="heading-content">
                    <div class="contents">
                        <a href="#0" class="news-catagory-tag-3">EcoFeminino</a>
                        <h2 class="content-title mb--10"><a href="news-details.html">Perfil Inspirador</a></h2>
                        {{-- <div class="overview-play-btn">
                            <div class="post-bottom-info">
                                <a href="author.html" class="post-author item"><img
                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Ashley Graham</a>
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="comment-icon">January
                                    16, 2024</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/date.svg') }}"
                                        alt="share-icon">16
                                    Shares</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--================= Author Profile Section Start Here =================-->
            <div class="rts-author-profile-area section-gap-2">
                <div class="container">
                    {{-- <div class="news-topbar news-topbar-2">
                        <h2 class="section-title">Primeira Dama</h2>
                        <div class="wide-border" style="width: 55rem !important"></div>
                    </div> --}}

                    <div class="author-profile-box" style="background: #e9ecef; margin-top: -5rem !important">
                        <div class="author-profile-picture"><img
                                src="{{ asset('assets/user/images/PRIMEIRA-DAMA-DE-ANGOLA-8850-scaled.jpg') }}"
                                alt="author-profile-picture">
                        </div>

                        <div class="author-information" {{-- style="margin-top: -10rem !important" --}}>
                            {{-- <span class="author-level">Senior Author</span> --}}
                            <h2 class="author-name mb--20">Ana Dias Lourenço</h2>
                            <p class="mb--50">Ana Afonso Dias Lourenço (Luanda, 13 de abril de 1957) é uma economista e
                                política
                                angolana, primeira-dama de Angola desde 2017 como esposa do presidente João Lourenço e
                                deputada
                                desde 2008. Ela possui ampla experiência na administração pública, destacando-se em
                                planeamento
                                económico, investimento e análise de projetos. <br> <br>

                                Desde 2019, participa ativamente em iniciativas internacionais e nacionais, como o Grupo de
                                Mulheres
                                Líderes pela Igualdade de Género da ONU, a Fundação Ngana Zanza e o Fórum de Parceiros da
                                UNESCO
                                (Bienal de Luanda). Seu trabalho é voltado para o empoderamento feminino e o desenvolvimento
                                sustentável, em parceria com figuras como a ativista indiana Licypriya Kangujam.</p>
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
                                <div class="articles-published"><span class="article-value">44</span>Articles Published
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Author Profile Section End Here =================-->

            <!--================= Gallery Section Start Here =================-->
    <div class="rts-gallery-section gallary-page-section pt--40 mb--40">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Mais Perfis</h2>
                <div class="wide-border" style="width: 55rem !important"></div>
            </div>

            <div class="row">
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

                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit"
                            href="{{ url('assets/user/images/gallery/popup/Ana Lemos Apresentadora..jpg') }}"
                            style="height: 350px !important"
                            title="<h5>Ana Lemos</h5><p>Apresentadora reconhecida pela sua presença em programas televisivos.</p>">
                            <img src="{{ url('assets/user/images/gallery/Ana Lemos Apresentadora..jpg') }}"
                                alt="Ana Lemos" />
                        </a>
                        <div class="contents">
                            <h5 class="member-role">Apresentadora</h5>
                            <a href="#" class="member-name">Ana Lemos</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit"
                            href="{{ url('assets/user/images/gallery/popup/Yola Semedo Cantora.jpg') }}"
                            style="height: 350px !important"
                            title="<h5>Yola Semedo</h5><p>Cantora angolana, ícone da música romântica e semba contemporâneo.</p>">
                            <img src="{{ url('assets/user/images/gallery/Yola Semedo Cantora.jpg') }}"
                                alt="Yola Semedo" />
                        </a>
                        <div class="contents">
                            <h5 class="member-role">Cantora</h5>
                            <a href="#" class="member-name">Yola Semedo</a>
                        </div>
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

                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit"
                            href="{{ url('assets/user/images/gallery/popup/Leila Lopes Miss.jpg') }}"
                            style="height: 350px !important"
                            title="<h5>Leila Lopes</h5><p>Miss Universo 2011, referência da beleza angolana a nível internacional.</p>">
                            <img src="{{ url('assets/user/images/gallery/Leila Lopes Miss.jpg') }}" alt="Leila Lopes" />
                        </a>
                        <div class="contents">
                            <h5 class="member-role">Miss</h5>
                            <a href="#" class="member-name">Leila Lopes</a>
                        </div>
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

                <div class="col-xl-6 mx-auto">
                    <a class="view-more-news" href="{{ route('site.news.profile') }}">
                        Ver Mais<i class="far fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!--================= Gallery Section End Here =================-->

        </div>
    </div>
    <!--================= News Details Section End Here =================-->

    <style>
        .news-catagory-tag-3 {
            background: #ff1856 !important;
        }
    </style>

    <script>
        var swiper = new Swiper(".rts-cmmnSlider", {
            loop: true, // loop infinito
            autoplay: {
                delay: 3000, // tempo entre slides (3s)
                disableOnInteraction: false, // continua mesmo após interação
                reverseDirection: false, // false = esquerda → direita (padrão)
            },
            slidesPerView: 1, // um slide de cada vez
            spaceBetween: 20, // espaço entre slides
            speed: 1000, // velocidade da transição
        });
    </script>



@endsection
