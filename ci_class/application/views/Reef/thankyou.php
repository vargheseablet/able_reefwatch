<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>GET IN TOUCH!</title>


<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().CSS_PATH?>thank/stylecontact.css"/>

<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="<?php echo base_url().CSS_PATH?>thank/navstyles.css"/>
<script src="<?php echo base_url().JS_PATH?>thank/navscript.js" type="text/javascript"></script>

<style type="text/css">
.ServerError {
	color: #DB4A39;
	font-weight:bold;
}

.error {
  border:1px solid #DB4A39 !Important;
}
.message {
  color: #DB4A39;
  font-weight:bold;
}
</style>


</head>

<body>
<div class="wrapper">

<div class="thankyoumessage"><img src="<?php echo base_url().IMG_PATH?>thank/thankyoumessage.png" width="387" height="462" /></div>
<div class="maindiv">

  <div class="header">  
    <div class="logo"><a href="<?php echo site_url('Reef1/show')?>"><img src="<?php echo base_url().IMG_PATH?>thank/logo.png" width="358" height="139" border="0" /></a></div>
    <div class="ico-box">
      <div class="ico-donate"><a href="<?php echo site_url('Reef1/donate')?>"><img src="<?php echo base_url().IMG_PATH?>thank/social/icondonatenew.png" width="28" height="28" border="0" /></a></div>
      <div class="ico-t"><img src="<?php echo base_url().IMG_PATH?>thank/social/icontwitter.png" width="28" height="28" border="0" /></div>
      <div class="ico-f"><a href="https://www.facebook.com/ReefWatchIndia" target="_blank"><img src="<?php echo base_url().IMG_PATH?>thank/social/iconfb.png" width="28" height="28" border="0" /></a></div>  
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
          <li><a href="<?php echo site_url('Reef1/multi')?>">Multimedia</a>
            <ul>
               <li><a href="#">Blog</a></li><br />

               <li><a href="#">Gallery</a></li><br />

               <li><a href="#">Video</a></li><br />
            </ul>
          </li>
          <li><a href="<?php echo site_url('Reef1/Contact')?>" class="active">Contact us</a></li>
        </ul>
      </div>
  </div>

<div class="col1">
<div class="contact1"><img src="<?php echo base_url().IMG_PATH?>thank/contacttext1.gif" width="543" height="59" /></div>
<div class="contact2"><img src="<?php echo base_url().IMG_PATH?>thank/contacttext2.gif" width="543" height="35" /></div>
<div class="mainbox">
<div class="col3">
<div class="contact3">

<div class="no2">ReefWatch Marine<br />
Conservation Office mobile</div>

</div>

<div class="no3">+91 9531958375</div>
</div>
<div class="col4">
<div class="addresbox">
<div class="addres">ReefWatch Marine Conservation
14 C Bungalow, Boran Road<br />
Opp. Elco Market,<br />
Off Hill Road<br />
Bandra (W), Mumbai<br />
India 400050
</div>
</div>
</div>
</div>
<div class="col5">
<div class="col6">Executive Director<br />
<a href="/">nayantara@reefwatchindia.org</a></div>
</div>
</div>

<div class="col2">
<div id="contactform1" >

  <form id="contactform" name="frmContact" enctype="multipart/form-data">
    <p><label for="name">Name</label></p>
    <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"><br />

    <p><label for="email">Email</label></p>
    <input id="email" name="email" placeholder="example@domain.com" required="" tabindex="2" type="text"><br />

    <p><label for="Subject">Subject</label></p>
    <input id="subject" name="subject" placeholder="Subject" required="" tabindex="2" type="text"><br />

    <p><label for="comment">Your Message</label></p>
    <textarea name="comment" id="comment" tabindex="4"></textarea> 
    <p class="contactInput"><input name="submit" id="submit" tabindex="5" value="" type="submit" ></p>
  </form>
</div>

</div>

</div>

</div>
<script src="<?php echo base_url().JS_PATH?>thank/jquery-1.11.0.min.js" type="text/javascript"></script>

<script>
$(function(){
  $(".thankyoumessage img").css("cursor","pointer");
  $(".thankyoumessage img").click(function() {
    window.location = "<?php echo site_url('Reef1/Contact')?>";
  });
  
  })
</script>



</body>
</html>



