<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta name="viewport" content="width=device-width,initital-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/bootstrap.min.css">
	  <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.js"></script>
	  <script type="text/javascript" src="<?php echo base_url();?>template/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/jquery.dataTables.css">
    <script type="text/javascript" src="<?php echo base_url();?>asset/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/ckeditor/ckfinder.js"></script>
    <script src = "<?php echo base_url();?>jquery.com/jquery-1.10.2.js"></script>
    <script src = "<?php echo base_url();?>jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
	 	$(document).ready(function(){
	 		$('#example').dataTables();
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
.a:hover{text-decoration: none;}
.a:active{color: green;}
/*=============END of ANCHOR LINK STYLE==========*/


/*=================FOOTER ====================*/

.page_footer{position: relative;
             }

.right_title{
  position: fixed;
}
.a 
{
  padding-right: 53px;
}
.page_footer{position:fixed;
              bottom: 0;

}
.login
{
  background: url(images/myeo.jpg);
  background-size: 100%;
  background-origin: 0;

}
.rspace
{
  text-align: right;
}
.form-inline
{
  padding-right: 20px;
}
.row1 .left
{
  /*height: 800px;*/
  /*width: 20%;*/
  /*float: left;*/
}

.row1 .right
{
    width: 75%;
    float: right;
    background-image:;
    background-color:#F0f0f0;
    height: 4000px;
}

#growing 
{
  /*transition: font-size 3s, color 2s;*/
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
growing.onclick = function() {
  this.style.fontSize = '36px';
  this.style.color = 'red';
};
</script>

</head>
<body onload="closeall()" style="background-color:">
<!--HTZN-->