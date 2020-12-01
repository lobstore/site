<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$dbName = "library";
if(!isset($_GET['s_book'])){
 $s_book = '';
}else{$s_book = strip_tags(trim($_GET['s_book']));}
if(!isset($_GET['title'])){
 $title ='';
}else{$title = $_GET['title'];}
$s_id=$_GET['id'];

$link = mysqli_connect($hostname,$username,$password) OR DIE("Can't create a connection!");
@mysqli_select_db($link,"$dbName") or die("Can't select a database!");
mysqli_set_charset($link,"utf8");

 @$title = preg_replace('', '', $title);
 if($title!=''&&!is_null($s_id)){
	$query = "select distinct title, author, description, img, s_id from library.books where s_id = $s_id and title = '$title'";
 }elseif (is_null($s_id)&&$s_book==''&&$title=='') {
 	$query = "select distinct title, author, description, img, s_id from library.books";
 }elseif($title==''&&!is_null($s_id)){
 	$query = "select distinct title, author, description, img, s_id from library.books where s_id = $s_id";
 }elseif ($s_book!=''&&$title==''&&$s_id==''){
 	$query = "select distinct title, author, description, img, s_id from library.books where title = '$s_book'";
 }

 $result = mysqli_query($link, $query);
 $numberstring = mysqli_num_rows($result);
for ($i=0; $i < $numberstring; $i++) {
	$row[$i] = mysqli_fetch_assoc($result);
}
mysqli_close($link);
?>