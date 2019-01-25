<?php 
$req_book = $_GET['book_id'];
var_dump($req_book);

require_once "config.php";
$sql_select_war = "SELECT * FROM bookstore WHERE ID=$req_book";
$result = mysql_query($sql_select_war) OR die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Book</title>
</head>
<body>
<?php 
while ($result_array = mysql_fetch_array($result)) {
?>
<form action="book_create.php" method="post">
	<input type="hidden" name="id" value="<?php echo $result_array["ID"];?>" />


	<label>Code number</label>
	<input name ="Codenumber" value="<?php echo $result_array["Codenumber"];?>" type="text">
	<br/>
<label>Author</label>
	<input name ="Author" value=" <?php echo $result_array["Author"];?>" type="text">
	<br/>

	<label>Title</label>
	<input name ="Title" value=" <?php echo $result_array["Title"];?>" type="text">
	<br/>

	<label>Publishing House</label>
	<input name ="Publishinghouse" value="<?php echo $result_array["Publishinghouse"];?>" type="text">
	<br/>

	<label>Edition</label>
	<input name ="Edition" value=" <?php echo $result_array["Edition"];?>" type="text">
	<br/>

	<label>Genre</label>
	<input name ="Genre" value=" <?php echo $result_array["Genre"];?>" type="text">
	<br/>

	<?php
}
?>
<button type="submit" name="update">Submit</button>
</form>
</body>
</html>