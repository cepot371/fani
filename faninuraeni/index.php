<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
		<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
					  <strong>Perhatian!</strong> Mohon Cek Kembali Username dan Password Anda.
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>";
		}
		if($_GET['pesan']=="belummasuk"){
			echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
					  <strong>Perhatian!</strong> Username dan Password Anda Belum Terdaftar                                        					                   					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>";
		}
	}
	?>

	<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selamat Datang
    </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body clas>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

            <div class="card card-primary">
              <div class="card-header"><h4>Silahkan Masuk</h4></div>

              <div class="card-body">
               <form action="cek_login.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda .." required="required">
                            </div>
                        </div>

               <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                                    </div>
                                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda .." required="required">
                            </div>
                        </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                  <br/>
                    <div class="form-group">
                    <button type="reset" class="btn btn-danger btn-lg btn-block" tabindex="4">
                      Hapus
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Masuk sebagai siswa <a href="dashboardsiswa.php">SISWA</a>
            </div>
			<div><center>
			<a href="faq.php">FAQ</a></div></center>
        </div>
      </div>
    </section>
  </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
