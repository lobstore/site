<?php if ($_SERVER["REQUEST_METHOD"]=="POST") {
	include 'vars.php';

} ?>
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
				<?php
					if($_COOKIE['user']==1){
						echo '<a href="lk.php">Личный кабинет</a>';
					}else{
						echo '<a href="registration.php">Войти</a>';
					}
				 ?>
			</div>
		</div>
		<div id="HeaderFooter">
					<div id="headMenu">
				<div id="Menu">
				<a href="/">Главная</a>
				<a href="#">О нас</a>
				<a href="/templates/shop.php">Библиотека</a>
				</div>
					<div id = "searchLine">
						<form action="/templates/shop.php" method="get">
							<input type="search" name="s_book" placeholder="Search...">
							<button type="submit">Search</button>
						</form>
				</div>
			</div>

		</div>
	</header>
	<div id="body">
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
$_GLOBAL['book_id'] = $row[0]['book_id'];
echo '<div id="openedProduct">
			<div id = "openedProduct-img">
				<img src="'.$row[0]["img"].'"width="500" height="700">
			</div>
			<div id = "openedProduct-content">
				<h1 id = "openedProduct-name">
					Title: '.$row[0]["title"].'
				</h1>
				<div id = openedProduct-desc>
					'.$row[0]["description"].'
				</div>
				<div>
					<form class="addbuttonform" method="post" action="">
						<input type="submit" name="add" value="take it">
					</form>
				</div>
			</div>
		</div>';
	?>
</div>
	</div>
</div>
	<div id="footer">
		12315
	</div>
</body>
</html>







