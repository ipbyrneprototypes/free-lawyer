<!-- Bootstrap Core CSS -->
<link href="http://help.lawyer.com/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="http://help.lawyer.com/css/style.css">
<link rel="stylesheet" type="text/css" href="http://help.lawyer.com/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="http://help.lawyer.com/css/owl.theme.css">
<!-- font css-->
<link rel="stylesheet" type="text/css" href="http://help.lawyer.com/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="http://help.lawyer.com/css/pe-icon-line.css">
<link href='http://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,300italic' rel='stylesheet' type='text/css'>
<!-- owl css -->
<link href="http://help.lawyer.com/css/owl.carousel.css" rel="stylesheet">
<link href="http://help.lawyer.com/css/owl.theme.css" rel="stylesheet">
<style>
  #tos-checkbox {
    margin-right: 5px;
  }
  @media only screen and (min-width : 320px) {
  }
  /* Extra Small Devices, Phones */
  @media only screen and (min-width : 480px) {
  }
  /* Small Devices, Tablets */
  @media only screen and (min-width : 768px) {
    .navbar-header {
      float: none !important;
    }
  }
  @media only screen and (max-width : 768px) {
    .intro-section {
      background: #013f7c url(http://help.lawyer.com/images/law-bg.jpg) no-repeat;
    }
  }
  /* Medium Devices, Desktops */
  @media only screen and (max-width : 992px) {
    .header-button {
      float: none !important;
      display:inline-block !important;
    }
    .header-button-div {
      text-align:center;
    }
    .navigation .navbar-brand {
      float: none !important;
      display:inline-block !important;
    }
    .navbar-header {
      text-align: center !important;
    }
    .intro-section {
      padding-top: 250px;
    }
  }
  /* Medium Devices, Desktops */
  @media only screen and (min-width : 992px) {
    .navbar-header {
      float: left !important;
    }
  }
  /* Large Devices, Wide Screens */
  @media only screen and (min-width : 1200px) {
  }
</style>
<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<!--<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">-->
<div class="navigation" id="myNavbar"><!-- navigation -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <a class="navbar-brand page-scroll" href="#home"><img src="http://help.lawyer.com/images/lawyer-logo2.png" alt="Free Consultations" class="img-responsive"></a>
        </div>
        <div class="header-button-div">
          <h4 class="header-button" style="padding:5px 15px 5px 15px;border-radius: 6px;background:#f66a5d;float:right;text-align:center;color:#fff;margin-top:10px;"><span style="color:#fff;font-size:24px;">NEED A LAWYER?</span><br><span style="font-size: 30px;font-weight:bold;">800-813-1031</span></h4>
        </div>
    </div>
    <!-- /.container-fluid -->
  </nav>
</div>
<!-- /.navigation -->
<section id="home" class="intro-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12"><!--intro caption start-->
        <h1>Free Consultation Lawyer Match</h1>
        <p class="lead">Submit your case details now, receive a free consultation. Use the form below or call to get started.</p>
        </div>

         <div class="row bookingform" style="width: 90%; margin:0 auto;"><!-- hero form -->
         <h3 class="call-now"><span style="color:#f66a5d">Call Now: </span>800-813-1031</h3>
      <div class="col-md-12">
        <form onSubmit="thank();" method="post" action="https://www.lawyer.com/contact/step2">
          <input type="hidden" name="source" value="Mobile">
          <div class="col-md-12 form-group">

              <input require name="name" type="text" class="form-control" id="exampleInputName" placeholder="Your Name" style="background-color:#ffffcc;" required >
          </div>


<div class="col-md-12 form-group">

              <input require name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="Email Address" style="background-color:#ffffcc;" required >
          </div>

          <div class="col-md-12 form-group">

              <input require name="phone_number" type="text" class="form-control" id="exampleInputPassword1" placeholder="Cell Phone with Area Code" style="background-color:#ffffcc;" required >
          </div>


         <div class="col-md-12 form-group">
            <input require name="zip_code" type="text" class="form-control" id="exampleInputZip" placeholder="Zip, City/State" style="background-color:#ffffcc;" required >
          </div>

          <div class="col-md-9 form-group">
            <textarea require name="reason_for_contact" type="text" class="form-control" id="exampleInputReason" name="reason_for_contact" style="height:110px;background-color:#ffffcc;" placeholder="Enter your case details here... It's free!" required ></textarea>
          </div>

          <div class="col-md-3 form-group">
          <img src="http://help.lawyer.com/images/representative.jpg" class="img-circle img-responsive" alt="" style="margin: 0 auto;">
          </div>

          <div class="col-md-12 form-group">
          <button type="submit" class="btn btn-quote btn-orange btn-block">SUBMIT</button>
          <p><input required type="checkbox" id="tos-checkbox" /><span class="small">I agree to <a href="https://www.lawyer.com/terms-of-use.php#EmailConsent" style="color:#d9e2eb;">Receive Messages</a>, <a href="https://www.lawyer.com/terms-of-use.php" style="color:#d9e2eb;">Terms of Use</a>, and <a href="https://www.lawyer.com/privacy.php" style="color:#d9e2eb;">Privacy Policy</a>.</span></p>
          </div>

        </form>
      </div>
    </div>
    <!-- /.hero form -->
      <!--intro caption End-->
      <div class="col-md-12"><!--Intro support start-->
        <p class="intro-info"><img src="partners2.png" alt="" class="img-responsive" style="margin:0 auto;"/></p>
      </div>
      <!--Intro support close-->
    </div>
  </div>
</section>




<!-- CTA Section -->
<section id="contactus" class="cta-section">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6 heading-title"><!--call to action start-->
        <!--//<h1>Tell us About Your Case</h1>
        <p class="ct">Proin scelerisque fringilla magna, et bibendum dui tempor velnteger accumsan fermentum leo</p>//-->
        <p style="color:#1e3a86;font-size:14px;"><br><br>LAWYER.COM © 2016</p>
      </div>
      <!--call to action close-->
    </div>
  </div>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/sticky-header.js"></script>
<script src="js/jquery.plugin.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/testimonial.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<script src="js/about.js"></script>
<!-- Checkbox/Phone JS -->
<script>
  document.getElementById("tos-checkbox").required = true;
  $(".header-button").click(function(){
    window.location.href="tel://8008131031";
  });
  $(".call-now").click(function(){
    window.location.href="tel://8008131031";
  });
</script>
