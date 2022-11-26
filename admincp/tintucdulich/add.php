<?php
require_once ('../../db/dbhelper.php');

$id = $title = $content = $thumbnail = '';
if (!empty($_POST)) {
	if (isset($_POST['title'])) {
		$title= $_POST['title'];
	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}
	if (isset($_POST['content'])) {
		$content= $_POST['content'];
	}
	if (isset($_POST['thumbnail'])) {
		$thumbnail= $_POST['thumbnail'];
	}

	if (!empty($title)) {
		//Luu vao database
		$created_at = $updated_at = date('Y-m-d H:s:i');
		if ($id == '') {
			$sql = 'insert into tintucdulich(title, content, thumbnail,created_at,updated_at) value("'.$title.'","'.$content.'","'.$thumbnail.'","'.$created_at.'","'.$updated_at.'")';
		} else {
			$sql = 'update tintucdulich set title = "'.$title.'", content = "'.$content.'", thumbnail = "'.$thumbnail.'", created_at = "'.$created_at.'", updated_at = "'.$updated_at.'" where id = '.$id;
		}

		execute($sql);

		header('Location: index.php');
		die();
	}
}

if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from tintucdulich where id = '.$id;
	$tintucdulich = executeSingleResult($sql);
	if ($tintucdulich != null) {
		$title = $tintucdulich['title'];
		$content = $tintucdulich['content'];
		$thumbnail = $tintucdulich['thumbnail'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm/Sửa Danh Mục Tin tức Tour Du Lịch</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link" href="../khachsan/index.php">Quản Lý Khách Sạn</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../dulich/index.php">Quản Lý Tour Du Lịch</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link active" href="../tintucdulich/index.php">Quản Lý Tin tức Tour Du Lịch</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link " href="../DangNhap.php">Quay Lại Đăng Nhập</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm/Sửa Danh Mục Tin Tức</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="title">Tên tour du lịch:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" class="form-control" id="title" name="title" value="<?=$title?>">
					</div>
					
					<div class="form-group">
					  <label for="content">Nội dung:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <textarea class="form-control" id="content" rows="5" name="content" value="<?=$content?>"></textarea>
					</div>
					
					<div class="form-group">
					  <label for="thumbnail">Hinh Ảnh:</label>
					  <input type="number" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" placeholder="Nhập địa chỉ hình ảnh trong file của bạn" class="form-control" id="thumbnail" name="thumbnail" value="<?=$thumbnail?>">
					  <br>
					  Ví dụ:Tên file/Tên hình ảnh.(jpg,jpge,png)
					</div>
					<br>
					<button class="btn btn-success" >Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>