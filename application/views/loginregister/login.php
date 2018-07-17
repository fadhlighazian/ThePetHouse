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
                <form class="form-horizontal" method="post" action="<?php echo base_url("index.php/LoginRegister/loginProcess")?>">
                    <fieldset>
                        <legend class="text-center header"><strong>Login</strong></legend>

                        
                        <p class="text-left header"><span style="font-size:20px">Please <a href="<?php echo base_url(); ?>index.php/LoginRegister/registerPage">Sign up</a> if you don't have an account</span></p>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center "><i class="fa fa-user bigicon "></i></span>
                            <div class="col-md-8">
                                <input id="username" name="username" type="text" placeholder="Username" class="form-control">
                                <span class="text-danger"><?php echo form_error('username'); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                                <span class="text-danger"><?php echo form_error('password'); ?></span>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                <?php  
                                    echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                                ?>  
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

</body>
</html>