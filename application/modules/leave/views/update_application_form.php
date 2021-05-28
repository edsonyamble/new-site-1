 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open_multipart('leave/Leave/update_application_form/'. $data->leave_appl_id) ?>
                

                    <input name="leave_appl_id" type="hidden" value="<?php echo $data->leave_appl_id ?>">
                 
                          <div class="form-group row">
                            <label for="employee_id" class="col-sm-2 col-form-label"><?php echo display('employee_id') ?></label>
                            <div class="col-sm-4">
                          
                           
                                <?php
                        $value= $bb['employee_id'];
echo form_dropdown('employee_id', $dropdown, $value, 'class="form-control"');
?>
                            </div>
                            <label for="apply_date" class="col-sm-2 col-form-label">apply_date
                            <?php echo display('apply_date') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="apply_date" class="datepicker form-control" value="<?php echo $data->apply_date ?>" id="a">
                               
                            </div>
                           
                        </div>
                          <div class="form-group row">
                            <label for="apply_strt_date" class="col-sm-2 col-form-label">
                            <?php echo display('apply_strt_date') ?> </label>
                            <div class="col-sm-4">
                           <input type="text" name="apply_strt_date" class="datepicker form-control" value="<?php echo $data->apply_strt_date ?>" id="e">
                               
                            </div>
                            <label for="last_name" class="col-sm-2 col-form-label">
                            <?php echo display('apply_end_date') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="apply_end_date" class="datepicker form-control" value="<?php echo $data->apply_end_date ?>" id="b">
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="leave_aprv_strt_date" class="col-sm-2 col-form-label">
                            <?php echo display('leave_aprv_strt_date') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="leave_aprv_strt_date" class="datepicker form-control" value="<?php echo $data->leave_aprv_strt_date ?>" id="c">
                               
                            </div>
                            <label for="leave_aprv_end_date" class="col-sm-2 col-form-label">
                            <?php echo display('leave_aprv_end_date') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="leave_aprv_end_date" class="datepicker form-control" value="<?php echo $data->leave_aprv_end_date ?>" id="d">
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="num_aprv_day" class="col-sm-2 col-form-label">
                            <?php echo display('num_aprv_day') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="num_aprv_day" class="form-control" value="<?php echo $data->num_aprv_day ?>" >
                               
                            </div>
                            <label for="reason" class="col-sm-2 col-form-label"><?php echo display('reason') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="reason" class="form-control" value="<?php echo $data->reason ?>">
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apply_hard_copy" class="col-sm-2 col-form-label">
                            <?php echo display('apply_hard_copy') ?></label>
                            <div class="col-sm-4">
                           <input type="file" name="apply_hard_copy" class="form-control">
                               
                            </div>
                            <label for="approve_date" class="col-sm-2 col-form-label">
                            <?php echo display('approve_date') ?></label>
                            <div class="col-sm-4">
                             <input type="text" name="approve_date" class="form-control"  id="f"  value="<?php echo $data->approve_date ?>">
                               
                            </div>
                        </div>

                      <input type="hidden" name="apply_hard_copy">
                       <div class="form-group row">
                            <label for="approved_by" class="col-sm-2 col-form-label">
                            <?php echo display('approved_by') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="approved_by" class="form-control"  value="<?php echo $data->approved_by ?>">
                               
                            </div>
                            <label for="leave_type" class="col-sm-2 col-form-label">
                            <?php echo display('leave_type') ?></label>
                            <div class="col-sm-4">
                           <input type="text" name="leave_type" class="form-control"  value="<?php echo $data->leave_type ?>">
                               
                            </div>
                        </div>
                        


                        <div class="form-group text-right">
                            
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
                        </div>

                    <?php echo form_close() ?>


                </div>  
            </div>
        </div>
    </div>
     <script language="javascript"> 

 $(function(){
        $("#f").datepicker({ dateFormat:'yy-mm-dd' });
        $("#e").datepicker({ dateFormat:'yy-mm-dd' });
        $("#a").datepicker({ dateFormat:'yy-mm-dd' });
        $("#c").datepicker({ dateFormat:'yy-mm-dd' });
        $("#d").datepicker({ dateFormat:'yy-mm-dd' });
        $("#b").datepicker({ dateFormat:'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate());
            $("#b").datepicker( "option", "minDate", minValue );
        })
    });
    </script>