<?
$result = [];
/*
$start_folder = __DIR__.'/img/slider/';
$folders = scandir($start_folder);
foreach ($folders as $folder) {
	if( ($folder == '.') || ($folder == '..') ) continue;
	$slider_folder = scandir($start_folder.$folder.'/');
	foreach ($slider_folder as $slide) {
		if( ($slide == '.') || ($slide == '..') ) continue;
		$result['sliders'][$folder][] = explode($_SERVER['DOCUMENT_ROOT'],$start_folder.$folder.'/'.$slide)[1];
	}
}
*/
$result = [
		'floor_-1' => [
		'name' => '-1 этаж',
		'rooms' => [
			[
				'key' => '-1.1',
				'name' => 'Офис -1.1',
				'square' => '96',
				'rooms' => '14 рабочих мест',
				'bath' => 'Переговорная зона',
				'img' => '/template/modules/layout_2/img/floor/-11.jpg',
				'plane' => '/template/modules/layout_2/img/plane/-11.png'
			],
			[
				'key' => '-1.2',
				'name' => 'Офис -1.2',
				'square' => '61',
				'rooms' => '8 рабочих мест',
				'bath' => 'Переговорная зона',
				'img' => '/template/modules/layout_2/img/floor/-12.jpg',
				'plane' => '/template/modules/layout_2/img/plane/-12.png'
			],
		]
	],

		'floor_1' => [
		'name' => '1 этаж',
		'rooms' => [
			[
				'key' => '1.1',
				'name' => 'Офис 1.1',
				'square' => '81.3',
				'rooms' => '5 рабочих мест',
				'bath' => 'Переговорная зона',
				'img' => '/template/modules/layout_2/img/floor/11.jpg',
				'plane' => '/template/modules/layout_2/img/plane/11.png'
			],
			[
				'key' => '1.2',
				'name' => 'Офис 1.2',
				'square' => '24',
				'rooms' => '7 рабочих мест',
				'bath' => ' ',
				'img' => '/template/modules/layout_2/img/floor/12.jpg',
				'plane' => '/template/modules/layout_2/img/plane/12.png'
			],
			[
				'key' => '1.3',
				'name' => 'Офис 1.3',
				'square' => '6',
				'rooms' => 'Переговорная зона',
				'bath' => ' ',
				'img' => '/template/modules/layout_2/img/floor/13.jpg',
				'plane' => '/template/modules/layout_2/img/plane/13.png'
			],
			[
				'key' => '1.4',
				'name' => 'Офис 1.4',
				'square' => '8',
				'rooms' => 'Рабочее место',
				'bath' => ' ',
				'img' => '/template/modules/layout_2/img/floor/14.jpg',
				'plane' => '/template/modules/layout_2/img/plane/14.png'
			],

		]
	],
	'floor_2' => [
		'name' => '2 этаж',
		'rooms' => [
			[
				'key' => '2.1',
				'name' => 'Апартамент 2.1',
				'square' => '81.3',
				'rooms' => '2 комнаты',
				'bath' => '2 санузла',
				'img' => '/template/modules/layout_2/img/floor/21.jpg',
				'plane' => '/template/modules/layout_2/img/plane/21.png'
			],
			[
				'key' => '2.2',
				'name' => 'Апартамент 2.2',
				'square' => '95',
				'rooms' => '2 комнаты',
				'bath' => '2 санузла',
				'img' => '/template/modules/layout_2/img/floor/22.jpg',
				'plane' => '/template/modules/layout_2/img/plane/22.png'
			],
			[
				'key' => '2.3',
				'name' => 'Апартамент 2.3',
				'square' => '118.1',
				'rooms' => '3 комнаты',
				'bath' => '3 санузла',
				'img' => '/template/modules/layout_2/img/floor/23.jpg',
				'plane' => '/template/modules/layout_2/img/plane/23.png'
			],

		]
	],
	'floor_3' => [
		'name' => '3 этаж',
		'rooms' => [
			[
				'key' => '3.1',
				'name' => 'Апартамент 3.1',
				'square' => '81.3',
				'rooms' => '2 комнаты',
				'bath' => '2 санузла',
				'img' => '/template/modules/layout_2/img/floor/31.jpg',
				'plane' => '/template/modules/layout_2/img/plane/31.png'
			],
			[
				'key' => '3.2',
				'name' => 'Апартамент 3.2',
				'square' => '95',
				'rooms' => '2 комнаты',
				'bath' => '2 санузла',
				'img' => '/template/modules/layout_2/img/floor/32.jpg',
				'plane' => '/template/modules/layout_2/img/plane/32.png'
			],
			[
				'key' => '3.3',
				'name' => 'Апартамент 3.3',
				'square' => '118.1',
				'rooms' => '3 комнаты',
				'bath' => '3 санузла',
				'img' => '/template/modules/layout_2/img/floor/33.jpg',
				'plane' => '/template/modules/layout_2/img/plane/33.png'
			],
		]
	],
	'floor_4' => [
		'name' => '4 этаж',
		'rooms' => [
			[
				'key' => '4.1',
				'name' => 'Апартамент 4.1',
				'square' => '193.7',
				'rooms' => '3 комнаты',
				'bath' => '3 санузла',
				'img' => '/template/modules/layout_2/img/floor/41.jpg',
				'plane' => '/template/modules/layout_2/img/plane/41.png'
			],
			[
				'key' => '4.2',
				'name' => 'Апартамент 4.2',
				'square' => '134.7',
				'rooms' => '3 комнаты',
				'bath' => '3 санузла',
				'img' => '/template/modules/layout_2/img/floor/42.jpg',
				'plane' => '/template/modules/layout_2/img/plane/42.png'
			],
		]
	],
	'mansard' => [
		'name' => 'Мансарда',
		'rooms' => [
			[
				'key' => '5.1',
				'name' => 'Апартамент 5.1',
				'square' => '186.5',
				'rooms' => '3 комнаты',
				'bath' => '3 санузла',
				'img' => '/template/modules/layout_2/img/floor/51.jpg',
				'plane' => '/template/modules/layout_2/img/plane/51.png'
			],
			[
				'key' => '5.2',
				'name' => 'Апартамент 5.2',
				'square' => '132.5',
				'rooms' => '2 комнаты',
				'bath' => '2 санузла',
				'img' => '/template/modules/layout_2/img/floor/52.jpg',
				'plane' => '/template/modules/layout_2/img/plane/52.png'
			],
		]
	]
];
require('template.php');
?>