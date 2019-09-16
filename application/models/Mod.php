<?php
class Mod extends CI_Model
{
 function __construct() {
        $this->tableName = 'celeb_info';
        $this->primaryKey = 'id';
    }
	 public function insert($data = array())
	{
		$insert = $this->db->insert($this->tableName,$data);
        	if($insert)
		{
            		return $this->db->insert_id();
        	}else	
		{
            		return false;    
        	}
	}
	function img()
	{
		$qr=$this->db->select('*')->from('celeb_info')->get();
		return $qr;
					
	}


       function celebrity()
       {

           $this->db->order_by('rand()');
           $this->db->limit(2);
           $query = $this->db->get('celeb_info');
           return $query->result_array();


       }
	function vote_count($id)
	{
		
			$this->db->select('celeb_vote');
      $this->db->where('id', $id);
$q = $this->db->get('celeb_info');
$data = $q->result_array();
   $vote_count = $data[0]['celeb_vote'];
    $vote_count = (int)$vote_count+1;
 $this->db->where('id', $id);
    $this->db->update('celeb_info', array('celeb_vote' => $vote_count));
    return true;
	}
	function celeb_got_vote()
	{
		$qr=$this->db->select("*")->order_by('celeb_vote','desc')->get('celeb_info');
		return $qr;
	}
	function celebrity_won()
	{
		$this->db->select_sum('celeb_vote');//select_max('celeb_vote');to find maximum vote got by a celebrity
$this->db->from('celeb_info');
$query=$this->db->get('');
return $query;
	}





}
?>
