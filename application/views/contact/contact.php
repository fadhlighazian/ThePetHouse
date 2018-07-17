<!DOCTYPE html>
<html>
	<head>
		<?php echo $js; echo $css; ?>
		<title>ThePetHouse</title>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <link href='//fonts.googleapis.com/css?family=Raleway:600,900,400|Roboto:300,700' rel='stylesheet'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
		
        <style>
				body {
							margin:0;
							padding:0;
							padding-top:70px;
							height:100%;
							font-family: "Lato", sans-serif;
							color: white;
					}
			.mySlides {display: none}
			.stores{
				width:100%;
				background-color:#487eb0;
			} 
			.testi{
				padding:50px 0;
			}

			/* Start Style for MAP */
			.dn {
					display: none;
				}
				a:link {
					color: #61bb46;
					text-decoration: none;
				}
				a:hover {
					color: #61bb46;
					text-decoration: none;
				}
				a:visited {
					color: #61bb46;
					text-decoration: none;
				}

				/* Computer */
				.grid_1 { width: 6.5%; } 
				.grid_2 { width: 15%; } 
				.grid_3 { width: 23.5%; } 
				.grid_4 { width: 32%; } 
				.grid_5 { width: 40.5%; }
				.grid_6 { width: 49%; } 
				.grid_7 { width: 57.5%; } 
				.grid_8 { width: 66%; } 
				.grid_9 { width: 74.5%; } 
				.grid_10 { width: 83%; } 
				.grid_11 { width: 91.5%; } 
				.grid_12 { width: 100%; } 

				.grid_1,
				.grid_2,
				.grid_3,
				.grid_4,
				.grid_5,
				.grid_6,
				.grid_7,
				.grid_8,
				.grid_9,
				.grid_10,
				.grid_11,
				.grid_12 {
					margin: 0 2% 1% 0;
					float: left;
					display: block;
				}

				.alpha{margin-left:0;}
				.omega{margin-right:0;}

				.container{
					width: 90%; /*width: 1000px;*/
					max-width: 1000px;
					margin: auto;
					
				}

				.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:after{clear:both;content:' ';display:block;font-size:0;line-height:0;visibility:hidden;width:0;height:0}* html .clearfix,*:first-child+html .clearfix{zoom:1}

				/* Mobile */
				@media screen and (max-width : 480px) {

				.grid_1,
				.grid_2,
				.grid_3,
				.grid_4,
				.grid_5,
				.grid_6,
				.grid_7,
				.grid_8,
				.grid_9,
				.grid_10,
				.grid_11,
				.grid_12 {
					width:100%;
				}

				}

				/* Slide 5 */
				#slide5 {
					padding: 20px 0 100px 0;
					background-color: #f7f5f2;
				}
				.contactmap {
					background: #fb5b21;
					border-radius: 4px;
				}
				#slide5 h2 {
					margin: 13px 0 0 30px;
					color: #fff;
					font-size: 1.5em;
				}
				#slide5 p {
					line-height: 150%;
					color: #fff;
					padding: 5px 0 0 30px;
				}
				.contactype {
					position: relative;
					cursor: pointer;
					color: #fff;
					text-shadow: 0 1px 1px rgba(0,0,0,0.1);
					text-align: center;
					background-color: #c3c3c3;
					border-radius: 5px;
					height: 100px;
					float: left;
					transition: all .3s ease-in;
				}
				.contactype p {
					width: 100%;
					text-align: center;
					position: absolute;
					bottom: -7.5px;
					left: 0;
					padding: 0 !important;
				}
				.contactype:hover,.contactype.active {
					background-color: #f48022;
				}
				.contactype div {
					font-size: 4em;
					position: absolute;
					width: 100%;
					left: 0;
					top: 0;
					transition: all .2s ease-in;
				}
				.contactmap .grid_8.omega .grid_6 {
					margin: 40px 0 0 220px;
				}
				.contactmap .grid_8.omega .grid_6 .btn {
					margin-top: 10px;
					border: 1px solid rgba(0,0,0,.1);
					margin-left: 0;
				}
				.bus-point {
					display: block;
					margin-bottom: 3px;
				}
				#contact-bus .grid_6.omega,
				#contact-car .grid_6.omega {
					height: 200px;
					overflow-x: hidden;
					position: relative;
				}
				.contactmap .information span {
					font-weight: bold;
				}
				#contact-phone .grid_6.omega {
					font-size: 2.5em;
					margin-top: 100px;
				}
				#contact-mail .grid_6.omega {
					padding-top: 40px;
				}
				.btn {
					display: inline-block;
					padding-left: 56px;
					color: #626263;
					box-shadow: 0 1px 3px rgba(0,0,0,0.1);
					background-color: #fff;
					padding: 16px 24px 17px 24px;
					font-size: 13px;
					font-weight: bold;
					text-transform: uppercase;
					letter-spacing: 0.2em;
					text-shadow: none;
					line-height: 20px;
					text-align: center;
					border-radius: 5px;
					margin-left: 2.5em;
				}
				.btn span {
					font-size: 1em;
				}
				footer {
					position: relative;
					text-align: center;
					display: block;
				}
				footer hr {
					height: 0;
					width: 100%;
					display: block;
					position: absolute;
					background-color: #bbb;
					top: 40%;
					left: 0;
					z-index: 1;
				}
				.btn2 {
					color: #626263;
					background: #f7f5f2;
					border: 1px solid #bbb;
					box-shadow: 0 1px rgba(0,0,0,0);
					padding: 14px 24px;
					font-size: 13px;
					font-weight: bold;
					text-transform: uppercase;
					letter-spacing: 0.2em;
					border-radius: 5px;
					display: inline-block;
					line-height: 20px;
					text-align: center;
					position: relative;
					z-index: 2;
				}
				.contactmap {
					height: 300px;
					margin-bottom: 10%;
				}
				.contactmap .grid_8.omega {
					background-color: #fff;
					height: 100%;
					display: block;
					overflow: hidden;
					margin: 0;
					padding: 0;
				}
				#contact-car .grid_10.omega {
					margin: 0 auto;
					display: block;
				}
				#map_canvas {
					margin: 0;
					padding: 0;
					height: 100%;
				}
				.submit {
					display: none;
					margin: 0 auto;
					width: auto;
					font-size: 16px;
					font-weight: 400;
					color: #fff;
					padding: 15px 21px;
					border: 1px solid rgba(255,255,255,0.4);
					background: transparent;
					border-radius: 9px;
					text-decoration: none;
					white-space: nowrap;
					transition: border-color .4s;
				}
				.submit:hover {
					color: #fff;
					border-color: #fff;
				}
				.callus {
					position: absolute;
					bottom: 0;
					left: 50%;
					width: 240px;
					margin-left: -155px;
					border-radius: 5px 5px 0 0;
					background-color: rgba(255,255,255,.8);
					color: #000;
					line-height: 1.5em;
					font-size: 1.5em;
					z-index: 99;
					padding: 10px 35px;
					text-align: center;
					animation-delay: 4s;
				}
				.callus:hover {
					background-color: #fff;
				}


				#contact-bikeClick.active div {
					font-size: 10em;
					color: #c3c3c3;
					top: 125px;
					left: -115px;
					-webkit-perspective: 10em;
					-moz-perspective: 10em;
					-ms-perspective: 10em;
					perspective: 10em;
					transform: rotateY(180deg);
					transform-style: preserve-3d;
				}
				#contact-busClick.active div {
					font-size: 10em;
					color: #c3c3c3;
					top: 125px;
					left: 25px;
				}
				#contact-carClick.active div {
					font-size: 10em;
					color: #c3c3c3;
					top: 125px;
					left: 200px;
				}
				#contact-bikeClick.active div {
					left: -100px !important;
				}
				#contact-phoneClick.active div {
					left: -300px !important;
				}
				#contact-mailClick.active div {
					left: -440px !important;
				}
				#contact-mailClick.active div {
					font-size: 10em;
					color: #c3c3c3;
					top: 145px;
					left: -440px;
				}
				#contact-phoneClick.active div {
					font-size: 10em;
					color: #c3c3c3;
					top: 145px;
					left: -315px;
				}
			/* END Style for MAP */
		</style>
	</head>
	
