<?php

class Login_model extends CI_Model  
{

    private $_data = array();
    public function __construct() 
	{
        parent::__construct();
        $this->db = $this->load->database('default',true);
    }

	//get User Data manually
    public function getData($select, $from, $where = '')
    {

    	$select = (!empty($select))?$select:'*';

        if(!empty($where))
            $sql = "SELECT $select FROM $from WHERE $where";
        else
            $sql = "SELECT $select FROM $from";
        return $this->db->query($sql)->result_array();

    }

    public function validate()
     {
     	$username = $this->input->post("username");
        $password = $this->input->post("password");
         
        //Check Status From app database 
        $appStatus = ''; 
        $this->db->where("username",$username);
        $query = $this->db->get('user');
        if($query->num_rows()>0) {
          $db_row = $query->row_array();
          $appStatus = 1;
        } else {
          $appStatus = 0;
        }

        $this->db->where("username",$username);
     	  $query = $this->db->get('user');
				
     	  if($query->num_rows() && $appStatus==1)
       	  {
       	  	//Found Row By Username
             $row = $query->row_array();

               //Check Password is valid or not 

       	  	    if(($row["password"]==$password))
                  {
                    $session_array = array("sess_id"=>$row["id"],
                                "sess_username"=>$row["username"],
                                );
                    $this->_data = $session_array;
                    return "Matched_data";
                  }
              
             return "ERR_INVALID_PASSWORD";
       	  }
     	  else
       	  {
       	  	return "ERR_INVALID_USERNAME";
       	  }

      }

      public function get_data()
      {
      	return $this->_data;
      }
    

 }


 ?>