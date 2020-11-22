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
				<a href="index.php?page=shop">Магазин</a>
			</div>
		</div>
		<div id="HeaderFooter">
		</div>
	</header>
	<div id="ContentBody">
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

