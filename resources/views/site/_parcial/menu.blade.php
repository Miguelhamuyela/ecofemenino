        <div class="navbar-sticky">
            <div class="navbar-part navbar-part2">
                <div class="container">
                    <div class="navbar-inner">
                        <a href="{{ route('site.home') }}" class="logo">
                            <img class="logo-default" src="{{ url('assets/user/images/eco1.png') }}"
                                alt="ecofemenino-logo">
                            <img class="logo-dark" src="{{ url('assets/user/images/eco2.png') }}" alt="Barrons24-logo">
                        </a>
                        <div class="rts-menu rts-menu1 m-0">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="dropdown"><a class="menu-item item-1 item-2 active"
                                            href="{{ route('site.home') }}">Início</a></li>
                                    {{-- <li class="dropdown"><a class="menu-item item-2"
                                            href="{{ route('site.about') }}">Sobre Nós</a></li> --}}
                                    <li class="dropdown"><a class="menu-item item-2"
                                            href="{{ route('site.multimedia') }}">Multimídia<i
                                                class="fas fa-chevron-down"></i></a>
                                        <ul class="dropdown-sub">
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1"
                                                    href="{{ route('site.multimedia') }}#imagens">Imagens</a></li>
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1"
                                                    href="{{ route('site.multimedia') }}#videos">Videos</a></li>
                                            <li class="flyout-right1 dropdown"><a class="flyout-link-1"
                                                    href="{{ route('site.multimedia') }}#podcasts">Podcasts</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="menu-item item-2"
                                            href="{{ route('site.news') }}">Atualidades<i
                                                class="fas fa-chevron-down"></i></a>
                                        <ul class="dropdown-sub">
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1"
                                                    href="{{ route('site.news.profile') }}">Perfil Inspirador</a></li>
                                            <li class="dropdown"><a class="flyout-link-1"
                                                    href="{{ route('site.news.notice') }}">Notícias<i
                                                        class="fas fa-chevron-down"></i></a>
                                                <ul class="sub-flyout">
                                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                            href="{{ route('site.news.notice') }}#mulher-na-politica">Mulher
                                                            na Política</a>
                                                    </li>
                                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                            href="{{ route('site.news.notice') }}#mulher-na-economia">Mulher
                                                            na Economia</a>
                                                    </li>
                                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                            href="{{ route('site.news.notice') }}#sociedade-e-cultura">Sociedade
                                                            e Cultura</a>
                                                    </li>
                                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                            href="{{ route('site.news.notice') }}#coluna-internacional">Coluna
                                                            Internacional</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1"
                                                    href="{{ route('site.news.event') }}">Eventos</a></li>
                                            <li class="dropdown"><a class="flyout-link-1"
                                                    href="{{ route('site.news.article') }}">Artigos<i
                                                        class="fas fa-chevron-down"></i></a>
                                                <ul class="sub-flyout">
                                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                            href="{{ route('site.news.article') }}#editorial">Editorial</a>
                                                    </li>
                                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                            href="{{ route('site.news.article') }}#debate-femenino">Debate Femenino</a>
                                                    </li>
                                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                            href="{{ route('site.news.article') }}#direitos-humanos">Direito Humanos e Género</a>
                                                    </li>
                                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                            href="{{ route('site.news.article') }}#coluna-internacional">Coluna Internacional</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a class="menu-item item-2"
                                            href="{{ route('site.youth') }}">Juventude e
                                            Liderança<i class="fas fa-chevron-down"></i></a>
                                        <ul class="dropdown-sub">
                                            <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                    href="{{ route('site.youth') }}#tecnologia">Tecnologia</a>
                                            </li>
                                            <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                    href="{{ route('site.youth') }}#educacao">Educação</a>
                                            </li>
                                            <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                    href="{{ route('site.youth') }}#empreendedorismo">Empreendedorismo Jovem</a>
                                            </li>
                                        </ul>

                                    </li>
                                    <li><a class="menu-item item-2" href="{{ route('site.contact') }}">Contacto</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-action-items header-action-items-2 header-action-items-first">
                            <div class="search-part-2 d-flex">
                                <div class="search-icon"><i
                                        class="far
                                            fa-search"></i></div>
                                <div class="search-input-div">
                                    <input type="text" placeholder="Faça a sua pesquisa...">
                                </div>
                            </div>
                        </div>
                        <div class="header-action-items header-action-items-2 header-action-items-last">
                            <div class="search-part m-0">
                                <div class="search-icon"><i class="far fa-search"></i></div>
                                <div class="search-input-area">
                                    <div class="search-input-area-close"></div>
                                    <input class="search-input" type="text" placeholder="Search here...">
                                    <div class="search-close-icon"><i class="far fa-times"></i></div>
                                </div>
                            </div>
                        </div>
                        <a class="hamburger m-0" href="#"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="offset-sidebar">
                <a class="hamburger mobile-hamburger ml--30" href="#"><span></span></a>
                <div class="offset-widget offset-logo mb-30">
                    <a href="{{ route('site.home') }}" class="logo">
                        <img src="{{ url('assets/user/images/eco1.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu">
                <ul id="mobile-menu-active">
                    <li class="dropdown"><a class="menu-item item-1 item-2 active"
                            href="{{ route('site.home') }}">Início</a></li>
                    {{-- <li class="dropdown"><a class="menu-item item-2" href="{{ route('site.about') }}">Sobre Nós</a>
                    </li> --}}
                    <li class="dropdown"><a class="menu-item item-2"
                            href="{{ route('site.multimedia') }}">Multimídia<i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-sub">
                            <li class="flyout-right1 flyout"><a class="flyout-link-1" href="author.html">Imagens</a>
                            </li>
                            <li class="flyout-right1 flyout"><a class="flyout-link-1" href="team.html">Videos</a>
                            </li>
                            <li class="flyout-right1 dropdown"><a class="flyout-link-1" href="#">Podcasts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="menu-item item-2" href="{{ route('site.news') }}">Atualidades<i
                                class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-sub">
                            <li class="flyout-right1 flyout"><a class="flyout-link-1" href="author.html">Perfil
                                    Inspirador</a></li>
                            <li class="dropdown"><a class="flyout-link-1" href="team.html">Notícias<i
                                        class="fas fa-chevron-down"></i></a>
                                <ul class="sub-flyout">
                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                            href="catagory-details.html">Mulher na Política</a>
                                    </li>
                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                            href="catagory-details2.html">Mulher na Economia</a>
                                    </li>
                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                            href="catagory-details2.html">Sociedade e Cultura</a>
                                    </li>
                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                            href="catagory-details2.html">Coluna Internacional</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="flyout-right1 flyout"><a class="flyout-link-1" href="author.html">Eventos</a>
                            </li>
                            <li class="dropdown"><a class="flyout-link-1" href="team.html">Artigos<i
                                        class="fas fa-chevron-down"></i></a>
                                <ul class="sub-flyout">
                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                            href="catagory-details.html">Editorial</a>
                                    </li>
                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                            href="catagory-details2.html">Debate Femenino</a>
                                    </li>
                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                            href="catagory-details2.html">Direito Humanos e Género</a>
                                    </li>
                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                            href="catagory-details2.html">Coluna Internacional</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a class="menu-item item-2" href="{{ route('site.youth') }}">Juventude e Liderança</a>

                    </li>
                    <li><a class="menu-item item-2" href="{{ route('site.contact') }}">Contacto</a></li>
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
        </aside>
