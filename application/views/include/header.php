
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta name="viewport" content="width=device-width,initital-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>template/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/jquery.dataTables.css">
   <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.dtaTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.dataTables.min.js"></script>

    <script src = "<?php echo base_url();?>jquery.com/jquery-1.10.2.js"></script>
    <script src = "<?php echo base_url();?>jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/ckfinder/ckfinder.js"></script>
     <script src="<?php echo base_url();?>template/js/jquery.localScroll.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>template/js/jquery.scrollTo.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url();?>script.js"></script>

<script>  
$( document ).ready(function() {
 $('#showopportunity').DataTable({
 
        });   
});
</script>

<script> 
$(document).ready(function(){
   
      $("#btnbtn1").click(function(){
        $("#opp").animate({
            height: 'toggle'
        });
    });

         $("#btnbtn2").click(function(){
          $("#skill").animate({
            height: 'toggle'
        });
    });

      
});
</script>

<script>
$(document).ready(function(){
    $("btnbtn1").click(function(){
        $("#opp").show();
        $("#skill").hide()
    });
});
</script>


<script type="text/javascript">
$(document).ready(function(){
    $("btnbtn2").click(function(){
        $('#skill').show();
        $("#opp").hide();
    });
});
</script>

<script type="text/javascript">
   $(function(){
      $("#btnclick").click(function(){
        $("divpopup").dialog({
          title : " Pop up",
          width : 200,
          height : 100,
          modal:true,
          buttons: {Close;
                function(){
                  $(this).dialog('close');
                }
            }
        });
      });
   })
</script>


