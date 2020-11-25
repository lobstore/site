<div id="NaviLeft">
				<a href="/?page=shop&id=1">Научная литература</a>
				<a href="/?page=shop&id=2">Художественная литература</a>
				<a href="/?page=shop&id=3">Фантастика</a>
				<a href="/?page=shop&id=4">Фентези</a>
				<a href="/?page=shop&id=5">Научная фантастика</a>
				<a href="/?page=shop&id=6">Гайды</a>
		</div>
<?php
include 'vars.php';
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
		</div>';
	?>
</div>
