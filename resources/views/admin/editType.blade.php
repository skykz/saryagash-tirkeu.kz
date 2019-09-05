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
        <h3>Класстарды Озгерту</h3>
        <a href="{{url('/back')}}" class="btn btn-primary">Басты бет</a>

        <h3 class="well"></h3><br>

        <form method="post" action="{{url('update/type',$types)}}" enctype="multipart/form-data">

            {{csrf_field()}}


            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-6">
                    <label for="Name">Прайслистке кыскаша атау:</label>
                    {{--<input type="hidden" value="{{$articles->id ?? ''}}">--}}
                    <input type="text" class="form-control" name="title" placeholder="Атауын осында жазыныз"  value="{{$types->title ?? ''}}"  required/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-6">
                    <label for="Content">Класс туралы толык акпарат:</label>
                    <textarea class="form-control"  name="content" placeholder="Толыкрак осында жазыныз..." rows="6" required>{{$types->content ?? ''}}</textarea></div>
            </div>

            <button type="submit" class="btn btn-success" style="margin-top:10px"><i class="fa fa-save"></i> Классты Сактау</button>

        </form>
    </div>




@endsection
