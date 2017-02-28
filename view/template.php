<!DOCTYPE html>
<html>
<head>
	<title>
		<?=$data["title"]?>
	</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="../static/css/style.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/static/css/style.css" />
	<script type="text/javascript" src="/static/js/script.js"></script>
</head>
<body>
		<div class="container">
				<header>
					<nav class="navbar navbar-inverse">
					  <?require_once 'view/partials/header.php';?>
					</nav>		
				</header>
		
				<div class="container">
					<div class="col-sm-12 text-left">
						<?require_once 'router.php';?>
					</div>
				</div>
			
				<footer class="container text-center">
					<?require_once 'view/partials/footer.php';?>
				</footer>
		</div>
	
</body>
</html>
