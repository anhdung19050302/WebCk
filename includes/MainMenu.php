<!-- Menu Slide bar start -->
<div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
<ul class="list-group">
    <!-- Trennzeichen mit Titel -->
    <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
        <small>MAIN MENU</small>
    </li>
    <!-- / END Separator -->
<!--
    //---------------------------------------------------------------------------------------
-->    
    <!-- Quản lí tài khoản -->
    <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start font-weight-bold">
        <div class="d-flex w-100 justyfy-content-start align-items-center">
            <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
            <span class="menu-collapsed">Quản lý tài khoản</span>
            <span class="fas fa-angle-down ml-auto"></span>
        </div>
    </a>
    
    <!-- Chi tiết Quản lí tài khoản -->
    <div id="submenu1" class="collapse sidebar-submenu">
        <a href="../Manager/AccountManager.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Danh sách tài khoản</span>
        </a>
        <a href="../Manager/AddAccount.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Thêm một tài khoản</span>
        </a>
        </div>
    <!-- Kết thúc chức năng Quản lí tài khoản -->
<!--
    //---------------------------------------------------------------------------------------
-->
    <!-- Chức năng quản lí phòng ban -->
    <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start font-weight-bold">
        <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fas fa-user fa-fw mr-3"></span>
            <span class="menu-collapsed">Quản lý phòng ban</span>
            <span class="fas fa-angle-down ml-auto"></span>
        </div>
    </a>
    <!-- chức năng chi tiết của quản lí phòng ban -->
    <div id='submenu2' class="collapse sidebar-submenu">
        <a href="../Manager/ChinhSuaPhongBan.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Danh sách phòng ban</span>
        </a>
        <a href="../Manager/PhongBan.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Thêm một phòng ban</span>
        </a>
    </div>
    <!-- Kết thúc chức năng quản lí phòng ban -->
<!--
    //---------------------------------------------------------------------------------------
-->   
    <!--Của trưởng phòng-->
    <!-- Chức năng quản lí tài công việc -->
    <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start font-weight-bold">
        <div class="d-flex w-100 justyfy-content-start align-items-center">
            <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
            <span class="menu-collapsed">Quản lý công việc</span>
            <span class="fas fa-angle-down ml-auto"></span>
        </div>
    </a>
    <!-- Chi tiết Quản lí công việc -->
    <div id="submenu3" class="collapse sidebar-submenu">
        <a href="../Task/TaskManager.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Danh sách công việc</span>
        </a>
        <a href="../Task/CreateTask.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Thêm công việc </span>
        </a>

    </div>
    <!-- Kết thúc Quản lí task -->

    <!--Của Nhân viên-->
    <!-- Chức năng quản lí tài công việc -->
    <a href="#submenu31" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start font-weight-bold">
        <div class="d-flex w-100 justyfy-content-start align-items-center">
            <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
            <span class="menu-collapsed">Quản lý công việc</span>
            <span class="fas fa-angle-down ml-auto"></span>
        </div>
    </a>
    <!-- Chi tiết Quản lí công việc -->
    <div id="submenu31" class="collapse sidebar-submenu">
        <a href="../Task/TaskEmployee.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Danh sách công việc</span>
        </a>        
    </div>
    <!-- Kết thúc Quản lí task -->
<!--
    //---------------------------------------------------------------------------------------
-->
    <!--của trưởng phòng-->
    <!-- Chức năng quản lí ngày nghỉ -->
    <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start font-weight-bold">
        <div class="d-flex w-100 justyfy-content-start align-items-center">
            <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
            <span class="menu-collapsed">Quản lý ngày nghỉ</span>
            <span class="fas fa-angle-down ml-auto"></span>
        </div>
    </a>
    <!-- Chi tiết Quản lí ngày nghỉ -->
    <div id="submenu4" class="collapse sidebar-submenu">
        <a href="../NghiPhep/DanhSachNgayNghiManager.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Danh sách đơn nghỉ</span>
            <span class="badge badge-light">3</span>
        </a>
        <a href="../Employee/DonXinNghiPhep.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Đơn xin nghỉ </span>
        </a>
    </div>
    <!-- Kết thúc Quản lí ngày nghỉ-->

    <!--của nhân viên-->
    <!-- Chức năng quản lí ngày nghỉ -->
    <a href="#submenu41" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start font-weight-bold">
        <div class="d-flex w-100 justyfy-content-start align-items-center">
            <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
            <span class="menu-collapsed">Quản lý ngày nghỉ</span>
            <span class="fas fa-angle-down ml-auto"></span>
        </div>
    </a>
    <!-- Chi tiết Quản lí ngày nghỉ -->
    <div id="submenu41" class="collapse sidebar-submenu">
        <a href="../NghiPhep/DanhSachNghiPhepEmployee.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Danh sách đơn nghỉ</span>            
        </a>
        <a href="../Employee/DonXinNghiPhep.php" class="list-group-item list-group-item-action bg-dark text-white">
            <span class="menu-collapsed m-2">Đơn xin nghỉ </span>
        </a>
    </div>
    <!-- Kết thúc Quản lí ngày nghỉ-->

</ul><!-- List Group END-->
</div> <!-- Seitenleiste-container END -->