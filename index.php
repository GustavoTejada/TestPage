<!DOCTYPE html>
<html ng-app="MyPage">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Home</title>
	<!-- links -->
	<?php require  'moduls/links.php'?>
</head>
<body>
	<header>
		<!-- NavBar -->
		<?php require 'moduls/navbar.php'?>
	</header>

	<div class="container">
		
		<div ui-view></div>
		
	</div>


	<!-- Angular JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>

	<!-- Angular Modules -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.20/angular-ui-router.min.js"></script>

	<!-- Angular i18n -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-i18n/1.7.5/angular-locale_es-es.js"></script>

	<!-- Angular App -->
	<script src="app/app.js"></script>

	<!-- Angular Controllers -->
	<script src="app/controllers/newsController.js"></script>

	<!-- Angular Services -->
	<script src="app/services/newsService.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>