@extends('front.layouts.main')
@section('index')
	<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="border-style: solid;border-color: #cb9865;">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold" style="color: brown">Видео для обзора <i class="icon-youtube"></i></h4>
					<button style="margin-top: -18px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="videowrapper">
					<iframe width="593" height="360" src="https://www.youtube.com/embed/diPtJU8fJLU?controls=0">
					</iframe>
				</div>
			</div>
		</div>
	</div>

	<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{asset('img/ak_tilek.jpeg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1 style="text-shadow: 3px 0 5px #000, 3px 0 5px #7F7F84">Санаторий Сарыагаш &</h1> <h2 style="text-shadow: 3px 0 5px #000, 3px 0 5px #7F7F84;font-size: larger">Подберем только лучшие Курорты Сарыагаш</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url({{asset('img/arai-delux.jpg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1 style="text-shadow: 3px 0 5px #000, 3px 0 5px #7F7F84">Бронь без комиссии</h1>
				   					<h2 style="text-shadow: 3px 0 5px #000, 3px 0 5px #7F7F84">Забронируем номера по цене самих санаториев без наценок.</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(img/backg/oxi.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1 style="text-shadow: 3px 0 5px #000, 3px 0 5px #7F7F84">Встреча и Трансферы</h1>
				   					<h2 style="text-shadow: 3px 0 5px #000, 3px 0 5px #7F7F84">Бесплатный трансфер с вокзала Сарыагаш</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>
    {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">--}}
        {{--Launch demo modal--}}
    {{--</button>--}}

    <!-- Modal -->
    <script>
    @if (session('sent'))
        swal("Спасибо, успешно отправлено!", "", "success");
        @endif
    </script>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="exampleModalLongTitle">Будем рады Вас проконсультировать</h3>
                </div>
                <form action="{{route('order/contact')}}" method="post">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ваше имя</label>
                            <input type="text" name="name_client"  class="form-control" id="exampleInputEmail1"  placeholder="Введите имя" required>
                        </div>
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputTelephone">Ваш телефон</label>
                            <input type="tel" name="telephone_client" class="form-control" id="exampleInputTelephone" placeholder="8 (777) 777 77-77" required>
                        </div>
                </div>
                <div class="modal-footer">
                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                    <button type="submit" class="btn btn-primary">Перезвонить мне</button>
                </div>
                </form>
            </div>
        </div>
    </div>


		<div id="colorlib-services">
			<div class="container"><div class="row no-gutters">
				</div>
                <div class="text-center"><br>
                    <p><a href="{{url('/service')}}" class="btn btn-primary">Подробно о наших услугах  >></a></p>
                </div>
                <br>
			</div>
		</div>

		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-offset text-center colorlib-heading animate-box">
						<h2>Популярные санатории ⭐</h2>
						<a class="btn btn-primary" style="font-size: 20px;color: #ffbf47;font-weight: bold" href="tel:+77072725101"><i class="icon-phone"></i>  +7 (707) 272 51 01</a>
						<p>Наш город Сарыагаш прославляется своими лучшими санаториями и это с каждым годом очень быстро набирает обороты. В нашем городе около 30+ санаторно-курортных комплексов, наша компания подобрала для вас только самые лучшие варианты. Выбирая любого из перечисленных ниже, вы автоматический приобретаете самые эффективные методы лечения, Вежливый персонал а также самое важное Вы получите -  Незабываемый отдых и лечение у нас.Будьте с нами.</p>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
                @foreach($articles as $article)
				<a href="{{route('single')}}/{{$article->id}}" class="tour-entry">
					<div class="tour-img" style="background-image: url({{asset('img/resort_main_img')}}/{{$article->image}});" >
                        <span class="views"><i class="icon-eye"></i> {{$article->article_views}}</span>
                    </div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
						<h2>{{$article->title}}</h2>
						<!--<span class="city">Athens, Greece</span>-->
                        <span class="price"><span style="font-size: 10px;">от</span> {{ number_format( $article->price) }} <span style="font-size: 10px;">тг/сутки</span></span>
					</span>
				</a>
                    @endforeach
			</div>
		</div>


		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Санаторно - курортное лечение</h2>
						<p>В санаториях вы получите самые эффективные методы лечения!</p>
					</div>
				</div>
				<div class="blog-flex">
					<div class="f-entry-img" style="background-image: url({{asset('img/doctor.jpg')}});">
					</div>
					<div class="blog-entry aside-stretch-right">
						<div class="row">
							<div class="col-md-12 animate-box">
								<a class="blog-post">
									<span class="img" style="background-image: url({{asset('img/water.png')}});"></span>
									<div class="desc">
										<h3>Популярная минеральная вода для лечения</h3>
                                        <span class="cat"></span>
                                    </div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a class="blog-post">
									<span class="img" style="background-image: url({{asset('img/sports-and-competition.png')}});"></span>
									<div class="desc">
										<h3>Активный образ жизни в санаториях</h3>
                                        <span class="cat"></span>

                                    </div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a class="blog-post">
									<span class="img" style="background-image: url({{asset('img/vegetables.png')}});"></span>
									<div class="desc">
										<h3>Здоровое питание в санаториях</h3>
                                        <span class="cat"></span>

                                    </div>
								</a>
							</div>
                            <div class="col-md-12 animate-box">
                                <a class="blog-post">
                                    <span class="img" style="background-image: url({{asset('img/life-insurance.png')}});"></span>
                                    <div class="desc">
                                        <h3>Диагностика и лечение </h3>
                                        <span class="cat"></span>
                                    </div>
                                </a>
                            </div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-intro" class="intro-img" style="background-image: url(img/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">10</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Скидки</span>
										</div>
										<h3 class="text-sale">Успейте</h3><br>
                                        <p><a data-toggle="modal" data-target="#modalLoginForm" class="btn btn-primary">Забронировать</a></p>

                                    </div>
								</div>
								<div class="text-rights">
									<h3 class="title">Сезонные скидки для вас!</h3>
									<p>Обзорный видео материал о санаториях.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="video-wrap">
							<div class="video colorlib-video" style="background-image: url(img/youtube_logo.jpg);">
								<a href="#" data-toggle="modal" data-target="#modalVideo" ><i class="icon-video"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Отзывы наших клиентов</h2>
						<p>Спасибо за ваше доверие и выбор ❤️</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box">						
						<div class="owl-carousel2">
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-image: url(img/like.jpg);"></span>
									<span class="user">Эльмира</span>
									<blockquote>
										<p>Спасибо,Ерхан, Рахмет большой. За полное сопровождение от встречи с вокзала до заселения в санаторий. Мама с сыном довольные.Все шикарно!</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-image: url(img/like.jpg);"></span>
									<span class="user">Анара</span>
									<blockquote>
										<p>Тап-таза тамагы да жаксы бизге оте катты унады. Кызметкерлери сипайы ашык комекке дайын. Багалары артурли жане арзан =)</p>
									</blockquote>
								</div>
							</div>
                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-image: url(img/like.jpg);"></span>
                                    <span class="user">Милана</span>
                                    <blockquote>
                                        <p>Были в Акжайыке год назад. Остались в полном восторге.Персонал вежливый, обслуживание очень хорошее, питание на выбор, все вкусно!</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-image: url(img/like.jpg);"></span>
                                    <span class="user">Гаухар</span>
                                    <blockquote>
                                        <p>Сенуге абден болады.Мен сайт аркылы заказ бердим.Поезддан алдымнан кутип алды, сумкамызды сенип тапсырдык. Озимиздин орнымызга дейн толык апарып берди!</p>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-image: url(img/like.jpg);"></span>
                                    <span class="user">Жанар</span>
                                    <blockquote>
                                        <p>Сиздерге коп-коп рахмет! Биздин ата-анамыз оте жаксы дем алып кайтты!Бари унады.</p>
                                    </blockquote>
                                </div>
                            </div>

						</div>

					</div>
				</div>
            </div>
            <div class="text-center">
                <p><a href="{{url('/feedback')}}" class="btn btn-primary" >Посмотреть все отзывы </a></p></div>
        </div>
	
		<div id="colorlib-subscribe" style="background-image: url(img/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                        <h2>Подписка на нас</h2>
                        <p>Будьте всегда в курсе акции!</p>
                        <form class="form-inline qbstp-header-subscribe">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-0">
                                   <form action="{{route('subscribe')}}" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control" required id="email" placeholder="Оставьте свою почту">
                                        <button type="submit" class="btn btn-primary">Подписаться</button>
                                    </div>
                                   </form>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>

@endsection
