<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
  <span class="menu-collapsed">Home</span>
  </a>
  <div class="collapse navbar-collapse" id="navbarAdmin">
      <ul class="navbar-nav ml-auto">
        <!-- Thông tin cá nhân -->
        <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="../Employee/Profile.php">
                <i class="fas fa-user-tie"></i>
                Trang cá nhân
            </a> 
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#top"> Đăng nhập</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../Login.php"> Đăng xuất</a>
        </li>

          <!-- Dieses Menü ist bei größeren Geräten mit d-sm-none ausgeblendet.
                Die Seitenleiste ist nicht für kleinere Bildschirme geeignet, daher kann dieses Dropdown-Menü alle nützlichen Seitenleisten-Elemente ausschließlich für kleinere Bildschirme enthalten -->
          <li class="nav-item dropdown d-sm-block d-md-none">
              <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </a>
              <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                  <a class="dropdown-item" href="#top">Dashboard</a>
                  <a class="dropdown-item" href="#top">Profile</a>
                  <a class="dropdown-item" href="#top">Tasks</a>
                  <a class="dropdown-item" href="#top">Etc..</a>
              </div>
          </li><!-- Menü für kleinere Geräte END -->
        </ul>
  </div>
</nav><!-- NavBar END --> 