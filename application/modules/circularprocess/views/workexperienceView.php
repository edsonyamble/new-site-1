<style>
    img{
        height: 80px;
        width: 100px;
    }
</style>
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('can_id') ?></th>
                            <th><?php echo display('company_name') ?></th>
                             <th><?php echo display('working_period') ?></th>
                            <th><?php echo display('duties') ?></th>
                             <th><?php echo display('supervisor') ?></th>
                            <th><?php echo display('signature') ?></th>
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($exp)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($exp as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->can_id; ?></td>
                                    <td><?php echo $que->company_name; ?></td>
                                    <td><?php echo $que->working_period; ?></td>
                                    <td><?php echo $que->duties; ?></td>
                                    <td><?php echo $que->supervisor; ?></td>
                                    <td><?php echo img($que->signature); ?></td>
                                    <td class="center">
                                        <a href="<?php echo base_url("circularprocess/Candidate/update_workexperience_form/$que->can_workexp_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                        <a href="<?php echo base_url("circularprocess/Candidate/delete_workexperience/$que->can_workexp_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
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
 
 