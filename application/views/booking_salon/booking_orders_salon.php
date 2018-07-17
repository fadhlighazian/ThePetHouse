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
    <title>ThePetHouse: Booking</title>
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
		<h1>Booking Orders Salon</h1>
		<table id='myTable' class='table table-striped table-bordered display' cellspacing='0' width='100%'>
			<thead>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Furkid Name</th>
                    <th>Type Salon</th>
					<th>Address</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Check-In Dates</th>
					<th>Notes</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($booking as $row) {
						$id = $row['id'];
						$name = $row['names'];
                        $furname = $row['fur_name'];
                        $typesalon = $row['type_salon'];
						$address = $row['addresses'];
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
					<td>
					<form method="post" action="<?php echo base_url("index.php/BookingOrdersSalon/bookingAccept")?>">
						<button style="width:80px; margin-bottom:10px;" type="submit" class="btn btn-success" data-toggle="modal" data-target="#acceptModal">Accept</button>
						<input type="hidden" name="idOrder" value="<?php echo $id; ?>">
						<input type="hidden" name="Name" value="<?php echo $name; ?>">
                        <input type="hidden" name="furname" value="<?php echo $furname; ?>">
                        <input type="hidden" name="typesalon" value="<?php echo $typesalon; ?>">
						<input type="hidden" name="address" value="<?php echo $address; ?>">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
						<input type="hidden" name="phone" value="<?php echo $phone; ?>">
						<input type="hidden" name="checkin" value="<?php echo $checkin; ?>">
						<input type="hidden" name="userNotes" value="<?php echo $notes; ?>"> 
					</form>
					
					
					<form method="post" action="<?php echo base_url("index.php/BookingOrdersSalon/bookingDecline")?>">
							<button style="width:80px;" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#declineModal">Decline</button>
							<!-- Modal Decline -->
                            <input type="hidden" name="idOrder" value="<?php echo $id; ?>">
                            <input type="hidden" name="Name" value="<?php echo $name; ?>">
                            <input type="hidden" name="furname" value="<?php echo $furname; ?>">
                            <input type="hidden" name="typesalon" value="<?php echo $typesalon; ?>">
                            <input type="hidden" name="address" value="<?php echo $address; ?>">
                            <input type="hidden" name="email" value="<?php echo $email; ?>">
                            <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                            <input type="hidden" name="checkin" value="<?php echo $checkin; ?>">
                            <input type="hidden" name="userNotes" value="<?php echo $notes; ?>">
					</form>
							
				<?php
						echo "</td> </tr>";
					}
				?>		
			</tbody>
		</table>  
	</div>

		<div class="container-fluid">
 
 <hr>
	 <h1>Confirmed Booking Orders</h1>
	 <table id='myConfirmedTable' class='table table-striped table-bordered display' cellspacing='0' width='100%'>
		 <thead>
			 <tr>
                <th>Booking ID</th>
				<th>Name</th>
				<th>Furkid Name</th>
                <th>Type Salon</th>
				<th>Address</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Check-In Dates</th>
				<th>Notes</th>
				<th>Action</th>
			 </tr>
		 </thead>
		 <tbody>
			 <?php
				 foreach ($confirmedBooking as $row) {
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
				 <td>		 
				 
				 <form method="post" action="<?php echo base_url("index.php/BookingOrdersSalon/ordersSalonComplete")?>">
						 
						 	<input type="hidden" name="idOrder" value="<?php echo $id; ?>">
                            <input type="hidden" name="Name" value="<?php echo $name; ?>">
                            <input type="hidden" name="furname" value="<?php echo $furname; ?>">
                            <input type="hidden" name="typesalon" value="<?php echo $typesalon; ?>">
                            <input type="hidden" name="address" value="<?php echo $address; ?>">
                            <input type="hidden" name="email" value="<?php echo $email; ?>">
                            <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                            <input type="hidden" name="checkin" value="<?php echo $checkin; ?>">
                            <input type="hidden" name="userNotes" value="<?php echo $notes; ?>">

							<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#declineModal">Order Complete</button>
										 
				 </form>
						 
			 <?php
					 echo "</td> </tr>";
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
    $('#myTable').DataTable();
	$('#myConfirmedTable').DataTable();
   } );
</script>



