<?php
$html = '
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>CLUB DE LAS PATITAS FELICES</title>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
		<style>
	      body {
	        font-family: "Lato", sans-serif;
	      }
	    </style>
	</head>
	<body style="min-width: 600px; max-width: 600px; border:1px solid #ccc; margin:auto auto; font-size: 18px;	">
		<div style="clear:both;background:#881C9B;">
			<h1 style="margin:0px;padding:30px;text-align: center;color:#fff;">
				<span style="font-size: 44px;">¡FELICIDADES,</span><br>
				<span style="font-size: 26px;">TE HAS UNIDO AL CLUB!</span>
			</h1>
		</div>
		<section style="text-align: center;">
			<img src="'.$http.$_SERVER["HTTP_HOST"].'/landing/img/logo_patitas.png" alt="" width="25%">
			<div style="margin: auto; width: 70%; text-align: justify; padding-bottom:10px;color:#757575;">
				<p>Es una familia creada con la finalidad de brindar los mejores servicios y beneficios tanto para ustedes como para sus mascotas.
				</p>
				<p style="text-align: center;">
					<p>Comparte con tus amigos</p><br>
                    <a 
                        href="'.$link.'"
                        style="
                            padding: 10px;
                            background: #881C9B;
                            color: #fff;
                            font-weight: 400;
                            font-size: 17px;
                            font-family: Roboto;
                            border-radius: 3px;
                            border: solid 0px trnasparent;
                            display: block;
                            max-width: 300px;
                            margin: 0px auto;
                            text-align: center;
                            text-decoration: none;
                        "
                    >Picale AQUÍ</a>
                </p>
				<span>Atentamente;</span><br><br>	
				<img src="'.$http.$_SERVER["HTTP_HOST"].'/landing/img/logo-kmimos_120x30.png" alt="">
			</div>
			<br>
			<div style="color:#fff;width: 70%; text-align: justify; padding:15px 60px 15px 60px; background:#881C9B; margin:auto;">
				<p>Recuerda que por cada uno de tus referidos que reserve una noche con kmimos, recibir&aacute;s $150 de regalo en reservaciones.</p>
			</div>
			 <img style="padding:0px; margin-bottom: -10px;" src="'.$http.$_SERVER["HTTP_HOST"].'/landing/img/pendiente-01.jpg" width="100%">
			<img style="padding:0px; margin-bottom: -10px;" src="'.$http.$_SERVER["HTTP_HOST"].'/landing/img/fondo-paisaje.jpg" width="100%">

			<div style="padding:20px;font-size: 22px; text-align: center;color:#fff; background: #00b190; ">
				<span>La mascota se hospeda en la propia casa de cuidadores certificados</span>
			</div>

		</section>
		<div style="padding:40px;font-size: 22px; text-align: center;color:#fff; background: #00D8B5; ">
			<span>&iquest;YA CONOCES KMIMOS? Te invitamos</span>
			<span>a ingresar a www.kmimos.com.mx</span>
		</div>
	</body>
	</html>
';
