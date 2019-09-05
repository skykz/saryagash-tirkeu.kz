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
        <h3>Класстарды косу</h3>
        <a href="{{url('/back')}}" class="btn btn-primary">Басты бет</a>

        <h3 class="well"></h3><br>

        <form method="post" action="{{url('type')}}" enctype="multipart/form-data">

            {{csrf_field()}}
            <select name="article_id" class="form-control" required>
                <option class="more_options" value="">Танданыз</option>
            @foreach($articles as $article)
                    <option class="more_options" value="{{$article->id}}">{{$article->title}}</option>
                @endforeach
            </select><br>

            <select name="class" class="form-control" required>
                <option class="more_options" value="">Классты танданыз</option>
                <option class="more_options" value="5">Люкс</option>
                <option class="more_options" value="4">Полулуюкс</option>
                <option class="more_options" value="3">Стандарт</option>
            </select><br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-6">
                    <label for="Name"><b>Прайслистке кыскаша атау:</b></label>
                    {{--<input type="hidden" value="{{$articles->id ?? ''}}">--}}
                    <input type="text" class="form-control" name="title" placeholder="Атауын осында жазыныз"  value=""  required/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-6">
                    <label for="Content"><b>Класс туралы толык акпарат:</b></label>
                    <textarea class="form-control"  name="content" placeholder="Толыкрак осында жазыныз..." rows="6" required> </textarea></div>
            </div>

            <button type="submit" class="btn btn-success" style="margin-top:10px"><i class="fa fa-save"></i> Классты Сактау</button>

        </form>
    </div>




@endsection
