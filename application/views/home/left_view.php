<!-- ================HTZN=================== -->

  <div class="left">
    <?php echo form_open('custom/all'); ?> 

       <?php echo form_open('custom/all'); ?>

      <div class="left-side  col-md-2" style="background-color:#FFF;padding-top:40px;height:800%">
         <div style="padding:30px;">
            <label>Home</label><br>
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
    </form>
    </div>