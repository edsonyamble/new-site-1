<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model {
 
    public function dept_view()
	{
		return $this->db->select('*')	
			->from('department')
			->order_by('dept_id', 'desc')
			->get()
			->result();
	}
	
	public function dept_create($data = array())
	{
		return $this->db->insert('department', $data);
	}

	public function dept_delete($id = null)
	{
		$this->db->where('dept_id',$id)
			->delete('department');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 




public function update_dept($data = array())
	{
		return $this->db->where('dept_id',$data["dept_id"])
			->update("department", $data);


	}
	public function dept_updateForm($id){
        $this->db->where('dept_id',$id);
        $query = $this->db->get('department');
        return $query->row();
    }
    
    
}
