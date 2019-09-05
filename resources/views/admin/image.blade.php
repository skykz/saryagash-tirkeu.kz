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
        <h3>Добавление новых данных</h3>
        <a href="{{url('/back')}}" class="btn btn-primary">На главную</a>
        {{--<form  id="form" method="post" action="{{route('store')}}" enctype="multipart/form-data">--}}
            {{--{{csrf_field()}}--}}
            {{--<div id="newElementId">New inputbox goes here:</div>--}}

            {{--<input type="hidden" name="created_by" value="{{ Auth::id() }}">--}}
        {{--</form>--}}

            <h3 class="well"></h3><br>



            <form method="post" action="{{url('file')}}" enctype="multipart/form-data">

                {{csrf_field()}}
                <select name="article_id" class="form-control" required>
                    <option class="more_options" value=""></option>
                    @foreach($articles as $article)

                    <option class="more_options" value="{{$article->id}}">{{$article->title}}</option>
                        @endforeach
                </select><br>
                <div class="input-group hdtuto control-group lst increment" >

                    <input type="file" name="filenames[]" class="myfrm form-control">

                    <div class="input-group-btn">

                        <button class="btn btn-success" type="button"><i class="fa fa-plus-circle"> </i> Еще...</button>

                    </div>

                </div>

                <div class="clone hide">

                    <div class="hdtuto control-group lst input-group" style="margin-top:10px">

                        <input type="file" name="filenames[]" class="myfrm form-control">

                        <div class="input-group-btn">

                            <button class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i> Удалить</button>

                        </div>

                    </div>

                </div>
<br><br>

                <button type="submit" class="btn btn-success" style="margin-top:10px"><i class="fa fa-save"></i> Сохранить картинки</button>


            </form>
    </div>

    <script type="text/javascript">

        $(document).ready(function() {

            $(".btn-success").click(function(){

                var lsthmtl = $(".clone").html();

                $(".increment").after(lsthmtl);

            });

            $("body").on("click",".btn-danger",function(){

                $(this).parents(".hdtuto control-group lst").remove();

            });

        });

    </script>


@endsection
