<div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!--div id="portlet-config" class="modal hide">
            <div class="modal-header">
               <button data-dismiss="modal" class="close" type="button"></button>
               <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
               <p>Here will be a configuration form</p>
            </div>
         </div-->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER -->
                  <!--div class="color-panel hidden-phone">
                     <div class="color-mode-icons icon-color"></div>
                     <div class="color-mode-icons icon-color-close"></div>
                     <div class="color-mode">
                        <p>THEME COLOR</p>
                        <ul class="inline">
                           <li class="color-black current color-default" data-style="default"></li>
                           <li class="color-blue" data-style="blue"></li>
                           <li class="color-brown" data-style="brown"></li>
                           <li class="color-purple" data-style="purple"></li>
                           <li class="color-white color-light" data-style="light"></li>
                        </ul>
                        <label class="hidden-phone">
                        <input type="checkbox" class="header" checked value="" />
                        <span class="color-mode-label">Fixed Header</span>
                        </label>                    
                     </div>
                  </div-->
                  <!-- END BEGIN STYLE CUSTOMIZER -->   
                  <h3 class="page-title">
                  </h3>
                  <!--ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Form for</a>
                        <span class="icon-angle-right"></span>
                     </li>
                     <li><a href="#">personal information</a></li>
                  </ul-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box blue" id="form_wizard_1">
                     <div class="portlet-title">
                        <h4>
                           <i class="icon-reorder"></i> personal information - <span class="step-title">Step 1 of 4</span>
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <form action="<?php echo base_url();?>login/insert_account_info_into_database" class="form-horizontal" method="post">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">Basic Information</span>
                                          <span class="desc"><i class="icon-ok"></i> </span>   
                                          </a>
                                       </li>
                                       <li class="span3">
                                          <a href="#tab2" data-toggle="tab" class="step">
                                          <span class="number">Account Information</span>
                                          <span class="desc"><i class="icon-ok"></i> </span>   
                                          </a>
                                       </li>
                                       <li class="span3">
                                          <a href="#tab4" data-toggle="tab" class="step">
                                          <span class="number">Terms of Agreement</span>
                                          <!--span class="desc"><i class="icon-ok"></i> Confirm</span-->   
                                          </a> 
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <!--div id="bar" class="progress progress-success progress-striped">
                                 <div class="bar"></div>
                              </div-->
                              <div class="tab-content">
                                 <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Provide your names </h3>
                                    <div class="control-group">
                                       <label class="control-label">First name</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="provide first name" name="firstname" value="<?php echo set_value('firstname'); ?>" size="45" />
                                           <?php echo form_error('firstname'); ?>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">Surname</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="provide last name" name="surname" value="<?php echo set_value('surname'); ?>" size="45"/>
                                           <?php echo form_error('surname'); ?>
                                       </div>
                                    </div>
                                     <div class="control-group">
                                       <label class="control-label">Last name</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="Surname " name="lastname" value="<?php echo set_value('lastname'); ?>" size="45"/>
                                            <?php echo form_error('lastname'); ?>
                                           </div>
                                             </div>
                                          <div class="control-group">
                                     <label class="control-label">Gender</label>
                                 <div class="col-sm-6">
                               <select class="select2" name="selection" >
                                  <option value="">Choose One</option>
                                  <option value="male" >male</option>
                                  <option value="female">female</option>
                            </select>
                                </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="tab2">
                                    <div class="control-group">
                                       <label class="control-label">Phone number&nbsp;&nbsp;</label>
                                       <div class="controls">
                                           <input type="text"  name="phoneNumber" value="<?php echo set_value('lastname'); ?>" size="45"  placeholder="Enter phone number" />
                                           <?php echo form_error('phoneNumber'); ?>
                                          <!--span class="help-inline">Provide your fullname</span-->
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Address </label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder=" enter your Permanent Address " name="address" value="<?php echo set_value('lastname'); ?>" size="45"  />
                                          <?php echo form_error('address'); ?>
                                       </div>
                                    </div>
                                 
                                 </div>
                                 <div class="tab-pane" id="tab3">
                                    <div class="control-group">
                                       <label class="control-label">Job status</label>
                                       <div class="controls">
                                       <?php echo form_error('username'); ?>
                                          <input type="text" class="span6 m-wrap" placeholder="job status " name="jobstatus"/>
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Birth certificate Id</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" placeholder="birth certificate id " name="birthId"/>
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                   <!--div class="control-group">
                                       <label class="control-label">Payment Options</label>
                                       <div class="controls">
                                          <label class="checkbox line">
                                          <input type="checkbox" value="" /> Auto-Pay with this Credit Card
                                          </label>
                                          <label class="checkbox line">
                                          <input type="checkbox" value="" /> Email me monthly billing
                                          </label>
                                       </div>
                                    </div-->
                                 </div>
                                 <div class="tab-pane" id="tab4">
                                    <div class="control-group">
                                       <label class="control-label"></label>
                                       <div class="controls">
                                          <label class="checkbox">
                                          <input type="checkbox" value="" /> I confirm that the information are true
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-actions clearfix">
                                 <a href="javascript:;" class="btn button-previous">
                                 <i class="m-icon-swapleft"></i> Back 
                                 </a>
                                 <a href="javascript:;" class="btn blue button-next">
                                 Continue <i class="m-icon-swapright m-icon-white"></i>
                                 </a>
                                 <input type="submit" class="btn green" value="Submit" /> 
                                   
                                 </a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
<script src="<?php echo base_url(); ?>admin/assets/js/jquery.js"></script>
   <script src="<?php echo base_url(); ?>admin/assets/js/jquery.datetimepicker.js"></script>
     <script>
  $('#datetimepicker10').datetimepicker({
	step:5,
	inline:true
});

$('#datetimepicker_mask').datetimepicker({
	mask:'9999/19/39 29:59'
});
</script>
    