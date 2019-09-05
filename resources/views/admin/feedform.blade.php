@extends('layouts.dash')

@section('content')

    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Упс!</strong> Исправьте данные в полях! Внимательно читайте .<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session('error') }}</strong> Поздравляем!
            </div>
        @endif

        <h3>Добавление отзывов</h3>
        <a href="{{url('/back')}}" class="btn btn-primary">На главную</a><br><br>

        <form method="post"  action="{{route('store/feedback')}}" class="form-control">
            {{--@method('PUT')--}}
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-6">
                    <label for="Name"><b>Имя клиента:</b></label>
                    {{--<input type="hidden" value="{{$articles->id ?? ''}}">--}}
                    <input type="text" class="form-control" name="name" placeholder="Аскар" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-6">
                    <label for="Content"><b>Подробно о услуге:</b></label>
                    <textarea class="form-control"  name="description" placeholder="Напишите подробно..." rows="5" required></textarea></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-6">
                    <label for="Content"><b>Ваш телефон номер:</b></label>
                    <input class="form-control"  name="telephone" placeholder="Напишите номера "/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-6">
                    <label for="Content"><b>Статус:</b></label>
                    <select name="status">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
            </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-6" style="margin-top:60px">
                    <button type="submit" class="btn btn-success">Сохранить Отзыв</button>
                    <button type="reset" class="btn btn-default">Сбросить</button>
                </div>
            </div>
            {{--<input type="hidden" name="created_by" value="{{ Auth::id() }}">--}}
        </form>
    </div>

@endsection
