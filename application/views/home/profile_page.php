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
    <img src="<?php echo base_url();?>images/female-user1.jpg" height="120px" width="70px" class="col-md-offset-8 col-md-4" id="fakeBrowse" onclick="HandleBrowseClick();"/  class="col-md-offset-8 col-md-2" accept="image/*" onchange="showMyImage(this)" name="image">

    <?php echo form_error('image', "<div class='error' style='color:red; font-size:10px;>*","</div>"); ?>
  </div>

  <div class="right col-md-8 form-group " style="padding-top: 20px"><!-- Right -->

    <div class="input col-md-6 ">
        <div class="input-placeholder"><input type="text" required name="name" class="form-control" readonly="readonly">
          <div class="placeholder">
              <font color="#4a4a4a"><?= $data->name ?></font>
          </div>
        </div>
<br>
      
        <div class="input-placeholder"><input type="text" required name="education" class="form-control">
          <div class="placeholder">
              <span>*</span> <font color="#9b9b9b">Education/Occupation Status</font>
          </div>
        </div><br>
      
        <div class="input-placeholder"><input type="text" required name="location" class="form-control">
          <div class="placeholder">
              <span>*</span> <font color="#9b9b9b">Location</font>
          </div>
        </div><br>

        <textarea name="sentence" class="form-control" rows="3" placeholder="A couple of sentences to introduce yourself..."></textarea>

        <label class="col-md-offset-9"><font style="color:#9b9b9b">(100 words)</font></label><br>

        <div class="row">
            <label class="col-md-4"><font style="color:#9b9b9b;">CV/Resume</font></label>
            <div class="col-md-offset-4">
            <!-- <input type="file"  name="cv" value="Upload" onchange="showMyPdf(this)" accept="pdf/*" class="fileinput2"> -->
            <input type="file" id="browse1" name="cv" style="display: none" onChange="Handlechange1();"/>
            <input type="button" value="Upload" id="fakeBrowse" onclick="HandleBrowseClick1();"/ style="background-color:#004167;color: white;border-radius: 7px"  onchange="showMyPdf(this)" accept="pdf/*" class="fileinput2 col-md-3" name="cv">
            <img src="<?php echo base_url();?>images/60319-200.png" height="20px" width="20px">
            </div>
        </div><br><br>

        <div class="row">
            <label class="col-md-4"><font style="color:#9b9b9b">Cover Letter</font></label>
            <div class="col-md-offset-4">
            <input type="file" id="browse2" name="letter" style="display:none;" onChange="Handlechange2();"/>
            <input type="button" value="Upload" id="fakeBrowse" onclick="HandleBrowseClick2();"/ style="background-color:#004167;color: white;border-radius:7px;" class=" col-md-3" name="letter">
            <img src="<?php echo base_url();?>images/60319-200.png" height="20px" width="20px">
          </div>

        </div><br><br>

        <div class="row">
            <label class="col-md-4"><font style="color:#9b9b9b">Video CV</font></label>
            <div class="col-md-offset-4">
            <!-- <input type="file"  name="video" value="Upload"> -->
            <input type="file" id="browse3" name="video" style="display: none" onChange="Handlechange3();"/>
            <input type="button" value="Upload" id="fakeBrowse" onclick="HandleBrowseClick3();"/ style="background-color:#004167;color: white;border-radius: 7px" class=" col-md-3" name="video">
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
            <font style="color:#4a4a4a;font-size: 15px">OPPORTUNITIES IN INTERESTED IN</font></label></p>

            <font style="color:#9b9b9b">

              <div class="col-md-5">
                <div class="row">
                  <!-- <input type="checkbox" name="UG_scholar" id="UG_scholar"  /> -->
                  <!-- <label for="UG_scholar">Undergraduate Scholarships</label> -->
                  <div class="checkbox">
                    <label>
                       <input type="checkbox" name="UG_scholar" value="Undergraduate Scholarships">
                       <i class="helper"></i>Undergraduate Scholarships
                    </label>
                  </div>
               </div>

              <div class="row">
                  <!-- <input type="checkbox" name="Master" id="Master" /> -->
                  <!-- <label for="Master">Master Scholarships</label> -->
                  <div class="checkbox">
                    <label>
                       <input type="checkbox" name="Master" value="Master Scholarships">
                       <i class="helper"></i>Master Scholarships
                    </label>
                  </div>
              </div>

              <div class="row">
                  <!-- <input type="checkbox" name="PHD" id="PHD" /> -->
                  <!-- <label for="Fellowship">Fellowship/PHD</label> -->
                  <div class="checkbox">
                    <label>
                       <input type="checkbox" name="PHD" value="Fellowships/PhD">
                       <i class="helper"></i>Fellowships/PhD
                    </label>
                  </div>
                </div>

                <div class="row">
                    <!-- <input type="checkbox" name="Internship" id="Internship" /> -->
                    <!-- <label for="Internship">Internship</label> -->
                    <div class="checkbox">
                    <label>
                       <input type="checkbox" name="Internship" value="Internships">
                       <i class="helper"></i>Internships
                    </label>
                  </div>
                </div>
              </div>
                
              <div class="col-md-4 col-md-offset1">
                <div class="row">
                  <!-- <input type="checkbox" name="Conterence" id="Conterence" /> -->
                  <!-- <label for="Conterence">Conference</label> -->
                  <div class="checkbox">
                    <label>
                       <input type="checkbox" name="Conterence" value="Conferences">
                       <i class="helper"></i>Conferences
                    </label>
                  </div>
              </div>


              <div class="row">
                  <!-- <input type="checkbox" name="Training" id="'Training'" /> -->
                  <!-- <label for="Training">Training</label> -->
                  <div class="checkbox">
                    <label>
                       <input type="checkbox" name="Training" value="Training">
                       <i class="helper"></i>Training
                    </label>
                  </div>
                </div>

                <div class="row">
                  <!-- <input type="checkbox" name="Jobs" id="jobs" /> -->
                  <!-- <label for="Jobs">Jobs</label> -->
                  <div class="checkbox">
                    <label>
                       <input type="checkbox" name="Jobs" value="Jobs">
                       <i class="helper"></i>Jobs
                    </label>
                  </div>
                </div>

                <div class="row">
                  <!-- <input type="checkbox" name="Competition" id="Competition" /> -->
                  <!-- <label for="Competition">Competition</label><br><br> -->
                  <div class="checkbox">
                    <label>
                       <input type="checkbox" name="Competition" value="Competitions">
                       <i class="helper"></i>Competitions
                    </label>
                  </div>
                </div>
            </div>

            </font>
            <p>&nbsp; </p>
        </div><!-- End of Opportunitiew --> 
         </div>


         <div class="col-md-9">
      <!-- ===========SKILL=========== -->

        <div class="form-group oppo">
            <label style="padding-top: 20px;"><span style="color: #F00;">*</span>&nbsp;
            <font style="color:#4a4a4a;font-size: 15px;">SKILLS IN INTERESTED IN DEVELOPING</font></label></p>

            <font style="color:#9b9b9b">

              <div class="col-md-5">
                <div class="row">
                  <!-- <input type="checkbox" name="1" id="Communation"  />
                  <label for="Communation">Communication</label> -->
                  <div class="checkbox">
                    <label>
                       <input type="checkbox" name="1" value="Communications">
                       <i class="helper"></i>Communications
                    </label>
                  </div>

               </div>

              <div class="row">
                  <!-- <input type="checkbox" name="2" id="Leadership" /> -->
                  <!-- <label for="Leadership">Leadership</label> -->
                  <div class="checkbox">
                    <label>
                       <input type="checkbox" name="2" value="Leaderships">
                       <i class="helper"></i>Leaderships
                    </label>
                  </div>
              </div>

              <!-- <div class="row"> -->
                  <!-- <input type="checkbox" name="3" id="Public" /> -->
                  <!-- <label for="Public">Public Speaking</label> -->
                  <div class="checkbox row">
                    <label>
                       <input type="checkbox" name="3" value="Public Speaking">
                       <i class="helper"></i>Public Speaking
                    </label>
                  </div>
                <!-- </div> -->

                <div class="row">
                    <!-- <input type="checkbox" name="4" id="Application" /> -->
                    <!-- <label for="Application">Application</label> -->
                    <div class="checkbox">
                    <label>
                       <input type="checkbox" name="4" value="Application">
                       <i class="helper"></i>Application
                    </label>
                  </div>
                </div>

                  <!-- <div class="row"> -->
                    <!-- <input type="checkbox" name="5" id="Interview" /> -->
                    <!-- <label for="Interview">Interview Skills</label> -->
                    <div class="checkbox row">
                    <label>
                       <input type="checkbox" name="5" value="Interview Skills">
                       <i class="helper"></i>Interview Skills
                    </label>
                  </div>
                </div>
              <!-- </div> -->
                
              <div class="col-md-4 col-md-offset1">
                <div class="row">
                <!-- <input type="checkbox" name="6" id="critical" /> -->
                <!-- <label for="critical">Critical Thinking</label> -->
                <div class="checkbox">
                    <label>
                       <input type="checkbox" name="6" value="Critical Thinking">
                       <i class="helper"></i>Critical Thinking
                    </label>
                  </div>
            </div>

            <div class="row">
                <!-- <input type="checkbox" name="7" id="'Creative'" /> -->
                <!-- <label for="Creative">Creative</label> -->
                <div class="checkbox">
                    <label>
                       <input type="checkbox" name="7" value="Creativity">
                       <i class="helper"></i>Creativity
                    </label>
                  </div>
              </div>

              <div class="row">
                <!-- <input type="checkbox" name="8" id="Digital" /> -->
                <!-- <label for="Digital">Digital Literacy</label> -->
                <div class="checkbox">
                    <label>
                       <input type="checkbox" name="8" value="Digital Literacy">
                       <i class="helper"></i>Digital Literacy
                    </label>
                  </div>
              </div>

              <div class="row">
                <!-- <input type="checkbox" name="9" id="Cover" /> -->
                <!-- <label for="CV">CV/Cover Letter wriring</label> -->
                <div class="checkbox ">
                    <label>
                       <input type="checkbox" name="9" value="CV/Cover Letter writing">
                       <i class="helper"></i>CV/Cover Letter writing
                    </label>
                  </div>
              </div>

              <div class="row">
                <!-- <input type="checkbox" name="0" id="Entrepreneurship" /> -->
                <!-- <label for="Entrepreneurship">Entrepreneurship</label> -->
                <div class="checkbox">
                    <label>
                       <input type="checkbox" name="0" value="Entrepreneurships">
                       <i class="helper"></i>Entrepreneurships
                    </label>
                  </div>
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