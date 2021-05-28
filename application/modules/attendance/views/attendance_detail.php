 <?php
  print_r($query1);
    foreach ($query1 as $row){
        print_r($row);
        }?>

   

<table class="table table-striped" width="100%">

    <tr>
        <th>Employee</th>
        <td><?php echo $row->employee_id ;?></td>
    </tr>
    <tr>
        <th>Date</th>
        <td><?php echo $row->date ;?></td>
    <th>Intime</th>
        <td><?php echo $row->sign_in ;?></td></tr>
    
    
</table>
