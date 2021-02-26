<!DOCTYPE html>
<html>
<head>
<title>DAR ASSOCIATE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>
<body>
<header class="main__header normal">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <!-- Brand and toggle get grouped for better mobile display --> 
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-header">
        <h1 class="navbar-brand"><a href="contact.html"><img src="images/logo.png" alt="logo" class="img-responsive" height="60" width="220"/></a></h1>
        <a href="#" onClick="javascript.void()" class="submenu">Menus</a>
      </div>
      <div class="menuBar">
        <ul class="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="about.html">About Us</a></li>
          <li class="active"><a href="contact.php">contact us</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>
<section class="main__middle__container">
  <div class="titles blog text-left">
    <div class="container">
      <div class="seper"></div>
      <h2 class="page__title" style="text-transform:uppercase;">Contact Us</h2>
    </div>
  </div>
<section class="contact-us">
  <div class="container">
    <div class="row">
    <div class="col-md-8">
      <h3 style="text-transform:capitalize;">Send us a message</h3>
      <hr>
        <p>Our friendly customer service representatives are committed to answering all your questions and meeting any need you may have. We would love to hear from you! Please fill out the form below so we may assist you.</p><br />
  	    <p id="feedback"></p>
    
    <form role="form" id="contact-form" name="contact-form" method="post" action="" class="contact-form">
      <div class="form-group col-md-6">
        <label class="sr-only" for="exampleInputEmail1">Your Name: *</label>
        <input required type="text" class="form-control" id="name" name="name" placeholder="Your Name: *">
      </div>
      <div class="forms-group col-md-6">
        <label class="sr-only" for="exampleInputEmail1">Email: *</label>
        <input required type="email" class="form-control" id="email" name="email" placeholder="Email: *">
      </div>
        <div class="clearfix"></div>
      <div class="form-group">
        <label class="sr-only" for="exampleInputEmail1">Subject:</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject:">
      </div>
      <div class="form-group">
        <textarea required class="form-control" id="message" name="message" rows="5" placeholder="Message: *"></textarea>
      </div>
        <input type="submit" name="btnsubmit" class="btn btn-lg btn-info" value="Submit">
    </form>
  </div>

<?php
if(isset($_POST['btnsubmit']))
{
	$n = $_POST['name'];
	$e = $_POST['email'];
	$m = $_POST['message'];
  	$con = mysqli_connect("localhost", "root", "", "DAR" ) or die("error in connection") ; 
  	$q = mysqli_query($con, "insert into message (name, email, message) values ('$n', '$e', '$m')");
	echo
    "<script> alert('Thank You!'); </script>";	
}
?>
    <div class="col-md-4">
      <h3 style="text-transform:capitalize;">Get in touch with us</h3><hr>
      <p>We strive to deliver a level of service that exceeds the expectations of our customers.</p>
      <p class="black-text"><span class="orange">Address:</span> 
      1st floor laghari plaza New chowk, Dadu.</p>
      <p class="black-text"><span class="orange">Phone:</span> (+92) 3041333317</p>
      <p class="black-text"><span class="orange">Whatsapp:</span> (+92) 3337062248</p>
    </div>
    </div>
      <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=&amp;aq=&amp;sll=37.422023,-122.084337&amp;sspn=0.00357,0.008229&amp;ie=UTF8&amp;ll=37.421981,-122.084531&amp;spn=0.001785,0.004115&amp;t=m&amp;z=18&amp;output=embed"></iframe>
    </div>
  </section>
</section>
<footer>
   <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>About</h3>
        	<p>We strive to deliver a level of service that exceeds the expectations of our customers.<br />If you have any questions about our services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you</p>
           	<button class="btn btn-primary btn-md"><a href="about.html"><font color="white">Read More</font></a></button>
      </div>
      <div class="col-md-4">
        <h3>Mailing list</h3>
        <p>Subscribe to our mailing list for offers, news updates and more!</p>
        <form action="#" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your email</label>
            <input type="email" class="form-control form-control-lg" id="exampleInputEmail2" required placeholder="your email">
          </div>
          <button type="submit" class="btn btn-primary btn-md">subscribe</button>
        </form>
      </div>
      <div class="col-md-4">
        <h3>Social</h3>
        <p>1st floor laghari plaza
        <br />New chowk, Dadu.
        <br />Phone: (+92) 3041333317
        <br />Whatsapp: (+92) 3337062248</p>
      </div>
    </div>
  </div>
</footer>
<p class="text-center copyright">&copy; Copyright DAR Associates. All Rights Reserved.</p>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
</body>
</html>