<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave_model extends CI_Model {
 
    public function viewWeekly()
	{
		return $this->db->select('*')	
			->from('weekly_holiday')
			->order_by('wk_id', 'desc')
			->get()
			->result();
	}
	public function weekleave_create($data = array())
	{

 // $Specilized_category = $this->input->post('dayname[]');
 //  $data=array('dayname'=>implode(",", $Specilized_category),);
 

$this->db->insert('weekly_holiday',$data);
	}

	public function weekleave_delete($id = null)
	{
		$this->db->where('wk_id',$id)
			->delete('weekly_holiday');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 




public function update_weeklev($data = array())
	{
		return $this->db->where('wk_id',$data["wk_id"])
			->update("weekly_holiday", $data);


	}
	public function weekleave_updateForm($id){
        $this->db->where('wk_id',$id);
        $query = $this->db->get('weekly_holiday');
        return $query->row();
    }
    
    
public function viewholiday()
	{
return $this->db->select('*')	
			->from('payroll_holiday')
			->order_by('payrl_holi_id', 'desc')
			->get()
			->result();


     
    }
		

	public function holiday_create($data = array())
	{
		return $this->db->insert('payroll_holiday', $data);
	}


public function holiday_delete($id = null)
	{
		$this->db->where('payrl_holi_id',$id)
			->delete('payroll_holiday');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 


	public function update_holiday($data = array())
	{
		return $this->db->where('payrl_holi_id', $data["payrl_holi_id"])
			->update("payroll_holiday", $data);


	}
	public function holiday_updateForm($id){
        $this->db->where('payrl_holi_id',$id);
        $query = $this->db->get('payroll_holiday');
        return $query->row();
    }

	public function application_create($data = array())
	{
		return $this->db->insert('leave_apply', $data);
	}
	 public function dropdown(){
    	$this->db->select('*');
    	$this->db->from('employee_history');
    	$query=$this->db->get();
    	$data=$query->result();
    	$list=array();
    	if(!empty($data)){
    		foreach ($data as  $value) {
    			$list[$value->employee_id]=$value->first_name." ".$value->last_name;
    		}
    	}
    	return $list;
    }

    public function manageleave()
	{

      return $this->db->select('count(DISTINCT(ap.leave_appl_id)) as leave_appl_id,ap.*,p.employee_id,p.first_name,p.last_name')   
            ->from('leave_apply ap')
            ->join('employee_history p', 'ap.employee_id = p.employee_id', 'left')
            ->group_by('ap.leave_appl_id')
            ->order_by('ap.leave_appl_id', 'desc')
            ->get()
            ->result();
    }
    public function application_delete($id = null)
	{
		$this->db->where('leave_appl_id',$id)
			->delete('leave_apply');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 
	public function update_application($data = array())
	{
		return $this->db->where('leave_appl_id', $data["leave_appl_id"])
			->update("leave_apply", $data);


	}
	public function application_updateForm($id){
        $this->db->where('leave_appl_id',$id);
        $query = $this->db->get('leave_apply');
        return $query->row();
    }
     public  function get_id($id)
    {
        $query=$this->db->get_where('leave_apply',array('leave_appl_id'=>$id));
        return $query->row_array();
    } 
}
