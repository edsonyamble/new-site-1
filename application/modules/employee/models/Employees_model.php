<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_model extends CI_Model {
 
   

    public function employee()
	{
		$this->db->select('*');
        $this->db->from('employee_history');
        $query = $this->db->get();
        $data = $query->result();
       
        $list = array();
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->employee_id] = $value->employee_id;
       		} 
       	}
       	return $list;
	}


 public  function get_dropdown_emp_pos($id)
    {
        $query=$this->db->get_where('employee_history',array('employee_id'=>$id));
        return $query->row_array();
    } 

 public  function get_pos($id)
    {
        $query=$this->db->get_where('employee_history',array('employee_id'=>$id));
        return $query->row_array();
    } 
    
	
/* ###########....Employee Salary Setup Start ....##################################  */

public function salary_setupView()
	{
		return $this->db->select('*')	
			->from('employee_salary_setup')
			->order_by('emp_sal_set_id', 'desc')
			->get()
			->result();
	}
public function emp_salsetup_create($data = array())
	{
		return $this->db->insert('employee_salary_setup', $data);//
	}
public function emp_salstup_delete($id = null)
	{
		$this->db->where('emp_sal_set_id',$id)
			->delete('employee_salary_setup');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function update_em_salstup($data = array())
	{
		return $this->db->where('emp_sal_set_id', $data["emp_sal_set_id"])
			->update("employee_salary_setup", $data);
	}
	public function salarysetup_updateForm($id){
        $this->db->where('emp_sal_set_id',$id);
        $query = $this->db->get('employee_salary_setup');
        return $query->row();
    }
    /* ###########....Employee Salary Setup End ....##################################  */

    /* ###########...Employee Performance Start ....##################################  */
         public function emp_performanceView()
	{
		
			 return $this->db->select('count(DISTINCT(per.emp_per_id)) as emp_per_id,per.*,p.employee_id,p.first_name,p.last_name')   
            ->from('employee_performance per')
            ->join('employee_history p', 'per.employee_id = p.employee_id', 'left')
            ->group_by('per.emp_per_id')
            ->order_by('per.emp_per_id', 'desc')
            ->get()
            ->result();
	}
	public function emp_performance_create($data = array())
	{
		return $this->db->insert('employee_performance', $data);
	}

	public function emp_performance_delete($id = null)
	{
		$this->db->where('emp_per_id',$id)
			->delete('employee_performance');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 
	 public  function get_performaceempid($id)
    {
        $query=$this->db->get_where('employee_performance',array('emp_per_id'=>$id));
        return $query->row_array();
    }  


	public function update_em_performance($data = array())
	{
		return $this->db->where('emp_per_id', $data["emp_per_id"])
			->update("employee_performance", $data);
	}
	public function emp_performance_updateForm($id){
        $this->db->where('emp_per_id',$id);
        $query = $this->db->get('employee_performance');
        return $query->row();
    }

    /* ###########....Employee Performance End ....##################################  */


    /* ###########...Employee Payment Start ....##################################  */
public function emp_paymentView()
	{
			return $this->db->select('count(DISTINCT(pment.emp_sal_pay_id)) as emp_sal_pay_id,pment.*,p.employee_id,p.first_name,p.last_name')   
            ->from('employee_salary_payment pment')
            ->join('employee_history p', 'pment.employee_id = p.employee_id', 'left')
            ->group_by('pment.emp_sal_pay_id')
            ->order_by('pment.emp_sal_pay_id', 'desc')
            ->get()
            ->result();
	}

	public function create_employee_payment($data = array())
	{
		return $this->db->insert('employee_salary_payment', $data);

	}

	public function emp_payment_delete($id = null)
	{
		$this->db->where('emp_sal_pay_id',$id)
			->delete('employee_salary_payment');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function update_payment($data = array())
	{
		return $this->db->where('emp_sal_pay_id', $data["emp_sal_pay_id"])
			->update("employee_salary_payment", $data);
	}
	public function payment_updateForm($id){
        $this->db->where('emp_sal_pay_id',$id);
        $query = $this->db->get('employee_salary_payment');
        return $query->row();
    }


    /* ###########...Employee Payment End ....##################################  */

    /* ###########...Employee sALARY PayType Start ....##################################  */


    public function emp_salPaytypeView()
	{
		return $this->db->select('*')	
			->from('employee_sal_pay_type')
			->order_by('emp_sal_pay_type_id', 'desc')
			->get()
			->result();
	}
	

	public function emp_payment_type_delete($id = null)
	{
		$this->db->where('emp_sal_pay_type_id',$id)
			->delete('employee_sal_pay_type');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 


/*------- payment */

 public function employee_details($id)
	{
		return $this->db->select('p.*,d.department_name')   
            ->from('employee_history p')
            ->join('department d', 'p.dept_id = d.dept_id', 'left')
			->where('p.employee_id',$id)
			->get()
			->result();
	}
	
	public function emp_historyview()
	{
		return $this->db->select('*')	
			->from('employee_history')
			->group_by('employee_id')
			->order_by('emp_his_id', 'desc')
			->get()
			->result();
	}

public function insert_employee($data = array())
	{
		return $this->db->insert('employee_history', $data);//
	}

	public function emplyee_history_delete($id = null)
	{
		$this->db->where('employee_id',$id)
			->delete('employee_history');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function position_create($data = array())
	{
		return $this->db->insert('position', $data);
	}

	public function viewPosition()
	{
		return $this->db->select('*')	
			->from('position')
			->order_by('pos_id', 'desc')
			->get()
			->result();
	}


	public function update_position($data = array())
	{
		return $this->db->where('pos_id', $data["pos_id"])
			->update("position", $data);
	}

	public function delete_p($id = null)
	{
		$this->db->where('pos_id',$id)
			->delete('position');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function pos_updateForm($id){
        $this->db->where('pos_id',$id);
        $query = $this->db->get('position');
        return $query->row();
    }

    //update form employee ----
    public function update_employee($data = array())
	{
		return $this->db->where('employee_id', $data["employee_id"])
			->update("employee_history", $data);
	}


	public function employee_updateForm($id){
        $this->db->where('employee_id',$id);
        $query = $this->db->get('employee_history');
        return $query->row();
    }
    public function updateedu($id)
	{
		return $this->db->select('*')	
			->from('employee_history')
			->where('employee_id',$id)	
			->get()
			->result();
	}

	public function workupdat($id)
	{
		return $this->db->select('company_name,working_period,duties, 	supervisor')	
			->from('employee_history')
			->where('employee_id',$id)
			->get()
			->result();
	}
		public function dropdown()
	{
		$this->db->select('*');
        $this->db->from('position');
        $query = $this->db->get();
        $data = $query->result();
       
        $list = array();
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->position_name] = $value->position_name;
       		} 
       	}
       	return $list;
	}

		public function dropdowndept()
	{
		$this->db->select('*');
        $this->db->from('department');
        $query = $this->db->get();
        $data = $query->result();
       
        $list = array();
       	if (!empty($data) ) {
       		foreach ($data as $value) {
       			$list[$value->dept_id] = $value->department_name;
       		} 
       	}
       	return $list;
	}



}