<script type="text/javascript">
$(function(){
    $("#gotologin").click(function(){
     
    })
  function gotologin(){alert("Are You Sure To login!!!!")};
</script>
<!--for  nav active-->

<style>
/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal1-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal1-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal1-body {padding: 2px 16px;}

.modal1-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/*=============ANCHOR LINK STYLE==========*/
.row .nav a{
      text-decoration: none;
      font-size:20px;
      color:#fff;
      /*margin: 20px;*/
 } 

#whathere a:hover,#otherstuff a:hover{
      color:  #4a4a4a;
}

#whathere a ,#otherstuff a{
     color: #CCC;}

#opp a, #skill a{text-decoration:none;line-height: 30px;font-size: 12px;color: #9b9b9b}
#opp a:hover,#skill a:hover{color: #4a4a4a}
#opp a:focus,#skill a:active{color: #4a4a4a}
/*.row .nav a:visited{color: #85EC14;}*/

/*.row a:focus{color: #85EC14;
font-style: italic;
background-color: red;}*/

/*a:focus{
  font-style: italic;
  color: #85EC14;
  background-color: red;
}
*/
/*.aa a:hover,
.row .aa a:focus{
     color: #85EC14;
}*/
.row > .aa > a:hover,
.row > .aa > a:focus ,
.row > .aa > a:active {
  color: #85EC14;
  text-decoration: none;
  /*cursor: not-allowed;*/
}
/*a[tabindex]:visited{color:red;}*/
.row1 .left a
{
  /*height: 800px;*/
  /*width: 20%;*/
  /*float: left;*/
}
.qq a{text-decoration:none;line-height: 30px;font-size: 13px;}
.row1 .left .qq a{color: #9b9b9b;}
.row1 .left .qq a:hover{color: #4a4a4a;}
/*.row1 .left .qq sssss{color: red}*/
.nav .row .col-md-offset-4 a:hover{color: #85EC14;}
.nav .row .col-md-offset-4 a{color: white;}
.nav .row .col-md-offset-4 a[tabindex]:link{color: green;
                                            outline: none;}
/*.row1 .left .qq a:visited{color: #4a4a4a;}*/
/*=============END of ANCHOR LINK STYLE==========*/
.font{font-style:;}


.well label,p{color: #4a4a4a}
/*=================FOOTER ====================*/

.page_footer{position: relative; 
             }

.page_footer .a{
  font-weight: lighter;
}

.right_title{
  position: fixed;
}
.a
{
  padding-right: 65px;
}
.page_footer{position:fixed;
              bottom: 0;

}

.pg_header{
  position: relative;
  top: 0;
  /*width: 100%;*/
}


.login
{
  background: url(images/myeo.jpg);
  background-size: 100%;
  background-origin: 0;
  max-height: 200px;
}

.form-inline
{
  padding-right: 20px;
}


.row1 .right
{
  margin-top: 0px;
    width: 80%;
    float: right;
    background-color:#F0f0f0;
}

.left 
{
  /*transition: font-size 3s, color 2s;*/
  /*scroll-behavior: unset;*/
}

/*.left-side{
  position: fixed;
  left: 0px;
}*/

/*.page_header{
  width: 100%;
position: fixed;}*/
/*.container-1{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
.container-1 input#search{
  width: 300px;
  height: 50px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  float: left;
  color: #63717f;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.container-1 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-1 input#search:-moz-placeholder {  Firefox 18- 
   color: #65737e;  
}
 
.container-1 input#search::-moz-placeholder {   Firefox 19+ 
   color: #65737e;  
}
 
.container-1 input#search:-ms-input-placeholder {  
   color: #65737e;  
}
.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
}
.container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
    outline:none;
    background: #ffffff;
  }
  .container-1 input#search{
  width: 300px;
  height: 50px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  float: left;
  color: #262626;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
 
   
    -webkit-transition: background .55s ease;
  -moz-transition: background .55s ease;
  -ms-transition: background .55s ease;
  -o-transition: background .55s ease;
  transition: background .55s ease;
}*/

.input-placeholder {
        position: relative;
      }
      .input-placeholder input {
        padding: 2px;
      }
      .input-placeholder input:valid + .placeholder {
        display: none;
      }
      .placeholder {
        position: absolute;
        pointer-events: none;
        top: 2px;
        bottom: 2px;
        left: 6px;
        margin: auto;
        color: #ccc;
      }
      .placeholder span {
        color: red;
      }
      .oppo label{
        font-weight: lighter;
      }

      .section-cards .card a {
  opacity: .93;
}


.aa{color: #000;}

.checkbox {
    /*margin: 50px auto;*/
    position: relative;
    display: block;
    width: 200px;
}

input[type="checkbox"] {
    width: auto;
    opacity: 0.00000001;
    position: absolute;
    left: 0;
    margin-left: -20px;
}
.helper {
    position: absolute;
    top: 2px;  /* box distance*/
    left: -3px;
    cursor: pointer;
    /*display: block;*/
    /*font-size: 4px;*/
    /*user-select: none;*/
    /*color: #e7e7e7;*/
}
.helper:before {
    content: '';
    position: absolute;
    /*left: 0;*/
    /*top: 0;*/
    margin: 4px;
    width: 15px;
    height: 15px;
    /*transition: transform 0.28s ease;*/
    /*border-radius: 3px;*/
    border: 1px solid #9b9b9b;
}
.helper:after {
  content: '';
    display: block;
    width: 10px;
    height: 5px;
    border-bottom: 3px solid #7bbe72;
    border-left: 2px solid #7bbe72;
    -webkit-transform: rotate(-45deg) scale(0);
    -moz-transform: rotate(-45deg) scale(0);
    -ms-transform: rotate(-45deg) scale(0);
    transform: rotate(-45deg) scale(0);
    position: absolute;
    top: 10px;
    left: 6px;
}
input[type="checkbox"]:checked ~ .helper::before {
    color: #7bbe72;
}

input[type="checkbox"]:checked ~ .helper::after {
    -webkit-transform: rotate(-45deg) scale(1);
    -moz-transform: rotate(-45deg) scale(1);
    -ms-transform: rotate(-45deg) scale(1);
    transform: rotate(-45deg) scale(1);
}

.checkbox label {
    min-height: 2px;
    /*padding-left: 3px;*/
    margin-bottom: 0;
    /*font-weight: normal;*/
    /*cursor: pointer;*/
    vertical-align: sub;
}
/*input[type="checkbox"]:focus + label::before {*/
    outline: #000 auto 5px;
}
</style>
<!--HTZN-->
<script type="text/javascript">

  function closeall() {
    var divs = document.getElementsByTagName('ul')
    var elements = divs.length
    for(var i = 0;i < elements;i++){
       var divStyle = divs.item(i)
       divStyle.style.display = 'none';
    }
    return;
}
function showOne(showme) {
    closeall()
    var element = document.getElementById(showme)
    element.style.display = 'block'
    return;
}
</script>



<script language="JavaScript" type="text/javascript"> 

   function HandleBrowseClick() { 
   var fileinput = document.getElementById("browse");
   fileinput.click();
  }
   function Handlechange() {
    var fileinput = document.getElementById("browse");
    var textinput = document.getElementById("upload");
    textinput.value = fileinput.value; }
</script>


<script language="JavaScript" type="text/javascript"> 

   function HandleBrowseClick1() { 
   var fileinput = document.getElementById("browse1");
   fileinput.click();
  }
   function Handlechange1() {
    var fileinput = document.getElementById("browse1");
    var textinput = document.getElementById("upload");
    textinput.value = fileinput.value; }
</script>


<script language="JavaScript" type="text/javascript"> 

   function HandleBrowseClick2() { 
   var fileinput = document.getElementById("browse2");
   fileinput.click();
  }
   function Handlechange2() {
    var fileinput = document.getElementById("browse2");
    var textinput = document.getElementById("upload");
    textinput.value = fileinput.value; }
</script>


<script language="JavaScript" type="text/javascript"> 

   function HandleBrowseClick3() { 
   var fileinput = document.getElementById("browse3");
   fileinput.click();
  }
   function Handlechange3() {
    var fileinput = document.getElementById("browse3");
    var textinput = document.getElementById("upload");
    textinput.value = fileinput.value; }
</script>


<script type="text/javascript">
// $('.palceholder').click(function() {
//   $(this).siblings('input').focus();
// });
// $('.form-control').focus(function() {
//   $(this).siblings('.palceholder').hide();
// });
// $('.form-control').blur(function() {
//   var $this = $(this);
//   if ($this.val().length == 0)
//     $(this).siblings('.palceholder').show();
// });
// $('.form-control').blur();
</script>
      
</head>
<body onload="closeall()">
<!--HTZN-->