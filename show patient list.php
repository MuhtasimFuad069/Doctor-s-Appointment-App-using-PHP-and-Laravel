<html lang="en">
  <head>
      <meta charset="utf-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <meta name="description" content="About the site"/>
	  <title> Smart Health Prediction </title>
	  
	  <!-- core CSS -->
	  <link href="css/bootstrap.min.css" rel="stylesheet"/>
	  <link href="css/font-awesome.min.css" rel="stylesheet"/>
	  <link href="css/animate.min.css" rel="stylesheet"/>
	  <link href="css/main.css" rel="stylesheet"/>
  </head>
  
  <body>
    <!-- following section is used for creating the menubar in thw webpage -->
	<section id="header">
	    <div class="row">
		     <div class="col-md-2" style="font-size: 60px;color:#43683A;text-align:center;"> RAINBOW SIX CLINIC </div>
			 <div class="col-md-10" style="text-align: center">
			     <a href="#"> Homepage </a>
				 <a href="#" style="margin-left: 30px;"> Add New Patient </a>
				 <a href="#" style="margin-left: 30px;"> Show Patient List </a>
			 </div> </br>
		</div>
	</section>
	
	<section id = "section1">
	    <div class="title" style="text-align:center;font-size:40px;color:#6A3838"> APPOINTMENT LIST </div>
		<div style="margin-left:5%;margin-right:5%;font-size:25px; margin-top:50px; margin-bottom:50px;text-align:left;background:#367165;">
		<div class="row" style="padding:5px;">
		    <div class="col-md-3"> Patient ID : </div>
			<div class="col-md-3"> Patient Name : </div>
			<div class="col-md-3"> Appointment Date : </div>
			<div class="col-md-3"> Fees : </div>
		</div>
		
		<!-- some php codes to fetch data from db and show in table -->
		
		
		<?php
		require_once("DatabaseConnect.php");
		$sql = "Select * FROM appointment list";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) != 0){
			//here every row that is being returned by query $sql will be printed
			while($row = mysqli_fetch_array($result)){
		    //some html codes, have to close php tags
	
		?>
		<div class="row" style="padding:5px;">
		    <div class="col-md-3"> <?php echo $row[0]; ?> </div>
			<div class="col-md-3"> <?php echo $row[1]; ?> </div>
		    <div class="col-md-3"> <?php echo $row[2]; ?> </div>
		    <div class="col-md-3"> <?php echo $row[3]; ?> </div>
		</div>
		
		<?php
			}
		}
		?>
    <!-----Footer----->
	<section id="footer">
	</section>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js.jquery.isotype.min.js"></script>
	<script src="js/wow.min.js"></script>
	
	

	
  
  </html>