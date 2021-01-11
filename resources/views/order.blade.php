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
			@if (Route::has('login'))
				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto">
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
					@endauth
				</ul>
			</div>
			@endif 
	</nav>

	  
	  <div class="container">
	  	<div class="row justify-content-center">
			<div class="col-lg-12 history">
				<h2>&emsp; Daftar Belanja</h2>	
				<br>
				
				@foreach($tranList as $key => $tran)
				<div class="row justify-content-center">
					<div class="col-lg-10 col-xl-11 daftarBelanja">
						<div class="row">
							<div class="col-lg-4">
								<h3 class="pd">{{ $tran->tanggal_tran }}</h3>
							  <br>
							  <p>Total Belanja :</p>
							  <h5>Rp {{ $tran->harga_tran }}</h5>
							</div>
							<div class="vl"></div>
							<div class="col-lg-4">
									
								<p>Status Transaki: </p>
								<h5>{{ $tran->status_transaksi }}</h5>
								<p>Status Pembayaran: </p>
								<h5>{{ $tran->status_bayar }}</h5>
							</div>
							<div class="vl" ></div>
							<div class="col-lg-3">
								<p>Tipe Transaksi: </p>
								<h5>{{ $tran->kirim_tran }}</h5>
							  <p>Detail Transaksi :</p>
							  	<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal{{$tran->id_tran}}">
								  Detail
								</button>
							</div>
						</div>
				  </div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal{{$tran->id_tran}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
								<table class="table">
								<thead>
									<th scope="col">Nama Produk</th>
									<th scope="col">Harga Produk</th>
									<th scope="col">Jumlah</th>
									<th scope="col">Total</th>
								</thead>
								<tbody>
									@foreach($tranProdList as $key => $tranProd)
										@php ($total_harga = 0)
										@if($tranProd->id_tran ===  $tran->id_tran)
											<tr>
												<td>{{ $tranProd->nama_prod }}</td>
												<td>{{ $tranProd->harga_prod }}</td>
												<td>{{ $tranProd->jumlah }}</td>
												<td>{{ $tranProd->jumlah * $tranProd->harga_prod }}</td>
											</tr>
											@php ($total_harga += $tranProd->jumlah * $tranProd->harga_prod)
										@endif
									@endforeach
									<td> </td>
									<td> </td>
									<td>Total Harga</td>
									<td>{{ $total_harga }}</td>
								</tbody>
								</table>

								<p>Tipe Transaksi: </p>
								<h5>{{ $tran->kirim_tran }}</h5>
								<p>Alamat: </p>
								<h5>{{ $tran->alamat_kirim }}</h5>

							</div>
							<form method="POST" action="{{ route('tambahBuktiBayar') }}" enctype="multipart/form-data">
							@csrf
							<div class="modal-footer">
								<input type="hidden" class="form-control" name="id_tran" value="{{ $tran->id_tran }}" aria-describedby="emailHelp">
								@if ($tran->status_bayar=== "sudah diverifikasi")
								<img src="{{ asset('storage/bukti/'.$tran->bukti_bayar) }}" width="200" height="200">
								@else
									@if ($tran->bukti_bayar === NULL)
										Belum ada bukti bayar.
										
									@else
										<img src="{{ asset('storage/bukti/'.$tran->bukti_bayar) }}" width="200" height="200">
										
									@endif
										<input type="file" class="form-control-file" id="gambar_bukti" name="gambar_bukti">
										<button type="submit" class="btn btn-primary">Kirim Bukti Bayar</button>
								@endif
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Modal -->
				@endforeach
			</div>
		  </div>
		  
	  </div>
	  <br>
	  <br>
	  	  <!--			footer-->
		<div class="row footerHO">
			<div class="col text-center">
				<p>2021 All Rights Reserved by Tekopi.</p>
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