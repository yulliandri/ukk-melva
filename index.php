<!DOCTYPE html>
<html>
<head>
	<title>Foto Copy Watermelon</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
		/* Background gambar semangka */
		body {
			background-image: url('assets/wppink.jpg');
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 0;
		}

		.container {
			max-width: 600px;
		}

		.card {
			background-color: transparent; 
			border-radius: 15px;
			box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Bayangan lembut */
		}

		.card-body h3 {
			color: #d94f4f; 
			font-weight: bold;
		}

		.btn-primary {
			background-color: #ff6f91 ; /* Hijau segar */
			border: none;
		}

		.btn-primary:hover {
			background-color: #ff4e73;
		}

		.alert {
			background-color: rgba(255, 0, 0, 0.1);
			color: red;
			border: 1px solid red;
			padding: 10px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center mb-4">fotocopy pink</h3>
				<?php 
				if(isset($_GET['pesan']) && $_GET['pesan']=="gagal"){
					echo "<div class='alert text-center'>Username dan Password tidak sesuai!</div>";
				}
				?>
				<form method="post" action="cek_login.php">
					<div class="form-group mb-3">
						<label>Username</label>
						<input type="text" class="form-control" name="username" required>
					</div>
					<div class="form-group mb-3">
						<label>Password</label>
						<input type="password" class="form-control" name="password" required>
					</div>
					<div class="form-group">
						<button class="btn btn-primary form-control" type="submit">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs
