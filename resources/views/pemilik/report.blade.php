<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!--My Fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/stle.css">

	<title>
	Tekopi
	</title>
    
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light .bg-light ">
        @if (Route::has('login'))
          <div class="container">
            @auth
            <a class="navbar-brand" href="{{ url('pemilik/home') }}">
                <img src="../images/homepagePemilik/dedlen bgt.png" class="lgnavbar" alt=""/>
                Tekopi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="{{ url('pemilik/home') }}">Home</a>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Manage</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('pemilik/report') }}">Reports Yearly</a>
                            <a class="dropdown-item" href="{{ url('pemilik/monthReport') }}">Reports Monthly</a>
                            <a class="dropdown-item" href="{{ url('pemilik/listKaryawan') }}">Employee</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav"> 
                    <li class="nav-item">
                        <div class="dropdown">
                            <div class="dropdown-toggle btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../images/homepagePemilik/manager.png" alt="pPlgn" width="41" height="41">
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('pemilik/profile') }}">Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">{{ __('logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
              </div>
            </div>
            @endauth
          </div>
        @endif
        </nav>
        <!-- akhir navbar -->
	  
	<div class="container">
	  	<div class="row justify-content-center">
			<div class="col-lg-12 tableProduk text-center">
				<h2>Laporan Keuangan Tahun 2020</h2>
				<div class="card">
					<div class="card-body">
						<canvas id="ctx" height="100"></canvas>
					</div>
				</div>
				<br>

				<h2>Total Penjualan Tahun 2020</h2>
				<h2>Rp643.000</h2>
			</div>
		</div>
		
	</div>
	  
	  
	 	   <!--			footer-->
		<div class="row footerCek">
			<div class="col text-center">
				<p>2020 All Rights Reserved by Tekopi.</p>
			</div>
		</div>
<!--		akhir footer-->
	  
	 	  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script src="../js/laporanFull.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
	  