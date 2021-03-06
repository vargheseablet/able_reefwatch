<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link rel="stylesheet" type="text/css" href="css/style2.css"/>-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().CSS_PATH?>multi/styleundercons.css"/>
<title>WHAT WE DO</title>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url().CSS_PATH?>multi/flexslider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url().CSS_PATH?>multi/navstyles.css"/>
<script src="<?php echo base_url().JS_PATH?>multi/navscript.js" type="text/javascript"></script>
</head>

<body>
<div class="wrapper">
  <div class="header">
    <div class="logo"><a href="<?php echo site_url('Reef1/show')?>"><img src="<?php echo base_url().IMG_PATH?>multi/logo.png" width="358" height="139" border="0" /></a></div>
    <div class="ico-box">
      <div class="ico-donate"><a href="<?php echo site_url('Reef1/donate')?>"><img src="<?php echo base_url().IMG_PATH?>multi/social/icondonatenew.png" width="28" height="28" border="0" /></a></div>
      <div class="ico-t"><img src="<?php echo base_url().IMG_PATH?>multi/social/icontwitter.png" width="28" height="28" border="0" /></div>
      <div class="ico-f"><a href="https://www.facebook.com/ReefWatchIndia" target="_blank"><img src="<?php echo base_url().IMG_PATH?>multi/social/iconfb.png" width="28" height="28" border="0" /></a></div>
      
    </div>
    <div class="navigation">
      <ul class="nav">
        <li><a href="<?php echo site_url('Reef1/about')?>">About us</a>
          <ul>
            <li><a href="<?php echo site_url('Reef1/team')?>">Our Team</a></li>
          </ul>
        </li>
        <li><a href="<?php echo site_url('Reef1/ww_do')?>">What we do</a></li>
        <li><a href="#">Initiatives</a>
          <ul>
            <li><a href="<?php echo site_url('Reef1/curr_ini')?>">Current Initiatives</a></li>
            <li><a href="<?php echo site_url('Reef1/past_ini')?>">Past Initiatives</a></li>
          </ul>
        </li>
        <li><a href="<?php echo site_url('Reef1/yc_help')?>">You can help!</a>
          <ul>
             <li><a href="<?php echo site_url('Reef1/donate')?>">Donate</a></li>
          </ul>   
        </li>
        <li><a href="<?php echo site_url('Reef1/partners')?>">Partners</a></li>
        <li><a href="<?php echo site_url('Reef1/multi')?>" class="active">Multimedia</a>
          <ul>
             <li><a href="#">Blog</a></li><br />

             <li><a href="#">Gallery</a></li><br />

             <li><a href="#">Video</a></li><br />
          </ul>
        </li>
        <li><a href="<?php echo site_url('Reef1/contact')?>">Contact us</a></li>
      </ul>
    </div>
  </div>

<div class="underconsfull"><img src="<?php echo base_url().IMG_PATH?>multi/underconsfullpage.gif" width="990" height="409" /></div>


</div><!--Wrapper ends-->
<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  
  <!-- FlexSlider -->
  <script defer src="<?php echo base_url().JS_PATH?>multi/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
	  
	  
    });
  </script>



  
  <!-- Optional FlexSlider Additions -->
  <script src="<?php echo base_url().JS_PATH?>multi/jquery.easing.js"></script>
  <script src="<?php echo base_url().JS_PATH?>multi/jquery.mousewheel.js"></script>

</body>
</html>
