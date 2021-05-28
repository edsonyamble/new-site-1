
<?php
   
    foreach ($detls as $row){
        
     
        }?>

   
<div class="row">
    <div class="col-sm-12 col-md-12">
  

                                <div class="card-content">
                                    <div class="card-content-member" style="background-color:green; color: white">
                                        <h4 class="m-t-0" style="font-family:Stencil Std, fantasy"> Your Account Details</h4>
                                        
                                        
                                    </div>
                                    <div class="card-content-languages">
                                       
                                        


                                             <table class="table table-hover" width="100%">
                                             <tr>
                                                 <th>Account Name</th>
                                                 <td> <?php echo $row->account_name;?></td>
                                             </tr>



   
    <tr>
        
    <th>Amount</th>
        <td><?php echo $row->amount ;?></td>
      
        </tr>
        
        
        <th>Payment Id</th>
        <td><?php echo $row->payment_id ;?></td>
    </tr>
      <tr>
        <th>Description</th>
        <td><?php echo $row->transaction_description;?></td>
    </tr>
    
</table>

                                        </div>
                                    </div>
                                    

        
    </div>



                              </div>
