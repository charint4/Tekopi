<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    
  </head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tekopi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

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
						<a class="navbar-brand" href="{{ url('/home') }}" style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">
							<img src="../images/homepagePemilik/dedlen bgt.png" class="lgnavbar" alt=""/>
							Tekopi
						</a>
					</li>
				</ul>
			
				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto">
				@if (Route::has('login'))
					@auth
					<li class="nav-item">
						<a href="{{ url('/home') }}" class="text-sm text-white-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">HOME</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('/product') }}" class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">PRODUCTS</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('/order') }}" class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">ORDER</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('/cart') }}" class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">CART</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('/profilePelanggan') }}" class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">PROFILE</a>
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
					@else
					<li class="nav-item">
						<a href="{{ url('/register') }}" class="text-sm text-white-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">REGISTER</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('/login') }}" class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">LOGIN</a>
					</li>
					@endauth
					@endif

				</ul>
		
			</div>
	</nav>


        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
		        <img src="../images/homepage/dedlen bgt.png" class="logo" alt=""/>
		        <h1 class="display-4"><span>Ngopi</span> Ya <span>Tekopi!!</span></h1>
                @if (Route::has('login'))
                @auth
		        <a href="product" class="btn btn-primary tombol">Order Now!</a> 
                @else
                <a href="{{ route('register') }}" class="btn btn-primary tombol">Sign Up Now!</a> 
                @endauth
                @endif
            </div>
        </div>

        <br>
	<div class="container">
			<!--Info Panel-->
			<div class="row justify-content-center">
				<div class="col-lg-10 info-panel">
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
					<img src="../images/homepage/Kopi_Botol_Black_Coffee_Cold_Brew_250_ml.jpg" alt="Produk" class="img-fluid"/>

				</div>
				<div class="col-lg-5">
					<h3>Tersedia Berbagai <br><span>Rasa</span></h3>
					<p>Semua rasa yang kamu inginkan tersedia di sini</p>
					<a href="product" class="btn btn-primary tombol">Our Product</a>
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
						  <img src="../images/homepage/img3.jpg" alt="Testi1" class="figure-img img-fluid rounded-circle">
					  </figure>	
						<figure class="figure">
						  <img src="../images/homepage/hublu - ryu.JPG" alt="Testi2" class="figure-img img-fluid rounded-circle utama">
							<figcaption class="figure-caption">
							  <h5>Ryukazu Andara</h5>
								<p>Mahasiswa</p>
						  </figcaption>
					  </figure>
					<figure class="figure">
					  <img src="../images/homepage/img1.jpg" alt="Testi1" class="figure-img img-fluid rounded-circle">
					  </figure>	
					</div>
				</div>
			</section>

			<!--Akhir Testimoni	  -->
		
<!--			footer-->
		<div class="row footer">
			<div class="col text-center">
				<p>2021 All Rights Reserved by Tekopi.</p>
			</div>
		</div>
<!--		akhir footer-->
	</div>

    </body>
</html>
