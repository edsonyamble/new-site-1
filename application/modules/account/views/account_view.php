<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('sl') ?></th>
                           <th><?php echo display('account_name') ?></th>
                            <th><?php echo display('account_type') ?></th>
                           
                            <th><?php echo display('action') ?></th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($acview)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($acview as $query) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $query->account_name; ?></td>
                                     <td><?php $status=$query->account_type; 


       if($status==0){
        echo "Expense";
       }else{
        echo "Income";
       }


                                     ?></td>
                                      
                                        
                                           
                                   
                                   
                                    <td class="center">
                                        <a href="<?php echo base_url("account/Account_controller/account_update/$query->account_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <a href="<?php echo base_url("account/Account_controller/account_delete/$query->account_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times" aria-hidden="true"></i>
</a> 
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
 
 