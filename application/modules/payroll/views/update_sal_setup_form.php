 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">
                 <?= form_open('payroll/Payroll/updates_salstup_form/'. $data->employee_id) ?>

                    
                     
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_id') ?> *</label>
                            <div class="col-sm-9">
                                <?php
                        $value= $bb ['employee_id'];
echo form_dropdown('employee_id', $employee, $value, 'class="form-control"');
?>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="payment_period" class="col-sm-3 col-form-label"><?php echo display('salary_type_id') ?> *</label>
                            <div class="col-sm-9">
                           <!--  <input type="text" class="form-control" name="payment_period" placeholder="<?php echo display('payment_period') ?>" id="payment_period"> -->
                         
                        <?php
                        $value= $gt ['sal_type'];
echo form_dropdown('sal_type', $type, $value, 'class="form-control"');
?>
                            </div>
                            </div>
                            <table  border="1" width="100%">
                            <div class="row">
                            
                              <td class="col-sm-6" style="text-align: center;"><h4  style="text-decoration: underline;font-weight: bold;">Addition</h4><br>
                             <table>  

                             <?php foreach($amo as $value){?>
                             <tr>
                             <th style="padding:10px"><?php echo $value->sal_name ;?></th>
                                <td>
                                <input type="text" name="amount[<?php echo $value->salary_type_id; ?>]" class="form-control" value="<?php echo $value->amount; ?>">
                             </td>
                             </tr>
                             <?php } ?>
                   
                             </table>
                             </td> 
                              <td class="col-sm-6" style="text-align: center;"><h4 style="text-decoration: underline;font-weight: bold;">Deduction</h4><br>

                              <table>
                               <?php foreach($samlft as $value){?>
                              

  
                                 <tr><th style="padding:10px"><?php echo $value->sal_name ;?></th><td> <input type="text" name="amount[<?php echo $value->salary_type_id; ?>]" class="form-control" value="<?php echo $value->amount ?>"></td></tr>
                                  <?php }?>

<tr><th style="padding:10px">Tax*</th><td> <input type="text" name="amount[<?php echo $value->salary_type_id; ?>]" class="form-control" value="<?php echo $value->amount ?>"></td><td style="padding:10px"><input type="checkbox" name="tax_manager" checked="checked" value="1">Tax Manager</td></tr>

                             </table>

                              </td> 
                              
                            </div>
                             
                        </table>
                        

                         <div class="form-group row">
                            <label for="payable" class="col-sm-3 col-form-label" style="text-align: center;">Payable</label>
                            <div class="col-sm-9">
                        
                        

                          <?php
                        $value= $gt_pay ['salary_payable'];
echo form_dropdown('salary_payable', $payable, $value, 'class="form-control"');
?>
                            </div>
                            </div>
                            <div class="form-group row">
                            
                            <div class="col-sm-12" style="text-align: center;">
                                 <input type="checkbox" name="absent_deduct" checked="checked" value="1">Deduct Salary if absent at opnen day

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
    