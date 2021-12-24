<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/28493d7750.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css"> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
	<title>Phong Ban</title>
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
                <h5 class="card-header font-weight-light">Thêm phòng ban</h5>
                <div class="card-body">
                    <div>
                        <div>
                            <form action="#" class="was-validated">                                               
                                <!--    -->
                                <div class="form-group">
                                    <label for="tenPhongBan">Tên Phòng Ban: </label>
                                    <input required type="text" class="form-control" name="tenPhongBan" id="TenPhongBan">
                                    <!-- -->
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>                                    
                                </div>

                                <!--    -->
                                <div class="form-group">
                                    <label for="tenTruongPhongBan">Người đảm nhân trưởng phòng:</label>
                                    <select class="form-control" id="tenTruongPhongBan" name="tenTruongPhongBan">                                        
                                        <option>đảvt csad cdsds</option>
                                        <option>dsvsad ytfjfv</option>
                                        <option>fdfdv yucbnh vees</option>
                                        <option>sad hgt dfrv</option>
                                    </select>                                   
                                </div>

                                <!--    -->
                                <div class="form-group">
                                    <label for="moTa">Mô Tả:</label>                                   
                                    <textarea class="form-control" rows="5" id="mota"></textarea>
                                </div>    

                                <div class="form-group">
                                    <label for="soPhong">Số Phòng: </label>                                                                
                                    <select class="form-control" id="soPhong" name="soPhong">
                                        <option>PH202</option>
                                        <option>Ph304</option>
                                        <option>Ph305</option>
                                        <option>Ph306</option>
                                    </select>
                                </div> 

                                <div>
                                    <button type="submit" class="btn btn-success pl-4 pr-4 mr-2">Lưu</button>
                                    <button type="reset" class="btn btn-outline-success pl-4 pr-4">Reset</button>
                                </div>
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