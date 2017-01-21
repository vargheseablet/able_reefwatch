<?php
class Reef1 extends CI_Controller
{
	// Main page 
	public function show()
	{

		$this->load->model('Reef_model');
		$category = 'category';

		$cat = 'homelogo';
		$h_logo = $this->Reef_model->get_img($category, $cat);
		
		
		$cat = 'about_us';
		$a_us = $this->Reef_model->get_img($category, $cat);
		

		$cat = 'what_we_do';
		$ww_do = $this->Reef_model->get_img($category, $cat);
		

		$cat = 'initiatives';
		$ini = $this->Reef_model->get_img($category, $cat);
		

		$cat = 'you_can_help';
		$yc_help = $this->Reef_model->get_img($category, $cat);
		

		$cat = 'background';
		$bg = $this->Reef_model->get_img($category, $cat);
		$this->load->view('Reef/Homepage.php', array('img0' => $h_logo, 'img1' => $a_us, 'img2' => $ww_do, 'img3' => $ini,
		'img4' => $yc_help, 'img5' => $bg));
	}

	// About Us Page
	public function about()
	{
		$this->load->view('Reef/aboutus');
	}
	// Team page
	public function team()
	{
		$this->load->view('Reef/team');
	}
	// What we do page
	public function ww_do()
	{
		$this->load->view('Reef/whatwedo');		
	}
	// Current Initiatives page
	public function curr_ini()
	{
		$this->load->view('Reef/currentinitiatives');		
	}

	// Past Initiatives page
	public function past_ini()
	{
		$this->load->view('Reef/pastinitiatives');
	}
	// You Can Help page
	public function yc_help()
	{
		$this->load->view('Reef/youcanhelp');
	}
	// Donate with online payment page
	public function donate()
	{
		$this->load->view('Reef/donate');		
	}
	// donate with direct debit page
	public function donatedd()
	{
		$this->load->view('Reef/donatedd');		
	}
	// Donate with Cheque Payment
	public function donatecp()
	{
		$this->load->view('Reef/donatecp');		
	}
	// Partners page
	public function partners()
	{
		$this->load->view('Reef/partners');		
	}
	// Multimedia page
	public function multi()
	{
		$this->load->view('Reef/multimedia');		
	}
	// Contact page
	public function contact()
	{

        $this->load->view('Reef/contact');
    }
    // Thank You page
	public function thank()
	{	
		// Get User contact details 
		$n1= $_POST['user'];
    	$n2= $_POST['email'];
    	$n3= $_POST['sub'];
    	$n4= $_POST['comment'];

		$info= array('name' => $n1,
					'email' => $n2,
					'subject' => $n3,
					'comment' => $n4
		);

    	$this->load->model('Reef_model');
    	$con= $this->Reef_model->insert($info);
    	// data passed to database check
    	if ($con==1) 
    	{
        	$this->load->view('Reef/thankyou');        		
    	}
	}
}
?>