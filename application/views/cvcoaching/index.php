<!DOCTYPE html>
<html lang="en">
<head>
   <title>Starter Template - Materialize</title>
	<?php echo $header ?>
	<link href="<?php echo base_url()?>assets/css/cv.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

	<?php echo $navbar ?>
	
<div class="section no-pad-bot" id="cv-container">
	<div id="cv-header">
		<div id="cv-title">
			<h1 class="header center black-text">CV Coaching</h1>
		</div>
		<div id="cv-pict" class="row center">
			<img src="<?php echo base_url() ?>assets/img/Orang.png" >
		</div>
	</div>
	<div id="cv-paragraph" class="container center">
		<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
		</h5>
	</div>
	<div id ="cv-form" class="container row">
		 <div class="row">
			<?php echo form_open_multipart('cvcoaching/getData');?>
			<div class="row">
				<div class="input-field col s12">
				  <input id="first_name" name ="name" type="text" class="validate">
				  <label for="first_name">Name</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				  <input id="first_name" type="email" class="validate">
				  <label for="first_name">Email</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				  <input id="first_name" type="text" class="validate">
				  <label for="first_name">University</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				  <input id="first_name" type="text" class="validate">
				  <label for="first_name">Major</label>
				</div>
			</div>
			<div class="file-field input-field">
				<div class="btn blue darken-4">
					<span>CV</span>
					<input type="file" class="" name="userfile[]" id="userfile" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate " type="text" placeholder="Upload your CV">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 center">
				  <input id="first_name" type="submit" class="waves-effect waves-light btn blue darken-4">
				</div>
			</div>
			</form>
		  </div>
	</div>
</div>

	<?php echo $footer ?>
	
	<script>
	$(document).ready(function() {
    Materialize.updateTextFields();
  });
  </script>

  </body>
</html>
