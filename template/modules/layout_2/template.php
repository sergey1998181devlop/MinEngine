<?/*print_r($result)*/?>
<div class="section" data-section="layout" id="layout">
	<div class="layout container">
		<div class="layout__title">Планировки</div>
		<div class="layout-content-picture-select layout-content-picture-select__mobile">
			<?foreach($result as $key => $floor):?>
				<div class="layout-content-picture-select__item<?if($key == 'floor_2'):?> active<?endif?>" data-floor="<?=$key?>"><?=$floor['name']?></div>
			<?endforeach?>
		</div>
		<div class="layout-content">
			<div class="layout-content-picture">
				<div class="layout-content-picture-select">
					<?foreach($result as $key => $floor):?>
						<div class="layout-content-picture-select__item<?if($key == 'floor_2'):?> active<?endif?>" data-floor="<?=$key?>"><?=$floor['name']?></div>
					<?endforeach?>
				</div>
				<div class="layout-content-picture-list">
					<?foreach($result as $key => $floor):?>
						<?foreach($floor['rooms'] as $data):?>
							<img <?if($data['key'] == '2.1'):?>class="active"<?endif?> src="<?=$data['img']?>" alt="" data-key="<?=$data['key']?>">
						<?endforeach?>
					<?endforeach?>
				</div>
			</div>

			<div class="layout-content-slider">
				<?foreach($result as $key => $slider):?>
					<div class="swiper-container active" data-floor="<?=$key?>">
					    <div class="swiper-wrapper">
					    	<?foreach($slider['rooms'] as $slide):?>

						        <div class="swiper-slide layout-content-plane-element" data-key="<?=$slide['key']?>">
									<div class="layout-content-plane-info__wrapper">
										<div class="layout-content-plane__name"><?=$slide['name']?></div>
										<div class="layout-content-plane-description">
											<div class="layout-content-plane-description__square"><?=$slide['square']?> м<sup>2</sup></div>
											<div class="layout-content-plane-description-rooms">
												<div class="layout-content-plane-description-rooms__elem"><?=$slide['rooms']?></div>
												<div class="layout-content-plane-description-rooms__elem"><?=$slide['bath']?></div>
											</div>
										</div>
									</div>
									<img class="layout-content-plane-element__image" src="<?=$slide['plane']?>" href="<?=$slide['plane']?>" alt="">
						        </div>

						    <?endforeach?>
					    </div>
					    <div class="swiper-button-prev"></div>
					    <div class="swiper-button-next"></div>
					</div>
				<?endforeach?>
			</div>
		</div>
	</div>
</div>