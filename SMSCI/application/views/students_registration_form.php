
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Student Registration Form</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <?php echo form_open_multipart('students_registration/registration'); ?>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    Student Details
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Student Full Name</label>
                                    <input class="form-control" type="text" name="fullname" placeholder="Enter your full name" value="<?php echo set_value('fullname'); ?>">
                                    <?php echo form_error('fullname'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="address" placeholder="Enter your full name" value="<?php echo set_value('address'); ?>">
                                    <?php echo form_error('address'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text" name="email" placeholder="Enter your full name" value="<?php echo set_value('email'); ?>">
                                    <?php echo form_error('email'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Guardian Name</label>
                                    <input class="form-control" type="text" name="guardianname" placeholder="Enter your full name" value="<?php echo set_value('guardianname'); ?>">
                                    <?php echo form_error('guardianname'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input class="form-control" type="text" name="contact" placeholder="Enter your full name" value="<?php echo set_value('contact'); ?>">
                                    <?php echo form_error('contact'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth(yy/mm/dd)</label>
                                    <input class="form-control" type="text" name="dob" placeholder="Enter your full name" value="<?php echo set_value('dob'); ?>">
                                    <?php echo form_error('dob'); ?>
                                </div>
                                <div class="form-group">
                                            <label>Choose photo</label>
                                            <input type="file" name="userfile">
                                </div>
                                <div class="form_group">
                                    <label>Select Class</label>
                                    <?php
                                    $id='class="form-control"';
                                    $options=array();
                                    if(isset($classes))
                                    {
                                        foreach($classes as $row)
                                        {
                                            $options[$row->ClassId]=$row->ClassName;
                                        }
                                    }
                                    echo form_dropdown('class', $options, '1',$id);
                                    
                                    ?>
                                </div>
                                <div class="form-group">
                                            <label>Select Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="genders" id="male_radio" value="1" checked="">Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="genders" id="female_radio" value="2">Female
                                                </label>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                             <button type="reset" class="btn btn-default">Reset Button</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                           <button type="submit" class="btn btn-default" name="submit">Submit Button</button>
                                        </div>
                                    </div>
                                </div>
                                <?php if(isset($message)): ?>
                                <div class="success">
                                    <div class="alert alert-success">
                                        <?php echo $message; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                
                                
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

   