<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $header ?>
	<link href="<?php echo base_url()?>assets/css/cv.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<title> CareerClass.id </title>
</head>
<body>

	<?php echo $navbar ?>
	
<div class="section no-pad-bot" id="cv-container">
	<div id="cv-header">
		<div id="cv-title">
			<h1 class="header center black-text header">CV Coaching</h1>
		</div>
		<div id="cv-pict" class="row center">
			<img src="<?php echo base_url() ?>assets/img/Orang.png" >
		</div>
	</div>
	<div id="cv-paragraph" class="container center">
		<h5>Masih bingung bagaimana cara membuat CV yang benar? Atau belum percaya diri dengan isi dari CV kamu? <br><br>
	Cukup upload CV kamu di CV Coacing Career Class dan dapatkan feedback positif dari Dokter Karir!<br><br>
	Pasti kamu lebih percaya diri dengan CV baru kamu!<br><br>
	</h5>
	</div>
	<div id ="cv-form" class="container row">
		<?php if($this->session->flashdata('message')!=NULL){ ?>
		<div class="row">
			<div class="col s12 m12 l12 blue darken-4 white-text">
				  <h5><i class="small material-icons">done</i> <?php echo $this->session->flashdata('message') ?></h5>
			</div>
		</div>
		<?php } ?>
		 <div class="row">
			<?php echo form_open_multipart('cvcoaching/getData');?>
			<div class="row">
				<div class="input-field col s12">
				  <input id="name" name ="name" type="text" class="validate" required="" aria-required="true">
				  <label for="name" data-error="wrong" data-success="right">Name</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				  <input id="Email" name ="email" type="email" class="validate" class="validate" required="" aria-required="true">
				  <label for="Email" data-error="wrong" data-success="right">Email</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				  <input id="University" name ="univ" type="text" class="validate" required="" aria-required="true">
				  <label for="University" data-error="wrong" data-success="right">University</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				  <input id="Major" name ="major" type="text" class="validate" required="" aria-required="true">
				  <label for="Major" data-error="wrong" data-success="right">Major</label>
				</div>
			</div>
			<div class="file-field input-field">
				<div class="btn blue darken-4">
					<span>CV</span>
					<input type="file" class="" name="userfile[]" id="userfile" required="" aria-required="true" multiple>
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
