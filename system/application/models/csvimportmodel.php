<?php
class Csvimportmodel extends Model{
	function Csvimportmodel(){
    	parent::Model();
		$this->load->library('csvreader');
    }
	function insert($csvs){
		foreach($csvs as $csv){
			$this->db->insert('collections', array('firstname'=>$csv['FirstName'],'lastname'=>$csv['LastName'],'email'=>$csv['Email'],'regdate'=>$csv['RegDate'],'dob'=>$csv['DOB'],'gender'=>$csv['Gender'],'country'=>$csv['Country']));
		}
	}
}
?>