<!--
    Thanh navbar
-->
<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
  	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
    <span class="menu-collapsed">Intern</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarAdmin">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#top"> Registrieren</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#top"> Logout</a>
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