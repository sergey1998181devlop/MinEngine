<?require_once($_SERVER['DOCUMENT_ROOT'].'/system/controller.php')?>
<?
global $content;
$content = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/system/content/content.php'));
?>
<!DOCTYPE html>
<html lang="<?=$site_lang?>">
<head>
	<meta charset="UTF-8">
	<title><?=$content['title']?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="theme-color" content="#231F20">
	<link rel="icon" href="/favicon.ico">

	<link rel="stylesheet" href="/template/css/fonts.css">
	<link rel="stylesheet" href="/template/css/slick.css">
	<link rel="stylesheet" href="/template/css/slick-theme.css">
	<link rel="stylesheet" href="/template/css/fullpage.min.css">
	<link rel="stylesheet" href="/template/css/mapsvg.css">
	<link rel="stylesheet" href="/template/css/swiper.min.css">
	<link rel="stylesheet" href="/template/css/magnific-popup.css">
	<link rel="stylesheet" href="/template/css/style.css">
	<script src="/template/js/jquery-3.4.1.min.js"></script>
	<script src="/template/js/slick.min.js"></script>
	<script src="/template/js/fullpage.min.js"></script>
	<script src="/template/js/mapsvg.min.js"></script>
	<script src="/template/js/swiper.min.js"></script>
	<script src="/template/js/jquery.magnific-popup.min.js"></script>
	<script src="/template/js/script.js"></script>
</head>
<body>
<header class="header">
	<div class="container">
		<a class="header-logo" href="/"><img src="/template/img/main_logo.png" alt="logo"></a>
		<div class="header-address"><a href="https://yandex.ru/maps/-/COFsJ67K" target="_blank" class="header-address__text"><?=$content['header_address']?></a></div>
		<div class="header-phone"><a class="header-phone__link" href="tel:<?=str_replace(array(' ', '(', ')', '-', '+'), '', $content['phone'])?>"><?=$content['phone']?></a></div>
		<ul class="header-links">
			<a href="<?=$content['whatsapp_link']?>"><img src="/template/img/whatsapp.svg" alt=""></a>
			<a href="<?=$content['viber_link']?>"><img src="/template/img/viber.svg" alt=""></a>
			<a href="<?=$content['instagram_link']?>"><img src="/template/img/instagram.svg" alt=""></a>
		</ul>
		<ul class="header-language">
			<a class="active" href="/">ru</a>
			<a href="/">en</a>
		</ul>
		<div class="header-menu">
			<button class="header-menu-button">
				<span>toggle menu</span>
			</button>
			<div class="header-menu-list">
				<div class="header-menu-list__img">
					<img src="/template/img/main_logo.png" alt="">
				</div>
				<div class="header-menu-list-links container" id="menu">
					<a href="" data-section="main">Главная</a>
					<div class="header-menu-list-links__delimiter"></div>
					<a href="" data-section="about">О проекте</a>
					<div class="header-menu-list-links__delimiter"></div>
					<a href="" data-section="location">Расположение</a>
					<div class="header-menu-list-links__delimiter"></div>
					<a href="" data-section="floors">Этажи</a>
					<div class="header-menu-list-links__delimiter"></div>
					<a href="" data-section="layout">Планировки</a>
					<div class="header-menu-list-links__delimiter"></div>
					<a href="" data-section="mansard">Мансарды</a>
					<div class="header-menu-list-links__delimiter"></div>
					<a href="" data-section="keyler">Келлеры</a>
					<div class="header-menu-list-links__delimiter"></div>
					<a href="" data-section="contact">Контакты</a>
				</div>
				<a class="header-menu-info__phone" href="tel:<?=str_replace(array(' ', '(', ')', '-', '+'), '', $content['phone'])?>"><?=$content['phone']?></a>
				<div class="header-menu-info-soc">
					<a href="<?=$content['whatsapp_link']?>"><img src="/template/img/whatsapp.svg" alt=""></a>
					<a href="<?=$content['viber_link']?>"><img src="/template/img/viber.svg" alt=""></a>
					<a href="<?=$content['instagram_link']?>"><img src="/template/img/instagram.svg" alt=""></a>
				</div>
				<div class="header-menu-info__address">Москва, Россия, 101000<br>Уланский переулок, 13, ст.1</div>
			</div>
		</div>
		<a class="callbutton" href="tel:<?=str_replace(array(' ', '(', ')', '-', '+'), '', $content['phone'])?>"><img src="/template/img/Call.svg" alt=""></a>
	</div>
</header>
<div id="fullpage">
	<div class="section" data-section="main">