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
        <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
        @include('admin._form')
        <input type="hidden" name="created_by" value="{{ Auth::id() }}">
    </form>

    </div>

@endsection
