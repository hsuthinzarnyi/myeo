<!-- ================HTZN=================== -->
<!-- =====================BODY==================== -->

<div class="row">
    <div class="left">
    <?php echo form_open('custom/all'); ?>

      <div class="left-side  col-md-2" style="background-color:#FFF;padding-top:40px;height:800%">
         <div style="padding:30px;">
            <label>Custom</label><br>
           <!-- ==================Oppopritunities Drowdown======================= -->
        
        <h5 onclick="showOne('whathere')"><font style="color:#CCC" id="opp">Opportinities<b class="caret"></b></font></h5>
                <ul id="whathere">
                    
                         <?php foreach ($oppo as $row) { ?>
                        <a href="<?php echo base_url();?>Opportunity/oppdetail/<?=$row->opp_id?>" style="text-decoration:none;">
                        <font color="#CCC"><?= $row->type?></font></a><Br>
                        <?php } ?>
                    
                </ul>

         <!-- ==== End of Opportinities dropdown -->
         <!-- ==============Skills Drowdown======================= --> 

        <div>
                <h5 onclick="showOne('otherstuff')"><font style="color:#CCC" id="skill">Skills<b class="caret"></b></font></h5>

                    <ul id="otherstuff" >
                     <?php foreach ($skill as $row) { ?>
                                                <a href="<?php echo base_url();?>Skill/skilldetail/<?=$row->skill_id?>" style="text-decoration:none;">
                                                <font color="#CCC" class="link"><?= $row->type ?></font></a><Br>          
                                            <?php } ?>
                    </ul>
                    
        </div><!-- End of Skills dropdown -->

        
     </div><!-- End of Left-side -->
     </div>
    </form>
    </div>
    <!-- END OF LEFT SIDE -->
<div class="right">

<!-- <baimg src="<?=base_url();?>images/grey.jpg"> -->
<!-- =======================RIGHT SIDE========================== -->
 <div class="col-md-10">
<br>
   <?php echo form_open('Opportunity/search');?>
     <div class="input-group col-md-offset-6">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </span>
      <input type="text" name="search" id="search" style="width:50%;" placeholder="search...." class="form-control ">
    </div>
    </form>

     <br>
     <?php foreach ($search as $row) { ?>
     <div class="well well-lg row col-md-9" style="background-color:#FFF;margin-left:25px;">
         <div class="col-md-3"><img src="<?=base_url();?>/images/myeo.jpg" width="100" height="91"></div>
              <div class="col-md-5">
                    <label><h4><?= $row->opp_title ?></h4></label> <br>
                    <label> <?= $row->opp_subtitle ?></label> <br>
                                 
                    <p><?= $row->opp_vdlink ?></p>

              </div>
     </div>
    <?php  } ?> 

    
  <!--   <?php foreach ($result as $row) { ?>
     <div class="well well-lg row col-md-9" style="background-color:#FFF;margin-left:25px;">
         <div class="col-md-3"><img src="<?=base_url();?>/images/myeo.jpg" width="100" height="91"></div>
              <div class="col-md-5">
                    <label><h4><?= $row->skill_title ?></h4></label> <br>
                    <label>  <?= $row->skill_subtitle ?></label> <br>
                                 
                    <p><?= $row->skill_vdlink ?></p>

              </div>
     </div>
    <?php  } ?> -->

        
 </div><!-- End OF RIGHT SIDE -->
 

</div>
    <!-- </div> -->
    <!-- END OF RIGHT SIDE -->
</div>