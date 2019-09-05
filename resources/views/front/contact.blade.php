@extends('front.layouts.main')
@section('contact')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{asset('img/single.jpg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Наши контакты</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Обратная связь для вас!</h2>
						<form action="{{route('contact')}}" method="post">
							<div class="row form-group">
								<div class="col-md-12">
									<label >Ф.И.О.</label>
									<input type="text" name="name" class="form-control" placeholder="Напишите Ф.И.О." required>
								</div>
							</div>
                            @csrf
							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Телефон номер</label>
									<input type="tel"  name="telephone" class="form-control" placeholder="Напишите номер телефона" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Тема заявки</label>
									<input type="text" id="subject" name="subject" class="form-control" placeholder="Заголовок" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Описание</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Напишите описание завяки ..."></textarea>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Отправить" class="btn btn-primary">
							</div>

						</form>		
					</div>
					<div class="col-md-11 col-md-offset-1">
						<h3>Контактные данные для наших клиентов</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> Курорт-Сарыагаш, <br> Туркестанская область, город Сарыагаш</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel:+77072725101">+7 (707)272 51 01</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:saryagash-tirkeu@mail.ru">saryagash-tirkeu@mail.ru</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">saryagash-tirkeu.kz</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div  style="padding-left: 400px">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A686380251a1c2151e5c8090f6c47b7c7f323b7e15adb669421f5c845cc4d250c&amp;source=constructor" width="450" height="348" frameborder="0"></iframe>
        </div>
@endsection
