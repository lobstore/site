<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

	include "vars.php";
}
?>
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
						<form action="shop.php" method="get">
							<input type="search" name="s_book" placeholder="Search...">
							<button type="submit">Search</button>
						</form>
					</div>
			</div>

		</div>
	</header>
	<div id="body">
	<div id="ContentBody">
        <form method="post" action="">
        	<input type="text" placeholder="Имя" name="iname">
        	<input type="text" placeholder="Фамилия" name="isubname">
        	<input type="text" placeholder="Адрес" name="iadres">
        	<input type="text" placeholder="Телефон" name="iphone">
        	<input type=submit value="Get Abonement" name="abonement">

        </form>
        <form method="post" action="unsetcookie.php">
            <input type=submit value="logout" name"exit">
        </form>
	</div>
	</div>
	<div id="footer">
		12315
	</div>
</body>
</html>

