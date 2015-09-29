
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blank</h1>
                        <?php if(isset($message)): ?>
                                <div class="alert alert-success">
                                <?php echo $message; ?><a href="<?php echo site_url($pagepath);?>" class="alert-link">Try it again !</a>.
                                </div>
                        <?php endif; ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

   