<!-- ==========PAGE HEADER============ -->

<div class="row"  style="background-color: #004167" style="position: fixed">
    <span class="label_tag"> 
        <label class="col-md-3">
            <img src="<?=base_url();?>/images/myeo_logo.png" width="71" height="67" class="col-md-offset-1"/>
        </label>
        <div class="col-md-offset-5" style="padding:20px;">
            <a href="<?=base_url();?>Admin/upload"><font style="color:#fff">Upload Contents</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=base_url();?>Admin/get_oppdetail"><font style="color:#fff">Opportunity</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=base_url();?>Admin/get_skilldetail"><font style="color:#fff">Skills</font></a> 

            <ol class="dropdown pull-right"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url();?>images/pp.png"></span><b class="caret"></b></a>
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
</div> <!-- END OF PAGE HEADER -->

<div class="col-md-8 col-md-offset-2 form-group" style="background-color: #eceff1"> 
    <h1> Edit Opportunity Content!!! </h1>
    <br/>
    <?php if($edit != null) {?>
    <?php 
        foreach($edit as $row) {
            $vdlink=$edit->opp_vdlink;
            $image=$edit->opp_image;
            $title=$edit->opp_title;
            $subtitle=$edit->opp_subtitle;
            $description=$edit->opp_description;
            $choiceid=$edit->opp_id;
        }
    ?>
    <?php echo form_open(base_url().'Admin/upload', 'class="form-horizontal" method="post" ')?> 
    <br/>
    <div class="col-md-10 col-md-offset-1">
        
        <div class="form-group">
            <label>TITLE: </label></br>
            <input type="text" name="title" class="form-control" value="<?=$title;?>"> 
        </div>
        <div class="form-group">
            <label>SUBTITLE:</label></br>
            <input type="text" name="subtitle" class="form-control" value="<?=$subtitle;?>">
        </div>
        <div class="form-group">
            <label>DESCRIPTION:</label></br>
            <textarea name="description" rows="10" class="form-control" ><?=$description;?></textarea>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label">CHOOSE TYPE: </label>
            <div class="col-md-5">
                <input type="radio" name="choice" value=1 <?php echo 'checked'?>> <label > OPPORTUNITY </label> 
                <input type="radio" name="choice" value=2 data-toggle="collapse" class="accordion-toggle" data-target="#skill" > <label >SKILL</label>
            </div>
        </div>

        <div class="form-group" id="opportunity">
            <label class="col-md-5  control-label">CHOOSE ONE SUITABLE OPPORTUNITY:</label>
            <div class="col-md-5">
                <select name="opportunitychoice" class="chosen-select form-control">
                    <?php
                        foreach ($all_opp as $all) {
                            if($all->opp_id==$choiceid){
                                echo "<option value='".$all->opp_id."'selected>".$all->type."</option>";
                            }else{
                                echo "<option value='".$all->opp_id."'>".$all->type."</option>";
                            }
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group col-md-offset-1 collapse" id="skill">
            <label class="col-md-5  control-label">CHOOSE ONE SUITABLE SKILL:</label>
            <div class="col-md-5 ">
                <select name="skillchoice" class="chosen-select form-control" >
                    <?php 
                        foreach($all_skill as $all){
                            echo "<option value='".$all->skill_id."'>".$all->type."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label"> CHOOSE TO UPLOAD PICTURE or VEDIO</label>
            <div class="col-md-5">
                <?php
                    if($image){
                        echo "<input type='radio' name='uploadchoice' value=1 checked> <label>Image</label>
                            <input type='radio' name='uploadchoice' value=2 > <label>Vedio</label>";
                    }elseif($vdlink){
                        echo "<input type='radio' name='uploadchoice' value=1 > <label>Image</label>
                            <input type='radio' name='uploadchoice' value=2 checked> <label>Vedio</label>";
                    }else{
                        echo "<input type='radio' name='uploadchoice' value=1 > <label>Image</label>
                        <input type='radio' name='uploadchoice' value=2> <label>Vedio</label>";
                    }
                ?> 
            </div>
        </div>

        <div class="col-md-offset-5">   
            <div class="collapse fileinput" id="image">
                <input type="file" name="imageuploadchoice"  accept="image/*" onchange="showMyImage(this)" value="<?=$image?>">
                <img src="" style="width:60%; margin-top:10px;"></label>
            </div>
        </div>
        
        <div class="form-group col-md-offset-1 " id="vedio">
            <label class="col-md-5 control-label">Fill Vedio Link : </label>
            <div class="col-md-5">
                <input type="text" name="vediouploadchoice" value="<?=$vdlink;?>" class="form-control">
            </div>
        </div>

        <div data-large class="col-md-offset-11">
        <input type="submit" value="Save" class="form-group" >
        <br/> 
    </div>
    </div> <!-- END OF SECOND DIV -->
<!-- </form> END OF FORM -->
    <?php }else{ echo "<h4 style='color:red'>There is no record!!</h4>";}?>
</div> <!-- END OF FIRST DIV -->
