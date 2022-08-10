

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$to      = 'fady.malak2016@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: fady@yahoo.com' . "\r\n" .
    'Reply-To: fady.malak2016@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
    }
?>

<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Fady conact form</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/contact2.css" />
		<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
		
		<link href="https://fonts.googleapis.com/css?family=Pacifico|Parisienne&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Scheherazade&display=swap" rel="stylesheet">
		
		<!-- water effect-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
		
    </head>
    <body>
       <div class="body">
        <!-- start from -->
        <div class="container">
			<h1 class="text-center h1">Contact <span class="h1span">Me</span></h1>
            <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				 <?php if (isset($formerror)){ 
					echo '<div class="alert alert-danger alert-dismissible " role="start">' ;
					echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"> ';
						echo '<span aria-hidden="true">&times;</span>' ;
					echo '</button> ' ;  
					foreach($formerror as $error){
						 echo $error ;
					}
						echo '</div>' ; }
					?>
				<?php if( isset($success ) ) { echo $success ; }?>
				<div class="form-group">
					<input 
						   class="form-control username" 
						   type="text" 
						   name="username" 
						   placeholder="Username"/>
					 <i class="fa fa-user fa-fw"></i>
					<div class="alert alert-danger custom">
						 Username must be larger than <strong>3</strong> Characters 
					</div>
				</div>
				
				<div class="form-group">
					<input 
						   class="email form-control" 
						   type="email" 
						   name="email" 
						   placeholder = "Email"/>
					<i class="fa fa-envelope fa-fw"></i>
					<div class="alert alert-danger custom">
						 Your Email can not be <strong> Empty </strong>
					</div>
				</div>
				
				<div class="form-group">
					<input 
						   class="form-control cellphone" 
						   type="text" 
						   name="cellphone" 
						   placeholder="Phnoe Number" />
					 <i class="fa fa-phone fa-fw"></i>
				</div>
				
				<div class="form-group">
                <textarea 
                          class="form-control message" 
                          name = "message"
                          placeholder="Enter Your Message"></textarea>
				<div class = "alert alert-danger custom">
						Message cant not be less than <strong>10</strong> Characters </div>
				</div>
				
                <input 
                       class="btn btn-primary btn-block" 
                       type="submit" 
                       value="Send Me"/>
                 <i class="fa fa-send fa-fw send-icon"></i>
            </form>
        </div>
		   <footer>CopyRights &copy; <span>Fady A.Malak</span> 2019</footer>
		<!-- water effect -->
		 <script>
			  $(".body").ripples({
				resolution: 2000,
				perturbance: 0.04,
			  });
		</script>
        <!-- end form -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"  ></script>
		<script src="js/custom2.js"></script>
	  </div>
    </body>
</html>
    