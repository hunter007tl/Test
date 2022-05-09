<?php
class Base_Model extends CI_Model{
    
    function cek_login($table,$where){
    	return $this->db->get_where($table,$where);
    }

	function get_data($table){
		return $this->db->get($table);
	}

	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->delete($table,$where);
	}

	function get_user_id(){
        $q = $this->db->query("SELECT MAX(RIGHT(user_id,4)) AS kd_max FROM users");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Tokyo');
        return 'ID'.'UR'.date('dms').$kd;
    }

    public function delete_all($id){
        $this->db->where_in('log_code', $id);
		$this->db->delete('log_activity');
	}
}
?>