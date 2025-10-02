@extends('layouts._site.main')
@section('title', 'Ecofemenino - Juventude e Liderança')
@section('content')

    <!--================= Tecnologia Section End Here =================-->
    <div class="rts-sports-section section-gap-2" id="tecnologia" style="background: #e9ecec;">
        <div class="container">
            <div class="site-map-area section-gap-0">
                <div class="container">
                    <div class="site-map">
                        <h1 class="page-title">Tecnologia</h1>
                    </div>
                </div>
            </div>

            @foreach ($newsTech as $new)
                <div class="sports-section-banner2 page-section-banner fashion-page-banner mb--70"
                    style=" background-image: url('{{ asset('img/news/' . $new->image) }}')">
                    <div class="overview-content">
                        <a href="#0" class="news-catagory-tag-2 highlight-bg">{{ $new->category->name }}</a>
                        <div class="contents">
                            <div class="content-title mb--10"><a href="news-details.html">{{ $new->title }}</a></div>
                            <div class="overview-play-btn">
                                <div class="post-bottom-info mb--25">
                                    <a href="author.html" class="post-author item"><img
                                            src="{{ url('assets/user/images/icons/user-white.svg') }}"
                                            alt="user-icon">Ashley
                                        Graham</a>
                                    <span class="post-comment item"><img
                                            src="{{ url('assets/user/images/icons/comment-white.svg') }}"
                                            alt="comment-icon">{{ $new->created_at->format('d M, Y') }}</span>
                                    <span class="post-share item"><img
                                            src="{{ url('assets/user/images/icons/share-white.svg') }}" alt="share-icon">16
                                        Shares</span>
                                </div>
                                <a href="#0" class="border-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            
            @endforeach

            <div class="sports-posts-section">
                <div class="row">
                    @forelse ($newsTech2 as $new)
                        <div class="col-xl-9">
                            <div class="rts-post-area trendingnews">
                                <div class="row">
                                    <div class="col-xl-12 col-md-6">
                                        <div class="rts-post-2 rts-post-2-wide mb--20">
                                            <div class="post-picture"><a href="news-details.html"><img
                                                        src="{{ url('img/news/' . $new->image) }}"
                                                        alt="main-post-image"></a>
                                            </div>
                                            <div class="contents">
                                                <div class="post-title"><a href="news-details.html">{{ $new->title }}</a>
                                                </div>
                                                <p>{{ $new->subtitle }}</p>
                                                <div class="post-bottom-info">
                                                    <a href="author.html"
                                                        class="post-author
                                                                item"><img
                                                            src="{{ url('assets/user/images/user.svg') }}"
                                                            alt="user-icon">By
                                                        Jenny
                                                        Wilson</a>
                                                    <span class="post-date item"><img
                                                            src="{{ url('assets/user/images/date.svg') }}"
                                                            alt="date-icon">{{ $new->created_at->format('d M, Y') }}</span>
                                                    <span class="post-share item"><img
                                                            src="{{ url('assets/user/images/share.svg') }}"
                                                            alt="share-icon">16
                                                        Shares</span>
                                                </div>
                                                <a href="#0" class="read-more-btn">Ver Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="bg-danger text-light text-center p-4 m-auto">Nehuma notícia</div>
                    @endforelse
                    <div class="post-pagination-area1 mt--20">
                        <a href="#" class="pag-item">1</a>
                        <a href="#" class="pag-item">2</a>
                        <a href="#" class="pag-item">3</a>
                        <a href="#" class="pag-item pag-next"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Tecnologia Section End Here =================-->

    <!--================= Educação Section End Here =================-->
    <div class="rts-sports-section section-gap-2" id="educacao" style="background: #e9ecec;">
        <div class="container">
            <div class="site-map-area section-gap-0">
                <div class="container">
                    <div class="site-map">
                        <h1 class="page-title">Educação</h1>
                    </div>
                </div>
            </div>
            @foreach ($newsEducation as $new)
                <div class="sports-section-banner2 page-section-banner fashion-page-banner mb--70"
                    style=" background-image: url('{{ asset('img/news/' . $new->image) }}')">
                    <div class="overview-content">
                        <a href="#0" class="news-catagory-tag-2 highlight-bg">{{ $new->category->name }}</a>
                        <div class="contents">
                            <div class="content-title mb--10"><a href="news-details.html">{{ $new->title }}</a></div>
                            <div class="overview-play-btn">
                                <div class="post-bottom-info mb--25">
                                    <a href="author.html" class="post-author item"><img
                                            src="{{ url('assets/user/images/icons/user-white.svg') }}"
                                            alt="user-icon">Ashley
                                        Graham</a>
                                    <span class="post-comment item"><img
                                            src="{{ url('assets/user/images/icons/comment-white.svg') }}"
                                            alt="comment-icon">{{ $new->created_at->format('d M, Y') }}</span>
                                    <span class="post-share item"><img
                                            src="{{ url('assets/user/images/icons/share-white.svg') }}" alt="share-icon">16
                                        Shares</span>
                                </div>
                                <a href="#0" class="border-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="sports-posts-section">
                <div class="row">
                    @forelse ($newsEducation2 as $new)
                        <div class="col-xl-9">
                            <div class="rts-post-area trendingnews">
                                <div class="row">
                                    <div class="col-xl-12 col-md-6">
                                        <div class="rts-post-2 rts-post-2-wide mb--20">
                                            <div class="post-picture"><a href="news-details.html"><img
                                                        src="{{ url('img/news/' . $new->image) }}"
                                                        alt="main-post-image"></a>
                                            </div>
                                            <div class="contents">
                                                <div class="post-title"><a href="news-details.html">{{ $new->title }}</a>
                                                </div>
                                                <p>{{ $new->subtitle }}</p>
                                                <div class="post-bottom-info">
                                                    <a href="author.html"
                                                        class="post-author
                                                                item"><img
                                                            src="{{ url('assets/user/images/user.svg') }}"
                                                            alt="user-icon">By
                                                        Jenny
                                                        Wilson</a>
                                                    <span class="post-date item"><img
                                                            src="{{ url('assets/user/images/date.svg') }}"
                                                            alt="date-icon">{{ $new->created_at->format('d M, Y') }}</span>
                                                    <span class="post-share item"><img
                                                            src="{{ url('assets/user/images/share.svg') }}"
                                                            alt="share-icon">16
                                                        Shares</span>
                                                </div>
                                                <a href="#0" class="read-more-btn">Ver Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="bg-danger text-light text-center p-4 m-auto">Nehuma notícia</div>
                    @endforelse
                    <div class="post-pagination-area1 mt--20">
                        <a href="#" class="pag-item">1</a>
                        <a href="#" class="pag-item">2</a>
                        <a href="#" class="pag-item">3</a>
                        <a href="#" class="pag-item pag-next"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Educação Section End Here =================-->

    <!--================= Empreendedorismo Section End Here =================-->
    <div class="rts-sports-section section-gap-2" id="empreendedorismo" style="background: #e9ecec;">
        <div class="container">
            <div class="site-map-area section-gap-0">
                <div class="container">
                    <div class="site-map">
                        <h1 class="page-title">Empreendedorismo Jovem</h1>
                    </div>
                </div>
            </div>
            @foreach ($newsbusiness as $new)
                <div class="sports-section-banner2 page-section-banner fashion-page-banner mb--70"
                    style=" background-image: url('{{ asset('img/news/' . $new->image) }}')">
                    <div class="overview-content">
                        <a href="#0" class="news-catagory-tag-2 highlight-bg">{{ $new->category->name }}</a>
                        <div class="contents">
                            <div class="content-title mb--10"><a href="news-details.html">{{ $new->title }}</a></div>
                            <div class="overview-play-btn">
                                <div class="post-bottom-info mb--25">
                                    <a href="author.html" class="post-author item"><img
                                            src="{{ url('assets/user/images/icons/user-white.svg') }}"
                                            alt="user-icon">Ashley
                                        Graham</a>
                                    <span class="post-comment item"><img
                                            src="{{ url('assets/user/images/icons/comment-white.svg') }}"
                                            alt="comment-icon">{{ $new->created_at->format('d M, Y') }}</span>
                                    <span class="post-share item"><img
                                            src="{{ url('assets/user/images/icons/share-white.svg') }}" alt="share-icon">16
                                        Shares</span>
                                </div>
                                <a href="#0" class="border-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="sports-posts-section">
                <div class="row">
                    @forelse ($newsbusiness2 as $new)
                        <div class="col-xl-9">
                            <div class="rts-post-area trendingnews">
                                <div class="row">
                                    <div class="col-xl-12 col-md-6">
                                        <div class="rts-post-2 rts-post-2-wide mb--20">
                                            <div class="post-picture"><a href="news-details.html"><img
                                                        src="{{ url('img/news/' . $new->image) }}"
                                                        alt="main-post-image"></a>
                                            </div>
                                            <div class="contents">
                                                <div class="post-title"><a href="news-details.html">{{ $new->title }}</a>
                                                </div>
                                                <p>{{ $new->subtitle }}</p>
                                                <div class="post-bottom-info">
                                                    <a href="author.html"
                                                        class="post-author
                                                                item"><img
                                                            src="{{ url('assets/user/images/user.svg') }}"
                                                            alt="user-icon">By
                                                        Jenny
                                                        Wilson</a>
                                                    <span class="post-date item"><img
                                                            src="{{ url('assets/user/images/date.svg') }}"
                                                            alt="date-icon">{{ $new->created_at->format('d M, Y') }}</span>
                                                    <span class="post-share item"><img
                                                            src="{{ url('assets/user/images/share.svg') }}"
                                                            alt="share-icon">16
                                                        Shares</span>
                                                </div>
                                                <a href="#0" class="read-more-btn">Ver Mais</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="bg-danger text-light text-center p-4 m-auto">Nehuma notícia</div>
                    @endforelse
                    <div class="post-pagination-area1 mt--20">
                        <a href="#" class="pag-item">1</a>
                        <a href="#" class="pag-item">2</a>
                        <a href="#" class="pag-item">3</a>
                        <a href="#" class="pag-item pag-next"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Empreendedorismo Section End Here =================-->

    <!--================= Subscribe-banner Section Start Here =================-->
    <div class="rts-subscribe-banner-section section-2">
        <div class="container">
            <div class="banner-box">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6">
                        <div class="contents">
                            <h1 class="banner-title">The best magazine stories
                                Into your inbox!</h1>
                            <p>By clicking send you'll receive occasional emails from Sangbad.</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <form>
                            <div class="input-div">
                                <input type="email" placeholder="Enter your email">
                                <button type="submit" class="subscribe-btn">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Subscribe-banner Section End Here =================-->

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
