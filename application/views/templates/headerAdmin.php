<header class="header-login-signup navbar-fixed-top">

	<div class="header-limiter">

		<h1><a href="<?php echo base_url(); ?>index.php/Home/index">ThePet<span>House</span></a></h1>

		<nav>
			<a href="<?php echo base_url(); ?>index.php/Home/index">Home</a>
			<a href="<?php echo base_url(); ?>index.php/About/index">About Us</a>
			<a href="<?php echo base_url(); ?>index.php/Salon/index">Salon</a>
			<a href="<?php echo base_url(); ?>index.php/Hotel/index">Hotel</a>
			<a href="<?php echo base_url(); ?>index.php/BookingOrders/index">Booking Orders Hotel</a>
			<a href="<?php echo base_url(); ?>index.php/BookingOrdersSalon/index">Booking Orders Salon</a>
			<a href="<?php echo base_url(); ?>index.php/History/index">History</a>
		</nav>

		<?php $img = base_url("assets/")."UserImage/". $this->session->userdata("userimg");?>
		<ul>
			<li style="margin-top:15px;"><?php echo $this->session->userdata('username'); ?></li>
			<li><img src='<?php echo $img;?>' width="120px" height="50px"></li>
			<li style="margin-top:15px;"><a href="<?php echo base_url(); ?>index.php/LoginRegister/logout">Log Out</a></li>
		</ul>

	</div>

</header>



