<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" language="javascript1.3">
<!--
function closeall() {
    var divs = document.getElementsByTagName('div')
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
// -->
</script>
</head>
<body onload="closeall()">
<!--<a onclick="closeall()" href="javascript:closeall();">Close All</a> -->

<h2 onclick="showOne('whathere')">Click me to show or hide content</h2>
<div id="whathere">
<p>This is a test. </p>
<ul>
<li><a href="">This is a test. </a></li>
<li><a href="">This is a test. </a></li>
<li><a href="">This is a test. </a>This is a test. </li>
<li><a href="">This is a test. </a></li>
<li><a href="contact.html">Contact Us</a></li>
</ul>
</div>
<h2 onclick="showOne('whatwedo')">Click me to show or hide content</h2>
<div id="whatwedo">
<p><a href=".html">This is a test. </a>.</p>
</div>
<h2 onclick="showOne('otherstuff')">This is a test. </h2>
<div id="otherstuff" >
<ul>
<li><i>This is a test. </i>. 
   <a href="http://www.a.com/">http://www.a.com/</a>.</li>
<li>This is a test. 
<ol>
<li>This is a test. </li>
<li>This is a test. </li>
<li>This is a test. </li>
</ol>
</li>
</ul>
</div>
<h2 onclick="showOne('contactus')">Click me</h2>
<div id="contactus" >
<p>This is a test. 
<a href="mailto:a@r.com">a@r.com</a>.
This is a test. : </p>
<address>This is a test. <br /></address>
</div>
</body>
</html>