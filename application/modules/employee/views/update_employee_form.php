
 
  <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">
                 <?= form_open_multipart('employee/Employees/update_employee_form/'. $data->employee_id) ?>

            
                   <center>
                     <?php echo "<img src='" . base_url().$data->picture."' width=150px; height=100px; class=img-thumbnail>";?>
                   </center>
                      <input type="hidden" name="employee_id" value="<?php echo $data->employee_id ; ?>">
                            <input type="hidden" name="picture" value="<?php echo $data->picture ?>">
                       
                               
                            <div class="row">
                        <div class="col-sm-6">
                            <h3 class="m-t-0"><center>Basic Information</center></h3><hr class="m-t-0">
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name <sup class="color-red ">*</sup></label>
                                        <input type="text" class="form-control" id="first_name"
                                        name="first_name"  placeholder="Your First Name" value="<?php echo $data->first_name ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name">Last Name <sup class="color-red ">*</sup></label>
                                        <input type="text" class="form-control" id="last_name"
                                        name="last_name" placeholder="Your Last Name" value="<?php echo $data->last_name ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email <sup class="color-red "></sup></label>
                                        <input type="email" class="form-control"
                                        name="email" id="email" placeholder="Your Email" value="<?php echo $data->email ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone <sup class="color-red ">*</sup></label>
                                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" value="<?php echo $data->phone ; ?>">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Alter Phone <sup class="color-red "></sup></label>
                                        <input type="number" class="form-control" name="alter_phone" id="phone" placeholder="Your Phone Number" value="<?php echo $data->alter_phone ; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Position <sup class="color-red ">*</sup></label>
                                         
<?php
                        $value= $bb['pos_id'];
echo form_dropdown('pos_id', $dropdown, $value, 'class="form-control" selected="selected" style="width:210px"');
?>

                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dept_id">Department <sup class="color-red "></sup></label>
                                        
                                        <?php
$value= $bb['dept_id'];
echo form_dropdown('dept_id', $dropdowndept, $value, 'class="form-control" selected="selected" style="width:210px"');
?> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="pre_address">Present Address</label>
                                <textarea class="form-control" id="present_address" name="present_address" rows="3"> <?php echo $data->present_address ; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="par_address">Parmanent Address</label>
                                <textarea class="form-control" id="parmanent_address" name="parmanent_address" rows="3"> <?php echo $data->parmanent_address ; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="picture">Picture</label>
                               <input type="file"  name="picture" >
                                
</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h3 class="m-t-0"><center>Educational Information</center></h3><hr class="m-t-0">
                            


                             <div class="row">
                             <?php if ($edu == FALSE): ?>

                        <tr><td colspan="4">There are currently No Data</td></tr>
                    <?php else: ?>
                        
                        <?php foreach ($edu as $upedu): ?>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="deg_name">Degree Name</label>
                                        <input type="text" class="form-control"  name="degree_name[]" id="degree_name" placeholder="Your Degree Name" value="<?php echo $upedu->degree_name ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="al_phone">University</label>
                                        <input type="text" class="form-control" name="university_name[]" id="university" placeholder="University" value="<?php echo $upedu->university_name ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cgp">Result</label>
                                        <input type="text" class="form-control"  name="cgp[]" id="cgp" placeholder="Your Degree Name" value="<?php echo $upedu->cgp ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="al_phone">Passing Year</label>
                                        <input type="text" class="form-control" name="passing_year[]" id="passing_year" placeholder="Passing Year" value="<?php echo $upedu->passing_year ; ?>">
                                    </div>
                                </div>
                                            
              <?php endforeach; ?>
                    <?php endif; ?>
                               

                  
                   
                  </div>
                            

                            <h3>Working Experience</h3><hr class="m-t-0">
                            <div class='row'>
                             <?php 
foreach ($work as $wok) {?>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_name">Company Name</label>
                                        <input type="text" class="form-control" id="c_name" name="company_name[]" placeholder="Company Name" value="<?php echo $wok->company_name ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="work_hour">Working period </label>
                                        <input type="text" class="form-control" 
                                        name="working_period[]" id="work_hour" placeholder="Working period" value="<?php echo $wok->working_period ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="duty">Duty</label>
                                        <input type="text" name="duties[]" class="form-control" id="duty" placeholder="Duty" value="<?php echo $wok->duties ; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="supervisor">Supervisor</label>
                                        <input type="text" name="supervisor[]" class="form-control" id="supervisor" placeholder="Supervisor" value="<?php echo $wok->supervisor ; ?>">
                                    </div>
                                </div>
                                 <?php      
                  }?>
                             

                            </div>
                           </div>
                            <div class="form-group">
                                <label for="signature">Signature</label>
                                <input type="file" id="signature" aria-describedby="fileHelp" name="signature">
                                
                            </div>
                        </div>
                    </div>

                        <input type="hidden" name="signature" value="<?php echo $data->signature ?>">
       
             
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>



<script type="text/javascript">


$(document).ready(function() {
 
// choose text for the show/hide link - can contain HTML (e.g. an image)
var showText='Add more Info';
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


