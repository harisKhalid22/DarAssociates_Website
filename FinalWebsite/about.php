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
        <h1 class="navbar-brand"><a href="about.html"><img src="images/logo.png" alt="logo" class="img-responsive" height="60" width="220"/></a></h1>
        <a href="#" onClick="javascript.void()" class="submenu">Menus</a></div>
      <div class="menuBar">
        <ul class="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="services.html">Services</a></li>
          <li class="active"><a href="about.html">About Us</a></li>
          <li><a href="contact.php">contact us</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>
<section class="main__middle__container">
  <div class="titles blog text-left"  style="background:url(images/about.jpg); 
   background-attachment: fixed;
    background-origin: initial;
    background-clip: initial;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 100% 0;">
    <div class="container">
      <div class="seper"></div>
      <h2 class="page__title" style="text-transform:uppercase; color:#333;">About Us</h2>
    </div>
  </div>
  <div class="container" style="color:#666;">
    <div class="row nothing">
      <section class="col-md-8 main-content">
		<h3>DAR Associates.</h3>
        <hr>
        <p>The DAR Associates offers a level of professional service and expertise which no other building professional can provide. Our team is professionally qualified, legally registered to practice and bound by a code of ethics established by Mehran University Of Engineering And Technology of Pakistan.</p>
        <br />
        <img src="images/image_sidebar.jpg" alt="image" class="img-responsive"> <br />
        <h3>Our Mission.</h3>
        <hr>
        <p>Its our mission to provide client focused service through our responsible practice of Architecture.  Our tradition of dedication, professionalism and outstanding customer service is a testament to that mission as we strive each day for excellence in bringing our valued clients ideas to life.</p>
		<h3>Vision Statement.</h3>
        <hr>
        <p>To be viewed as a respected architectural firm, providing high quality design and services to our clients with honesty and integrity.</p>
        <h3>Purpose Statement.</h3>
        <hr>
        <p>To serve our neighbors and project partners with responsible responsive design that comes from attentive discussions and thoughtful solutions, to produce the projects our clients desire.</p>
        <br />
        <blockquote>
          <p>Make every detail perfect and limit the number of details to perfect.</p>
          <small>Jack Dorsey in <cite title="Source Title">USA</cite></small> 
      	</blockquote><br />
      </section>
      <aside class="col-md-4">
        <h3>Our Team.</h3>
        <p>Our tradition of dedication, professionalism and outstanding customer service is a testament to that mission as we strive each day for excellence in bringing our valued clients ideas to life.</p>
        <img src="images/aside_r-sidebar.jpg" alt="image">
        <p>We strive to deliver a level of service that exceeds the expectations of our customers.</p>
      </aside>
    </div>
  </div>
</section>
<footer>
   <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>About</h3>
        <p>We strive to deliver a level of service that exceeds the expectations of our customers.<br />
           If you have any questions about our services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you</p>
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
<script type="text/javascript">
$( "a.submenu" ).click(function() {
$( ".menuBar" ).slideToggle( "normal", function() {
// Animation complete.
});
});
$( "ul li.dropdown a" ).click(function() {
$( "ul li.dropdown ul" ).slideToggle( "normal", function() {
// Animation complete.
});
$('ul li.dropdown').toggleClass('current');
});
</script>
</body>
</html>