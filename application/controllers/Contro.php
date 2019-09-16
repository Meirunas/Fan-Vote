<?php
class Contro extends CI_controller
{
function  __construct() {
        parent::__construct();
        $this->load->model('Mod');
    }
		public function vote_done()
		{
			$this->load->view('upld_new_celeb_info');
			$this->load->Model('Mod');
			$res=$this->Mod->celeb_got_vote();
			$res1=$this->Mod->celebrity_won();
			$rows1=$res1->row_array();
			echo "<center>";
			echo "<h4>Celebrity Information</h4>"."<hr>";
			echo "<table border=30 BORDERCOLOR='hsla(89, 43%, 51%, 0.3)'>";
			echo "<tr bgcolor='#FFFFFF'>";
			echo "<td>Celeb_id</td>";
			echo "<td>Celeb_name</td>";
			echo "<td>Celeb_Got_vote</td>";
		
			echo "</tr>";


			foreach($res->result_array() as $rows)
			{
				echo "<tr  bgcolor='#C0C0C0'>";
				echo "<td>".$rows['id']."</td>";
				echo "<td>".$rows['celeb_name']."</td>";
				echo "<td>".$rows['celeb_vote']."</td>";
				echo "</tr>";
				


			}	
				echo "<td colspan=3>"."Total number of votes given by the users:- ".$rows1['celeb_vote']."</td>";
				echo "</table>"."<hr>";
				echo "</center>";				
		}
		function add()
		{
			if($this->input->post('userSubmit'))
			{
				if(!empty($_FILES['picture']['name']))
				{
                			$config['upload_path'] = 'upload';
					$config['width'] = 150;
					$config['height'] = 150;
                			$config['allowed_types'] = 'jpg|jpeg|png|gif';
                			$config['file_name'] = $_FILES['picture']['name'];
        				$this->load->library('upload',$config);
       			                $this->upload->initialize($config);
                				if($this->upload->do_upload('picture'))
						{
                    					$uploadData = $this->upload->data();
                    					$picture = $uploadData['file_name'];
                				}
						else
						{	
                    					$picture = '';
                				}
            			}	
				else{$picture = '';}
            	$userData = array(
                'celeb_name' => $this->input->post('celebname'),
		'celeb_img' => $picture
                 );
      		$insertUserData = $this->Mod->insert($userData);
                 if($insertUserData)
		{
                	$this->session->set_flashdata('success_msg', 'User data have been added successfully.');
            	}
		else
		{
                	       $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                }
        	}
        	
        		redirect('Contro/vote_done');
 		}
	public function celeb()
	{
                $celeb = $this->Mod->celebrity();
                $arrData['celeb'] = $celeb;
		$this->load->view('vote',$arrData);	
	}

	public function vote()
	{
             $celeb_id =  $_POST['celeb_id'];
		$this->load->Model('Mod');
		$result=$this->Mod->vote_count($celeb_id);
		
		echo $result;
	}
}
?>
