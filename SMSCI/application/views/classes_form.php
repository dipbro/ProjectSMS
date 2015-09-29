
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        <?php if(isset($class_name)): ?>
                            <?php echo "Class ".$class_name; ?>
                        <?php endif; ?>
                        </h1>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Student Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Roll No.</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Contact No</th>
                                            <th>Guardian Name</th>
                                            <th>Action</th>
                                            <th>Marksheet Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($class_data)): $roll_no=1; ?>
                                        <?php foreach($class_data as $row): ?>
                                        <?php
                                            if($row->MarkSheetStatusId=="1")
                                            {
                                                $check_staus='checked="true"';
                                            }
                                            else
                                            {
                                                $check_staus="";
                                            }
                                            
                                        ?>
                                        <tr class="danger">
                                            <td><?php echo $roll_no; ?></td>
                                            <td><?php echo $row->StudentName; ?></td>
                                            <td><?php echo $row->AddressName; ?></td>
                                            <td><?php echo $row->Email; ?></td>
                                            <td><?php echo $row->Contact; ?></td>
                                            <td><?php echo $row->GuardianName; ?></td>
                                            <td><a href="<?php echo site_url('Students_registration/edit/'.$row->StudentId); ?>">Edit |</a><a href="<?php echo site_url('Students_registration/delete_student/'.$row->StudentHasClassId); ?>">Delete |</a><a href="">Enter Marks |</a><a href="<?php echo site_url('profile/students_profile/'.$row->StudentId.'/'.$row->ClassId); ?>">View</a></td>
                                            <td>
                                                <fieldset disabled>
                                                    <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" <?php echo $check_staus; ?>>
                                                    </label>
                                                </div>
                                                </fieldset>
                                                
                                            </td>
                                            <?php $roll_no=$roll_no+1; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    