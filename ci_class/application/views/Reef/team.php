<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OUR TEAM</title>

<!--<link rel="stylesheet" type="text/css" href="css/style.css"/>-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().CSS_PATH?>team/styleteam.css"/>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().CSS_PATH?>team/navstyles.css"/>
<script src="<?php echo base_url().JS_PATH?>team/navscript.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().CSS_PATH?>team/flexsliderTeam.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().CSS_PATH?>team/jquery.mCustomScrollbar.css"/>
<style>
.content {
	height:152px;
	overflow:hidden;
}
.content p:nth-child(even) {
	color:#999;
	font-family:Georgia, serif;
	font-size:17px;
	font-style:italic;
}
.content p:nth-child(3n+0) {
	color:#c96;
}
</style>
</head>

<body>
<div class="wrapper">
  <div class="singlefish"><img src="<?php echo base_url().IMG_PATH?>team/fishsingle.png" width="75" height="70" /></div>
  <div class="header">
    <div class="logo"><a href="<?php echo site_url('Reef1/show')?>"><img src="<?php echo base_url().IMG_PATH?>team/logo.png" width="358" height="139" border="0" /></a></div>
    <div class="ico-box">
      <div class="ico-donate"><a href="<?php echo site_url('Reef1/donate')?>"><img src="<?php echo base_url().IMG_PATH?>team/social/icondonatenew.png" width="28" height="28" border="0" /></a></div>
      <div class="ico-t"><img src="<?php echo base_url().IMG_PATH?>team/social/icontwitter.png" width="28" height="28" border="0" /></div>
      <div class="ico-f"><a href="https://www.facebook.com/ReefWatchIndia" target="_blank"><img src="<?php echo base_url().IMG_PATH?>team/social/iconfb.png" width="28" height="28" border="0" /></a></div>
      
    </div>
    <div class="navigation">
      <ul class="nav">
        <li><a href="<?php echo site_url('Reef1/about')?>" class="active">About us</a>
          <ul>
            <li><a href="<?php echo site_url('Reef1/team')?>" class="active">Our Team</a></li>
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
        <li><a href="<?php echo site_url('Reef1/Contact')?>">Contact us</a></li>
      </ul>
    </div>
  </div>
  <div class="con-main1">
    <div class="con1">
      <div class="founder-box">
        <div class="founder-t">FOUNDERS</div>
      </div>
      <div class="founder">
        <div class="flexslider">
          <ul class="slides">
            
            <li>
              <div class="descfounder"><strong><span style="color:#000">Prahlad Kakar</span></strong><br />
                Prahlad's identity as an ad-guru in India is well known, however few know of his love for the ocean. Inspired by his first dive in Mauritius, where he encountered an antique Koran underwater, he worked tirelessly to bring SCUBA Diving into India. One of his first vacations with his family to his new Dive Resort, he was struck by the sheer beauty of the sea and vibrancy of life within it. To spread awareness about this treasure and to work towards its protection, he established ReefWatch Marine Conservation.
                <div class="closebutt1"><img src="<?php echo base_url().IMG_PATH?>team/closebutton.png" width="25" height="25" /></div>
              </div>
              <img src="<?php echo base_url().IMG_PATH?>team/founderPralhad.jpg" width="300" height="230" />
              </li>
              <li>
              <div class="descfounder"><strong><span style="color:#000">Mitali Dutt Kakar</span></strong><br />
                Mitali is a passionate SCUBA Diver, film maker and ocean lover. Committed to preserving India's marine heritage, she along with her husband Prahlad Kakar, established ReefWatch Marine Conservation in 1993. Alongside her long career in the ad film industry, she has also produced many documentary films on marine conservation, worked with coral reef researchers and conducted workshops and events to raise awareness about marine issues. She also serves on the National Wildlife Board of India.
                <div><img src="<?php echo base_url().IMG_PATH?>team/closebutton.png" width="25" height="25" class="closebutt"/></div>
              </div>
              <img src="<?php echo base_url().IMG_PATH?>team/founderMitali.jpg" width="300" height="230" /> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="con2">
      <div class="executivedirector-box">
        <div class="executivedirector-t">EXECUTIVE DIRECTOR</div>
      </div>
      <div class="executivedirector"> <span class="descexecdirector"><strong><span style="color:#000">Nayantara Jain</span></strong><br />
        Known fondly as Tara, ReefWatch's Executive Director has her feet on the sand and her heart in the sea. She lived on the islands of Lakshadweep and Andamans as a SCUBA Diving Instructor for a few years, inspired by the beauty of the ocean, but increasingly disturbed by its degradation by factors global and local. Eventually she left the islands to learn more about marine biodiversity and conservation at the Scripps Institution of Oceanography in San Diego and has returned informed, optimistic and passionate about protecting India's marine spaces.
        <img src="<?php echo base_url().IMG_PATH?>team/closebutton.png" width="25" height="25" /></span> <img src="<?php echo base_url().IMG_PATH?>team/executivedirector.jpg" width="300" height="230" /> </div>
    </div>
    <div class="con3">
      <div class="volunteers-box">
        <div class="volunteers-t">KEY STAFF</div>
      </div>
      <!--<div class="descvolunteers"><strong><span style="color:#000">Chintan Purohit</span></strong><br />
                 Chintan decided to become a marine biologist when she returned from a marine camp, while in class 7, where she encountered the beauty of the ocean. Since then all her energies were focused on achieving this goal and she was fortunate enough to pursue her Master's in Marine Biology at the prestigious Marine Biological Association of UK. She has been associated with issues related to marine awareness, environment awareness and sustainability since the past four years and finds peace and happiness when near to the sea"
              </div>-->
      
      
      <!--Volunteers starts-->
      <div class="volunteers">
        <div class="flexslider" style="background: transparent;font-size: 13.9px;color: #11b3c2;line-height: 17px;">
          <ul class="slides">
            
            <li style="padding-bottom:5px">
              <!--<div class="descvolunteers1"><strong><span style="color:#000">Volunteers</span></strong><br />
                <div class="closebutt1"><img src="images/closebutton.png" width="25" height="25" /></div>
              </div>-->
             <strong><span style="color:#000">Chintan Purohit</span></strong><br />
               Chintan decided to become a marine biologist when she returned from a marine camp, while in class 7, where she encountered the beauty of the ocean. Since then all her energies were focused on achieving this goal and she was fortunate enough to pursue her Master's in Marine Biology at the prestigious Marine Biological Association of UK. She has been associated with issues related to marine awareness, environment awareness and sustainability since the past four years and finds peace and happiness when near to the sea"</li>
              
              
              <li>
              <div class=""><strong><span style="color:#000">Roshni Yathiraj</span></strong><br />
                 Add Dr. Aaron Lobo to ‘Board of Directors’ along with Sumer in the same format as the founders are done. Just put his name though since we don’t have his picture right now. 
               
              </div>
              </li>
              
          </ul>
        </div>
      </div>
      <!--Volunteers ends-->
      
  
    </div>
    
    
  </div>
  <div class="con-main2">
    <div class="con4">
      <div class="board-box">
        <div class="board-t">BOARD OF DIRECTORS</div>
      </div>
      <div class="board">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="descbod"><strong><span style="color:#000">Sumer Verma</span></strong><br />
                Sumer is one of the most experienced Diving Instructors in India. He is also an acclaimed underwater photographer and videographer, as has worked on several ad campaigns, magazine editorials, feature and documentary films. Ever conscious about giving back to the marine world that has been so generous with him, he uses his images and his experiences to educate the world about the ocean. He has opened his image bank to ReefWatch, and most of the pictures on this website are taken by him.
                <div><img src="<?php echo base_url().IMG_PATH?>team/closebutton.png" width="25" height="25" class="closebutt1"/></div>
              </div>
              <img src="<?php echo base_url().IMG_PATH?>team/boardofdirectors.jpg" width="300" height="230" /> </li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="con5">
      <div class="advisors-box">
        <div class="advisors-t">ADVISORS</div>
      </div>
      <div class="advisors">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="descadvisor"><strong><span style="color:#000">Dr. Greg Rouse</span></strong><br />
                Dr. Greg Rouse is a professor at the Scripps Institution of Oceanography at UC San Diego and curator of the Benthic Invertebrate Collection at Scripps.
                He has been on numerous expeditions that span habitats from tropical coral reefs to polar and deep-sea habitats, including whale falls, hydrothermal vents and methane seeps. His research interests include echinoderms, particularly crinoids (featherstars and sea lilies), annelid worms and seadragons (Syngnathidae). 
                
              
                <div><img src="<?php echo base_url().IMG_PATH?>team/closebutton.png" width="25" height="25" class="closebutt1"/></div>
              </div>
              <img src="<?php echo base_url().IMG_PATH?>team/advisors.jpg" width="300" height="230" /> </li>
           
          </ul>
        </div>
      </div>
    </div>
    <div class="con6">
      <div class="administrative-box">
        <div class="administrative-t">ADMINISTRATIVE & RESEARCH</div>
      </div>
      <div class="administrative"><img src="<?php echo base_url().IMG_PATH?>team/nopic.png" width="300" height="230" /></div>
    </div>
  </div>
