<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     <title>WRONG TURN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
</head>
<body>

	<div class="container mt-3 mb-3">
		<h1><b>Wrong Turn</b></h1>
         <div>
        <a href="home.php" target=""><button class="button_bad"><i class="fa-solid fa-house"></i></button></a> 
        <!-- </div> 
		<hr/>
				<a href="home.php" class="btn btn-primary mt-3"><i class="fa-solid fa-house"></a>
				<hr/>  -->
		<div class="row">
				<?php
				include("db.php");
					
				$q = "SELECT * FROM  video ";

				$query = mysqli_query($conn,$q);
				
				 ($row=mysqli_fetch_array($query)) 

					// $name = $row['name'];
					?>

					<div class="col-md-4">
                    <video width="260%" height="110%" controls>

             
    
<source src="<?php echo $name="upload/".'VIKRAM HITLIST (TELUGU) Trailer Kamal Haasan Vijay Sethupathi, FahadhFaasil AnirudhRavichander.mp4';?>">
</video>
					</div>

                           
				<?php 
                
                
?>

				
                

</div>
				</div>
</body>