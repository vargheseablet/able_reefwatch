<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>REEFWATCH MARINE CONSERVATION</title>

		<!-- CSS links -->
		<link rel="stylesheet" href="<?php echo base_url().CSS_PATH?>homepage/flexslider.css" type="text/css">
		<link href="<?php echo base_url().CSS_PATH?>homepage/bootstrap.min.css" rel="stylesheet">
		
		<!-- JavaScript -->
		<script src="<?php echo base_url().JS_PATH?>homepage/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>		
		<script src="<?php echo base_url().JS_PATH?>homepage/jquery.flexslider.js"></script>
		
		<!-- Slider script -->
		<script type="text/javascript" charset="utf-8">
			$(window).load(function() {
				$('.flexslider').flexslider({
					directionNav: false,
					controlNav: false,
				});
			});
		</script>


		<!-- Page CSS -->
		<style>
			#a_us{
				padding-left: 2%;
			}
			#ww_do{
				padding-left: 1%;
			}
			#ini{
				padding-left: 0%;
			}
			#yc_help, #yc_help1{
				padding-left: 0%;
				padding-right: 3%;
			}
			a{
				font-size: 18px;
				color: #999;
				font-family: 'Droid Serif', serif;
			}
			a:hover{
				color: #33a6b4;
				text-decoration: none;
				cursor: pointer;	
			}
		</style>

	</head>

	<?php foreach($img5 as $bg):?>
	<body background="<?php echo base_url().IMG_PATH?>homepage/<?php echo $bg['name']?>">
	<?php endforeach;?>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" id="homelogo" align="center">
					<a>
						<?php foreach($img0 as $logo):?>
						<img src="<?php echo base_url().IMG_PATH?>homepage/<?php echo $logo['name']?>" style="width: 990px height: 272px"/>
						<?php endforeach;?>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" id="wrapper" style="padding-top: 5%">
					<div class="row">
						<div class="col-md-3" id="a_us">
							<div class="row">
								<div class="col-md-12" id="a_us1">
									<a href="<?php echo site_url('Reef1/about')?>">
										<?php foreach($img1 as $a_us):?>
										<img  src="<?php echo base_url().IMG_PATH?>homepage/<?php echo $a_us['name']?>" style="width:365px; height:379px"/>
										<?php endforeach;?>	
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" align="center" id="a_us2">
									<a href="<?php echo site_url('Reef1/about')?>">About Us</a>
								</div>
							</div>
						</div>
						<div class="col-md-3" id="ww_do">
							<div class="row">
								<div class="col-md-12" id="ww_do1">
									<a href="<?php echo site_url('Reef1/ww_do')?>">
										<div class="flexslider" style="position: relative; width: 365px; height: 379px;">
											<ul class="slides" style="position: absolute;">
												<?php foreach($img2 as $ww_do):?>
												<li>
													<img src="<?php echo base_url().IMG_PATH?>homepage/<?php echo $ww_do['name']?>" style="width:365px; height:379px;"/>
												</li>								
												<?php endforeach;?>
											</ul>
										</div>
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" align="center" id="ww_do2">
									<a href="<?php echo site_url('Reef1/ww_do')?>">What We Do</a>
								</div>
							</div>
						</div>
						<div class="col-md-3" id="ini">
							<div class="row">
								<div class="col-md-12" id="ini1">
								<a href="<?php echo site_url('Reef1/curr_ini')?>">
									<?php foreach($img3 as $ini):?>
									<img src="<?php echo base_url().IMG_PATH?>homepage/<?php echo $ini['name']?>" style="width:365px; height:379px"/>
									<?php endforeach;?>
								</a>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" align="center" id="ini2">
									<a href="<?php echo site_url('Reef1/curr_ini')?>">Initiatives</a>
								</div>
							</div>
						</div>
						<div class="col-md-3" id="yc_help">
							<div class="row">
								<div class="col-md-12" id="yc_help1">
									<a href="<?php echo site_url('Reef1/yc_help')?>">
										<div class="flexslider" style="position: relative; width: 365px; height: 379px">
											<ul class="slides" style="position: absolute;">
												<?php foreach($img4 as $yc_help):?>
												<li>
													<img src="<?php echo base_url().IMG_PATH?>homepage/<?php echo $yc_help['name']?>" style="width:365px; height:379px"/> 
												</li>											
												<?php endforeach;?>	
											</ul>
										</div>
									</a>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" align="center" id="yc_help2">
									<a href="<?php echo site_url('Reef1/yc_help')?>">You Can Help</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>

