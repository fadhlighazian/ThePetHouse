<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <title>ThePetHouse: History</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>

	
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
    <?php
        echo $css;
    ?>


</head>
<body>

    <?php
        echo $header;
        
    ?>
    

	<div class="container-fluid">
   <br><br><br>
    <hr>
	 <h1>History Salon Orders</h1>
	 <table id='salonTable' class='table table-striped table-bordered display' cellspacing='0' width='100%'>
		 <thead>
			 <tr>
                <th>Booking ID</th>
				<th>User Name</th>
				<th>Furkid Name</th>
                <th>Type Salon</th>
				<th>Address</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Check-In Dates</th>
				<th>Notes</th>

			 </tr>
		 </thead>
		 <tbody>
			 <?php
				 foreach ($historySalonUser as $row) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $furname = $row['fur_name'];
                    $typesalon = $row['type_salon'];
                    $address = $row['address'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $checkin = $row['check_in'];
                    $notes = $row['note'];


                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$name."</td>";
                    echo "<td>".$furname."</td>";
                    echo "<td>".$typesalon."</td>";
                    echo "<td>".$address."</td>";
                    echo "<td>".$email."</td>";
                    echo "<td>".$phone."</td>";
                    echo "<td>".$checkin."</td>";
                    echo "<td>".$notes."</td>";
				 
			 ?>
				
			 <?php
					
				 }
			 ?>		
		 </tbody>
	 </table>  
 </div>

<div class="container-fluid">
 
 <hr>
  <h1>History Hotel Orders</h1>
  <table id='hotelTable' class='table table-striped table-bordered display' cellspacing='0' width='100%'>
      <thead>
          <tr>
                <th>Booking ID</th>
				 <th>Name</th>
				 <th>Furkid Name</th>
				 <th>Address</th>
				 <th>Email</th>
				 <th>Phone</th>
				 <th>Check-In Dates</th>
				 <th>Check-Out Dates</th>
				 <th>Price</th>
				 <th>Notes</th>

          </tr>
      </thead>
      <tbody>
          <?php
              foreach ($historyHotelUser as $row) {
                 $id = $row['id'];
                 $name = $row['name'];
                 $furname = $row['fur_name'];
                 $address = $row['address'];
                 $email = $row['email'];
                 $phone = $row['phone'];
                 $checkin = $row['check_in'];
                 $checkout = $row['check_out'];
                 $price = $row['price'];
                 $notes = $row['note'];


                 echo "<tr>";
                 echo "<td>".$id."</td>";
                 echo "<td>".$name."</td>";
                 echo "<td>".$furname."</td>";
                 echo "<td>".$address."</td>";
                 echo "<td>".$email."</td>";
                 echo "<td>".$phone."</td>";
                 echo "<td>".$checkin."</td>";
                 echo "<td>".$checkout."</td>";
                 echo "<td>".$price."</td>";
                 echo "<td>".$notes."</td>";
              
          ?>
             
          <?php
                 
              }
          ?>		
      </tbody>
  </table>  
</div>




    <?php echo $footer; ?>
</body>
</html>
<script>
   $(document).ready(function() {
    $('#salonTable').DataTable();
	$('#hotelTable').DataTable();
   } );
</script>



