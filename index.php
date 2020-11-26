<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
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
				<a href="/?page=shop">Библеотека</a>
			</div>
		</div>
		<div id="HeaderFooter">
		</div>
	</header>
	<div id="ContentBody">
		<div id = "searchLine">
			<form action="" method="POST">
				<input type="search" name="s_book" placeholder="Search...">
				<button type="submit">Search</button>
			</form>
		</div>
				<?php
						$page = $_GET['page'];
						if (!isset($page)) {
							require('templates/main.php');
						}elseif ($page == 'shop') {
							require('templates/shop.php');
						}elseif ($page=='product') {
							require('templates/product.php');
						}
				?>
	</div>
</body>
</html>