</div>
	<!-- Google CDN jQuery with fallback to local -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
    
    <script src="<?php echo base_url().JS_PATH?>team/jquery.mCustomScrollbar.concat.min.js"></script> 
<script>
		(function($){
			$(window).load(function(){
				$("#content_1").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);
	</script>
    
    
<script>

$(document).ready(function() {
            $(".founder").css( 'cursor', 'pointer');
            //attach click event to buttons
            $( ".founder li" ).each(function() {
				$(this).click(function(){
			$( ".descexecdirector" ).fadeOut();
			$( ".descvolunteers" ).fadeOut();
			$( ".descadvisor" ).fadeOut();
			$( ".descbod").fadeOut();
  			$( ".descfounder" ).toggle( "slow" );
				});
});


$(".executivedirector").css( 'cursor', 'pointer');
            //attach click event to buttons
            $( ".executivedirector" ).click(function() {
			$( ".descvolunteers" ).fadeOut();
			$( ".descfounder" ).fadeOut();	
			$( ".descadvisor" ).fadeOut();
			$( ".descbod").fadeOut();
 			$( ".descexecdirector" ).toggle( "slow" );
});

$(".volunteers").css( 'cursor', 'pointer');
            //attach click event to buttons
            $( ".volunteers" ).click(function() {
			$( ".descfounder" ).fadeOut();	
			$( ".descexecdirector" ).fadeOut();
			$( ".descadvisor" ).fadeOut();
			$( ".descbod").fadeOut();
  			$( ".descvolunteers" ).toggle( "slow" );
});



$(".board").css( 'cursor', 'pointer');
            //attach click event to buttons
            $( ".board li" ).each(function() {
				$(this).click(function(){
			$( ".descexecdirector" ).fadeOut();
			$( ".descfounder" ).fadeOut();
			$( ".descvolunteers" ).fadeOut();
			$( ".descadvisor" ).fadeOut();
  			$( ".descbod").toggle( "slow" );
				});
});
$(".advisors").css( 'cursor', 'pointer');
            //attach click event to buttons
            $( ".advisors li" ).each(function() {
				$(this).click(function(){
			$( ".descexecdirector" ).fadeOut();
			$( ".descfounder" ).fadeOut();
			$( ".descvolunteers" ).fadeOut();
			$( ".descbod" ).fadeOut();
  			$( ".descadvisor" ).toggle( "slow" );
				});
});



        });
 /*$(document).ready(function(){
		$(".founder").css( 'cursor', 'pointer');
      $(".founder").click(function(){
		  $(".descfounder").fadeIn();		  
	  });
	  $(".descfounder").click(function(){
		  $(".descfounder").hide();		  
	  });

    });*/
</script> 


<!-- FlexSlider --> 
<script defer src="<?php echo base_url().JS_PATH?>team/jquery.flexsliderteam.js"></script> 
<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script> 

</body>
</html>
