<?php

class ChatApplication_model extends CI_Model  
{
    public function __construct() 
	{
        parent::__construct();
        $this->Db = $this->load->database('default',true);
    }

	//get User Data manually
    public function getData($select, $from, $where = '')
    {

    	$select = (!empty($select))?$select:'*';

        if(!empty($where))
            $sql = "SELECT $select FROM $from WHERE $where";
        else
            $sql = "SELECT $select FROM $from";
        return $this->Db->query($sql)->result_array();

    }
    

 }


 ?>