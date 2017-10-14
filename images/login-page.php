<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width,initital-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/bootstrap.min.css">
	  <!-- coded by mk -->
	  <link rel="stylesheet" type="text/css" href="index.css">
	  <link rel="stylesheet" type="text/css" href="bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
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

 	<script>
	 	$(document).ready(function(){
	 		$('#example').dataTables();
	 	});
 	</script>
 	
 	<script>
         $(function() {
            $( "#datepicker-1" ).datepicker({
               //appendText:"(yy-mm-dd)",
               dateFormat:"yy-mm-dd",
               // altField: "#datepicker-2",
               // altFormat: "DD, d MM, yy"
            });
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

.page_footer{position: relative;
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

}
.login
{
  background: url(myeo.jpg);
  background-size: 100%;
  background-origin: 0;

}
.rspace
{
  text-align: right;
}
.form-inline
{
  padding-right: 20px;
}

/*.left-side{
  position: fixed;
  left: 0px;
}*/

/*.page_header{
  width: 100%;
position: fixed;}*/
/*.container-1{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
.container-1 input#search{
  width: 300px;
  height: 50px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  float: left;
  color: #63717f;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.container-1 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-1 input#search:-moz-placeholder {  Firefox 18- 
   color: #65737e;  
}
 
.container-1 input#search::-moz-placeholder {   Firefox 19+ 
   color: #65737e;  
}
 
.container-1 input#search:-ms-input-placeholder {  
   color: #65737e;  
}
.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
}
.container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
    outline:none;
    background: #ffffff;
  }
  .container-1 input#search{
  width: 300px;
  height: 50px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  float: left;
  color: #262626;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
 
   
    -webkit-transition: background .55s ease;
  -moz-transition: background .55s ease;
  -ms-transition: background .55s ease;
  -o-transition: background .55s ease;
  transition: background .55s ease;
}*/
</style>



</head>
<body style="">
	<!-- ===========PAGE HEADER=========== -->

<div class="row" class="pg_header"  style="background-color:#004167" style="position:fixed">
<span class="label_tag">
    <label class="col-md-3">
  		  <img src="myeo_logo.png"  width="71"  height="63" class='col-md-offset-2' />
    </label>
    <span class="rspace" >
    
    <?php $attribute=array("class"=> "form-inline");
      echo form_open('user/login',$attribute);?>
        <div class="form-group" style="padding-top:20px;">
        <center>
        <input type="email"  class="form-control " name="email" placeholder="Email">
        <?php echo form_error('email',"<div class='error' 
          style='color:red'>","</div>");?>
        <input type="text" class="form-control " name="password" placeholder="Password">
        <?php echo form_error('password',"<div class='error' 
          style='color:red'>","</div>");?>
        <button type="submit" class="btn btn" value="LOG IN" 
               style="color:white;background-color:transparent;border-color:white;height:30px;border-radius:35%;">LOG IN</button>
       </div>
       </center>
       </form>
       
     </span>
  </span>

</div>
	<!-- Login Div -->
	<div style="background: url(myeo-background.jpg);">
		<div>
			<h3 class="title-class">evelop your skills and</h3>
			<h3 class="title-class">discover your next opportunity</h3>
			<h3 class="title-class-3">Post a new opportunity for free 	<a href="#">here</a></h3>
		</div>
		<div>
			<div class="row justify-content-around margin-pad">
				<!-- <h3 class="title-class">Develop your skills and discover your next opportunity</h3>
				<h5>Post a new opportunity for free <a href="#">here</a></h5> -->
				<div class="col-4 sign-in-apps">
					<h5 class="title-class-2">Sign In With</h5>
						
							<div class="with-facebook">
								<img src="100417_fb.png">
								<a href="#">Sign In With Facebook</a>
							</div>
							<div class="with-google-plus">
								<img src="100417_gplus.png">
								<a href="#">Sign In With Google Plus</a>
							</div>                                                       
							<div class="with-linkedin">
								<img src="100417_linkedin.png">
								<a href="#">Sign In With LinkedIn</a>
							</div>
						
				</div>
				<div class="col-4 sign-up-with-email"><!-- style="text-align: center;padding-left: 50px;" -->
					<form action="" method="">
						<div id="sign-up-with-email-form">
							<h5 class="title-class-2">Sign Up With Email</h5>
							<div>
								<label for="sign-up-name">Name</label>
							</div>
							<div>
								<input type="text" name="" id="sign-up-name">
							</div>
							<div>
								<label for="sign-up-email">Email</label>
							</div>
							<div>
								<input type="text" name="" id="sign-up-email">
							</div>
							<div>
								<label for="">Password</label>
							</div>
							<div>
								<input type="text" name="">
							</div>
							<div>
								<label for="">Comfirm Password</label>
							</div>
							<div>
								<input type="text">
							</div>
							<div>
								<input type="submit" value="SIGN UP" id="sign-but-form" style="background: transparent;">
							</div>
							<a href="#" style="float: right;margin-right: 10px;text-decoration: none;color: #fff;margin-bottom: 20px;">Forgot password?</a>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>
</div>

<!-- slide show -->
<!-- code from w3 schools -->
	 <div class="slideshow-container">
	 	<div class="slideshow-title the-height">
	 		<h3 class="title-class">featured opportunity</h3>
	 	</div>
	  	<div class="mySlides fade">
		    <div class="text">Caption Text</div>
		    	<img src="img1.PNG" style="width:100%">
	  	</div>

	  	<div class="mySlides fade">
		    <div class="text">Caption Two</div>
		    	<img src="img2.PNG" style="width:100%">
	  	</div>

	  	<div class="mySlides fade">
	    	<div class="text">Caption Three</div>
	    		<img src="img3.PNG" style="width:100%">
	  	</div>
	</div>

	<br>

	<div class="the-height" style="text-align:center;">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
	</div> 

<!-- Google Play :D :D  -->
	<div id="google-play-div">
		
	</div>
<!-- FOOTER -->
<div class="page_footer col-md-12" id="pg_footer" style="background-color:#004167;height:40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


  <label class="a"><img src="myeo_logo.png"  width="30px;" height="40px;" /></label>
  <label class="a">
  <a href="" style="text-decoration:none;"><font style="color:#fff"><span style="text-align: right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#fff">&copy; 2017</font></span></font></a>
  </label>
   <!-- <span style="text-align: right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
   <span>
              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">About</font></a></label>
                <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Career</font></a></label>
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Compus Chapter Program </font></a></label>
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">User Aggrement</font></a></label>
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
             <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Privacy Policy</font></a></label>
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Cookie Policy</font></a></label>
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Copyright Policy</font></a></label>

    </span>
</div> <!-- End Of Page Footer -->

<script>
    function showMyImage(fileinput){
        var files = fileinpiut.files;
        for (var i = 0; i < files.length ; i++) {
            var file = files[i];
            var imageType = /image.*/;
            if (!file.type.match(imageType)) {
                continue;
            }

            var img = document.getElementById('limage');
            img.file = file ;
            var reader = new FileReader();
            reader.onload = (function(aImg){
                return function(e){
                    aImg.src = e.target.result;
                };
            })(img);
            reader.readAsDataURL(file);
        }
    }

        function showMyPdf(fileinput2){
            var files = fileinput2.files;
            for(var i = 0 ;i < files.length ; i++) {
                var file = files[i];
                var pdfType = /pdf.*/;
                if(!file.type.match(p dfType)) {
                    continue;
                }

                var pdf = document.getElementById('lpdf');
                pdf.file = file ;
                var reader = new FileReader();
                reader.onload = (function(aPdf){
                    return function(e){
                        aPdf.src = e.target.result;
                    };
                })(pdf);
                reader.readAsDataURL(file);
            }
        }
</script>
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