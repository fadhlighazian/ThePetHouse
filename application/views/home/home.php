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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
		<style>
				body {
							margin:0;
							padding:0;
							padding-top: 70px;
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

			.card:hover {
   			 box-shadow: 16px 8px 16px 5px rgba(0,0,0,0.2);
			}

			.card {
			box-shadow: 0 8px 8px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
			
			}

		
		

		
		</style>
	</head>
	
<body style="background-color: #490570">
	<?php
		echo $header;
	?>
<div>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">

		<div class="item active">
			<img src=<?php echo base_url('assets/images/shop.jpeg');?> alt="Los Angeles" style="width:100%; height: 768px;">
			<div class="carousel-caption">
			<h3 style="font-size:80px; "><Strong>Our Principal Store in Tangerang</Strong></h3>
			<p style="font-size:25px; font-style: oblique;">Tangerang is always so much fun!</p>
			</div>
		</div>

		<div class="item">
			<img src=<?php echo base_url('assets/images/dog.jpg');?> alt="Chicago" style="width:100%; height: 768px;">
			<div class="carousel-caption">
			<h3 style="font-size:80px; ="><Strong>Pet Grooming</Strong></h3>
			<p style="font-size:25px; font-style: oblique;">Our services of grooming is Best of The Best</p>
			</div>
		</div>
		
		<div class="item">
			<img src=<?php echo base_url('assets/images/cat.jpg');?> alt="New York" style="width:100%; height: 768px;">
			<div class="carousel-caption">
			<h3 style="font-size:80px;"><Strong>Your Pet is The King</Strong></h3>
			<p style="font-size:25px; font-style: oblique;">We treat your beloved pet like a King and Queen in our pet Hotels</p>
			</div>
		</div>
	
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- End Carousel -->

<!--Start Schedule-->

 <div class="w3-container w3-content w3-padding-32	" style="width:50%;">
 
      <h2 class="w3-wide w3-center"><Strong>OUR WEEKLY SCHEDULES</Strong></h2>
      <p class="w3-opacity w3-center"><i>We Care And We Serve With Excelence!</i></p><br>

      <ul class="w3-ul w3-text-white" style="font-size:15px;">
	  <div style="background-color:#ffffff; border-radius:15px; margin-bottom:15px; color:black;" >
    		<li class="w3-padding" ><Strong>Monday <span class="w3-tag w3-red " style="margin-left:350px; border-radius:12px; padding:6px;">Closed</span></Strong></li>
	  </div>
	  <div style="background-color:#fb5b21; border-radius:15px; margin-bottom:15px;" >
    		<li class="w3-padding" ><Strong>Tuesday <span class="w3-tag w3-white " style="margin-left:305px; border-radius:12px; padding:6px;">10.00 am - 11.00 pm</span></Strong></li>
	  </div>
	  <div style="background-color:#ffffff; border-radius:15px; margin-bottom:15px; color:black;" >
    		<li class="w3-padding" ><Strong>Wednesday <span class="w3-tag w3-red " style="margin-left:278px; border-radius:12px; padding:6px;">10.00 am - 11.00  pm</span></Strong></li>
	  </div>
	  <div style="background-color:#fb5b21; border-radius:15px; margin-bottom:15px;" >
    		<li class="w3-padding" ><Strong>Thursday <span class="w3-tag w3-white " style="margin-left:295px; border-radius:12px; padding:6px;">10.00 am - 11.00 pm</span></Strong></li>
	  </div>
	  <div style="background-color:#ffffff; border-radius:15px; margin-bottom:15px; color:black;" >
    		<li class="w3-padding" ><Strong>Thursday <span class="w3-tag w3-red" style="margin-left:295px; border-radius:12px; padding:6px;">08.00 am - 05.00 pm</span></Strong></li>
	  </div>
	  <div style="background-color:#fb5b21; border-radius:15px; margin-bottom:15px;" >
    		<li class="w3-padding" ><Strong>Friday <span class="w3-tag w3-white " style="margin-left:322px; border-radius:12px; padding:6px;">08.00 am - 09.00 pm</span></Strong></li>
	  </div>
	  <div style="background-color:#ffffff; border-radius:15px; margin-bottom:15px; color:black;" >
    		<li class="w3-padding" ><Strong>Saturday <span class="w3-tag w3-red " style="margin-left:300px; border-radius:12px; padding:6px;">11.00 am - 04.00 pm</span></Strong></li>
	  </div>
	  <div style="background-color:#fb5b21; border-radius:15px; margin-bottom:15px;" >
    		<li class="w3-padding" ><Strong>Sunday <span class="w3-tag w3-white"  style="margin-left:350px; border-radius:12px; padding:6px;">Closed</span></Strong></li>
	  </div>
      </ul>
	  
		<br><br>
	</div>
</div>	 

<!--Start Stores-->
<div class="stores">
	<div class="w3-container w3-content w3-padding-64" style="width:100%;">
	  <h2 class="w3-wide w3-center"><Strong>OUR STORES ACCROSS THE COUNTRY</Strong></h2>
	  <p class="w3-opacity w3-center"><i>We Are Connected.<i></p>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        
		<div class="w3-third w3-margin-bottom card">
          <img src=<?php echo base_url('assets/images/shop.jpeg');?> alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Tangerang</b></p>
            <p class="w3-opacity">Principal Store</p>
            <p>Jln. Layar Raya No.11 <br> Tangerang, Banten</p>
          </div>
        </div>

        <div class="w3-third w3-margin-bottom card">
          <img src=<?php echo base_url('assets/images/shop22.jpg');?> alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Jakarta</b></p>
            <p class="w3-opacity">Opened 2019</p>
            <p>Jln. Jendral Sudirman N0.17 <br> Jakarta Pusat, DKI Jakarta</p>
          </div>
        </div>

        <div class="w3-third w3-margin-bottom card">
          <img src=<?php echo base_url('assets/images/shop3.jpg');?> alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Bogor</b></p>
            <p class="w3-opacity">Coming Soon</p>
            <p>Jln. Padjajaran N0.20 <br> Bogor, Jawa Barat </p>
          </div>
        </div>
		
      </div>
    </div>
  </div>
	</div>
	</div>
<!--End Stores-->



<!-- Start Testimonials -->
	 <div class="container">
    <div class="row">
        <div class="col-md-12">
				<h2 class="w3-wide w3-center testi" style="font-style:italic;"><Strong>A Fews Words From Our Clients</Strong></h2>
				<p class="w3-opacity w3-center"><i>Our Goal is to provide a service that keeps our clients happy.<br> We are pleased to hear any feedback they have for us.<i></p>			
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/julio.jpg');?>>
                    </div>
                    <p class="description">
                        The Pet House sudah menjadikan kucing dan anjing saya menjadi lebih cantik, menawan dan mempesona. Jadi sekarang saya bisa tidur nyenyak. Hehe..
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Julio Muslim-</h3>
                        <span class="post">Pecinta Twice</span>
                    </div>
                </div>
 
                <div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/ghani.jpg');?>>
                    </div>
                    <p class="description">
                        Semua permasalahan kucing saya sudah teratasi karna adanya The Pet House. Terima kasih banyak The Pet House atas pelayanannya yang memuaskan!
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Malik Abdul Ghani-</h3>
                        <span class="post">Web Designer</span>
                    </div>
                </div>
 
                <div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/yww.jpg');?>>
                    </div>
                    <p class="description">
                        The Pet House adalah suatu tempat untuk semua para pet lovers. Jangan ragu untuk menitipkan hewan peliharaan disini, karena fasilitasnya sangat lengkap.
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Yustinus Widya W-</h3>
                        <span class="post">Lecturer at UMN</span>
                    </div>
                </div>

				<div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/bp.jpg');?>>
                    </div>
                    <p class="description">
                       The Pet House adalah "Champions" untuk bidang e-commerce saat ini. Mereka bisa menciptakan "Goal" yang sangat cantik untuk pet lovers.
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Bambang Pamungkas-</h3>
                        <span class="post">Real Madrid CF Player</span>
                    </div>
                </div>

				<div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/jl.jpg');?>>
                    </div>
                    <p class="description">
						The Pet House adalah sebuah aplikasi masa kini yang wajib kamu coba. 
						Semua fasilitas lengkap, tempat strategis, dan pelayanan yang professional.<br>
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">John Lennon-</h3>
                        <span class="post">The Beatles</span>
                    </div>
                </div>

				<div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/dilan.jpg');?>>
                    </div>
                    <p class="description">
                        Milea, kamu cantik. Tapi masih cantikan kucing aku karena sudah aku bawa ke The Pet House untuk di Grooming. Terima Kasih The Pet House! Semoga Jaya!
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Dilan dan Milea-</h3>
                        <span class="post">Pasangan Remaja</span>
                    </div>
                </div>

				<div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/arap.jpg');?>>
                    </div>
                    <p class="description">
						Setelah pakai apps The Pet House, gua jadi gausah repot-repot cari salon buat pet gua. 
						Praktis banget dan mudah banget buat dipakai. YESSS!<br>
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Reza Arap-</h3>
                        <span class="post">Youtuber Gaming</span>
                    </div>
                </div>

				<div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/ari.jpg');?>>
                    </div>
                    <p class="description">
						The Pet House bagus banget! Recommended deh buat kamu-kamu yang gamau ribet cari tempat penitipan pet waktu mau pergi ke luar kota. Pokok'e Keren!<br>
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Ari Lasso-</h3>
                        <span class="post">Penyanyi</span>
                    </div>
                </div>

				<div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/jota.jpg');?>>
                    </div>
                    <p class="description">
						Pelayanannya sangat professional, cepat dan gesit seperti mobil F1. Next time saya akan membawa kucing dan anjing saya untuk perawatan disini.<br>
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Joe Taslim-</h3>
                        <span class="post">Actor</span>
                    </div>
                </div>

				<div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/kaesang.jpg');?>>
                    </div>
                    <p class="description">
						Buat kamu yang orangnya kekinian banget, The Pet House ini menjadi solusi untuk hewan kesayangan kita semua. Pokoknya OKE baget hehe. Salam Kecebong!<br>
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Kaesang-</h3>
                        <span class="post">Anak Presiden</span>
                    </div>
                </div>

				<div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/josaphat.jpg');?>>
                    </div>
                    <p class="description">
						Kemarin gua mau mudik ke banyumas, tapi gua bingung harus titip si "Jack" kemana. Eh ternyata ada Pet Hotel dari The Pet House, Terimakasih The Pet House!<br>
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Josaphat Klemens-</h3>
                        <span class="post">KMI</span>
                    </div>
                </div>

				<div class="testimonial">
                    <div class="pic">
						<img src=<?php echo base_url('assets/testi/sansan.jpg');?>>
                    </div>
                    <p class="description">
						Gokil sih aplikasi The Pet House! Gua udah 3x pake layanannya buat Grooming Kucing gua, dan layanannya the best abis lah! Pokoknya mantap hehe<br>
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">SanSan-</h3>
                        <span class="post">Pee Wee Gaskins</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->


	<?php echo $footer;?>

	<script type="text/javascript">
       $(document).ready(function(){
						$("#testimonial-slider").owlCarousel({
									items:2,
									itemsDesktop:[1000,2],
									itemsDesktopSmall:[979,2],
									itemsTablet:[768,2],
									itemsMobile:[650,1],
									pagination:true,
									navigation:false,
									slideSpeed:1000,
									autoPlay:true
    						});
				});
    </script>

</body>
</html>

	