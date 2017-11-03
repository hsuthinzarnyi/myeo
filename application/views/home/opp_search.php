<!-- HSU THINAR NYI -->
<!-- ===========PAGE HEADER=========== -->
<div class="col-md-12">
<div class="row pg_header"  style="background-color:#004167" >
<!-- <span class="label_tag"> -->
    <label class="col-md-3" id="navigations">
        <img src="<?=base_url();?>/images/myeo_logo.png"  width="71"  height="63" class='col-md-offset-2' />
    </label>

    <div class=" col-md-offset-4" style="padding-top:15px" >
          <a href="<?=base_url();?>custom" style="font-size: 20px;text-decoration: none;color: white;">Home<a>
            <span style="padding-left: 65px;color: white;margin-right:">|</span>
          <a href="<?=base_url();?>opportunity" style="color: #85EC14;padding-right:30px;padding-left: 55px;font-size: 20px;text-decoration: none;">Opportunities</a>
            <span style="padding-left: 35px;color: white">|</span>

         <a href="<?=base_url();?>skill" style="font-size: 20px;text-decoration: none;color: white;margin-left: 55px">Skills</a>
    <!-- ==============PROFILE ICON=================== -->
        <ol class="dropdown pull-right" style="margin-right: 65px"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url();?>images/pp.png" width="35px"></span><b class="caret"></b></a>
            <ol class="dropdown-menu" style="background-color:#CCC">
                <div style="background-color: #CCC">
                  <label><?php echo $data->name;?></label>
                  <a href="<?=base_url();?>profile/create"><h5 style="color: black">Edit Profile</h5></a>
                  <a href="<?=base_url();?>logout/logout"><h5 style="color: black">Log Out</h5></a>
                </div>
            </ol>
            </ol> 
            <!-- END OF PROFILE ICON -->

    </div>
</span>
</div>
</div>

<!--  -->