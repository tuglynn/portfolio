<?php 

function cleanInput($input) {
    return htmlspecialchars(trim($input));
 }


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         $name = cleanInput($_POST['fullname']);
         $email = cleanInput($_POST['email']);
         $message = cleanInput($_POST['message']);

         $message = $name . " said:\r" . $message  . "\r From: " . $email;
     mail(
        "monacoglynn@gmail.com",
        "message from the web!",
        $message
     );
    } else {
        header('Location: index.html');
        exit();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Patrick is an aspiring front end web developer">
<meta name="keywords" content="">
<meta name="author" content="templatemo">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Patrick TuGlynn | Front End Developer</title>
<!--
Stimulus Template
http://www.templatemo.com/tm-498-stimulus
-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/templatemo-style.css">
<link rel="stylesheet" href="css/custom.css">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->

<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</div>


<!-- Navigation Section -->

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
     <div class="container">

          <!-- navbar header -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="/" class="navbar-brand">Patrick TuGlynn</a>
          </div>

          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/#about">About Me</a></li>
                    <li><a href="/#experience">Experiences</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/#blog">Blog</a></li>
               </ul>
          </div>

     </div>
</div>

<div class="spacer"></div>

<div class="container">
     <h2>Thank you for the message!</h2>
     <p>I will get back to you as soon as I can.</p>
</div>

<!-- Footer Section -->

<footer>
	<div class="container">
		<div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                         <p>Copyright &copy; 2024 Patrick TuGlynn
                    
                    | Design: <a href="http://www.google.com/+templatemo" target="_parent">templatemo</a></p>
                    </div>
				<ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                         <li><a href="https://github.com/tuglynn" target="_blank" class="fa fa-github"></a></li>
                         <li><a href="https://www.linkedin.com/in/patrick-tu-glynn/" target="_blank" class="fa fa-linkedin"></a></li>
                         <li><a href="https://codepen.io/tuglynn" target="_blank" class="fa fa-codepen"></a></li>
                    </ul>
               </div>
			
		</div>
	</div>
</footer>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>