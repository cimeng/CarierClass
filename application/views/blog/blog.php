<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $header ?>
	<link href="<?php echo base_url()?>assets/css/blog.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<title> CareerClass.id </title>
</head>
<body>

	<?php echo $navbar ?>
	
<div class="section no-pad-bot" id="blog-page-container">
    <div class="container">
		<div id="header">
			<h1 class="header center black-text">Career Story</h1>
			<div class="row center">
				<h5 class="header col s12 light">
				Kumpulan Artikel dan Tips & Trick bermanfaat untuk mempersiapkan karir masa depan kamu. Career Story akan membuka pengetahuan kamu bagaimana langkah menata karir kamu, dimulai dari persiapan apa saja yang harus kamu lakukan saat kuliah dan bagaimana cara membuat CV yang tepat.
				<br><br>
				Yuk baca Artikel dan Tips & Trick Career Story dibawah ini!
				</h5>
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
					<div class="blog-title" style="text-align:center;">
						<a href="<?php echo base_url()?>blog/post/<?php echo $rows->title_slug ?>">
							<h6 style="font-weight:bold"><?php echo $rows->title ?></h6>
						</a>
					</div>
					<p style="text-align:center"><?php echo substr( $rows->content_text, 0, strrpos( substr( $rows->content_text, 0, 150), ' ' ) ); ?>...</p>
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
