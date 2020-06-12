<div class="section" data-section="floors" id="floors">
	<div class="floors container">
		<div class="floors__title">Этажи</div>
		<div class="floors-content">
			<div class="swiper-container floors-content-slider">
			    <div class="swiper-wrapper">
			    	<?foreach($result['slider'] as $slide):?>
				        <div class="swiper-slide">
				        	<img src="<?=$slide['img']?>" alt="">
				        	<div class="floors-content-slider__text"><?=$slide['name']?></div>
				        </div>
			        <?endforeach?>
			    </div>
			    <div class="swiper-button-prev"></div>
			    <div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
</div>