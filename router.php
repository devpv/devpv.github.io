<?
	switch ($route) {
		case NULL:
			require_once 'view/pages/main.php';
			break;
		case "about":
			require_once 'view/pages/about.php';
			break;
		case "catalog":
			require_once 'view/pages/catalog.php';
			break;
		case "product":
			require_once 'view/pages/product.php';
			break;	
		default:
			require_once 'view/pages/404.php';
			break;
	}


?>