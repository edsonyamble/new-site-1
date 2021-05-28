 <div class="form-group text-right">

<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
Add Salary Setup</button> 
<a href="<?php echo base_url();?>/payroll/Payroll/salary_setup_view" class="btn btn-primary">Manage Salary Setup</a>

</div>
  

    <div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong> Salary Setup</strong>
            </div>
            <div class="modal-body">
           

  <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
               
                <div class="panel-body">

                    <?= form_open('payroll/Payroll/create_s_setup') ?>
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> *</label>
                            <div class="col-sm-9">
                                 <?php echo form_dropdown('employee_id',$employee,null,'class="form-control" id="employee_id" style="width:615px"') ?>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="payment_period" class="col-sm-3 col-form-label"><?php echo display('salary_type_id') ?> *</label>
                            <div class="col-sm-9">
                           <!--  <input type="text" class="form-control" name="payment_period" placeholder="<?php echo display('payment_period') ?>" id="payment_period"> -->
                         
                         <select  class="form-control" name="sal_type"  id="sal_type" style="width:615px">
                             <!-- <option value="">Select Payment Type</option> -->
                             <option value="monthly">MONTHLY</option>
                             <option value="weekly">WEEKLY</option>
                             <option value="hourly">HOURLY</option>
                             <option value="daily">DAILY</option>


                         </select>
                            </div>
                            </div>
                            <table  border="1" width="100%">
                            <div class="row">
                            
                              <td class="col-sm-6" style="text-align: center;"><h4  style="text-decoration: underline;font-weight: bold;">Addition</h4><br>
                             <table>                           <?php
   
$x=0;
    foreach ($slname as $ab){

        //echo ++$x;
     
        ?>
                                 <tr><th style="padding:10px"><?php echo $ab->sal_name ;?></th><td><input type="text" name="amount[<?php echo $ab->salary_type_id; ?>]" class="form-control"></td></tr>
<?php
}
?>
                             </table>
                             </td> 
                              <td class="col-sm-6" style="text-align: center;"><h4 style="text-decoration: underline;font-weight: bold;">Deduction</h4><br>

                              <table>
                              <?php
 

    foreach ($sldname as $row){
        
     
        ?>
                                 <tr><th style="padding:10px"><?php echo $row->sal_name ;?></th><td><input type="text" name="amount[<?php echo $row->salary_type_id; ?>]" class="form-control"></td></tr><?php
}
?>
<tr><th style="padding:10px">Tax*</th><td><input type="text" name="amount[<?php echo $row->salary_type_id; ?>]" class="form-control"></td><td style="padding:10px"><input type="checkbox" name="tax_manager" checked="checked" value="1">Tax Manager</td></tr>

                             </table>

                              </td> 
                              
                            </div>
                             
                        </table>
                        </div>

                         <div class="form-group row">
                            <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;">Payable</label>
                            <div class="col-sm-9">
                        
                         <select  class="form-control" name="salary_payable"  id="payable" style="width:630px">
                             
                             <option value="monthly">MONTHLY</option>
                             <option value="weekly">WEEKLY</option>
                             <option value="hourly">HOURLY</option>
                             <option value="daily">DAILY</option>


                         </select>
                            </div>
                            </div>
                            <div class="form-group row">
                            
                            <div class="col-sm-12" style="text-align: center;">
                                 <input type="checkbox" name="absent_deduct" checked="checked" value="1">Deduct Salary if absent at opnen day

                            </div>
                        </div>
                      
             
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('set') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
             
    
   
    </div>
     
            </div>
            

        </div>

    

    <div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('cid') ?></th>
                            <th>Employee Name</th>
                            <th><?php echo display('employee_id') ?></th>
                            <th><?php echo display('sal_type') ?></th>
                             <th>Date</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_sl_setup)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_sl_setup as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                      <td><?php echo $sl; ?></td>
                                      <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                      <td><?php echo $que->employee_id; ?></td>
                                      <td><?php echo $que->sal_type; ?></td>
                                      <td><?php echo $que->create_date; ?></td>
                                                                
                                    
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>
 
 