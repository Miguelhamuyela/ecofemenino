@extends('site.layout.main')
@section('title', 'EcoFeminino - Multimídia')
@section('content')

<!-- Magnific Popup CSS/JS (mova para layout.main se possível) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<div class="rts-news-details-section section-gap-2" style="background-color: #e9ecef;">
    <div class="container">
        <!-- Seção Imagens -->
        <div class="rts-post-heading mb--50" id="imagens">
            <div class="heading-content">
                <div class="contents">
                    <a href="#0" class="news-catagory-tag-3">EcoFeminino</a>
                    <h2 class="content-title mb--10"><a href="#">Imagens</a></h2>
                </div>
            </div>
        </div>
        <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" data-wow-duration="1.5s" style="background-color: #e9ecef;">
            <div class="container">
                <div class="swiper rts-cmmnSlider rts-image-slider">
                    <div class="swiper-wrapper">
                        @forelse ($images as $image)
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail">
                                        <a href="{{ asset('storage/images/galery/' . $image->image) }}"
                                           class="image-popup"
                                           title="{{ $image->title }}"
                                           data-description="{{ $image->description ?? 'Sem descrição' }}">
                                            <img src="{{ asset('storage/images/galery/' . $image->image) }}"
                                                 alt="{{ $image->title }}"
                                                 style="max-height: 200px; object-fit: cover;"
                                                 onerror="this.src='https://via.placeholder.com/200?text=Imagem+Quebrada';">
                                        </a>
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item">
                                                <span>
                                                    <img class="span-icon" src="{{ url('assets/user/images/date.svg') }}"
                                                         alt="date-icon">
                                                    {{ $image->created_at->format('F d, Y') }}
                                                </span>
                                            </div>
                                        </div>
                                        <h5>{{ Str::limit($image->title, 50) }}</h5>
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
                                <p>Nenhuma imagem cadastrada.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

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
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                        </div>
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
                                        <a href="{{ $podcast->url }}" target="_blank" class="podcast-link">
                                            <img src="https://via.placeholder.com/320x180?text=Podcast"
                                                 alt="{{ $podcast->title }}"
                                                 style="max-height: 200px; object-fit: cover;"
                                                 onerror="this.src='https://via.placeholder.com/320x180?text=Podcast+Quebrado';">
                                        </a>
                                        <audio controls style="width: 100%;">
                                            <source src="{{ $podcast->url }}" type="audio/mpeg">
                                            Seu navegador não suporta áudio.
                                        </audio>
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                        </div>
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
    .video-link, .podcast-link, .image-popup {
        display: block;
    }
</style>

<script>
    // Inicializar Swiper para cada seção
    document.querySelectorAll('.rts-cmmnSlider').forEach(function(slider) {
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
        });
    });

    // Inicializar Magnific Popup para imagens
    $(document).ready(function() {
        $('.image-popup').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            titleSrc: function(item) {
                return item.el.attr('title') + '<div class="mfp-description">' + item.el.data('description') + '</div>';
            }
        });

        // Garantir cliques em vídeos/podcasts
        $('.video-link, .podcast-link').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            window.open($(this).attr('href'), '_blank');
        });
    });
</script>

@endsection