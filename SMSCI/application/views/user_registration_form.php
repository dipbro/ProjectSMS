

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blank</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <?php echo form_open('user_registration/insert'); ?>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    Users Detail
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Full Name</label>
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
                                    <label>Contact Number</label>
                                    <input class="form-control" type="text" name="contact" placeholder="Enter your full name" value="<?php echo set_value('contact'); ?>">
                                    <?php echo form_error('contact'); ?>
                                </div>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input class="form-control" type="text" name="username" placeholder="Enter your full name" value="<?php echo set_value('username'); ?>">
                                    <?php echo form_error('username'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Enter your full name" value="">
                                    <?php echo form_error('password'); ?>
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
                                            <?php echo form_error('fullname'); ?>
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


