

<!-- ===========PAGE HEADER=========== -->

<div class="row" class="pg_header"  style="background-color:#004167" style="position:fixed">
<span class="label_tag">
    <label class="col-md-3">
  		  <img src="<?=base_url();?>/images/myeo_logo.png"  width="71"  height="63" class='col-md-offset-2' />
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

</div><!-- End Of Page Header -->


<!-- <div class="row" height="60%">
	<img src="<?=base_url();?>images/myeo.jpg" width="100%" height="200px">  

</div> -->
<!--==================FORM=========================-->
<div class="login">
<div class="container" >
   
 <div class="col-md-6">
 	<center>
 	   <hgroup>
  <h1>Material Design Form</h1>
  <h3>By Josh Adamous</h3>
</hgroup>
<form>
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Name</label>
  </div>
  <div class="group">
    <input type="email"><span class="highlight"></span><span class="bar"></span>
    <label>Email</label>
  </div>
  <button type="button" class="button buttonBlue">Subscribe
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
 		
 	</center>
 </div>
 
 <div class="col-md-6">
 	<center>
 	  <hgroup>
  <h1>Material Design Form</h1>
  <h3>By Josh Adamous</h3>
</hgroup>
<form >
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Name</label>
  </div>
  <div class="group">
    <input type="email" style="background-color:transparent;border-color:white;"><span class="highlight" ></span><span class="bar"></span>
    <label>Email</label>
  </div>
  <button type="button" class="button buttonBlue">Subscribe
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>	
<!-- <footer><a href="http://www.polymer-project.org/" target="_blank"><img src="https://www.polymer-project.org/images/logos/p-logo.svg"></a>
  <p>You Gotta Love <a href="http://www.polymer-project.org/" target="_blank">Google</a></p>
</footer>  -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
 	</center>
 </div>
</div>
</div>
<!--========================End of FORM=====================-->
<!--========================SLIDER==========================-->
<!--========================End OF SLIDER===================-->
<!--========================Android Logo====================-->
<!--========================End of Android Logo=============-->
<!--========================FOOTER==========================-->
<!-- ===========PAGE FOOTER=========== -->

<div class="page_footer1 col-md-12" id="pg_footer" style="background-color:#004167;height:40px; padding-left:50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



  <label class="a"><img src="<?=base_url();?>/images/myeo_logo.png"  width="30px;" height="40px;" /></label>
  <label class="a">
  <a href="" style="text-decoration:none;"><font style="color:#fff"><span style="text-align: right"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#fff"><span class="glyphicon glyphicon-copyright-mark"></span>2017</font></span></font></a>
  </label>
   <!-- <span style="text-align: right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
   <span>
              <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">About</font></a></label>
                <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
               <label class="a"><a href="#" style="text-decoration:none;"><font style="color:#fff">Contact</font></a></label>
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
</body>
</html>
<!--=======================End of Footer====================-->



