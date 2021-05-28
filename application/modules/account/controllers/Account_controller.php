<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_controller extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model(array(
            'Account_model'
        ));      
    }
 
    public function accountView()
    {   
        $this->permission->module('account','read')->redirect();

        $data['title']  = display('account');  
        $data['acview'] = $this->Account_model->account_view();
        $data['module'] = "account";
        $data['page']   = "account_view";   
        echo Modules::run('template/layout', $data); 
    }    


    public function create_account()
    { 
        $data['title'] = display('account');
        #-------------------------------#
        $this->form_validation->set_rules('account_name',display('account_name'),'required|max_length[150]');
        $this->form_validation->set_rules('account_type',display('account_type'),'required|max_length[20]');
        
      
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
            'account_name'      => $this->input->post('account_name',true),
            'account_type'      => $this->input->post('account_type',true),
                
            ];   

            if ($this->Account_model->account_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_saved'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("account/Account_controller/create_account");



        } else {
            $data['title']  = display('account');
            $data['module'] = "account";
            $data['acview'] = $this->Account_model->account_view();
            $data['page']   = "account_form";   
          echo Modules::run('template/layout', $data); 
        }   
    }
    public function account_delete($id=null){
        $this->permission->module('account','delete')->redirect();
        if($this->Account_model->delete_account($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('account/Account_controller/accountView');
    }

    public function account_update($id = null)
    { 
        $data['title'] = display('price');
        #-------------------------------#
         $this->form_validation->set_rules('account_id',display('account_id'));
        $this->form_validation->set_rules('account_name',display('account_name'),'required|max_length[150]');
        $this->form_validation->set_rules('account_type',display('account_type'),'required|max_length[20]');
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    
            'account_id'   =>$this->input->post('account_id',true),
            
            'account_name' => $this->input->post('account_name',true),
            'account_type' => $this->input->post('account_type',true),
            ];   

            if ($this->Account_model->update_account($Data)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("account/Account_controller/accountView");



        } else {
           $data['title']      = display('update');
            $data['data']      =$this->Account_model->account_updateForm($id);
            $data['actype']      =$this->Account_model->accounttype();
            $data['bb']          = $this->Account_model->get_type($id);
            $data['module']    = "account";    
            $data['page']      = "update_account_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }


public function transView()
    {   
        $this->permission->module('account','read')->redirect();

        $data['title']    = display('account');  
        $data['acctrans'] = $this->Account_model->trans_view();
        $data['module']   = "account";
        $data['page']     = "transaction_view";   
        echo Modules::run('template/layout', $data); 
    } 


   public function create_transaction()
    { 
        $data['title'] = display('account');
        #-------------------------------#
        $this->form_validation->set_rules('account_id',display('account_id'),'required|max_length[150]');
        $this->form_validation->set_rules('transaction_description',display('transaction_description'),'max_length[200]');

         $this->form_validation->set_rules('amount',display('amount'),'required|max_length[150]');
        
        $this->form_validation->set_rules('payment_id',display('payment_id'),'max_length[200]');
      $tdate=date('Y-m-d');
      
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
     'account_id'       => $this->input->post('account_id',true),
    'transaction_description'   => $this->input->post('transaction_description',true),

        'amount'        => $this->input->post('amount',true),
     'tran_date'        => $tdate,
    'payment_id'        => $this->input->post('payment_id',true),
    'create_by_id'      => $this->session->userdata('fullname'),
            ];   

            if ($this->Account_model->trans_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_saved'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("account/Account_controller/create_transaction");



        } else {//
    $data['title']      = display('account');
    $data['module']     = "account";
    $data['accountlist']=$this->Account_model->accountlist();
    $data['acc']        =$this->Account_model->acc();
    $data['acctrans']   =$this->Account_model->trans_view();
   
    $data['page']       = "transaction_form";   

      echo Modules::run('template/layout', $data); 
        }   
    } 


 public function transaction_delete($id=null){
        $this->permission->module('account','delete')->redirect();
        if($this->Account_model->delete_trans($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('account/Account_controller/transView');
    }

    public function transaction_update($id = null)
    { 
        $data['title'] = display('transaction');
        #-------------------------------#
         $this->form_validation->set_rules('account_tran_id',display('account_tran_id'));
         $this->form_validation->set_rules('account_id',display('account_id'),'required|max_length[150]');
        $this->form_validation->set_rules('transaction_description',display('transaction_description'),'max_length[200]');

         $this->form_validation->set_rules('amount',display('amount'),'required|max_length[150]');
       
        $this->form_validation->set_rules('payment_id',display('payment_id'),'max_length[200]');
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    
                  'account_tran_id'   =>$this->input->post('account_tran_id',true),
            
            'account_id'              => $this->input->post('account_id',true),
            'transaction_description' => $this->input->post('transaction_description',true),

                'amount'              => $this->input->post('amount',true),
           
            'payment_id'              => $this->input->post('payment_id',true),
            ];   

            if ($this->Account_model->update_trans($Data)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("account/Account_controller/transView");



        } else {
    $data['title']     = display('update');
    $data['data']      =$this->Account_model->trans_updateForm($id);
    $data['module']    = "account";  
    $data['bb']          = $this->Account_model->get_id($id); 
    $data['accountlist']=$this->Account_model->acdropdown(); 
    $data['page']      = "update_trans_form";   
    echo Modules::run('template/layout', $data);  
        }   
    }

public function account_datails()
    {     
        $data['ac_datails'] = $this->Account_model->view_details();
        $data['module']   = "account";
        $data['page']     = "details";   
        echo Modules::run('template/layout', $data); 
    }

     public function view_details(){

        $id = $this->uri->segment(4);
        $data['title']  = display('Details');  //trans_view
        $data['detls']   = $this->Account_model->details($id);
        $data['vdtls']   = $this->Account_model->trans_view();
        $data['module'] = "account";
        $data['page']   = "account_details";   
        echo Modules::run('template/layout', $data); 

    }

}
