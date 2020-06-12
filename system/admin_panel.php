<?
if(!empty($_POST)) {
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/system/content/content.php', serialize($_POST));
}
$content = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/system/content/content.php'));
?>
<style>
	body {
		background-color: rgba(35, 31, 32, 0.1);
		font-family: sans-serif;
	}
	.container {
		margin: 0 auto;
		max-width: 1280px;
	}
	.admin-panel {
		margin-top: 20px;
	}
	.admin-panel-item {
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		justify-content: flex-start;
		margin-bottom: 20px;
	}
	.admin-panel-item__name,
	.admin-panel-item__value,
	.admin-panel-item__current-value {
		margin-right: 20px;
	}
	.admin-panel-item__name {
		width: 200px;
	}
</style>
<h1>Панель администратора</h1>
<form class="admin-panel container" method="POST">
	<div class="admin-panel-item">
		<div class="admin-panel-item__name">Название вкладки</div>
		<input name="title" type="text" class="admin-panel-item__value" value="<?=$content['title']?>">
		<div class="admin-panel-item__current-value">Текущее значение: <?=$content['title']?></div>
	</div>
	<div class="admin-panel-item">
		<div class="admin-panel-item__name">Адрес в хедере</div>
		<input name="header_address" type="text" class="admin-panel-item__value" value="<?=$content['header_address']?>">
		<div class="admin-panel-item__current-value">Текущее значение: <?=$content['header_address']?></div>
	</div>
	<div class="admin-panel-item">
		<div class="admin-panel-item__name">Телефон</div>
		<input name="phone" type="text" class="admin-panel-item__value" value="<?=$content['phone']?>">
		<div class="admin-panel-item__current-value">Текущее значение: <?=$content['phone']?></div>
	</div>
	<div class="admin-panel-item">
		<div class="admin-panel-item__name">Ссылка на Whatsapp</div>
		<input name="whatsapp_link" type="text" class="admin-panel-item__value" value="<?=$content['whatsapp_link']?>">
		<div class="admin-panel-item__current-value">Текущее значение: <?=$content['whatsapp_link']?></div>
	</div>
	<div class="admin-panel-item">
		<div class="admin-panel-item__name">Ссылка на Viber</div>
		<input name="viber_link" type="text" class="admin-panel-item__value" value="<?=$content['viber_link']?>">
		<div class="admin-panel-item__current-value">Текущее значение: <?=$content['viber_link']?></div>
	</div>
	<div class="admin-panel-item">
		<div class="admin-panel-item__name">Ссылка на Instagram</div>
		<input name="instagram_link" type="text" class="admin-panel-item__value" value="<?=$content['instagram_link']?>">
		<div class="admin-panel-item__current-value">Текущее значение: <?=$content['instagram_link']?></div>
	</div>
	<button type="submit">Сохранить</button>
</form>