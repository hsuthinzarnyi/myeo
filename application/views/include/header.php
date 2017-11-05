
<!DOCTYPE html>
<html>
<head>

  <title></title>
    <meta name="viewport" content="width=device-width,initital-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>template/js/bootstrap.min.js"></script>

	<title></title>
	  <meta name="viewport" content="width=device-width,initital-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/bootstrap.min.css">
	  <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.js"></script>
	  <script type="text/javascript" src="<?php echo base_url();?>template/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/jquery.dataTables.css">
    <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.dataTables.min.js"></script>
    <script src = "<?php echo base_url();?>jquery.com/jquery-1.10.2.js"></script>
    <script src = "<?php echo base_url();?>jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/ckfinder/ckfinder.js"></script>

     <script src="<?php echo base_url();?>template/js/jquery.localScroll.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>template/js/jquery.scrollTo.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url();?>script.js"></script>

  
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
      color:  #85EC14;
}

#whathere a ,#otherstuff a{
     color: #CCC;}

/*.row .nav a:visited{color: #85EC14;}*/


.row .nav a:active{color: #85EC14;}


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

.row1 .left a
{
  /*height: 800px;*/
  /*width: 20%;*/
  /*float: left;*/
}
.link:hover{color: #85EC14;}
/*=============END of ANCHOR LINK STYLE==========*/
.font{font-style:;}

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
/*.rspace
{
  text-align: right;
}*/
.form-inline
{
  padding-right: 20px;
}


.row1 .right
{
    width: 75%;
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


/*.card p {
  min-height: 0;
}*/

/*.card {
  background: #fff;
  /*box-shadow: 0 32px 44px -24px rgba(0, 0, 0, 0.23), 0 20px 25px 0px rgba(0, 0, 0, 0.12), 0 15px 10px -10px rgba(0, 0, 0, 0.2);*/
  border-radius: 6px;
  margin-bottom: 30px;
  -webkit-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
  -moz-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
  -o-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
  -ms-transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
  transition: all 370ms cubic-bezier(0.34, 1.61, 0.7, 1);
}*/
/*.card:not(.card-plain):not(.card-price):hover {
  -webkit-transform: scale(1.02);
  -moz-transform: scale(1.2);
  -o-transform: scale(1.05);
  -ms-transform: scale(1.03);
  transform: scale(1.3);
  box-shadow: 0 26px 50px -10px rgba(0, 0, 0, 0.38), 0 10px 20px 0px rgba(0, 0, 0, 0.2), 0 15px 10px -10px rgba(0, 0, 0, 0.2);
}*/

.aa{color: #000;}
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

<script>
#home.onclick = function() {
  this.style.fontSize = '36px';
  this.style.color = 'red';
};
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


<script type="text/javascript">
$('.palceholder').click(function() {
  $(this).siblings('input').focus();
});
$('.form-control').focus(function() {
  $(this).siblings('.palceholder').hide();
});
$('.form-control').blur(function() {
  var $this = $(this);
  if ($this.val().length == 0)
    $(this).siblings('.palceholder').show();
});
$('.form-control').blur();
</script>
      
</head>
<body onload="closeall()" style="background-color:">
<!--HTZN-->