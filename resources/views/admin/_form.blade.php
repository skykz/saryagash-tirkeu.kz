
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-6">
            <label for="Name"><b>Заголовок:</b></label>
            {{--<input type="hidden" value="{{$articles->id ?? ''}}">--}}
            <input type="text" class="form-control" name="title" placeholder="Напишите название"  value="{{ $articles->title ?? '' }}"  required/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-6">
            <label for="Content"><b>Контент:</b></label>
            <textarea class="form-control"  name="content" placeholder="Напишите подробно..." rows="6" required>{{ $articles->content ?? '' }} </textarea></div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-6">
            <label for="Number"><b>Цена за сутки:</b></label>
            <input type="number" class="form-control" name="price" placeholder="10000 KZT/сутки" value="{{ $articles->price ?? '' }}"  required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-6">
            <label for="Number"><b>Если есть акция:</b></label>
            <input type="number" class="form-control" name="discount" placeholder="20% акция" value="{{ $articles->discount ?? '' }}"  >
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-6">
            <label for="Number"><b>Выберите картинку:</b></label>

            @if ( $articles->image ?? '' )

            <img src="{{asset('images')}}/{{$articles->image}}" width="150px" height="150px" alt="ваша картинка">
            @endif
            <br><br>
            @if ( $articles->image ?? '' )
                <input type="file" name="image" value="{{$articles->image}}" >
                @else
            <input type="file" name="image">
                @endif
        </div>
    </div>

    {{--<div class="row">--}}
        {{--<div class="col-md-4"></div>--}}
        {{--<div class="form-group col-md-6">--}}
            {{--<label for="Number">Загрузите Прайслист:</label>--}}
            {{--<br>--}}
            {{--@if ( $articles->image_price ?? '' )--}}

                {{--<img src="{{asset('images')}}/{{$articles->image_price}}" width="150px" height="150px" alt="ваша картинка">--}}
            {{--@endif--}}
            {{--<br><br>--}}
            {{--@if ( $articles->image_price ?? '' )--}}
                {{--<input type="file" name="image_price" value="{{$articles->image_price}}" >--}}
            {{--@else--}}
                {{--<input type="file" name="image_price">--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Сохранить</button>
            <button type="reset" class="btn btn-default"><i class="fa fa-trash-o"></i> Сбросить</button>
        </div>
    </div>

