<!-- ==========PAGE HEADER============ -->

<div class="row"  style="background-color: #004167" style="position: fixed">
    <span class="label_tag"> 
        <label class="col-md-3">
            <img src="<?=base_url();?>/images/myeo_logo.png" width="71" height="67" class="col-md-offset-1"/>
        </label>
        <div class="col-md-offset-5" style="padding:20px;">
            <a href="<?=base_url();?>Admin/upload"><font style="color:#fff">Upload Contents</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=base_url();?>Admin/get_oppdetail"><font style="color:#fff">Opportunity</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=base_url();?>Admin/get_skilldetail/"><font style="color:#fff">Skills</font></a> 

            <ol class="dropdown pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> <b class="caret"> </b></span></a>
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
</div> <!-- END OF PAGE HEADER -->


<!-- ===========BODY============ -->

<div class="col-md-8 col-md-offset-2 form-group" style="background-color: #eceff1"> <!-- f0f0f0 eceff1 efebe9 fafafa eeeeee e3f2fd bbdffb e0e0e0 EFEBE9 -->
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
            <textarea name="description" placeholder="*Fill Description" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label class="col-md-5 control-label">CHOOSE TYPE: </label> 
            <div class="col-md-5">
                <input type="radio" name="choice" id="oppchoice" onclick="showOne('opp')"> 
                <label>Opportunity</label>
                <input type="radio" name="choice" id="skillchoice" onclick="showOne('skill')"> <label>Skill</label>
            </div>
        </div> 
        <div class="form-group col-md-12">       
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
                <img src="" style="width:60%; margin-top:10px;"></label>
            </div>
        </div>
        <div class="form-group collapse col-md-offset-1 " id="vedio">
            <label class="col-md-5 control-label">Fill Vedio Link : </label>
            <div class="col-md-5">
                <input type="text" name="vediouploadchoice" placeholder="*paste_vedio_link" class="form-control">
            </div>
        </div>
       <!--  </div> -->
        
        <div data-large class="col-md-offset-11">
            <input type="submit" value="Save" class="form-group" >
            <br/>
        </div>
        <br/>
    </div> <!-- END OF SECOND DIV -->
</form> <!-- END OF FORM -->
</div> <!-- END OF FIRST DIV -->
