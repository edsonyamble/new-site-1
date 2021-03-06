<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends MX_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Leave_model'
		));		 
	}

public function weekly_leave_view()
	{   
        $this->permission->method('leave','read')->redirect();

		$data['title']    = display('selection');  ;
		$data['weeklev']   = $this->Leave_model->viewWeekly();
		$data['module']   = "leave";
		$data['page']     = "weeklyleave_view";   
		echo Modules::run('template/layout', $data); 
	} 




public function create_weekleave()
	{ 
		$data['title'] = display('selectionlist');
		#-------------------------------#
		$this->form_validation->set_rules('dayname[]',display('dayname[]'),'max_length[30]');
	 // $status= $this->db->select_max('status')->from('weekly_holiday')->get()->row();

		#-------------------------------#
		if ($this->form_validation->run() === true) {


			 $Specilized_category = $this->input->post('dayname');
  $data=array('dayname'=>implode(",", $Specilized_category),
  );  



			if ($this->Leave_model->weekleave_create($data)) { 
				$this->session->set_flashdata('exception',  display('please_try_again'));
				
				
			} else {
				
				$this->session->set_flashdata('message', display('save_successfully'));
			}
			redirect("leave/Leave/create_weekleave");



		} 



		else {
			$data['title']    = display('create');
			$data['module']   = "leave";
			$data['page']     = "weeklyform"; 
			$data['weeklev']   = $this->Leave_model->viewWeekly();
			echo Modules::run('template/layout', $data);   
			
		}   
	}
public function delete_weekleave($id = null) 
	{ 
        $this->permission->method('leave','delete')->redirect();

		if ($this->Leave_model->weekleave_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));

		}
		redirect("leave/Leave/weekly_leave_view");
	}

public function update_weekleave_form($id = null){
 		$this->form_validation->set_rules('wk_id');
 		$this->form_validation->set_rules('dayname[]',display('dayname'),'max_length[30]');
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

	
			 $Specilized_category = $this->input->post('dayname');
  $dataf=array('wk_id'=>$this->input->post('wk_id'),
      'dayname'=>implode(",", $Specilized_category),
  
  );  

			
			if ($this->Leave_model->update_weeklev($dataf)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("leave/Leave/weekly_leave_view");

		} else {
			$data['title']     = display('update');
		    $data['data']      =$this->Leave_model->weekleave_updateForm($id);
		   
			$data['module']    = "leave";	
			$data['page']      = "update_wkleave_form";   //
			echo Modules::run('template/layout', $data); 
		}
 
	}

	public function holiday_view()
	{   
   

        $this->permission->method('leave','read')->redirect();

		$data['title']    = display('selection');  ;
		$data['holiday']   = $this->Leave_model->viewholiday();
		$data['module']   = "leave";
		$data['page']     = "holiday_form";   
		echo Modules::run('template/layout', $data); 
	} 

public function manage_holiday()
	{   
   

        $this->permission->method('leave','read')->redirect();

		$data['title']    = display('selection');  ;
		$data['holiday']   = $this->Leave_model->viewholiday();
		$data['module']   = "leave";
		$data['page']     = "holiday_view";   
		echo Modules::run('template/layout', $data); 
	} 


