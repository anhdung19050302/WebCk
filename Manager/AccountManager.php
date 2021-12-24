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
                <h5 class="card-header font-weight-light">Quản lý tài khoản</h5>
                <div class="card-body">                    
                    <!--Nội dung danh sách nhân viên bắt đầu từ đây-->
                    <div class="container">
                        <h3>Danh sách nhân viên</h3>                        
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên nhân viên</th>
                                <th>tên đăng nhập</th>
                                <th>Số điện thoại</th>
                                <th>Xem chi tiết</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>0123456789</td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo">Xem thông tin</button>                                                                                                                                                      
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>0123456789</td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo">Xem thông tin</button>                                                                                                                                                      
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>0123456789</td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo">Xem thông tin</button>                                                                                                                                                      
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--kết thúc danh sách-->
                    <div>
                        <!--thanh chuyển trang nếu có nhiều nhân viên-->
                        <div>
                            <div>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div>      
                            <!--Vị trí mà hiện ra thông tin nhân viên-->                          
                            <div id="demo" class="collapse">
                            <div class="col p-4">           
                                <div class="card">
                                    <h5 class="card-header font-weight-light">Thông tin nhân viên</h5>
                                    <div class="card-body">
                                        <!-- The first line takes photos and employee information -->                    
                                        <div class="container mt-3">                        
                                            <!--avatar-->
                                            <div class="avatar-container media border p-3">
                                                <!--show avatar-->                                               
                                                <img src="../images/avatar.png" id="image" alt="avatar" class="mr-3 mt-3 rounded-circle" style="width:150px;">                                                
                                            <div>
                                                <!--proflie 1-->
                                            </div>                        
                                            <div class="container">                            
                                                <form action="../Manager/AccountManager.php">
                                                    <div class="form-group">                                    
                                                        <label for="username">Tên nhân viên</label>
                                                        <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                                                                                        
                                                        <label for="LoaiNV">Loại nhân viên</label>
                                                        <input readonly value="" type="text" class="form-control" id="LoaiNV" placeholder="Giám đốc" name="LoaiNV">

                                                        <label for="username">Tên người dùng</label>
                                                        <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="username">
                                                        
                                                        <label for="pass">Mật khẩu</label>
                                                        <input readonly value="********" name="pass-confirm" required class="form-control" type="password" placeholder="Xác nhận mật khẩu" id="pass2">
        
                                                        <label for="TenPB">Tên phòng ban</label>
                                                        <input readonly value="" type="text" class="form-control" id="TebPB" placeholder="Quản lý nhân viên" name="TenPB">

                                                    </div>                                                        
                                                    <button type="submit" class="btn btn-primary">Reset mật khẩu</button>
                                                    <div>
                                                        <br>
                                                    </div>
                                                    <!--reset mạt khẩu-->
                                                    <div class="container">                                                   
                                                        <!-- Button to Open the Modal -->
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Reset mật khẩu</button>
                                                        <!-- The Modal -->
                                                        <div class="modal" id="myModal">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                
                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Reset mật khẩu</h4>
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    
                                                                    <!-- Modal body -->
                                                                    <div class="modal-body">Bạn có chắc chắn reset lại mật khẩu</div>
                                                                    
                                                                    <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End reset mat khau-->
                                                </form>
                                            </div>                                               
                                        </div>             
                                    </div>
                                </div>                                           
                            </div>
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