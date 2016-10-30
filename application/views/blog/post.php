<!DOCTYPE html>
<html lang="en">
<head>
	<title> CareerClass.id - <?php echo $post[0]->title?> </title>
	<?php echo $header ?>
	<link href="<?php echo base_url()?>assets/css/blog.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>

	<?php echo $navbar ?>
	<?php foreach($post as $rows){?>
	<div class="section no-pad-bot" id="blog-page-container">
		<div class="container">
			<div id="post-header">
				<h1 class="header black-text"><?php echo $rows->title?></h1>
				<hr>
			</div>
				<div class="row center">
				<?php if (strcmp($rows->img,"default.png") != 0){?>
					<img src="<?php echo base_url() ?>assets/img/post/<?php echo $rows->img?>" >
				<?php } ?>
				</div>
				<div class="row center">
					<h5 class=" col s12 light"><?php echo $rows->content?></h5>
				</div>
			<div id="post">
				<div class="row">
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php echo $footer ?>

  </body>
</html>
