@extends('site.layout.main')
@section('title', 'EcoFeminino - Contato')
@section('content')

    <!--================= Contact Section End Here =================-->
    <div class="rts-contact-section section-gap-2" style="background: #e9ecef">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8">
                    <div class="contact-form-area">
                        <div class="rts-message-area mb--50">
                            <h1 class="page-title">Vamos ver <br>
                                Como podemos ajudar</h1>
                            <form>
                                <div class="row mb--20">
                                    <div class="col-xl-6">
                                        <div class="input-div first-child"><input type="text" placeholder="Seu Nome">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-div"><input type="text" placeholder="Seu Email"></div>
                                    </div>
                                </div>
                                <div class="row mb--20">
                                    <div class="col-xl-12">
                                        <div class="input-div"><input type="text" placeholder="Seu Assunto"></div>
                                    </div>
                                </div>
                                <textarea class="mb--10" name="WriteComment" cols="30" rows="10" placeholder="Seu Comentário"></textarea>
                            </form>
                            <div class="check-option">
                                <input type="checkbox" id="label">
                                <label for="label">Salvar meu nome, email e
                                    site neste navegador para a próxima vez que eu comentar.</label>
                            </div>
                            <button class="post-comment-btn">Enviar Agora<i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="office-information">
                        <h3 class="side-content-title2">Informações de Contato</h3>
                        <div class="email-info item-info">
                            <div class="icon1" alt="email-icon"></div>

                            <div class="infos">
                                <span class="email-title info-title">Envie-nos um email para</span>
                                <a href="mailto:info@sangbad.com" class="email-address info">geral@ecofeminino.ao</a>
                            </div>
                        </div>
                        <div class="sms-info item-info">
                            <div class="icon2" alt="phone-icon"></div>

                            <div class="infos">
                                <span class="sms-title info-title">Ligue para</span>
                                <a href="tel:+60244763842" class="sms-number info">+244 222 447 638</a>
                            </div>
                        </div>
                        <div class="address-info item-info">
                            <div class="icon3" alt="location-icon"></div>

                            <div class="infos">
                                <span class="address-title info-title">Endereço</span>
                                <span class="sms-number info">Cidade Alta <br>
                                    Mutamba, Luanda</span>
                            </div>
                        </div>
                        <a href="https://www.ecofeminino.ao/" class="site-link"><div class="icon4" alt="web-icon"></div>
                            https://ecofeminino.ao</a>
                        <div class="social-link-area">
                            <h4 class="social-title">Encontre-nos aqui:</h4>
                            <ul class="social-links">
                                <li> <a href="#" class="platform"><i class="fab fa-facebook-f"></i></a></li>
                                <li> <a href="#" class="platform"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li><a href="#" class="platform"><i class="fab fa-linkedin-in"></i></a></li>
                                <li> <a href="#" class="platform"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================Contact Section End Here =================-->


    <!--================= Map Section End Here =================-->
    <div class="rts-map-section">
        <div class="container">
            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0475200268143!2d90.39147371536886!3d23.74568478459165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8961d68b895%3A0xdab823f90c5ba033!2sLink%20Rd%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1652852918662!5m2!1sen!2sbd"
                    width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!--================= Map Section End Here =================-->

    <style>
        .icon1 {
            width: 24px;
            height: 24px;
            background-color: red;
            /* cor que vai aplicar */
            -webkit-mask: url("assets/user/images/icons/email-icon.svg") no-repeat center;
            -webkit-mask-size: contain;
            mask: url("assets/user/images/icons/email-icon.svg") no-repeat center;
            mask-size: contain;
            margin-right: 10px;
        }

        .icon2 {
            width: 24px;
            height: 24px;
            background-color: red;
            /* cor que vai aplicar */
            -webkit-mask: url("assets/user/images/icons/phone-icon.svg") no-repeat center;
            -webkit-mask-size: contain;
            mask: url("assets/user/images/icons/phone-icon.svg") no-repeat center;
            mask-size: contain;
            margin-right: 10px;
        }

        .icon3 {
            width: 24px;
            height: 24px;
            background-color: red;
            /* cor que vai aplicar */
            -webkit-mask: url("assets/user/images/icons/location-icon.svg") no-repeat center;
            -webkit-mask-size: contain;
            mask: url("assets/user/images/icons/location-icon.svg") no-repeat center;
            mask-size: contain;
            margin-right: 10px;
        }

        .icon4 {
            width: 24px;
            height: 24px;
            background-color: red;
            /* cor que vai aplicar */
            -webkit-mask: url("assets/user/images/icons/web-icon.svg") no-repeat center;
            -webkit-mask-size: contain;
            mask: url("assets/user/images/icons/web-icon.svg") no-repeat center;
            mask-size: contain;
            margin-right: 10px;
        }
        .post-comment-btn{
            background-color: red !important;
        }
    </style>

@endsection
