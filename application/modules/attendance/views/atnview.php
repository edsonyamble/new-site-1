
<div class="form-group text-right">

<button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"  >
<i class="fa fa-clock-o" aria-hidden="true"></i> Single ClockIn</button> 
<button type="button" class="btn btn-primary btn-md" data-target="#add1" data-toggle="modal"  >
<i class="fa fa-clock-o" aria-hidden="true"></i> Bulk Attendance</button> 
<a href="<?php echo base_url();?>/attendance/Home/manageatn" class="btn btn-primary">Manage Atttendance</a>
</div>
 







<div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green;color:white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong> Attendance</strong>
            </div>
            <div class="modal-body">
           
<div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel ">
                <div class="panel-heading" >
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                    <?= form_open('attendance/Home/create_atten') ?>
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label">Select Employee *</label>
                            <div class="col-sm-9">
                            <?php echo form_dropdown('employee_id',$dropdownatn,null,'class="form-control" id="employee_id" style="width:300px"') ?>
                               
                            </div>
                        </div>          
                        <div class="form-group text-center">
                           <button type="submit" class="btn btn-danger w-md m-b-5" data-dismiss="modal">&times; Cancel</button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('sign_in') ?></button>
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
           
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
               
  <table width="100%" class="datatable table table-striped table-bordered table-hover example">
                <caption>Attendance List</caption>
                <thead>
                    <tr>
                      <th><?php echo display('Sl') ?></th>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Date</th>
                        <th>SignIn</th>
                        <th>SignOut</th>
                        <th>Stay</th>
                         <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($addressbook == FALSE): ?>

                        <tr><td colspan="4">There are currently No Addresses</td></tr>
                    <?php else: ?>
                         <?php $sl = 1; ?> 
                        <?php foreach ($addressbook as $row): ?>
                            <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                            <td><?php echo $sl; ?></td>
                                <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                                <td><?php echo $row['employee_id']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['sign_in']; ?></td>
                                <td><?php echo $row['sign_out']; ?></td>
                                <td><?php echo $row['staytime']; ?></td>
                                <td> 
                                <?php if($row['staytime']==''){
                                    $id=$row["att_id"];
                                    echo  "<a href='update_atn_form/$id' class='btn btn-success'><i class='fa fa-clock-o' aria-hidden='true'></i> Clockout</a>";
                                    } 
                                    else {
                                        echo '';
                                    }

                                        ?> 

                                </td>
                               
                            </tr>
                              <?php $sl++; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>


                <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>
             
    
   
  



<div id="add1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green;color:white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong>Add Attendance</strong>
            </div>
            <div class="modal-body">
           <div class="container" style="margin-top:50px">    
             <br>
             
             <?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success') == TRUE): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>
             
            <h2>Import Attendance <span style="color:green"><img src="<?php echo base_url('assets/img/user/fingur.png') ?>" height="100px" width="100px"></span>Upload only CSV file</h2>
                <form method="post" action="<?php echo site_url() ?>attendance/Home/importcsv" enctype="multipart/form-data">
                    <input type="file" name="userfile" ><br><br>
                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
                </form>
           
        
            
        </div>     

    </div>

</div>
</div>
</div>
<!-- Start Modal -->

<script type="text/javascript">


$(document).ready(function() {
 
// choose text for the show/hide link - can contain HTML (e.g. an image)
var showText='ADD More';
var hideText='Hide';
 
// initialise the visibility check
var is_visible = false;
 
// append show/hide links to the element directly preceding the element with a class of "toggle"
$('.toggle').prev().append(' (<a href="#" class="toggleLink">'+showText+'</a>)');
 
// hide all of the elements with a class of 'toggle'
$('.toggle').hide();
 
// capture clicks on the toggle links
$('a.toggleLink').click(function() {
 
// switch visibility
is_visible = !is_visible;
 
// change the link depending on whether the element is shown or hidden
$(this).html( (!is_visible) ? showText : hideText);
 
// toggle the display - uncomment the next line for a basic "accordion" style
//$('.toggle').hide();$('a.toggleLink').html(showText);
$(this).parent().next('.toggle').toggle('slow');
 
// return false so any link destination is not followed
return false;
 
});
});
</script>
