<!-- HSU THINAR NYI -->
<!-- ===========PAGE HEADER=========== -->
<div class="col-md-12">
<div class="row pg_header"  style="background-color:#004167" >
<!-- <span class="label_tag"> -->
    <label class="col-md-3" id="navigations">
        <img src="<?=base_url();?>/images/myeo_logo.png"  width="71"  height="63" class='col-md-offset-2' />
    </label>

    <div class=" col-md-offset-4" style="padding-top:15px" >
      
    <!-- ==============PROFILE ICON=================== -->
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
            <!-- END OF PROFILE ICON -->

    </div>
</span>
</div>
</div>


<!-- ===========PAGE BODY=========== -->
<!-- <div class="row page_body"> -->
  <?php echo form_open_multipart('profile/create'); ?>
    <div class="left col-md-4" style="padding-top: 20px">
    <input type="file" id="browse" name="image" style="display: none" onChange="Handlechange();">
   <!--  <input type="button" value=" id="fakeBrowse" onclick="HandleBrowseClick();"/ style="background-color:#004167;color: white"  class="col-md-offset-8 col-md-2" accept="image/*" onchange="showMyImage(this)"> -->
    <img src="<?php echo base_url();?>images/female-user1.jpg" height="100px" width="70px" class="col-md-offset-8 col-md-4" id="fakeBrowse" onclick="HandleBrowseClick();"/  class="col-md-offset-8 col-md-2" accept="image/*" onchange="showMyImage(this)" name="image">

    <?php echo form_error('image', "<div class='error' style='color:red; font-size:10px;>*","</div>"); ?>
  </div>

  <div class="right col-md-8 form-group " style="padding-top: 20px"><!-- Right -->

    <div class="input col-md-6 ">
        <div class="input-placeholder"><input type="text" required name="name" class="form-control">
          <div class="placeholder">
              <span>*</span> <font color="grey">Name</font>
          </div>
        </div>
