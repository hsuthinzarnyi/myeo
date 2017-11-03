<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>template/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>template/js/bootstrap.min.js">
    </script>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/jquery.dataTables.css">
    <script src = "<?php echo base_url();?>jquery.com/jquery-1.10.2.js"></script>
    <script src = "<?php echo base_url();?>jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="<?php echo base_url();?>template/js-king/jquery.js"></script> 
   <script src="<?php echo base_url();?>template/js-king/jquery.glide.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url();?>template/css-king/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>template/css-king/animate.css"> 
    <script type="text/javascript" src="<?php echo base_url();?>template/js-king/MyJQ.js"></script>
    <script src="<?php echo base_url();?>template/js-king/jquery.localScroll.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url();?>template/js-king/jquery.scrollTo.min.js" type="text/javascript"></script> 
  <title>Flowplayer quick start</title>
  <link rel="stylesheet" href="//releases.flowplayer.org/7.2.1/skin/skin.css">
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//releases.flowplayer.org/7.2.1/flowplayer.min.js"></script>


  <script type="text/javascript">
    $('.sliderwrapper .slider').glide({
    autoplay: 7000,
    animationDuration: 3000,
    arrows: true,
  
    });
  
</script>
  
    <script type="text/javascript">
    $('.bestdisheswrapper .slider').glide({
    autoplay: false,
    animationDuration: 700,
    arrows: true,
    navigation:false,
    
    
  
    });
  
  
</script>
</head>

<body>
	<!-- <div class="flowplayer"
     data-ratio="0.4167"
     data-splash="//drive.cdn.flowplayer.org/202777/84049-snap.jpg"
     data-rtmp="rtmp://rtmp.flowplayer.org/cfx/st/"
     data-qualities="160p,260p,530p,800p"
     data-default-quality="260p">
  <video>
    <source type="application/x-mpegurl" src="//cdn.flowplayer.org/202777/84049-bauhaus.m3u8">
    <source type="video/webm" src="//cdn.flowplayer.org/202777/84049-bauhaus.webm">
    <source type="video/mp4" src="//cdn.flowplayer.org/202777/84049-bauhaus.mp4">
    <source type="video/flash" src="mp4:202777/84049-bauhaus.mp4">
  </video>
 </div> -->

<!-- <body> -->
 <!--  <div class="flowplayer" style="width: 400px">
    <video >
      <source type="video/webm"
              src="//edge.flowplayer.org/drive.webm">
      <source type="video/mp4"
              src="//edge.flowplayer.org/drive.mp4">
      </video>
  </div>
 -->
   <video width="400" controls>
      <source type="video/mp4"
              src="video/Happy_Birthday_simple_animation.mp4">
      </video>
<div>
     <!--============ Slider ============-->


 <div class="sliderwrapper">
      <div id="slider" class="container">
           <div class="slider">
            <ul class="slides">
              <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Foodie ? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Foodie is Myanmar's leading online and mobile food-ordering company dedicated to bring Yangon's best restaurants to our customers doorstep. 
The company's online and mobile ordering platforms allow diners to order food delivery and pickup from a vast amount of takeout restaurants, 
and every order is supported by the company's amazing customer service team.</p>
                      <img src="<?php base_url();?>template/images/slideimg.png" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slide1img"> 
                      </li>
                <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Foodie ? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Foodie is Myanmar's leading online and mobile food-ordering company dedicated to bring Yangon's best restaurants to our customers doorstep. 
The company's online and mobile ordering platforms allow diners to order food delivery and pickup from a vast amount of takeout restaurants, 
and every order is supported by the company's amazing customer service team.</p>
                      <img src="<?php base_url();?>template/images/slideimg.png" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slideimg2"> 
                      </li>
              <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Foodie ? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Foodie is Myanmar's leading online and mobile food-ordering company dedicated to bring Yangon's best restaurants to our customers doorstep. 
The company's online and mobile ordering platforms allow diners to order food delivery and pickup from a vast amount of takeout restaurants, 
and every order is supported by the company's amazing customer service team.</p>
                      <img src="<?php base_url();?>template/images/slideimg.png" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slideimg2"> 
                      </li>
              </ul>
            </div>
      </div> 
      <!-- End of Slider -->
</div>  
<!-- end of sliderwrapper -->
 </div>
</body>
</html>