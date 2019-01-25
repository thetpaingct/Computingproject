<?php
require_once 'config.php';
// echo "<pre>";
// var_dump($_POST);
// if($_POST['create']=="create")
if(isset ($_POST['creat']))
{
$code_number = $_POST['code_number'];
$author = $_POST['author_name'];
$title = $_POST['title_name'];
$publishinghouse = $_POST['publishing_house'];
$edition = $_POST['edition'];
$genre = $_POST['genre'];
$sql_select_war = " INSERT INTO bookstore ( Codenumber, Author, Title, Publishinghouse, Edition, Genre) VALUES ('$code_number','$author','$title','$publishinghouse','$edition','$genre')";

 $result = mysql_query($sql_select_war) OR die(mysql_error()); 
// echo "<pre>";
// var_dump($code_number,$author,$title,$publishinghouse,$edition,$genre);
// create($code_number,$author,$title,$publishinghouse,$edition,$genre);


}

 if( isset($_POST['update'])){

$id = $_POST['id'];
$codenumber = $_POST['Codenumber'];
$author = $_POST['Author'];
$title = $_POST['Title'];
$publishinghouse = $_POST['Publishinghouse'];
$edition = $_POST['Edition'];
$genre = $_POST['Genre'];


// echo "<pre>";
//  var_dump($author);



// require_once "config.php";
$sql_select_war = " UPDATE bookstore SET Codenumber = '$codenumber',
Author = '$author',
Title = '$title',
Edition = '$edition',
Genre = '$genre'
WHERE ID='$id'";

 $result = mysql_query($sql_select_war) OR die(mysql_error());}


// function create($code_number,$author,$title,$publishinghouse,$edition,$genre){

// var_dump($code_number,$author,$title,$publishinghouse,$edition,$genre); 
// die();

// 	$sql_select_war = " INSERT INTO bookstore ( Codenumber, Author, Title, Publishinghouse, Edition, Genre) VALUES ('$code_number','$author','$title','$publishinghouse','$edition','$genre')";

//  $result = mysql_query($sql_select_war) OR die(mysql_error());

// }
?>