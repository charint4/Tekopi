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
    <link rel="stylesheet" href="stle.css">

	<title>
	Tekopi
	</title>
    
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6F4E37">
	@if (Route::has('login'))
                <div  >
                    @auth
                        <a href="{{ url('/karyawan/home') }}" class="text-sm text-white-700 " style="color : white;margin-left: 50px">Home</a>
                        <a href="{{ url('/karyawan/product') }}" class="text-sm text-gray-700 " style="color : white;margin-left: 50px">Products</a>
                        <a href="{{ url('/karyawan/storage') }}" class="text-sm text-gray-700 " style="color : white;margin-left: 50px">Storage</a>
                        <a href="{{ url('/karyawan/order') }}" class="text-sm text-gray-700 " style="color : white;margin-left: 50px">Order</a>
                        <a href="{{ url('/karyawan/order') }}" class="text-sm text-gray-700 " style="color : white;margin-left: 50px">Customer</a>
                        <a href="{{ url('/karyawan/payment') }}" class="text-sm text-gray-700 " style="color : white;margin-left: 50px">Payment</a>
						<a class="text-sm text-gray-700 " style="color : white;margin-left: 700px;" href="{{ route('logout') }}"
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
    <!-- akhir navbar -->
	  
	  	  <div class="container">
		  	<div class="row justify-content-center">
				<div class="col-lg-12 tableProduk text-center">
					<h2>Daftar Bahan Baku</h2>
					<table class="table">
						<thead>
							<th scope="col">ID Bahan</th>
							<th scope="col">Nama Barang</th>
							<th scope="col">Stok</th>
							<th scope="col"></th>
							<th scope="col"></th>
						</thead>
						<tbody>
							<tr>
								<th scope="col">0001</th>
								<td>Kopi Robusta</td>
								<td>100 Box</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hapusRecord">
									  Hapus
									</button>
								</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateRecord">
									  Update
									</button>
								</td>
							</tr>
							<tr>
								<th scope="col">0002</th>
								<td>Kopi Arabica</td>
								<td>20 Box</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hapusRecord">
									  Hapus
									</button>
								</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateRecord">
									  Update
									</button>
								</td>
							</tr>
							<tr>
								<th scope="col">0003</th>
								<td>Susu UHT</td>
								<td>50 Box</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hapusRecord">
									  Hapus
									</button>
								</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateRecord">
									  Update
									</button>
								</td>
							</tr>
							<tr>
								<th scope="col">0004</th>
								<td>Minuman Berkarbonasi</td>
								<td>10 Box</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hapusRecord">
									  Hapus
									</button>
								</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateRecord">
									  Update
									</button>
								</td>
							</tr>
							<tr>
								<th scope="col">0005</th>
								<td>Air</td>
								<td>10 Galon</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#hapusRecord">
									  Hapus
									</button>
								</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateRecord">
									  Update
									</button>
								</td>
							</tr>
						</tbody>
					</table>
					
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#newRecord">
						New Record
					</button>
					
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
<!--					akhir hapus-->
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
											<label for="inputHarga">Nama barang</label>
											<input type="email" class="form-control" id="inputHarga" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="inputStok">Stok</label>
											<input type="email" class="form-control" id="inputStok" aria-describedby="emailHelp">
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
										<form>
										  <div class="form-group">
											<label for="inputHarga">Nama barang</label>
											<input type="email" class="form-control" id="inputNamaBarang" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="inputStok">Stok</label>
											<input type="email" class="form-control" id="inputStok2" aria-describedby="emailHelp">
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
<!--					akhir new record-->
				</div>  
			</div>
	  	<!--			footer-->
		<div class="row footer">
			<div class="col text-center">
				<p>2020 All Rights Reserved by Tekopi.</p>
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