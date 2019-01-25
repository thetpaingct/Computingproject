<!DOCTYPE html>
<html>
<head>
  <title>   
    
  </title>
</head>
<body>

<?php
require_once "config.php";
$sql_select_war = "SELECT * FROM bookstore ";
$result = mysql_query($sql_select_war) OR die(mysql_error());
 <!-- while ($result_array = mysql_fetch_array($result)){
 echo "<pre>";
 var_dump($result_array['ID']);
 } -->
?>

<table border="2">
<thead>
  <tr>
    <td>Code Number</td>
   <td>Author</td>
    <td>Title</td>
    <td>Publishing House</td>
    <td>Edition</td>
    <td>Genre</td>
    <td>Edit</td>
  </tr>
</thead>
<tbody>

  <?php
  while ($result_array = mysql_fetch_array($result))
  { 
    ?>

  <tr>
<th><?php echo $result_array["Codenumber"];?></th>
<th><?php echo $result_array["Author"];?></th>
<th><?php echo $result_array["Title"];?></th>
<th><?php echo $result_array["Publishinghouse"];?></th>
<th><?php echo $result_array["Edition"];?></th>
<th><?php echo $result_array["Genre"];?></th>
<th ><a href="book_edit.php?book_id=<?php echo $result_array['ID'];?>">edit</a></th>
   
  </tr>
  <?php 
}
?>

 <button type="submit" class="btn btn-default" name="create" value="create"><a href="book_create.php">go to Create page</a></button>



 <!--  <tr>
    <th>2</th>
    <th>Jacob</th>
    <th>Thornton</th>
    <th>@fat</th>
    <th></th>
    <th></th>
  </tr> -->
 
</tbody>
</table>
</body>
</html>


