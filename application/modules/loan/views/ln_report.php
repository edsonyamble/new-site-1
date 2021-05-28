<div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('loan/Loan/lnreport_view') ?>
                        
                    
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-2 col-form-label"><?php echo display('e_r_id') ?> *</label>
                            <div class="col-sm-8">
                                <input name="employee_id" class="form-control" type="text" placeholder="<?php echo display('e_r_id') ?>" id="employee_id">
                            </div>
                            <div class="form-group text-right">
                            
                            <button type="submit" class="btn btn-primary col-sm-2"><i class="fa fa-search-plus" aria-hidden="true"></i>
Filter</button>
                        </div>
                        </div>

                        
                        

                        
     
             
                        
                    <?php echo form_close() ?>

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
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('name') ?></th>
                            <th><?php echo display('employee_id') ?></th>
                         
                            <th><?php echo display('amount') ?></th>
                            <th><?php echo display('interest_rate') ?></th>
                            <th><?php echo display('installment_period') ?></th>
                            <th><?php echo display('repayment_amount') ?></th>
                            <th><?php echo display('date_of_approve') ?></th>
                            <th><?php echo display('repayment_start_date') ?></th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($loan)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($loan as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                    <td><?php echo $que->employee_id; ?></td>
                                   
                                    <td><?php echo $que->amount; ?></td>
                                    <td><?php echo $que->interest_rate; ?></td>
                                    <td><?php echo $que->installment_period; ?></td>
                                    <td><?php echo $que->repayment_amount; ?></td>
                                    <td><?php echo $que->date_of_approve; ?></td>
                                    <td><?php echo $que->repayment_start_date; ?></td>

                                   
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
 
 