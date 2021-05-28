<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends MX_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Payroll_model'
		));		 
	}

public function emp_salary_setup_view()
	{   
        $this->permission->module('payroll','read')->redirect();

		$data['title']    = display('view_salary_setup');  ;
		$data['emp_sl']   = $this->Payroll_model->salary_setupView();
		$data['module']   = "payroll";
		$data['page']     = "emp_sal_setupview";   
		echo Modules::run('template/layout', $data); 
	} 


public function create_salary_setup()
	{ 
		$data['title'] = display('selectionlist');
		#-------------------------------#
		$this->form_validation->set_rules('sal_name',display('sal_name'),'required|max_length[50]');
		$this->form_validation->set_rules('emp_sal_type',display('emp_sal_type'));
		$this->form_validation->set_rules('default_amount',display('default_amount'));
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'sal_name'           => $this->input->post('sal_name',true),
				'emp_sal_type' 	         => $this->input->post('emp_sal_type',true),
				'default_amount' 	         => $this->input->post('default_amount',true),
				
				
			];   

			if ($this->Payroll_model->emp_salsetup_create($postData)) { 
				$this->session->set_flashdata('message', display('successfully_saved'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("payroll/Payroll/create_salary_setup");



		} else {
			$data['title']  = display('create');
			$data['module'] = "payroll";
			$data['page']   = "emp_salarysetup_form";
			$data['emp_sl']   = $this->Payroll_model->salary_setupView(); 
			echo Modules::run('template/layout', $data);   
			
		}   
	}
	public function delete_emp_salarysetup($id = null) 
	{ 
        $this->permission->module('payroll','delete')->redirect();

		if ($this->Payroll_model->emp_salstup_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("payroll/Payroll/emp_salary_setup_view");
	}




	public function update_salsetup_form($id = null){
 		$this->form_validation->set_rules('salary_type_id',null,'required|max_length[11]');
 		$this->form_validation->set_rules('sal_name',display('sal_name'),'required|max_length[50]');
 		$this->form_validation->set_rules('emp_sal_type',display('emp_sal_type')  ,'max_length[20]');
 		$this->form_validation->set_rules('default_amount',display('default_amount')  ,'required|max_length[20]');
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'salary_type_id' 	             => $this->input->post('salary_type_id',true),
				'sal_name' 	                     => $this->input->post('sal_name',true),
				'emp_sal_type' 		             => $this->input->post('emp_sal_type',true),
				'default_amount' 		         => $this->input->post('default_amount',true),
			]; 
			
			if ($this->Payroll_model->update_em_salstup($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("payroll/Payroll/update_salsetup_form/". $id);

		} else {
			$data['title']  = display('update');
		    $data['data']   =$this->Payroll_model->salarysetup_updateForm($id);
			$data['module'] = "payroll";
			$data['page']   = "update_salarysetup_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}


public function salary_setup_view()
	{   
        $this->permission->module('payroll','read')->redirect();

		$data['title']    = display('view_salary_setup');  ;
		$data['emp_sl_setup']   = $this->Payroll_model->salary_setupindex();
		$data['module']   = "payroll";
		$data['page']     = "sal_setupview";   
		echo Modules::run('template/layout', $data); 
	} 


public function create_s_setup()
	{ 
		$data['title'] = display('selectionlist');
		#-------------------------------#
		$this->form_validation->set_rules('employee_id',display('employee_id'),'required|max_length[50]');
		$this->form_validation->set_rules('sal_type',display('sal_type'));
		$this->form_validation->set_rules('amount[]',display('amount'));
		$this->form_validation->set_rules('salary_payable',display('salary_payable'));
		$this->form_validation->set_rules('absent_deduct',display('absent_deduct'));
		$this->form_validation->set_rules('tax_manager',display('tax_manager'));
		$amount=$this->input->post('amount');
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {
			$date=date('Y-m-d');

			foreach($amount as $key=>$value)
			{
				
			

			
				
			$postData = [
				'employee_id'           => $this->input->post('employee_id',true),
				'sal_type'              => $this->input->post('sal_type',true),
				'salary_type_id' 	    => $key,
				'amount' 	            => $value,
				'create_date'           =>$date,
				
				
			]; 

			$this->Payroll_model->salary_setup_create($postData);

		}

			if($this->input->post('absent_deduct',true)==1)
			{
				$absent_deduct=1;	
			}
			else
			{
				$absent_deduct=0;
			}

			
			if($this->input->post('tax_manager',true)==1)
			{
				$tax_manager=1;	
			}
			else
			{
				$tax_manager=0;
			}

			

	
			$Data1 = [
				'employee_id'                => $this->input->post('employee_id',true),
				'salary_payable' 	         => $this->input->post('salary_payable',true),
				'absent_deduct' 	         => $absent_deduct,
				'tax_manager' 	             => $tax_manager,
				
				
			];   
			$this->Payroll_model->salary_head_create($Data1);
			
			
			
				$this->session->set_flashdata('message', display('successfully_saved_saletup'));
			
			redirect("payroll/Payroll/create_s_setup");



		} else {
			$data['title']      = display('create');
			$data['module']     = "payroll";
			$data['slname']     = $this->Payroll_model->salary_typeName();
			$data['sldname']    = $this->Payroll_model->salary_typedName();
			$data['employee']   = $this->Payroll_model->empdropdown();
			$data['emp_sl_setup']   = $this->Payroll_model->salary_setupindex();
			$data['page']       = "salarysetup_form"; 
			echo Modules::run('template/layout', $data);   
			
		}   
	}
	public function delete_salsetup($id = null) 
	{ 
        $this->permission->module('payroll','delete')->redirect();

		if ($this->Payroll_model->emp_salstup_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("payroll/Payroll/emp_salary_setup_view");
	}



public function salary_generate_view()
	{   
        $this->permission->module('payroll','read')->redirect();

		$data['title']    = display('view_salary_generate');  ;
		$data['salgen']   = $this->Payroll_model->salary_generateView();
		$data['module']   = "payroll";
		$data['page']     = "sal_genview";   
		echo Modules::run('template/layout', $data); 
	} 

	public function create_salary_generate()
	{ 
		$data['title'] = display('selectionlist'); 
		#-------------------------------# 
		$this->form_validation->set_rules('name',display('name'),'required|max_length[50]');
		$this->form_validation->set_rules('start_date',display('start_date'),'required|max_length[50]');
		$this->form_validation->set_rules('end_date',display('end_date'),'max_length[50]');
		#-------------------------------#
	
		if ($this->form_validation->run() === true) {
			 
			$employee = $this->db->select('employee_id')->from('employee_history')->group_by('first_name')->get()->result();
			// echo "<pre>";
           $startd    = $this->input->post('start_date');
// 			print_r($employee);
// exit;
$ab=date('Y-m-d');
			if (sizeof($employee) > 0)
			foreach($employee as $key=>$value)
			{ 

				$postData = [
					'employee_id'         => $value->employee_id,
					'name'                =>  $this->input->post('name',true),
					'gdate'               =>$ab,
					'start_date' 	      =>  $this->input->post('start_date',true), 
	                'end_date' 	          =>  $this->input->post('end_date',true), 
					'generate_by' 	      =>  $this->session->userdata('fullname'), 
				]; 
				
				$this->db->insert('salary_sheet_generate', $postData);
				//} 
			  
		  		$aAmount   = $this->db->select('SUM(amount) AS amount')->from('employee_salary_setup')->where("`salary_type_id` IN(SELECT `salary_type_id` FROM `salary_type` WHERE `emp_sal_type`=1)",NULL, FALSE)->where('employee_id', $value->employee_id)->get()->row()->amount;
		  		$dAmount   = $this->db->select('SUM(amount) AS amount')->from('employee_salary_setup')->where("`salary_type_id` IN(SELECT `salary_type_id` FROM `salary_type` WHERE `emp_sal_type`=0)",NULL, FALSE)->where('employee_id', $value->employee_id)->get()->row()->amount;
		 		$netAmount = number_format($aAmount - $dAmount, 2);
		 		$startd    = $this->input->post('start_date');
                $end       = $this->input->post('end_date');
              

		 	    $times     = $this->db->select('SUM(TIME_TO_SEC(staytime)) AS staytime')->from('emp_attendance')->where('date BETWEEN "'. date('d-m-Y', strtotime($startd)). '" and "'. date('d-m-Y', strtotime($end)).'"')->where("employee_id" ,$value->employee_id )->get()->row()->staytime;
              
                $wormin = number_format($times/60, 2);
                  $workingper   = $this->db->select('COUNT(date) AS date')->from('emp_attendance')->where('date BETWEEN "'. date('d-m-Y', strtotime($startd)). '" and "'. date('d-m-Y', strtotime($end)).'"')->where("employee_id" ,$value->employee_id )->get()->row()->date;
// print_r($gendate);
// exit;
    
		  		$paymentData = array(
	  				'employee_id'  => $value->employee_id,
	  				'total_salary' =>$netAmount,
	  				'total_working_minutes' => $wormin, 
	  				'working_period' => $workingper,
		  		);
// print_r($paymentData);
// 		  		exit;
				$this->db->insert('employee_salary_payment', $paymentData);
			}
		


		    $this->session->set_flashdata('message', display('successfully_saved_saletup'));
			redirect("payroll/Payroll/create_salary_generate");
		} else {
			$data['title']  = display('create');
			$data['module'] = "payroll";
			$data['page']   = "salary_generate_form"; 
			$data['salgen']   = $this->Payroll_model->salary_generateView();
			echo Modules::run('template/layout', $data);   
			
		}   
	}
	public function delete_sal_gen($id = null) 
	{ 
        $this->permission->module('payroll','delete')->redirect();

		if ($this->Payroll_model->salary_gen_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("payroll/Payroll/salary_generate_view");
	}

	public function update_salgen_form($id = null){
 		$this->form_validation->set_rules('ssg_id',null,'max_length[11]');
 		$this->form_validation->set_rules('name',display('name'),'max_length[50]');
		
		$this->form_validation->set_rules('start_date',display('start_date'));
		$this->form_validation->set_rules('end_date',display('end_date'));
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'ssg_id' 	             => $this->input->post('ssg_id',true),
				'name'                   => $this->input->post('name',true),
				'start_date' 	         => $this->input->post('start_date',true),
				'end_date' 	             => $this->input->post('end_date',true),
			

			]; 
			
			if ($this->Payroll_model->update_sal_gen($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("payroll/Payroll/salary_generate_view");

		} else {
			$data['title']  = display('update');
		    $data['data']   =$this->Payroll_model->salargen_updateForm($id);
			$data['module'] = "payroll";
			$data['page']   = "update_salarygenerate_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}
	/* salary setup update form  start*/
	public function updates_salstup_form($id = null){
		
 		#-------------------------------#
		$this->form_validation->set_rules('employee_id',display('employee_id'),'required|max_length[50]');
		$this->form_validation->set_rules('sal_type',display('sal_type'));
		$this->form_validation->set_rules('amount[]',display('amount'));
		$this->form_validation->set_rules('salary_payable',display('salary_payable'));
		$this->form_validation->set_rules('absent_deduct',display('absent_deduct'));
		$this->form_validation->set_rules('tax_manager',display('tax_manager'));
		$amount=$this->input->post('amount');
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {
			

			foreach($amount as $key=>$value)
			{
	
			$postData = array(
				'employee_id'        => $this->input->post('employee_id',true),
				'sal_type'           => $this->input->post('sal_type',true),
				'salary_type_id' 	 => $key,
				'amount' 	         => $value
			);

			$this->Payroll_model->update_sal_stup($postData);

		  }
		  

			if($this->input->post('absent_deduct',true)==1)
			{
				$absent_deduct=1;	
			}
			else
			{
				$absent_deduct=0;
			}

			
			if($this->input->post('tax_manager',true)==1)
			{
				$tax_manager=1;	
			}
			else
			{
				$tax_manager=0;
			}


			$Data = [
				'employee_id'                => $this->input->post('employee_id',true),
				'salary_payable' 	         => $this->input->post('salary_payable',true),
				'absent_deduct' 	         => $absent_deduct,
				'tax_manager' 	             => $tax_manager,
				
				
			];   

			
			$this->Payroll_model->update_sal_head($Data);
		
			
			
				$this->session->set_flashdata('message', display('successfully_saved_saletup'));
			redirect("payroll/Payroll/updates_salstup_form/". $id);
//
		} else {

			$data['title']       = display('update');//
		    $data['data']        = $this->Payroll_model->salary_s_updateForm($id);
			$data['samlft']      = $this->Payroll_model->salary_amountlft($id);
			$data['amo']         = $this->Payroll_model->salary_amount($id);
			$data['bb']          = $this->Payroll_model->get_empid($id);
			$data['gt']          = $this->Payroll_model->get_type($id);
			$data['employee']    = $this->Payroll_model->empdropdown();
			$data['type']        = $this->Payroll_model->type();
			$data['payable']     = $this->Payroll_model->payable();
			$data['gt_pay']      = $this->Payroll_model->get_payable($id);
			$data['module']      = "payroll";
			$data['page']        = "update_sal_setup_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}


	
}
