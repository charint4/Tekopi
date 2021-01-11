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
				  <div class="col-lg-14 tableProduk text-center">
				  	<h2>Daftar Pelanggan</h2>
					<table class="table">
						<thead>
							<th scope="col">ID Pelanggan</th>
							<th scope="col">Nama Pelanggan</th>
							<th scope="col">Tempat Tanggal Lahir</th>
							<th scope="col">Alamat</th>
							<th scope="col">Email</th>
							<th scope="col">No HP</th>
							<th scope="col"> </th>
							<th scope="col"> </th>
						</thead>
						<tbody>
							<tr>
								<th>00001</th>
								<td>Rafif Ridho</td>
								<td>Surabaya, 24 Juli 2001</td>
								<td>KTT 3C N0. 31</td>
								<td>rafifridhoo@gmail.com</td>
								<td>085322850963</td>
								<td>

									<!-- Button trigger hapus -->
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hapusRecord">
									  Hapus
									</button>
								</td>
								<td>
									<!-- Button trigger update record -->
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateRecord">
									  Update
									</button>
								</td>
							</tr>
							<tr>
								<th>00002</th>
								<td>Aldo Fernanda Hadid</td>
								<td>Surabaya, 10  September 2000</td>
								<td>Jalan Sampin ITS No. 12</td>
								<td>aldoF@gmail.com</td>
								<td>0851232325</td>
								<td>

									<!-- Button trigger hapus -->
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hapusRecord">
									  Hapus
									</button>
								</td>
								<td>
									<!-- Button trigger update record -->
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateRecord">
									  Update
									</button>
								</td>
							</tr>
							<tr>
								<th>00003</th>
								<td>Izzulhaq Fawwaz</td>
								<td>Surabaya, 31  Januari 2000</td>
								<td>Jalan Samping ITS No. 13</td>
								<td>IqFawwaz@gmail.com</td>
								<td>085102944125</td>
								<td>

									<!-- Button trigger hapus -->
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hapusRecord">
									  Hapus
									</button>
									
								</td>
								<td>
									<!-- Button trigger update record -->
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateRecord">
									  Update
									</button>
								</td>
							</tr>
						</tbody>
					</table>
					  
					<!-- Button trigger New Record -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#newRecord">
								  New Record
								</button>
				  </div>
			  </div>
		  
			  
			  <!-- hapus -->
								<div class="modal fade" id="hapusRecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-primary">Hapus</button>
									  </div>
									</div>
								  </div>
								</div>
<!--			akhir hapus-->
			  <!-- updateRecord -->
								<div class="modal fade" id="updateRecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel7">Update Record</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body text-left">
										<form>
										  <div class="form-group">
											<label for="exampleInputEmail1">Nama Pelanggan</label>
											<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="inputStok">Alamat</label>
											<input type="email" class="form-control" id="inputStok" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="exampleInputDesk">Email</label>
											<input type="email" class="form-control" id="exampleInputDesk" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="exampleInputNoHp">No Hp</label>
											<input type="email" class="form-control" id="exampleInputNoHP" aria-describedby="emailHelp">
										  </div>
										</form>
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-primary">Simpan</button>
									  </div>
									</div>
								  </div>
								</div>
<!--			  akhir update record-->
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
									  <div class="modal-body text-left">
										<form>
										  <div class="form-group">
											<label for="exampleInputEmail1">Nama Pelanggan</label>
											<input type="email" class="form-control" id="exampleInput1" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
										  <div class="form-group">
											<label for="inputStok">Alamat</label>
											<input type="email" class="form-control" id="inputAlamat1" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="exampleInputDesk">Email</label>
											<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="exampleInputNoHp">No Hp</label>
											<input type="email" class="form-control" id="exampleInputNoHP2" aria-describedby="emailHelp">
										  </div>
										</form>
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-primary">Simpan</button>
									  </div>
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