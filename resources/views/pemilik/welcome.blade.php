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
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white; height: 70px">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="navbar-brand" href="{{ url('pemilik/home') }}" style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">
							<img src="../images/homepagePemilik/dedlen bgt.png" class="lgnavbar" alt=""/>
							Tekopi
						</a>
					</li>
				</ul>
			@if (Route::has('login'))
				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto">
					@auth
					<li class="nav-item">
						<a href="{{ url('pemilik/home') }}" class="text-sm text-white-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">HOME</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('pemilik/profile') }}" class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">PROFILE</a>
					</li>
					<li class="nav-item">
						<a  class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);" href="{{ url('pemilik/report') }}">REPORTS YEARLY</a>					
					</li>
					<li class="nav-item">
						<a  class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);" href="{{ url('pemilik/monthReport') }}">REPORT MONTHLY</a>
					</li>
					<li class="nav-item">
						<a  class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);" href="{{ url('pemilik/listKaryawan') }}">EMPLOYEE</a>
					</li>
					
					<li class="nav-item">
						<a class="text-sm text-gray-700 " style="margin-left: 50px;margin-right: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);" href="{{ route('logout') }}"
									onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
										{{ __('LOG OUT') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
						</form>						
					</li>
					
					@endauth
				</ul>
			</div>
			@endif 
	</nav>

    <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">
		<img src="../images/homepagePemilik/dedlen bgt.png" class="logo" alt=""/>
		  <h1 class="display-4"><span>Ngopi</span> Ya <span>Tekopi!!</span></h1>
<!--		<a href="CheckOut.html" class="btn btn-primary tombol">Sign Up</a>  -->
      </div>
    </div>
    <!-- Akhir Jumbotron -->
	 
	<!--container-->
	  <br>
	<div class="container">
			<!--Info Panel-->
			<div class="row justify-content-center">
				<div class="col-10	 info-panel">
					<div class="row">
						<div class="col">
							<img src="../images/120px/coffee, beverage, drink, container_120px.png" alt="coffee" class="float-left"/>
						  <h4>Portabel</h4>
							<p>Mudah di akses dari mana saja !</p>
						</div>
						<div class="col">
							<img src="../images/120px/buy, click, button, hand, gesture_120px.png" alt="buy" class="float-left"/>
							<h4>Fleksibel</h4>
							<p>Tekan pesan dan tinggal tunggu datang !</p>
						</div>
						<div class="col">
							<img src="../images/120px/braces, dental, mouth, dentist, healthcare_120px.png" alt="coffee" class="float-left"/>
							<h4>Tasty</h4>
							<p>Dengan kopi robusta asli tentu aromanya nikmat !</p>
						</div>
					</div>
				</div>
			</div>
			<!--Akhir Info Panel-->

			<br>

			<!--Produk	-->

			<div class="row produk">
				<div class="col-lg-6">
					<img src="../images/homepagePemilik/Kopi_Botol_Black_Coffee_Cold_Brew_250_ml.jpg" alt="Produk" class="img-fluid"/>

				</div>
				<div class="col-lg-5">
					<h3>Tersedia Berbagai <br><span>Rasa</span></h3>
					<p>Semua rasa yang kamu inginkan tersedia di sini</p>
				</div>
			</div>
			<!--Akhir Produk--> 

			<!--Testimoni	  	-->
			<section class="testimoni">
				<div class="row justify-content-center">
					<div class="col-lg-8 justify-content-center">
					  <h5>"Rasanya bikin nagih dan bikin badan seger slurrr, bakalan gua 
					    beli terus nih"</h5>
					</div>
				</div>
				
			  <div class="row justify-content-center">
					<div class="col-lg-6 justify-content-center d-flex">
						<figure class="figure">
						  <img src="../images/homepagePemilik/img3.jpg" alt="Testi1" class="figure-img img-fluid rounded-circle">
					  </figure>	
						<figure class="figure">
						  <img src="../images/homepagePemilik/hublu - ryu.JPG" alt="Testi2" class="figure-img img-fluid rounded-circle utama">
							<figcaption class="figure-caption">
							  <h5>Ryukazu Andara</h5>
								<p>Mahasiswa</p>
						  </figcaption>
					  </figure>
					<figure class="figure">
					  <img src="../images/homepagePemilik/img1.jpg" alt="Testi1" class="figure-img img-fluid rounded-circle">
					  </figure>	
					</div>
				</div>
			</section>

			<!--Akhir Testimoni	  -->
		<div class="row justify-content-center">
			<div class="col-5-lg" style="color: #ACACAC">
					Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
			</div>
		</div>
		
		<br>
		
<!--			footer-->
		<div class="row footerCek">
			<div class="col text-center">
				<p>2021 All Rights Reserved by Tekopi.</p>
			</div>
		</div>
<!--		akhir footer-->
	</div>
<!-- Akhri container-->
	  
	  
	  
	  
	  
	  
	  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>