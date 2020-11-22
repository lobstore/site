<h1>
	Katalog tovarow
</h1>
<div id="NaviLeft">
				<a href="index.php?page=shop&id=1">Зимние куртки</a>
				<a href="index.php?page=shop&id=2">Рубашки</a>
				<a href="index.php?page=shop&id=3">Джинсы</a>
		</div>

<?php
if ($_GET['id'] == 1) {
for ($i=0; $i < 5 ; $i++) {
echo '<div class = "shopUnit">
	<img src="#">
	<div>Title</div>
	<div class = "shopUnitShortDesc">
		asdasdasdasdasdaadsdadas sadasd
	</div>
	<div class = "shopUnitPrice">
		Price
	</div>
	<a href="#">
		FullDesc
	</a>
</div>';
	}
}elseif ($_GET['id'] == 2) {
	for ($i=0; $i < 5 ; $i++) {
	echo '<div class = "shopUnit">
	<img src="#">
	<div>Title</div>
	<div class = "shopUnitShortDesc">
		asdasdasdasdasdaadsdadas sadasd
	</div>
	<div class = "shopUnitPrice">
		Price
	</div>
	<a href="#">
		FullwwwwDesc
	</a>
	</div>';
		}
	}elseif ($_GET['id'] == 3) {
		for ($i=0; $i < 5 ; $i++) {
	echo '<div class = "shopUnit">
	<img src="#">
	<div>Title</div>
	<div class = "shopUnitShortDesc">
		asdasdasdasdasdaadsdadas sadasd
	</div>
	<div class = "shopUnitPrice">
		Price
	</div>
	<a href="#">
		FulasdDesc
	</a>
	</div>';
	}
	}
?>