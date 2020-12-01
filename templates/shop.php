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
				<a href="../">Главная</a>
				<a href="#">О нас</a>
				<a href="shop.php">Библеотека</a>
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
				<div id="NaviLeft">
				<a href="shop.php?id=1">Научная литература</a>
				<a href="shop.php?id=2">Художественная литература</a>
				<a href="shop.php?id=3">Фантастика</a>
				<a href="shop.php?id=4">Фентези</a>
				<a href="shop.php?id=5">Научная фантастика</a>
				<a href="shop.php?id=6">Гайды</a>
		</div>
<div class = "Units">
<?php
include 'vars.php';
for ($i=0; $i < $numberstring; $i++) {
echo '<div class = "shopUnit">
	<a href="product.php?&id='.$row[$i]["s_id"].'&title='.$row[$i]["title"].'">
	<img src="'.$row[$i]["img"].'"width="150" height="180">
	<div id = title>Title: '.$row[$i]["title"].'</div>
	<div id = author>Author: '.$row[$i]["author"].'</div>
	<div class = "shopUnitShortDesc">'.$row[$i]["description"].'</div>
	</a>
	</div>';
	}
?>
</div>
	</div>
</body>
</html>




