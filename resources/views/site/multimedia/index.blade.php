@extends('site.layout.main')
@section('title', 'EcoFeminino - Multimídia')
@section('content')

<!-- Adicione o CSS e JS do Magnific Popup (se não estiver no layout) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<div class="rts-news-details-section section-gap-2" style="background-color: #e9ecef;">
    <div class="container">

        <!-- Seção Vídeos -->
        <div class="rts-post-heading mb--50" id="videos">
            <div class="heading-content">
                <div class="contents">
                    <h2 class="content-title mb--10"><a href="#">Vídeos</a></h2>
                </div>
            </div>
        </div>
        <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" data-wow-duration="1.5s" style="background-color: #e9ecef;">
            <div class="container">
                <div class="swiper rts-cmmnSlider rts-video-slider">
                    <div class="swiper-wrapper">
                        @forelse ($videos as $video)
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail">
                                        @php
                                            $videoId = '';
                                            if (preg_match('/v=([^&]+)/', $video->url, $matches)) {
                                                $videoId = $matches[1];
                                            } elseif (preg_match('/youtu\.be\/([^?]+)/', $video->url, $matches)) {
                                                $videoId = $matches[1];
                                            }
                                        @endphp
                                        @if ($videoId)
                                            <a href="{{ $video->url }}" target="_blank" class="video-link">
                                                <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                                     alt="{{ $video->title }}"
                                                     style="max-height: 200px; object-fit: cover;"
                                                     onerror="this.src='https://via.placeholder.com/320x180?text=Vídeo+Quebrado';">
                                            </a>
                                        @else
                                            <a href="{{ $video->url }}" target="_blank" class="video-link">
                                                <img src="https://via.placeholder.com/320x180?text=Vídeo"
                                                     alt="Vídeo sem thumbnail"
                                                     style="max-height: 200px; object-fit: cover;"
                                                     onerror="this.src='https://via.placeholder.com/320x180?text=Vídeo+Quebrado';">
                                            </a>
                                        @endif
                                    </div>
                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item">
                                                <span>
                                                    <img class="span-icon" src="{{ url('assets/user/images/date.svg') }}"
                                                         alt="date-icon">
                                                    {{ $video->created_at->format('F d, Y') }}
                                                </span>
                                            </div>
                                        </div>
                                        <h5>{{ Str::limit($video->title, 50) }}</h5>
                                        <p>{{ Str::limit($video->description ?? 'Sem descrição', 100) }}</p>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}" alt="date-icon">12</span>
                                        <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12</span>
                                        <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16 Partilhas</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="swiper-slide">
                                <p>Nenhum vídeo cadastrado.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção Podcasts -->
        <div class="rts-post-heading mb--50" id="podcasts">
            <div class="heading-content">
                <div class="contents">
                    <h2 class="content-title mb--10"><a href="#">Podcasts</a></h2>
                </div>
            </div>
        </div>
        <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" data-wow-duration="1.5s" style="background-color: #e9ecef;">
            <div class="container">
                <div class="swiper rts-cmmnSlider rts-podcast-slider">
                    <div class="swiper-wrapper">
                        @forelse ($podcasts as $podcast)
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail">
                                        @php
                                            $podcastId = '';
                                            if (preg_match('/v=([^&]+)/', $podcast->url, $matches)) {
                                                $podcastId = $matches[1];
                                            } elseif (preg_match('/youtu\.be\/([^?]+)/', $podcast->url, $matches)) {
                                                $podcastId = $matches[1];
                                            }
                                        @endphp
                                        @if ($podcastId)
                                            <a href="{{ $podcast->url }}" target="_blank" class="podcast-link">
                                                <img src="https://img.youtube.com/vi/{{ $podcastId }}/hqdefault.jpg"
                                                     alt="{{ $podcast->title }}"
                                                     style="max-height: 200px; object-fit: cover;"
                                                     onerror="this.src='https://via.placeholder.com/320x180?text=Podcast+Quebrado';">
                                            </a>
                                        @else
                                            <a href="{{ $podcast->url }}" target="_blank" class="podcast-link">
                                                <img src="https://via.placeholder.com/320x180?text=Podcast"
                                                     alt="{{ $podcast->title }}"
                                                     style="max-height: 200px; object-fit: cover;"
                                                     onerror="this.src='https://via.placeholder.com/320x180?text=Podcast+Quebrado';">
                                            </a>
                                        @endif
                                        <audio controls style="width: 100%;">
                                            <source src="{{ $podcast->url }}" type="audio/mpeg">
                                            Seu navegador não suporta áudio.
                                        </audio>
                                    </div>
                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item">
                                                <span>
                                                    <img class="span-icon" src="{{ url('assets/user/images/date.svg') }}"
                                                         alt="date-icon">
                                                    {{ $podcast->created_at->format('F d, Y') }}
                                                </span>
                                            </div>
                                        </div>
                                        <h5>{{ Str::limit($podcast->title, 50) }}</h5>
                                        <p>{{ Str::limit($podcast->description ?? 'Sem descrição', 100) }}</p>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}" alt="date-icon">12</span>
                                        <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12</span>
                                        <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16 Partilhas</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="swiper-slide">
                                <p>Nenhum podcast cadastrado.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .news-catagory-tag-3 {
        background: #ff1856 !important;
    }
    .mfp-title {
        font-size: 18px;
        font-weight: bold;
    }
    .mfp-description {
        font-size: 14px;
        color: #666;
    }
    .swiper-slide {
        width: auto !important;
        margin-right: 20px;
    }
    .video-thumbnail {
        position: relative;
    }
    .video-link, .podcast-link {
        display: block;
        z-index: 10;
    }
</style>

<script>
    // Inicializar Swiper para cada seção
    document.querySelectorAll('.rts-cmmnSlider').forEach(function(slider) {
        console.log('Inicializando Swiper com', slider.querySelectorAll('.swiper-slide').length, 'slides');
        new Swiper(slider, {
            loop: false,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 'auto',
            spaceBetween: 20,
            speed: 1000,
            allowTouchMove: true,

            // 🔑 permite que links dentro do slide funcionem
            preventClicks: false,
            preventClicksPropagation: false,
        });
    });

    // Garantir cliques em vídeos/podcasts
    $(document).ready(function() {
        console.log('Inicializando jQuery');
        $('.video-link, .podcast-link').off('click').on('click', function(e) {
            e.stopPropagation(); // evita conflito com swipe
            let url = $(this).attr('href');
            console.log('Abrindo link:', url);
            window.open(url, '_blank'); // abre numa nova aba
            return false; // garante que o Swiper não bloqueie
        });
    });
</script>

@endsection
