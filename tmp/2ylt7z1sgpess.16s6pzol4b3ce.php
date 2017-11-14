<!--
	Author: Nathan Hascup, Duck Nguyen, Jeremy Manalo, Sonie Moon
	Date: 10/13/17
	Filename: home.html
	Description: Admin page for Track-king. Cascadian Landworks tracking system.
-->

	<?php echo $this->render('pages/admin-header.html',NULL,get_defined_vars(),0); ?>
	<link rel="stylesheet" type="text/css" href="./css/admin-projects.css">
</head>	
	
	<!-- ADMIN - NAVIGATION -->
	<?php echo $this->render('pages/admin-navbar.html',NULL,get_defined_vars(),0); ?>
	
	<!-- PROJECT START -->
	<div id="" class="portfolio container-fluid">
		<div class="col-sm-12">
			<h1>Projects List:</h1>
		</div>
		
		<!-- Portfolio container -->
		<div id="inactive-div" class="portfolio container-fluid">	
			<div class="list-group">
				<!-- repeat to display templated data -->  
				<?php foreach (($projectDisplay?:[]) as $track): ?>
				
					<!-- BEGIN PROJECT ENTRY -->
					<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">List group item heading</h5>
							<small>3 days ago</small>
						</div>
						<h6 class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</h6>
						<small class="text-muted">Donec id elit non mi porta.</small>
						
					<!-- END PROJECT ENTRY -->
					</a>
			
				<!-- REPEAT END -->
				<?php endforeach; ?>
			<!-- END LIST GROUP -->  
			</div>
		</div>
	<!-- PROJECT END -->
	</div>
        
	<!-- ADMIN FOOTER WITH JS SCRIPTS-->
	<?php echo $this->render('pages/admin-footer.html',NULL,get_defined_vars(),0); ?>