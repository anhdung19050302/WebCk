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
            <!--Số ngày nghỉ phép-->
            <div class="col col-md-12 col-sm-12 p-4">
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
                                        <!--
                                        <input class="btn btn-primary" type="submit" value="Xin nghỉ phép" name="New" id="">
                                        -->
                                        <a href="../Employee/DonXinNghiPhep.php" class="btn btn-primary" role="button">Xin nghỉ phép</a>
                                    </td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <!--END Số ngày nghỉ phép-->
            <!--bảng danh sách đơn nghỉ phép-->
            <div class="col p-4">           
                <div class="card">
                    <h5 class="card-header font-weight-light">Danh sách đơn xin nghỉ phép</h5>                    
                    <div class="card-body">    
                        <!--Nội dung bảng-->                                                       
                        <div class="container">                                              
                            <table class="table table-bordered table-sm">
                                <thead>
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>Tên nhân viên</th>
                                    <th>Ngày xin nghỉ</th>
                                    <th>Ngày nộp đơn</th>
                                    <th>Ngày duyệt đơn</th>                                
                                    <th>Trạng thái</th>
                                    <th>Mô tả</th>                               
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Nguyễn Mỹ Anh</td>
                                    <td>16/1/2022</td>
                                    <td>12/1/2022</td>
                                    <td>???</td>
                                    <td class="text-secondary">Waiting</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#demo">Xem chi tiết</button>                                                                                                                                                      
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Nguyễn Mỹ Anh</td>
                                    <td>16/1/2022</td>
                                    <td>12/1/2022</td>
                                    <td>???</td>
                                    <td class="text-secondary">Waiting</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#demo">Xem chi tiết</button>                                                                                                                                                      
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Nguyễn Mỹ Anh</td>
                                    <td>16/1/2022</td>
                                    <td>12/1/2022</td>
                                    <td>???</td>
                                    <td class="text-secondary">Waiting</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#demo">Xem chi tiết</button>                                                                                                                                                      
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>  
                        <!--END Nội dung bảng--> 

                        <!--Chi tiết đơn-->
                        <div id="demo" class="collapse">
                            <hr>                        
                            <div class="card">
                                <h5 class="card-header font-weight-light">Chi tiết đơn</h5>
                                <div class="card-body">                                                           
                                    <div class="container"> 
                                        <!--END Nội dung bảng-->                                                                          
                                        <div>                                                                               
                                            <form action="#" class="was-validated">    
                                            <div class="d-flex justify-content-between">
                                                <div class="p-2 "> </div>
                                                <div class="p-2 "> </div>
                                                <div class="p-2 ">                                                      
                                                    <span>Trạng thái: </span> 
                                                    <span class="text-warning">Waitting</span> 
                                                </div>
                                            </div>
                                                <!--    -->
                                                <div class="form-group">
                                                    <label for="tenNhanVien">Tên nhân viên xin phép:</label>                                                            
                                                    <input readonly value="hidsak cdsklcd" name="username" id="username" type="text" class="form-control">                                        
                                                </div>                                
                                                <br>
                                                <!--    -->
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-12">                                                               
                                                        <label for="tenNhanVien">Thời gian bắt đầu:</label>                                                                                
                                                        <input readonly value="12/20/2021" name="username" id="username" type="text" class="form-control">
                                        
                                                    </div>
                                                    <div class="col-lg-4 col-12">                                                                
                                                        <label for="tenNhanVien">Thời gian kết thúc:</label>                                                            
                                                        <input readonly value="12/22/2021" name="username" id="username" type="text" class="form-control">                                    
                                                    </div>                                                           
                                                    <div class="col-lg-4 col-12">                                                                
                                                        <label for="tenNhanVien">Số ngày muốn nghỉ:</label>                                                            
                                                        <input readonly value="2" name="username" id="username" type="text" class="form-control">                           
                                                    </div>
                                                </div>    

                                                <!--    -->      
                                                <div class="form-group row">
                                                    <div class="col-lg-6 col-12">                                                                
                                                        <label for="tenNhanVien">Người duyệt</label>                                                            
                                                        <input readonly value="dscas csaisdc" name="username" id="username" type="text" class="form-control">                           
                                                    </div>
                                                    <div class="col-lg-6 col-12">                                                               
                                                        <label for="tenNhanVien">Ngày duyệt</label>                                                                                
                                                        <input readonly value="12/20/2021" name="username" id="username" type="text" class="form-control">                                        
                                                    </div>                                                                                                                                                                 
                                                </div>                                                          

                                                <!--    -->
                                                <div class="form-group">
                                                    <label for="moTa">Mô Tả:</label>                                   
                                                    <textarea  readonly class="form-control" rows="5" id="mota">jdsj  dsjai cdsaoe cdsaoie cdaosj eiodsc</textarea>
                                                </div>  
                                                
                                                <div class="form-group">
                                                    File đính kèm: 
                                                    <a href="../NghiPhep/test.docx">Download!</a>
                                                </div>                                                               
                                            </form>
                                        </div>                                                                          
                                    </div>                                
                                </div>
                            </div>                        
                        </div>
                        <!--END chi tiết đơn-->                                            
                    </div>                    
                </div>
            </div>
            <!--bảng danh sách đơn nghỉ phép-->                
        </div><!-- Main Col END -->
    </div><!-- body-row END -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="../main.js"></script> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
</body>
</html>