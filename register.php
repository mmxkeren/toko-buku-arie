<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Toko Buku Arie - Register</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Visual Admin Template
        http://www.templatemo.com/preview/templatemo_455_visual_admin
        -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
	    
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Toko Buku Arie</h1>
	        </header>

	        <?php
	        	include("koneksi.php");

	        	if(isset($_POST['register'])){

	        				$id_kasir     = $_POST['id'];
							$nama_kasir   = $_POST['nama'];
			        		$alamat_kasir = $_POST['alamat'];
			        		$telepon_kasir= $_POST['telepon'];
			        		$status       = $_POST['STATUS'];
			        		$username     = $_POST['username'];
			        		$password     = $_POST['password'];
			        		$status       = pengunjung;
			        		$akses        = 3;

			        		//insert data
			        		$sql = "INSERT INTO kasir VALUES ('$id_kasir','$nama_kasir','$alamat_kasir','$telepon_kasir','$status', '$username','$password','$akses')";

			        		if ($koneksi->query($sql) === TRUE) {
			        			session_start();
			        			$_SESSION['NAMA']=$nama_kasir;
								$_SESSION['STATUS']=$status;
								$_SESSION['USERNAME']=$username;
								$_SESSION['AKSES']="guest";
			        			header("Location: guest.php");
			        		} else {
			        			
			        		}$koneksi->close();
					
	        	}
			?>
	        <form action="" method="post" class="templatemo-login-form">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        	
		              	<input type="text" name="username" class="form-control" placeholder="username">           
		          	</div>	
	        	</div>

	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        	
		              	<input type="text" name="id" class="form-control" placeholder="id">           
		          	</div>	
	        	</div>

	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        	
		              	<input type="password" name="password" class="form-control" placeholder="new password">           
		          	</div>	
	        	</div>

	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        	
		              	<input type="password" name="password2" class="form-control" placeholder="confirm password">
		          	</div>	
	        	</div>

	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        	
		              	<input type="text" name="nama" class="form-control" placeholder="nama">           
		          	</div>	
	        	</div>

	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        	
		              	<input type="text" name="alamat" class="form-control" placeholder="alamat">           
		          	</div>	
	        	</div>

	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        	
		              	<input type="text" name="telepon" class="form-control" placeholder="telepon">           
		          	</div>	
	        	</div>



	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Remember me</label>
				    </div>				    
				</div>
				
				<div class="form-group">
					<button type="submit" name="register" class="templatemo-blue-button width-100">Register</button>
				</div>
	        </form>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Registered user? <strong><a href="login.php" class="blue-text">Sign in now!</a></strong></p>
		</div>
	</body>
</html>