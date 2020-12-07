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
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light .bg-light ">
    @if (Route::has('login'))
      <div class="container">
        @auth
        <a class="navbar-brand" href="{{ url('pemilik/home') }}">
            <img src="../images/homepagePemilik/dedlen bgt.png" class="lgnavbar" alt=""/>
            Tekopi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="{{ url('pemilik/home') }}">Home</a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Manage</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('pemilik/report') }}">Reports Yearly</a>
                        <a class="dropdown-item" href="{{ url('pemilik/monthReport') }}">Reports Monthly</a>
                        <a class="dropdown-item" href="{{ url('pemilik/listKaryawan') }}">Employee</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav"> 
                <li class="nav-item">
                    <div class="dropdown">
                        <div class="dropdown-toggle btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../images/homepagePemilik/manager.png" alt="pPlgn" width="41" height="41">
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ url('pemilik/profile') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
          </div>
        </div>
        @endauth
      </div>
    @endif
    </nav>
    <!-- akhir navbar -->
	  
	  
	  <div class="container">
	  	<div class="row justify-content-center">
			<div class="col-lg-12 history">
				<div class="row">
					<div class="col-lg-3 text-center fotonfrens">
						<img src="../images/homepagePemilik/manager.png" width="246" height="246" class="pp">
						<button type="button" class="btn tombolLogin" data-toggle="modal" data-target="#editAkun">
							&nbsp; &nbsp;Edit Profil&nbsp; &nbsp;
						</button>
					</div>
					<div class="col-lg-0">
						<div class="vlprofile"></div>
					</div>
				  <div class="col-lg-6 text-left profildiri">
						<br>
					  	<div class="row">
					  		<h5>Biodata Diri</h5>
					  </div>
					  <br>
						<div class="row">
						  <h6>nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h6>
						  <h6>Naufal Rafi Akbar Harahap</h6>
						</div>
					  <br>
					  <div class="row">
					    <h6>Jenis Kelamin     &nbsp; &nbsp; &nbsp;</h6>
					    <h6>Laki - Laki</h6>
					  </div>
					  <br>
					  	<div class="row">
					  		<h5>Kontak</h5>
					  </div>
					  <br>
					  <div class="row">
					  		<h6>Email &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; </h6>
						  	<h6>naufalrafi@gmail.com</h6>
					  </div>
					  <br>
					  <div class="row">
					  		<h6>Nomor Hp &emsp; &nbsp; &emsp; &emsp; &emsp; &emsp; </h6>
						  	<h6>085123981012</h6>
					  </div>
					</div>
				  <div class="col-lg-2 justify-content-center">
						<br>
						<button type="button" class="btn tombolhpsAkun" data-toggle="modal" data-target="#hapusAkun">
							 &nbsp; &nbsp; Hapus Akun&nbsp; &nbsp; 
					  </button>
					</div>
				</div>
			</div>  
			
		</div>
		  
		  <!-- hapus -->
								<div class="modal fade" id="hapusAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Menghapus</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">
										Yakin ingin menghapus Akun?
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
								<div class="modal fade" id="editAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel7">Edit Profil</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body text-left">
										<form>
										  <div class="form-group">
											<label for="exampleInputEmail1">Nama Karyawan</label>
											<input type="email" class="form-control" id="exampleInputNamaKar" aria-describedby="emailHelp">
										  </div>
										  <div class="form-group">
											<label for="exampleInputNoHp">Email</label>
											<input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
										  </div> <div class="form-group">
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
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	   <!--			footer-->
		<div class="row footerCek">
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
	  


