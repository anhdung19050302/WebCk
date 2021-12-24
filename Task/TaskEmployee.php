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
                                <th>Trạng thái</th>                                
                                <th>Xác nhận</th>
                                <th>Đánh giá</th>                                 
                                <th>Mô tả công việc</th>                               
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Viết báo cáo</td>
                                <td>Trình bày báo cáo</td>
                                <td>12:00</td>
                                <td class="text-warning">New</td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning">Start</button>                                                                                                                                                      
                                </td>
                                <td>
                                    <div class="text-danger">Bad</div>
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
                                <td class="text-warning">New</td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning">Start</button>                                                                                                                                                      
                                </td>
                                <td>
                                    <div class="text-primary">OK</div>
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
                                <td class="text-warning">New</td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning">Start</button>                                                                                                                                                      
                                </td>
                                <td>
                                    <div class="text-success">Good</div>
                                </td>                               
                                <td>
                                    <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#demo">Xem chi tiết</button>                                                                                                                                                      
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>                   
                    <!--End nọi dung task-->
                    <!--chi tiết task-->
                    <div>
                    <div id="demo" class="collapse">
                        <div class="col p-4">           
                            <div class="card">
                                <h5 class="card-header font-weight-light">Chi tiết công việc</h5>
                                <!--Chi tiết thông tin công viêc cơ bản-->
                                <div class="card-body">
                                    <div class="container mt-3">                                                             
                                        <div class="container">                            
                                            <form action="/action_page.php">
                                                <div class="form-group">                                    
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-lg-6 col-12">
                                                            <label for="username">Tên công việc</label>
                                                            <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                         
                                                        </div>
                                                        <div class="col-lg-4">

                                                        </div>
                                                        <div class="col-lg-2 col-12">
                                                            <span class="text-danger">Nộp trễ hạn</span>
                                                        </div>
                                                    </div>
                                                                                                 
                                                    <div class="form-group row">
                                                        <div class="col-lg-6 col-12"> 
                                                            <label for="username">Nhân viên thực hiện</label>
                                                            <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                        </div>
                                                        <div class="col-lg-6 col-12"> 
                                                            <label for="TenPB">Tên phòng ban</label>
                                                            <input readonly value="" type="text" class="form-control" id="TebPB" placeholder="Quản lý nhân viên" name="TenPB">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-lg-6 col-12"> 
                                                            <label for="username">Người giao</label>
                                                            <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                        </div>
                                                        <div class="col-lg-6 col-12"> 
                                                            <label for="TenPB">Chức vụ</label>
                                                            <input readonly value="" type="text" class="form-control" id="TebPB" placeholder="Quản lý nhân viên" name="TenPB">
                                                        </div>
                                                    </div>      

                                                    <div class="form-group row">
                                                        <div class="col-lg-6 col-12"> 
                                                            <label for="username">Thời gian giao</label>
                                                            <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                        </div>
                                                        <div class="col-lg-6 col-12"> 
                                                            <label for="TenPB">Thời hạn hoàn thành</label>
                                                            <input readonly value="" type="text" class="form-control" id="TebPB" placeholder="Quản lý nhân viên" name="TenPB">
                                                        </div>
                                                    </div>      
                                                    <div class="form-group">            
                                                        <label for="username">Chi tiết công việc</label>
                                                        <textarea readonly class="form-control" rows="5" id="mota">cdsacsadcs jcdsjei cshie dchaie cdsiaoie</textarea>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6 col-12"> 
                                                            <label for="username">Trạng thái</label>
                                                            <input readonly value="" name="username" id="username" type="text" class="form-control" placeholder="Hihi Haha">
                                                        </div>
                                                        <div class="col-lg-6 col-12"> 
                                                            <label for="TenPB">Đánh giá</label>
                                                            <input readonly value="" type="text" class="form-control" id="TebPB" placeholder="Quản lý nhân viên" name="TenPB">
                                                        </div>
                                                    </div>             
                                                </div>     

                                                <div class="form-group">
                                                    File đính kèm: 
                                                    <a href="../NghiPhep/test.docx">Download!</a>
                                                </div>   
                                                                                        
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--Chi tiết thông tin công viêc cơ bản-->    
                                <hr>  
                                <!--Chi tiết thông tin mà trưởng phòng đã Rejected-->
                                <div class="card-body">
                                    <div class="container mt-3">                                                             
                                        <div class="container">                            
                                            <form action="/action_page.php">
                                                <div class="form-group">                                    
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-lg-6 col-12"> 
                                                            <label for="username">Lần: </label>
                                                            <input readonly value="1" name="username" id="username" type="text" class="form-control">
                                                        </div>
                                                        <div class="col-lg-6 col-12"> 
                                                            <label for="TenPB">Thời gian Rejected</label>
                                                            <input readonly value="22/10/2021 2:35 P.M" type="text" class="form-control" id="TebPB" name="TenPB">
                                                        </div>
                                                    </div>      

                                                    <label for="mota">Nhận xét</label>                                                                                                                       
                                                    <textarea class="form-control" rows="5" id="mota"></textarea>
                                                   
                                                    <div>
                                                        <input type="checkbox" name="rememberMe" id="remenberMe">
                                                        <label for="rememberMe">Được gia hạn deadline:</label>        
                                                    </div>
                                                     
                                                </div>     

                                                <div class="form-group">
                                                    File đính kèm: 
                                                    <a href="../NghiPhep/test.docx">Download!</a>
                                                </div>                                                   
                                                                                         
                                            </form>
                                        </div>
                                    </div>
                                </div>                                
                                <!--Chi tiết thông tin công viêc mà trưởng phòng đã review-->   
                                <hr>
                                <!--Nộp báo cáo-->  
                                <div class="card-body">
                                    <div class="container mt-3">                                                             
                                        <div class="container">                
                                            <label for="nopbaocao">Báo cáo kết quả:</label>
                                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#nopketqua">Submit</button>                                                                                                                                                      
                                        </div>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                    <!--End chi tiết task-->
                    <!--
                        //---------------------------------------------------------------------------------------
                    -->
                    <!--Nội dung của modal-->
                    <!--submit công việc-->                            
                    <div>                                                               
                        <!-- The Modal của nopketqua -->
                        <div class="modal" id="nopketqua">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Nộp báo cáo</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                   
                                        <label for="username">Tên nhân viên:</label>
                                        <input value="" name="username" id="username" type="text" class="form-control" placeholder="Tên nhân viên">
                            
                                        <label for="mota">Tiến độ làm việc</label>                                                                                                                       
                                        <textarea class="form-control" rows="5" id="mota"></textarea>
                                        <br>
                                        <label for="file">Tập tin đính kèm:</label> 
                                        <input type="file" id="file-upload" required name="file" />
                                        <br>                                                                             
                                       
                                        <div id="demo1" class="collapse">
                                            <input type="datetime-local">  
                                        </div>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Gửi</button>                                       
                                    </div>                                    
                                </div>
                            </div>
                        </div>            
                    </div>
                    <!--End xem chi tiết công việc--> 
                    <!--END modal -->
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