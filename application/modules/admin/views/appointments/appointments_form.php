<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Appointments
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-warning">
            <div class="box-header with-border text-center">
                <h3 class="box-title "><?php echo $button ?> Appointment</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <?php echo form_open($action, $attributes); ?>
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fa fa-pencil-square-o fa-5x" style="margin-top:180px;margin-left:120px;"></i>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span> <?php echo form_error('name') ?></label>
                                        <input type="text" class="form-control input-sm" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
                                    </div>        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="int">Age <span class="text-danger">*</span> <?php echo form_error('age') ?></label>
                                        <input type="text" class="form-control input-sm" name="age" id="age" placeholder="Age" value="<?php echo $age; ?>" />
                                    </div>        
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="enum">Gender <span class="text-danger">*</span> <?php echo form_error('sex') ?></label>
                                        <?php echo form_dropdown('sex', $this->config->item('gender_opts'), $sex,'class="form-control input-sm" id="sex"'); ?>
                                    </div>        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone <span class="text-danger">*</span> <?php echo form_error('phone') ?></label>
                                        <input type="text" class="form-control input-sm" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone; ?>" />
                                    </div>        
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Id <?php echo form_error('email_id') ?></label>
                                        <input type="text" class="form-control input-sm" name="email_id" id="email_id" placeholder="Email Id" value="<?php echo $email_id; ?>" />
                                    </div>        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="int">Test <span class="text-danger">*</span> <?php echo form_error('test') ?></label>
                                        <?php echo form_dropdown('test', $test_options, $test, 'class="form-control input-sm" id="test"'); ?>
                                    </div>        
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="int">Discount (%) <?php echo form_error('discount') ?></label>
                                        <input type="text" class="form-control input-sm" name="discount" id="discount" placeholder="Discount eg:(10)" value="<?php echo $discount; ?>" />
                                    </div>        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="decimal">Test Price (<?php echo $this->config->item('site_currency'); ?>) <span class="text-danger">*</span> <?php echo form_error('test_price') ?></label>
                                        <input type="text" class="form-control input-sm" readonly name="test_price" id="test_price" placeholder="Test Price" value="<?php echo $test_price; ?>" />
                                    </div>    
                                </div>
                                
                               
                            </div>

                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="decimal">Total Price <span class="text-danger">*</span> <?php echo form_error('total_price') ?></label>
                                        <input type="text" class="form-control input-sm" name="total_price" readonly id="total_price" placeholder="Total Price" value="<?php echo $total_price; ?>" />
                                    </div>        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sample Collection Time <span class="text-danger">*</span> <?php echo form_error('sample_collection_time') ?></label>
                                        <input type="text" class="form-control input-sm" name="sample_collection_time" id="sample_collection_time" placeholder="Sample Collection Time" value="<?php echo $sample_collection_time; ?>" />
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Reference By Doctor <span class="text-danger">*</span> <?php echo form_error('doctor_ref_by') ?></label>    
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <?php 
                                        $select = $doctor_ref_by;
                                        if(!empty($doctor_ref_by) && !array_key_exists($doctor_ref_by, $doctor_options) ){
                                            $select = "others";
                                        }
                                        echo form_dropdown('doctor_ref_by', $doctor_options, $select, 'class="form-control input-sm" id="doctor_ref_by" '); ?>
                                    </div>        
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-sm <?php if($select == "others") echo 'show'; else  echo 'hide'; ?>" 
                                        name="<?php if($select == "others") echo 'doctor_ref_by'; ?>" id="other_doctor_ref_by" placeholder="Specify Doctor Name" value="<?php if($select == "others") echo $doctor_ref_by; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="decimal">Payment Status <span class="text-danger">*</span> <?php echo form_error('payment_status') ?></label>
                                        <?php echo form_dropdown('payment_status', $this->config->item('payment_status_opts'), $payment_status,'class="form-control input-sm" id="payment_status"'); ?>
                                    </div>        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="enum">Appointment Status <span class="text-danger">*</span> <?php echo form_error('appointment_status') ?></label>
                                        <?php echo form_dropdown('appointment_status', $this->config->item('appointment_status_opts'), $appointment_status,'class="form-control input-sm" id="appointment_status"'); ?>    
                                    </div>
                                </div>
                                
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                            <input type="reset" value="Reset" class="btn btn-warning">
                            <a href="<?php echo site_url('admin/appointments') ?>" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div><!-- /.box-body -->
            <div class="box-footer">
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </section>
</div>
