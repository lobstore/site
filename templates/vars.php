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
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber - $_POST['phonenumber'];
$u_password = $_POST['password'];
$link = mysqli_connect($hostname,$username,$password) OR DIE("Can't create a connection!");
@mysqli_select_db($link,"$dbName") or die("Can't select a database!");
mysqli_set_charset($link,"utf8");
 //@$title = preg_replace('+', ' ', $title);

 if($title!=''&&!is_null($s_id)){
	$query = "SELECT distinct book_id, title, author, description, img, s_id from $dbName.books where s_id = $s_id and title = '$title'";
 }elseif (is_null($s_id)&&$s_book==''&&$title=='') {
 	$query = "SELECT distinct title, author, description, img, s_id from $dbName.books";
 }elseif($title==''&&!is_null($s_id)){
 	$query = "SELECT distinct title, author, description, img, s_id from $dbName.books where s_id = $s_id";
 }elseif ($s_book!=''&&$title==''&&$s_id==''){
 	$query = "SELECT distinct title, author, description, img, s_id from $dbName.books where title = '$s_book'";
 }
 if ($u_password!=''&&isset($u_password)) {
 	$query = "INSERT into $dbName.users (login,email,password) values('$name','$email','$u_password')";
 }
 $query1 = "SELECT * from $dbName.sections order by s_id";
 $book_id = $_GLOBAL["book_id"];
$institle = $insauthor = $insdesc = $insimage = ' ';
$inssection = $_POST['section'];
 $institle = $_POST['title'];
$insauthor =  $_POST['author'];
$insdesc = $_POST['description'];
$insimage = '../images/goods/'.$_POST['title'].'.jpg';
 if(isset($_POST['title'])&&isset($_POST['section']))
 {
 	$query = "INSERT into $dbName.books (title,author,description,img,s_id) values ('$institle','$insauthor','$insdesc','$insimage',$inssection)";
 }
	$result1 = mysqli_query($link, $query1);
 	@$numberstring1 = mysqli_num_rows($result1);
 $result = mysqli_query($link, $query);
 @$numberstring = mysqli_num_rows($result);
 for ($i=0; $i < $numberstring1; $i++) {
	$row1[$i] = mysqli_fetch_assoc($result1);
}
for ($i=0; $i < $numberstring; $i++) {
	$row[$i] = mysqli_fetch_assoc($result);
}
$ireader_id = $_COOKIE['user'];
$iname = $_POST['iname'];
$isubname =$_POST['isubname'];
$iadres =$_POST['iadres'];
$iphone = $_POST['iphone'];
if(isset($_POST['abonement'])){
	$query = "call addAbonement($ireader_id,'$iname','$iadres','$isubname','$iphone')";
	mysqli_query($link, $query);
	unset($_POST['abonement']);
}
$book_id = $row[0]['book_id'];
if(isset($_POST['add'])){
	$query = "INSERT into $dbName.issuing (book_id,reader_id,date_taken,date_return) values($book_id, $ireader_id, '2020-12-15', '2021-01-15')";
	mysqli_query($link, $query);
	unset($_POST['add']);
}
mysqli_close($link);
?>
