<!-- HSU THINAR NYI -->
<!-- ===========PAGE HEADER=========== -->

<div class="row" class="pg_header"  style="background-color:#004167" style="position:fixed;" width="100%">
<span class="label_tag" padding-top="5px">
    <label class="col-md-3">
        <img src="<?=base_url();?>/images/myeo_logo.png" style="padding-top:11px" width="71"  height="63" class='col-md-offset-2' />
    </label>
    <!-- <span style="text-align: right"> -->
    <div class="col-md-offset-4" style="padding:20px;">      

    </div>
  </span>

</div><!-- End Of Page Header -->

<!-- ===========PAGE BODY=========== -->
<br><br><br>
<div class="row page_body">
	<div class="left col-md-4">
		<input type="file" name="image" class="col-md-offset-8 col-md-4 fileinput" accept="image/*" onchange="showMyImage(this)">
		<img src="" id="image" style="width:60%; margin-top:10px;">
		<?php echo form_error('image', "<div class='error' style='color:red; font-size:10px;>*","</div>"); ?>
	</div>

	<div class="right col-md-8 form-group "><!-- Right -->

		<div class="col-md-6 ">
				<input type="text" name="name" placeholder="*Name" class="form-control"><br>
			
				<input type="text" name="education" placeholder="*Education/Occupation Status" class="form-control"><br>
			
				<input type="text" name="location" placeholder="*Location" class="form-control"><br>

				<textarea name="sentence" class="form-control" rows="3" placeholder="A couple of sentences to introduce yourself..."></textarea>

				<label class="col-md-offset-9"><font style="color:grey">(100 words)</font></label><br>


				<div class="row">
					<label class="col-md-4"><font style="color:grey">CV/Resume</font></label>
					<div class="col-md-offset-4">
					<!-- <button style="background-color:#004167" class="btn" type="file"><font style="color:#fff">Upload</font></button> -->
					<input type="file"  name="cv" value="Upload" onchange="showMyPdf(this)" accept="pdf/*" class="fileinput2">
					<!-- <span class="glyphicon glyphicon-question-sign"></span> -->
					</div>
				</div><br><br>

				<div class="row">
					<label class="col-md-4"><font style="color:grey">Cover Letter</font></label>
					<div class="col-md-offset-4">
					<input type="file"  name="letter" value="Upload"></div>
				</div><br><br>

				<div class="row">
					<label class="col-md-4"><font style="color:grey">Video CV</font></label>
					<div class="col-md-offset-4">
					<input type="file"  name="video" value="Upload"></div>
				</div><br><br>
		   
		   </div>

           <div class="row">
           		<div class="col-md-3"></div>

		<div class="col-md-9">
			<!-- ===========OPPORTUNITIES=========== -->

				<div class="form-group oppo">
					  <label><span style="color: #F00;">*</span>&nbsp;
					  <font style="color:grey">OPPORITUNIES IN INTERESTED IN</font></label></p>

					  <form id="form1" name="form1" method="post" action="">
						<font style="color:grey">

					  	<div class="col-md-5">
						  	<div class="row">
						  		<input type="checkbox" name="UG_scholar" id="UG_scholar" />
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
							    <label for="Conterence">Conterence</label>
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
					</form>
					  <p>&nbsp; </p>
				</div><!-- End of Opportunitiew -->	
	       </div>


	       <div class="col-md-9">
			<!-- ===========SKILL=========== -->

				<div class="form-group oppo">
					  <label><span style="color: #F00;">*</span>&nbsp;
					  <font style="color:grey">SKILLS IN INTERESTED IN DEVELOPING</font></label></p>

					  <form id="form1" name="form1" method="post" action="">
						<font style="color:grey">

					  	<div class="col-md-5">
						  	<div class="row">
						  		<input type="checkbox" name="Communation" id="Communation" />
							    <label for="Communation">Communation</label>
							 </div>

							<div class="row">
							    <input type="checkbox" name="Leadership" id="Leadership" />
							    <label for="Leadership">Leadership</label>
							</div>

							<div class="row">
							    <input type="checkbox" name="Public" id="Public" />
							    <label for="Public">Public Speaking</label>
						  	</div>

						  	<div class="row">
							      <input type="checkbox" name="Application" id="Application" />
							      <label for="Application">Application</label>
					  		</div>

					  			<div class="row">
							      <input type="checkbox" name="Interview" id="Interview" />
							      <label for="Interview">Interview Skills</label>
					  		</div>
					  	</div>
						    
					  	<div class="col-md-4 col-md-offset1">
						    <div class="row">
						    <input type="checkbox" name="critical" id="critical" />
						    <label for="critical">Critical Thinking</label>
						</div>

						<div class="row">
						    <input type="checkbox" name="Creative" id="'Creative'" />
						    <label for="Creative">Creative</label>
					  	</div>

					  	<div class="row">
						    <input type="checkbox" name="Digital" id="Digital" />
						    <label for="Digital">Digital Literacy</label>
					  	</div>

					  	<div class="row">
						    <input type="checkbox" name="Cover" id="Cover" />
						    <label for="CV">CV/Cover Letter wriring</label>
					  	</div>

					  	<div class="row">
						    <input type="checkbox" name="Entrepreneurship" id="Entrepreneurship" />
						    <label for="Entrepreneurship">Entrepreneurship</label>
					  	</div>
						</div>

						</font>
					</form>
					  <p>&nbsp; </p>
				</div><!-- End of Skill -->	
	       </div>


	 </div><br><br>

	<div class="col-md-offset-5 form-group">
		<button type="submit" class="btn" style="background-color:#004167"><font color="#ccc">Save</font></button>
	</div>
 <br>

	</div><!-- END OF RIGHT -->





</div>

