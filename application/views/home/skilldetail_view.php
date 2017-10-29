<!-- ================HTZN=================== -->
<!-- <div class="row">
     <?php echo form_open('custom/all'); ?>

      <div class="left-side  col-md-2" style="background-color:#FFF;padding-top:40px;height:800%">
         <div style="padding:30px;">
            <label>Custom</label><br> -->
           <!-- ==================Oppopritunities Drowdown======================= -->
        <!-- 
        <h5 onclick="showOne('whathere')"><font style="color:#CCC" id="opp">Opportinities<b class="caret"></b></font></h5>
                <ul id="whathere">
                    
                         <?php foreach ($oppo as $row) { ?>
                        <a href="<?php echo base_url();?>Opportunity/oppdetail/<?=$row->opp_id?>" style="text-decoration:none;">
                        <font color="#CCC"><?= $row->type?></font></a><Br>
                        <?php } ?>
                    
                </ul> -->

         <!-- ==== End of Opportinities dropdown -->
         <!-- ==============Skills Drowdown======================= --> 

       <!--  <div>
                <h5 onclick="showOne('otherstuff')"><font style="color:#CCC" id="skill">Skills<b class="caret"></b></font></h5>

                    <ul id="otherstuff" >
                     <?php foreach ($skill as $row) { ?>
                                                <a href="<?php echo base_url();?>Skill/skilldetail/<?=$row->skill_id?>" style="text-decoration:none;">
                                                <font color="#CCC" class="link"><?= $row->type ?></font></a><Br>          
                                            <?php } ?>
                    </ul>
                    
        </div> --><!-- End of Skills dropdown -->

        
    <!--  </div>End of Left-side
     </div>
     </form>End of Left-side
 <!- -->
<!-- </div> -->
 <!-- End of LEft -->

 <!-- =======================RIGHT SIDE========================== -->
 <!-- <div class="right col-md-10">
<br>
    <?php echo form_open('Skill/search1');?>
     <div class="input-group col-md-offset-6">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </span>
      <input type="text" name="search" id="search" style="width:50%;" placeholder="search...." class="form-control ">
    </div>
    </form>
    <br>
      <?php foreach ($skill_detail as $row) { ?>
     <div class="well well-lg row col-md-9" style="background-color:#FFF;margin-left:25px;" id="growing">
         <div class="col-md-3"><img src="<?=base_url();?>/images/myeo.jpg" width="100" height="91"></div>
              <div class="col-md-5">
                    <label><h4><?= $row->skill_title?></h4></label> <br>
                    <label> <?= $row->skill_subtitle?></label> <br>
                                 
                    <p><?= $row->skill_vdlink ?></p>

              </div>
      </div>
                    <?php  } ?>
  </div>
 </div><!-- End OF RIGHT SIDE -->
<!-- </div>  -->
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
          <a href="<?=base_url();?>opportunity" style="color: white;padding-right:30px;padding-left: 55px;font-size: 20px;text-decoration: none;">Opportunities</a>
            <span style="padding-left: 35px;color: white">|</span>
         <a href="<?=base_url();?>skill" style="font-size: 20px;text-decoration: none;color: #85EC14;margin-left: 55px">Skills</a>
    <!-- ==============PROFILE ICON=================== -->
        <ol class="dropdown pull-right" style="margin-right: 25px"> 
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
