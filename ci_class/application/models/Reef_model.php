<?php
class Reef_model extends CI_Model
{	
	public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
    }

    public function get_img($category, $cat)
    {	
        $where = array( $category => $cat);
        $table = 'images';
        $this->db->select('name');
    	$query = $this->db->get_where($table, $where);
        $result = $query->result_array();
        return $result;
    }

    public function insert($info)
    {
        $this->db->insert('contact', $info);
        $con = 1;
        return $con;
    }
}
?> 