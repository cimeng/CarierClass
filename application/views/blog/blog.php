<!DOCTYPE html>
<html lang="en">
<head>
   <title>Starter Template - Materialize</title>
	<?php echo $header ?>
	<link href="<?php echo base_url()?>assets/css/blog.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

	<?php echo $navbar ?>
	
<div class="section no-pad-bot" id="blog-page-container">
    <div class="container">
		<div id="header">
			<h1 class="header center black-text">Career Story</h1>
			<div class="row center">
				<h5 class="header col s12 light">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </h5>
			</div>
		</div>
		<div id="blog">
			<div class="row">
				<?php foreach ($post as $rows) { ?>
				<div class="col s6 m4 l3 blog-container">
					<div class="blog-img" style="height:200px;">
						<a href="<?php echo base_url()?>blog/post/<?php echo $rows->title_slug?>">
							<img src="<?php echo base_url() ?>assets/img/post/<?php echo $rows->img?>" style="height:200px;;max-width:100%;object-fit: cover">
						</a>
					</div>
					<div class="blog-title">
						<a href="#">
							<?php echo $rows->title ?>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="blog-numbering">
				<ul class="pagination">
					<li class="waves-effect"><a href="<?php echo base_url()?>blog/1">First</a></li>
					<?php 	
						for($i=1;$i<=$page_total;$i++){ 
						if($i<=$page_now+2 && $i >= $page_now - 2 && $i >= 1 && $i<=$page_total){
					?>
						<li class="<?php if($page_now == $i) {echo 'active'; }else {echo 'waves-effect';}?>"><a href="<?php echo base_url()?>blog/<?php echo $i?>"><?php echo $i; ?></a></li>
						
						<?php }} ?>
					<li class="waves-effect"><a href="<?php echo base_url()?>blog/<?php echo $page_total ?>">Last</a></li>
				  </ul>
			</div>
		</div>
    </div>
</div>

	<?php echo $footer ?>

  </body>
</html>
