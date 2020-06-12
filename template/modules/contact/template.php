<?global $content?>
<div class="section" style="position: relative;" data-section="contact" id="contact">
	<div class="contact container">
		<div class="contact-content">
			<div class="contact__title">Контактная информация</div>
			<div class="contact-content-informaion">
				<div class="contact-content-informaion__title">Офис продаж и шоурум</div>
				<a class="contact-content-informaion__address" href="https://yandex.ru/maps/-/COFsJ67K" target="_blank">
					<span>Москва, Россия, 101000</span>
					<span>Уланский переулок, 13, ст.1</span>
				</a>
				<a class="contact-content-informaion__phone" href="tel:<?=str_replace(array(' ', '(', ')', '-', '+'), '', $content['phone'])?>"><?=$content['phone']?></a>
				<div class="contact-content-informaion-soc">
					<a href="<?=$content['whatsapp_link']?>"><img src="/template/img/whatsapp.svg" alt=""></a>
					<a href="<?=$content['viber_link']?>"><img src="/template/img/viber.svg" alt=""></a>
					<a href="<?=$content['instagram_link']?>"><img src="/template/img/instagram.svg" alt=""></a>
				</div>
				<?/*<a class="contact-content-informaion__other-link" target="_blank" href="/uploads/Проект приспособления.pdf">Разрешительные документы</a>*/?>
				<a class="contact-content-informaion__other-link" href="">Информационная брошюра</a>
				<a class="contact-content-informaion__other-link" href="">Документы</a>
			</div>
			<?/*
			<div class="contact-content-slider-wrap">
				<div class="contact-content-slider-wrap__title">Фотогалерея</div>
				<div class="contact-content-slider swiper-container">
					<div class="swiper-wrapper">
						<?foreach($result['slider'] as $img):?>
							<div class="contact-content-slider__slide swiper-slide">
								<img src="<?=$img?>" alt="">
							</div>
						<?endforeach?>
					</div>
				</div>
				<div class="swiper-button-prev"></div>
    			<div class="swiper-button-next"></div>
			</div>*/?>
		</div>
	</div>
	<div class="dev-info">
		<div class="dev-info__text container"><span>Сайт разработан в 2020 году</span><span>Все права защищены</span></div>
	</div>
</div>