<br>
      
        <div class="input-placeholder"><input type="text" required name="education" class="form-control">
          <div class="placeholder">
              <span>*</span> <font color="grey">Education/Occupation Status</font>
          </div>
        </div><br>
      
        <div class="input-placeholder"><input type="text" required name="location" class="form-control">
          <div class="placeholder">
              <span>*</span> <font color="grey">Location</font>
          </div>
        </div><br>

        <textarea name="sentence" class="form-control" rows="3" placeholder="A couple of sentences to introduce yourself..."></textarea>

        <label class="col-md-offset-9"><font style="color:grey">(100 words)</font></label><br>


        <div class="row">
          <label class="col-md-4"><font style="color:grey">CV/Resume</font></label>
          <div class="col-md-offset-4">
          <!-- <input type="file"  name="cv" value="Upload" onchange="showMyPdf(this)" accept="pdf/*" class="fileinput2"> -->
          <input type="file" id="browse" name="cv" style="display: none" onChange="Handlechange();"  onchange="showMyPdf(this)" accept="pdf/*" class="fileinput2"/>
          <input type="button" value="Upload" id="fakeBrowse" onclick="HandleBrowseClick();"/ style="background-color:#004167;color: white;border-radius: 7px"  onchange="showMyPdf(this)" accept="pdf/*" class="fileinput2 col-md-3" name="cv">
          <img src="<?php echo base_url();?>images/60319-200.png" height="20px" width="20px">
          </div>
        </div><br><br>

        <div class="row">
          <label class="col-md-4"><font style="color:grey">Cover Letter</font></label>
          <div class="col-md-offset-4">
          <input type="file" id="browse" name="letter" style="display:" onChange="Handlechange();"/>
          <!-- <input type="button" value="Upload" id="fakeBrowse" onclick="HandleBrowseClick();"/ style="background-color:#004167;color: white;border-radius:7px;" class=" col-md-3" name="letter"> -->
          <img src="<?php echo base_url();?>images/60319-200.png" height="20px" width="20px">
        </div>

        </div><br><br>

        <div class="row">
          <label class="col-md-4"><font style="color:grey">Video CV</font></label>
          <div class="col-md-offset-4">
          <!-- <input type="file"  name="video" value="Upload"> -->
          <input type="file" id="browse" name="video" style="display: none" onChange="Handlechange();"/>
          <input type="button" value="Upload" id="fakeBrowse" onclick="HandleBrowseClick();"/ style="background-color:#004167;color: white;border-radius: 7px" class=" col-md-3" name="video">
          <img src="<?php echo base_url();?>images/60319-200.png" height="20px" width="20px">
        </div>
        </div><br><br>
       
       </div>

           <div class="row">
              <div class="col-md-3"></div>

    <div class="col-md-9">
      <!-- ===========OPPORTUNITIES=========== -->

        <div class="form-group oppo">
            <label><span style="color: #F00;">*</span>&nbsp;
            <font style="color:#000;font-size: 15px">OPPORTUNITIES IN INTERESTED IN</font></label></p>

            <font style="color:grey">

              <div class="col-md-5">
                <div class="row">
                  <input type="checkbox" name="UG_scholar" id="UG_scholar"  />
                  <label for="UG_scholar">Undergraduate Scholarships</label>
               </div>

              <div class="row">
                  <input type="checkbox" name="Master" id="Master" />
                  <label for="Master">Master Scholarships</label>
              </div>

              <div class="row">
                  <input type="checkbox" name="PHD" id="PHD" />
                  <label for="Fellowship">Fellowship/PHD</label>
                </div>

                <div class="row">
                    <input type="checkbox" name="Internship" id="Internship" />
                    <label for="Internship">Internship</label>
                </div>
              </div>
                
              <div class="col-md-4 col-md-offset1">
                <div class="row">
                  <input type="checkbox" name="Conterence" id="Conterence" />
                  <label for="Conterence">Conference</label>
              </div>


              <div class="row">
                  <input type="checkbox" name="Training" id="'Training'" />
                  <label for="Training">Training</label>
                </div>

                <div class="row">
                  <input type="checkbox" name="Jobs" id="jobs" />
                  <label for="Jobs">Jobs</label>
                </div>

                <div class="row">
                  <input type="checkbox" name="Competition" id="Competition" />
                  <label for="Competition">Competition</label><br><br>
                </div>
            </div>

            </font>
            <p>&nbsp; </p>
        </div><!-- End of Opportunitiew --> 
         </div>


         <div class="col-md-9">
      <!-- ===========SKILL=========== -->

        <div class="form-group oppo">
            <label><span style="color: #F00;">*</span>&nbsp;
            <font style="color:#000;font-size: 15px">SKILLS IN INTERESTED IN DEVELOPING</font></label></p>

            <font style="color:grey">

              <div class="col-md-5">
                <div class="row">
                  <input type="checkbox" name="1" id="Communation" />
                  <label for="Communation">Communication</label>
               </div>

              <div class="row">
                  <input type="checkbox" name="2" id="Leadership" />
                  <label for="Leadership">Leadership</label>
              </div>

              <div class="row">
                  <input type="checkbox" name="3" id="Public" />
                  <label for="Public">Public Speaking</label>
                </div>

                <div class="row">
                    <input type="checkbox" name="4" id="Application" />
                    <label for="Application">Application</label>
                </div>

                  <div class="row">
                    <input type="checkbox" name="5" id="Interview" />
                    <label for="Interview">Interview Skills</label>
                </div>
              </div>
                
              <div class="col-md-4 col-md-offset1">
                <div class="row">
                <input type="checkbox" name="6" id="critical" />
                <label for="critical">Critical Thinking</label>
            </div>

            <div class="row">
                <input type="checkbox" name="7" id="'Creative'" />
                <label for="Creative">Creative</label>
              </div>

              <div class="row">
                <input type="checkbox" name="8" id="Digital" />
                <label for="Digital">Digital Literacy</label>
              </div>

              <div class="row">
                <input type="checkbox" name="9" id="Cover" />
                <label for="CV">CV/Cover Letter wriring</label>
              </div>

              <div class="row">
                <input type="checkbox" name="0" id="Entrepreneurship" />
                <label for="Entrepreneurship">Entrepreneurship</label>
              </div>
            </div>


            </font>
            <p>&nbsp; </p>
        </div><!-- End of Skill --> 
         </div>


   </div><br><br>

  
  <div class="col-md-offset-5 form-group">
    <button type="submit" class="btn" style="background-color:#004167;color: white;width: 90px">Save</button>
  </div>
 <br>

  </div><!-- END OF RIGHT -->
</form>








<!-- </div>