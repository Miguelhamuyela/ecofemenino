@extends('layouts._site.main')
@section('title', 'EcoFeminino - Detalhes')
@section('content')

    <!--================= News Details Section =================-->
    <div class="rts-news-details-section mb--50" style="background: #e9ecef;">
        <div class="container">
            <div class="rts-post-heading mb--50">
                <div class="heading-content">
                    <div class="contents">
                        <!-- Categoria -->
                        <a href="#0" class="news-catagory-tag-3" style="margin-top:5rem;">
                            {{ $news->category->name ?? 'Sem Categoria' }}
                        </a>
                        <!-- Título -->
                        <h2 class="content-title mb--10">
                            <a href="{{ route('site.news.show', $news->id) }}">{{ $news->title }}</a>
                        </h2>
                        <!-- Autor, data -->
                        <div class="overview-play-btn">
                            <div class="post-bottom-info">
                                {{-- <a href="#0" class="post-author item">
                                    <img src="{{ url('assets/user/images/user.svg')}}" alt="user-icon">
                                    {{ $news->author->name ?? 'EcoFeminino' }}
                                </a> --}}
                                <span class="post-comment item">
                                    <img src="{{ url('assets/user/images/comment.svg')}}" alt="comment-icon">
                                    {{ $news->created_at->format('d M, Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Imagem principal -->
            <div class="post-picture img-detail">
                <img src="{{ asset('img/news/' . $news->image) }}" alt="{{ $news->title }}">
            </div>

            <div class="row" style="margin-top: 3rem">
                <!-- Conteúdo principal -->
                <div class="col-xl-9">
                    <div class="news-content-box">
                        {!! $news->description !!}
                    </div>

                    <!-- Tags -->
                    {{-- @if($news->tags->count() > 0)
                        <div class="tag-links mt--30">
                            <h4 class="tags-title">TAGS:</h4>
                            @foreach($news->tags as $tag)
                                <a class="typelink" href="#">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    @endif --}}

                    <!-- Autor da postagem -->
                    {{-- <div class="post-author-area mb--50 mt--40">
                        <a href="#0" class="author-dp">
                            <img src="{{ $news->author->avatar ?? url('assets/user/images/items/post-author.png')}}" 
                                 alt="author-dp">
                        </a>
                        <div class="author-contents">
                            <a href="#0" class="author-name">{{ $news->author->name ?? 'Equipe EcoFeminino' }}</a>
                            <p class="mb--20">{{ $news->author->bio ?? 'Redator do EcoFeminino.' }}</p>
                        </div>
                    </div> --}}

                    <!-- Posts relacionados -->
                    @if($relatedNews->count() > 0)
                        <div class="rts-related-posts-section rts-read2-section mb--50" style="margin-top:3rem">
                            <div class="news-topbar">
                                <div class="post-type-tag">Notícias Relacionadas</div>
                            </div>
                            <div class="swiper rts-threeSlider">
                                <div class="swiper-wrapper">
                                    @foreach($relatedNews as $item)
                                        <div class="swiper-slide">
                                            <div class="rts-post rts-post-medium">
                                                <div class="post-picture img-related">
                                                    <a href="{{ route('site.news.show', $item->id) }}">
                                                        <img src="{{ asset('img/news/' . $item->image) }}" alt="{{ $item->title }}">
                                                    </a>
                                                </div>
                                                <div class="contents">
                                                    <div class="news-catagory-tag-3">{{ $item->category->name ?? 'Sem Categoria' }}</div>
                                                    <div class="post-title">
                                                        <a href="{{ route('site.news.show', $item->id) }}">{{ Str::limit( $item->title, 40) }}</a>
                                                    </div>
                                                    <div class="post-bottom-info">
                                                        {{-- <a href="#0" class="post-author item">
                                                            <img src="{{ url('assets/user/images/user.svg')}}" alt="author-icon">
                                                            {{ $item->author->name ?? 'EcoFeminino' }}
                                                        </a> --}}
                                                        <span class="post-date item">
                                                            <img class="span-icon" src="{{ url('assets/user/images/date.svg')}}" alt="date-icon">
                                                            {{ $item->created_at->format('d M, Y') }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-xl-3">
                    <div class="side-content sticky-content post-side-content">
                        <!-- Popular Stories -->
                        {{-- <div class="popular-stories mb--50">
                            <h3 class="side-content-title">Últimas Notícias</h3>
                            @foreach($latestNews as $ln)
                                <div class="rts-post rts-post-small">
                                    <div class="post-picture">
                                        <a href="{{ route('site.news.show', $ln->id) }}">
                                            <img src="{{ asset('img/news/' . $ln->image) }}" alt="{{ $ln->title }}">
                                        </a>
                                    </div>
                                    <div class="contents">
                                        <div class="news-catagory-tag">{{ $ln->category->name ?? 'Sem Categoria' }}</div>
                                        <div class="post-title">
                                            <a href="{{ route('site.news.show', $ln->id) }}">{{ $ln->title }}</a>
                                        </div>
                                        <div class="post-bottom-info">
                                            <span class="post-date item">
                                                <img class="span-icon" src="{{ url('assets/user/images/date.svg')}}" alt="date-icon">
                                                {{ $ln->created_at->format('d M, Y') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> --}}

                        <!-- Tags -->
                        {{-- <div class="rts-tags">
                            <h3 class="side-content-title">Tags</h3>
                            <ul>
                                @foreach($allTags as $tag)
                                    <li><a class="tag-item" href="#0">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--================= News Details Section End =================-->

@endsection
