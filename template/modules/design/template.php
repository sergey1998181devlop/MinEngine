<div class="section" data-section="design">
	<div class="design container">
		<div class="design__title">Апартаменты с индивидуальным дизайном</div>
		<div class="design-content">
			<div class="design-content-information">
				<?foreach($result['information'] as $inform):?>
					<div class="design-content-information-element">
						<div class="design-content-information-element__title"><?=$inform['title']?></div>
						<div class="design-content-information-element__subtitle"><?=$inform['subtitle']?></div>
					</div>
				<?endforeach?>
			</div>
			<div class="design-content-picture">
				<img src="/template/modules/design/img/img_1.jpg" alt="">
				<img src="/template/modules/design/img/img_2.jpg" alt="">
			</div>
		</div>
	</div>
</div>