
<!-- ================HTZN=================== -->
<!-- =====================BODY==================== -->

<div class="row1" style="padding-top:1px;background-color: #f0f0f0">
  
    <!-- END OF LEFT SIDE -->
<div class="right">

<!-- <baimg src="<?=base_url();?>images/grey.jpg"> -->
<!-- =======================RIGHT SIDE========================== -->
 <div class="col-md-12">
<br>
   <?php echo form_open('Custom/search');?>
      <div class="input-group col-md-offset-6">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </span>
      <input type="text" name="search" id="search" style="width:50%;" placeholder="search...." class="form-control ">
    </div>
    
    </form>

     <br>
     <?php foreach ($oppo as $row) { ?>
     <div class="well well-lg row col-md-11" style="background-color:#FFF;margin-left:25px;">
         <div class="col-md-3"><img src="<?=base_url();?>/images/myeo.jpg" width="100" height="91"></div>
              <div class="col-md-5">
                    <label><h4><?= $row->opp_title?></h4></label> <br>
                    <label> <?= $row->opp_subtitle?></label> <br>
                                 
                    <p><?= $row->opp_vdlink ?></p>

              </div>
     </div>
    <?php  } ?>

    
    <?php foreach ($skill as $row) { ?>
     <div class="well well-lg row col-md-11" style="background-color:#FFF;margin-left:25px;">
         <div class="col-md-3"><img src="<?=base_url();?>/images/myeo.jpg" width="100" height="91"></div>
              <div class="col-md-5">
                    <label><h4><?= $row->skill_title ?></h4></label> <br>
                    <label>  <?= $row->skill_subtitle ?></label> <br>
                                 
                    <p><?= $row->skill_vdlink ?></p>

              </div>
     </div>
    <?php  } ?>

        
 </div><!-- End OF RIGHT SIDE -->
 

</div>
    <!-- </div> -->
    <!-- END OF RIGHT SIDE -->
</div>