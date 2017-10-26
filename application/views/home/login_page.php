<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta name="viewport" content="width=device-width,initital-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/bootstrap.min.css">
    <!-- coded by mk -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap.min.css">
    <!-- end of code by mk -->
    <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>template/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/index-login-page.css">
    <script src ="<?php echo base_url();?>jquery.com/jquery-1.10.2.js"></script>
    <script src ="<?php echo base_url();?>jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>template/js-king/jquery.js"></script> 
    <script src="<?php echo base_url();?>template/js-king/jquery.glide.js"></script>
    <script src="<?php echo base_url();?>template/js-king/jquery.localScroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>template/js-king/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url();?>template/js-king/wow.min.js" type="text/javascript"></script>  
<style type="text/css">
  * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 10000px;
  position: relative;
  margin: auto;
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
  
<script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});
</script>

<script type="text/javascript">


   $(function(){
      $("#btnclick").click(function(){
        $("divpopup").dialog({
          title : " Pop up",
          width : 200,
          height : 100,
          modal:true,
          buttons: {Close;
                function(){
                  $(this).dialog('close');
                }
            }
        });
      });
   })
</script>

<script type="text/javascript">
$(function(){
    $("#gotologin").click(function(){
     
    })
  function gotologin(){alert("Are You Sure To login!!!!")};
</script>
<!--for  nav active-->


<style>
/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal1-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal1-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal1-body {padding: 2px 16px;}

.modal1-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/*=============ANCHOR LINK STYLE==========*/
.a:hover{text-decoration: none;}
.a:active{color: green;}
/*=============END of ANCHOR LINK STYLE==========*/


/*=================FOOTER ====================*/
.pg_header{
  position: fixed;
  top: 0;
  width: 100%;
}
.page_footer{
  position:fixed;
            bottom: 0;
            width: 100%
             }

.right_title{
  position: fixed;
}
.a 
{
  padding-right: 53px;
}
.page_footer1{position:fixed;
              bottom: 0;
              width: 100%;

}
.background
{
  background: url(images/myeo-background2.jpg);
  background-size: 100%;
  background-origin: 0;
  min-height: 700px;
  /*background-repeat: no-repeat;*/
  /*background-position: center center;*/
}
.rspace
{
  /*text-align: right;*/
}

.container
{
  height: 450px;
  font-family:'Open Sans',sans-serif;

}
.container input[type="text"],
.container input[type="email"],
.container input[type="password"]
{
  border:none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 30px;
  color: #fff;
  font-size: 16px;
}
.container button[type="submit"]
{
  border: 1px solid #fff;
  outline:none; 
  width:100%;
  height: 40px;
  color:#fff;
  font-size: 16px;
  background: transparent;
  cursor: pointer;
  border-radius: 10px;
}
.container button[type="submit"]:hover
{
  background: #004167;
  color: #fff;
}
.sign-up-with-email a 
{
  text-align: right;
}
.form-group button[typr="submit"]
{
  border: 2px solid #fff;
  outline:none;
  font-size: 16px;
  color:#fff;
  background: transparent;
  cursor: pointer;
  border-radius: 10px;
}

body{
  width: 100%;
}
</style>



</head>
<body >
  <!-- ===========PAGE HEADER=========== -->
<div class="col-md-12">
<div class="row pg_header"  style="background-color:#004167" >
<!-- <span class="label_tag"> -->
    <label class="col-md-3" id="navigations">
        <img src="<?=base_url();?>/images/myeo_logo.png"  width="71"  height="63" class='col-md-offset-2' />
        <!-- <a href="<?= base_url();?>#slideshow-container1"  class="btn">Opportunities</a> -->
    </label>

    <span class="rspace col-md-offset-4 col-md-5">
    <?php $attribute=array("class"=> "form-inline");
      echo form_open('user/login',$attribute);?>
        <div class="form-group" style="padding-top:20px;">
        
        <input type="email"  class="form-control " name="email" placeholder="Email">
        <?php echo form_error('email',"<div class='error' 
          style='color:red'>","</div>");?>
        <input type="password" class="form-control " name="password" placeholder="Password">
        <?php echo form_error('password',"<div class='error' 
          style='color:red'>","</div>");?>
        <button type="submit" class="btn btn " value="LOG IN" 
               style="color:white;background-color:transparent;border-color:white;height:30px;">LOG IN</button>
       <a href="<?= base_url();?>#slideshow-container1" class="btn btn " id="navigations" 
               style="color:white;background-color:transparent;border-color:white;height:30px;">SIGN UP</a>
       </div>
       
       </form>
       
     
  </span>
<!-- </span> -->
</div>
</div>
  <!-- Login Div -->
  <div  class="background" style="background-color:#06c3c3" id="slideshow-container1">
    <ul style="padding-top:47px;">
      <h2 class="title-class" style="font-family:open-sans">Develop your skills and</h2>
      <h2 class="title-class" style="font-family:open-sans">discover your next opportunity</h2>
      <h3 class="title-class-3" style="font-family:">Post a new opportunity for free <a href="#" style="text-decoration: underline;color: white;"><font color="white">here</font></a></h3>
    </ul>
    <!-- <div class="row"> -->
      <div class="justify-content-around margin-pad ">
        <div class=" container col-md-offset-1 col-md-4 sign-in-apps" >
         <center> <h5 class="title-class-2">Sign In With</h5>
            
              <div class="with-facebook">
                <img src="<?=base_url();?>/images/100417_fb.png">
                <a href="#" style="padding-top:20px;">Sign In With Facebook</a>
              </div>
              <div class="with-google-plus">
                <img src="<?=base_url();?>/images/100417_gplus.png">
                <a href="#" style="padding-top:20px;">Sign In With Google</a>
              </div>                                                       
              <div class="with-linkedin">
                <img src="<?=base_url();?>/images/100417_linkedin.png">
                <a href="#" style="padding-top:20px;">Sign In With LinkedIn</a>
              </div>
            </center>
        </div>

        <div class=" container col-md-offset-2 col-md-4 sign-up-with-email"><!-- style="text-align: center;padding-left: 50px;" -->
          <!-- <center> -->
          <form role="form">
              <center><h5 class="title-class-2">Sign Up With Email</h5></center>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" style="background-color:transparent" >
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" style="background-color:transparent">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" style="background-color:transparent">
              </div>
              <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="cfmassword" style="background-color:transparent">
              </div>
              <center><button type="submit" class="btn btn-default" style="padding-bottom:10px;">SIGN UP</button></center><br/>
              <a href="#" class="signup" style="padding-bottom:20px; text-decoration: none;color: #fff;margin-bottom: 20px;">Forgot password?</a>
              
          </form>
          <!-- </center> -->
        </div>  

  </div>

   
</div>

</div> 


<div class="slideshow-container">

<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
<!--   <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
     <div class="item active">
    <img src="<?=base_url();?>/images/img1.PNG" style="width:100%;height:400px;" class="img-reponsive">
    </div>

    <div class="item">
    <img src="<?=base_url();?>/images/img2.jpg" style="width:100%;height:400px;" class="img-reponsive">
    </div>

    <div class="item">
    <img src="<?=base_url();?>/images/img3.jpg" style="width:100%;height:400px;">
    </div>  
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic1" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic1" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

</div>

<div style="text-align:center;background-color:#b3bbcf;">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> 
<script type="text/javascript">
  var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
} 
</script>

<!-- Google Play :D :D  -->
  <div id="google-play-div" style="height: 500px">
    <img src="<?=base_url();?>/images/google-play-background.PNG" style="width:100%;height:500px;">
  <!-- </div> -->

   <!-- <div id="" style="background-color: white"> -->
    <center style="height: 500px">   
      <h4 style="color: blue">OPPORTUNITIES SUPPORTED BY</h4> 
      <img src="<?=base_url();?>/images/AIA.png" style="width:၅0%;height:400px;" >
    </center>
   </div>

<!-- FOOTER -->
<div class="page_footer" style="height:40px;width:;background-color:#004167">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


  <label class="a"><img src="<?=base_url();?>/images/myeo_logo.png"  width="30px;" height="40px;" /></label>
  <label class="a">
  <a href="" style="text-decoration:none;"><font style="color:#fff"><span style="text-align: right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#fff">&copy; 2017</font></span></font></a>
  </label>
   <span>
              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">About</font></a></label>

              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Career</font></a></label>

             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Compus Chapter Program </font></a></label>

             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">User Aggrement</font></a></label>

             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Privacy Policy</font></a></label>

              <!-- <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Cookie Policy</font></a></label> -->

              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Copyright Policy</font></a></label>

    </span>
</div> <!-- End Of Page Footer -->


<script type="text/javascript">
      // code from w3 schools
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    } 

    // end code from w3schools

</script>
</body>
</html>


