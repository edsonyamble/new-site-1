<div class="form-group text-right">
<button type="button" class="btn btn-primary btn-md" data-target="#add1" data-toggle="modal"  >
Add Income
</button>
<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  >
Add Expense
</button> 

<a href="<?php echo base_url();?>/account/Account_controller/transView" class="btn btn-primary">Manage Transaction</a>
</div>

   <div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="example datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('sl') ?></th>
                           <th><?php echo display('account_name') ?></th>
                            <th><?php echo display('transaction_description') ?></th>
                            <th><?php echo display('amount') ?></th>
                           
                            <th><?php echo display('payment_id') ?></th>
                             
                             <th>Details</th>
                           
                         
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($acctrans)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($acctrans as $query) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $query->account_name; ?></td>
                                     <td><?php  $text=$query->transaction_description; 


              


$pieces = substr($text, 0, 20);
$ps = substr($text, 0, 16)."...";
//echo $ps ;

$cn=strlen($text);
//echo $cn;

if ($cn>20) {
  echo $ps;
}else
{
echo $text;
}


                                     ?>
                                     </td>
                                     <td><?php echo $query->amount; ?></td>
                                    
                                     <td><?php $id=$query->payment_id; 
if($id==0){
    echo " ";
  }else{
    echo $id;
  }
                                     ?></td>
                                      
                                        
                                           
                                           <td><a href="<?php echo base_url("account/Account_controller/view_details/$query->account_tran_id") ?>" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a></td>
                                   
                                   
                                    
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
                <center><strong>Add New Transaction</strong></center>
            </div>
            <div class="modal-body">
           

    
       
               <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
               
                <div class="panel-body">

                    <?= form_open('account/Account_controller/create_transaction') ?>
                        <div class="form-group row">
                            <div for="account_id" class="col-sm-4 col-form-div"><?php echo display('se_account_id') ?></div>
                            <div class="col-sm-8">
                        
                               <?php echo form_dropdown('account_id',$accountlist,null,'class="form-control"style="width:100%"') ?>
                               
                            </div>
                            
                        </div>
                         <div class="form-group row">
                            <div for="amount" class="col-sm-4 col-form-div"><?php echo display('amount') ?> *</div>
                            <div class="col-sm-8">
                               <input name="amount" class="form-control" type="text" placeholder="<?php echo display('amount') ?>" id="amount"> 
                               
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div for="transaction_description" class="col-sm-4 col-form-div"><?php echo display('transaction_description') ?> </div>
                            <div class="col-sm-8">
                                <textarea name="transaction_description" class="form-control" placeholder="<?php echo display('transaction_description') ?>" id="transaction_description"></textarea>
                                
                            </div>
                             
                        </div>
                        
                       
                        <div class="form-group row">
                            <div for="payment_id" class="col-sm-4 col-form-div"><?php echo display('payment_id') ?></div>
                            <div class="col-sm-8">
                               <input name="payment_id" class="form-control" type="text" placeholder="<?php echo display('payment_id') ?>" id="payment_id"> 
                               
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
    <div id="add1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green; color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong>Add New Transaction</strong></center>
            </div>
            <div class="modal-body">
           

    
       
               <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
               
                <div class="panel-body">

                    <?= form_open('account/Account_controller/create_transaction') ?>
                        <div class="form-group row">
                            <div for="account_id" class="col-sm-4 col-form-div"><?php echo display('se_account_id') ?></div>
                            <div class="col-sm-8">
                             <!--   <input name="account_id" class="form-control" type="text" placeholder="<?php echo display('account_id') ?>" id="account_id">  -->
                               <?php echo form_dropdown('account_id',$acc,null,'class="form-control"style="width:100%"') ?>
                               
                            </div>
                            
                        </div>
                         <div class="form-group row">
                            <div for="amount" class="col-sm-4 col-form-div"><?php echo display('amount') ?> *</div>
                            <div class="col-sm-8">
                               <input name="amount" class="form-control" type="text" placeholder="<?php echo display('amount') ?>" id="amount"> 
                               
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div for="transaction_description" class="col-sm-4 col-form-div"><?php echo display('transaction_description') ?> </div>
                            <div class="col-sm-8">
                                <textarea name="transaction_description" class="form-control" placeholder="<?php echo display('transaction_description') ?>" id="transaction_description"></textarea>
                                
                            </div>
                             
                        </div>
                        
                        
                       
                        <div class="form-group row">
                            <div for="payment_id" class="col-sm-4 col-form-div"><?php echo display('payment_id') ?></div>
                            <div class="col-sm-8">
                               <input name="payment_id" class="form-control" type="text" placeholder="<?php echo display('payment_id') ?>" id="payment_id"> 
                               
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
<div id="details_nc" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">            
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <strong>Account Details</strong>
                </div>
                <div class="modal-body">
                    <div id="details_up"></div>                    
                </div>
            </div>
          <div class="modal-footer">
                </div>
        </div>
    </div>
</div>
<script type="text/javascript">


  $(document).ready(function(){

 $('.example').delegate('button','click',function(event){
    var id=event.target.id;
    $.ajax({
        var base_url=<?php echo base_url() ;?>
        url:base_url+'account/Account_controller/account_datails',
        method: 'post',
        data:{id:id},
        success:function(data){
            $('#view_detail').html(data);
        }

    })

    })
}
 
</script> 
