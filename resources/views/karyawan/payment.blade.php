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
                        <a href="{{ url('/karyawan/customer') }}" class="text-sm text-gray-700 " style="color : white;margin-left: 50px">Customer</a>
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
				<h2>Daftar Pembayaran</h2>
				<table class="table">
					<thead>
						<th scope="col">ID Pembayaran</th>
						<th scope="col">ID Pemesanan</th>
						<th scope="col">ID Karyawan</th>
						<th scope="col">Metode Pembayaran</th>
						<th scope="col">Nominal</th>
						<th scope="col">Bukti Pembayaran</th>
						<th scope="col">Status Pembayaran</th>
					</thead>
					<tbody>
						<tr>
							<th scope="col">000003</th>
							<td>000003</td>
							<td>001</td>
							<td>Transfer</td>
							<td>Rp35.000</td>
							<td>
								<img src="cthBktPmbyrn.png" width="387" height="471">
							</td>
						  <td>
								<form>
										<div class="form-group">
										  <select class="form-control" id="exampleFormControlSelect2">
											  <option>Belum Lunas</option>
											  <option>Lunas</option>
											</select>
										</div>
								</form>
						  </td>
						</tr>
						<tr>
							<th scope="col">000002</th>
							<td>000002</td>
							<td>002</td>
							<td>Transfer</td>
							<td>Rp17.500</td>
							<td>
								<img src="cthBktPmbyrn.png" width="387" height="471">
							</td>
							<td>
								<form>
										<div class="form-group">
										  <select class="form-control" id="exampleFormControlSelect3">
											  <option>Belum Lunas</option>
											  <option>Lunas</option>
											</select>
										</div>
								</form>
							</td>
						</tr>
						<tr>
							<th scope="col">000001</th>
							<td>000001</td>
							<td>000001</td>
							<td>0003</td>
							<td>Rp20.000</td>
							<td>
								<img src="cthBktPmbyrn.png" width="387" height="471">
							</td>
							<td>
								<form>
										<div class="form-group">
										  <select class="form-control" id="exampleFormControlSelect4">
											  <option>Belum Lunas</option>
											  <option>Lunas</option>
											</select>
										</div>
								</form>
							</td>
						</tr>
					</tbody>
				</table>
			</div>  
		</div>
		  
		  
	  	  	<!--			footer-->
		<div class="row footerCek">
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