<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../styles/main.css">
	<title>Заголовок</title>
</head>
<body>
	<header>
		<div id="headerInside">
			<div id="logo"></div>
			<div id="CompanyName">Заголовок</div>
			<div id="navWrap">
				<a href="/">Главная</a>
				<a href="#">О нас</a>
				<a href="/templates/shop.php">Библеотека</a>
				<?php
					if($_COOKIE['user']=='llo'){
						echo '<a href="/templates/lk.php">Личный кабинет</a>';
					}else{
						echo '<a href="/templates/registration.php">Войти</a>';
					}
				 ?>

			</div>
		</div>
		<div id="HeaderFooter">
			<div id = "searchLine">
			<form action="" method="get">
				<input type="search" name="s_book" placeholder="Search...">
				<button type="submit">Search</button>
			</form>
		</div>
		</div>
	</header>
	<div id="ContentBody">


	</div>
</body>
</html>

