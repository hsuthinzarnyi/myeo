

 <!-- =======================RIGHT SIDE========================== -->
 <div class="right col-md-9">
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
    <?php foreach ($oppo as $row) { ?>
       <div class="well well-lg row col-md-9" style="background-color:#FFF;margin-left:25px;">
           <div class="col-md-3"><img src="<?=base_url();?>/images/myeo.jpg" width="100" height="91"></div>
                <div class="col-md-5">
                      <label><h4><?=$row->opp_title?></h4></label> <br>
                      <label> <?=$row->opp_subtitle ?></label> <br>
                      <p><?= $row->opp_vdlink ?></p>

                </div>
       </div>
    <?php  } ?> 

        
</div><!-- End OF RIGHT SIDE -->
 </div>
