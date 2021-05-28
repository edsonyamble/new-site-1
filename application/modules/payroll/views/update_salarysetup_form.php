 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">
                 <?= form_open('payroll/Payroll/update_salsetup_form/'. $data->salary_type_id) ?>

                    <input name="salary_type_id" type="hidden" value="<?php echo $data->salary_type_id ?>">
                 
                      

                        <div class="form-group row">
                            <label for="emp_sal_name" class="col-sm-3 col-form-label"><?php echo display('emp_sal_name') ?> *</label>
                            <div class="col-sm-9">
                                <input name="sal_name" class="form-control" type="text" id="emp_sal_name" value="<?php echo $data->sal_name?>">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="emp_sal_type" class="col-sm-3 col-form-label"><?php echo display('emp_sal_type') ?> </label>
                            <div class="col-sm-9">
                                <input name="emp_sal_type" class=" form-control" type="text"  value="<?php echo $data->emp_sal_type?>"  id="emp_sal_type" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="default_amount" class="col-sm-3 col-form-label"><?php echo display('default_amount') ?> </label>
                            <div class="col-sm-9">
                                <input name="default_amount" class=" form-control" type="text"  value="<?php echo $data->default_amount?>"  id="default_amount" >
                            </div>
                        </div>
                     
                    
     
                   
                        
             
                        <div class="form-group text-right">
                            
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                        </div>

                    <?php echo form_close() ?>


                </div>  
            </div>
        </div>
    </div>
    