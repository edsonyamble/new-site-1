<div class="form-group text-right">
<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  >
Add Account
</button> 
<a href="<?php echo base_url();?>/account/Account_controller/accountView" class="btn btn-primary">Manage Account</a>
</div>
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

  <div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green; color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong>Add New Account Name</strong></center>
            </div>
            <div class="modal-body">
           

    
       
                 <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                
                <div class="panel-body">

                    <?= form_open('account/Account_controller/create_account') ?>
                        <div class="form-group row">
                            <div for="account_name" class="col-sm-4 col-form-div"><?php echo display('account_name') ?> *</div>
                            <div class="col-sm-8">
                               <input name="account_name" class="form-control" type="text" placeholder="<?php echo display('account_name') ?>" id="account_name"> 
                               
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div for="account_type" class="col-sm-4 col-form-div">Select Account Type</div>
                            <div class="col-sm-8">
                               <!--  <input name="account_type" class="form-control" type="text" placeholder="<?php echo display('account_type') ?>" id="account_type">-->
                                <select name="account_type" class="form-control" style="width: 100%"> 
                                 <option>Select Account Type</option>
                                 <option value="1">Income</option>   
                                <option value="0">Expense</option> 
                                </select>
                                
                            </div>
                             
                        </div>

                        
                       
                       

                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('ad') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>

  
             
    
   
    </div>
     
            </div>
            <div class="modal-footer">

            </div>

        </div>

    </div>