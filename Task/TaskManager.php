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
                            <tr class="text-center">
                                <th>STT</th>
                                <th>Tên công việc</th>
                                <th>Người giao</th>
                                <th>Thời gian</th>
                                <th>Nhân viên đảm nhận</th>                                
                                <th>Trạng thái</th>
                                <th>Đánh giá</th>
                                <th>Xóa</th> 
                                <th>Mô tả</th>                               
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Viết báo cáo</td>
                                <td>Trình bày báo cáo</td>
                                <td>12:00</td>
                                <td>Nguyễn Mỹ Anh</td>
                                <td>In progress</td>
                                <td class="text-danger">
                                    Bad
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>                                                                                                                                                      
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#demo">Xem chi tiết</button>                                                                                                                                                      
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td>Viết báo cáo</td>
                                <td>Trình bày báo cáo</td>
                                <td>12:00</td>
                                <td>Nguyễn Thị Hằng</td>
                                <td>Canceled</td>
                                <td class="text-primary">
                                    OK
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>                                                                                                                                                      
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#demo">Xem chi tiết</button>                                                                                                                                                      
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td>Viết báo cáo</td>
                                <td>Trình bày báo cáo</td>
                                <td>12:00</td>
                                <td>Nguyễn Đức Dũng</td>
                                <td>Waiting</td>
                                <td class="text-success">
                                    Good
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">Xóa</button>                                                                                                                                                      
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#demo">Xem chi tiết</button>                                                                                                                                                      
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>                   
                    <!--End nội dung task-->
                    <!--chi tiết task-->
                    <div>
                    <div id="demo" class="collapse">
                        <div class="col p-4">           
                            <div class="card">
                                <h5 class="card-header font-weight-light">Chi tiết công việc</h5>
                                <div class="card-body">
                                    <div class="container mt-3">                                                             
                                        <div class="container">                            
                                            <form action="/action_page.php">
                                                <div class="form-group">                                    
                                                    <label for="username">Nhân viên thực hiện</label>
                                                    <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                                                                                    
                                                    <label for="LoaiNV">Loại nhân viên</label>
                                                    <input readonly value="" type="text" class="form-control" id="LoaiNV" placeholder="Giám đốc" name="LoaiNV">

                                                    <label for="username">Tên người dùng</label>
                                                    <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="username">
                                                    
                                                    <label for="pass">Xác nhận mật khẩu</label>
                                                    <input readonly value="********" name="pass-confirm" required class="form-control" type="password" placeholder="Xác nhận mật khẩu" id="pass2">
    
                                                    <label for="TenPB">Tên phòng ban</label>
                                                    <input readonly value="" type="text" class="form-control" id="TebPB" placeholder="Quản lý nhân viên" name="TenPB">

                                                </div>       
                                                <div class="row">
                                                    <div class="col-lg-2 col-12">                                                               
                                                        <!--Xem chi tiết công việc-->                            
                                                        <div>                                                    
                                                            <!-- Button to Open the Modal -->
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#review">Review</button>
                                                            <!-- The Modal -->
                                                            <div class="modal" id="review">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                    
                                                                        <!-- Modal Header -->
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Xem chi tiết task</h4>
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        
                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">                                                                    
                                                                            <label for="mota">Tiến độ làm việc</label>                                                                                                                       
                                                                            <textarea class="form-control" rows="5" id="mota"></textarea>
                                                                            <br>
                                                                            <label for="file">Tập tin đính kèm:</label> 
                                                                            <input type="file" id="file-upload" required name="file" />
                                                                            <br>
                                                                            <label for="txtNgayThangNamSinh">Gia hạn deadline:</label>                                
                                                                            <input type="datetime-local">                                                                            
                                                                        </div>
                                                                        
                                                                        <!-- Modal footer -->
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Đồng ý</button>
                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Không đồng ý</button>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>            
                                                        </div>
                                                        <!--End xem chi tiết công việc--> 
                                                    </div>
                                                    <div class="col-lg-2 col-12">                                                                
                                                        <!--start button duyệt--> 
                                                        <div>                                                    
                                                            <!-- Button to Open the Modal -->
                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#duyet">Duyệt</button>
                                                            <!-- The Modal -->
                                                            <div class="modal" id="duyet">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                    
                                                                        <!-- Modal Header -->
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Đánh giá công việc nhân viên</h4>
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        
                                                                        <!-- Modal body -->
                                                                        <div class="modal-body">                                                                    
                                                                            <label for="NV">Mức độ hoàn thành</label>                                                                
                                                                            <select class="form-control" id="NV" name="NV">
                                                                                <option>Bad</option>
                                                                                <option>Ok</option>
                                                                                <option>Good</option>                                                                       
                                                                            </select>                                                                    
                                                                        </div>
                                                                        
                                                                        <!-- Modal footer -->
                                                                        <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>            
                                                        </div>
                                                        <!--End button duyệt-->              
                                                    </div>                                                           
                                                    <div class="col-lg-8 col-12">                                                                
                                                       <div>  </div>               
                                                    </div>
                                                </div>   

                                                

                                                                     
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End chi tiết task-->
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