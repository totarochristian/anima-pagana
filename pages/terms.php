<?php
	include '../php/functions/fc_terms.php';

	//non salva la cache e obbliga così a ricaricare la pagina
  header("Cache-Control: no-cache, must-revalidate");

	session_start();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Termini e condizioni di <?php echo BASE_URL_CUSTOM; ?></title>
    <!-- External elements inclusions -->
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Fontawesome library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End external elements inclusions -->
    <link rel="stylesheet" href="../css/main-styles.css?1111">
    <link rel="stylesheet" href="../css/scrollbar.css?1111">
    <link rel="shortcut icon" href="../assets/img/logo/logo_white.jpg" type="image/x-icon">
    <!---------------------BOOTSTRAP STYLE--------------------->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
		<!---------------------END BOOTSTRAP STYLE--------------------->

		<?php
			AggiungiGestionePrivacy();
			AggiungiGestioneMetaDati();
		?>

	</head>
	<body>
		<!---------------------GESTIONE CARICAMENTO PAGINA--------------------->
		<?php
			//Chiama la procedura che si occupa della crezione della pagina dei termini e delle condizioni
			CreaPaginaTerminiCondizioni();
		?>
		<!---------------------BOOTSTRAP SCRIPT--------------------->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
		<!---------------------END BOOTSTRAP SCRIPT--------------------->
	</body>
</html>