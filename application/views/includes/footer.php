 </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      2014 &copy; Melleji Banking System for account opening.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-angle-up"></i></span>
      </div>
   </div>
   
	 <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
			<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h3 id="myModalLabel1">Edit personal information</h3>
					    </div>
						<div class="modal-body">
                        </div></div>
		                 
   
   
   
   
   <!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="<?php echo base_url(); ?>admin/assets/js/jquery-1.8.3.min.js"></script>	
	<!--[if lt IE 9]>
	<script src="<?php echo base_url(); ?>admin/assets/js/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>admin/assets/js/respond.js"></script>	
	<![endif]-->
   	
	<script src="<?php echo base_url(); ?>admin/assets/breakpoints/breakpoints.js"></script>		
	<script src="<?php echo base_url(); ?>admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>	
	<script src="<?php echo base_url(); ?>admin/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>admin/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
	<script src="<?php echo base_url(); ?>admin/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>admin/assets/js/jquery.blockui.js"></script>	
	<script src="<?php echo base_url(); ?>admin/assets/js/jquery.cookie.js"></script>
	<script src="<?php echo base_url(); ?>admin/assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>	
	<script src="<?php echo base_url(); ?>admin/assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin/assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin/assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin/assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin/assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>admin/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>	
	<script src="<?php echo base_url(); ?>admin/assets/flot/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>admin/assets/flot/jquery.flot.resize.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/data-tables/DT_bootstrap.js"></script> 
    
    
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/uniform/jquery.uniform.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/js/jquery.pulsate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script>	
	<script src="<?php echo base_url(); ?>admin/assets/js/app.js"></script>	
    		
	
   <script src="<?php echo base_url(); ?>admin/assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="assets/js/excanvas.js"></script>
   <script src="assets/js/respond.js"></script>
   <![endif]-->
   
   <script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
   <script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>  
    
    <script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.setPage("table_editable");
			App.init();
		});
	</script> 

  <script>
  $(function(){
     $('.popbtn').click(function(){
        $.ajax({
            url: $(this).attr('id'),
            success: function(data){
                $('.modal-body').html(data);
            }
        });
     });
  });
 
  </script> 

    			
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
