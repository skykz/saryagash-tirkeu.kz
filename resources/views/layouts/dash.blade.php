<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('images/img-logo.png')}}" type="image/x-icon" />
    <title>Админ</title>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({
            selector: 'textarea',
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            },
            height: "200",
            theme: "modern",
            images_upload_handler: function (blobInfo, success, failure) {
                success("data:" + blobInfo.blob().type + ";base64," + blobInfo.base64());
            },
            // forced_root_block : false,
            paste_data_images: true,
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table toc contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
            ],
            toolbar1: 'insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | fullscreen | link image | bullist numlist outdent indent | forecolor backcolor',
            image_advtab: true,

            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ],
            menu: {
                file: {
                    title: 'Файл',
                    items: 'newdocument print'
                },
                edit: {
                    title: 'Редактировать',
                    items: 'undo redo | cut copy paste pastetext | selectall | replace'
                },
                insert: {
                    title: 'Добавить',
                    items: ' media image link | charmap hr anchor pagebreak | insertdatetime nonbreaking template'
                },
                view: {
                    title: 'Посмотреть',
                    items: 'visualaid visualchars visualblocks | preview fullscreen'
                },
                format: {
                    title: 'Формат',
                    items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'
                },
                table: {
                    title: 'Таблица',
                    items: 'inserttable tableprops deletetable | cell row column'
                },
                tools: {
                    title: 'Инструменты',
                    items: 'spellchecker code'
                }}});</script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li><b>Сарыагаш-Тиркеу</b></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="{{ url('/') }}" target="_blank" > Басты бет <i class="fa fa-arrow-right"></i></a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                        {{--</li>--}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span style="color:darkblue;font-weight: bold"> {{ Auth::user()->name }}</span> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" style="background-color:indianred;color: white"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>  {{ __('Шыгу') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


        <main class="py-4">
            @yield('content')
        </main>


</div>

<!-- Scripts -->
</body>
</html>
