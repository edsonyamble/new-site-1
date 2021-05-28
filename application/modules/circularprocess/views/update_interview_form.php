 
  
    
  
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">

                <?= form_open_multipart('circularprocess/Candidate_select/interview_update_form/'. $data->can_int_id) ?>
                

                    <input name="can_int_id" type="hidden" value="<?php echo $data->can_int_id ?>">
                 
                        <div class="form-group row">
                            <label for="can_id" class="col-sm-3 col-form-label"><?php echo display('can_id') ?> *</label>
                            <div class="col-sm-9">
                                <input name="can_id" class="form-control" type="text" value="<?php echo $data->can_id ; ?>" id="can_id">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="job_adv_id" class="col-sm-3 col-form-label"><?php echo display('job_adv_id') ?> </label>
                            <div class="col-sm-9">
                                <input type="text" name="job_adv_id" class="form-control" id="job_adv_id" value="<?php echo $data->job_adv_id?>">
                            </div>
                        </div> 

                
                       <div class="form-group row">
                            <label for="interview_date" class="col-sm-3 col-form-label"><?php echo display('interview_date') ?> </label>
                            <div class="col-sm-9">
                                <input type="text" name="interview_date" class="datepicker form-control" id="interview_date" value="<?php echo $data->interview_date?>">
                            </div>
                        </div> 

                    <div class="form-group row">
                            <label for="interviewer_id" class="col-sm-3 col-form-label"><?php echo display('interviewer_id') ?> </label>
                            <div class="col-sm-9">
                                <input name="interviewer_id" class="form-control" type="text" value="<?php echo $data->interviewer_id ; ?>" id="interviewer_id">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="interview_marks" class="col-sm-3 col-form-label"><?php echo display('interview_marks') ?> </label>
                            <div class="col-sm-9">
                                <input type="text" name="interview_marks" class="form-control" id="interview_marks" value="<?php echo $data->interview_marks?>">
                            </div>
                        </div> 

                       <div class="form-group row">
                            <label for="written_total_marks" class="col-sm-3 col-form-label"><?php echo display('written_total_marks') ?> </label>
                            <div class="col-sm-9">
                                <input type="text" name="written_total_marks" class="form-control" id="written_total_marks" value="<?php echo $data->written_total_marks?>">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="mcq_total_marks" class="col-sm-3 col-form-label"><?php echo display('mcq_total_marks') ?> </label>
                            <div class="col-sm-9">
                                <input name="mcq_total_marks" class="form-control" type="text" value="<?php echo $data->mcq_total_marks ; ?>" id="mcq_total_marks">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="recommandation" class="col-sm-3 col-form-label"><?php echo display('recommandation') ?> </label>
                            <div class="col-sm-9">
                                <input type="text" name="recommandation" class="form-control" id="recommandation" value="<?php echo $data->recommandation?>">
                            </div>
                        </div> 
                       <div class="form-group row">
                            <label for="selection" class="col-sm-3 col-form-label"><?php echo display('selection') ?> </label>
                            <div class="col-sm-9">
                                <input type="text" name="selection" class="form-control" id="selection" value="<?php echo $data->selection?>">
                            </div>
                        </div> 

                         <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label"><?php echo display('details') ?> </label>
                            <div class="col-sm-9">
                                <input type="text" name="details" class="form-control" id="details" value="<?php echo $data->details ;?>">
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
     