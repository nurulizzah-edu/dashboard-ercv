<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
    <title>CSS GRID DASHBOARD</title>
  </head>
  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">
          <a href="#">Jadwal Konsultasi</a>
          <a class="active_link" href="#">Admin</a>
        </div>
        <div class="navbar__right">
          <a href="#">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
          <a href="#">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </a>
          <a href="#">
            <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
          </a>
        </div>
      </nav>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <div class="main__greeting">
              <h1>E-RCV DASHBOARD</h1>
              <p>Welcome to your admin dashboard</p>
            </div>
          </div>

          <!-- MAIN TITLE ENDS HERE -->

          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards">
            <div class="card">
              <div class="card_inner">
                <p class="text-primary-p">Pengadu Hari Ini</p>
                <span class="font-bold text-title">578</span>
              </div>
          </div>

          <div class="card">
              <div class="card_inner">
                <p class="text-primary-p">Masalah Keluarga</p>
                <span class="font-bold text-title">2467</span>
              </div>
          </div>

          <div class="card">
              <div class="card_inner">
                <p class="text-primary-p">Masalah Percintaan</p>
                <span class="font-bold text-title">340</span>
              </div>
          </div>
			
			    <div class="card">
              <div class="card_inner">
                <p class="text-primary-p">Masalah Anak Remaja</p>
                <span class="font-bold text-title">2467</span>
              </div>
          </div>

          <div class="card">
              <div class="card_inner">
                <p class="text-primary-p">Masalah Pengembangan Diri</p>
                <span class="font-bold text-title">340</span>
              </div>
          </div>
			
			    <div class="card">
              <div class="card_inner">
                <p class="text-primary-p">Masalah Trauma</p>
                <span class="font-bold text-title">2467</span>
              </div>
            </div>

            <div class="card">
              <div class="card_inner">
                <p class="text-primary-p">Masalah Emosi</p>
                <span class="font-bold text-title">340</span>
              </div>
            </div>
			    <div class="card">
              <div class="card_inner">
                <p class="text-primary-p">Masalah Non Psikologis</p>
                <span class="font-bold text-title">2467</span>
              </div>
          </div>
          <!-- MAIN CARDS ENDS HERE -->

          <!-- CHARTS STARTS HERE -->
          <div class="charts" width="400px"> 
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                  <h1>Daily Reports</h1>
                  <p>Jumlah Pengadu dan Berdasarkan Jenis Psikologi</p>
                </div>
                
              </div>
              <div id="apex1" width="400px"></div>
            </div>

            
        </div>
      </main>

<!-- SIDEBAR -->
      <div id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-img">
            <img src="assets/logo.png" alt="logo" />
            <h1>E-RCV</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar-menu">
          <div class="sidebar-link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Dashboard</a>
          </div>
		    <h2 class="sidenav-list">PSIKOLOG</h2>
          <h2 class="sidenav-list">JADWAL KONSULTASI</h2>
          <h2 class="sidenav-list">JUMLAH PENGADU</h2>		  
          <div class="sidebar-link">
            <i class="fa fa-calendar-o"></i>
            <a href="#">Harian</a>
          </div>
          <div class="sidebar-link">
            <i class="fa fa-calendar"></i>
            <a href="#">Bulanan</a>
          </div>

          
          <div class="sidebar-logout">
            <i class="fa fa-power-off"></i>
            <a href="#">Log out</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
  
</html>