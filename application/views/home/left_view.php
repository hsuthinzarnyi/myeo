<!-- ================HTZN=================== -->
  <div class="left" style="padding-top:px;">
    <?php echo form_open('custom/all'); ?> 

      <div class="left-side  col-md-2" style="background-color:#FFF;padding-top:40px;height:800%">
         <div style="padding:30px;" class="dd">
            <a href="<?=base_url();?>custom" style="text-decoration:none"><font color="#060606">Home</font></a><br>
           <!-- ==================Oppopritunities Drowdown======================= -->
        
        <h5 onclick="showOne('whathere')"  data-toggle="collapse" data-target="#opp"><font style="color:#B0A8A8">Opportunity<b class="caret"></b></font></h5>
        <div id="opp" class="collapse ">
                <ul id="whathere" >
                    
                         <?php foreach ($oppo as $row) { ?>
                        <a href="<?php echo base_url();?>Opportunity/oppdetail/<?=$row->opp_id?>" style="text-decoration:none;line-height: 30px">
                        <?= $row->type?></a><Br>
                        <?php } ?>
                    
                </ul>
        </div>
         <!-- ==== End of Opportinities dropdown -->
         <!-- ==============Skills Drowdown======================= --> 

        <div>
                <h5 onclick="showOne('otherstuff')" data-toggle="collapse" data-target="#skill"><font style="color:#CCC">Skills<b class="caret"></b></font></h5>
        <div id="skill" class="collapse ">
                    <ul id="otherstuff" >
                     <?php foreach ($skill as $row) { ?>
                                                <a href="<?php echo base_url();?>Skill/skilldetail/<?=$row->skill_id?>" style="text-decoration:none;line-height: 30px">
                                                <?= $row->type ?></a><Br>          
                                            <?php } ?>
                    </ul>
        </div>           
        </div><!-- End of Skills dropdown -->

        
     </div><!-- End of Left-side -->
     </div>
    </form>
    </div>