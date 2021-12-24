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
                <div class="h5 card-header font-weight-light">
                    Chỉnh sửa phòng ban
                </div>

                <div class="card-body">
                    <div>                         
                        <div class="container">
                            <div class="justify-content-end d-flex">
                                <input class="btn btn-success inline" type="submit" value="Thêm phòng ban" name="New" id="">
                            </div>       
                            <div class="h3">
                                Danh sách phòng ban
                            </div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Tên phòng ban</th>
                                        <th>Mô tả</th>
                                        <th>Số phòng</th>
                                        <th>Chi tiết</th>
                                        <th>Chỉnh sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Phòng nghiệp vụ</td>
                                        <td>Doe csacdsa cisacdsai csacdsaic csineds csaichech cahsidcs csacdsaic csineds csaichech cahsidcs  cshiachoen cihdascdhso</td>
                                        <td>H208</td>
                                        <td>
                                            <input type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo1" value="Chi tiết">   
                                        </td>
                                        <td>
                                            <input type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo" value="Sửa">    
                                        </td>
                                        <td>
                                            <input type="button" class="btn btn-outline-danger"value="Xóa">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phòng nghiệp vụ</td>
                                        <td>Doe csacdsa cisacdsai csacdsaic csincdi csaichech cahsidcs cshiachoen cihdascdhso</td>
                                        <td>H208</td>
                                        <td>
                                            <input type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo1" value="Chi tiết">   
                                        </td>
                                        <td>
                                            <input type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo" value="Sửa">    
                                        </td>
                                        <td>
                                            <input type="button" class="btn btn-outline-danger"value="Xóa">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phòng nghiệp vụ</td>
                                        <td>Doe csacdsa cisacdsai csacdsaic csincdi csaichech cahsidcs cshiachoen cihdascdhso</td>
                                        <td>H208</td>
                                        <td>
                                            <input type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo1" value="Chi tiết">   
                                        </td>
                                        <td>
                                            <input type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo" value="Sửa">    
                                        </td>
                                        <td>
                                            <input type="button" class="btn btn-outline-danger"value="Xóa">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>

                        <!--xem chi tiết của sửa -->
                        <div>
                            <div>                                
                                <div id="demo" class="collapse">
                                <div class="col p-4">           
                                    <div class="card">
                                        <h5 class="card-header font-weight-light">Chỉnh sửa phòng ban</h5>
                                        <div class="card-body">
                                            <div>                        
                                                <div>                                    
                                                    <form action="#" class="was-validated">                                               
                                                        <!--    -->
                                                        <div class="form-group">
                                                            <label for="tenPhongBan">Tên Phòng Ban: </label>
                                                            <input required type="text" class="form-control" name="tenPhongBan" id="TenPhongBan" value = "Phòng nghiệp vụ">
                                                            <!-- -->
                                                            <div class="valid-feedback">Valid.</div>
                                                            <div class="invalid-feedback">Please fill out this field.</div>
                                                            
                                                        </div>

                                                        <!--    -->
                                                        <div class="form-group">
                                                            <label for="moTa">Mô Tả:</label>                                   
                                                            <textarea class="form-control" rows="5" id="mota">Helloc Doe csacdsa cisacdsai csacdsaic csincdi csaichech cahsidcs cshiachoen cihdascdhso</textarea>
                                                        </div>    

                                                        <div class="form-group">
                                                            <label for="soPhong">Số Phòng: </label>                                                                
                                                            <select class="form-control" id="soPhong" name="soPhong">
                                                                <option>PH208</option>
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
                                </div>
                            </div>
                        </div>  
                        <!--END xem chi tiết của sửa-->    
                        <!--xem chi tiết của phòng ban -->
                        <div>
                            <div>                                
                                <div id="demo1" class="collapse">
                                <div class="col p-4">           
                                    <div class="card">
                                        <h5 class="card-header font-weight-light">Chi tiết phòng ban</h5>
                                        <div class="card-body">
                                            <div>                        
                                                <div>                                    
                                                    <form action="#" class="was-validated">                                               
                                                        <!--    -->
                                                        <div class="form-group">
                                                            <label for="tenPhongBan">Tên Phòng Ban:</label>
                                                            <input readonly type="text" class="form-control" name="tenPhongBan" id="TenPhongBan" value = "Phòng nghiệp vụ">                                                           
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="tenPhongBan">Tên trưởng phòng:</label>
                                                            <input readonly type="text" class="form-control" name="tenPhongBan" id="TenPhongBan" value = "Phòng nghiệp vụ">                                                           
                                                        </div>

                                                        <!--    -->
                                                        <div class="form-group">
                                                            <label for="moTa">Mô Tả:</label>                                   
                                                            <textarea readonly class="form-control" rows="5" id="mota">Helloc Doe csacdsa cisacdsai csacdsaic csincdi csaichech cahsidcs cshiachoen cihdascdhso</textarea>
                                                        </div>    

                                                        <div class="form-group">
                                                            <label for="soPhong">Số Phòng: </label>                                                                
                                                            <select class="form-control" id="soPhong" name="soPhong">
                                                                <option>PH208</option>
                                                                <option>Ph304</option>
                                                                <option>Ph305</option>
                                                                <option>Ph306</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">                                                            
                                                            <div class="container">                            
                                                                <h6>Danh sách nhân viên thuộc phòng ban</h6>                            
                                                                <table class="table">
                                                                    <thead class="thead-dark">
                                                                        <tr class="text-center">
                                                                            <th>STT</th>
                                                                            <th>Tên nhân viên</th>
                                                                            <th>chức vụ</th> 
                                                                            <th>Số ngày đã xin nghỉ</th>                                                                                                                                                                                
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="text-center">
                                                                            <td>1</td>
                                                                            <td>dsads dsadcsd</td>
                                                                            <td>nhân viên</td>
                                                                            <td>0</td>                                                                                                                
                                                                        </tr>
                                                                        <tr class="text-center">
                                                                            <td>1</td>
                                                                            <td>dsads dsadcsd</td>
                                                                            <td>nhân viên</td>
                                                                            <td>0</td> 
                                                                        </tr>
                                                                        <tr class="text-center">
                                                                            <td>1</td>
                                                                            <td>dsads dsadcsd</td>
                                                                            <td>nhân viên</td>
                                                                            <td>0</td> 
                                                                        </tr>
                                                                    </tbody>
                                                                </table>                            
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>               
                                        </div>
                                    </div>                                           
                                </div>
                            </div>
                        </div>  
                        <!--END xem chi tiết phòng ban-->                        
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