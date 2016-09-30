<?php namespace Vistas;

	$plantilla = new Plantilla();
	
	class Plantilla
	{
		
		public function __construct()
		{
			?>

				<!DOCTYPE html>
				<html lang="es">
				<head>
					<meta charset="UTF-8">
					<title>Wolf =D</title>
					<link rel="stylesheet" href="<?php echo URL; ?>">
				</head>
				<body>

			<?php
		}



		public function __destruct()
		{
			?>
				
				<footer>
					Wolf Footer
				</footer>
				<script src="<?php echo URL; ?>"></script>
				</body>
				</html>

			<?php
		}


	}


?>