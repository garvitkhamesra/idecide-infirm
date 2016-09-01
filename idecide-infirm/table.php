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
                            <li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Home</a></li>
                            <li class="menu__item"><a href="about.html" class="menu__link">About</a></li> 
                            <li class="menu__item"><a href="codes.html" class="menu__link">Short Codes</a></li> 
                            <li class="menu__item"><a href="gallery.html" class="menu__link">Gallery</a></li> 
                            <li class="menu__item"><a href="contact.html" class="menu__link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    </div>



<!-- FORM -->




 <script src="js/ajax.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/ajax2.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/tag-it.js" type="text/javascript" charset="utf-8"></script>
   
 <script>
        $(function(){
            var sampleTags = ['Complete Haemogram', 'Haemoglobin', 'Total EBC Count', 'Differential Count', 'ESR', 'Packed Cell Count', 'Peripheral Blood Smear ', 'RBC Count', 'Platelet Count', 'Bleeding Time', 'Clotting Time', 'APTT', 'Malaria Parasite',
            'Microfilaria ', 'D Testing', 'Direct Coomb’s Test', 'X Matching', 'L E Cekls','Donor Screening','Eosinophil Count','Absolute Nutrophil Count','Sickle Cells Test','Osmotic Fragility Test',
            'Lipase', 'Urea', 'Creatine', 'Uric Acid', 'Amylase', 'LDH', 'CPK', 'CKMB', 'Calcium', 'Phosphorus', 'Iron', 'Magnesium', 'Liver Function Test','Total Bilurubin','Direct Bilurubin','Protein-Albumin / Globulin','SGPT','SGOT','Alkaline Phosphatase','Lipid Profile',
            'Total Cholesterol', 'Triglycerides', 'HDL Cholesterol', 'LDL Cholesterol', 'Acid Phosphatase','Prostatic Fraction ','Lithium','Electrolytes','Sodium (Na+) ','Potassium (K+) ','Chloride (CI2)','Bicarbonate (HCo3)','Glycosilated Hb',
            'Fasting Blood Sugar', 'PP Blood Sugar', 'Random Blood Sugar', 'Blood Sugar with Glucometer', 'G .T. T', 'G .C. T', 'G .G .T', 'U.I.B.C', 'T.I.B.C', 'S NH 3', 'C3', 'C4'
            ];

            // singleFieldTags2 is an INPUT element, rather than a UL as in the other 
            // examples, so it automatically defaults to singleField.
            $('#singleFieldTags2').tagit({
                availableTags: sampleTags
            });

            //-------------------------------
            // Preloading data in markup
            //-------------------------------
            $('#myULTags').tagit({
                availableTags: sampleTags, // this param is of course optional. it's for autocomplete.
                // configure the name of the input field (will be submitted with form), default: item[tags]
                itemName: 'item',
                fieldName: 'tags'
            });

            //-------------------------------
            // Tag events
            //-------------------------------
            var eventTags = $('#eventTags');

            var addEvent = function(text) {
                $('#events_container').append(text + '<br>');
            };

            eventTags.tagit({
                availableTags: sampleTags,
                beforeTagAdded: function(evt, ui) {
                    if (!ui.duringInitialization) {
                        addEvent('beforeTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
                    }
                },
                afterTagAdded: function(evt, ui) {
                    if (!ui.duringInitialization) {
                        addEvent('afterTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
                    }
                },
                beforeTagRemoved: function(evt, ui) {
                    addEvent('beforeTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                afterTagRemoved: function(evt, ui) {
                    addEvent('afterTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                onTagClicked: function(evt, ui) {
                    addEvent('onTagClicked: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                onTagExists: function(evt, ui) {
                    addEvent('onTagExists: ' + eventTags.tagit('tagLabel', ui.existingTag));
                }
            });

            //-------------------------------
            // Read-only
            //-------------------------------
            $('#readOnlyTags').tagit({
                readOnly: true
            });

            //-------------------------------
            // Tag-it methods
            //-------------------------------
            $('#methodTags').tagit({
                availableTags: sampleTags
            });

            //-------------------------------
            // Allow spaces without quotes.
            //-------------------------------
            $('#allowSpacesTags').tagit({
                availableTags: sampleTags,
                allowSpaces: true
            });

            //-------------------------------
            // Remove confirmation
            //-------------------------------
            $('#removeConfirmationTags').tagit({
                availableTags: sampleTags,
                removeConfirmation: true
            });
            
        });
    </script>

<div align="center" >
<br><br><br>
            <h3>Laboratory Requisition Form</h3>

<br><br><br>

<h4>Tests :<h4><br>
<input name="tags" id="singleFieldTags2" value="">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

