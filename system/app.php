<?
class App {
	public function includeModule($name) {
		if(file_exists($_SERVER['DOCUMENT_ROOT'].'/template/modules/'.$name.'/logic.php')) {
			require_once($_SERVER['DOCUMENT_ROOT'].'/template/modules/'.$name.'/logic.php');
			if(file_exists($_SERVER['DOCUMENT_ROOT'].'/template/modules/'.$name.'/style.css')) {
				echo '<link rel="stylesheet" href="/template/modules/'.$name.'/style.css">';
			}
			if(file_exists($_SERVER['DOCUMENT_ROOT'].'/template/modules/'.$name.'/script.js')) {
				echo '<script src="/template/modules/'.$name.'/script.js"></script>';
			}
		} else {
			echo '<div style="color:red;display:block;">Модуль "'.$name.'" не найден</div>';
		}
	}
}
?>