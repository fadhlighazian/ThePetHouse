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
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="<?php echo base_url("index.php/EditUser/editProfilePictureProcess")?>" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="text-center header"><strong>User Details</strong></legend>
                                                
                        <p class="text-left header"><span style="font-size:20px">You can view and change your details here</span></p>
                        <div class="form-group">
                            <?php $img = base_url("assets/")."UserImage/". $this->session->userdata("userimg");?>
                            <span class="col-md-offset-5 text-center"><img src='<?php echo $img;?>' width="250px" height="250px" style="border-radius: 25px"></span> <br>
                        </div>
                        <div class="form-group">                       
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-upload bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="userImg" name="userImg" type="file" placeholder="Upload Profile Picture" class="form-control" value="<?php echo $this->session->userdata('username');?>"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Upload</button>
                            </div>
                        </div>
                </form>        
                <form class="form-horizontal" method="post" action="<?php echo base_url("index.php/EditUser/editProfileProcess")?>">
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-users bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" placeholder="Username" value="<?php echo $this->session->userdata('username');?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-user bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="fname" type="text" value="<?php echo $this->session->userdata('firstname');?>" placeholder="First Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-user bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="lname" type="text" placeholder="Last Name" value="<?php echo $this->session->userdata('lastname');?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa fa-envelope bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="email" placeholder="Email" value="<?php echo $this->session->userdata('email');?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="number" placeholder="Phone" value="<?php echo $this->session->userdata('phone');?>" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-location-arrow bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="address" name="address" placeholder="Address" rows="7" required><?php echo $this->session->userdata('address');?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
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

        $('#password, #passwordf').on('keyup', function () {
        if ($('#password').val() == $('#passwordf').val()) {
        $('#message').html('Password Match').css('color', 'green');
        } else 
            $('#message').html("Password didn't Match").css('color', 'red');
        });
    </script>

</body>
</html>