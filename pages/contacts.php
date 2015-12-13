<div class="inner">
	<?php include_once "parts/breadcrumps.php";?>

	<div class="user-place">
		<section class="grid-12">
			<div class="col-xs-3 col-push col-sm-6 col-lg-6">
				<p>
					Найти ближайший офис продаж очень просто. Вы можете выбрать удобный для Вас город  на нашей карте либо в строке поиска, и мы предложим Вам адреса и контакты ближайших офисов продаж.
				</p>

				<hr class="gray-blue">

				<form action="" class="form form-horizontal form_place">
					<div class="form-group">
						<label for="">Выберите город</label>

						<select class="select-ui">
							<option value="">Москва</option>
							<option value="">Санкт Петербург</option>
							<option value="">Новосибирск</option>
							<option value="">Казань</option>
						</select>
					</div>
				</form>

				<div id="map-mobile" class="only-xs map" style="width: 278px; height: 160px;"></div>

				<section class="contacts">
					<article class="contacts__item">
						<p class="contacts__item__title">
							диллеры
						</p>
						<p>
							143050 МО, Одинцовский район, Малые Вяземы,<br> 
							Петровский пр-д, вл. 2, стр. 2<br>
							Тел./факс: +7 (495) 637-90-79/78/77; 637-93-99 
						</p>
					</article>

					<article class="contacts__item">
						<p class="contacts__item__title">
							центральный офис
						</p>

						<p>
							143050 МО, Одинцовский район, Малые Вяземы,<br> 
							Петровский пр-д, вл. 2, стр. 2<br>
							Тел./факс: +7 (495) 637-90-79/78/77; 637-93-99 
						</p>
					</article>
				</section>
			</div>

			<div class="mobile-hide col-pull col-xs-3 col-sm-6  col-lg-6">
				<div id="map-default" class="map" style="width: 100%; height: 430px;"></div>
			</div>
		</section>

		<a href="" class="print">
			<span class="ico print-ico"></span>
			<span>Распечатать</span>
		</a>
	</div>

	<header class="header-custom">
		<h2 class="category-header">напишите нам</h2>
	</header>

	<form action="" class="form form-horizontal feed-back">
		<section class="grid-12">
			<div class="col-xs-3 col-sm-6 col-lg-6">
				<div class="form-group">
					<label class="required">Кому:</label>
					
					<select class="select-ui">
						<option value="">Диллер</option>
						<option value="">Центральный офис</option>
						<option value="">Западный офис</option>
					</select>
				</div>

				<div class="form-group">
					<label class="required">Ваше имя:</label>
					<div class="input-group">
						<input type="text">
					</div>
				</div>

				<div class="form-group form_error">
					<label class="required">Электронная почта</label>
					<div class="input-group">
						<input type="text">
						<span class="ico form-error-ico"></span>
					</div>

					<div class="tooltip top right">
						Текст ошибки
					</div>
				</div>

				<div class="form-group">
					<label class="required">Телефон</label>
					<div class="input-group">
						<input type="text">
					</div>
				</div>

				<div class="form-group">
					<label class="required">Тема сообщения</label>
					<div class="input-group">
						<input type="text">
					</div>
				</div>

				<p class="required required_info">
					Все поля обязательны для заполнения
				</p>
			</div>

			<div class="col-xs-3 col-sm-6 col-lg-6">
				<div class="form-group">
					<label class="required">Ваше сообщение</label>
					<textarea></textarea>
				</div>

				<input type="submit" class="btn btn-default btn-gray" value="Отправить сообщение">
			</div>
		</section>
	</form>
</div>

<section class="wide-block m-gray no-indent">
	<div class="inner">
		<section class="grid-12">
			<div class="col-xs-3 col-sm-8 col-lg-8">
				<section class="category category_extended">
					<div class="category__descr">
						<h3 class="category__title">
							Мягкий, приятный на ощупь и хорошо драпирующий. 
							Разнообразный по фактуре, колористике и стилистическому исполнению.
						</h3>
						<p class="category__text">
							Именно шинилл дает блестящую возможность осуществить практически все дизайнерские идеи для Вашей мебели. Именно шинилловая обивка мебели может так легко и живо вписаться в интерьер любого уровня, гармонично смотреться в любой комнате - будь то классический кабинет или нарядная гостиная, радужная детская или уютная спальня. Сочетая российскую эстетику мебельного декора и европейский тренд, «Союз-М» предлагает по-настоящему актуальные коллекции мебельного шинилла. Не только модные новинки, но и великолепную подборку базовых, наиболее популярных коллекций, а так же удачные ткани-компаньоны.
						</p>
					</div>
				</section>
			</div>

			<div class="col-sm-4 col-lg-4 mobile-hide">
				<section class="category category_extended">
					<div class="category__img">
						<img src="images/content/desktop/ceo/img1.png" alt="">
					</div>
				</section>
			</div>
		</section>
	</div>
</section>
