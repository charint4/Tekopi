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
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
						<div class="col">
							<img src="../images/120px/buy, click, button, hand, gesture_120px.png" alt="buy" class="float-left"/>
							<h4>Fleksibel</h4>
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
						<div class="col">
							<img src="../images/120px/braces, dental, mouth, dentist, healthcare_120px.png" alt="coffee" class="float-left"/>
							<h4>Tasty</h4>
							<p>Lorem ipsum dolor sit amet.</p>
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
					<p>Lorem ipsum dolor sit amet.</p>
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
				<p>2020 All Rights Reserved by Tekopi.</p>
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