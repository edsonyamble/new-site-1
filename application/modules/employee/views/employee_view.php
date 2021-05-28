<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('cid') ?></th>
                            <th>Name</th>
                            <th>Phone</th>
                           <th>Email</th>
                           <th>Address</th>
                           
                           <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_history)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_history as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                <td><?php   echo $row->first_name." " .$row->last_name; ?></td>
                                <td><?php echo $row->phone; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->present_address; ?></td>
                                                        
                                    <td class="center">
                                      <a href="<?php echo base_url("employee/Employees/update_employee_form/$row->employee_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <a href="<?php echo base_url("employee/Employees/delete_employhistory/$row->employee_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
                                        <a href="<?php echo base_url("employee/Employees/cv/$row->employee_id");?>" class="btn btn-default"><i class="fa fa-user"></i></a>
                                       
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