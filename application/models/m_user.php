<?php 
 	class m_user extends CI_Model {
 	
 		function tampil_datauser(){
  			return $this->db->get('user');
 		}
 
 		function input_datauser($data,$table){
  			$this->db->insert($table,$data);
 		} 

 		function cek_login($table,$where){
			return $this->db->get_where($table, $where);
		}

		function hapus_datauser($where,$table){
 			$this->db->where($where);
 			$this->db->delete($table);
		}

		function edit_datauser($where,$table){  
 			return $this->db->get_where($table,$where);
		}

		function update_datauser($where,$data,$table){
  			$this->db->where($where);
  			$this->db->update($table,$datauser);
 		} 
 	} 
?>