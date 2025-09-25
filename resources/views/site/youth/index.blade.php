@extends('site.layout.main')
@section('title', 'Ecofemenino - Juventude e Liderança')
@section('content')

    <!--================= Sports Section End Here =================-->
    <div class="rts-sports-section section-gap-2" id="desporto" style="background: #e9ecec;">
        <div class="container">
            <div class="site-map-area section-gap-0">
                <div class="container">
                    <div class="site-map">
                        <h1 class="page-title">Desporto</h1>
                    </div>
                </div>
            </div>
            @forelse ($newsSport as $data)
                <div class="sports-section-banner page-section-banner fashion-page-banner mb--70">
                <div class="overview-content">
                    <a href="#0" class="news-catagory-tag-2 highlight-bg">Sports</a>
                    <div class="contents">
                        <div class="content-title mb--10"><a href="news-details.html">{{ $data->title }}</a></div>
                        <div class="overview-play-btn">
                            <div class="post-bottom-info mb--25">
                                <a href="author.html" class="post-author item"><img
                                        src="{{ url('assets/user/images/icons/user-white.svg') }}" alt="user-icon">Ashley
                                    Graham</a>
                                <span class="post-comment item"><img
                                        src="{{ url('assets/user/images/icons/comment-white.svg') }}"
                                        alt="comment-icon">January
                                    16, 2024</span>
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
            <div class="sports-posts-section">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="rts-post-area trendingnews">
                            <div class="row">
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}" alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}" alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}" alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="post-pagination-area1 mt--20">
                            <a href="#" class="pag-item">1</a>
                            <a href="#" class="pag-item">2</a>
                            <a href="#" class="pag-item">3</a>
                            <a href="#" class="pag-item pag-next"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="side-content sticky-content">
                            <div class="author-box mb--50">
                                <div class="author-dp"><img src="{{ url('assets/user/images/items/author-dp.png') }}"
                                        alt="author-dp">
                                </div>
                                <h3 class="author-name">Marigold Rose</h3>
                                <p>Ipsam justo impedit sagittis Quo dictum esse eligend!</p>
                                <div class="author-signeture"><img
                                        src="{{ url('assets/user/images/items/author-signeture.png') }}"
                                        alt="author-signeture">
                                </div>
                            </div>
                            <div class="type-tag-right mb--30">Stay Connected</div>
                            <ul class="social-popularity social-popularity-2 mb--40">
                                <li><a href="#" class="platform facebook">
                                        <i class="fab fa-facebook-f facebook"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Fans</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform twitter">
                                        <i class="fab fa-pinterest-p"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Followers</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform linkedin">
                                        <i class="fab fa-linkedin-in linkedin"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Linkedin</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform youtube">
                                        <i class="fab fa-youtube youtube"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Subscribers</span>
                                        </div>
                                    </a></li>
                            </ul>
                            <div class="type-tag-right mb--30">Popular News</div>
                            <div class="popular-stories mb--50">
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/1.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Fashion</div>
                                        <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                October 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/2.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                November 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/3.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/4.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-stories rts-post-area popular hide mb--50">
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small1.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small2.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small3.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-tags mb--40">
                                <div class="type-tag-right mb--30">Tags</div>
                                <ul class="tag mb--30">
                                    <li><a class="tag-item1" href="#0">Technology</a></li>
                                    <li><a class="tag-item1" href="#0">Travel</a></li>
                                    <li><a class="tag-item1" href="#0">Community</a></li>
                                    <li><a class="tag-item1" href="#0">Canada</a></li>
                                    <li><a class="tag-item1" href="#0">Accessories</a></li>
                                    <li><a class="tag-item1" href="#0">Beauty</a></li>
                                    <li><a class="tag-item1" href="#0">Chemical</a></li>
                                    <li><a class="tag-item1" href="#0">Business</a></li>
                                    <li><a class="tag-item1" href="#0">IT Solution</a></li>
                                    <li><a class="tag-item1" href="#0">Food</a></li>
                                    <li><a class="tag-item1" href="#0">Painting</a></li>
                                    <li><a class="tag-item1" href="#0">Personality</a></li>
                                </ul>
                                <a href="#" class="ad mt--30"><img
                                        src="{{ url('assets/user/images/items/ad.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="bg-danger text-light text-center p-4 m-auto">Nehuma notícia</div>
            @endforelse
            
        </div>
    </div>
    <!--================= Sports Section End Here =================-->

    <!--================= Sports Section End Here =================-->
    <div class="rts-sports-section section-gap-2" id="educacao" style="background: #e9ecec;">
        <div class="container">
            <div class="site-map-area section-gap-0">
                <div class="container">
                    <div class="site-map">
                        <h1 class="page-title">Educação</h1>
                    </div>
                </div>
            </div>
            @forelse ($newsEducation as $data)
               <div class="sports-section-banner page-section-banner fashion-page-banner mb--70">
                <div class="overview-content">
                    <a href="#0" class="news-catagory-tag-2 highlight-bg">Sports</a>
                    <div class="contents">
                        <div class="content-title mb--10"><a href="news-details.html">Barcelona is now wonderkid with
                                same goal tally.</a></div>
                        <div class="overview-play-btn">
                            <div class="post-bottom-info mb--25">
                                <a href="author.html" class="post-author item"><img
                                        src="{{ url('assets/user/images/icons/user-white.svg') }}" alt="user-icon">Ashley
                                    Graham</a>
                                <span class="post-comment item"><img
                                        src="{{ url('assets/user/images/icons/comment-white.svg') }}"
                                        alt="comment-icon">January
                                    16, 2024</span>
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
            <div class="sports-posts-section">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="rts-post-area trendingnews">
                            <div class="row">
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="post-pagination-area1 mt--20">
                            <a href="#" class="pag-item">1</a>
                            <a href="#" class="pag-item">2</a>
                            <a href="#" class="pag-item">3</a>
                            <a href="#" class="pag-item pag-next"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3">
                        <div class="side-content sticky-content">
                            <div class="author-box mb--50">
                                <div class="author-dp"><img src="{{ url('assets/user/images/items/author-dp.png') }}"
                                        alt="author-dp">
                                </div>
                                <h3 class="author-name">Marigold Rose</h3>
                                <p>Ipsam justo impedit sagittis Quo dictum esse eligend!</p>
                                <div class="author-signeture"><img
                                        src="{{ url('assets/user/images/items/author-signeture.png') }}"
                                        alt="author-signeture">
                                </div>
                            </div>
                            <div class="type-tag-right mb--30">Stay Connected</div>
                            <ul class="social-popularity social-popularity-2 mb--40">
                                <li><a href="#" class="platform facebook">
                                        <i class="fab fa-facebook-f facebook"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Fans</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform twitter">
                                        <i class="fab fa-pinterest-p"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Followers</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform linkedin">
                                        <i class="fab fa-linkedin-in linkedin"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Linkedin</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform youtube">
                                        <i class="fab fa-youtube youtube"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Subscribers</span>
                                        </div>
                                    </a></li>
                            </ul>
                            <div class="type-tag-right mb--30">Popular News</div>
                            <div class="popular-stories mb--50">
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/1.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Fashion</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                October 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/2.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                November 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/3.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/4.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-stories rts-post-area popular hide mb--50">
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small1.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small2.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small3.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-tags mb--40">
                                <div class="type-tag-right mb--30">Tags</div>
                                <ul class="tag mb--30">
                                    <li><a class="tag-item1" href="#0">Technology</a></li>
                                    <li><a class="tag-item1" href="#0">Travel</a></li>
                                    <li><a class="tag-item1" href="#0">Community</a></li>
                                    <li><a class="tag-item1" href="#0">Canada</a></li>
                                    <li><a class="tag-item1" href="#0">Accessories</a></li>
                                    <li><a class="tag-item1" href="#0">Beauty</a></li>
                                    <li><a class="tag-item1" href="#0">Chemical</a></li>
                                    <li><a class="tag-item1" href="#0">Business</a></li>
                                    <li><a class="tag-item1" href="#0">IT Solution</a></li>
                                    <li><a class="tag-item1" href="#0">Food</a></li>
                                    <li><a class="tag-item1" href="#0">Painting</a></li>
                                    <li><a class="tag-item1" href="#0">Personality</a></li>
                                </ul>
                                <a href="#" class="ad mt--30"><img
                                        src="{{ url('assets/user/images/items/ad.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div> 
            @empty
                <div class="bg-danger text-light text-center p-4 m-auto">Nehuma notícia</div>
            @endforelse
            
        </div>
    </div>
    <!--================= Sports Section End Here =================-->

    <!--================= Sports Section End Here =================-->
    <div class="rts-sports-section section-gap-2" id="tecnologia" style="background: #e9ecec;">
        <div class="container">
            <div class="site-map-area section-gap-0">
                <div class="container">
                    <div class="site-map">
                        <h1 class="page-title">Tecnologia</h1>
                    </div>
                </div>
            </div>
            @forelse ($newsTech as $data)
                <div class="sports-section-banner page-section-banner fashion-page-banner mb--70">
                <div class="overview-content">
                    <a href="#0" class="news-catagory-tag-2 highlight-bg">Sports</a>
                    <div class="contents">
                        <div class="content-title mb--10"><a href="news-details.html">Barcelona is now wonderkid with
                                same goal tally.</a></div>
                        <div class="overview-play-btn">
                            <div class="post-bottom-info mb--25">
                                <a href="author.html" class="post-author item"><img
                                        src="{{ url('assets/user/images/icons/user-white.svg') }}"
                                        alt="user-icon">Ashley Graham</a>
                                <span class="post-comment item"><img
                                        src="{{ url('assets/user/images/icons/comment-white.svg') }}"
                                        alt="comment-icon">January
                                    16, 2024</span>
                                <span class="post-share item"><img
                                        src="{{ url('assets/user/images/icons/share-white.svg') }}"
                                        alt="share-icon">16
                                    Shares</span>
                            </div>
                            <a href="#0" class="border-btn">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sports-posts-section">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="rts-post-area trendingnews">
                            <div class="row">
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                               {{--  <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
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
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="post-pagination-area1 mt--20">
                            <a href="#" class="pag-item">1</a>
                            <a href="#" class="pag-item">2</a>
                            <a href="#" class="pag-item">3</a>
                            <a href="#" class="pag-item pag-next"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3">
                        <div class="side-content sticky-content">
                            <div class="author-box mb--50">
                                <div class="author-dp"><img src="{{ url('assets/user/images/items/author-dp.png') }}"
                                        alt="author-dp">
                                </div>
                                <h3 class="author-name">Marigold Rose</h3>
                                <p>Ipsam justo impedit sagittis Quo dictum esse eligend!</p>
                                <div class="author-signeture"><img
                                        src="{{ url('assets/user/images/items/author-signeture.png') }}"
                                        alt="author-signeture">
                                </div>
                            </div>
                            <div class="type-tag-right mb--30">Stay Connected</div>
                            <ul class="social-popularity social-popularity-2 mb--40">
                                <li><a href="#" class="platform facebook">
                                        <i class="fab fa-facebook-f facebook"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Fans</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform twitter">
                                        <i class="fab fa-pinterest-p"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Followers</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform linkedin">
                                        <i class="fab fa-linkedin-in linkedin"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Linkedin</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform youtube">
                                        <i class="fab fa-youtube youtube"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Subscribers</span>
                                        </div>
                                    </a></li>
                            </ul>
                            <div class="type-tag-right mb--30">Popular News</div>
                            <div class="popular-stories mb--50">
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/1.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Fashion</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                October 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/2.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                November 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/3.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/4.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-stories rts-post-area popular hide mb--50">
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small1.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small2.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small3.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-tags mb--40">
                                <div class="type-tag-right mb--30">Tags</div>
                                <ul class="tag mb--30">
                                    <li><a class="tag-item1" href="#0">Technology</a></li>
                                    <li><a class="tag-item1" href="#0">Travel</a></li>
                                    <li><a class="tag-item1" href="#0">Community</a></li>
                                    <li><a class="tag-item1" href="#0">Canada</a></li>
                                    <li><a class="tag-item1" href="#0">Accessories</a></li>
                                    <li><a class="tag-item1" href="#0">Beauty</a></li>
                                    <li><a class="tag-item1" href="#0">Chemical</a></li>
                                    <li><a class="tag-item1" href="#0">Business</a></li>
                                    <li><a class="tag-item1" href="#0">IT Solution</a></li>
                                    <li><a class="tag-item1" href="#0">Food</a></li>
                                    <li><a class="tag-item1" href="#0">Painting</a></li>
                                    <li><a class="tag-item1" href="#0">Personality</a></li>
                                </ul>
                                <a href="#" class="ad mt--30"><img
                                        src="{{ url('assets/user/images/items/ad.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            @empty
                <div class="bg-danger text-light text-center p-4 m-auto">Nehuma notícia</div>
            @endforelse
        </div>
    </div>
    <!--================= Sports Section End Here =================-->

    <!--================= Sports Section End Here =================-->
    <div class="rts-sports-section section-gap-2" id="empreendedorismo" style="background: #e9ecec;">
        <div class="container">
            <div class="site-map-area section-gap-0">
                <div class="container">
                    <div class="site-map">
                        <h1 class="page-title">Empreendedorismo Jovem</h1>
                    </div>
                </div>
            </div>
            @forelse ($newsbusiness as $data)
                <div class="sports-section-banner page-section-banner fashion-page-banner mb--70">
                <div class="overview-content">
                    <a href="#0" class="news-catagory-tag-2 highlight-bg">Sports</a>
                    <div class="contents">
                        <div class="content-title mb--10"><a href="news-details.html">Barcelona is now wonderkid with
                                same goal tally.</a></div>
                        <div class="overview-play-btn">
                            <div class="post-bottom-info mb--25">
                                <a href="author.html" class="post-author item"><img
                                        src="{{ url('assets/user/images/icons/user-white.svg') }}" alt="user-icon">Ashley
                                    Graham</a>
                                <span class="post-comment item"><img
                                        src="{{ url('assets/user/images/icons/comment-white.svg') }}"
                                        alt="comment-icon">January
                                    16, 2024</span>
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
            <div class="sports-posts-section">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="rts-post-area trendingnews">
                            <div class="row">
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6">
                                    <div class="rts-post-2 rts-post-2-wide mb--20">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="{{ url('img/news/'. $data->image) }}"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="post-title"><a href="news-details.html">{{ $data->title }}</a></div>
                                            <p>{{ $data->subtitle }}</p>
                                            <div class="post-bottom-info">
                                                <a href="author.html"
                                                    class="post-author
                                                                item"><img
                                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">By
                                                    Jenny
                                                    Wilson</a>
                                                <span class="post-date item"><img
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">January
                                                    16, 2024</span>
                                                <span class="post-share item"><img
                                                        src="{{ url('assets/user/images/share.svg') }}"
                                                        alt="share-icon">16
                                                    Shares</span>
                                            </div>
                                            <a href="#0" class="read-more-btn">Read more</a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="post-pagination-area1 mt--20">
                            <a href="#" class="pag-item">1</a>
                            <a href="#" class="pag-item">2</a>
                            <a href="#" class="pag-item">3</a>
                            <a href="#" class="pag-item pag-next"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3">
                        <div class="side-content sticky-content">
                            <div class="author-box mb--50">
                                <div class="author-dp"><img src="{{ url('assets/user/images/items/author-dp.png') }}"
                                        alt="author-dp">
                                </div>
                                <h3 class="author-name">Marigold Rose</h3>
                                <p>Ipsam justo impedit sagittis Quo dictum esse eligend!</p>
                                <div class="author-signeture"><img
                                        src="{{ url('assets/user/images/items/author-signeture.png') }}"
                                        alt="author-signeture">
                                </div>
                            </div>
                            <div class="type-tag-right mb--30">Stay Connected</div>
                            <ul class="social-popularity social-popularity-2 mb--40">
                                <li><a href="#" class="platform facebook">
                                        <i class="fab fa-facebook-f facebook"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Fans</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform twitter">
                                        <i class="fab fa-pinterest-p"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Followers</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform linkedin">
                                        <i class="fab fa-linkedin-in linkedin"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Linkedin</span>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="platform youtube">
                                        <i class="fab fa-youtube youtube"></i>
                                        <div class="followers-info">
                                            <span class="number">32,423</span>
                                            <span class="type">Subscribers</span>
                                        </div>
                                    </a></li>
                            </ul>
                            <div class="type-tag-right mb--30">Popular News</div>
                            <div class="popular-stories mb--50">
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/1.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Fashion</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                October 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/2.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                November 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/3.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/popular/4.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">Audio
                                            music</div>
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-stories rts-post-area popular hide mb--50">
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small1.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small2.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="{{ url('assets/user/images/latest/small3.jpg') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">Modern
                                                construction latest
                                                luxury model</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                April 24, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-tags mb--40">
                                <div class="type-tag-right mb--30">Tags</div>
                                <ul class="tag mb--30">
                                    <li><a class="tag-item1" href="#0">Technology</a></li>
                                    <li><a class="tag-item1" href="#0">Travel</a></li>
                                    <li><a class="tag-item1" href="#0">Community</a></li>
                                    <li><a class="tag-item1" href="#0">Canada</a></li>
                                    <li><a class="tag-item1" href="#0">Accessories</a></li>
                                    <li><a class="tag-item1" href="#0">Beauty</a></li>
                                    <li><a class="tag-item1" href="#0">Chemical</a></li>
                                    <li><a class="tag-item1" href="#0">Business</a></li>
                                    <li><a class="tag-item1" href="#0">IT Solution</a></li>
                                    <li><a class="tag-item1" href="#0">Food</a></li>
                                    <li><a class="tag-item1" href="#0">Painting</a></li>
                                    <li><a class="tag-item1" href="#0">Personality</a></li>
                                </ul>
                                <a href="#" class="ad mt--30"><img
                                        src="{{ url('assets/user/images/items/ad.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            @empty
                <div class="bg-danger text-light text-center p-4 m-auto">Nehuma notícia</div>
            @endforelse
        </div>
    </div>
    <!--================= Sports Section End Here =================-->


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
