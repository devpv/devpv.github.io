<?
	require_once 'imit/db.pages.php';
	require_once 'imit/db.menu.php';
	require_once 'imit/db.goods.php';

	$route = $_GET["r"];
	
	$data = [
				"title" => $dbpages[$route]["title"],
			];


	require_once 'view/template.php';
?>