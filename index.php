<?require($_SERVER["DOCUMENT_ROOT"]."/template/header.php");?>
<?
App::includeModule('main_slider');
App::includeModule('about_project');
App::includeModule('location');
//App::includeModule('design');
App::includeModule('floors');
App::includeModule('layout_2');
// App::includeModule('layout');
App::includeModule('mansard');
App::includeModule('keyler');
//App::includeModule('comfort');
App::includeModule('contact');
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/template/footer.php");?>