<?php
    include_once './session.php';
?>
<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Spatial by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="index.html">Spatial</a></strong> by Templated</h1>
				<nav id="nav">
					<ul>
                                                <li><a href="index.php">Domov</a></li>
						<li><a href="ambulante.php">Ambulante</a></li>
						<li><a href="razporedi.php">Razporedi</a></li>
                                                <li><a href="zdravniki.php">Zdravniki</a></li>
                                    <?php
                                        //če je prijavljen - naj bo link na logout, če ne login
                                         if ($_SESSION["user_id"] === 3)
                                        {   
                                            echo '<li><a href="logout.php">Odjava</a></li>';
                                        }
                                        else if(isset($_SESSION['doctor_id'])){
                                            echo '<li><a href="moja_narocila.php">Narocila</a></li>';
                                            echo '<li><a href="logout.php">Odjava</a></li>';
                                        }
                                        else if (isset($_SESSION['user_id'])) {
                                            echo '<li><a href="logout.php">Odjava</a></li>';
                                        }
                                        else {
                                            echo '<li><a href="login.php">Prijava</a></li>';
                                        }
                                    ?>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>