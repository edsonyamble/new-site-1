<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                                    <th><?php echo display('Sl') ?></th>
                                    <th>Employee Name</th>
                                    <th><?php echo display('employee_id') ?></th>
                                    <th><?php echo display('total_salary') ?></th>
                                    <th><?php echo display('total_working_minutes') ?></th>
                                    <th><?php echo display('working_period') ?></th>
                                    <th><?php echo display('payment_due') ?></th>
                                    <th><?php echo display('payment_date') ?></th>
                                    <th><?php echo display('paid_by') ?></th>
                                    <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_pay)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_pay as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                        <td><?php echo $sl; ?></td>
                                        <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                        <td><?php echo $que->employee_id; ?></td>
                                        <td><?php echo $que->total_salary; ?></td>
                                        <td><?php echo $que->total_working_minutes; ?></td>
                                        <td><?php echo $que->working_period; ?></td>
                                        <td><?php echo $que->payment_due; ?></td>
                                        <td><?php echo $que->payment_date; ?></td>
                                        <td><?php echo $que->paid_by; ?></td>
                                        <td class="center">
                                        <?php if($this->permission->method('employee','update')->access()): ?> 
                                  <?php
                                        if($que->payment_due==''){
                                    $id=$que->emp_sal_pay_id;
                                    echo  "<a href='update_payment_form/$id' class='btn btn-success'>Pay Now</a>";
                                    } 
                                    else {
                                        echo  "<button type='btn' class='btn btn-default'>
Paid</button>";
                                    }

                                        
                                      ?> 
                                         <?php endif; ?>
                                    
                                    <?php if($this->permission->method('employee','delete')->access()): ?> 
                                        <a href="<?php echo base_url("employee/Employees/delete_payment/$que->emp_sal_pay_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a>
                                        <?php endif; ?> 
                                    </td>
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
 
 