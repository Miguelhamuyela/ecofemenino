@extends('layouts._site.main')
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
            <div class="rts-gallery-section gallary-page-section pt--40 mb--40">
                <div class="row">
                    @forelse ($images as $image)
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="gallery-item ">
                                <a class="image-popup image-m" href="{{ url('storage/images/galery/' . $image->image) }}"
                                    title="<h5>{{ $image->title }}</h5><p>{{ $image->description ?? 'Sem descrição' }}</p>"
                                    data-description="{{ $image->description ?? 'Sem descrição' }}">
                                    <img src="{{ url('storage/images/galery/' . $image->image) }}"
                                        alt="{{ $image->title }}" />
                                </a>
                                <div class="contents">
                                    <h5 class="member-role">{{ $image->role ?? 'Perfil' }}</h5>
                                    <a href="#" class="member-name">{{ $image->title }}</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Nenhuma imagem cadastrada.</p>
                    @endforelse
                </div>
            </div>

            <!-- Seção Videos -->
            <div class="rts-post-heading mb--50" id="videos">
                <div class="heading-content">
                    <div class="contents">
                        <h2 class="content-title mb--10"><a href="#">Videos</a></h2>
                    </div>
                </div>
            </div>
            <div class="rts-gallery-section gallary-page-section pt--40 mb--40">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="video-item">
                            @foreach ($videos as $video)
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
                                        <iframe width="150%" height="400px"
                                            src="https://www.youtube.com/embed/{{ $video_id }}" frameborder="0"
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
                            @endforeach
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
            <div class="rts-gallery-section gallary-page-section pt--40 mb--40">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="video-item">
                            @foreach ($podcasts as $podcast)
                                @if (strpos($podcast->url, 'youtube.com') !== false || strpos($podcast->url, 'youtu.be') !== false)
                                    @php
                                        // Extrair o ID do vídeo da URL
                                        preg_match(
                                            '/(?:youtube\.com\/(?:[^\/]+\/[^\/]+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
                                            $podcast->url,
                                            $matches,
                                        );
                                        $podcast_id = $matches[1] ?? null;
                                    @endphp

                                    @if ($podcast_id)
                                        <iframe
                                            src="https://www.youtube.com/embed/{{ $podcast_id }}" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    @else
                                        <p class="text-danger">⚠️ Vídeo não encontrado.</p>
                                    @endif
                                @else
                                    <video controls>
                                        <source src="{{ $podcast->url }}" type="video/mp4">
                                        Seu navegador não suporta o elemento de vídeo.
                                    </video>
                                @endif
                            @endforeach
                        </div>
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

        .video-link,
        .podcast-link,
        .image-popup {
            display: block;
        }
    </style>

    {{-- <script>
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
                    return item.el.attr('title') + '<div class="mfp-description">' + item.el.data(
                        'description') + '</div>';
                }
            });

            // Garantir cliques em vídeos/podcasts
            $('.video-link, .podcast-link').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                window.open($(this).attr('href'), '_blank');
            });
        });
    </script> --}}

@endsection
