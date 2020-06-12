	<div class="main-slider" id="main">
		<?foreach ($result as $slide):?>
			<div class="main-slider-slide">
				<img src="<?=$slide['img']?>" alt="" class="main-slider-slide__img">
				<div class="main-slider-slide__background"></div>
				<?if($slide['logo']):?>
					<?=$slide['logo']?>
				<?endif?>
				<div class="container">
					<?if($slide['text']):?>
						<div class="main-slider-slide__text"><?=$slide['text']?></div>
					<?endif?>
					<?if($slide['button']['text']):?>
						<a href="<?=$slide['button']['link']?>"<?if($slide['button']['link']):?> target="_blank" <?endif?>class="main-slider-slide__button"<?if($slide['button']['data-action']):?> data-action="<?=$slide['button']['data-action']?>"<?endif?>><?=$slide['button']['text']?></a>
					<?endif?>
				</div>
			</div>
		<?endforeach?>
	</div>
</div>