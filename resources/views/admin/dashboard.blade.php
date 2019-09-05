@extends('layouts.dash')

@section('content')
    <style>
        .project-tab {
            padding: 10%;
            margin-top: -8%;
        }
        .project-tab #tabs{
            background: #007b5e;
            color: #eee;
        }
        .project-tab #tabs h6.section-title{
            color: #eee;
        }
        .project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #0062cc;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 3px solid !important;
            font-size: 16px;
            font-weight: bold;
        }
        .project-tab .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #0062cc;
            font-size: 16px;
            font-weight: 600;
        }
        .project-tab .nav-link:hover {
            border: none;
        }
        .project-tab thead{
            background: #f3f3f3;
            color: #333;
        }
        .project-tab a{
            text-decoration: none;
            color: #333;
            font-weight: 600;
        }
    </style>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session('status') }}</strong> Поздравляем!
            </div>
        @endif

        <div class="row text-center">
            <div class="col-lg-3">
                <div class="jumbotron">
                    <h3><span class="badge badge-primary p-2">Галлерея <span style="color: orangered"></span></span></h3>
                    {{--<h3><span class="badge badge-primary p-2">Материалов {{ $articleCount }}</span></h3>--}}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="jumbotron">
                    <h3><span class="badge badge-primary p-2">Отзывы <span style="color: orangered"></span></span></h3>
                    {{--<h3><span class="badge badge-primary p-2">Материалов {{ $articleCount }}</span></h3>--}}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="jumbotron">
                    <h3><span class="badge badge-primary p-2">Санаторий <span style="color: orangered">{{$amount}}</span></span></h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="jumbotron">
                    <h3><span class="badge badge-primary p-2">Прайслист <span style="color: orangered">{{$type}}</span></span></h3>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-3">
                <a class="btn btn-block btn-primary" href="{{route('kartinka') }}" >Создать галлерию</a>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-block btn-danger" href="#">Создать Отзыв</a>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-block btn-success" href="{{route('create') }}">Создать Санаторий</a>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-block btn-warning" href="{{route('create/type') }}">Добавить Прайслист</a>
            </div><br>
        </div>
            <br>

            <section id="tabs" class="project-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="background-color:#ffcaae;font-weight: bold">Санаторий</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="background-color:#afbeff;font-weight: bold">Email подписки</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" style="background-color:#fff6b6;font-weight: bold" >Прайслисты</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Название</th>
                                            <th scope="col">Контент</th>
                                            <th scope="col">Цена</th>
                                            <th scope="col">Просмотр</th>
                                            <th scope="col">Дата созд.</th>
                                            <th scope="col">Картинка</th>
                                            <th scope="col">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($articles as $article)
                                            <tr>
                                                <th scope="row">{{$article->id}}</th>
                                                <td>{{$article->title}}</td>
                                                <td style="word-break: break-all"> {{ str_limit(strip_tags($article->content), 150) }} </td>
                                                <td><span style="font-weight: bold">{{$article->price}}</span> тг/сутки</td>
                                                @if ($article->discount != 0)
                                                    <td><span style="font-weight: bold">{{$article->article_views}}</span> %</td>
                                                @else
                                                    <td><span style="font-weight: bold">{{$article->article_views}}</span></td>
                                                @endif
                                                <td><span style="font-weight: bold">{{$article->created_at}}</span></td>
                                                <td>
                                                    <img src="{{asset('img/resort_main_img')}}/{{$article->image}}" style="border-radius: 50%; " width="80px" height="80px" alt="ваша картинка">
                                                </td>
                                                <td>
                                                {{--<a href="delete/{{$article->id}}" class="btn btn-danger" >Удалить</a>--}}
                                                    <a class="btn btn-primary" onclick="return confirm('Вы точно хотите изменить?')" href="edit/{{$article->id}}"><i class="fa fa-edit"></i> Изменить</a>
                                                    <a class="btn btn-danger" onclick="return confirm('Вы уверены удалить?')" href="delete/{{$article->id}}"><i class="fa fa-trash-o"></i> Удалить</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <table class="table table-hover">

                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Email адрес подписчика</th>
                                            <th scope="col">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($subscribes as $subs)
                                            <tr>
                                                <th scope="row">{{$subs->id}}</th>
                                                <td><span style="font-weight: bold">{{$subs->email}}</span></td>
                                                <td>
                                                    <a class="btn btn-danger" onclick="return confirm('Вы уверены удалить?')" href="{{url('delete/subs')}}/{{$subs->id}}"><i class="fa fa-trash-o"></i> Удалить</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <table class="table table-hover">

                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Класс</th>
                                            <th scope="col">Такырыбы</th>
                                            <th scope="col">Контент</th>
                                            <th scope="col">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($types as $type)
                                            <tr>
                                                <th scope="row">{{$type->id}}</th>

                                                @if ($type->type == 5)
                                                    <td>Люкс</td>
                                                @elseif($type->type == 4)
                                                    <td>Полулюкс</td>
                                                @elseif($type->type == 3)
                                                    <td>Стандарт</td>
                                                @endif
                                                <td>{{$type->title}}</td>

                                                <td><span style="font-weight: bold">{{ str_limit(strip_tags($type->content), 130) }}</span></td>
                                                <td>
                                                    <a class="btn btn-danger" onclick="return confirm('Вы уверены удалить?')" href="delete/type/{{$type->id}}"><i class="fa fa-trash-o"></i> Удалить</a>
                                                    <a class="btn btn-warning" onclick="return confirm('Вы уверены изменить?')" href="edit/type/{{$type->id}}"><i class="fa fa-edit"></i> Изменить</a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>

@endsection
