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

            <ol class="dropdown pull-right" style="margin-right: 25px"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url();?>images/pp.png" width="35px"></span><b class="caret"></b></a>
            <ol class="dropdown-menu" style="background-color:#CCC">
                <div style="background-color: #CCC">
                  <label><?php echo $data->name;?></label>
                  <a href="<?=base_url();?>profile/create"><h5 style="color: black">Edit Profile</h5></a>
                  <a href="<?=base_url();?>logout/logout"><h5 style="color: black">Log Out</h5></a>
                </div>
            </ol>
            </ol> 
        </div>
   </span>
</div> <!-- END OF PAGE HEADER -->


<!-- ===========BODY============ -->

<center>
    <div class="container table-responsive" style="margin-top: 30px;">
        <h2> This is your contents for skills!!! </h2>
        <table class="table table-bordered table-striped" id="showopportunity">
            <thead>
                <tr class="info">
                    <th>NO.</th>
                    <th>SKILL TITLES</th>
                    <th>SKILL SUBTITLES</th>
                    <th>OPERATIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php $count=1; foreach ($query as $row) {;?>
                <tr>
                    <!-- <td>1</td>
                    <td>2</td>
                    <td>4</td>
                    <td>3</td> -->
                    <td><?php echo $count;?></td>
                    <td><?=$row['skill_title'];?></td>
                    <td><?=$row['skill_subtitle']?></td>
                    <td>
                        <a href="<?=base_url()?>Admin/edit_skill/<?=$row['sdetail_id'];?>" 
                        class="btn btn-warning col-md-offset-1 col-md-4" name="edit"> Edit </a>
                        <a href="<?=base_url()?>Admin/delete_skill/<?=$row['sdetail_id'];?>"
                        class="btn btn-warning col-md-offset-1 col-md-5" name="delete" onclick="return confirm('Are you sure to delete skill?');"> Delete </a>
                    </td>
                </tr>  
                <?php $count++; };?>

            </tbody>
        </table>
    </div>
</center>
<script type="text/javascript">
    if(document).ready(function(){
        $('#showopportunity').DataTable();
    });
</script>

<!-- <div class="col-md-8 col-md-offset-2 form-group" style="background-color: #eceff1">
</div>
 -->
    
    
    