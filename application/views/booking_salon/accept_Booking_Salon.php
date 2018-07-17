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
        <img src=<?php echo base_url('assets/images/hotel.jpg');?>
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="<?php echo base_url("index.php/BookingOrdersSalon/bookingAcceptProcess")?>">
                    <fieldset>
                        <legend class="text-center header"><strong>Form Booking Dog & Cat Salon</strong></legend>

                        
                        <p class="text-left header"><span style="font-size:20px">Please complete booking confirmation data</span></p>

                         <input type="hidden" name="idOrder" value="<?php echo $idOrder; ?>">
						 <input type="hidden" name="Name" value="<?php echo $Name; ?>">
						 <input type="hidden" name="email" value="<?php echo $email; ?>">
						 <input type="hidden" name="furname" value="<?php echo $furname; ?>">
                         <input type="hidden" name="address" value="<?php echo $address; ?>">
						 <input type="hidden" name="phone" value="<?php echo $phone; ?>">
						 <input type="hidden" name="checkin" value="<?php echo $checkin; ?>">
						 <input type="hidden" name="typesalon" value="<?php echo $typesalon; ?>">
						 <input type="hidden" name="userNotes" value="<?php echo $userNotes; ?>">

                        <!-- <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-user bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="pice" name="price" type="number" class="form-control" placeholder="Estimated Price">
                            </div>
                        </div> -->
                       

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter messages for our customer" rows="7"></textarea>
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
    </script>

</body>
</html>