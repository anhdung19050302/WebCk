<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css"> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
	<link rel="stylesheet" href="./test.css"> <!--change link css-->
    <title>Profile Enployee</title>
</head>

<body>
	<!--Thực hiện chức năng quản lý tài khoản ở đây-->
	
    <?php
		require_once('../includes/nav.php');
	?>
    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <?php
            require_once('../includes/MainMenu.php');
        ?>
        <!-- MAIN -->
        <!--
            body web
        -->
        <div class="col p-4">
            <h1 class="display-4">Thông tin nhân viên @tên nhân viên</h1>
            <div class="card">
                <h5 class="card-header font-weight-light">Hồ sơ</h5>
                <div class="card-body">
                    <!-- The first line takes photos and employee information -->
                    <div class="container">
                        <p>Ảnh đại diện</p>
                        <!--avatar-->
                        <div class="avatar-container">
                            <!--show avatar-->
                            <label for="imageFile">
                                <img src="../images/avatar.png" id="image" alt="avatar">
                            </label>
                            <!--<img src="" id="image" class="avatar uploaded" src="/imgae/avatar.png" alt="avatar">-->
                            <input type="file" name="input-img" id="imageFile" style="display: none;" onchange="chooseFile(this)" accept="image/gif, image/jpeg, image/png"> 
                            <!--
                                <button>Browse File</button>
                                <input type="file" hidden>
                            -->
                        </div>
                        <div>
                            <!--proflie 1-->
                        </div>                        
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div><!-- Main Col END -->
    </div><!-- body-row END -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="../main.js"></script> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
</body>
</html>