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
                            <th><?php echo display('transaction_description') ?></th>
                            <th><?php echo display('amount') ?></th>
                           
                            <th><?php echo display('payment_id') ?></th>
                             <th><?php echo display('create_by_id') ?></th>
                           
                            <th><?php echo display('action') ?></th> 
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


                                     ?></td>
                                    <td><?php echo $query->amount; ?></td>
                                    
                                    
                                     <td><?php $id=$query->payment_id; 
if($id==0){
    echo " ";
  }else{
    echo $id;
  }
                                     ?></td>
                                      
                                        
                                           <td><?php echo $query->create_by_id; ?></td>
                                   
                                   
                                    <td class="center">
                                        <a href="<?php echo base_url("account/Account_controller/transaction_update/$query->account_tran_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <a href="<?php echo base_url("account/Account_controller/transaction_delete/$query->account_tran_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times" aria-hidden="true"></i>
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
 
 