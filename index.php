<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<title>Союз - М</title>
	
	<link href="css/site.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/lib/multiselect.css">


	<script type="text/javascript" src="js/lib/jquery-1.11.3.min.js">
	</script>
	<script type="text/javascript" src="js/lib/jquery-ui.js"></script>
	<script type="text/javascript" src="js/lib/fader.js"></script>
	<script type="text/javascript" src="js/lib/icheck.js"></script>
	<script type="text/javascript" src="js/lib/multiselect.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&load=Map,Placemark" type="text/javascript"></script>
	<script type="text/javascript" src="js/site.js"></script>

	<?php
		$page = (isset($_GET["page"])) ? $_GET["page"] : "main";

		$layoutMode = ($page == "main")? "main-page" : "page-inner";

		switch ($page) {
			case "main":
				$content = "pages/main.php";
			break;
			
			case "contacts":
				$content = "pages/contacts.php";
			break;

			case "news":
				$content = "pages/news.php";
			break;

			case 'card':
				$content = "pages/card.php";
			break;

			case 'catalog':
				$content = "pages/catalog.php";
			break;

			case 'elements':
				$content = "pages/elements.php";
			break;
		}
	?>

</head>

<body>
	<div id="wrap" class="<?php echo $layoutMode;?>">
		<div class="inner">
			<div class="scroll-top">
				<span class="ico arrow-up-lg"></span>
			</div>
		</div>
		<section id="page">
			<header id="header">
				<section class="fixed-panel header_fixed-panel">
					<div class="inner">
						<?php @include "parts/nav-main-header.php"; ?>
					</div>
				</section>

				<a href="/" class="logo logo_header">
					<span class="ico logo-lg"></span>
				</a>

				<section class="grid-12">
					<div class="col-xs-clear col-xs-2 col-lg-offset-2 col-sm-offset-2 col-sm-8 col-lg-8">
						<div class="ishop-menu">
							<ul class="ishop-menu__default">
								<li>
									<a href="">каталог</a>
							
									<ul>
										<li>
											<a href="">
												Все об уходе за тканью
											</a>
										</li>
										<li>
											<a href="">Все о ткани</a>
										</li>
										<li>
											<a href="">
												Профессиональные ткани
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="">новинки</a>
							
									<ul>
										<li>
											<a href="">
												Все об уходе за тканью
											</a>
										</li>
										<li>
											<a href="">Все о ткани</a>
										</li>
										<li>
											<a href="">
												Все об уходе за тканью
											</a>
										</li>
										<li>
											<a href="">Все о ткани</a>
										</li>
										<li>
											<a href="">
												Профессиональные ткани
											</a>
										</li>
										<li>
											<a href="">Все о ткани</a>
										</li>
										<li>
											<a href="">
												Профессиональные ткани
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="">полезное</a>
							
									<ul>
										<li>
											<a href="">
												Все об уходе за тканью
											</a>
										</li>
										<li>
											<a href="">Все о ткани</a>
										</li>
										<li>
											<a href="">
												Все об уходе за тканью
											</a>
										</li>
										<li>
											<a href="">Все о ткани</a>
										</li>
										<li>
											<a href="">
												Профессиональные ткани
											</a>
										</li>
										<li>
											<a href="">Все о ткани</a>
										</li>
										<li>
											<a href="">
												Профессиональные ткани
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="">3d подбор ткани</a>
							
									<ul>
										<li>
											<a href="">
												Все об уходе за тканью
											</a>
										</li>
										<li>
											<a href="">Все о ткани</a>
										</li>
										<li>
											<a href="">
												Профессиональные ткани
											</a>
										</li>
										<li>
											<a href="">Все о ткани</a>
										</li>
										<li>
											<a href="">
												Профессиональные ткани
											</a>
										</li>
									</ul>
								</li>
							</ul>

							<form class="ishop-menu__mob only-xs js-form" action="">
								<select class="select-ui">
									<option value="Москва">Продукция</option>
									<option value="Санкт Петербург">Меню 1</option>
									<option value="Казань">Меню 2</option>
									<option value="Новосибирск">Меню 3</option>
								</select>
							</form>
						</div>
					</div>
					<div class="col-xs-1 col-sm-2 col-lg-2">
						<div class="content-row content-row_search">
							<form action="" class="search">
								<div class="form-group">
									<div class="input-group">
										<input type="text">
										<span class="ico search-mob m-search"></span>
									</div>
								</div>
							</form>
							
							<a href="" class="btn m-cart">
								<span class="ico cart-mob cart"></span>
								<span class="cart-counter">3</span>
								<span class="amount">5 400</span>
							</a>
						</div>
					</div>
				</section>
			</header>

			<section class="content">
				<?php
					@include_once($content);
				?>
			</section>
		</section>

		<footer id="footer">
			<div class="inner">
				<?php @include "parts/nav-main-footer.php"; ?>

				<a href="" class="site-map mobile-hide">
					<span class="ico site-map-ico"></span>
					Карта сайта
				</a>
			</div>

			<a href="/" class="logo logo_footer only-xs">
				<img src="images/content/logo-footer.png" height="28" width="153" alt="">
			</a>
			<span class="copy only-xs">
				Все права защищены © Союз-М, 2015
			</span>

			<a href="" class="site-map only-xs">
				<span class="ico site-map-ico"></span>
				Карта сайта
			</a>

			<div class="fixed-panel footer_fixed-panel">
				<div class="inner">
					<?php @include "parts/partners.php"; ?>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>