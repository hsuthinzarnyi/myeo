<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.button-popup{
	margin: 20px;
	background-color : blue;
	padding: 15px;
}

.button-popup a{
	color: white;
	font-weight: bold;
	text-decoration: none;
}

.button-popup a:hover{
	color: green;
}

.window-popup{
	width: 100%;
	height: 100%;
	position: fixed;
	z-index: 10;
	background : rgba(0,0,0,0.7);
	top: 0;
	left: 0;
	display: none;
}

.wp-content{
	width: 500px;
	height: 300px;
	background-color: white;
	border-radius: 3px;
	position: absolute;
	left: 30px;
	top: 25%;
}

.wp-content a {
	padding: 10px;
	background-color: #3498db;
	color: white;
	text-decoration: none;
	position: absolute;
	right: 20px;
	bottom: 20px;
	border-radius: 5px;
}
</style>
<!-- 	<link rel="stylesheet" type="text/css" href="style.css">
 --></head>
<body>

	<h1>Pop up</h1>
	<span class="button-popup">
		<a href="#" id="button-popup">Touch Me</a>
	</span>

	<div class="window-popup">
		<div class="wp-content">
			<h1>Content</h1>
			<a href="#" id="button-popup-close">Close</a>
		</div>
	</div>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="myscript.js"></script>
<script type="text/javascript">
	$(document).ready(function()
{
	$("#button-popup").click(function()
	{
		$(".window-popup").show(300);
	});

	$("#button-popup-close").click(function()
	{
		$(".window-popup").hide(300);
	});
});
</script>
</body>
</html>