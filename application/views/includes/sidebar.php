<!-- BEGIN SIDEBAR MENU -->        	
			<ul>
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON --->
					<div class="sidebar-toggler hidden-phone"></div-->
					<!-- BEGIN SIDEBAR TOGGLER BUTTON-- >
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!--form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />				
							<input type="button" class="submit" value=" " />
						</div>
					</form-->
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active ">
					<a href="<?php echo base_url(); ?>registration/admin_dashboard">
					<!--i class="icon-home"></i--> 
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				<!--li class="has-sub ">
					<a javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title">UI Features</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="<?php //echo base_url(); ?>admin/ui_general.html">General</a></li>
						<li ><a href="<?php //echo base_url(); ?>admin/ui_buttons.html">Buttons</a></li>
						<li ><a href="<?php //echo base_url(); ?>admin/ui_tabs_accordions.html">Tabs & Accordions</a></li>
						<li ><a href="<?php //echo base_url(); ?>admin/ui_sliders.html">Sliders</a></li>
						<li ><a href="<?php //echo base_url(); ?>admin/ui_tiles.html">Tiles</a></li>
						<li ><a href="<?php //echo base_url(); ?>admin/ui_typography.html">Typography</a></li>
						<li ><a href="<?php //echo base_url(); ?>admin/ui_tree.html">Tree View</a></li>
						<li ><a href="<?php //echo base_url(); ?>admin/ui_nestable.html">Nestable List</a></li>
					</ul>
				</li-->
				<li class="has-sub " >
					<a javascript:;">
					<!--i class="icon-table"></i--> 
					<span class="title">Enroll new Account</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<!--li ><a href="<?php //echo base_url(); ?>admin/form_layout.html">registration of</a></li-->
						<!--li ><a href="<?php //echo base_url(); ?>admin/form_samples.html">Advance Form Samples</a></li>
						<li ><a href="<?php //echo base_url(); ?>admin/form_component.html">Form Components</a></li-->
						<li  ><a href="<?php echo base_url(); ?>login/registration_form" >Student </a></li>
                        <li ><a href="<?php echo base_url(); ?>registration/visitors" >Personal</a></li>
                        <li ><a href="<?php echo base_url(); ?>registration/Refugies" >Company</a></li>
						<!--li ><a href="<?php echo base_url(); ?>admin/form_validation.html">Form Validation</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/form_fileupload.html">Multiple File Upload</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/form_dropzone.html">Dropzone File Upload</a></li-->
					</ul>
				</li>
				<li class="has-sub ">
					<a javascript:;">
					<!--i class="icon-th-list"></i--> 
					<span class="title">View Enrolled</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<!--li ><a href="<?php echo base_url(); ?>admin/table_basic.html">Basic Tables</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/table_managed.html">Managed Tables</a></li-->
						<li ><a href="<?php echo base_url(); ?>login/view_users">Student accounts</a></li>
                        <li ><a href="<?php echo base_url(); ?>registration/registered_visitors">personal Accounts</a></li>
                       	<li ><a href="<?php echo base_url(); ?>registration/registered_refugies">Company Accounts</a></li>
					</ul>
				</li>
				<!--li class="has-sub ">
					<a javascript:;">
					<i class="icon-th-list"></i> 
					<span class="title">Portlets</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="<?php echo base_url(); ?>admin/portlet_general.html">General Portlets</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/portlet_draggable.html">Draggable Portlets</a></li>
					</ul>
				</li-->
				<li class="has-sub ">
					<a javascript:;">
					<!--i class="icon-map-marker"></i--> 
					<span class="title">Maps</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="<?php echo base_url(); ?>admin/maps_google.html">Google Maps</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/maps_vector.html">Vector Maps</a></li>
					</ul>
				</li>
				<!--li class="">
					<a href="<?php echo base_url(); ?>admin/charts.html">
					<i class="icon-bar-chart"></i> 
					<span class="title">Visual Charts</span>
					</a>
				</li-->
				<li class="">
					<a href="<?php echo base_url(); ?>registration/calendar">
					<!--i class="icon-calendar"></i--> 
					<span class="title">Calendar</span>
					</a>
				</li>
				<li class="">
					<a href="<?php echo base_url(); ?>admin/gallery.html">
					<!--i class="icon-camera"></i--> 
					<span class="title">Gallery</span>
					</a>
				</li>
				<!--li class="has-sub ">
					<a javascript:;">
					<i class="icon-briefcase"></i> 
					<span class="title">Extra</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub">
						<li ><a href="<?php echo base_url(); ?>admin/extra_profile.html">User Profile</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/extra_faq.html">FAQ</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/extra_search.html">Search Results</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/extra_invoice.html">Invoice</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/extra_pricing_table.html">Pricing Tables</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/extra_404.html">404 Page</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/extra_500.html">500 Page</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/extra_blank.html">Blank Page</a></li>
						<li ><a href="<?php echo base_url(); ?>admin/extra_full_width.html">Full Width Page</a></li>
					</ul>
				</li-->
				<li class="">
					<a href="<?php echo base_url(); ?>site/index">
					<i class="icon-user"></i> 
					<span class="title">Login Page</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->