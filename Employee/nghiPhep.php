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
                <h5 class="card-header font-weight-light">Đơn xin nghỉ phép</h5>
                <div class="card-body">                  
                    <!--bắt đầu nội dung từ đây-->
                    <div>                        
                        <div>                                                                               
                            <form action="#" class="was-validated">    
                                <!--    -->
                                <div class="form-group">
                                    <label for="tenNhanVien">Tên nhân viên xin phép:</label>                                                            
                                    <input value="" name="username" id="username" type="text" class="form-control" placeholder="Nhập họ tên nhân viên">
                        
                                </div>                                
                                <br>
                                <!--    -->
                                <div class="row">
                                    <div class="col-lg-4 col-12">                                                               
                                        <label for="tenNhanVien">Thời gian bắt đầu:</label>                                                                                
                                        <input type="date">
                                    </div>
                                    <div class="col-lg-4 col-12">                                                                
                                        <label for="tenNhanVien">Thời gian kết thúc:</label>                                                            
                                        <input type="date">
                                    </div>                                                           
                                    <div class="col-lg-4 col-12">                                                                
                                        <label for="tenNhanVien">Số ngày muốn nghỉ:</label>                                                            
                                        <input readonly value="tự động tính" name="username" id="username" type="text" class="form-control" placeholder="số ngày muốn nghỉ">                           
                                    </div>
                                </div>                                                          

                                <!--    -->
                                <div class="form-group">
                                    <label for="moTa">Mô Tả:</label>                                   
                                    <textarea class="form-control" rows="5" id="mota"></textarea>
                                </div>  
                                
                                <div class="form-group">
                                    <label for="file">Tập tin đính kèm:</label> 
                                    <input type="file" id="file-upload" required name="file" />                                                                       
                                </div>                                                  
                                <div>
                                    <button type="submit" class="btn btn-success pl-4 pr-4 mr-2">Gửi đơn</button>                                   
                                </div>
                            </form>
                        </div>
                    </div> 
                    <!--END nội dung-->
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