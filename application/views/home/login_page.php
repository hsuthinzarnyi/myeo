

<!-- ===========PAGE HEADER=========== -->



 
<div class="row" class="pg_header" style="background-color:#004167">
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

<div class="image">
  <img src="<?=base_url();?>images/myeo-background.jpg" width="100%">  

</div> 

<!--==================FORM=========================-->

<!--========================End of FORM=====================-->
<!--========================SLIDER==========================-->
<!--========================End OF SLIDER===================-->
<!--========================Android Logo====================-->
<!--========================End of Android Logo=============-->
<!--========================FOOTER==========================-->
<!-- ===========PAGE FOOTER=========== -->




