<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css">
	<script type="text/javascript" src="template/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container" >	
		<div class="col-md-2 control-label	">	</div>
		<div class="col-md-10" >
<form class="form-horizontal " role="form" action="book.php" method="post" >
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Code Number</label>
    <div class="col-md-10">
      <input type="" class="form-control" id="codenumber" placeholder="Code number" name="code_number">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Author</label>
    <div class="col-md-10">
      <input type="" class="form-control" id="author" placeholder="Author" name="author_name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
      <input type="" class="form-control" id="title" placeholder="Title" name="title_name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Publishing House</label>
    <div class="col-md-10">
      <input type="" class="form-control" id="inputEmail3" placeholder="Publishinghouse" name="publishing_house">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Edition</label>
    <div class="col-md-10">
      <input type="" class="form-control" id="edition" placeholder="Edition" name="edition">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-2 control-label">Genre</label>
    <div class="col-md-10">
      <input type="text" class="form-control" id="genre" placeholder="Genre" name="genre">
    </div>
  </div>
  <!-- <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div> -->
  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      <button type="submit" class="btn btn-default" name="create" value="create">Create</button>
    </div>
  </div>

</form>
</div>
</div>
</body>
</html>