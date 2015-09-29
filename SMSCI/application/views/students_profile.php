
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Student Profile</h1>
                       <?php if(isset($student_profile)): ?>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <p class="form-control-static"><?php echo $student_profile[0]->StudentName; ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <p class="form-control-static"><?php echo $student_profile[0]->AddressName; ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <p class="form-control-static"><?php echo $student_profile[0]->Email; ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact No.</label>
                                        <p class="form-control-static"><?php echo $student_profile[0]->Contact; ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Guardian Name</label>
                                        <p class="form-control-static"><?php echo $student_profile[0]->GuardianName; ?></p>
                                    </div>
                                </div><!--first col-lg-6 end-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                       <?php $image_url=base_url("uploads/".$student_profile[0]->PhotoId) ?>
                                       <img src="<?php echo $image_url; ?>" height="150" width="150">
                                    </div>
                                </div><!--Second col-lg-6 end-->
                                
                            </div><!--end row -->
                      
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            Student History
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Class</th>
                                            <th>Year</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($student_profile as $row): ?>
                                        <?php
                                            $temp=explode('/',$row->ClassRegistrationDate);
                                            $year=$temp[0];
                                        ?>
                                        <tr class="danger">
                                            <td><?php  echo $row->ClassName; ?></td>
                                            <td><?php  echo $year; ?></td>
                                            <td><?php  echo $row->StudentStatus ?></td>
                                            <td>
                                                <ul style="list-style: none">
                                                    <li>
                                                        <a href="<?php echo site_url('home'); ?>"><i class="fa fa-book fa-fw"></i>View Marksheet</a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div><!-- end tble responsive-->
                        </div>
                        <!-- /.panel-body -->
                    </div><!--end pannel default-->
                        <?php endif; ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    