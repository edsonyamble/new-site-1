<style type="text/css">
    img{
        height: 150px;
        width: 150px;

    }
</style>
<?php
    $total=0;
//print_r(query);
 //print_r($query);

    foreach ($ab as $ca){}?>
   
  

<table  class="table table-striped" width="100%">

 <div class="form-group text-center" style="color:#3D9970; font-size: 50px; font-weight: bold; font-family: Stencil Std, fantasy; font-variant: small-caps">
       
       Loan Report
      
        
    </div>
    <div class="row">
  <span class="form-group text-center col-sm-5">
            <?php

    

        echo img($ca->picture );?>
        </span>
        <div  class="col-sm-7">
    <div class="form-group text-left" style="color:black; font-size: 20px; font-weight: bold; font-family:cursive">
       
        Name:<?php

    

        echo $ca->first_name." ".$ca->last_name ;?>
       
        
    </div>
   
    <div class="form-group text-left" style="color:black; font-size: 20px; font-weight: bold; font-family:'Comic Sans MS', 'cursive'">
       
      ID NO: <?php
    
echo $ca->employee_id ;
         
         
        ?>
    </div>
<div class="form-group text-left" style="color:black; font-size: 20px; font-weight: bold; font-family:'Comic Sans MS', 'cursive'">
       
      Designation: <?php
    

         echo $ca->pos_id ;
         
        ?>
        </div>
    </div>
    </div>
    
    </table>
    <table class="table table-striped" width="100%">
    <tr>
        <th>Sl</th>
        <th>Loan Issue id</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Paid</th>
        <th>Repayment</th>
        <th>Install</th>
    </tr>
    <?php
    $x=1;
    foreach($ab as $qr){?>
    <tr>
          <td><?php echo $x++;?></td>
           <td><a href="<?php echo base_url("loan/Loan/details_view/$qr->loan_id");?>" ><?php echo $qr->loan_id?>View<i class="fa fa-eye"></i></a></td>
          <td><?php echo $qr->date_of_approve?></td>
          <td><?php echo $qr->amount?>$</td>
          <td><?php echo $qr->payment ?>$</td>
          <td><?php echo $qr->repayment_amount ?>$</td>
          <td><?php echo $qr->installment ?>$</td>
    </tr>
    <?php }?>
    
</table>
<script type="text/javascript">
$(document).ready(function() {
    
// Support for AJAX loaded modal window.
// Focuses on first input textbox after it loads the window.
$('[data-toggle="modal"]').click(function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    if (url.indexOf('#') == 0) {
        $(url).modal('open');
    } else {
        $.get(url, function(data) {
            $('<div class="modal hide fade">' + data + '</div>').modal();
        }).success(function() { $('input:text:visible:first').focus(); });
    }
});
    
});
</script>