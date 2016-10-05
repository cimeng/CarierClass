<div class="navbar-fixed" style="position:absolute; top:0;">
	<nav>
		<div class="nav-wrapper white">
			<div class="row">
				<div class="col l1 m1 s2"></div>
				<div  class="brand-logo col l2 m3 s5">
					<a href="<?php echo base_url();?>">
						<img  style="margin-top:5px;margin-left:30px" width="100%" src="<?php echo base_url();?>assets/img/logo_samping.png">
					</a>
				</div>
				<div class="col l5 m2 s2"></div>
				<div class="col l5 m8 hide-on-small-only">
					<div class="row header">
						<div class="col l2 m2 s2 center">
							<a href="#1" class=" orange-text">about</a>
						</div>
						<div class="col l2 m2 s2 center">
							<a href="#2" class=" orange-text">story</a>
						</div>
						<div class="col l2 m2 s2 center">
							<a href="#3" class=" orange-text">chat</a>
						</div>
						<div class="col l2 m2 s2 center">
							<a href="#4" class=" orange-text">coaching</a>
						</div>
						<div class="col l2 m2 s2 center">
							<a href="#5" class=" orange-text">class</a>
						</div>
						<div class="col l2 m2 s2 center">
							<a href="#6" class=" orange-text">contact</a>
						</div>
					</div>
				</div>
				<div class="col s3"></div>
				<div class="col s2 right hide-on-large-only hide-on-med-only">
					<!-- Dropdown Trigger -->
				
					<a class='dropdown-button' href='#' data-activates='dropdown1'>
					<i class="material-icons md-dark left	"  style="margin-top:5%">list</i>
					</a>
					<!-- Dropdown Structure -->
					<ul id='dropdown1' class='dropdown-content'>
					  <li><a href="#1">about</a></li>
					  <li class="divider"></li>
					  <li><a href="#2">story</a></li>
					  <li class="divider"></li>
					  <li><a href="#3">chat</a></li>
					  <li class="divider"></li>
					  <li><a href="#4">coaching</a></li>
					  <li class="divider"></li>
					  <li><a href="#5">class</a></li>
					  <li class="divider"></li>
					  <li><a href="#6">contact</a></li>
					</ul>

					<script type="text/javascript">
						$('.dropdown-button').dropdown({
						    inDuration: 300,
						    outDuration: 225,
						    constrain_width: false, // Does not change width of dropdown to that of the activator
						    hover: true, // Activate on hover
						    gutter: 0, // Spacing from edge
						    belowOrigin: true, // Displays dropdown below the button
						    alignment:'left' // Displays dropdown with edge aligned to the left of button
						});
					</script>
				</div>
			</div>
			
		</div>
	</nav>	
</div>
