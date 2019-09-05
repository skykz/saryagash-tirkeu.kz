    <!DOCTYPE HTML>
    <html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>35 лучших санаториев Сарыагаша, Сарыагаш санаторий, Сарыагаш Тиркеу</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Цена стандарт от 7000тг => Входить более 20ти видов лечение и 4х питания. Встреча трансфер. Брон без комиссии 0 тенге!" />
        <meta name="keywords" content="сарыагаш тиркеу, Сарыагаш санаторий, Лечение, Цены Сарыгаш Санаторий, Отзывы Сарыагаш Санаторий" />

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content="Сарыагаш Санаторий - Saryagash-Tirkeu"/>
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{asset('img/st_logo.png')}}"/>
        <meta property="og:image:width" content="668">
        <meta property="og:image:height" content="504">
        <meta property="og:url" content="https://saryagash-tirkeu.kz/"/>
        <meta property="og:site_name" content="Сарыагаш тиркеу-сервис для бронирование"/>
        <meta property="og:description" content=""/>
        <meta property="og:locale" content="ru_RU">
        <link rel="icon" href="{{asset('img/st_logo.png')}}">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Animate.css -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

        <!-- Flexslider  -->
        <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/email.css')}}">
        <link rel="stylesheet" href="{{asset('css/call.css')}}">
        <link rel="stylesheet" href="{{asset('css/insta.css')}}">

        <!-- Date Picker -->
    {{--<link rel="stylesheet" href="{{asset('css/bootstrap-dat')}}css/bootstrap-datepicker.css">--}}
    <!-- Flaticons  -->
        <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
        <!-- Theme style  -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- Modernizr JS -->
        <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{asset('js/respond.min.js')}}"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style>
            @import url("https://fonts.googleapis.com/css?family=Roboto");
            /* offset-x > | offset-y ^| blur-radius | spread-radius | color */
            @keyframes pulse {
                0% {
                    transform: scale(1, 1);
                }
                50% {
                    opacity: 0.3;
                }
                100% {
                    transform: scale(1.45);
                    opacity: 0;
                }
            }
            .pulse {
                -webkit-animation-name: pulse;
                animation-name: pulse;
            }

            .nav-bottom {
                display: flex;
                flex-direction: row;
                justify-content: flex-end;
                align-content: flex-end;
                width: auto;
                height: auto;
                position: fixed;
                z-index: 8;
                bottom: 0px;
                padding: 5px;
                left: 0px;
            }
            @media (max-width: 50px) {
                .nav-bottom {
                    width: 0px;
                    left: 0px;
                }
            }

            .whatsapp-button {
                display: flex;
                justify-content: center;
                align-content: center;
                width: 60px;
                height: 60px;
                z-index: 8;
                transition: .3s;
                margin: 25px;
                padding: 0px;
                border: none;
                outline: none;
                cursor: pointer;
                border-radius: 50%;
                background-color: #25D366;
                /* offset-x > | offset-y ^| blur-radius | spread-radius | color */
                -webkit-box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
                -moz-box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
                box-shadow: 1px 1px 6px 0px rgba(68, 68, 68, 0.705);
            }

            .circle-anime {
                display: flex;
                position: absolute;
                justify-content: center;
                align-content: center;
                width: 70px;
                height: 70px;
                top: 25px;
                right: 25px;
                border-radius: 50%;
                transition: .3s;
                background-color: #77bb4a;
                animation: pulse 1.0s 4.0s ease infinite;
            }

            .popup-whatsapp {
                display: none;
                position: absolute;
                flex-direction: column;
                justify-content: flex-end;
                align-items: flex-end;
                width: auto;
                height: auto;
                padding: 10px;
                bottom: 85px;
                left: 6px;
                transition: .5s;
                border-radius: 10px;
                background-color: white;
                /* offset-x > | offset-y ^| blur-radius | spread-radius | color */
                -webkit-box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
                -moz-box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
                box-shadow: 2px 1px 6px 0px rgba(68, 68, 68, 0.705);
                animation: slideInRight .6s 0.0s both;
            }
            .custom-badge{
                position: absolute;

                top: 35px;

                right: 25px;

                background: #ff3a36;

                color: white;

                font-size: 15px;

                padding: 6px;

                border-radius: 50%;

                width: 20px;

                text-align: center;

                line-height: 7px;

                font-weight: bold;

                opacity: 1;

                height: 20px;

                transition: .5s;

                padding-top: 5px;

                z-index: 10;

                animation: slideInRight .6s 0.0s both;
            }
            .popup-whatsapp > div {
                margin: 5px;
            }
            @media (max-width: 680px) {
                .popup-whatsapp p {
                    font-size: 0.9em;
                }
            }
            .popup-whatsapp > .content-whatsapp.-top {
                display: flex;
                flex-direction: column;
            }
            .popup-whatsapp > .content-whatsapp.-top p {
                color: #585858;
                font-family: 'Roboto';
                font-weight: 400;
                font-size: 1.0em;
            }
            .popup-whatsapp > .content-whatsapp.-bottom {
                display: flex;
                flex-direction: row;
            }

            .closePopup {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 28px;
                height: 28px;
                margin: 0px 0px 15px 0px;
                border-radius: 50%;
                border: none;
                outline: none;
                cursor: pointer;
                background-color: #f7b1b4;
                -webkit-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
                -moz-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
                box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
            }
            .closePopup:hover {
                    background-color: #a6f73f;
                transition: .3s;
            }

            .send-msPopup {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #ffffff;
                margin: 0px 0px 0px 5px;
                border: none;
                outline: none;
                cursor: pointer;
                -webkit-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
                -moz-box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
                box-shadow: 1px 1px 2px 0px rgba(68, 68, 68, 0.705);
            }
            .send-msPopup:hover {
                background-color: #a8ff92;
                transition: .3s;
            }

            .is-active-whatsapp-popup {
                display: flex;
                animation: slideInRight .6s 0.0s both;
            }

            input.whats-input[type=text] {
                width: 250px;
                height: 40px;
                box-sizing: border-box;
                border: 0px solid #ffffff;
                border-radius: 20px;
                font-size: 1em;
                background-color: #ffffff;
                padding: 0px 0px 0px 10px;
                -webkit-transition: width 0.3s ease-in-out;
                transition: width 0.3s ease-in-out;
                outline: none;
                transition: .3s;
            }
            @media (max-width: 420px) {
                input.whats-input[type=text] {
                    width: 225px;
                }
            }
            input.whats-input::placeholder {
                /* Most modern browsers support this now. */
                color: rgba(68, 68, 68, 0.705);
                opacity: 1;
            }
            input.whats-input[type=text]:focus {
                background-color: #f8f8f8;
                -webkit-transition: width 0.3s ease-in-out;
                transition: width 0.3s ease-in-out;
                transition: .3s;
            }

            .icon-whatsapp-small {
                width: 24px;
                height: 24px;
            }

            .icon-whatsapp {
                width: 60px;
                height:60px;
            }

            .icon-font-color {
                color: #ffffff;
            }

            .icon-font-color--black {
                color: #333333;
            }
        </style>
    </head>
    <body>
    <div class="colorlib-loader"></div>

    <div class="nav-bottom">
        {{--<div class="popup-whatsapp fadeIn">--}}
            {{--<div class="content-whatsapp -top">--}}
                {{--<button type="button" class="closePopup">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
                {{--<p>Добрый день, 😊 задавайте любые вопросы!</p>--}}
            {{--</div>--}}
            {{--<div class="content-whatsapp -bottom">--}}
                {{--<input class="whats-input" id="whats-in" type="text" Placeholder="Напишите сообщение..." />--}}
                {{--<button class="send-msPopup" id="send-btn" type="button">--}}
                    {{--<i class="icon-send" style="font-size: 30px"></i>--}}
                {{--</button>--}}

            {{--</div>--}}
        {{--</div>--}}
        <button type="button" id="whats-openPopup" class="whatsapp-button">
            <img class="icon-whatsapp" width="100" height="100" src="{{asset('img/whatsapp_icon.png')}}">
        </button>
        <div id="badge-toggle">
        <div class="fa">
            <span class="custom-badge">1</span>
        </div></div>
        <div class="circle-anime"></div>
    </div>
    <div class="zoom">
        <a class="zoom-fab zoom-btn-large" id="zoomBtn"><img style="margin-top: -10px;" src="{{asset('img/support.png')}}" width="45" height="45"/></a>
        <ul class="zoom-menu">
            <li><a  data-ref="99" href="tel:+77072725101" class="zoom-fab zoom-btn-sm zoom-btn-person scale-transition scale-out"><img src="{{asset('img/quick-call-button-phone.png')}}" style="margin-bottom: 10px"></a></li>
            <li><a target="_blank" href="https://instagram.com/saryagash_tirkeu?r=nametag" class="zoom-fab zoom-btn-sm zoom-btn-person scale-transition scale-out" style="background-color: #ffffff"><img src="{{asset('img/insta.png')}}" style="margin-bottom: 10px" width="50px" height="50px"/></a></li>
        </ul>
    </div>

    <script>
        $("a").click(function() {
            var _this = $(this);
            var ref = $(this).data('ref');
            $.ajax({
                url: '/click_url_phone.php',
                type: 'POST',
                data: {id:ref},
                success: function(href) {
                    if(href != '')
                        _this.attr("href",href);
                }
            });
        });
        @if (session('sent'))
        swal("Успешно отправлено! Обязательно свяжимся с вами.", "", "success");
        @elseif(session('subscribe'))
        swal("Успешно отправлено! Читайте нас.", "", "success");
        @endif
    </script>
    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="colorlib-logo">
                                <a href="{{url('/')}}"><img src="{{asset('img/st_logo.png')}}" alt="логотип" width="70" height="70"></a>
                                <a href="{{url('/')}}"><span style="color:#4dbff5;font-weight: bold;">Saryagash</span>-<span style="color: #b9f543;font-weight: bold">Tirkeu</span></a>
                            </div>
                        </div>
                        <div class="col-xs-10 text-right menu-1" style="background-color: #7f748980;">
                            <ul>
                                <li class="{{Request::is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Главная</a></li>
                                <li><a href="tel:+77072725101"><i class="icon-phone"></i> 87072725101</a></li>
                                <li class="{{Request::is('service') ? 'active' : '' }}"><a href="{{url('/service')}}">Услуги</a></li>
                                <li class="{{Request::is('about') ? 'active' : '' }}"><a href="{{url('/about')}}">О компании</a></li>
                                <li class="has-dropdown">
                                    <a href="#">Санатории</a>
                                    <ul class="dropdown">
                                        @if ($articles != null)
                                            @foreach($articles as $article)
                                                <li><a href="{{route('single')}}/{{$article->id}}">{{$article->title}}</a></li>
                                            @endforeach
                                        @else
                                            <li><a href="{{url('/')}}">Нет санаториев</a></li>
                                        @endif
                                    </ul>
                                </li>

                                <li class="{{Request::is('contact') ? 'active' : '' }}"><a href="{{url('/contact')}}">Обратная связь</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="border-style: solid;border-color: #cb9865;">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold" style="color: brown">Отправка заявки <i class="icon-telegram"></i></h4>
                        <button style="margin-top: -18px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('mail')}}" method="POST">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <input type="text" id="defaultForm-email" name="name" class="form-control validate" placeholder="Имя" required>
                                <label style="font-size: 18px" data-error="wrong" data-success="right" for="defaultForm-email">Ваше Имя</label>
                            </div>
                            @csrf
                            <div class="md-form mb-4">
                                <input type="number" id="defaultForm-pass" name="telephone" class="form-control validate" placeholder="+7 777 777 77 77" required>
                                <label style="font-size: 18px" data-error="wrong" data-success="right" for="defaultForm-pass">Телефон номер</label>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn palatin-btn btn-3 m-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" type="submit"><i class="fa fa-telegram"></i> Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <style>
            .videowrapper {
                float: none;
                clear: both;
                width: 100%;
                position: relative;
                padding-bottom: 56.25%;
                padding-top: 25px;
                height: 0;
            }
            .videowrapper iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
        @yield('index')
        @yield('about')
        @yield('services')
        @yield('contact')
        @yield('single')
        @yield('feedback')

        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <a href="{{url('/')}}">  <p style="font-size: 25px;color: #338bff">Saryagash-Tirkeu.kz</p></a>
                        <p>Это ваш официальный сайт для бронирования номеров в санаториях. 4 лет на рынке - доверенный сервис для всех!</p>
                        <p>
                        <ul class="colorlib-social-icons">
                            <li><a href="https://m.facebook.com/saryagash.bron/" target="_blank"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://wa.me/+77072725101?text=Добрый%20день%20,%20" target="_blank"><i class="icon-whatsapp"></i></a></li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-2 colorlib-widget">

                    </div>
                    <div class="col-md-2 colorlib-widget">

                    </div>
                    <div class="col-md-1">
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <h4>Контактные данные</h4>
                        <ul class="colorlib-footer-links">
                            <li>Сарыагаш курорт, <br> Туркестанская область,город Сарыагаш</li>
                            <li><a href="tel:+77072725101">+7 (707) 272 51 01</a></li>
                            <li><a href="mailto:saryagash-tirkeu@mail.ru">saryagash-tirkeu@mail.ru</a></li>
                            <li><a href="#">saryagash-tirkeu.kz</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены | <i class="fa fa-user-plus" aria-hidden="true"></i> разработка
                            <a  target="_blank" style="font-size: 20px;color: #30b3ff;"><b><a href="https://vk.com/skydevsary">SkyDev</a></b></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup-options.js')}}"></script>
    <!-- Date Picker -->
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <!-- Main -->
    <script src="{{asset('js/main.js')}}"></script>


    <script src="{{asset('js/index.js')}}"></script>

    {{--TimeOut to display modal for clients--}}
    <script>
            setTimeout(function() {
                $('#exampleModalCenter').modal('show');
            }, 25000); // milliseco
    </script>

    <script>
        popupWhatsApp = () => {
            let btnClosePopup = document.querySelector('.closePopup');
            let btnOpenPopup = document.querySelector('.whatsapp-button');
            let popup = document.querySelector('.custom-badge');
            let sendBtn = document.getElementById('send-btn');

            btnClosePopup.addEventListener("click",  () => {
                popup.classList.toggle('is-active-whatsapp-popup')
            })

            btnOpenPopup.addEventListener("click",  () => {
                popup.classList.toggle('is-active-whatsapp-popup')
                popup.style.animation = "fadeIn .6s 0.0s both";
            })

            sendBtn.addEventListener("click", () => {
                let msg = document.getElementById('whats-in').value;
                let relmsg = msg.replace(/ /g,"%20");
                //just change the numbers "1515551234567" for your number. Don't use +001-(555)1234567
                window.open('https://wa.me/+77072725101?text='+relmsg, '_blank');

            });

            setTimeout(() => {
                popup.classList.toggle('is-active-whatsapp-popup');
            }, 7000);
        }

        popupWhatsApp();
    </script>
    </body>
    </html>

