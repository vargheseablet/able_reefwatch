<!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>GET IN TOUCH!</title>

		<!-- CSS links -->
		<link href="http://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700" rel="stylesheet" type="text/css" />
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url().CSS_PATH?>contact/stylecontact.css" />
	    <link href="http://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css" />
	    <link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css" />
	    <link href="http://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet" type="text/css" />
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url().CSS_PATH?>contact/navstyles.css" />

	    <!-- JavaScript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
    	<script src="<?php echo base_url().JS_PATH?>contact/navscript.js" type="text/javascript"></script>

	    <script type="text/javascript">
	    	base_url = '<?php echo base_url();?>';
	    </script>

	    <!-- Form Validation Script -->
        <script type="text/javascript">
        	function Submit()
        	{
        		if( document.myForm.user.value == "" )
		        {
			        alert( "Please provide your name!" );
		            document.myForm.user.focus() ;
		            return false;
	         	}		         
         		var emailID = document.myForm.email.value;
         		atpos = emailID.indexOf("@");
         		dotpos = emailID.lastIndexOf(".");
         
         		if (atpos < 1 || ( dotpos - atpos < 2 )) 
         		{
            		alert("Please enter correct email ID")
            		document.myForm.email.focus() ;
            		return false;
         		}
	         	if( document.myForm.sub.value == "" )
	         	{
	            	alert( "Please provide a Subject for your message!" );
		            document.myForm.sub.focus() ;
		            return false;
	         	}
	         	if( document.myForm.comment.value == "" )
	         	{
	            	alert( "Please write a Message!" );
		            document.myForm.comment.focus() ;
		            return false;
	         	}
	         	return( true );
        	}
        </script>

	</head>
	<body>
		<div class="wrapper">
		    <div class="maindiv">
		        <div class="header">	
		            <div class="logo">
		               <a href="<?php echo site_url('Reef1/show')?>"><img src="<?php echo base_url().IMG_PATH?>contact/logo.png" width="358" height="139" border="0" /></a>
		            </div>
		            <div class="ico-box">
		               <div class="ico-donate">
		                  <a href="<?php echo site_url('Reef1/donate')?>"><img src="<?php echo base_url().IMG_PATH?>contact/social/icondonatenew.png" width="28" height="28" border="0" /></a>
		               </div>
		               <div class="ico-t"><img src="<?php echo base_url().IMG_PATH?>contact/social/icontwitter.png" width="28" height="28" border="0" /></div>
		               <div class="ico-f">
		                  <a href="https://www.facebook.com/ReefWatchIndia" target="_blank"><img src="<?php echo base_url().IMG_PATH?>contact/social/iconfb.png" width="28" height="28" border="0" /></a>
		               </div>
		            </div>
		            <div class="navigation">
		              <ul class="nav">
		                <li><a href="<?php echo site_url('Reef1/about')?>">About us</a>
		                  <ul>
		                    <li><a href="<?php echo site_url('Reef1/team')?>">Our Team</a></li>
		                  </ul>
		                </li>
		                <li><a style="padding-right: 11px;" href="<?php echo site_url('Reef1/ww_do')?>">What we do</a></li>
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
		                <li><a style="padding-right: 11px;" href="<?php echo site_url('Reef1/partners')?>">Partners</a></li>
		                <li><a href="<?php echo site_url('Reef1/multi')?>">Multimedia</a>
		                  <ul>
		                     <li><a href="#">Blog</a></li><br />

		                     <li><a href="#">Gallery</a></li><br />

		                     <li><a href="#">Video</a></li><br />
		                  </ul>
		                </li>
		                <li><a href="<?php echo site_url('Reef1/contact')?>" class="active">Contact us</a></li>
		              </ul>
		            </div>
		        </div>

		        <div class="col1">
		            <div class="contact1"><img src="<?php echo base_url().IMG_PATH?>contact/contacttext1.gif" width="543" height="59" /></div>
		            <div class="contact2"><img src="<?php echo base_url().IMG_PATH?>contact/contacttext2.gif" width="543" height="35" /></div>
		            <div class="mainbox">
		               	<div class="col3">
							<div class="contact3">

								<div class="no2">ReefWatch Marine
								    <br/> Conservation Office mobile
								</div>
							</div>
		                 <div class="no3">+91 9531958375</div>
		               </div>
		               <div class="col4">
		                  <div class="addresbox">
		                     <div class="addres">ReefWatch Marine Conservation 14 C Bungalow, Boran Road
		                        <br /> Opp. Elco Market,
		                        <br /> Off Hill Road
		                        <br /> Bandra (W), Mumbai
		                        <br /> India 400050
		                     </div>
		                  </div>
		               </div>
		            </div>
		            <div class="col5">
		               	<div class="col6">Executive Director
		                  	<br />
		                  	<a href="/">nayantara@reefwatchindia.org</a>
		                </div>
		            </div>
		        </div>

		        <!-- Form Start -->
				<form action="<?php echo base_url()?>Reef1/thank" method="POST" name="myForm" onsubmit="return(Submit());">
			        <div class="col2">
			            <div id="contactform1">
							<label>Name*</label>
							<br />
							<input name="user" type="text" id="txtName" />
							<br />			
							<label>Email</label>
							<br />
							<input name="email" type="text" id="txtEmail" />
							<br />
							<label>Subject</label>
							<br />
							<input name="sub" type="text" id="txtSubject" />
							<br />			
							<label>Your Message</label>
							<br />
							<textarea name="comment" rows="2" cols="20" id="txtBody"></textarea>
							<br />
							<div class="contactInput"><input type="submit" value="" id="submitimg"/></div>
			            </div>
			        </div>
		        </form>
		        <!-- Form End -->
		    </div>
        </div>
	</body>
</html>