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

	<div class="container">
	  	<div class="row justify-content-center">
			<div class="col-lg-12 tableProduk text-center">
				<h2>Daftar Karyawan</h2>
				<table class="table">
					<thead>
						<th scope="col">No.</th>
						<th scope="col">Nama Karyawan</th>
						<th scope="col">Email</th>
						<th scope="col">No Hp</th>
						<th scope="col"> </th>
						<th scope="col"> </th>
					</thead>
					<tbody>
						@foreach($karyawanList as $key => $karyawan)
						<tr>
						  	<th scope="row" >{{ $key + 1 }}</th>
							<td>{{ $karyawan->nama_kar }}</td>
							<td>{{ $karyawan->email_kar }}</td>
							<td>{{ $karyawan->no_hp_kar }}</td>
							<td>
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hapusRecord{{$karyawan->id_kar}}">
									  Hapus
									</button>
							</td>
							<td>
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateRecord{{$karyawan->id_kar}}">
									  Update
									</button>
							</td>
						</tr>

						<!-- hapus -->
							<div class="modal fade" id="hapusRecord{{$karyawan->id_kar}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
									<form method="POST" action="{{ route('hapusKaryawan') }}">
									@csrf
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<input type="hidden" class="form-control" name="id_kar" value="{{ $karyawan->id_kar }}" aria-describedby="emailHelp">
										<input type="hidden" class="form-control" name="email_kar" value="{{ $karyawan->email_kar }}" aria-describedby="emailHelp">
										<button type="submit" class="btn btn-primary">Hapus</button>
									</div>
									</form>
								</div>
								</div>
							</div>
						<!-- akhir hapus -->
						<!-- updateRecord -->
							<div class="modal fade" id="updateRecord{{$karyawan->id_kar}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel7">Update Record</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<div class="modal-body text-left">
									<form method="POST" action="{{ route('updateKaryawan') }}">
									@csrf
										<div class="form-group">
										<label for="exampleInputEmail1">Nama Karyawan</label>
										<input type="ematextil" class="form-control" name="nama_kar" value="{{ $karyawan->nama_kar }}" id="exampleInputEmail1" aria-describedby="emailHelp">
										</div>
										<div class="form-group">
										<input type="hidden" class="form-control" name="email_kar2" value="{{ $karyawan->email_kar }}" id="exampleInputDesk" aria-describedby="emailHelp">
										</div>
										<div class="form-group">
										<label for="exampleInputNoHp">No Hp</label>
										<input type="text" class="form-control" name="no_hp_kar" value="{{ $karyawan->no_hp_kar }}" id="exampleInputNoHP" aria-describedby="emailHelp">
										</div>
										<input type="hidden" class="form-control" name="id_kar" value="{{ $karyawan->id_kar }}" aria-describedby="emailHelp">
										{{-- <input type="hidden" class="form-control" name="email_kar" value="{{ $karyawan->email_kar }}" aria-describedby="emailHelp"> --}}
									
									</div>
									<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
									</form>
								</div>
								</div>
							</div>
						<!-- akhir update record -->


						@endforeach

					</tbody>
				</table>
				<br>
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#newRecord">
								  New Record
								</button>
			</div>
		</div>
		

			  <!-- newRecord -->
								<div class="modal fade" id="newRecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel0">New Record</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <form method="POST" action="{{ route('registerKaryawan') }}">
                        				@csrf
											<div class="modal-body text-left">
												<div class="form-group">
													<label for="nama_kar">Nama Karyawan</label>
													<input type="text" class="form-control" id="nama_kar" name="nama_kar" aria-describedby="emailHelp">
												</div>
												<div class="form-group">
													<label for="email_kar">Email</label>
													<input type="email" class="form-control" id="email_kar" name="email_kar"  aria-describedby="emailHelp">
												</div>
												<div class="form-group">
													<label for="no_hp_kar">No Hp</label>
													<input type="text" class="form-control" id="no_hp_kar" name="no_hp_kar"  aria-describedby="emailHelp">
												</div>
												<div class="form-group" style="display: none">
												<!-- <div class="form-group"> -->
													<label for="password">Password</label>
													<input type="password" class="form-control" id="password" name="password"  value="12345678" aria-describedby="emailHelp">
												</div>
												<div class="form-group" style="display: none">
												<!-- <div class="form-group"> -->
													<label for="alamat">Alamat</label>
													<input type="alamat" class="form-control" id="alamat" name="alamat"  value="address not filled" aria-describedby="emailHelp">
												</div>
												<div class="form-group" style="display: none">
												<!-- <div class="form-group"> -->
													<label for="login_type">Login Type</label>
													<input type="text" class="form-control" id="login_type" name="login_type"  value="2" aria-describedby="emailHelp">
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
<!--			  akhir new record-->
		
		
		<!--			footer-->
		<div class="row footerCek">
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