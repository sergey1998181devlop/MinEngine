<?
$result = [];
foreach (scandir(__DIR__.'/img/slider/') as $img) {
	if( ($img == '.') || ($img == '..') ) continue;
	$result['slider'][] = str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__).'/img/slider/'.$img;
}
require('template.php');
?>