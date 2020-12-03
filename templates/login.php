<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	include 'vars.php';
	@setcookie('user', '0', time()+3600,'/');
    // страница была запрошена методом POST, следовательно какие-то данные были переданы
    // соответственно в этом блоке условного оператора - делаем что нужно с нашими данными
    // после чего делаем редирект
    @header('Location: /'); // путь до главной страницы, просто / - корень сайта.
    exit; // завершаем выполнение скрипта, т.к. никакие дополнительные данные нам выводить не нужно.
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
				<a href="shop.php">Библеотека</a>
				<?php
					if($_COOKIE['user']=='0'){
						echo '<a href="lk.php">Личный кабинет</a>';
					}else{
						echo '<a href="registration.php">Войти</a>';
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

		<div class="login-page">
  <div class="form">
    <form class="register-form" action="registration.php" method="post">
      <input type="text" placeholder="name" name="">
      <input type="password" placeholder="password" name="">
      <!-- <input type="text" placeholder="email address" name="email"> -->
      <button>login</button>
    </form>
    <!-- <form class="login-form" method="post" action="<?php //echo $_SERVER['PHP_SELF'];?>">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form> -->

  </div>
</div>

	</div>
</body>
</html>