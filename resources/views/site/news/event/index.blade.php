@extends('layouts._site.main')
@section('title', 'Ecofemenino - Eventos')
@section('content')

    <!--================= Lifestyle Section End Here =================-->
    <div class="rts-lifestyle-section" style="background: #e9ecec;">
        <div class="container">
            <div class="site-map">
                <h1 class="page-title">Eventos</h1>
            </div>
            <div class="fashion-posts-section">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="rts-post-2 rts-post-2-medium rts-post-2-inside mb--25">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/post/lifestyle1.jpg') }}"
                                                alt="main-post-image"></a>
                                                {{-- This Route need id event --}}
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-3">Lifestyle</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Kanye west
                                                on why he bought house
                                                across from kim kardashian</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                        item"><img
                                                    src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Miles
                                                Tone</a>
                                            <span class="post-date item"><img src="{{ url('assets/user/images/date.svg') }}"
                                                    alt="date-icon">March 10, 2024</span>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                                Shares</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="rts-post-2 rts-post-2-medium rts-post-2-inside mb--25">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/post/lifestyle2.jpg') }}"
                                                alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-3">Lifestyle</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Fleeing Ukrainian athletes
                                                welcomed by clubs in Bosnia.</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                        item"><img
                                                    src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Miles
                                                Tone</a>
                                            <span class="post-date item"><img src="{{ url('assets/user/images/date.svg') }}"
                                                    alt="date-icon">March 10, 2024</span>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                                Shares</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="rts-post-2 rts-post-2-medium rts-post-2-inside mb--25">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/post/lifestyle3.jpg') }}"
                                                alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-3">Photography</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Kanye west
                                                on why he bought house
                                                across from kim kardashian</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                        item"><img
                                                    src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Miles
                                                Tone</a>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">March
                                                10, 2024</span>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                                Shares</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="rts-post-2 rts-post-2-medium rts-post-2-inside mb--25">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/post/lifestyle4.jpg') }}"
                                                alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-3">Badminton</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Kanye west
                                                on why he bought house
                                                across from kim kardashian</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                        item"><img
                                                    src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Miles
                                                Tone</a>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">March
                                                10, 2024</span>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                                Shares</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="rts-post-2 rts-post-2-medium rts-post-2-inside mb--25">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/post/lifestyle5.jpg') }}"
                                                alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-3">Games</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Kanye west
                                                on why he bought house
                                                across from kim kardashian</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                        item"><img
                                                    src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Miles
                                                Tone</a>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">March
                                                10, 2024</span>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                                Shares</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="rts-post-2 rts-post-2-medium rts-post-2-inside mb--25">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/post/lifestyle6.jpg') }}"
                                                alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-3">Social</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Kanye west
                                                on why he bought house
                                                across from kim kardashian</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                        item"><img
                                                    src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Miles
                                                Tone</a>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">March
                                                10, 2024</span>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                                Shares</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="rts-post-2 rts-post-2-medium rts-post-2-inside mb--25">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/post/lifestyle7.jpg') }}"
                                                alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-3">Fashion</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Kanye west
                                                on why he bought house
                                                across from kim kardashian</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                        item"><img
                                                    src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Miles
                                                Tone</a>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">March
                                                10, 2024</span>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                                Shares</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="rts-post-2 rts-post-2-medium rts-post-2-inside">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/post/lifestyle8.jpg') }}"
                                                alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-3">Sports</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Kanye west
                                                on why he bought house
                                                across from kim kardashian</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                        item"><img
                                                    src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Miles
                                                Tone</a>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">March
                                                10, 2024</span>
                                            <span class="post-date item"><img
                                                    src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                                Shares</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <a class="view-more-news1" href="#0">View More News<i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-12">
                        <div class="side-content sticky-content">
                            <div class="type-tag-right">
                                <a href="#">Get In Touch</a>
                            </div>
                            <ul class="social-popularity1 mb--50">
                                <li><a href="http://facebook.com" class="platform">
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
                            <div class="popular-stories1">
                                <div class="type-tag-right mb--25"><a href="#">POPULAR NEWS</a></div>
                                <div class="rts-post1 rts-post-small">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/latest/mask-1.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="catagory-details.htm" class="news-catagory-tag-3">TRAVEL</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Long Island public golf
                                                courses
                                                to try</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                October 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post1 rts-post-small">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/latest/mask-2.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="catagory-details.htm" class="news-catagory-tag-3">MUSIC</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">She sought an affordable
                                                housing.</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                November 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post1 rts-post-small">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/latest/mask-3.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="catagory-details.htm" class="news-catagory-tag-3">HEALTH</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Calhoun can't rally this time
                                                in
                                                state</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rts-post1 rts-post-small">
                                    <div class="post-picture"><a href="{{route('site.news.event.detail')}}"><img
                                                src="{{ url('assets/user/images/latest/mask-4.png') }}"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="catagory-details.htm" class="news-catagory-tag-3">FASHION</a>
                                        <div class="post-title"><a href="{{route('site.news.event.detail')}}">Free family events activities
                                                happening</a></div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item"><img class="span-icon"
                                                    src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">
                                                January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-tags">
                                <a href="#">
                                    <h3 class="side-content-title1">TAGS</h3>
                                </a>
                                <ul>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Lifestyle Section End Here =================-->

    {{-- <style>
        html {
            scroll-behavior: smooth;
        }

        /* Ou se quiser mais controle */
        .rts-sports-section {
            scroll-margin-top: 100px;
            /* Ajuste conforme a altura do seu header */
        }
    </style> --}}

@endsection
