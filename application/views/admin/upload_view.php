<!-- ==========PAGE HEADER============ --> 
<div class="col-md-12">
<div class="row"   style="background-color:#004167" style="position:fixed;" >
<span  padding-top="5px">
    <label class="col-md-3">
        <img src="<?=base_url();?>/images/myeo_logo.png" style="padding-top:11px" width="65"  height="63" class='col-md-offset-2' />
    </label>
    <div class="col-md-offset-5" style="padding:20px;">
            <a href="<?=base_url();?>Admin/upload"><font style="color:#fff">Upload Contents</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=base_url();?>Admin/get_oppdetail"><font style="color:#fff">Opportunity</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=base_url();?>Admin/get_skilldetail/"><font style="color:#fff">Skills</font></a> 

           <ol class="dropdown pull-right" style="margin-right: 25px"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url();?>images/pp.png" width="35px"></span><b class="caret"></b></a>
            <ol class="dropdown-menu" style="background-color:#CCC">
                <!-- <div class="col-md-4"><img src="<?=base_url();?>pp.PNG"></div> -->
                <div style="background-color: #CCC">
                  <label>HSu Thinzar Nyi</label>
                  <a href="<?=base_url();?>profile/create"><h5 style="color: black">Edit Profile</h5></a>
                  <a href="<?=base_url();?>logout/logout"><h5 style="color: black">Log Out</h5></a>
                </div>
            </ol>
            </ol>
        </div>
 </span>

</div><!-- End Of Page Header -->
</div><!-- End Of Page Header -->
<!-- HTN -->

<!-- ===========BODY============ -->

<div class=" container1 col-md-8 col-md-offset-2 " style="padding-top:10px;"> <!-- f0f0f0 eceff1 efebe9 fafafa eeeeee e3f2fd bbdffb e0e0e0 EFEBE9 -->
    <center><h1>Create Your Informations</h1></center>
    <?php echo form_open(base_url().'Admin/upload', 'class="form-horizontal" method="post" ')?> 
    <br/>
    <div class="col-md-10 col-md-offset-1">
        
        <div class="form-group">
            <label>TITLE: </label></br>
            <input type="text" name="title" placeholder="*Titles" class="form-control" > 
        </div>
        <div class="form-group">
            <label>SUBTITLE:</label></br>
            <input type="text" name="subtitle" placeholder="*Subtitle" class="form-control">
        </div>
        <div class="form-group">
            <label>DESCRIPTION:</label></br>
            
            
            <?php echo $this->ckeditor->editor('desccription')?>

        </div>
        <div class="form-group">
            <label class="col-md-5 control-label">CHOOSE TYPE: </label> 
            <div class="col-md-5">
                <input type="radio" name="choice" id="oppchoice" onclick="showOne('opp')"> 
                <label>Opportunity</label>
                <input type="radio" name="choice" id="skillchoice" onclick="showOne('skill')"> <label>Skill</label>
            </div>
        </div> 
        <div class="row">       
            <ul class="form-group" id="opp">
                <label class="col-md-5  control-label">CHOOSE ONE SUITABLE OPPORTUNITY:</label>
                <div class="col-md-5">
                    <select name="opportunitychoice" class="chosen-select form-control" >
                        <?php 
                            foreach($all_opp as $all){
                                echo "<option value='".$all->opp_id."'>".$all->type."</option>";
                            }
                        ?>
                    </select>
                </div>
            </ul>  
        </div>
        <div class="form-group col-md-12" >
            <ul class="form-group" id="skill">
                <label class="col-md-5  control-label">CHOOSE ONE SUITABLE SKILL:</label>
                <div class="col-md-5">
                    <select name="skillchoice" class="chosen-select form-control" >
                        <?php 
                            foreach($all_skill as $all){
                                echo "<option value='".$all->skill_id."'>".$all->type."</option>";
                            }
                        ?>
                    </select>
                </div>
                    
            </ul>
        </div>    
        <div class="form-group">
            <label class="col-md-5 control-label"> CHOOSE TO UPLOAD PICTURE or VEDIO</label>
            <div class="col-md-5">
                <input type="radio" name="uploadchoice" value=1 data-toggle="collapse" class="accordion-toggle" data-target="#image">
                <label>Image</label>
                <input type="radio" name="uploadchoice" value=2 data-toggle="collapse" class="accordion-toggle" data-target="#vedio">
                <label>Vedio</label>
            </div>
        </div>
            
        <div class="col-md-offset-5">   
            <div class="collapse fileinput" id="image">
                <input type="file" name="imageuploadchoice"  accept="image/*" onchange="showMyImage(this)">
                <img src="" style="width:60%; margin-top:10px;">
            </div>
        </div>
        <div class="form-group collapse col-md-offset-1 " id="vedio">
            <label class="input col-md-5 control-label">Fill Vedio Link : </label>
             <div class="input-placeholder col-md-5"><input type="text" required name="vediouploadchoice" class="form-control">
                  <div class="placeholder" style="margin-left: 11px">
                      <span>*</span> <font color="grey">paste_vedio_link</font>
                  </div>
        </div>
        </div>
       <!--  </div> -->
        
        <div data-large class="col-md-offset-11">
            <input type="submit" value="Save" class="form-group" >
            <br/>
        </div>
        <br/><br/><br/>
    </div> <!-- END OF SECOND DIV -->
</form> <!-- END OF FORM -->
</div> 
<!-- END OF FIRST DIV -->
                                 <!--FOR NAV-->
<!-- <div class="row" style="background-color: #004167;width:100%;position:fixed;">
   
    <span class="label_tag"> 
        <label class="col-md-3">
            <img src="<?=base_url();?>/images/myeo_logo.png" width="71" height="67" class="col-md-offset-1"/>
        </label>
        <div class="col-md-offset-5" style="padding:20px;">
            <a href="<?=base_url();?>Admin/upload"><font style="color:#fff">Upload Contents</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=base_url();?>Admin/get_oppdetail"><font style="color:#fff">Opportunity</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=base_url();?>Admin/get_skilldetail/"><font style="color:#fff">Skills</font></a> 

            <ol class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url();?>images/pp.png"></span><b class="caret"></b></a>
                <ul class="dropdown-menu" style="background-color:#CCC">
                    <div class="col-md-4">
                        <img src="<?=base_url();?>logo.png">
                    </div>
                    <div class="col-md-offset-1">
                        <label>Hsu Thinzar Nyi</label>
                        <a href="<?=base_url();?>profile/" class="btn" style="background-color: #004167"> <font color="#fff">Edit Your Profile </font></a>
                    </div>
                </ul>
            </ol>
        </div>
   </span>
</div> 