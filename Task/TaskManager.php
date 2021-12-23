<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/28493d7750.js" crossorigin="anonymous"></script>
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
                <h5 class="card-header font-weight-light">Danh sách công việc</h5>
                <div class="card-body">                   
                    <!---Nội dung task-->                   
                    <div class="container">                                              
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên công việc</th>
                                <th>Người giao</th>
                                <th>thời gian</th>
                                <th>Nhân viên đảm nhận</th>                                
                                <th>tiến độ</th>
                                <th>Thưởng</th>
                                <th></th> 
                                <th></th>                               
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Viết báo cáo</td>
                                <td>Trình bày báo cáo</td>
                                <td>12:00</td>
                                <td>Hihi Haha</td>
                                <td>Hoàn thành</td>
                                <td>
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1">Xuất sắc</label><br>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>                                                                                                                                                      
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary">Xem chi tiết</button>                                                                                                                                                      
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Viết báo cáo</td>
                                <td>Trình bày báo cáo</td>
                                <td>12:00</td>
                                <td>Hihi Haha</td>
                                <td>Hoàn thành</td>
                                <td>
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1">Xuất sắc</label><br>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>                                                                                                                                                      
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary">Xem chi tiết</button>                                                                                                                                                      
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Viết báo cáo</td>
                                <td>Trình bày báo cáo</td>
                                <td>12:00</td>
                                <td>Hihi Haha</td>
                                <td>Hoàn thành</td>
                                <td>
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1">Xuất sắc</label><br>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>                                                                                                                                                      
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary">Xem chi tiết</button>                                                                                                                                                      
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>                   
                    <!--End nọi dung task-->
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