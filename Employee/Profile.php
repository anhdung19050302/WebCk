<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css"> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
	<link rel="stylesheet" href="./test.css"> <!--change link css-->
	<script src="https://kit.fontawesome.com/28493d7750.js" crossorigin="anonymous"></script>
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
                                <form action="../ResetPassword.php">
                                    <div class="form-group">                                    
                                        <label for="username">Tên nhân viên</label>
                                        <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                     
                                        <label for="username">Ngày sinh:</label>
                                        <input readonly value="11/03/2001" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                        
                                        <label for="LoaiNV">Loại nhân viên (chức vụ)</label>
                                        <input readonly value="" type="text" class="form-control" id="LoaiNV" placeholder="Giám đốc" name="LoaiNV">

                                        <label for="username">Tên người dùng:</label>
                                        <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="username">
                                        
                                        <label for="pass">Mật khẩu:</label>
                                        <input readonly value="********" name="pass-confirm" required class="form-control" type="password" placeholder="Xác nhận mật khẩu" id="pass2">
                                        <!--

                                         <div>
                                            <button data-toggle="collapse" data-target="#demo">Collapsible</button>

                                            <div id="demo" class="collapse">
                                            Lorem ipsum dolor text....
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            Sony
                                            </button>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Tablet</a>
                                            <a class="dropdown-item" href="#">Smartphone</a>
                                            </div>
                                        </div>
                                        -->
                                       

                                        <label for="TenPB">Tên phòng ban</label>
                                        <input readonly value="" type="text" class="form-control" id="TebPB" placeholder="Quản lý nhân viên" name="TenPB">

                                    </div>
                                    <button type="submit" class="btn btn-primary">Reset mật khẩu</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>                                    
        </div><!-- Main Col END -->
        <div>
                <button class="btn btn-primary">
                    <span class="spinner-border spinner-border-sm"></span>
                    </button>

                    <button class="btn btn-primary">
                    <span class="spinner-border spinner-border-sm"></span>
                    Loading..
                    </button>

                    <button class="btn btn-primary" disabled>
                    <span class="spinner-border spinner-border-sm"></span>
                    Loading..
                    </button>

                    <button class="btn btn-primary" disabled>
                    <span class="spinner-grow spinner-grow-sm"></span>
                    Loading..
                    </button>

            </div>
            
            <div>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
            <div>
                <button data-toggle="collapse" data-target="#demo">Collapsible</button>

                <div id="demo" class="collapse">
                Lorem ipsum dolor text....
                </div>
            </div>
            <div>
                <div class="toast">
                    <div class="toast-header">
                        Toast Header
                    </div>
                    <div class="toast-body">
                        Some text inside the toast body
                    </div>
                </div>
            </div>

                        
            <div class="container">
                <h2>Modal Example</h2>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Open modal
                </button>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            Modal body..
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <h1>My First JavaScript</h1>
                <button type="button"
                onclick="document.getElementById('demo1').innerHTML = Date()">
                Click me to display Date and Time.</button>
                <p id="demo1"></p>
            </div>
    </div><!-- body-row END -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="../main.js"></script> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
</body>
</html>