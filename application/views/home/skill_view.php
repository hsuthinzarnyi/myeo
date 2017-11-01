 <!-- =======================RIGHT SIDE========================== -->
 <div class="right col-md-10">
<br>
    <?php echo form_open('Skill/search1');?>
     <div class="input-group col-md-offset-7">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </span>
      <input type="text" name="search" id="search" style="width:74%;" placeholder="search...." class="form-control " required>
                 <!-- echo form_error('search',"<div class='error'style='color:red'>","</div>");?> -->
                  <?php if(form_error('search')){?>
                   <script> alert('<?php echo form_error('search');?>');</script><?php } ?>
                   <?php {?>
                   <script> alert('<?php echo $res;?>');</script><?php } ?>
    </div>
    </form>
    <br>
      <?php foreach ($skill as $row) { ?>
     <div class="well well-lg row col-md-11" style="background-color:#FFF;height:150px;border-radius: 0px">
         <div class="col-md-3"><img src="<?=base_url();?>/images/myeo.jpg" width="100" height="91"></div>
              <div class="col-md-5">
                    <label><h4><?= $row->skill_title?></h4></label> <br>
                    <label> <?= $row->skill_subtitle?></label> <br>
                    <p><?= $row->skill_vdlink ?></p>
              </div>
     </div>
                    <?php  } ?>

                 <?php 
$this->pagination->initialize($pag);  
echo  $this->pagination->create_links();
?>

        
</div>
 </div><!-- End OF RIGHT SIDE -->
</div>
