 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">
                 <?= form_open('loan/Loan/update_install_form/'. $data->loan_inst_id) ?>


                    <input name="loan_inst_id" type="hidden" value="<?php echo $data->loan_inst_id ?>">
                 
                       <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_id') ?> *</label>

                            
                            <div class="col-sm-9">
                            <?php
                        $value= $query ['employee_id'];
echo form_dropdown('employee_id', $gndloan, $value, 'class="form-control"       onchange="SelectToLoad(this.value),SelectToname(this.value),SelectAuto(this.value)"');
?>
                             <!--   <select name="employee_id" id="employee_id" class="form-control" onchange="SelectToLoad(this.value),SelectToname(this.value),SelectAuto(this.value)">
                                    <option value="">--select id--</option>
                                <?php 
                                    foreach($gndloan as $values){
                                ?>
                                        <option value="<?php echo $values; ?>"><?php echo $values; ?></option>
                                <?php } ?>
                                </select> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="loan_id" class="col-sm-3 col-form-label"><?php echo display('loan_id') ?> *</label>
                            <div class="col-sm-9">
                                 <input name="loan_id" class="form-control" type="text" placeholder="<?php
                           
                                 echo display('loan_id') ?>"  id="loan_id" value="<?php echo $data->loan_id; ?>">


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="installment_amount" class="col-sm-3 col-form-label"><?php echo display('installment_amount') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="installment_amount" class="form-control" placeholder="<?php 
                                 echo display('installment_amount') ?>" id="installment_amount" value="<?php echo $data->installment_amount; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="payment" class="col-sm-3 col-form-label"><?php echo display('payment') ?> *</label>
                            <div class="col-sm-9">
                                <input name="payment" class="form-control" type="text" placeholder="<?php echo display('payment') ?>" id="payment" value="<?php echo $data->payment; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label"><?php echo display('date') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="date" class="datepicker form-control"  placeholder="<?php echo display('date') ?>" id="date" value="<?php echo $data->date; ?>" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="received_by" class="col-sm-3 col-form-label"><?php echo display('received_by') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="received_by" class="form-control"  placeholder="<?php echo display('received_by') ?>" id="received_by" value="<?php echo $data->received_by; ?>">
                            </div>
                        </div>   
                         <div class="form-group row">
                            <label for="installment_no" class="col-sm-3 col-form-label"><?php echo display('installment_no') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="installment_no" class="form-control"  placeholder="<?php echo display('installment_no') ?>" id="installment_no" value="<?php echo $data->installment_no; ?>" >
                            </div>
                        </div>

                        
                          <div class="form-group row">
                            <label for="notes" class="col-sm-3 col-form-label"><?php echo display('notes') ?> *</label>
                            <div class="col-sm-9">
                                <textarea  name="notes" class="form-control"  placeholder="<?php echo display('notes') ?>" id="notes" ><?php echo $data->notes; ?>"</textarea>
                            </div>
                        </div> 
                          
                        

                        
     
             
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('paid') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>


    <script type="text/javascript">

function SelectToLoad(id){

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('loan/Loan/select_to_load/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
              $('[name="loan_id"]').val(data.loan_id);
        
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
function SelectToname(id){

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('loan/Loan/select_to_install/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
              $('[name="installment_amount"]').val(data.installment);
        
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function SelectAuto(id){

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('loan/Loan/select_to_autoincrement/')?>" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
              $('[name="installment_no"]').val(data.installment_no);
        
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
</script>