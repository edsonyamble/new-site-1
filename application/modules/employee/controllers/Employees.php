<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends MX_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Employees_model'
			
		));	
		//$this->load->library('myupload');	 
	}

/* ################ Employee Salary Setup Start   #######################....*/

public function emp_salary_setup_view()
	{   
        $this->permission->module('employee','read')->redirect();

		$data['title']    = display('view_salary_setup');  ;
		$data['emp_sl']   = $this->Employees_model->salary_setupView();
		$data['module']   = "employee";
		$data['page']     = "emp_sal_setupview";   
		echo Modules::run('template/layout', $data); 
	} 


public function create_salary_setup()
	{ 
		$data['title'] = display('selectionlist');
		#-------------------------------#
		$this->form_validation->set_rules('emp_sal_name',display('emp_sal_name'),'required|max_length[50]');
		$this->form_validation->set_rules('emp_sal_type',display('emp_sal_type'));
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'emp_sal_name'           => $this->input->post('emp_sal_name',true),
				'emp_sal_type' 	         => $this->input->post('emp_sal_type',true),
				
				
			];   

			if ($this->Employees_model->emp_salsetup_create($postData)) { 
				$this->session->set_flashdata('message', display('message_sent'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("employee/Employees/create_salary_setup");



		} else {
			$data['title']  = display('create');
			$data['module'] = "employee";
			$data['page']   = "emp_salarysetup_form"; 
			echo Modules::run('template/layout', $data);   
			
		}   
	}
	public function delete_emp_salarysetup($id = null) 
	{ 
        $this->permission->module('employee','delete')->redirect();

		if ($this->Employees_model->emp_salstup_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("employee/Employees/emp_salary_setup_view");
	}




	public function update_salsetup_form($id = null){
 		$this->form_validation->set_rules('emp_sal_set_id',null,'required|max_length[11]');
 		$this->form_validation->set_rules('emp_sal_name',display('emp_sal_name'),'required|max_length[50]');
 		$this->form_validation->set_rules('emp_sal_type',display('emp_sal_type')  ,'required|max_length[20]');
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'emp_sal_set_id' 	         => $this->input->post('emp_sal_set_id',true),
				'emp_sal_name' 	             => $this->input->post('emp_sal_name',true),
				'emp_sal_type' 		         => $this->input->post('emp_sal_type',true),
			]; 
			
			if ($this->Employees_model->update_em_salstup($postData)) { 
				$this->session->set_flashdata('message', display('message_sent'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("employee/Employees/update_salsetup_form/". $id);

		} else {
			$data['title']  = display('update');
		    $data['data']   =$this->Employees_model->salarysetup_updateForm($id);
			$data['module'] = "employee";
			$data['page']   = "update_salarysetup_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}

/* ################ Employee Salary Setup End   #######################....*/
/* <<<<<<<<<<<<<##############^^^^^^@@@@^^^^^###############>>>>>>>

/* ################ Employee Performance Start   #######################....*/

public function emp_performance_view()
	{   
        $this->permission->module('employee','read')->redirect();

		$data['title']         = display('view_employee_performance');  ;
		$data['emp_perform']   = $this->Employees_model->emp_performanceView();
		$data['module']        = "employee";
		$data['page']          = "emp_performanceview";   
		echo Modules::run('template/layout', $data); 
	} 


public function create_emp_performance()
	{ 
		$data['title'] = display('performancelist');
		#-------------------------------#
		$this->form_validation->set_rules('employee_id',display('employee_id'),'required|max_length[50]');
		$this->form_validation->set_rules('note',display('note'));
		$this->form_validation->set_rules('date',display('date'));
		$this->form_validation->set_rules('number_of_star',display('number_of_star'));
		$this->form_validation->set_rules('status',display('status'));
		
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'employee_id'            => $this->input->post('employee_id',true),
				'note' 	                 => $this->input->post('note',true),
				'date'                   => $this->input->post('date',true),
				'note_by' 	             =>  $this->session->userdata('fullname'),
				'number_of_star'         => $this->input->post('number_of_star',true),
				'status' 	             => $this->input->post('status',true),
				
			];   

			if ($this->Employees_model->emp_performance_create($postData)) { 
				$this->session->set_flashdata('message', display('successfully_saved'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("employee/Employees/create_emp_performance");



		} else {
			$data['title']  = display('create');
			$data['module'] = "employee";
			$data['page']   = "emp_performance_form"; 
			$data['employee'] = $this->Employees_model->employee();
			$data['emp_perform']   = $this->Employees_model->emp_performanceView();
			echo Modules::run('template/layout', $data);   
			
		}   
	}
	public function delete_emp_performance($id = null) 
	{ 
        $this->permission->module('employee','delete')->redirect();

		if ($this->Employees_model->emp_performance_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("employee/Employees/emp_performance_view");
	}



	public function update_emp_performance_form($id = null){
 		$this->form_validation->set_rules('emp_per_id',null,'max_length[11]');
 		$this->form_validation->set_rules('employee_id',display('employee_id'),'max_length[50]');
		$this->form_validation->set_rules('note',display('note'));
		$this->form_validation->set_rules('date',display('date'));
		$this->form_validation->set_rules('note_by',display('note_by'));
		$this->form_validation->set_rules('number_of_star',display('number_of_star'));
		$this->form_validation->set_rules('status',display('status'));
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'emp_per_id' 	               => $this->input->post('emp_per_id',true),
				'employee_id'            => $this->input->post('employee_id',true),
				'note' 	                 => $this->input->post('note',true),
				'date'                   => $this->input->post('date',true),
				'note_by' 	             => $this->input->post('note_by',true),
				'number_of_star'         => $this->input->post('number_of_star',true),
				'status' 	             => $this->input->post('status',true),
				'updated_by' 	         =>  $this->session->userdata('fullname'),
			]; 
			
			if ($this->Employees_model->update_em_performance($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("employee/Employees/update_emp_performance_form/". $id);

		} else {
			$data['title']  = display('update');
		    $data['data']   =$this->Employees_model->emp_performance_updateForm($id);
		    $data['query']   =$this->Employees_model->get_performaceempid($id);
			$data['module'] = "employee";
			$data['page']   = "update_performance_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}

/* ################ Employee Performance End   #######################....*/


/* ################ Employee Payment start   #######################....*/
public function emp_payment_view()
	{   
        $this->permission->module('employee','read')->redirect();

		$data['title']         = display('view_employee_payment');  ;
		$data['emp_pay']       = $this->Employees_model->emp_paymentView();
		$data['module']        = "employee";
		$data['page']          = "paymentview";   
		echo Modules::run('template/layout', $data); 
	} 
public function create_payment()
	{ 
		$data['title'] = display('add_payment');
		#-------------------------------#
		$this->form_validation->set_rules('employee_id',display('employee_id'),'max_length[50]');
		$this->form_validation->set_rules('total_salary',display('total_salary'));
		$this->form_validation->set_rules('total_working_minutes',display('total_working_minutes'));
		$this->form_validation->set_rules('working_period',display('working_period'));
		$this->form_validation->set_rules('payment_due',display('payment_due'));
		$this->form_validation->set_rules('payment_date',display('payment_date'));
		$this->form_validation->set_rules('paid_by',display('paid_by'));
		

		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'employee_id'                  => $this->input->post('employee_id',true),
				'total_salary' 	               => $this->input->post('total_salary',true),
				'total_working_minutes'        => $this->input->post('total_working_minutes',true),
				'working_period' 	           => $this->input->post('working_period',true),
				'payment_due'                  => $this->input->post('payment_due',true),
				'payment_date' 	               => $this->input->post('payment_date',true),
				'paid_by' 	                   => $this->input->post('paid_by',true),
			];   

			if ($this->Employees_model->create_employee_payment($postData)) { 
				$this->session->set_flashdata('message', display('message_sent'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("employee/Employees/create_payment");



		} else {
			$data['title']  = display('create');
			$data['module'] = "employee";
			$data['page']   = "emp_payment_form"; 
			echo Modules::run('template/layout', $data);   
			
		}   
	}

	

	public function delete_payment($id = null) 
	{ 
        $this->permission->module('employee','delete')->redirect();

		if ($this->Employees_model->emp_payment_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("employee/Employees/emp_payment_view");
	}


	public function update_payment_form($id = null){
 		$this->form_validation->set_rules('emp_sal_pay_id',null,'required|max_length[11]');
 		$this->form_validation->set_rules('employee_id',display('employee_id'),'max_length[50]');
		$this->form_validation->set_rules('total_salary',display('total_salary'));
		$this->form_validation->set_rules('total_working_minutes',display('total_working_minutes'));
		$this->form_validation->set_rules('working_period',display('working_period'));
		$this->form_validation->set_rules('payment_due',display('payment_due'));
		$this->form_validation->set_rules('payment_date',display('payment_date'));
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'emp_sal_pay_id' 	           => $this->input->post('emp_sal_pay_id',true),
				'employee_id'                  => $this->input->post('employee_id',true),
				'total_salary' 	               => $this->input->post('total_salary',true),
				'total_working_minutes'        => $this->input->post('total_working_minutes',true),
				'working_period' 	           => $this->input->post('working_period',true),
				'payment_due'                  => $this->input->post('payment_due',true),
				'payment_date' 	               => $this->input->post('payment_date',true),
				'paid_by' 	                   => $this->session->userdata('fullname'),
			]; 
			
			if ($this->Employees_model->update_payment($postData)) { 
				$this->session->set_flashdata('message', display('successfully_paid'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("employee/Employees/emp_payment_view/". $id);

		} else {
			$data['title']  = display('update');
		    $data['data']   =$this->Employees_model->payment_updateForm($id);
			$data['module'] = "employee";
			$data['page']   = "update_payment_form";   
			echo Modules::run('template/layout', $data); 
		}
 
	}

/* ################ Employee Payment end   #######################....*/



/* ################ Employee Salary Pay Type Start   #######################....*/


public function emp_sal_payType_view()
	{   
        $this->permission->module('employee','read')->redirect();

		$data['title']         = display('view_employee_payment');  ;
		$data['paytype']       = $this->Employees_model->emp_salPaytypeView();
		$data['module']        = "employee";
		$data['page']          = "sal_pay_type_tview";   
		echo Modules::run('template/layout', $data); 
	} 

	public function create_payment_type(){
		$data['title'] = display('add_payment_type');
		$this->form_validation->set_rules('payment_period',display('payment_period'),'required|max_length[50]');
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'payment_period'    => $this->input->post('payment_period',true),
			];   

			if ($this->Employees_model->insert_payment_type($postData)) { 
				$this->session->set_flashdata('message', display('message_sent'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("employee/Employees/create_payment_type");



		} else {
			$data['title']  = display('create');
			$data['module'] = "employee";
			$data['page']   = "emp_payment_type_form"; 
			echo Modules::run('template/layout', $data);   
			
		}   
	}

	public function delete_payment_type($id = null) 
	{ 
        $this->permission->module('employee','delete')->redirect();

		if ($this->Employees_model->emp_payment_type_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("employee/Employees/emp_sal_payType_view");
	}




	/* cv    */
	public function cv()
	{   
        $this->permission->module('circularprocess','read')->redirect();
   
		$data['title']    = display('view details');  
		 $id = $this->uri->segment(4);
        $data['cv'] = $this->Employees_model->employee_details($id);
        $data['edu'] = $this->Employees_model->updateedu($id);
		$data['module']   = "employee";//
		$data['page']     = "cv"; 
		$data['page']     = "resumepdf";  
		echo Modules::run('template/layout', $data); 
	} 

	/* ########## NEW EMPLOYEE ADD ################*/
	public function viewEmhistory()
	{   
        $this->permission->module('employee','read')->redirect();

		$data['title']    = display('view_salary_setup');  ;
		$data['emp_history']   = $this->Employees_model->emp_historyview();
		$data['module']   = "employee";
		$data['dropdown'] = $this->Employees_model->dropdown();
		$data['dropdowndept'] = $this->Employees_model->dropdowndept();
		$data['page']     = "employ_form";   
		echo Modules::run('template/layout', $data); 
	} 


	public function manageemployee()
	{   
        $this->permission->module('employee','read')->redirect();

		$data['title']    = display('view_salary_setup');  ;
		$data['emp_history']   = $this->Employees_model->emp_historyview();
		$data['dropdown'] = $this->Employees_model->dropdown();
		$data['dropdowndept'] = $this->Employees_model->dropdowndept();
		$data['module']   = "employee";
		$data['page']     = "employee_view";   
		echo Modules::run('template/layout', $data); 
	} 

	public function create_employee()
	{ 
		/***** file upload code start ***********/ 

		$data['title'] = display('educationinfo_list');

		#-------------------------------#
		$this->form_validation->set_rules('employee_id',display('employee_id'));
		$this->form_validation->set_rules('pos_id',display('pos_id'));
		$this->form_validation->set_rules('first_name',display('first_name'),'max_length[50]');
		$this->form_validation->set_rules('last_name',display('last_name')  ,'max_length[100]');
		$this->form_validation->set_rules('email',display('email')  ,'max_length[32]');
		$this->form_validation->set_rules('phone',display('phone')  ,'max_length[100]');
		$this->form_validation->set_rules('alter_phone',display('alter_phone')  ,'max_length[100]');
		$this->form_validation->set_rules('present_address',display('present_address')  ,'max_length[100]');
		$this->form_validation->set_rules('parmanent_address',display('parmanent_address')  ,'max_length[100]');
		$this->form_validation->set_rules('degree_name[]',display('degree_name'));
		$this->form_validation->set_rules('university_name[]',display('university_name'));
		$this->form_validation->set_rules('cgp[]',display('cgp'));
		$this->form_validation->set_rules('passing_year[]',display('passing_year'));
		$this->form_validation->set_rules('company_name[]',display('company_name'));
		$this->form_validation->set_rules('working_period[]',display('working_period') );

		$this->load->library('myupload');
		$img = $this->myupload->do_upload(
	    	'./application/modules/employee/assets/images/', 
	    	'picture'

	    );
       
		$this->form_validation->set_rules('duties[]',display('duties'));
		$this->form_validation->set_rules('supervisor[]',display('supervisor'));
	    $unis = $this->input->post('university_name');
	    $degs = $this->input->post('degree_name');
	    $cgps = $this->input->post('cgp');
	    $pyear = $this->input->post('passing_year');
	    $comname = $this->input->post('company_name');
	    $wperiod = $this->input->post('working_period');
	    $duties = $this->input->post('duties');
	    $supe = $this->input->post('supervisor');
	    $this->form_validation->set_rules('dept_id',display('dept_id') );
 
		#-------------------------------#
		if ($this->form_validation->run() === true) {
          	$this->load->library('myupload');
			
		    for ($i=0; $i < sizeof($unis); $i++) {
				$postData = [
			'employee_id'             =>$this->input->post('employee_id',true),
			'pos_id' 	                  => $this->input->post('pos_id',true),
			'first_name' 	          => $this->input->post('first_name',true),
			'last_name' 	          => $this->input->post('last_name',true),
			'email' 	              => $this->input->post('email',true),
			'phone' 	              => $this->input->post('phone',true),
			'alter_phone' 	          => $this->input->post('alter_phone',true),
			'present_address' 	      => $this->input->post('present_address',true),
			'parmanent_address' 	  => $this->input->post('parmanent_address',true),
			'picture' 	              => $img,
			'university_name'         => $unis[$i],
			'degree_name' 	          => $degs[$i],
			'cgp' 	                  => $cgps[$i], 
			'passing_year' 	          => $pyear[$i],
			'company_name'            => $comname[$i],
			'working_period' 	      => $wperiod[$i],
			'duties' 	              => $duties[$i], 
			'supervisor' 	          => $supe[$i], 
		    'dept_id' 	  => $this->input->post('dept_id',true),
		
				];     
				$this->db->insert('employee_history', $postData);
		    }

		    $this->session->set_flashdata('message', display('save_successfully'));
			redirect("employee/Employees/viewEmhistory");



		} else {
			$data['title'] = display('create');
			$data['module'] = "employee";
			$data['dropdowndept'] = $this->Employees_model->dropdowndept();
			$data['dropdown'] = $this->Employees_model->dropdown();
			
			
			$data['page']   = "employ_form"; 

		
			echo Modules::run('template/layout', $data);   
			
		}   
	}
	public function delete_employhistory($id = null) 
	{ 
        $this->permission->module('employee','delete')->redirect();

		if ($this->Employees_model->emplyee_history_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("employee/Employees/viewEmhistory");
	}


    public function download($id)
    {
        # load download helper
        $this->load->helper('download');
        # search for filename by id
        $id = $this->uri->segment(4);
        $this->db->select('*');
        $this->db->where('employee_id', $id);
        $q = $this->db->get('employee_history');
        # if exists continue
        if($q->num_rows() > 0)
        {
            $row  = $q->row();
            $file = FCPATH . 'files/'. $row->filename;
            if(file_exists($file))
                force_download($file, NULL);
        }
        else
            show_404();
    }
    public   function DOWNLOAD_pdf(){
        $data=array();
        $data['cv']=$this->Employees_model->employee_details();
        $html=$this->load->view('cv',$data,TRUE);
        pdf_create($html,'User List');
    }

    public function position_view()
	{   
        $this->permission->module('employee','read')->redirect();

		$data['title']    = display('circularprocess_list');  ;
		$data['position'] = $this->Employees_model->viewPosition();
		$data['module'] = "employee";
		$data['page']   = "positionview";   
		echo Modules::run('template/layout', $data); 
	} 

 
	
 	public function create_position()
	{ 
		$data['title'] = display('employee');
		#-------------------------------#
		$this->form_validation->set_rules('position_name',display('position_name'),'required|max_length[50]');
		$this->form_validation->set_rules('position_details',display('position_details')  ,'required|max_length[100]');
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'position_name' 	 => $this->input->post('position_name',true),
				'position_details' 	 => $this->input->post('position_details',true),
			];   

			if ($this->Employees_model->position_create($postData)) { 
				$this->session->set_flashdata('message', display('successfully_saved'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("employee/Employees/create_position");



		} else {
			$data['title'] = display('create');
			$data['module'] = "employee";
			$data['position'] = $this->Employees_model->viewPosition();

			$data['page']   = "position_form"; 
			echo Modules::run('template/layout', $data);   
			
		}   
	}



	public function delete_pos($id = null) 
	{ 
        $this->permission->module('employee','delete')->redirect();

		if ($this->Employees_model->delete_p($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('employee/Employees/position_view');
	}
	 
public function update_form($id = null){
 		$this->form_validation->set_rules('pos_id',null,'required|max_length[11]');
 		$this->form_validation->set_rules('position_name',display('position_name'),'required|max_length[50]');
		$this->form_validation->set_rules('position_details',display('position_details')  ,'max_length[30]');

	  

		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'pos_id' 	               => $this->input->post('pos_id',true),
				'position_name' 	       => $this->input->post('position_name',true),
				'position_details' 	       => $this->input->post('position_details',true),
				
			]; 
			
			if ($this->Employees_model->update_position($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect('employee/Employees/position_view');

		} else {
		    $data['data']=$this->Employees_model->pos_updateForm($id);
			$data['module'] = "employee";
			$data['page']   = "update_position";   
			echo Modules::run('template/layout', $data); 
		}
 
	}
	////************Employee Update Part***********//
	public function update_employee_form($id = null)
	{ 
		/***** file upload code start ***********/ 

		$data['title'] = display('educationinfo_list');

		#-------------------------------#
		$this->form_validation->set_rules('employee_id',display('employee_id'));
		$this->form_validation->set_rules('pos_id',display('pos_id'));
		$this->form_validation->set_rules('first_name',display('first_name'),'max_length[50]');
		$this->form_validation->set_rules('last_name',display('last_name')  ,'max_length[100]');
		$this->form_validation->set_rules('email',display('email')  ,'max_length[32]');
		$this->form_validation->set_rules('phone',display('phone')  ,'max_length[100]');
		$this->form_validation->set_rules('alter_phone',display('alter_phone')  ,'max_length[100]');
		$this->form_validation->set_rules('present_address',display('present_address')  ,'max_length[100]');
		$this->form_validation->set_rules('parmanent_address',display('parmanent_address')  ,'max_length[100]');
		$this->load->library('myupload');
		$img = $this->myupload->do_upload(
	    	'./application/modules/employee/assets/images/', 
	    	'picture'

	    );
        $sig = $this->myupload->do_upload(
	    	'./application/modules/employee/assets/signature/', 
	    	'signature' 
	    );
		$this->form_validation->set_rules('degree_name[]',display('degree_name'));
		$this->form_validation->set_rules('university_name[]',display('university_name'));
		$this->form_validation->set_rules('cgp[]',display('cgp'));
		$this->form_validation->set_rules('passing_year[]',display('passing_year'));
		$this->form_validation->set_rules('company_name[]',display('company_name'));
		$this->form_validation->set_rules('working_period[]',display('working_period') );

		
		$this->form_validation->set_rules('duties[]',display('duties'));
		$this->form_validation->set_rules('supervisor[]',display('supervisor'));
	    $unis = $this->input->post('university_name');
	    $degs = $this->input->post('degree_name');
	    $cgps = $this->input->post('cgp');
	    $pyear = $this->input->post('passing_year');
	    $comname = $this->input->post('company_name');
	    $wperiod = $this->input->post('working_period');
	    $duties = $this->input->post('duties');
	    $supe = $this->input->post('supervisor');
	    $this->form_validation->set_rules('dept_id',display('dept_id') );
		#-------------------------------#
		if ($this->form_validation->run() === true) {
 	
 			$this->db->where('employee_id', $this->input->post('employee_id'))
 			->delete('employee_history');

		    for ($i=0; $i < sizeof($unis); $i++) {
				$postData = [
			
			'employee_id'             =>$this->input->post('employee_id',true),
			'pos_id' 	              => $this->input->post('pos_id',true),
			'first_name' 	          => $this->input->post('first_name',true),
			'last_name' 	          => $this->input->post('last_name',true),
			'email' 	              => $this->input->post('email',true),
			'phone' 	              => $this->input->post('phone',true),
			'alter_phone' 	          => $this->input->post('alter_phone',true),
			'present_address' 	      => $this->input->post('present_address',true),
			'parmanent_address' 	  => $this->input->post('parmanent_address',true),
			'dept_id'                 => $this->input->post('dept_id',true),
			'picture' 	              => (!empty($img) ? $img : $this->input->post('picture')),
			'university_name'         => $unis[$i],
			'degree_name' 	          => $degs[$i],
			'cgp' 	                  => $cgps[$i], 
			'passing_year' 	          => $pyear[$i],
			'company_name'            => $comname[$i],
			'working_period' 	      => $wperiod[$i],
			'duties' 	              => $duties[$i], 
			'supervisor' 	          => $supe[$i], 
			'signature' 	          => (!empty($sig) ? $sig : $this->input->post('signature')),
		
				]; 

				$this->db->insert('employee_history', $postData);
		    }


		    $this->session->set_flashdata('message', display('successfully_updated'));
			redirect("employee/Employees/manageemployee/". $id);

		} else {
			 $data['data']=$this->Employees_model->employee_updateForm($id);
			  $data['edu']=$this->Employees_model->updateedu($id);
			  $data['work']=$this->Employees_model->workupdat($id);
			$data['module'] = "employee";
			$data['page']   = "update_employee_form";
			$data['dropdowndept'] = $this->Employees_model->dropdowndept();
			$data['dropdown'] = $this->Employees_model->dropdown();   
			$data['bb']       = $this->Employees_model->get_pos($id);
			
			echo Modules::run('template/layout', $data); 
			
		}   
	}
	
}
