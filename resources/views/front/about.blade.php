@extends('front.layouts.main')
@section('about')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{asset('img/blog-2.jpg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>О нашей компании</h1>
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
							<h2>О компании & История Санаториев</h2>
								<div class="col-md-8">
                                    <p><span style="font-weight: bold;color: #f048f9">Saryagash-Tirkeu</span> предлагает нашим клиентам отдых и лечение в обстановке полного покоя и равновесия в самых лучших санаториях города Сарыагаш. Эффективные методы лечения под действием минеральной воды на организм, исползуется современные технологии.
                                        В нашем санатории работают высококвалифицированные профессионалы: терапевт, кардиолог, гастроэнтеролог, уролог, Узи и т.д.
                                         Корфортные полулюкс, люкс, стандарт номера европейского стандарта оснащены современным оборудованием и порадуют вас уютом и комфортом.
                                        <br>Желаем вам хорошого отдыха и времяпровождения. Берегите себя и Ваше здоровье! </p><br>
									<div class="row row-pb-sm">
										<div class="col-md-6">
                                            <img class="img-responsive" src="{{asset('img/st_logo.png')}}" alt="логотип компании">
                                            <img class="img-responsive" src="{{asset('img/saryagash_login.jpg')}}" alt="фото сарыагаш">
										</div>
										<div class="col-md-6">
											<p>Сарыагаш (каз. Сарыағаш) — город в Казахстане, в Туркестанской области. Расположен в непосредственной близости от казахстанско-узбекистанской границы, в 15 км от столицы Узбекистана — Ташкента.В Сарыагаше есть источники минеральных вод; располагаются заводы по их бутилированию. Город известен как центр санаторно-курортного лечения. Кроме того, развито производство элитных сортов виноградных вин.</p><br>
                                            <p>1958 году 31 октября возвращаясь из Мактааральского района Председатель Совета Министерств Казахской ССР Д.Қонаев посетил и Сарыагаш. Ознакомившись со старой курортной зоной, ему пришла идея о необходимости строительства нового «Большого Санатория Сарыагаш». Вот так 1 марта 1959 года был заложен первый камень здания питьевого Арасана самим Динмухамедом Кунаевым.</p>
                                        </div>
									</div>


									<p>В мае 1960 года областная бальнеолечебница «Сарыагаш» перешла в ведение Республиканского Курортного управления Минздрава Казахской ССР, с января 1961 года функционирует как санаторий, с этого года он находится в ведении профсоюзов. В ноябре 1963 года был сдан в эксплуатацию первый полный комплекс курорта на 250 коек, состоящий из трёх спальных корпусов, ванного корпуса на 17 ванн.</p>
								</div>
                            <div class="col-md-4">
                                <div class="sidebar-wrap" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                    <div class="side search-wrap animate-box">
                                        <h3 class="sidebar-heading">Отправка заявки</h3>
                                        <form method="post" action="{{route('mail')}}" class="colorlib-form">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="date">Ваше имя:</label>
                                                        <div class="form-field">
                                                            <i class="icon icon-user-add"></i>
                                                            <input type="text" id="date" class="form-control date" required placeholder="Ф.И.О">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="date">Ваш номер телефона:</label>
                                                        <div class="form-field">
                                                            <i class="icon icon-phone-incoming"></i>
                                                            <input type="tel"  class="form-control date" required placeholder="+7 (777) 777 77-77">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="guests">Количество человек:</label>
                                                        <div class="form-field">
                                                            <i class="icon icon-arrow-down3"></i>
                                                            <select name="people" id="people" required class="form-control">
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
        </div>

@endsection

