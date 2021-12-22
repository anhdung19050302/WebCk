<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/28493d7750.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./style.css"> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
	<title>Home Page</title>
</head>

<body>
	<!--Thực hiện chức năng thay đổi mật khẩu ở đây-->
	<?php
		$error = '';
		$user = '';
		$pass = '';
		$pass_confirm = '';

		if (isset($_POST['user']) && isset($_POST['pass']) &&
			isset($_POST['pass-confirm'])) {

			$email = $_POST['username'];
			$pass = $_POST['pass'];
			$pass_confirm = $_POST['pass-confirm'];

			if (empty($user)) {
				$error = 'Please enter your email';
			}
			else if (empty($pass)) {
				$error = 'Please enter your password';
			}
			else if (strlen($pass) < 6) {
				$error = 'Password must have at least 6 characters';
			}
			else if ($pass != $pass_confirm) {
				$error = 'Password does not match';
			}
			else {
				echo 'Good';
			}
		}
		else {
			//print_r($_POST);
		}
	?>

	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 col-lg-5">
			<h3 class="text-center text-primary mt-5 mb-3">Thay đổi mật khẩu</h3>
			<form novalidate method="post" action="" class="border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light">
				<div class="form-group">
					<label for="username">Tên người dùng</label>
					<input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="username">
					<!--tên username sẽ tự động điền vào từ user của người đăng nhập-->
				</div>
				<div class="form-group">
					<label for="pass">Mật khẩu</label>
					<input  value="<?= $pass?>" name="pass" required class="form-control" type="password" placeholder="Mật khẩu" id="pass">
					<div class="invalid-feedback">Mật khẩu không hợp lệ.</div>
				</div>
				<div class="form-group">
					<label for="pass2">Xác nhận mật khẩu</label>
					<input value="<?= $pass_confirm?>" name="pass-confirm" required class="form-control" type="password" placeholder="Xác nhận mật khẩu" id="pass2">
					<div class="invalid-feedback">Mật khẩu không hợp lệ.</div>
				</div>
				<div class="form-group">
					<?php
						if (!empty($error)) {
							echo "<div class='alert alert-danger'>$error</div>";
						}
					?>
					<button class="btn btn-primary px-5">Đổi mật khẩu</button>
				</div>
			</form>

		</div>
	</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="./main.js"></script> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
</body>

</html>