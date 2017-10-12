<nav class="navbar navbar-default nav-justified" role="navigation" style="background-color:#000;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only" style="background-color:#ff0000">Toggle navigation</span>
        <span class="icon-bar" style="background-color:#ff0000"></span>
        <span class="icon-bar" style="background-color:#ff0000"></span>
        <span class="icon-bar" style="background-color:#ff0000"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>book/all" ><font style="color:#fff">Bug Tracking System</font></a>

      <!-- <a class="navbar-brand" href="singup_form.php">&nbsp &nbsp Form</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:#000000">
      <ul class="nav navbar-nav">
        <!-- <li><a href="<?=base_url()?>book/create">Book</a></li> -->
        <!-- <li ><a href="<?=base_url()?>Role/create"><font style="color:#fff">Role</font></a></li> -->
        <!-- <li><a href="<?=base_url()?>label/create"><font style="color:#fff">Label</font></a></li> -->
        <li class="dropdown"> 
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:#000000"><font style="color:#fff">Bug</font><b class="caret"></b></a> -->
            <ul class="dropdown-menu" style="background-color:#000">
                 <!-- <li><a href="<?=base_url()?>bug/create"><font style="color:#fff">Bug Create</font></a></li> -->
                 <!-- <li><a href="<?=base_url()?>bug/view"><font style="color:#fff">Bug Unassign View</font></a></li> -->
                 <!-- <li><a href="<?=base_url()?>bug/ass_view"><font style="color:#fff">Bug Assign view</font></a></li> -->
                 <!-- /]<li><a href="<?=base_url()?>bug/bug_assign">Bug Assign</a></li> -->
            </ul></li>

            <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:#000000"><font style="color:#fff">Bug State</font><b class="caret"></b></a>
            <ul class="dropdown-menu" style="background-color:#000">
                 <li><a href="<?=base_url()?>Userlist/todo_ad"><font style="color:#fff">To Do</font></a></li>
                 <li><a href="<?=base_url()?>Userlist/progress_ad"><font style="color:#fff">Doing</font></a></li>
                 <li><a href="<?=base_url()?>Userlist/done_ad"><font style="color:#fff">Done</font></a></li>
                 <!-- <li><a href="<?=base_url()?>bug/bug_assign">Bug Assign</a></li> -->
            </ul></li>
        <!-- <li><a href="allbook.php">All Book</a></li> -->
       <!--  <li><a href="#">Link</a></li> -->
       <!--  <li class="dropdown" style="background-color:#000000">
          
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:#000000"><font style="color:#fff">Role</font> <b class="caret"></b></a>
          <ul class="dropdown-menu" style="background-color:#000">
               <li><a href="<?=base_url()?>useradmin/assign"><font style="color:#fff">Assign Role</font></a></li>
               <li><a href="<?=base_url()?>useradmin/"><font style="color:#fff">Unassign Role</font></a></li>
          </ul>
              
          </ul>

        </li>  -->



       
        </li>
      </ul><!-- nav navbar-nav -->
      <!-- form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=base_url()?>logout/logout"><font color="#fff">Log Out</font></a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>