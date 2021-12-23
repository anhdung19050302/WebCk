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
        <div class="col-md-12 col-sm-12 p-4">
            <div class="card">
                <h5 class="card-header font-weight-light">Ngày nghỉ phép</h5>
                <div class="card-body">
                    <div class="container">
                        <table class="table table-sm text-center">
                            <th>Tổng ngày nghỉ phép</th>
                            <th>Số ngày đã nghỉ:</th>
                            <th>Số ngày còn lại</th>
                            <th>Đơn xin nghỉ phép</th>
                            <tr class="text-center">
                                <td class="h5">12</td>
                                <td class="h5">6</td>
                                <td class="h5">6</td>
                                <td>
                                <input class="btn btn-primary" type="submit" value="Xin nghỉ phép" name="New" id="">
                                </td>
                            </tr>
                         </table> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col p-4">           
            <div class="card">
                <h5 class="card-header font-weight-light">Danh sách ngày nghỉ</h5>
                <div class="card-body">                   
                    <!---Nội dung task-->                   
                    <div class="container">
                                                                    
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr class="text-center">
                                <th>STT</th>
                                <th>Ngày xin nghỉ phép</th>
                                <th>Ngày nộp đơn</th>
                                <th>Ngày đơn được duyệt</th>
                                <th>Trạng thái đơn</th>                                                        
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>16/1/2022</td>
                                <td>12/1/2022</td>
                                <td>15/1/2022</td>
                                <td class="text-secondary">Wating</td>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>16/1/2022</td>
                                <td>12/1/2022</td>
                                <td>15/1/2022</td>
                                <td class="text-secondary">Wating</td>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>16/1/2022</td>
                                <td>12/1/2022</td>
                                <td>15/1/2022</td>
                                <td class="text-secondary">Wating</td>
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