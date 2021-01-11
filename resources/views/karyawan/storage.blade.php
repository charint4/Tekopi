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
						<a class="navbar-brand" href="{{ url('karyawan/home') }}" style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">
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
						<a href="{{ url('karyawan/home') }}" class="text-sm text-white-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">HOME</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('karyawan/product') }}" class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">PRODUCT</a>
					</li>
					<li class="nav-item">
						<a  class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);" href="{{ url('karyawan/storage') }}">STORAGE</a>					
					</li>
					<li class="nav-item">
						<a  class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);" href="{{ url('karyawan/payment') }}">ORDER</a>
					</li>
					<li class="nav-item">
						<a  class="text-sm text-gray-700 " style="margin-left: 50px; color: black!important;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);" href="{{ url('karyawan/profile') }}">PROFILE</a>
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
				<div class="col-lg-12 tableProduk text-center">
					<h2>Daftar Bahan Baku</h2>
					<table class="table">
						<thead>
							<th scope="col">No.</th>
							<th scope="col">Nama Barang</th>
							<th scope="col">Stok</th>
							<th scope="col"></th>
							<th scope="col"></th>
						</thead>
						<tbody>
							@foreach($bahanList as $key => $bahan)
							<tr>
								<th scope="row" >{{ $key + 1 }}</th>
								<td>{{ $bahan->nama_bahan }}</td>
								<td>{{ $bahan->stok_bahan }}</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hapusRecord{{$bahan->id_bahan}}">
									  Hapus
									</button>
								</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateRecord{{$bahan->id_bahan}}">
									  Update
									</button>
								</td>
							</tr>


							<!-- hapus -->
							<div class="modal fade" id="hapusRecord{{$bahan->id_bahan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Menghapus</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">
										Yakin ingin menghapus record?
									  </div>
									  <form method="POST" action="{{ route('hapusStorage') }}">
										@csrf
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
											<input type="hidden" class="form-control" name="id_bahan" value="{{ $bahan->id_bahan }}" aria-describedby="emailHelp">
											<button type="submit" class="btn btn-primary">Hapus</button>
										</div>
									  </form>
									</div>
								  </div>
								</div>
<!--					akhir hapus-->
								  <!-- updateRecord -->
								<div class="modal fade" id="updateRecord{{$bahan->id_bahan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel7">Update Record</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body text-left">
									  <form method="POST" action="{{ route('updateStorage') }}">
										@csrf
										  <div class="form-group">
											<label for="inputStok">Stok</label>
											<input type="text" class="form-control" value="{{ $bahan->stok_bahan }}" name="stok_bahan" id="inputStok" aria-describedby="emailHelp">
										  </div>
										
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" class="form-control" name="id_bahan" value="{{ $bahan->id_bahan }}" aria-describedby="emailHelp">
										<button type="submit" class="btn btn-primary">Simpan</button>
									  </div>
									  </form>
									</div>
								  </div>
								</div>
<!--			  akhir update record-->

							@endforeach
						</tbody>
					</table>
					
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#newRecord">
						New Record
					</button>
					
					 
<!--					new record-->
					<div class="modal fade" id="newRecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel1">New Record</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body text-left">
									  <form method="POST" action="{{ route('tambahStorage') }}">
										@csrf
										  <div class="form-group">
											<label for="inputHarga">Nama barang</label>
											<input type="text" class="form-control" name="nama_bahan" id="inputNamaBarang" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="inputStok">Stok</label>
											<input type="text" class="form-control" name="stok_bahan" id="inputStok2" aria-describedby="emailHelp">
										  </div>
										
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary">Simpan</button>
									  </div>
									  </form>
									</div>
								  </div>
								</div>
<!--					akhir new record-->
				</div>  
			</div>
	  	<!--			footer-->
		<div class="row footer">
			<div class="col text-center">
				<p>2021 All Rights Reserved by Tekopi.</p>
			</div>
		</div>
<!--		akhir footer-->
	  </div>
	  
	  	  
	  
	  
	  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>