<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ThePetHouse: Login</title>
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
                <form class="form-horizontal" method="post" action="<?php echo base_url("index.php/LoginRegister/registerProcess");?>" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="text-center header"><strong>Register</strong></legend>

                        
                        <p class="text-left header"><span style="font-size:20px">Please fill your information correctly</span></p>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-users bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" placeholder="Username" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-user bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-user bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa fa-envelope bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="email" placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control" required> 
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="passwordf" name="passwordf" type="password" placeholder="Confirm Password" class="form-control">
                                <span id='message'></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="number" placeholder="Phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-upload bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="userImg" name="userImg" type="file" placeholder="Upload Profile Picture" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-location-arrow bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="address" name="address" placeholder="Address" rows="7" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Next</a></button>
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
        padding-top:80px;
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

<script>
$('#password, #passwordf').on('keyup', function () {
  if ($('#password').val() == $('#passwordf').val()) {
    $('#message').html('Password Match').css('color', 'green');
  } else 
    $('#message').html("Password didn't Match").css('color', 'red');
});
</script>
</body>
</html>