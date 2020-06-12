<?
$result = [];
foreach (scandir(__DIR__.'/img/') as $img) {
	if( ($img == '.') || ($img == '..') ) continue;
	$result['slider'][] = [
		'name' => ($img == '5.png')?'Мансарда':str_replace('.png', '', $img).' этаж',
		'img' => str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__).'/img/'.$img
	];
}
require('template.php');
?>