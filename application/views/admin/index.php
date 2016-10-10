<!DOCTYPE html>
<html>
<head>
	<?php echo $header?>
</head>

<body>
	<?php echo $navbar;?>
	<main>
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
		  <h1 class="header center orange-text">Post Blog!</h1>
			  <div class="row center">
				<?php echo form_open_multipart('adminpage/getData');?>
				<div class="file-field input-field">
					<div class="btn">
						<span>Foto Header</span>
						<input type="file" name="header_post">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
				<input name="title_post" placeholder="Judul Berita" id="judul_berita" type="text" class="validate">
				<textarea name="content_post"></textarea>
				<input type="hidden" name="content_text" value="" id="content_text">
				<div class="input-field ">
				   <button class="btn waves-effect waves-light orange" id="submit_post" type="submit" name="action">Submit
				<i class="material-icons right">send</i>
				</button>
				</div>
				
				</form>
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
			alert(thought);
			$('#content_text').val(thought);
		});
				
				
</script>
</body>
</html>