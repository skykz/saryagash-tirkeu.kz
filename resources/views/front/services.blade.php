@extends('front.layouts.main')
@section('services')

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{asset('img/cover-img-5.jpg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					{{--<h2>by colorlib.com</h2>--}}
				   					<h1>Наши услуги</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-services">
			<div class="container">
                <div class="row no-gutters"><br>
                    <div class="text-center">
                        <h2>Наши преимущества - Наша гордость! <i class="icon-heart"></i></h2><br>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
								{{--<i style="background-image: url('{{asset('img/target.png')}}'); width: 300px;height: 300px;"></i>--}}
                                <img src="{{asset('img/hospital.png')}}" width="120" height="120">
							</span>
                            <h3>Лечебные процедуры</h3>
                            <p>Качественная медицина и новейшие технологии</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
                                <img src="{{asset('img/wifi.png')}}" width="120" height="120">
							</span>
                            <h3>Наличие Wi-fi</h3>
                            <p>Можете подключиться к интернету любое время в санаториях</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
                                <img src="{{asset('img/dumbbell.png')}}" width="120" height="120">
							</span>
                            <h3>Имеется фитнес залы</h3>
                            <p>Занимайтесь спортом, будьте в тонусе </p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
                                <img src="{{asset('img/credit-card.png')}}" width="120" height="120">
							</span>
                            <h3>Карты & онлайн оплата</h3>
                            <p>Возможно оплата через банковские карты или же онлайн</p>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters"><br>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
								{{--<i style="background-image: url('{{asset('img/target.png')}}'); width: 300px;height: 300px;"></i>--}}
                                <img src="{{asset('img/reception.png')}}" width="120" height="120">
							</span>
                            <h3>Вежливый персонал</h3>
                            <p>Оперативный, опытный персонал для Вас.</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
                                <img src="{{asset('img/taxi.png')}}" width="120" height="120">
							</span>
                            <h3>Туры & Встреча гостей</h3>
                            <p>Встретим Вас быстро и качественно. Имеется туры.</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
                                <img src="{{asset('img/bed.png')}}" width="120" height="120">
							</span>
                            <h3>Классификация номеров</h3>
                            <p>Виды номера: Люкс, Полулюкс, Стандарт и много другое</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
                                <img src="{{asset('img/money.png')}}" width="120" height="120">
							</span>
                            <h3>Только реальные Цены</h3>
                            <p>Все цены - без наценок и без комиссии</p>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters"><br>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
								{{--<i style="background-image: url('{{asset('img/target.png')}}'); width: 300px;height: 300px;"></i>--}}
                                <img src="{{asset('img/target.png')}}" width="120" height="120">
							</span>
                            <h3>Гарантия услуги</h3>
                            <p>Всегда гарантируем качество наших услуг. Опытная команда </p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
                                <img src="{{asset('img/meet.png')}}" width="120" height="120">
							</span>
                            <h3>Индивидуальный подход</h3>
                            <p>Приоритетным принципом работы нашей компании является принцип индивидуального подхода к каждому клиенту.</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
                                <img src="{{asset('img/support.png')}}" width="120" height="120">
							</span>
                            <h3>Поддержка 24/7</h3>
                            <p>Наша служба поддержки работает круглосуточно.Обращайтесь любое время.</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
							<span class="icon">
                                <img src="{{asset('img/people.png')}}" width="120" height="120">
							</span>
                            <h3>Нас рекомендуют</h3>
                            <p>90+% наших клиентов рекомендуют наши услуги своим друзьям или знакомым.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <p><a data-toggle="modal" data-target="#modalLoginForm" class="btn btn-primary">Отправить заявку</a></p>
                </div>
            </div>
		</div>
@endsection
