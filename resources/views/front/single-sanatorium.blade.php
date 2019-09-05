
@extends('front.layouts.main')
@section('single')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{asset('img/single.jpg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Saryagash-Tirkeu company</h2>
				   					<h1>{{$art->title}}</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

        <div id="colorlib-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="wrap-division">
                            <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                                <h2>{{$art->title}}</h2>
                            </div>
                            <article class="animate-box">
                                <div class="blog-img" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-image: url({{asset('img/resort_main_img')}}/{{$art->image}});" title="{{$art->title}}"></div>
                                <div class="desc">
                                            <span style="color: #fffefa;
font-size: 28px;
padding-right: 15px;
padding-left: 10px;
margin-left: -42px;
background-color: #338bff;"><span style="font-size: 12px;">от</span> {{ number_format( $art->price) }} <span style="font-size: 12px;">тг/сутки</span></span><br>
                                    <i class="icon-eye"></i> {{$art->article_views}} просмотров
                                    <h2 style="font-weight: bold;">{{$art->title}} - Сарыагаш санаторий</h2>
                                    <p style="font-size: 10px;">{!!$art->content!!}</p>
                                </div>
                            </article>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sidebar-wrap" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="side search-wrap animate-box">
                                <h3 class="sidebar-heading">Отправка заявки</h3>
                                <form method="post" action="{{route('mail')}}" class="colorlib-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                @csrf
                                                <label>Ваше имя:</label>
                                                <div class="form-field">
                                                    <i class="icon icon-user-add"></i>
                                                    <input type="text"  class="form-control"  required placeholder="Ф.И.О">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Ваш номер телефона:</label>
                                                <div class="form-field">
                                                    <i class="icon icon-phone-incoming"></i>
                                                    <input type="tel"  class="form-control " required placeholder="+7 (777) 777 77-77">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Количество человек:</label>
                                                <div class="form-field">
                                                    <i class="icon icon-arrow-down3"></i>
                                                    <select name="people" id="people" class="form-control" required>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5+</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input style="color: #fffefa" type="submit" name="submit" id="submit" value="Забронировать" class="btn btn-primary btn-block">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-tour" style="margin-top: -130px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="f-tour">
                            <div class="row row-pb-md">
                                <div class="col-md-12">
                                    <div class="row">
                                        @if ($img != null)
                                            @php
                                                $dat = json_decode($img->path,true); @endphp
                                            @if(is_array($dat) && !empty($dat))
                                                @for ($i = 0; $i < sizeof($dat); $i++)
                                                    <div class="col-md-3 animate-box">
                                                    <a  href="{{asset('files')}}/{{$dat[$i]}}"  style="background-image: url({{asset('files')}}/{{$dat[$i]}});" title="{{$art->title}}" rel="nofollow" class="f-tour-img">
                                                        <div class="desc">
                                                            <h3>{{$art->title}}</h3>
                                                        </div>
                                                    </a>
                                                    </div>

                                                @endfor
                                            @endif
                                        @endif
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="colorlib-wrap" style="margin-top: -150px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wrap-division">
                                    <div class="row">
                                        <div class="col-md-12 animate-box">
                                            <div class="room-wrap">
                                                <div class="text-center">
                                                    <h2>Виды номеров</h2>
                                                </div>
                                                <div class="row">
                                                    @foreach($types as $type)
                                                    <div class="col-md-6 col-sm-6" style="margin-bottom:10px;padding: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                        <div class="desc" style="background-color: #cce6e2">
                                                            <h2 style="background-color: #d1cce9;">{{$type->title}}</h2>
                                                            <p>{!! $type->content !!}</p></div>
                                                    </div>
                                                        @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- SIDEBAR-->

                </div>
            </div>
        </div>
@endsection
