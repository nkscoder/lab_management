 <div class="content-wrapper">
        
         <section class="content-header">
          <h1>
            Account
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
                
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo lang('settings_page_name'); ?></h3>
                </div><!-- /.box-header -->
                
              
                <div class="box-body">
                     <div class="row">
        
<div class="col-md-12">

<div class="row">
    <div class="col-md-offset-3 col-md-6">
        <?php if (isset($settings_info)) { ?>
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $settings_info; ?>
        </div>
        <?php } ?>    
    </div>
</div>
    

    


<div class="row">
    <div class="col-md-offset-3 col-md-6">
    <?php echo form_open(uri_string(), 'class="form-horizontal"'); ?>
    
    <div class="row">
        <div class="col-md-6">
            <div class="control-group <?php echo (form_error('settings_email') || isset($settings_email_error)) ? 'error' : ''; ?>">
            <label class="control-label" for="settings_email"><?php echo lang('settings_email'); ?></label>

            <div class="controls">
                <?php echo form_input(array('class'=>'form-control input-sm','name' => 'settings_email', 'id' => 'settings_email', 'value' => set_value('settings_email') ? set_value('settings_email') : (isset($account->email) ? $account->email : ''), 'maxlength' => 160)); ?>
                <?php if (form_error('settings_email') || isset($settings_email_error))
            {
                ?>
                <span class="help-inline">
                            <?php
                    echo form_error('settings_email');
                    echo isset($settings_email_error) ? $settings_email_error : '';
                    ?>
                            </span>
                <?php } ?>
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <div class="control-group <?php echo (form_error('settings_fullname')) ? 'error' : ''; ?>">
                <label class="control-label" for="settings_fullname"><?php echo lang('settings_fullname'); ?></label>

                <div class="controls">
                    <?php echo form_input(array('class'=>'form-control input-sm','name' => 'settings_fullname', 'id' => 'settings_fullname', 'value' => set_value('settings_fullname') ? set_value('settings_fullname') : (isset($account_details->fullname) ? $account_details->fullname : ''), 'maxlength' => 160)); ?>
                    <?php if (form_error('settings_fullname'))
                {
                    ?>
                    <span class="help-inline">
                                <?php echo form_error('settings_fullname'); ?>
                                </span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
           <div class="control-group <?php echo (form_error('settings_firstname')) ? 'error' : ''; ?>">
                <label class="control-label" for="settings_firstname"><?php echo lang('settings_firstname'); ?></label>

                <div class="controls">
                    <?php echo form_input(array('class'=>'form-control input-sm','name' => 'settings_firstname', 'id' => 'settings_firstname', 'value' => set_value('settings_firstname') ? set_value('settings_firstname') : (isset($account_details->firstname) ? $account_details->firstname : ''), 'maxlength' => 80)); ?>
                    <?php if (form_error('settings_firstname'))
                {
                    ?>
                    <span class="help-inline">
                                <?php echo form_error('settings_firstname'); ?>
                                </span>
                    <?php } ?>
                </div>
            </div> 
        </div>
        <div class="col-md-6">
            <div class="control-group <?php echo (form_error('settings_lastname')) ? 'error' : ''; ?>">
                <label class="control-label" for="settings_lastname"><?php echo lang('settings_lastname'); ?></label>

                <div class="controls">
                    <?php echo form_input(array('class'=>'form-control input-sm','name' => 'settings_lastname', 'id' => 'settings_lastname', 'value' => set_value('settings_lastname') ? set_value('settings_lastname') : (isset($account_details->lastname) ? $account_details->lastname : ''), 'maxlength' => 80)); ?>
                    <?php if (form_error('settings_lastname'))
                {
                    ?>
                    <span class="help-inline">
                                <?php echo form_error('settings_lastname'); ?>
                                </span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>






<label style="block;" class="control-label" for="settings_dateofbirth"><?php echo lang('settings_dateofbirth'); ?></label>
<div class="row">
    <div class="col-md-4">
    <div class="control-group <?php echo isset($settings_dob_error) ? 'error' : ''; ?>">
        <div class="controls">
            <?php $m = $this->input->post('settings_dob_month') ? $this->input->post('settings_dob_month') : (isset($account_details->dob_month) ? $account_details->dob_month : ''); ?>
            <select name="settings_dob_month" class="input-small form-control input-sm">
                <option value=""><?php echo lang('dateofbirth_month'); ?></option>
                <option value="1"<?php if ($m == 1) echo ' selected="selected"'; ?>><?php echo lang('month_jan'); ?></option>
                <option value="2"<?php if ($m == 2) echo ' selected="selected"'; ?>><?php echo lang('month_feb'); ?></option>
                <option value="3"<?php if ($m == 3) echo ' selected="selected"'; ?>><?php echo lang('month_mar'); ?></option>
                <option value="4"<?php if ($m == 4) echo ' selected="selected"'; ?>><?php echo lang('month_apr'); ?></option>
                <option value="5"<?php if ($m == 5) echo ' selected="selected"'; ?>><?php echo lang('month_may'); ?></option>
                <option value="6"<?php if ($m == 6) echo ' selected="selected"'; ?>><?php echo lang('month_jun'); ?></option>
                <option value="7"<?php if ($m == 7) echo ' selected="selected"'; ?>><?php echo lang('month_jul'); ?></option>
                <option value="8"<?php if ($m == 8) echo ' selected="selected"'; ?>><?php echo lang('month_aug'); ?></option>
                <option value="9"<?php if ($m == 9) echo ' selected="selected"'; ?>><?php echo lang('month_sep'); ?></option>
                <option value="10"<?php if ($m == 10) echo ' selected="selected"'; ?>><?php echo lang('month_oct'); ?></option>
                <option value="11"<?php if ($m == 11) echo ' selected="selected"'; ?>><?php echo lang('month_nov'); ?></option>
                <option value="12"<?php if ($m == 12) echo ' selected="selected"'; ?>><?php echo lang('month_dec'); ?></option>
            </select>
        </div>
    </div>
</div>

<div class="col-md-4">
    <?php $d = $this->input->post('settings_dob_day') ? $this->input->post('settings_dob_day') : (isset($account_details->dob_day) ? $account_details->dob_day : ''); ?>
        <select name="settings_dob_day" class="input-small form-control input-sm">
            <option value="" selected="selected"><?php echo lang('dateofbirth_day'); ?></option>
            <?php for ($i = 1; $i < 32; $i ++) : ?>
            <option value="<?php echo $i; ?>"<?php if ($d == $i) echo ' selected="selected"'; ?>><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
</div>

<div class="col-md-4">
    <?php $y = $this->input->post('settings_dob_year') ? $this->input->post('settings_dob_year') : (isset($account_details->dob_year) ? $account_details->dob_year : ''); ?>
        <select name="settings_dob_year" class="input-small form-control input-sm">
            <option value=""><?php echo lang('dateofbirth_year'); ?></option>
            <?php $year = mdate('%Y', now()); for ($i = $year; $i > 1900; $i --) : ?>
            <option value="<?php echo $i; ?>"<?php if ($y == $i) echo ' selected="selected"'; ?>><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        <?php if (isset($settings_dob_error)){ ?>
        <span class="help-inline">
                    <?php echo $settings_dob_error; ?>
                    </span>
        <?php } ?>
</div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="control-group <?php echo (form_error('settings_gender')) ? 'error' : ''; ?>">
            <label class="control-label" for="settings_gender"><?php echo lang('settings_gender'); ?></label>

            <div class="controls">
                <?php $s = ($this->input->post('settings_gender') ? $this->input->post('settings_gender') : (isset($account_details->gender) ? $account_details->gender : '')); ?>
                <select name="settings_gender" class="form-control input-sm">
                    <option value=""><?php echo lang('settings_select'); ?></option>
                    <option value="M"<?php if ($s == 'M') echo 'selected="selected"'; ?>><?php echo lang('gender_male'); ?></option>
                    <option value="F"<?php if ($s == 'F') echo 'selected="selected"'; ?>><?php echo lang('gender_female'); ?></option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="control-group <?php echo (form_error('settings_postalcode')) ? 'error' : ''; ?>">
            <label class="control-label" for="settings_postalcode"><?php echo lang('settings_postalcode'); ?></label>

            <div class="controls">
                <?php echo form_input(array('name' => 'settings_postalcode', 'id' => 'settings_postalcode', 'value' => set_value('settings_postalcode') ? set_value('settings_postalcode') : (isset($account_details->postalcode) ? $account_details->postalcode : ''), 'maxlength' => 40, 'class' => 'form-control input-sm')); ?>
                <?php if (form_error('settings_postalcode'))
            {
                ?>
                <span class="help-inline">
                            <?php echo form_error('settings_postalcode'); ?>
                            </span>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="control-group <?php echo (form_error('settings_country')) ? 'error' : ''; ?>">
            <label class="control-label" for="settings_country"><?php echo lang('settings_country'); ?></label>

            <div class="controls">
                <?php $account_country = ($this->input->post('settings_country') ? $this->input->post('settings_country') : (isset($account_details->country) ? $account_details->country : '')); ?>
                <select id="settings_country" name="settings_country" class="select form-control input-sm">
                    <option value=""><?php echo lang('settings_select'); ?></option>
                    <?php foreach ($countries as $country) : ?>
                    <option value="<?php echo $country->alpha2; ?>"<?php if ($account_country == $country->alpha2) echo ' selected="selected"'; ?>>
                        <?php echo $country->country; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
            
        <div class="control-group <?php echo (form_error('settings_language')) ? 'error' : ''; ?>">
            <label class="control-label" for="settings_language"><?php echo lang('settings_language'); ?></label>

            <div class="controls">
                <?php $account_language = ($this->input->post('settings_language') ? $this->input->post('settings_language') : (isset($account_details->language) ? $account_details->language : '')); ?>
                <select id="settings_language" name="settings_language" class="select form-control input-sm">
                    <option value=""><?php echo lang('settings_select'); ?></option>
                    <?php foreach ($languages as $language) : ?>
                    <option value="<?php echo $language->one; ?>"<?php if ($account_language == $language->one) echo ' selected="selected"'; ?>>
                        <?php echo $language->language; ?><?php if ($language->native && $language->native != $language->language) echo ' ('.$language->native.')'; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="control-group <?php echo (form_error('settings_timezone')) ? 'error' : ''; ?>">
            <label class="control-label" for="settings_timezone"><?php echo lang('settings_timezone'); ?></label>

            <div class="controls">
                <?php $account_timezone = ($this->input->post('settings_timezone') ? $this->input->post('settings_timezone') : (isset($account_details->timezone) ? $account_details->timezone : '')); ?>
                <select id="settings_timezone" name="settings_timezone" class="select form-control input-sm">
                    <option value=""><?php echo lang('settings_select'); ?></option>
                    <?php foreach ($zoneinfos as $zoneinfo) : ?>
                    <option value="<?php echo $zoneinfo->zoneinfo; ?>"<?php if ($account_timezone == $zoneinfo->zoneinfo) echo ' selected="selected"'; ?>>
                        <?php echo $zoneinfo->zoneinfo; ?><?php if ($zoneinfo->offset) echo ' ('.$zoneinfo->offset.')'; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        
    </div>
</div>
    
    <div class="row">
    <div class="col-md-6">
        <div class="mt10">
    <button type="submit" class="btn btn-primary btn-sm"><?php echo lang('settings_save'); ?></button>
    <!-- <button type="reset" class="btn btn-danger">Cancel</button> -->
        </div>
    </div>
    </div>
    

    <div class="row">
        <div class="col-md-12">
            <div class="well mt10">NOTE : <?php echo sprintf(lang('settings_privacy_statement'), anchor('page/privacy-policy', lang('settings_privacy_policy'))); ?>
    </div>
        </div>
    </div>
</div>


</div>










<?php echo form_close(); ?>


</div>

    </div>

                </div><!-- /.box-body -->

                <div class="box-footer">

                </div><!-- /.box-footer -->
               
              </div><!-- /.box -->
                
            
        </section>

</div>



   