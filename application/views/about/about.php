<!DOCTYPE html>
<html>
<head>
	<?php
		echo $js;
		echo $css;
	?>
	<title>ThePetHouse</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<style>
       body {
            margin:0;
			padding:0;
			padding-top: 70px;
            height:100%;
            font-family: "Lato", sans-serif;
            color: white;
        }

        #container {
            position:fixed;
            min-height: 100%;
        }

        h2,h3{
            margin-top:30px;
        }
        .grow:hover
        {
            -webkit-transform: scale(0.5);
            -ms-transform: scale(0.2);
            transform: scale(1.1);
        }
		.card:hover {
				box-shadow: 16px 8px 16px 5px rgba(0,0,0,0.2);
				}

				.card {
				box-shadow: 0 8px 8px 0 rgba(0,0,0,0.2);
				transition: 0.3s;
				}	
        
        #team{
            width:100%;
            background-color:#487eb0;
            height: 500px;
        }

        #fh5co-about{
            width:100%;
            height: 500px;
            margin-top: 30px;
            margin-bottom: 50px;
        }

        .about-img{
            margin-top:150px;
            margin-left:150px;
        }
        .single-service, .service-area{
            margin-top: 38px;
        }
        .service-area{
            height: 350px;
        }


	</style>
</head>
<body style="background-color: #490570">
	<?php echo $header; ?>

<div id="container team-content">
    <div class="row">
        <div class="col-md-12">


<!-- Start About Area -->
        <div id="fh5co-about">
		<div class="container tall">
			<div class="about-content">
				<div class="row animate-box">
					<div class="col-md-6 col-md-push-6">
						<img src=<?php echo base_url('assets/images/pethouse.jpg');?> alt="..." class="img-circle team-img about-img grow card" style="height:190px; width:450px;">
					</div>
					<div class="col-md-6 col-md-pull-6" style="padding-top:50px;">
						<div class="desc">
							<h3><strong>Company</strong></h3>
							<p>The Pet House is a service provider like salons and hotels for your pets <br>
							(especially for cats and dogs).

								<br>We provide a variety of services you can specify for your pet pets, such as <br>
								bathing, grooming, basic / full grooming, and hotels. <br>
								
							</p>

						</div>
						<div class="desc">
							<h3><strong>Mission &amp; Vission</strong></h3>
							<p>We strive to provide our customers with the best selection, the best products, and the best service in town.</p> 
							<p>We hope that after you use our service, your pet will be fresher, prettier, healthier and your pet's life will be happier than ever</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End About Area -->

<!-- Start Team Area -->
<div id="team" class="text-center">
  <div class="container tall">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2><strong>MEET THE TEAM</strong></h2>
      <p>A team is not a group of people who work together. A team is a group of people who trust each other. <br>- Simon Sinek</p>
    </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team">
         <img src=<?php echo base_url('assets/team/alvyn.jpg');?> alt="..." class="img-circle team-img grow card" >
          <div class="caption">
            <h3 style="color:black;"><strong>Alvyn Lianto</strong></h3>
            <p>  Founder <br> Documentation <br> Quality Assurance</p>
          </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
         <img src=<?php echo base_url('assets/team/suluh.jpg');?> alt="..." class="img-circle team-img grow card" >
          <div class="caption">
            <h3 style="color:black;"><strong>Suluh DG</strong></h3>
            <p>Back-End &amp; Front-End Developer <br>Documentation</p>
          </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
         <img src=<?php echo base_url('assets/team/fadhli.jpg');?> alt="..." class="img-circle team-img grow card" >
          <div class="caption">
            <h3 style="color:black;"><strong>Ghazian FF</strong></h3>
            <p>Back-End &amp; Front-End Developer</p>
          </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        	<img src=<?php echo base_url('assets/team/terry.jpg');?> alt="..." class="img-circle team-img grow card" >
          <div class="caption">
            <h3 style="color:black;"><strong>Octavianus Terry</strong></h3>
            <p>Quality Assurance</p>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Team Area -->

<!-- Start service Area -->
<section class="service-area section-gap relative ">
				<div class="container text-center tall">
					<div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-md-offset-2 section-title">
							<h1><Strong>Some Awesomeness that should share</Strong></h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<img src=<?php echo base_url('assets/service/support.png');?> alt="..." style="height:70px; width:70px; margin-bottom:20px;">
								<h4><span class="lnr lnr-user"></span>Customer Support</h4>
								<p>
									We will always serve you with pleasure, anytime and wherever you need us.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<img src=<?php echo base_url('assets/service/reward.png');?> alt="..." style="height:70px; width:70px; margin-bottom:20px;">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Our employees are experienced and professional in working to serve many pets.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<img src=<?php echo base_url('assets/service/hands.png');?> alt="..." style="height:70px; width:70px; margin-bottom:20px;">
								<h4><span class="lnr lnr-phone"></span>Keep Clean</h4>
								<p>
									The Pet House environment is always keep it clean and healthy for your pets.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<img src=<?php echo base_url('assets/service/grooming.png');?> alt="..." style="height:70px; width:70px; margin-bottom:20px;" >
								<h4><span class="lnr lnr-rocket"></span>Complete Facilities</h4>
								<p>
									We provide very complete facilities for your pet needs.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<img src=<?php echo base_url('assets/service/review.png');?> alt="..." style="height:70px; width:70px; margin-bottom:20px;">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									The Pet House has been recommended by many of our clients.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<img src=<?php echo base_url('assets/service/heart.png');?> alt="..." style="height:70px; width:70px; margin-bottom:20px;">
								<h4><span class="lnr lnr-bubble"></span>Work With Heart</h4>
								<p>
									We work with love and a sincere heart.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End service Area -->
	
        </div>
	</div>
</div>

	<?php echo $footer;?>


</body>
</html>