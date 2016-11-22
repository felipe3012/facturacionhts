<!DOCTYPE HTML>
<html>
	<head>
		<title>Facturación HTS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar"><img src="images/avatar1.png" alt="" /></span>
							<h1>Help Technology and Service</h1>
							<p>Sistema de Facturación</p>
						</header>
						
						<h2>Login!</h2>
						<form method="post" action="controllers/auth/validar_login.php">
							<div class="field">
								<input type="email" name="email" id="email" placeholder="Email" required/>
							</div>
							<div class="field">
								<input type="password" name="password" id="password" placeholder="Contraseña" required />
							</div>
							<ul class="actions">
								<input type="submit" class="btn btn-primary btn-lg" >
							</ul>
						</form>

					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>