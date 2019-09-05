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

        <h3>Изменение данных</h3>
            <a href="{{url('/back')}}" class="btn btn-primary">На главную</a>

            <form method="post"  action="{{ route('update', $articles) }}" enctype="multipart/form-data">

                @method('PUT')
                @csrf

                @include('admin._form')
                {{--<input type="hidden" name="created_by" value="{{ Auth::id() }}">--}}
            </form>

    </div>

@endsection
