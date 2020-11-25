<h1>
	Каталог книг
</h1>
<div id="NaviLeft">
				<a href="/?page=shop&id=1">Научная литература</a>
				<a href="/?page=shop&id=2">Художественная литература</a>
				<a href="/?page=shop&id=3">Фантастика</a>
				<a href="/?page=shop&id=4">Фентези</a>
				<a href="/?page=shop&id=5">Научная фантастика</a>
				<a href="/?page=shop&id=6">Гайды</a>
		</div>
<div class = "Units">
<?php
include 'vars.php';
for ($i=0; $i < $numberstring; $i++) {
echo '<div class = "shopUnit">
	<a href="/?page=product&id='.$row[$i]["s_id"].'&title='.$row[$i]["title"].'">
	<img src="'.$row[$i]["img"].'"width="150" height="180">
	<div id = title>Title: '.$row[$i]["title"].'</div>
	<div id = author>Author: '.$row[$i]["author"].'</div>
	<div class = "shopUnitShortDesc">'.$row[$i]["description"].'</div>
	</a>
	</div>';
	}
?>
</div>