<body style="background-color: #490570">
	<?php
		echo $header;
	?>

<!--GoogleMaps-->

<h1 style="text-align:center; margin:20px 0;"><Strong>Locate Us On Map</Strong></h1>

 <div style="background-color: #490570" class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		<div class="content grid_12 contactmap" id="contact-map">
			<div class="grid_4">
				<h2>CONTACT</h2><br>
				<p class="information"><span class="icon-location"> ADRESS: </span> <br> Jalan Layar Raya No.11, Kelapa Dua Tangerang, Banten 15810 <br>INDONESIA   </p>
				<p class="information"><span class="icon-phone-2"> TELEPHONE: </span><br> CS1 : 087880186464 (Fadhli) <br>CS2 : 082299002222 (Damar)</p>
				
				<div class="clear"></div>
			</div>
			<div class="grid_8 omega">
				<div id="map_canvas">
                    <section  style=" margin-left:5   px;" id="cd-google-map">
                    <div id="google-container"></div>
                    <div id="cd-zoom-in"></div>
                    <div id="cd-zoom-out"></div>
	                </section>
                </div>
			</div>
		</div>

        <h1 style="text-align:center; margin:20px 0;"><Strong>Contact US</Strong></h1>

		<div class="content grid_12 contactmap dn" id="contact-mail">
			<div class="grid_4">
				<h2>E-MAIL</h2><br>
				<p class="information"><span class="icon-location"> Email ADRESS: </span> <br> support@company.com <br><br>
                   <span class="icon-location"> Customer Service Email: </span> <br>CS1: ghazian.fadhli@student.umn.ac.id <br>CS2: suluh.damar@student.umn.ac.id <br>CS3: alvyn.lianto@student.umn.ac.id <br>CS4: octavianus.terry@student.umn.ac.id</p>
			</div>
			<div class="grid_8 omega">
				<div class="grid_6 omega"><a href="mailto:mail@loremipsum.com?Subject=Hello" class="btn">support@company.com</a></div>
			</div>
		</div>
		<div class="clear"></div>
		<footer class="content grid_12">
			<div class="btn2">ThePetHouse &copy; Copyright</div>
			<hr/>
		</footer>
		<div class="clear"></div>
	</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<!--GoogleMaps-->


	<?php echo $footer;?>

    	<script >
			$('.js-tilt').tilt({
				scale: 1.1
			})

		</script>

</body>
</html>

	