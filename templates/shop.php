<h1>
	Каталог книг
</h1>
<div id="NaviLeft">
				<a href="index.php?page=shop&id=1">Научная литература</a>
				<a href="index.php?page=shop&id=2">Художественная литература</a>
				<a href="index.php?page=shop&id=3">Фантастика</a>
				<a href="index.php?page=shop&id=4">Фентези</a>
				<a href="index.php?page=shop&id=5">Научная фантастика</a>
				<a href="index.php?page=shop&id=6">Гайды</a>
		</div>
<div class = "Units">
<?php
$s_id = $_GET['id'];
$query = "select distinct title, author, description, img, s_id from library.books where s_id = $s_id";
$result = mysqli_query($link, $query);
$numberstring = mysqli_num_rows($result);

if ($_GET['id'] == 1) {
while ($row = mysqli_fetch_assoc($result)) {
echo '<div class = "shopUnit">
	<a href="index.php?page=product&id=1">
	<img src="'.$row["img"].'"width="150" height="180">
	<div id = title>Title: '.$row["title"].'</div>
	<div id = author>Author: '.$row["author"].'</div>
	<div class = "shopUnitShortDesc">'.$row["description"].'</div>
	</a>
</div>';
	}
}elseif ($_GET['id'] == 2) {
while ($row = mysqli_fetch_assoc($result)) {
echo '<div class = "shopUnit">
	<a href="index.php?page=product&id=1">
	<img src="'.$row["img"].'"width="150" height="180">
	<div id = title>Title: '.$row["title"].'</div>
	<div id = author>Author: '.$row["author"].'</div>
	<div class = "shopUnitShortDesc">'.$row["description"].'</div>
	</a>
</div>';
	}
}elseif ($_GET['id'] == 3) {
while ($row = mysqli_fetch_assoc($result)) {
echo '<div class = "shopUnit">
	<a href="index.php?page=product&id=1">
	<img src="'.$row["img"].'"width="150" height="180">
	<div id = title>Title: '.$row["title"].'</div>
	<div id = author>Author: '.$row["author"].'</div>
	<div class = "shopUnitShortDesc">'.$row["description"].'</div>
	</a>
</div>';
	}
}elseif ($_GET['id'] == 4) {
while ($row = mysqli_fetch_assoc($result)) {
echo '<div class = "shopUnit">
	<a href="index.php?page=product&id=1">
	<img src="'.$row["img"].'"width="150" height="180">
	<div id = title>Title: '.$row["title"].'</div>
	<div id = author>Author: '.$row["author"].'</div>
	<div class = "shopUnitShortDesc">'.$row["description"].'</div>
	</a>
</div>';
	}
}elseif ($_GET['id'] == 5) {
while ($row = mysqli_fetch_assoc($result)) {
echo '<div class = "shopUnit">
	<a href="index.php?page=product&id=1">
	<img src="'.$row["img"].'"width="150" height="180">
	<div id = title>Title: '.$row["title"].'</div>
	<div id = author>Author: '.$row["author"].'</div>
	<div class = "shopUnitShortDesc">'.$row["description"].'</div>
	</a>
</div>';
	}
}
?>
</div>