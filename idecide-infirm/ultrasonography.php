<?php 
session_start();
if(!$_SESSION['login']){
  header ("LOCATION:loginindex.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>iDecide</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Infirmary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //js -->


<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

  <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
  <!-- start-smoth-scrolling -->

<!--start-date-piker-->
  <script src="js/jquery-ui.js"></script>
    <script>
      $(function() {
        $( "#datepicker,#datepicker1" ).datepicker();
      });
    </script>
<!--/End-date-piker-->
  <script src="js/responsiveslides.min.js"></script>
      <!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
</head>
<body>
<!-- header -->
<div class="header wow zoomIn">
  <div class="container">
    <div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
      <ul>
        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>
        <li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@example.com</a></li>
      </ul>
    </div>
    
    <div class="clearfix"></div>
  </div>
</div>
<!-- //header -->
<div class="header-bottom ">
    <div class="container">
      <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <div class="logo grid">
            <div class="grid__item color-3">
              <h1><a class="link link--nukun" href="index.php"><i></i>i<span>D</span>ECIDE</a></h1>
            </div>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <nav class="menu menu--horatio">
            <ul class="nav navbar-nav menu__list">
              <li class="menu__item"><a href="doctor.php" class="menu__link">Home</a></li>
              <li class="menu__item"><a href="about.php" class="menu__link">About</a></li> 
              <li class="menu__item "><a href="prescription.php" class="menu__link">Prescription</a></li> 
              <li class="menu__item"><a href="table.php" class="menu__link">Laboratory Requisition</a></li> 
              <li class="menu__item  menu__item--current"><a href="ultrasonography.php" class="menu__link">Ultrasonograohy</a></li>
              <li class="menu__item"><a href="radiology.php" class="menu__link">Radiology</a></li>
              <li class="menu__item"><a href="contact.php" class="menu__link">Contact</a></li>
            </ul>
          </nav>
        </div>
      </nav>
    </div>
  </div>



<div id="prescription" class="col-md-4 content_middle col-md-offset-4"  >
      <h3>Ultrasonography
<br>
</h3>


<form name="usg" action="usg.php" method="post">  

          <input type="text" name="name" placeholder="Name" class="focus" required> 

           <input class="date" name="date" id="datepicker" type="text" value="Date of Birth" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'date';}" required=""> <br><br>
 
      GENDER :
      <input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other
  <br><br>
            
          <input type="text" name="complaint" placeholder="Complaint" required>  
  <br>
  
<input type="text" name="refDoc" placeholder="Referred Doctor"  required>

<input type="text" name="refHos"  placeholder="Referred Hospital" required>
<br><br>
 <div class="bs-docs-example">
            <table class="table table-bordered">
              <thead>
                 <tr>
  <td>
  <input type="checkbox" id = "test" name="test[]" value="ABDOMEN">
  </td>
      <td>ABDOMEN</td>
    <td>
  <input type="checkbox" id = "test" name="test[]" value="KUB">
  </td>
  <td>KUB</td>
    
    <td>
  <input type="checkbox" id = "test" name="test[]" value="OBSTETRICS">
  </td>
      <td>OBSTETRICS</td>
    
    </tr>
              </thead>
              <tbody>
               
  <tr>
  <td>
  <input type="checkbox" id = "test" name="test[]" value="TVS">
  </td>
      <td>TVS</td>
    <td>
    <input type="checkbox" id = "test" name="test[]" value="PELVIS">
  </td>
  <td>PELVIS</td>
    <td>
  <input type="checkbox" id = "test" name="test[]" value="GUIDED PROCEDURE">
  </td>
  <td>GUIDED PROCEDURE</td>
    
    </tr>
              </tbody>
            </table>
          </div>
<br>
<textarea placeholder="Brief History " name="clihistory" style = "width:100%;<"  required></textarea>
<br><br>

<input placeholder="LMP" type="text" name = "lmp" required>
<br>

<input placeholder="Name of Doctor" type="text" name = "doctor" required>
<br><br>

<br><input style="margin-left:40%" type="submit"  value="Submit"></input>
  </p>
</form>
<br><br><br>

    </div>
    <div class="clearfix"></div>
  </div>
</div>


<!-- Form -->



<!-- contact -->
<div class="contact">
  <div class="container">
    
    <div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
      <h3>Contact Us</h3>
      <div class="strip"></div>
      <ul class="con-icons">
        <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+123 456 7890</li>
        <li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@example.com</a></li>
      </ul>
      <ul class="fb_icons">
        <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
        <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
        <li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
        <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
        <li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
      </ul>
      <h3>Newsletter Sign up</h3>
      <div class="strip"></div>
      <form action="#" method="post">
        <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
        <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
        <input type="submit" value="Submit">
      </form>
    </div>
    <div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
      <h2>Information</h2>
      <div class="strip"></div>
      <p class="para">(A Venture of Olive Touch Health Care Services Limited Thrissur with Health Care Success Finland )<br>
Karshaka Nagar, Ayyanthole Ground, P.O Ayyanthole, Thrissur, Kerala - 680003<br>
Website: www.idecidemycare.in | www.idecidemycare.org | www.idecidemycare.com<br> 
email: registeridecide@gmail.com I customercareidecide@gmail.com<br>
Tel: +91 (0) 487 3211238, Customer Care 9207283027 / 28</p>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>

