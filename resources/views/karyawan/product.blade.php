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
	 		<div class="col-lg-16 tableProduk text-center">
			<h2>Daftar Produk</h2>
			<br>
				<table class="table text-center align-content-center" >
					  <thead>
						<tr>
							  <th scope="col">ID Produk</th>
							  <th scope="col">Produk</th>
							  <th scope="col">Nama Produk</th>
							  <th scope="col">Harga</th>
							  <th scope="col">Stok</th>
							  <th scope="col">Bahan</th>
							  <th scope="col">Deskripsi</th>
							  <th scope="col"></th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  	<th scope="row" >001</th>
							<td ><img src="Produk1.jpg" width="64" height="62"></td>
							<td>Produk 1</td>
							<td>Rp10.000</td>
							<td>100</td>
							<td>
								<li>Kopi Arabica</li>
								<li>Susu UHT</li>
								<li>Minuman Berkarbonasi</li>
							</td>
							<td>Lorem ipsum dolor sit amet.</td>
							<td>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
								  Hapus
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
							</td>
						</tr>
						<tr>
							<th scope="row">002</th>
							<td><img src="produk 2.jpg" width="64" height="64"></td>
							<td>Produk 2</td>
							<td>Rp12.500</td>
							<td>80</td>
							<td>
								<li>Kopi Robusta</li>
								<li>Susu UHT</li>
							</td>
							<td>Lorem ipsum dolor sit amet.</td>
							<td>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
								  Hapus
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
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
							</td>
						</tr>
						<tr>
							<th scope="row">003</th>
							<td><img src="produk3.jpg" width="64" height="64"></td>
							<td>Produk 3</td>
							<td>Rp15.000</td>
							<td>90</td>
							<td>
								<li>Kopi Arabica</li>
								<li>Susu UHT</li>
							</td>
							<td>Lorem ipsum dolor sit amet.</td>
							<td>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
								  Hapus
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
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
							</td>
						</tr>
						<tr>
							<th scope="row">004</th>
							<td><img src="produk3.jpg" width="64" height="64"></td>
							<td>Produk 4</td>
							<td>Rp17.500</td>
							<td>90</td>
							<td>
								<li>Kopi Arabica</li>
								<li>Susu UHT</li>
							</td>
							<td>Lorem ipsum dolor sit amet.</td>
							<td>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
								  Hapus
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel4">Modal title</h5>
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
							</td>
						</tr>
						<tr>
						  	<th scope="row" >005</th>
							<td ><img src="Produk1.jpg" width="64" height="62"></td>
							<td>Produk 5</td>
							<td>Rp13.000</td>
							<td>100</td>
							<td>
								<li>Kopi Arabica</li>
								<li>Susu UHT</li>
								<li>Minuman Berkarbonasi</li>
							</td>
							<td>Lorem ipsum dolor sit amet.</td>
							<td>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
								  Hapus
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel5">Modal title</h5>
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
							</td>
						</tr>
						<tr>
							<th scope="row">006</th>
							<td><img src="produk 2.jpg" width="64" height="64"></td>
							<td>Produk 6</td>
							<td>Rp20.000</td>
							<td>80</td>
							<td>
								<li>Kopi Robusta</li>
								<li>Susu UHT</li>
							</td>
							<td>Lorem ipsum dolor sit amet.</td>
							<td>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
								  Hapus
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel6">Modal title</h5>
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
							</td>
						</tr>
					  </tbody>
				</table>
				<br>
				
				<!-- Button trigger modal -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#newmenu">
								  Menu Baru
								</button>

								<!-- Modal -->
								<div class="modal fade" id="newmenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel7">Menu Baru</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body text-left">
										<form>
										  <div class="form-group">
											<label for="exampleInputEmail1">Nama Produk</label>
											<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="exampleFormControlFile1">Gambar Produk</label>
											<input type="file" class="form-control-file" id="exampleFormControlFile1">
										  </div>
										  <div class="form-group">
											<label for="inputHarga">Harga</label>
											<input type="email" class="form-control" id="inputHarga" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="inputStok">Stok</label>
											<input type="email" class="form-control" id="inputStok" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="exampleFormControlSelectBahan">Bahan</label>
											<select multiple class="form-control" id="exampleFormControlSelect2">
											  <option>Kopi Arabica</option>
											  <option>Kopi Robusta</option>
											  <option>Susu UHT</option>
											  <option>Minuman Berkarbonasi</option>
											  <option>Air</option>
											</select>
										  </div>
										  <div class="form-group">
											<label for="exampleInputDesk">Deskripsi</label>
											<input type="email" class="form-control" id="exampleInputDesk" aria-describedby="emailHelp">
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