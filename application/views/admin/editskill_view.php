<!-- ==========PAGE HEADER============ -->

<div class="row"  style="background-color: #004167" style="position: fixed">
    <span class="label_tag"> 
        <label class="col-md-3">
            <img src="<?=base_url();?>/images/myeo_logo.png" width="71" height="67" class="col-md-offset-1"/>
        </label>
        <div class="col-md-offset-5" style="padding:20px;">
            <a href="<?=base_url();?>Admin/upload"><font style="color:#fff">Upload Contents</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=base_url();?>Admin/get_oppdetail"><font style="color:#fff">Opportunities</font></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?=base_url();?>Admin/get_skilldetail"><font style="color:#fff">Skills</font></a> 

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

<div class="col-md-8 col-md-offset-2 form-group" style="background-color: #eceff1"> 
    <h1> Edit Opportunity Content!!! </h1>
    <br/>
    <?php if($edit != null) {?>
    <?php 
        foreach($edit as $row) {
            $vdlink=$edit->skill_vdlink;
            $image=$edit->skill_image;
            $title=$edit->skill_title;
            $subtitle=$edit->skill_subtitle;
            $description=$edit->skill_description;
            $choiceid=$edit->skill_id;
        }
    ?>
    <?php 
        $skillid = $this->uri->segment(3);
    ?>
    <?php echo form_open(base_url().'admin/edit_skill/'.$skillid, 'class="form-horizontal" method="post" ')?> 
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
            <?php echo $this->ckeditor->editor('description',"$description")?>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label">CHOOSE TYPE: </label>
            <div class="col-md-5">
                <input type="radio" name="choice" value=1 disabled="disabled"> <label > OPPORTUNITY </label> 
                <input type="radio" name="choice" value=2 <?php echo 'checked'?>> <label >SKILL</label>
            </div>
        </div>
        <div class="form-group col-md-offset-1 " > <!-- id="skill" -->
            <label class="col-md-5  control-label">CHOOSE ONE SUITABLE SKILL:</label>
            <div class="col-md-5 ">
                <select name="skillchoice" class="chosen-select form-control" >
                    <?php 
                        foreach($all_skill as $all){
                            if($all->skill_id==$choiceid){
                                echo "<option value='".$all->skill_id."'selected>".$all->type."</option>";
                            }else{
                                echo "<option value='".$all->skill_id."'>".$all->type."</option>";
                            }
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
                        echo "<input type='radio' name='uploadchoice' value=1 id='imagechoice' checked> <label>Image</label>
                            <input type='radio' name='uploadchoice' value=2 id='videochoice' disabled='disabled'> <label>Video</label>";
                    }elseif($vdlink){
                        echo "<input type='radio' name='uploadchoice' value=1 disabled='disabled'> <label>Image</label>
                            <input type='radio' name='uploadchoice' value=2 checked> <label>Video</label>";
                    }
                ?> 
            </div>
        </div>
        <?php if($image){?>
            <div class="form-group" id="image">
                <div class="col-md-offset-5">
                    <div class="fileinput">
                        <input type="file" name="imageuploadchoice" accept="image/*" onchange="showMyImage(this)" value="<?=$image?>">
                        <img src="" style="width: 60%; margin-top: 10px;">
                        <input type="hidden" name="imageuploadchoice1" value="<?=$image?>">
                    </div>
                </div>
            </div>
        <?php }elseif($vdlink){?>
            <div class="form-group col-md-offset-1 ">
                <label class="col-md-5 control-label">Fill Video Link : </label>
                <div class="col-md-5">
                    <input type="text" name="videouploadchoice" value="<?=$vdlink;?>" class="form-control">
                </div>
            </div>
        <?php } ?>
        
        <div data-large class="col-md-offset-11">
        <input type="submit" value="Save" class="form-group" >
        <br/><br/><br/>
    </div>
    </div> <!-- END OF SECOND DIV -->
<!-- </form> END OF FORM -->
    <?php }else{ echo "<h4 style='color:red'>There is no record!!</h4>";}?>
</div> <!-- END OF FIRST DIV -->
