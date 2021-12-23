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
                <h5 class="card-header font-weight-light">Quản lý nghỉ phép</h5>
                <div class="card-body">                   
                    <!--bắt đầu nội dung từ đây-->
                    <div>                               
                        <div class="container">                            
                            <h3>Danh sách đơn xin nghỉ phép</h3>                            
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên nhân viên</th>      
                                        <th>thời gian gửi</th>  
                                        <th>trạng thái nghỉ</th>                                                                    
                                        <th>Xem chi tiết</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Hihi Haha</td>
                                        <td>20/12/2021 12:30 A.M</td>
                                        <td class="text-warning">chưa duyệt</td>
                                        <td>
                                            <input type="submit" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo" value="Xem chi tiết">    
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hihi Haha</td>
                                        <td>20/12/2021 12:30 A.M</td>
                                        <td class="text-danger">Không được duyệt</td>
                                        <td>
                                            <input type="submit" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo" value="Xem chi tiết">    
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Hihi Haha</td>
                                        <td>20/12/2021 12:30 A.M</td>
                                        <td class="text-success">duyệt</td>
                                        <td>
                                            <input type="submit" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo" value="Xem chi tiết">    
                                        </td> 
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                        <div>
                            <div>                                
                                <div id="demo" class="collapse">
                                <div class="col p-4">           
                                    <div class="card">
                                        <h5 class="card-header font-weight-light">Chi tiết đơn</h5>
                                        <div class="card-body">
                                            <div>                        
                                                <div>                                                                               
                                                    <form action="#" class="was-validated">                                               
                                                        <div class="row">
                                                            <div class="col-lg-6 col-12">                                                               
                                                                <label for="tenNhanVien">Tên nhân viên xin phép:</label>                                                            
                                                                <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                                
                                                            </div>
                                                            <div class="col-lg-6 col-12">                                                                
                                                                <label for="tenNhanVien">Thời gian gửi</label>                                                            
                                                                <input readonly value="20/10/2021 11:20 A.M" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                            </div>
                                                        </div>    

                                                        <br>
                                                        <!--    -->
                                                        <div class="row">
                                                            <div class="col-lg-4 col-12">                                                               
                                                                <label for="tenNhanVien">Thời gian bắt đầu:</label>                                                            
                                                                <input readonly value="22/10/2021" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                                
                                                            </div>
                                                            <div class="col-lg-4 col-12">                                                                
                                                                <label for="tenNhanVien">Thời gian kết thúc:</label>                                                            
                                                                <input readonly value="25/10/2021" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                            </div>                                                           
                                                            <div class="col-lg-4 col-12">                                                                
                                                                <label for="tenNhanVien">Số ngày muốn nghỉ:</label>                                                            
                                                                <input readonly value="3" name="username" id="username" type="text" class="form-control" placeholder="số ngày muốn nghỉ">                           
                                                            </div>
                                                        </div>                                                          

                                                        <!--    -->
                                                        <div class="form-group">
                                                            <label for="moTa">Mô Tả:</label>                                   
                                                            <textarea readonly class="form-control" rows="5" id="mota">Helloc Doe csacdsa cisacdsai csacdsaic csincdi csaichech cahsidcs cshiachoen cihdascdhso</textarea>
                                                        </div>  
                                                       
                                                        <div class="form-group">
                                                            File đính kèm: 
                                                            <a href="../NghiPhep/test.docx">Download!</a>
                                                        </div>                                                        
                                                        <div>
                                                            <button type="submit" class="btn btn-success pl-4 pr-4 mr-2">Đồng Ý</button>
                                                            <button type="submit" class="btn btn-outline-success pl-4 pr-4">Không đồng ý</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>               
                                        </div>
                                    </div>                                           
                                </div>
                            </div>
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