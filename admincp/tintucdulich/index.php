<?php
require_once ('../../db/dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý Tin Tức Du Lịch</title>
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
	    <a class="nav-link active" href="../tintucdulich/index.php">Quản Lý Tour Tin tức</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../tintuckhachsan/index.php">Quản Lý Tin tức Khách Sạn</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link " href="../DangNhap.php">Quay Lại Đăng Nhập</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản Lý Tin Tức Du Lịch</h2>
			</div>
			<div class="panel-body">
				<a href="add.php">
					<button class="btn btn-success" style="margin-bottom: 15px;">Thêm Danh Mục</button>
				</a>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>
							<th width="90px">Tên tour du lịch</th>
							<th width="100px">Nội dung</th>
							<th>Hình ảnh</th>
							<th>Ngày cập nhật</th>
							<th width="50px"></th>
							<th width="50px"></th>
						</tr>
					</thead>
					<tbody>
<?php
//Lay danh sach danh muc tu database
$sql= "SELECT * FROM tintucdulich";
$tintucdulichList = executeResult($sql);

$index = 1;
foreach ($tintucdulichList as $item) {
		echo '<tr>
				<td>'.($index++).'</td>
				<td>'.$item['title'].'</td>
				<td>'.$item['content'].'</td>
				';
		echo "<td><img src='".$item['thumbnail']."' style='width:400px;height:200px'></td>";
		echo'<td>'.$item['updated_at'].'</td>
			<td>
				<a href="add.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
			</td>
			<td>
				<button class="btn btn-danger" onclick="deleteTintucdulich('.$item['id'].')">Xoá</button>
			</td>
		</tr>';
}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function deleteTintucdulich(id) {
			var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
			if(!option) {
				return;
			}

			console.log(id)
			//ajax - lenh post
			$.post('ajax.php', {
				'id': id,
				'action': 'delete'
			}, function(data) {
				location.reload()
			})
		}
	</script>
</body>
</html>