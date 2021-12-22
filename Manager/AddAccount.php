<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css"> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
	<title>Home Page</title>
</head>

<body>
	<!--Thực hiện chức năng quản lý tài khoản ở đây-->
	<?php
		require_once('../includes/nav.php')
	?>

    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <?php
            require_once('../includes/MainMenu.php')
        ?>
        <!-- MAIN -->
        <!--
            body web in Home page
        -->
        <div class="col p-4">            
            <div class="card">
                <h5 class="card-header font-weight-light">Thêm nhân viên</h5>
                <div class="card-body">
                    <!--Thêm nhân viên bắt đầu từ đây-->
                     <!-- The first line takes photos and employee information -->                    
                     <div class="container mt-3">                        
                        <!--avatar-->
                        <div class="avatar-container media border p-3">
                            <!--show avatar-->
                            <label for="imageFile">
                                <img src="../images/avatar.png" id="image" alt="avatar" class="mr-3 mt-3 rounded-circle" style="width:150px;">
                            </label>
                            <input type="file" name="input-img" id="imageFile" style="display: none;" onchange="chooseFile(this)" accept="image/gif, image/jpeg, image/png"> 
                            
                           
                        <div>
                            <!--proflie 1-->
                        </div>                        
                            <div class="container">                            
                                <form action="/action_page.php">
                                    <div class="form-group">                                    
                                        <label for="username">Tên nhân viên</label>
                                        <input value="" name="username" id="username" type="text" class="form-control" placeholder="Tên Nhân viên">
                                                                                                        
                                        <label for="LoaiNV">Chức vụ</label>
                                        <input value="" type="text" class="form-control" id="LoaiNV" placeholder="Chức vụ" name="LoaiNV">

                                        <label for="username">Tên người dùng</label>
                                        <input value="" name="username" id="username" type="text" class="form-control" placeholder="username">
                                        
                                        <label for="pass">Mật khẩu mặc đinh</label>
                                        <input value="12345678" name="pass-confirm" required class="form-control" type="password" placeholder="Xác nhận mật khẩu" id="pass2">
                                       
                                        <label for="TenPB">Tên phòng ban</label>
                                        <input value="" type="text" class="form-control" id="TebPB" placeholder="Quản lý nhân viên" name="TenPB">
                                                       
                                        <label for="soPhong">Số Phòng: </label>                                                                
                                        <select class="form-control" id="soPhong" name="soPhong">
                                            <option>PH208</option>
                                            <option>Ph304</option>
                                            <option>Ph305</option>
                                            <option>Ph306</option>
                                        </select>
                                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                    <button type="reset" class="btn btn-outline-primary pl-4 pr-4">Reset</button>
                                </form>
                            </div>
                    </div>                
                </div>
            </div>
        </div><!-- Main Col END -->
    </div><!-- body-row END -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="../main.js"></script> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
</body>
</html>