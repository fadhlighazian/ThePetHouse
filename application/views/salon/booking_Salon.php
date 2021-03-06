<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ThePetHouse: Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
        echo $css;
        echo $js;
    ?>

</head>
<body style="background-color: #490570">

    <?php
        echo $header;
    ?>

<div class="container" style="margin-top: 25px;">

<!-- Contact Form - START -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <img src=<?php echo base_url('assets/salon/salonheader.jpg');?>
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="<?php echo base_url("index.php/Salon/booking_process")?>">
                    <fieldset>
                        <legend class="text-center header"><strong>Form Booking Dog & Cat Salon</strong></legend>

                        
                        <p class="text-left header"><span style="font-size:20px">Please complete your data</span></p>
                       
                        <input id="userID" name="userID" type="hidden" value="<?php echo $this->session->userdata('id_user');?>" class="form-control" readonly>
                          

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-user bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="name" name="name" type="text" value="<?php echo $this->session->userdata('username');?>" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-paw bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="furkidName" name="furkidName" type="text" placeholder="Your Furkid Name" class="form-control" required>
                            </div>
                        </div>

                        <!-- Select Pet & Salon Categories  -->
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-home bigicon "></i></span>
                            <div class="col-md-8">
                                
                            <p style="color:white">Select Your Pet Categories</p>
                                <select name="pet" id="pet" style="margin-bottom:15px;" class="form-control">
                                    <option > - Select Pet Category -</option>
                                    <?php
                                        foreach ($category->result() as $row) {
                                            echo "<option value='".$row->id_pet."'>".$row->pet_name. "</option>";
                                        }
                                    ?>
                                </select>
                                

                            <p style="color:white">Select Your Pet Salon</p>
                                <select name="typesalon" id="typesalon" class="form-control">
                                    <option> - Select Pet Salon -</option>
                                </select>
                            
                            </div>
                        </div>
                        <!-- END Select -->

        

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-home bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="address" name="address" type="text" class="form-control" value="<?php echo $this->session->userdata('address');?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" class="form-control" value="<?php echo $this->session->userdata('email');?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" class="form-control" value="<?php echo $this->session->userdata('phone');?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar-check-o bigicon"></i></span>
                            <div class="col-md-8">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                    <input placeholder="Please select your Pet Salon Date" type="text" class="form-control datepicker" name="checkin" required>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    body{                
        padding-top:70px;
    }
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
</style>

<!-- Contact Form - END -->

</div>

<?php echo $footer;?>
    
    <script type="text/javascript">
        
        $(function(){
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });

   
	$(document).ready(function(){
		$('#pet').on('change', function(){
			var id_pet = $('#pet').val();
			$.ajax({
			    type: 'POST',
			    url: '<?php echo base_url('index.php/Salon/get_chained') ?>',
			    data: { 'id' : id_pet, },
				success: function(data){
				    $("#typesalon").html(data);
				}
			})
		})
	})

    </script>

</body>
</html>