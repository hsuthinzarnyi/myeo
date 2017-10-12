 
<?php $attribute=array("class"=> "form-horizontal");
 echo form_open('user/signup',$attribute);?>
<input type="text" name="name" id="username" required placeholder="Name">
<input type="email" name="email" id="email" required placeholder="Email">
<input type="text" name="password" id="password" required placeholder="Password">
<input type="text" name="cfmpassword" id="cfmpassword" required placeholder="Confirm_password">
<!-- <input type="submit" name="signup" value="signup" onclick="gotologin()" id="gotologin()"> -->
<br><br>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <button class="btn btn-primary btn-sm col-md-offset-4" data-target="#loginModal" data-toggle="modal">Singup</button>

        <div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginModal" tabondex="-1">
          <div class="modal-dialog modal-lg">
          





	