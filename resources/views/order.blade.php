<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
  <body class="antialiased">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6F4E37">
	@if (Route::has('login'))
                <div  >
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-white-700 " style="color : white;margin-left: 50px">Home</a>
                        <a href="{{ route('product') }}" class="text-sm text-gray-700 " style="color : white;margin-left: 50px">Products</a>
                        <a href="{{ route('order') }}" class="text-sm text-gray-700 " style="color : white;margin-left: 50px">Order</a>
						<a class="text-sm text-gray-700 " style="color : white;margin-left: 1100px;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                        </a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                        </form>
                    @endauth
                </div>
            @endif 
	</nav>
	  
	  <div class="container">
	  	<div class="row justify-content-center">
			<div class="col-lg-12 history">
				<h2>&emsp; Daftar Belanja</h2>	
				<br>
				<div class="row justify-content-center">
					<div class="col-lg-10 col-xl-11 daftarBelanja">
						<div class="row">
							<div class="col-lg-5">
								<img src="../images/homepage/Produk1.jpg" alt="produk1" width="95" height="93" class="rounded imgDB float-left">
								<h5 class="pd"> &nbsp; &nbsp;Produk 1</h5>
							  <p class="hargaP"> &nbsp; &nbsp; &nbsp;Rp10.000  </p>
								<p> &nbsp; &nbsp; &nbsp;3 Produk</p>
							</div>
							<div class="vl"></div>
						  <div class="col-lg-4">
								
							  <p>Status Pengiriman: </p>
							  <h5>Packing </h5>
							  <p>Status Pembayaran: </p>
							  <h5>Lunas</h5>
						  </div>
							<div class="vl" ></div>
							<div class="col-lg-2">
							  <p>Total Belanja :</p>
							  <h5>Rp35.000</h5>
							</div>
						</div>
				  </div>
				</div>
			</div>
		  </div>
		  
	  </div>
	  <br>
	  <br>
	  	  <!--			footer-->
		<div class="row footerHO">
			<div class="col text-center">
				<p>2020 All Rights Reserved by Tekopi.</p>
			</div>
		</div>
<!--		akhir footer-->
	  

	      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>