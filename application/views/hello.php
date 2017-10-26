<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <h1>Hello World</h1>
 
</body>
</html>
 -->
 <!DOCTYPE html>
 <html>
 <head>
   <title> </title>
   <meta name="viewport" content="width=device-width,initital-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/bootstrap.min.css">
    <!-- coded by mk -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap.min.css">
    <!-- end of code by mk -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/style.css"> -->
    <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>template/js/bootstrap.min.js">
    </script>
    <!--<script type="text/javascript" src="<?php echo base_url();?>template/js/index.js"></script>-->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/fonts/fontawesome.webfont.eot"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/index-login-page.css">
    <script src = "<?php echo base_url();?>jquery.com/jquery-1.10.2.js"></script>
    <script src = "<?php echo base_url();?>jquery.com/ui/1.10.4/jquery-ui.js"></script>

     <script src="<?php echo base_url();?>template/js-king/jquery.js"></script> 
  <script src="<?php echo base_url();?>template/js-king/jquery.glide.js"></script>
    
    <script src="<?php echo base_url();?>template/js-king/jquery.localScroll.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>template/js-king/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url();?>template/js-king/wow.min.js" type="text/javascript"></script>  


    <style type="text/css">
      .navbar{
        position: fixed;
        top: 0px;
      }
      .rspace
              {
                text-align: right;
              }

      .footer{
            position:fixed;
            bottom: 0;
            width: 100%
            background-color:#004167;
             }
      .a{
        padding-right: 53px;
      }
      .background
      {
        background: url(images/myeo-background2.jpg);
        background-size: 100%;
        background-origin: 0;

      }

    </style>

    <script type="text/javascript">
            $(document).ready(function() {
            $('#navigation').localScroll({duration:800});
            });
    </script>
 </head>
 <body>
 
 <nav class="navbar navbar-default nav-justified" role="navigation" style="background-color:#004167;">
  <!-- <div class="col-md-12"> -->
    <ul class="nav navbar-nav col-md-12">
                  
        <li>
         <label class="col-md-3">
                <img src="<?=base_url();?>/images/myeo_logo.png"  width="71"  height="63" class='col-md-offset-2' />
         </label>       
        </li> 

        <li  id="navigation">
          <a href="<?=base_url()?>#slideshow-container1"><font style="color:#fff">Opportunity</font></a>
        </li> 

         <li>
          <a href="<?=base_url()?>Admin_new"><font style="color:#fff">Slider</font></a>
         </li>       

        <li class="col-md-offset-5">
               <?php $attribute=array("class"=> "form-inline"); echo form_open('user/login',$attribute);?>
                    <div class="form-group" style="padding-top:20px;">
                    
                    <input type="email"  class="form-control " name="email" placeholder="Email">
                    <?php echo form_error('email',"<div class='error' 
                      style='color:red'>","</div>");?>
                    <input type="password" class="form-control " name="password" placeholder="Password">
                    <?php echo form_error('password',"<div class='error' 
                      style='color:red'>","</div>");?>
                    <button type="submit" class="btn btn " value="LOG IN" 
                           style="color:white;background-color:transparent;border-color:white;height:30px;">LOG IN</button>
                   </div>
                </form>
        </li>

      </ul>
    <!-- </div> -->
  </nav>
  <!-- END OF NAV -->  

  <div  class="background" style="background-color:#06c3c3">
    <div style="padding-top:47px;">
      <h3 class="title-class" style="font-family:open-sans">Develop your skills and</h3>
      <h3 class="title-class" style="font-family:open-sans">discover your next opportunity</h3>
      <h3 class="title-class-3" style="font-family:">Post a new opportunity for free <a href="#" style="text-decoration: underline;color: white;"><font color="white">here</font></a></h3>
    </div>

    <!-- <div class="row"> -->
        <!-- <h3 class="title-class">Develop your skills and discover your next opportunity</h3>
        <h5>Post a new opportunity for free <a href="#">here</a></h5> -->
        <div class="col-md-4 col-md-offset-1 sign-in-apps" >
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
          <!-- <form role="form"> -->
            <?php echo form_open('home')?>
              <center><h5 class="title-class-2">Sign Up With Email</h5></center>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" style="background-color:transparent;color: white;" placeholder="Enter name" required="required">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" style="background-color:transparent;color: white;" placeholder="Enter email" required="required">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" style="background-color:transparent;color: white;" placeholder="Password" required="required">
              </div>
              <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="cfpassword" style="background-color:transparent;color: white;" placeholder="Password" required="required">
              </div>
              <center><button type="submit" class="btn btn-default" style="padding-bottom:10px;">Sign In</button> &nbsp; &nbsp; &nbsp;<a href="#" style="padding-bottom:20px; margin-right: 10px;text-decoration: none;color: #fff;margin-bottom: 20px;">Forgot password?</a></center>
              
          </form>
          <!-- </center> -->
        </div>  
       
      <!-- </div> -->


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
 
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

          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>

          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
</div>

<div style="text-align:center;background-color:#06c3c3;">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> 
<!-- END OF SLIDER -->

<div id="slideshow-container1" style="color: white">
    <img src="<?=base_url();?>/images/img3.jpg" style="width:100%;height:400px;">
</div>
<!-- Google Play :D :D  -->
  <div id="google-play-div">
    <img src="<?=base_url();?>/images/google-play-background.PNG" style="width:100%;height:500px;">
  </div>

  





<!-- FOOTER -->

<div class="footer" style="background-color:#004167;height:40px;width:100%;">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


  <label class="a"><img src="<?=base_url();?>/images/myeo_logo.png"  width="30px;" height="40px;" /></label>
  <label class="a">
  <a href="" style="text-decoration:none;"><font style="color:#fff"><span style="text-align: right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#fff">&copy; 2017</font></span></font></a>
  </label>
   <!-- <span style="text-align: right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
   <span>
              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">About</font></a></label>

              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Career</font></a></label>

             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Compus Chapter Program </font></a></label>

             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">User Aggrement</font></a></label>

             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Privacy Policy</font></a></label>

              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Cookie Policy</font></a></label>

              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Copyright Policy</font></a></label>

    </span>
</div> <!-- End Of Page Footer -->

 </body>
 </html>