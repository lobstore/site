<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$dbName = "library";
$link = mysqli_connect($hostname,$username,$password) OR DIE("Can't create a connection!");
@mysqli_select_db($link,"$dbName") or die("Can't select a database!");
mysqli_set_charset($link,"utf8");
 $s_id = $_GET['id'];
 $title = $_GET['title'];
 @$title = preg_replace('', '', $title);
 if($title!=''&&!is_null($s_id)){
	$query = "select distinct title, author, description, img, s_id from library.books where s_id = $s_id and title = '$title'";
 }elseif (is_null($s_id)) {
 	$query = "select distinct title, author, description, img, s_id from library.books";
 }else{$query = "select distinct title, author, description, img, s_id from library.books where s_id = $s_id";}

 $result = mysqli_query($link, $query);
 $numberstring = mysqli_num_rows($result);
for ($i=0; $i < $numberstring; $i++) {
	$row[$i] = mysqli_fetch_assoc($result);
}
mysqli_close($link);
?>