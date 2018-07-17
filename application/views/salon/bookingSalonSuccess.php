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
                <form class="form-horizontal" method="post" action="<?php echo base_url("index.php/LoginRegister/registerSuccess");?>" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="text-center header"><strong>Your Salon Booking Orders Has Been Placed <br> </strong></legend>
                        <legend class="text-center header"><strong>We will get back to you within 2 business days</strong></legend>
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