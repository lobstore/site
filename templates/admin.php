<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	@setcookie('admin', 'access', time()+3600,'admin.php');
//ini_set('display_errors','On');
//error_reporting(E_ALL | E_STRICT);
if(isset($_FILES) && $_FILES['inputFile']['error'] == 0){
    $name = $_POST['title'].$_FILES['inputFile']['type'];

if(move_uploaded_file($_FILES['inputFile']['tmp_name'], __DIR__.'/../images/goods/'.$_FILES["inputFile"]["name"])) {
    rename (__DIR__.'/../images/goods/'.$_FILES["inputFile"]["name"], __DIR__.'/../images/goods/'.$_POST['title'].'.jpg');
    echo "Uploaded";
}else{
echo 'No File Uploaded';}
														}
										}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/main.css">
	<title>Админка</title>
</head>
<body>
	<div >
		<?
		include 'vars.php'; print_r($numberstring1);?>
		<form  id="admit" action="admin.php" method="post" enctype="multipart/form-data">
			<!--<input type="file" name="inputFile"> -->
			<textarea rows="10" cols="45" name="description" placeholder="description here"></textarea>
			<input type="text" name="title" placeholder="title here">
			<input type="text" name="author" placeholder="author here">
			<select name="section">
				<option value="disabled">выберите жанр</option>

			<?
			for ($i=0; $i < $numberstring1; $i++) {
				echo '<option value="'.$row1[$i]['s_id'].'">'.$row1[$i]['name'].'</option>';
				}
			?>
			</select>
			<input type="file" name="inputFile">
			<input type="submit" name="addbook">
            </form>
	</div>
	<?echo __DIR__;
$adminlogin = "<div class='table'>
			<div class='tale-wrapper'>
            <div class='table-title'>Войти в панель администратора</div>
            <div class='table-content'>
                        <form method='post' id='login-form' class='login-form action=admin.php'>
                                      <input type='text' placeholder='Логин' class='input'
                                        name='alogin' required><br>
                                     <input type='password' placeholder='Пароль' class='input'
                                       name='apassword' required><br>
                                    <input type='submit' value='Войти' class='button'>
                      	</form>
             </div>
</div>
</div>";
?>
	<?//echo $adminlogin;?>
	<?
	if ($_COOKIE['admin']=='access') {
		echo '<form method="post" action="unsetcookie.php">
            <input type=submit value="logout" name"exit">
        </form>';
	}
	?>
</body>
</html>
