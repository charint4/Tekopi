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
	<link rel="stylesheet" href="../css/stleProduk.css">
	<title>
	Tekopi
	</title>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6F4E37">
	@if (Route::has('login'))
                <div  >
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-white-700 " style="color : white;margin-left: 50px">Home</a>
                        <a href="{{ url('/product') }}" class="text-sm text-gray-700 " style="color : white;margin-left: 50px">Products</a>
                        <a href="{{ url('/order') }}" class="text-sm text-gray-700 " style="color : white;margin-left: 50px">Order</a>
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
    @foreach($produkList as $key => $produk)
	  <div class="container">
		 	 <div class="row justify-content-center">
				<div class="col-12 info-produk">
				  <div class="row">
						<div class="col-4">
							<img src="{{ asset('storage/produk/'.$produk->gambar_prod) }}" alt="prod1" width="373" height="367" class="img-thumbnail img-fluid">
							<h3>{{ $produk->nama_prod }}</h3>
							<h4>Rp {{ $produk->harga_prod }}</h4>
							<p>{{ $produk->deskripsi_prod }}</p>
							<div class="buy">
                <button type="button" class="btn btn-success  align-content-center tombolBuy" data-toggle="modal" data-target="#tambahCart{{$produk->id_prod}}">Buy</button>
							</div>
						</div>

				</div>
			</div>
	  </div>


    <div class="modal fade" id="tambahCart{{$produk->id_prod}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Tambah ke keranjang</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body text-left">
									  <form method="POST" action="{{ route('tambahCart') }}">
										@csrf
										  <div class="form-group">
											<label for="jumlah">Jumlah</label>
											<input type="text" class="form-control" name="jumlah" id="jumlah" aria-describedby="emailHelp">
										  </div>
										
									  </div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
											<input type="hidden" class="form-control" name="id_prod" value="{{ $produk->id_prod }}" aria-describedby="emailHelp">
										  <button type="submit" class="btn btn-primary">Tambah</button>
										</div>
									  </form>
									</div>
								</div>
			</div>
    @endforeach
	  
	  
	  <!--			footer-->
		<div class="row footer">
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
	
	
