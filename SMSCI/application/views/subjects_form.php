
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add New Subjects</h1>
                        <?php echo form_open('subjects/add'); ?>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Subject Name</label>
                                    <input class="form-control" name="subjectname">
                                </div>
                                <div class="form-group">
                                    <label>Full Marks</label>
                                    <input class="form-control" name="fullmarks" type="number">
                                </div>
                                <div class="form-group">
                                    <label>Pass Marks</label>
                                    <input class="form-control" name="passmarks" type="number">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default pull-right" name="submit">Add</button>
                                </div>
                                
                            </div>
                            <?php if(isset($subjects)): ?>
                            <div class="col-lg-9">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                      Available Subjects
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>SN.</th>
                                                        <th>Subject Name</th>
                                                        <th>Full Marks</th>
                                                        <th>Pass Marks</th>
                                                        <th>Action</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $tempno=1; ?>
                                                    <?php foreach($subjects as $row): ?>
                                                    <?php
                                                            $temp="";
                                                            $trclass="";
                                                        if($row->StatusId==1)
                                                        {
                                                            $temp='checked="checked"';
                                                            
                                                        }
                                                        else
                                                        {
                                                            $trclass='class="danger"';
                                                        }
                                                    
                                                    ?>
                                                    <tr <?php echo " ".$trclass; ?>>
                                                        <td><?php echo $tempno; $tempno=$tempno+1; ?></td>
                                                        <td><?php echo $row->SubjectName; ?></td>
                                                        <td><?php echo $row->FullMarks; ?></td>
                                                        <td><?php echo $row->PassMarks; ?></td>
                                                        <td><a href="">Edit |</a><a href="">Delete</a></td>
                                                        <td>
                                                            <fieldset disabled>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" <?php echo $temp; ?> >
                                                                </div>
                                                            </fieldset>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php form_close(); ?>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    