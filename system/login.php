<form class="admin-login" method="post">
	<?if($error_message):?><div class="admin-login__error-message"><?=$error_message?></div><?endif?>
	<div class="admin-login__field">
		<label>Логин</label>
		<input required name="username" value="<?=$_POST['username']?>" type="text">
	</div>
	<div class="admin-login__field">
		<label>Пароль</label>
		<input required name="password" type="password">
	</div>
	<button class="admin-login__btn">Войти</button>
</form>
<style>
	body {
		background-color: rgba(35, 31, 32, 0.1);
		font-family: sans-serif;
	}
	.admin-login {
		display: block;
		width: 200px;
		margin: 100px auto 0;
		border: 1px solid #546e7a;
		border-radius: 6px;
		padding: 16px 26px;
	}
	.admin-login__field {
		display: flex;
		-webkit-flex-direction: column;
		-moz-flex-direction: column;
		-ms-flex-direction: column;
		-o-flex-direction: column;
		flex-direction: column;
		justify-content: space-between;
		width: 100%;
		margin-bottom: 6px;
	}
	.admin-login__field label {
		font-size: 14px;
	}
	.admin-login__field input {
		padding: 2px 2px;
		font-size: 16px;
	}
	.admin-login__btn {
		width: 100%;
		background-color: #90a4ae;
		border: none;
	    color: #000;
	    height: 32px;
	}
</style>