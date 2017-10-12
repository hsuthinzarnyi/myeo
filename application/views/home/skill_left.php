<!-- ================HTZN=================== -->
<!-- ==========================BODY========================= -->
<div class="row1">
    <!-- ==============LEFT SIDE============= -->
     <div class="left  col-md-2" style="background-color:#FFF;padding-top:40px;">
         <div style="padding:30px;">
            <a href="<?=base_url();?>custom" style="text-decoration:none"><font color="#000">Custom</font></a><br>
            <?php foreach ($skill as $row) { ?>
            <a href="<?php echo base_url();?>Skill/skilldetail/<?=$row->skill_id?>" style="text-decoration:none;"><font color="#CCC" class="link"><?= $row->type ?></font></a><Br>
          
            <?php } ?>
        </div>


     </div><!-- End of Left-side -->
 <!-- </div> -->
 <!-- End of LEft -->