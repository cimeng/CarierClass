<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/admin.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
	<script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
			selector: 'textarea'
		});
	</script>
</head>

<body>
 
	<?php echo $navbar;?>
	<main>
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<h1 class="header center orange-text">
				POST MANAGER
			</h1>
			<div class="row">
			  <div class="col s12 center indigo darken-2 white-text"><?php echo $this->session->flashdata('message') ?></div>
			</div>
				<div class="row">
					<table class="centered">
						<thead>
						  <tr>
						  
							  <th data-field="id">ID</th>
							  <th data-field="id">Title</th>
							  <th data-field="price">Action</th>
						  </tr>
						</thead>

						<tbody>
						<?php
						foreach($posts as $data)
						{
						?>
						  <tr>
							<td><?php echo $data->id ?></td>
							<td><?php echo $data->title ?></td>
							<td>
								<a href="<?php echo base_url()?>adminpage/post_editor/<?php echo $data->id?>" class="btn-floating red"><i class="material-icons">mode_edit</i></a>
								<a href="<?php echo base_url()?>adminpage/deletePost/<?php echo $data->id?>" class="btn-floating red" onclick="return confirm('Are you sure you want to delete this item?')"><i class="material-icons">delete</i></a>
								<a href="<?php echo base_url()?>adminpage/post_editor/<?php echo $data->id?>" class="btn-floating red"><i class="material-icons">call_made</i></a>
								
								</td>
						  </tr>
						<?php } ?>
						  
						</tbody>
				  </table>
				</div>
			
		</div>
	</div>



</main>
<footer class="page-footer orange">

</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script src="<?php echo base_url();?>assets/js/init.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('.carousel').carousel();
	});
	$('.carousel.carousel-slider').carousel({full_width: true});

</script>
</body>
</html>