public function create_holiday()
	{ 
		$data['title'] = display('ab');
		#-------------------------------#
		$this->form_validation->set_rules('holiday_name',display('holiday_name'),'required|max_length[50]');
		$this->form_validation->set_rules('start_date',display('start_date'));
		$this->form_validation->set_rules('end_date',display('end_date'));
		$this->form_validation->set_rules('no_of_days',display('no_of_days'));
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
				'holiday_name'           => $this->input->post('holiday_name',true),
				'start_date' 	         => $this->input->post('start_date',true),
				'end_date' 	         => $this->input->post('end_date',true),
				'no_of_days' 	         => $this->input->post('no_of_days',true),
				
				
			];   

			if ($this->Leave_model->holiday_create($postData)) { 
				$this->session->set_flashdata('message', display('successfully_saved'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("leave/Leave/holiday_view");



		} else {
			$data['title']  = display('create');
			$data['module'] = "leave";
			$data['page']   = ""; 
			echo Modules::run('template/layout', $data);   
			
		}   
	}


public function delete_holiday($id = null) 
	{ 
        $this->permission->module('leave','delete')->redirect();

		if ($this->Leave_model->holiday_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("leave/Leave/holiday_view");
	}

	public function update_holiday_form($id = null){
 		$this->form_validation->set_rules('payrl_holi_id',null,'required|max_length[11]');
 		$this->form_validation->set_rules('holiday_name',display('holiday_name'),'max_length[30]');
 		$this->form_validation->set_rules('start_date',display('start_date'),'max_length[30]');
 		$this->form_validation->set_rules('end_date',display('end_date'),'max_length[30]');
 		$this->form_validation->set_rules('no_of_days',display('no_of_days'),'max_length[30]');
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'payrl_holi_id' 	              => $this->input->post('payrl_holi_id',true),
				'holiday_name'        => $this->input->post("holiday_name",true),
				'start_date'        => $this->input->post("start_date",true),

                 'end_date'        => $this->input->post("end_date",true),
                 'no_of_days'        => $this->input->post("no_of_days",true),


			]; 
			
			if ($this->Leave_model->update_holiday($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("leave/Leave/holiday_view");

		} else {
			$data['title']     = display('update');
		    $data['data']      =$this->Leave_model->holiday_updateForm($id);
		   
			$data['module']    = "leave";	
			$data['page']      = "update_holiday_form";   //
			echo Modules::run('template/layout', $data); 
		}
 
	}

public function application()
    { 
        $data['title'] = display('application');//agent_picture
        #-------------------------------#
        $this->form_validation->set_rules('employee_id',display('employee_id'));
		$this->form_validation->set_rules('apply_strt_date',display('apply_strt_date'));
		$this->form_validation->set_rules('apply_end_date',display('apply_end_date'),'max_length[50]');
		$this->form_validation->set_rules('leave_aprv_strt_date',display('leave_aprv_strt_date')  ,'max_length[100]');
		$this->form_validation->set_rules('leave_aprv_end_date',display('leave_aprv_end_date')  ,'max_length[32]');
		$this->form_validation->set_rules('num_aprv_day',display('num_aprv_day')  ,'max_length[100]');
		$this->form_validation->set_rules('reason',display('reason')  ,'max_length[100]');
		    $this->load->library('Fileupload');
          $img = $this->fileupload->do_upload(
            './application/modules/leave/assets/images/', 
            'apply_hard_copy'

        );
          
		$this->form_validation->set_rules('apply_date',display('apply_date')  ,'max_length[100]');
		$this->form_validation->set_rules('approve_date',display('approve_date')  ,'max_length[100]');
		$this->form_validation->set_rules('approved_by',display('approved_by'));
		$this->form_validation->set_rules('leave_type',display('leave_type'));
        
      
        #-------------------------------#
        if ($this->form_validation->run() === true) {

           
           
				$postData = [
			'employee_id'             =>$this->input->post('employee_id',true),
			'apply_strt_date' 	                  => $this->input->post('apply_strt_date',true),
			'apply_end_date' 	          => $this->input->post('apply_end_date',true),
			'leave_aprv_strt_date' 	          => $this->input->post('leave_aprv_strt_date',true),
			'leave_aprv_end_date' 	              => $this->input->post('leave_aprv_end_date',true),
			'num_aprv_day' 	              => $this->input->post('num_aprv_day',true),
			'reason' 	          => $this->input->post('reason',true),
			'apply_date' 	      => $this->input->post('apply_date',true),
			'approve_date' 	  => $this->input->post('approve_date',true),
			'approved_by' 	              =>$this->input->post('approved_by',true),
			'leave_type' 	              =>$this->input->post('leave_type',true),
                'apply_hard_copy' => $img,
                
            ];   

            if ($this->Leave_model->application_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_created'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("leave/Leave/application");



        } else {
            $data['title']  = display('leave');
            $data['module'] = "leave";//
           $data['dropdown']   = $this->Leave_model->dropdown();
           $data['mang']   = $this->Leave_model->manageleave();
            $data['page']   = "application_form";   
          echo Modules::run('template/layout', $data); 
        }   
    }


public function delete_application($id = null) 
	{ 
        $this->permission->module('leave','delete')->redirect();

		if ($this->Leave_model->application_delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect("leave/Leave/application_view");
	}
	public function application_view()
	{   
   

        $this->permission->method('leave','read')->redirect();

		$data['title']    = display('selection');  ;
		$data['mang']   = $this->Leave_model->manageleave();
		$data['module']   = "leave";
		$data['page']     = "application_view";   
		echo Modules::run('template/layout', $data); 
	} 
	public function update_application_form($id = null){
 		$this->form_validation->set_rules('leave_appl_id',null,'max_length[11]');
 		$this->form_validation->set_rules('apply_strt_date',display('apply_strt_date'));
		$this->form_validation->set_rules('apply_end_date',display('apply_end_date'),'max_length[50]');
		$this->form_validation->set_rules('leave_aprv_strt_date',display('leave_aprv_strt_date')  ,'max_length[100]');
		$this->form_validation->set_rules('leave_aprv_end_date',display('leave_aprv_end_date')  ,'max_length[32]');
		$this->form_validation->set_rules('num_aprv_day',display('num_aprv_day')  ,'max_length[100]');
		$this->form_validation->set_rules('reason',display('reason')  ,'max_length[100]');
		    $this->load->library('Fileupload');
          $img = $this->fileupload->do_upload(
            './application/modules/leave/assets/images/', 
            'apply_hard_copy'

        );
          
		$this->form_validation->set_rules('apply_date',display('apply_date')  ,'max_length[100]');
		$this->form_validation->set_rules('approve_date',display('approve_date')  ,'max_length[100]');
		$this->form_validation->set_rules('approved_by',display('approved_by'));
		$this->form_validation->set_rules('leave_type',display('leave_type'));
		
		#-------------------------------#
		if ($this->form_validation->run() === true) {

			$postData = [
			    'leave_appl_id' 	              => $this->input->post('leave_appl_id',true),
				'employee_id'             =>$this->input->post('employee_id',true),
			'apply_strt_date' 	                  => $this->input->post('apply_strt_date',true),
			'apply_end_date' 	          => $this->input->post('apply_end_date',true),
			'leave_aprv_strt_date' 	          => $this->input->post('leave_aprv_strt_date',true),
			'leave_aprv_end_date' 	              => $this->input->post('leave_aprv_end_date',true),
			'num_aprv_day' 	              => $this->input->post('num_aprv_day',true),
			'reason' 	          => $this->input->post('reason',true),
			'apply_date' 	      => $this->input->post('apply_date',true),
			'approve_date' 	  => $this->input->post('approve_date',true),
			'approved_by' 	              =>$this->input->post('approved_by',true),
			'leave_type' 	              =>$this->input->post('leave_type',true),
                'apply_hard_copy' => (!empty($img) ? $img : $this->input->post('apply_hard_copy')),


			]; 
			
			if ($this->Leave_model->update_application($postData)) { 
				$this->session->set_flashdata('message', display('successfully_updated'));
			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}
			redirect("leave/Leave/application_view");

		} else {
			$data['title']     = display('update');
		    $data['data']      =$this->Leave_model->application_updateForm($id);
		   $data['dropdown']   = $this->Leave_model->dropdown();
		   $data['bb']      =$this->Leave_model->get_id($id);
			$data['module']    = "leave";	
			$data['page']      = "update_application_form";   //
			echo Modules::run('template/layout', $data); 
		}
 
	}

}
