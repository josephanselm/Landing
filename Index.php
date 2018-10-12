<?php
if(isset($_POST['submit'])){
	$from= $_POST['email'];
	$to= 'iamjoeanselm@gmail.com';
	$subject = 'My Page Email Signup';
	$body = 'A user just signed up to your website';
	if(!$_POST['email']){
	$emailError = 'Please enter a valid email address';}
if (!$emailError) {
	if (mail ($to,$subject,$body,$from)) {
		$result = 'Thank for signing up we\'ll keep you updated';
	}else{
		$result = 'Sorry there have been error, please try again';
	}
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
  <!-- Logo section	 -->
  	<section id="logo">
  		<div class="container">
  			<div class="row">
  				<div class="col text-center">
  					<img src="images/echo.png">
  				</div>
  			</div>	
  		</div>	
  	</section>

  	<section id="intro">
  		<div class="container">
  			<div class="row">
  				<div class="col">
  					<p>We are working to bring you something amazing here!</p>
  					
  				</div>
  			</div>
  		</div>
  	</section>


<!-- Countdwon section -->
  	<section id="countdown">
  		<div class="container">
  			<div class="row">
  				<div class="col">
  					<div class="countclock"></div>
  					
  				</div>
  			</div>
  		</div>
  	</section>

<!-- Social media icons -->
  	<section id="social">
  		<div class="container">
  			<div class="row">
  				<div class="col">
  					<div class="icons">
  						<ul class="list-inline">
  							<li class="list-inline-item"><a href="http://facebook.com"><i class=" facebook fab fa-facebook-square"></i></a> </li>
  							<li class="list-inline-item"><a href="http://twitter.com"><i class="twitter fab fa-twitter-square"></i></a> </li>
  							<li class="list-inline-item"><a href="http://instagram.com"><i class="instagram fab fa-instagram"></i></a> </li>
  							<li class="list-inline-item"><a href="http://Youtube.com"><i class="youtube fab fa-youtube-square"></i></a> </li>
  						</ul>	
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<!-- sign up  -->
  	<section id="signup">
  		<div class="container">
  			<div class="row">
  				<div class="col">
  				
  						<form class="form-inline" role="form" method="post" action="#sign">
  							<input type="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="mail" placeholder="enter your email">
  							<button type="submit" class="btn btn-primary mb-2">Submit</button>
  						</form>
  						<?php echo $emailError; ?>
  						<?php echo $result; ?>
  					
  					
  				</div>
  			</div>
  		</div>
  	</section>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript">
		$(function() {
    $('.countclock').countdown({
        date: "January 7, 2019 15:03:26"
    });
});
	</script>
  </body>
</html>