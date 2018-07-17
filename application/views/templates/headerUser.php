<style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* .desc {
    padding: 15px;
    text-align: center;
} */
</style>

<header class="header-login-signup navbar-fixed-top">

	<div class="header-limiter">

		<h1><a href="<?php echo base_url(); ?>index.php/Home/index">ThePet<span>House</span></a></h1>

		<nav>
			<a href="<?php echo base_url(); ?>index.php/Home/index">Home</a>
			<a href="<?php echo base_url(); ?>index.php/About/index">About Us</a>
			<a href="<?php echo base_url(); ?>index.php/Salon/index">Salon</a>
			<a href="<?php echo base_url(); ?>index.php/Hotel/index">Hotel</a>
			<a href="<?php echo base_url(); ?>index.php/Contact/index">Contact</a>
			<a href="<?php echo base_url(); ?>index.php/History/index">History</a>
			
		</nav>

		<?php $img = base_url("assets/")."UserImage/". $this->session->userdata("userimg");?>
		<ul>
			<li class="dropdown">
				<img src='<?php echo $img;?>' style="border-radius: 25px" width="50px" height="50px" >
				<div class="dropdown-content">
					<img src='<?php echo $img;?>' width="150" height="100" style="border-radius: 25px">
					<legend class="text-center header"><strong><font color="#35A1E2"><?php echo $this->session->userdata('username'); ?></font></strong></legend>
					<a href="<?php echo base_url(); ?>index.php/EditUser/index"><legend class="text-center header"><strong><font color="#35A1E2">Settings</font></strong></legend></a>
				</div>
			</li>
			<li style="margin-top:15px;"><a href="<?php echo base_url(); ?>index.php/LoginRegister/logout">Log Out</a></li>
		</ul>

	</div>

</header>



