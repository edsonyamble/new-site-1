<style type="text/css">
  @media (min-width: 768px) {
  .modal-xl {
    width: 100%;
   max-width:1200px;
  }
  

@media (min-width: 768px) {
    .employee-form .modal-dialog {
    	width: 700px;
    }
}
@media (min-width: 992px) {
    .employee-form .modal-lg {
        width: 900px;
    }
}
@media (min-width: 1200px) {
    .employee-form .modal-lg {
        width: 1000px;
    }
}
.add-more{
  display:block;
  font-weight:600;
  margin-bottom:15px;
}
  .edu{
    border-left:3px solid #ff7f50;
    padding: 5px;

  
  }
  .ccd{
    
 height:2em;
 width: 100%;
 
color: black;
 text-align: center;
  text-transform: uppercase;
  font-weight: bold;

  }
}
</style>
<div class="form-group text-right">


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-plus-circle" aria-hidden="true"></i>
Add Employee</button>
<a href="<?php echo base_url();?>/employee/Employees/manageemployee" class="btn btn-primary">Manage Employee</a>

</div>


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
                              <th>Employee ID</th>
                              <th>Image</th>
                               <th>Email</th>
                            <th>Phone</th>
                          
                           <th>Address</th>
                           <th>Profile</th>
                           
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($emp_history)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($emp_history as $row) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td> 
                                    
                                      
                                <td><?php   echo $row->first_name." " .$row->last_name; ?></td>
                                <td><?php echo $row->employee_id; ?></td>
                                 <td><?php echo "<img src='" . base_url().$row->picture."' width=60px; height=60px; class=img-circle>";?></td>
                               <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->phone; ?></td>
                              
                                <td><?php echo $row->present_address; ?></td>
                                                            
                                   <td> <a href="<?php echo base_url("employee/Employees/cv/$row->employee_id");?>" class="btn btn-default"><i class="fa fa-user"></i></a></td>
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
 
 
 <div class="employee-form">
    <!-- Modal large -->
    <div class="modal fade" id="modal-lg" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: green;color:white">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Employee Form</h3>
                </div>
                <div class="modal-body">
                  <?= form_open_multipart('employee/Employees/create_employee') ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="m-t-0">Basic Information</h3><hr class="m-t-0">
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name <sup class="color-red ">*</sup></label>
                                        <input type="text" class="form-control" id="first_name"
                                        name="first_name"  placeholder="Your First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name">Last Name <sup class="color-red ">*</sup></label>
                                        <input type="text" class="form-control" id="last_name"
                                        name="last_name" placeholder="Your Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email <sup class="color-red "></sup></label>
                                        <input type="email" class="form-control"
                                        name="email" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone <sup class="color-red ">*</sup></label>
                                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Your Phone Number">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Alter Phone <sup class="color-red "></sup></label>
                                        <input type="number" class="form-control" name="alter_phone" id="phone" placeholder="Your Phone Number">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Position <sup class="color-red ">*</sup></label>
                                         <?php
echo form_dropdown('pos_id',$dropdown, null, 'class="form-control" selected="selected" style="width:220px"');
?> 
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="l_name">Employee ID <sup class="color-red ">*</sup></label>
                                        <input type="text" class="form-control" id="employee_id"
                                        name="employee_id" placeholder="Your Empoyee Id">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dept_id">Department <sup class="color-red "></sup></label>
                                        
                                        <?php
echo form_dropdown('dept_id',$dropdowndept, null, 'class="form-control" selected="selected" style="width:220px"');
?> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="pre_address">Present Address</label>
                                <textarea class="form-control" id="present_address" name="present_address" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="par_address">Parmanent Address</label>
                                <textarea class="form-control" id="parmanent_address" name="parmanent_address" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="picture">Picture</label>
                               <input type="file" accept="image/*" name="picture" onchange="loadFile(event)">
                                <small id="fileHelp" class="text-muted"><img src="<?php echo base_url();?>assets/img/user/employee.png" id="output" style="height: 150px;width: 200px" class="img-thumbnail"/>
