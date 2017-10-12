<!-- ================HTZN=================== -->
<!-- ==========================BODY========================= -->

 <div class="row1">
    <!-- ==============LEFT SIDE============= -->
     
     <div class="left  col-md-3" style="background-color:#FFF;padding-top:40px;">
         <div style="padding:30px;">
            <a href="<?=base_url();?>custom" style="text-decoration:none"><font color="#000">Home</font></a><br>
             
                  <?php foreach ($oppo as $row) { ?>

            <a href="<?php echo base_url();?>opportunity/oppdetail/<?=$row->opp_id?>" style="text-decoration:none;"><font color="#CCC" class="link"><?= $row->type ?></font>
            </a><br/>
          
                   <?php } ?>
        </div>
    </div>
    <!-- End of LEft -->