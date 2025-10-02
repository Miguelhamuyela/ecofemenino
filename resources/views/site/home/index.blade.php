@extends('layouts._site.main')
@section('title', 'EcoFeminino - Home')
@section('content')


    <!--================= Banner Section Start Here =================-->
    <div class="banner-2">
        <div class="swiper bannerSlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-single banner-single1">
                        <div class="container">
                            <div class="banner-content">
                                <a href="#" class="content-catagory-tag">Mundo
                                    Feminino</a>
                                <div class="contents">
                                    <div class="content-title"><a href="news-details.html">A ministra das Finanças,
                                            Vera Daves de Sousa fala sobre gestão da dívida pública.</a></div>
                                    <div class="post-bottom-info content-bottom-info mb--25">
                                        <a href="author.html" class="content-author item"><img
                                                src="assets/user/images/user.svg" alt="user-icon">Mauro
                                            Oliveira</a>
                                        <span class="content-date item"><img src="assets/user/images/date.svg"
                                                alt="date-icon">Januário
                                            16, 2024</span>
                                        <span
                                            class="content-comment
                                                    item"><img
                                                src="assets/user/images/comment.svg" alt="date-icon">7
                                            comentários</span>
                                    </div>
                                </div>
                                <a href="#0" class="border-btn">Ler
                                    Mais</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="banner-single banner-single2">
                        <div class="container">
                            <div class="banner-content">
                                <a href="#" class="content-catagory-tag">Esportes</a>
                                <div class="contents">
                                    <div class="content-title">
                                        <a href="news-details.html">Angola vence campeonato regional de basquete.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="banner-single banner-single3">
                        <div class="container">
                            <div class="banner-content">
                                <a href="#" class="content-catagory-tag">Política</a>
                                <div class="contents">
                                    <div class="content-title">
                                        <a href="news-details.html">Primeira dama de angola,
                                            Ana Dias Lourenço visita Serra Leoa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="banner-slider-navigation">
            <div class="swiper-button-prev nav-btn"><i class="fal
                            fa-angle-left"></i></div>
            <div class="swiper-button-next nav-btn"><i class="fal
                            fa-angle-right"></i></div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->


    <!--================= Topics Section Start Here =================-->
    <div class="topics">
        <div class="container">
            <div class="topics-inner">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3">
                        <div class="action">
                            <h2 class="topics-title">Melhores
                                Tópicos da Atualidade</h2>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="slider-area">
                            <div class="swiper noGapSlide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/user/images/trending/fititel.webp"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">TI
                                                    Notícias</h3>
                                                <p>7 postagens</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/user/images/topics/afro-moda2.jpg"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Moda</h3>
                                                <p>6 postagens</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/user/images/trending/tecno.jfif"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Tecnologia</h3>
                                                <p>3 postagens</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/user/images/trending/magazine.jpg"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Magazine</h3>
                                                <p>5 postagens</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/user/images/trending/sport.webp"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Sports</h3>
                                                <p>4 postagens</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br>
    </div>
    <!--================= Topics Section End Here =================-->


    <!--================= Author Profile Section Start Here =================-->
    <div class="rts-author-profile-area section-gap-2">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Primeira Dama</h2>
                <div class="wide-border" style="width: 55rem !important"></div>
            </div>

            <div class="author-profile-box">
                <div class="author-profile-picture"><img
                        src="{{ asset('assets/user/images/PRIMEIRA-DAMA-DE-ANGOLA-8850-scaled.jpg') }}"
                        alt="author-profile-picture">
                </div>

                <div class="author-information" {{-- style="margin-top: -10rem !important" --}}>
                    {{-- <span class="author-level">Senior Author</span> --}}
                    <h2 class="author-name mb--20">Ana Dias Lourenço</h2>
                    <p class="mb--50">Ana Afonso Dias Lourenço (Luanda, 13 de abril de 1957) é uma economista e política
                        angolana, primeira-dama de Angola desde 2017 como esposa do presidente João Lourenço e deputada
                        desde 2008. Ela possui ampla experiência na administração pública, destacando-se em planeamento
                        económico, investimento e análise de projetos. <br> <br>

                        Desde 2019, participa ativamente em iniciativas internacionais e nacionais, como o Grupo de Mulheres
                        Líderes pela Igualdade de Género da ONU, a Fundação Ngana Zanza e o Fórum de Parceiros da UNESCO
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
                        <div class="articles-published"><span class="article-value">44</span>Articles Published</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Author Profile Section End Here =================-->


    <!--================= Trending Section Start Here =================-->
    <div class="rts-trending-section section-gap-2 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Notícias em Alta</h2>
                <div class="wide-border"></div>
                <div class="filter-buttons">
                    <div class="filter-btn filter-navigation-btn active" data-show=".technology">Tecnologia</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".technology">Atuação</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".technology">Corrida</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".technology">Música</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".technology">TI</div>
                </div>
            </div>

            {{-- Notícias em Alta --}}
            <div class="rts-post-area technology">
                <div class="row">
                    @foreach ($newsTrending as $new)
                        <div class="col-xl-8 col-lg-8">
                            <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                                <div class="post-picture">
                                    <a class="image-popup-vertical-fit" href="assets/user/images/oma-2.webp"
                                        title="<h5>OMA</h5><p>A Organização da Mulher Angolana (OMA) convocou o seu 8.º Congresso Ordinário em Luanda.</p>">
                                        <img src="{{ url('img/news/' . $new->image) }}" alt="main-post-image">
                                    </a>
                                </div>
                                <div class="contents">
                                    <a href="#0" class="news-catagory-tag-2">{{ $new->category->name }}</a>
                                    <div class="post-title">
                                        <a href="news-details.html">{{ $new->title }}</a>
                                    </div>
                                    <div class="post-bottom-info">
                                        {{-- <a href="author.html" class="post-author item">
                                            <img src="assets/user/images/user.svg" alt="user-icon">{{ $new->autor->name }}
                                        </a> --}}
                                        <span class="post-date item">
                                            <img src="assets/user/images/date.svg"
                                                alt="date-icon">{{ $new->created_at->format('d M, Y') }}
                                        </span>
                                        <span class="post-date item">
                                            <img src="assets/user/images/share.svg" alt="date-icon">16 Partilhas
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- Destaques --}}
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            @foreach ($newsTrending2 as $new)
                                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                    <div class="rts-post-2 rts-post-2-medium rts-post-2-inside mb--20">
                                        <div class="post-picture" style="height: 15.3rem">
                                            <a class="image-popup-vertical-fit"
                                                href="{{ url('img/news/' . $new->image) }}"
                                                title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto no Angotic, destacando inovação tecnológica.</p>">
                                                <img src="{{ url('img/news/' . $new->image) }}" alt="main-post-image">
                                            </a>
                                        </div>
                                        <div class="contents">
                                            <a href="#0" class="news-catagory-tag-2">{{ $new->category->name }}</a>
                                            <div class="post-title">
                                                <a href="news-details.html">{{ $new->title }}</a>
                                            </div>
                                            <div class="post-bottom-info">
                                                {{-- <a href="author.html" class="post-author item">
                                                <img src="assets/user/images/user.svg" alt="user-icon">{{ $new->autor->name }}
                                            </a> --}}
                                                <span class="post-date item">
                                                    <img src="assets/user/images/date.svg"
                                                        alt="date-icon">{{ $new->created_at->format('d M, Y') }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium rts-post-2-inside">
                                    <div class="post-picture">
                                        <a class="image-popup-vertical-fit"
                                            href="assets/user/images/trending/afro-moda.jpg"
                                            title="<h5>Georgina De Almeida</h5><p>Realizou um novo desfile de moda, destacando talento e criatividade no setor.</p>">
                                            <img src="assets/user/images/trending/afro-moda.jpg" alt="main-post-image">
                                        </a>
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Moda</a>
                                        <div class="post-title">
                                            <a href="news-details.html">Georgina De Almeida realiza novo desfile de
                                                moda</a>
                                        </div>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author item">
                                                <img src="assets/user/images/user.svg" alt="user-icon">Hans Down
                                            </a>
                                            <span class="post-date item">
                                                <img src="assets/user/images/date.svg" alt="date-icon">16 Setembro, 2025
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="rts-post-area action hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">Jogos</a>
                                <div class="post-title"><a href="news-details.html">Kanye west
                                        on why he bought house
                                        across from kim kardashian</a></div>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                            item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">16 Setembro, 2025</span>
                                    <span class="post-date item"><img src="assets/user/images/share.svg"
                                            alt="date-icon">16
                                        Partilhas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Tecnologia</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rts-post-area racing hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">Games</a>
                                <div class="post-title"><a href="news-details.html">Kanye west
                                        on why he bought house
                                        across from kim kardashian</a></div>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                            item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January 16, 2024</span>
                                    <span class="post-date item"><img src="assets/user/images/share.svg"
                                            alt="date-icon">16
                                        Partilhas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Technology</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rts-post-area music hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">Games</a>
                                <div class="post-title"><a href="news-details.html">Kanye west
                                        on why he bought house
                                        across from kim kardashian</a></div>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                            item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January 16, 2024</span>
                                    <span class="post-date item"><img src="assets/user/images/share.svg"
                                            alt="date-icon">16
                                        Partilhas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Technology</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rts-post-area itnews hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">Games</a>
                                <div class="post-title"><a href="news-details.html">Kanye west
                                        on why he bought house
                                        across from kim kardashian</a></div>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                            item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January 16, 2024</span>
                                    <span class="post-date item"><img src="assets/user/images/share.svg"
                                            alt="date-icon">16
                                        Partilhas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Technology</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Trending Section End Here =================-->


    <!--================= Gallery Section Start Here =================-->
    <div class="rts-gallery-section gallary-page-section pt--40 mb--40" style="background: rgb(255, 195, 211)">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Perfis Inspiradores</h2>
                <div class="wide-border" style="width: 55rem !important"></div>
            </div>

            <div class="row">
                @foreach ($newsProfile as $new)
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="gallery-item ">
                            <a class="image-popup-vertical-fit image-m" href="{{ url('img/news/' . $new->image) }}"
                                title="<h5>{{ $new->subtitle }}</h5><p>{{ strip_tags($new->description) }}</p>">
                                <img src="{{ url('img/news/' . $new->image) }}" alt="Image_Perfil" />
                            </a>
                            <div class="contents">
                                <h5 class="member-role">{{ $new->title }}</h5>
                                <a href="#" class="member-name">{{ $new->subtitle }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-xl-6 mx-auto" style="margin-bottom: 1rem">
                    <a class="view-more-news" href="{{ route('site.news.profile') }}">
                        Ver Mais<i class="far fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!--================= Gallery Section End Here =================-->


    <!--================= Updates Section Start Here =================-->
    <div class="rts-updates-section section-gap-2 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="col-xl-">
                <div class="news-topbar news-topbar-2">
                    <h2 class="section-title">Novidades</h2>
                    <div class="wide-border"></div>
                    <a href="#0" class="border-btn">Ver Arquivo <i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="row">
                @foreach ($newness as $new)
                    <div class="col-md-6 d-flex">
                        <div class="rts-post-2 flex-fill mb--15">
                            <div class="post-picture">
                                <a class="image-popup-vertical-fit image-m" href="{{ url('img/news/' . $new->image) }}"
                                    title="<h5>Lesliana Pereira</h5><p>A modelo surpreendeu os fãs ao explicar que a produção não foi apenas uma escolha estética, mas também uma forma de transmitir confiança e autenticidade no tapete vermelho.</p>">
                                    <img src="{{ url('img/news/' . $new->image) }}" style="height: 20rem" alt="main-post-image">
                                </a>
                            </div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">{{ $new->category->name }}</a>
                                <div class="post-title">
                                    <a href="news-details.html">{{ $new->title }}</a>
                                </div>
                                <div class="post-bottom-info">
                                    <a href="author.html" class="post-author item">
                                        <img src="assets/user/images/user.svg" alt="user-icon">Ashley Graham
                                    </a>
                                    <span class="post-date item">
                                        <img src="assets/user/images/date.svg"
                                            alt="date-icon">{{ $new->created_at->format('d \d\e F, Y') }}
                                    </span>
                                    <span class="post-date item">
                                        <img src="assets/user/images/share.svg" alt="share-icon">16 Partilhas
                                    </span>
                                </div>
                                <p>{{ strip_tags($new->description) }}</p>
                                <a href="#0" class="read-more-btn">Ler Mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- Histórias Populares e Etiquetas --}}
                {{-- <div class="col-xl-2">
                    <div class="side-content sticky-content">
                        <div class="row">

                            <div class="col-xl-12 col-md-6">
                                <div class="popular-stories mb--50"> <br> <br> <br>
                                    <h3 class="side-content-title">Histórias Populares</h3>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/user/images/trending/evaDiva.jfif"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">Moda</div>
                                            <div class="post-title"><a href="news-details.html">Eva Rap Diva
                                                    exibindo um visual mais formal</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/user/images/date.svg" alt="date-icon">
                                                    October 16, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/user/images/trending/tecno.jfif"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">Tecnologia</div>
                                            <div class="post-title"><a href="news-details.html">Explore
                                                    novos dispositivos eletrônicos</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/user/images/date.svg" alt="date-icon">
                                                    November 16, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/user/images/trending/images.jfif"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">TI</div>
                                            <div class="post-title"><a href="news-details.html">Exposição
                                                    de projetos na FITITEL</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/user/images/date.svg" alt="date-icon">
                                                    January 16, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/user/images/trending/transferir (2).jfif"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">Cultura</div>
                                            <div class="post-title"><a href="news-details.html">Celebração
                                                    do povo no Moxico</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/user/images/date.svg" alt="date-icon">
                                                    January 16, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <ul class="social-popularity mb--50">
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-facebook-f facebook"></i>
                                            <span>347 Fans</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-pinterest-p"></i>
                                            <span>174 Followers</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-linkedin-in linkedin"></i>
                                            <span>126 Linkedin</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-dribbble dribbble"></i>
                                            <span>403 Followers</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-youtube youtube"></i>
                                            <span>214 Subscribers</span>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="rts-tags">
                                    <h3 class="side-content-title">Etiquetas</h3>
                                    <ul>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Tecnologia</a></li>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Viagem</a></li>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Comunidade</a></li>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Acessórios</a></li>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Beleza</a></li>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Química</a></li>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Negócios</a></li>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Solução de TI</a></li>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Alimentação</a></li>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Pintura</a></li>
                                        <li><a class="tag-item" href="{{ route('site.youth') }}">Personalidade</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!--================= Updates Section End Here =================-->


    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Videos em Destaque</h2>
                <div class="wide-border"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
            </div>
            <div class="rts-gallery-section gallary-page-section pt--40 mb--40">
                <div class="row">
                    @foreach ($videos as $video)
                        <div class="col-xl-4 col-md-4 col-sm-6 video-item">
                            <div class="video-item">
                                @if (strpos($video->url, 'youtube.com') !== false || strpos($video->url, 'youtu.be') !== false)
                                    @php
                                        // Extrair o ID do vídeo da URL
                                        preg_match(
                                            '/(?:youtube\.com\/(?:[^\/]+\/[^\/]+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
                                            $video->url,
                                            $matches,
                                        );
                                        $video_id = $matches[1] ?? null;
                                    @endphp

                                    @if ($video_id)
                                        <iframe src="https://www.youtube.com/embed/{{ $video_id }}" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    @else
                                        <p class="text-danger">⚠️ Vídeo não encontrado.</p>
                                    @endif
                                @else
                                    <video width="150%" height="400px" controls>
                                        <source src="{{ $video->url }}" type="video/mp4">
                                        Seu navegador não suporta o elemento de vídeo.
                                    </video>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured video Section End Here =================-->


    <!--================= News Section Start Here =================-->
    <div class="rts-news-two-section section-gap-2 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Últimas Notícias</h2>
                <div class="wide-border"></div>
                <div class="filter-buttons">
                    <div class="filter-btn filter-navigation-btn active" data-show=".trendingnews">Notícias em destaque
                    </div>
                    <div class="filter-btn filter-navigation-btn" data-show=".recentsnews">Notícias Recentes</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-md-12 col-sm-12">
                    <div class="rts-post-area trendingnews">
                        <div class="row">

                            @foreach ($atualizations as $new)
                                <div class="col-xl-12 col-md-12">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture">
                                            <a class="image-popup-vertical-fit"
                                                href="{{ url('img/news/' . $new->image) }}"
                                                title="<h5>Jaqueline Ngulo</h5><p>Jaqueline Ngulo recentemente assumiu a direção da Women in Tech Angola, capítulo nacional da maior organização mundial dedicada a reduzir a desigualdade de género na tecnologia.</p>">
                                                <img src="{{ url('img/news/' . $new->image) }}" alt="main-post-image">
                                            </a>
                                        </div>
                                        <div class="contents">
                                            <div class="post-title">
                                                <a href="news-details.html">{{ $new->title }}</a>
                                            </div>
                                            <p>{{ strip_tags($new->description) }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item">
                                                    <img src="assets/user/images/user.svg" alt="user-icon">Por Jenny
                                                    Wilson
                                                </a>
                                                <span class="post-date item">
                                                    <img src="assets/user/images/date.svg"
                                                        alt="date-icon">{{ $new->created_at->format('d \d\e F, Y') }}
                                                </span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Ler Mais</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="rts-post-area recentsnews hide">
                        <div class="rts-post-2 rts-post-2-wide mb--20">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/7.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                                    item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Por Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January
                                        16, 2024</span>
                                </div>
                                <a href="#0" class="read-more-btn">Ler Mais</a>
                            </div>
                        </div>
                        <div class="rts-post-2 rts-post-2-wide mb--20">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/8.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                                    item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Por Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January
                                        16, 2024</span>
                                </div>
                                <a href="#0" class="read-more-btn">Ler Mais</a>
                            </div>
                        </div>
                        <div class="rts-post-2 rts-post-2-wide mb--20">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/9.png" alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                                    item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Por Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January
                                        16, 2024</span>
                                </div>
                                <a href="#0" class="read-more-btn">Ler Mais</a>
                            </div>
                        </div>
                        <div class="rts-post-2 rts-post-2-wide">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/10.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                                    item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Por Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January
                                        16, 2024</span>
                                </div>
                                <a href="#0" class="read-more-btn">Ler mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <div class="rts-post-2 rts-post-2-small rts-post-2-inside">
                                <div class="post-picture"><img src="assets/user/images/trending/tecno.jfif"
                                        alt="post-picture">
                                </div>
                                <div class="contents">
                                    <div class="news-catagory-tag-2">Economia</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon"
                                                src="assets/user/images/date.svg" alt="date-icon">
                                            October 16, 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-post-2 rts-post-2-small">
                                <div class="contents">
                                    <div class="news-catagory-tag-2-2">Moda</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a><a href="#" class="go-icon"><i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon"
                                                src="assets/user/images/date.svg" alt="date-icon">
                                            October 16, 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-post-2 rts-post-2-small">
                                <div class="contents">
                                    <div class="news-catagory-tag-2-2">Tecnologia</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a><a href="#" class="go-icon"><i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon"
                                                src="assets/user/images/date.svg" alt="date-icon">
                                            October 16, 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-post-2 rts-post-2-small mb--20">
                                <div class="contents">
                                    <div class="news-catagory-tag-2-2">Sociedade</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a><a href="#" class="go-icon"><i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon"
                                                src="assets/user/images/date.svg" alt="date-icon">
                                            October 16, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6">
                            <div class="newsletter">
                                <h2 class="newsletter-title">Get Newsletter</h2>
                                <p>Notification products, updates.</p>
                                <form class="form">
                                    <div class="input-div">
                                        <input type="email" placeholder="Enter email...">
                                    </div>
                                    <button class="subscribe-btn">Subscribe</button>
                                </form>
                                <div class="foating-elements">
                                    <div class="item1"><img src="assets/user/images/icons/floating-dots.svg"
                                            alt="floating-element">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <a class="view-more-news" href="{{ route('site.news.notice') }}">Ler Mais Stories<i
                            class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--================= News Section End Here =================-->


    {{-- <!--================= Gallery Section Start Here =================-->
    <div class="rts-gallery-section wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/1.jpg"
                            title="1.jpg">
                            <img src="assets/user/images/gallery/1.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/2.jpg"
                            title="2.jpg">
                            <img src="assets/user/images/gallery/2.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/3.jpg"
                            title="3.jpg">
                            <img src="assets/user/images/gallery/3.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/4.jpg"
                            title="4.jpg">
                            <img src="assets/user/images/gallery//4.png" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/5.jpg"
                            title="5.jpg">
                            <img src="assets/user/images/gallery/5.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/6.jpg"
                            title="6.jpg">
                            <img src="assets/user/images/gallery/6.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!--================= Gallery Section End Here =================-->

    <!--================= Color switcher =================-->
    <div class="modal-sidebar-scroll rts-dark-light">
        <ul>
            <li><span>Dark</span><i class="rts-go-dark fal fa-moon"></i></li>
            <li><span>Light</span><i class="rts-go-light far fa-sun"></i></li>
        </ul>
    </div>

@endsection
