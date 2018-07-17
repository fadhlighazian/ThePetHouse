<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        
        <title>ThePetHouse: Booking</title>
        <?php echo $css; echo $js;  ?>

        <style>
             body {
                margin:0;
                padding:0;
                padding-top:70px;
                height:100%;
                font-family: "Lato", sans-serif;
                color: white;
            }

           
            #container {
                position:fixed;
                min-height: 100%;
            }

            h2,h3{
                margin-bottom:20px;
            }
            .grow:hover
            {
                -webkit-transform: scale(0.2);
                -ms-transform: scale(0.2);
                transform: scale(1.1);
            }
            
            #team{
                width:100%;
                height: 600px;
                padding: 60px 0;
                background-color:#487eb0;
            }

            #fh5co-about{
                width:100%;
                height: 600px;
                padding: 100px 0;
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

            .imgcenter {
                display: block;
                margin:  auto;
                text-align: center;
                margin-top:60px;
 
            }
            
        </style>
    </head>

    <body style="background-color: #490570">
        <?php echo $header; ?>

    <div id="container team-content">
        <div class="row">
            <div class="col-md-12">
    
    <!-- Image Logo Hotel -->
		<img src=<?php echo base_url('assets/images/ThePetHotel.png');?> alt="..." class="team-img about-img imgcenter" >
    <!-- Image Logo Hotel -->

    <!-- Start Requirement Area -->
            <div id="fh5co-about" style="background-color:#487eb0; margin-top: 80px;">
            <div class="container">
                <div class="about-content">
                    
                    <div class="row animate-box">
                        <div class="col-md-6 col-md-push-6">
                            <img src=<?php echo base_url('assets/hotel/titip.png');?> alt="..." class="team-img " style="margin-left:120px;" >
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <div class="desc">
                                <h3 style="font-size:40px;"><Span><img src=<?php echo base_url('assets/hotel/warning.png');?> style="width:50px; height:50px; margin-right:20px;"><strong>Syarat Penitipan Hewan</strong></Span></h3>
                                <ol style="font-size:20px;">
                                    <li><p>Hewan dalam kondisi sehat &amp; tidak berkutu. Kita akan cek dahulu kondisi anjing &amp; kucing saat datang. Tujuannya untuk menjaga keamanan &amp; kesehatan anjing, kucing dan hewan yang lain.</p></li>
                                    <li><p>Mereka bisa bebas jalan &amp; main dengan penghuni / hewan yang lain tanpa diikat atau dikandangin kecuali ada permintaan untuk di kandangin atau situasi tertentu.</p></li>
                                    <li><p>Perlengkapan khusus yang kira-kira diperlukan boleh dibawa seperti vitamin, mainan dan sebagainya.</p></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <!-- End Requirement Area -->

    <!-- Start Facilities Area -->
    <div id="fh5co-about" style="background-color:#876c94;">
            <div class="container">
                <div class="about-content">
                    
                    <div class="row animate-box">
                        <div class="col-md-6 col-md-push-6">
                            <div style="margin-left:50px;">
                            <h3 style="font-size:40px;"><Span><img src=<?php echo base_url('assets/hotel/kennel.png');?> style="width:50px; height:50px; margin-right:20px;"><strong>Fasilitas Pet Hotel</strong></Span></h3>
                                <div class="desc">
                                    <ol style="font-size:20px;">
                                        <li><p>Bersih dan nyaman untuk hewan kesayangan Anda.</p></li>
                                        <li><p>Free grooming untuk minimal 1 minggu penitipan.</p></li>
                                        <li><p>Tempat bermain anjing kucing hewan dengan halaman yang cukup luas.</p></li>
                                        <li><p>Penyediaan kandang jika diperlukan yang cukup luas 1 kandang untuk 1 ekor anjing / kucing, tidak dicampur dengan hewan lain.</p></li>
                                        <li><p>Perawatan anjing kucing yang terkontrol setiap saat.</p></li>
                                        <li><p>Penyediaan beberapa mainan Anjing &amp; Kucing.</p></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                                <img src=<?php echo base_url('assets/hotel/facilities.png');?> alt="...">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
    <!-- End of facilities Area -->

    <!-- Start Modal Price Dog -->
    <div class="container" style="text-align:center; margin-top:25px;">
        <h2 style="font-size:40px;"><Strong>Pricelist / Harga Dog &amp; Cat Hotel</Strong></h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin:0 20px; font-size:20px; background-color:#e74c3c;"><Strong>Pricelist Dog Hotel</Strong></button>
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src=<?php echo base_url('assets/hotel/HotelDog.png');?> width="100%" height="50%" >
                    </div>
                </div>
            </div>
        </div> 
    <!-- End Modal Price Dog -->
    <!-- Start Modal Price Cat -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" style="margin:0 20px; font-size:20px; background-color:#e74c3c;"><Strong>Pricelist Cat Hotel</Strong></button>
        <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src=<?php echo base_url('assets/hotel/HotelCat.png');?> width="100%" height="50%" >
                    </div>
                </div>
        </div>
        </div> 
    </div>
    <!-- End Modal Price Cat -->

    <!-- Start Login Area -->
    <div id="fh5co-about" style="height:300px;">
            <div class="container">
                <div class="about-content">

                <div class="row animate-box">
                    <div class="col-md-6 col-md-push-6">
                        <img src=<?php echo base_url('assets/hotel/account.png');?> alt="..."  style="margin-left:100px; m" >
                    </div>
                    <div class="col-md-6 col-md-pull-6">
                        <div class="desc" style="margin-left:100px;">
                            <h1><Strong>Please Login To Continue</Strong></h1>
                            <form  method="post" action="<?php echo base_url("index.php/LoginRegister/loginPage")?>">
                                <p class="text-left header"><span style="font-size:20px">Please <a href="<?php echo base_url(); ?>index.php/LoginRegister/registerPage">Sign up</a> if you don't have an account</span></p>
                                <p class="text-left header"><span style="font-size:20px">Please <a href="<?php echo base_url(); ?>index.php/LoginRegister/loginPage">LOGIN</a></span></p>
                                <button type="submit" class="btn btn-primary">Login</button>        
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Login Area -->   

    <!-- Contact Form - END -->

    <?php echo $footer;?>
        
        <script type="text/javascript">
            $(function(){
                $(".datepicker").datepicker({
                    format: 'yyyy-mm-dd',
                    autoclose: true,
                    todayHighlight: true,
                });
            });

            // Start Modal Script
            function centerModal() {
                $(this).css('display', 'block');
                var $dialog = $(this).find(".modal-dialog");
                var offset = ($(window).height() - $dialog.height()) / 2;
            }

            $('.modal').on('show.bs.modal', centerModal);
            $(window).on("resize", function () {
                $('.modal:visible').each(centerModal);
            });
        // End Modal Script

        </script>
    </body>
</html>