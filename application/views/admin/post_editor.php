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
		  <h1 class="header center orange-text">Edit Post</h1>
			  <div class="row center">
				<?php
					foreach($post as $data)
					{
						$id=$data->id;
				?>
				<?php echo form_open_multipart('adminpage/updatePost/'.$id);?>
				
					<div class="center">
						<img width="300" src="<?php echo base_url()?>assets/img/post/<?php echo $data->img;?>">
					</div>
					<div class="file-field input-field">
					<div class="btn">
						<span>Foto Header</span>
						<input type="file" name="header_post">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<div class="input-field ">
					<input name="title_post" placeholder="Judul Berita" id="judul_berita" type="text" class="validate" value="<?php echo $data->title; ?>">
				</div>
				<div class="input-field ">
					<textarea name="content_post"><?php echo $data->content; ?></textarea>
				</div>
					<input type="hidden" name="content_text" value="" id="content_text">
			
				<div class="input-field ">
					<button class="btn waves-effect waves-light orange" id="submit_post"  type="submit" name="action">Submit
						<i class="material-icons right">send</i>
					</button>
				</div>
					
				</form><?php 
				$this->session->img = $data->img;
				} ?>
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
	
	
	$('#submit_post').click(function() {
			var thought = tinyMCE.activeEditor.getContent({format : 'text'});
			$('#content_text').val(thought);
		});
				

</script>
</body>
</html>