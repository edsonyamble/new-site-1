 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">
                 <?= form_open('loan/Loan/update_grnloan_form/'. $data->loan_id) ?>

                    <input name="loan_id" type="hidden" value="<?php echo $data->loan_id ?>">
                 
                       <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('emp_id') ?> *</label>
                            <div class="col-sm-9">
                                 <input name="employee_id" class="form-control" type="text" placeholder="<?php
                           
                                 echo display('employee_id') ?>"  id="employee_id" value="<?php echo $data->employee_id ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="permission_by" class="col-sm-3 col-form-label"><?php echo display('permission_by') ?> *</label>
                            <div class="col-sm-9">
                                <input name="permission_by" class="form-control" type="text" placeholder="<?php
                           
                                 echo display('permission_by') ?>"  id="permission_by"  value="<?php echo $data->employee_id ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="loan_details" class="col-sm-3 col-form-label"><?php echo display('loan_details') ?> *</label>
                            <div class="col-sm-9">
                                <textarea name="loan_details" class="form-control" placeholder="<?php 
                                 echo display('loan_details') ?>" id="loan_details"><?php echo $data->loan_details ?></textarea> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_approve" class=" col-sm-3 col-form-label"><?php echo display('date_of_approve') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="date_of_approve" class="datepicker form-control"  placeholder="<?php echo display('date_of_approve') ?>" id="date_of_approve"  value="<?php echo $data->date_of_approve ?>">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="repayment_start_date" class=" col-sm-3 col-form-label"><?php echo display('repayment_start_date') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="repayment_start_date" class="datepicker form-control"  placeholder="<?php echo display('repayment_start_date') ?>" value="<?php echo $data->repayment_start_date ?>"  id="repayment_start_date" >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="amount" class="col-sm-3 col-form-label"><?php echo display('amount') ?> *</label>
                            <div class="col-sm-9">
                                <input name="amount" class="form-control" type="text" placeholder="<?php echo display('amount') ?>" id="amount"  value="<?php echo $data->amount ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="interest_rate" class="col-sm-3 col-form-label"><?php echo display('interest_rate') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="interest_rate" class="form-control"  placeholder="<?php echo display('interest_rate') ?>" id="interest_rate"   value="<?php echo $data->interest_rate ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="installment_period" class="col-sm-3 col-form-label"><?php echo display('installment_period') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="installment_period" class="form-control"  placeholder="<?php echo display('installment_period_m') ?>" id="installment_period"  value="<?php echo $data->installment_period ?>">
                            </div>
                        </div>   
                         <div class="form-group row">
                            <label for="repayment_amount" class="col-sm-3 col-form-label"><?php echo display('repayment_amount') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="repayment_amount" class="form-control"  placeholder="<?php echo display('repayment_amount') ?>" id="repayment_amount"  value="<?php echo $data->repayment_amount ?>">
                            </div>
                        </div>

                        
                          <div class="form-group row">
                            <label for="installment" class="col-sm-3 col-form-label"><?php echo display('installment') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="installment" class="form-control"  placeholder="<?php echo display('installment') ?>" id="installment"  value="<?php echo $data->installment ?>" >
                            </div>
                        </div> 
                          
                        
                        <div class="form-group row">
                            <label for="loan_status" class="col-sm-3 col-form-label"><?php echo display('loan_status') ?> *</label>
                            <div class="col-sm-9">
                           <input type="text" name="loan_status" class="form-control"  id="loan_status"  value="<?php echo $data->loan_status ?>" >
                                
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
    <script language="javascript"> 

 $(function(){
        $("#repayment_start_date").datepicker({ dateFormat:'yy-mm-dd' });
        $("#date_of_approve").datepicker({ dateFormat:'yy-mm-dd' });
        // $("#date_of_approve").datepicker({ dateFormat:'yy-mm-dd' }).bind("change",function(){
        //     var minValue = $(this).val();
        //     minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
        //     minValue.setDate(minValue.getDate()+1);
        //     $("#date_of_approve").datepicker( "option", "minDate", minValue );
        // })
    });
$(document).ready(function(e) {
    function calculation(){
    var loan=Number($('#amount').val());
    var payl=Number($('#interest_rate').val());
    var inssdsd=Number($('#installment_period').val());
   // var ab=new Date($('#repayment_start_date').val());

   // var month=ab.getMonth();

   var date1 =new Date($('#repayment_start_date').val());
   

var date2 =new Date($('#date_of_approve').val());
var timeDiff = Math.abs(date2.getTime() - date1.getTime());
var diffDays = Math.ceil((timeDiff / (1000 * 3600 * 24))/30); 
//alert(diffDays);
//alert(diffDays);

         var totalp=Math.round(loan+((loan*payl/100)*(inssdsd+diffDays)/12)).toFixed(2);

         var ab=Math.round((totalp)/inssdsd.toFixed(2));
        
        $('#repayment_amount').val(totalp);
         $('#installment').val(ab);
        

        }
        $('#amount,#interest_rate,#repayment_amount,#installment,#installment_period,#repayment_start_date,date_of_approve').keyup(calculation)


});
 
    

</script>