</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h3 class="m-t-0">Educational Information</h3><hr class="m-t-0">
                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="deg_name">Degree Name</label>
                                        <input type="text" class="form-control"  name="degree_name[]" id="degree_name" placeholder="Your Degree Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="al_phone">University</label>
                                        <input type="text" class="form-control" name="university_name[]" id="university" placeholder="University">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cgp">Result</label>
                                        <input type="text" class="form-control"  name="cgp[]" id="cgp" placeholder="Your Degree Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="al_phone">Passing Year</label>
                                        <input type="text" class="form-control" name="passing_year[]" id="passing_year" placeholder="Passing Year">
                                    </div>
                                </div>
                                
                                <div id="add" class="toggle">
                       <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="deg_name">Degree Name</label>
                                        <input type="text" class="form-control"  name="degree_name[]" id="degree_name" placeholder="Your Degree Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="al_phone">University</label>
                                        <input type="text" class="form-control" name="university_name[]" id="university" placeholder="University">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cgp">Result</label>
                                        <input type="text" class="form-control"  name="cgp[]" id="cgp" placeholder="Your Degree Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="al_phone">Passing Year</label>
                                        <input type="text" class="form-control" name="passing_year[]" id="passing_year" placeholder="Passing Year">
                                    </div>
                                </div>

                  <div id="add" class="toggle">
                         <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="deg_name">Degree Name</label>
                                        <input type="text" class="form-control"  name="degree_name[]" id="degree_name" placeholder="Your Degree Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="al_phone">University</label>
                                        <input type="text" class="form-control" name="university_name[]" id="university" placeholder="University">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cgp">Result</label>
                                        <input type="text" class="form-control"  name="cgp[]" id="cgp" placeholder="Your Degree Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="al_phone">Passing Year</label>
                                        <input type="text" class="form-control" name="passing_year[]" id="passing_year" placeholder="Passing Year">
                                    </div>
                                </div>
                  
                         <div id="add" class="toggle">
                        <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="deg_name">Degree Name</label>
                                        <input type="text" class="form-control"  name="degree_name[]" id="degree_name" placeholder="Your Degree Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="al_phone">University</label>
                                        <input type="text" class="form-control" name="university_name[]" id="university" placeholder="University">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cgp">Result</label>
                                        <input type="text" class="form-control"  name="cgp[]" id="cgp" placeholder="Your Degree Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="al_phone">Passing Year</label>
                                        <input type="text" class="form-control" name="passing_year[]" id="passing_year" placeholder="Passing Year">
                                    </div>
                                </div>
                  

                  </div>
                  </div>
                   
                  </div>
                            </div>
                            <h3>Working Experience</h3><hr class="m-t-0">
                            <div class='row'>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_name">Company Name</label>
                                        <input type="text" class="form-control" id="c_name" name="company_name[]" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="work_hour">Working period </label>
                                        <input type="text" class="form-control" 
                                        name="working_period[]" id="work_hour" placeholder="Working period">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="duty">Duty</label>
                                        <input type="text" name="duties[]" class="form-control" id="duty" placeholder="Duty">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="supervisor">Supervisor</label>
                                        <input type="text" name="supervisor[]" class="form-control" id="supervisor" placeholder="Supervisor">
                                    </div>
                                </div>
                                <div id="add" class="toggle add-more">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_name">Company Name</label>
                                        <input type="text" class="form-control" id="c_name" name="company_name[]" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="work_hour">Working period </label>
                                        <input type="text" class="form-control" 
                                        name="working_period[]" id="work_hour" placeholder="Working period">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="duty">Duty</label>
                                        <input type="text" name="duties[]" class="form-control" id="duty" placeholder="Duty">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="supervisor">Supervisor</label>
                                        <input type="text" name="supervisor[]" class="form-control" id="supervisor" placeholder="Supervisor">
                                    </div>
                                </div>
                                 <div id="add" class="toggle">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="c_name">Company Name</label>
                                        <input type="text" class="form-control" id="c_name" name="company_name[]" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="work_hour">Working period </label>
                                        <input type="text" class="form-control" 
                                        name="working_period[]" id="work_hour" placeholder="Working period">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="duty">Duty</label>
                                        <input type="text" name="duties[]" class="form-control" id="duty" placeholder="Duty">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="supervisor">Supervisor</label>
                                        <input type="text" name="supervisor[]" class="form-control" id="supervisor" placeholder="Supervisor">
                                    </div>
                                </div>
                                    
                                </div>
                                </div>

                            </div>
                           
                            <div class="form-group">
                                <label for="signature">Signature</label>
                                <input type="file" id="signature" aria-describedby="fileHelp" name="signature">
                                <small id="fileHelp" class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                        </div>
                    </div>
            </div><!-- /.modal-body -->
            <div class="modal-footer">
                 <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5" ><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5" id="sbmt" data-toggle="modal" data-target="#myModal"><?php echo display('ad') ?></button>
                        </div>
                    <?php echo form_close() ?>
            </div><!-- /.modal-footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>



<script type="text/javascript">


$(document).ready(function() {
 
// choose text for the show/hide link - can contain HTML (e.g. an image)
var showText='<i class="fa fa-plus m-r-5" aria-hidden="true"></i>Add More';
var hideText='<i class="fa fa-minus m-r-5" aria-hidden="true"></i>Hide';
 
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