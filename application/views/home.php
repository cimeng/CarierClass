<!DOCTYPE html>
  <html>
    <head>
      <?php echo $header;?>
	<link href="<?php echo base_url()?>assets/css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body>
      <?php echo $navbar;?>
    
      <div id="section-1">
        <img src="<?php echo base_url();?>assets/img/bann_pertama.png" width="100%">
      </div>
      <div id="about" class="container center section scrollspy">
        <div class="container">
          <h3><span class="header orange-text">career</span><span class="header purple-text">class</span><span class="header orange-text">.id</span></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero. Nullam consectetur augue vitae dui imperdiet vestibulum vitae at erat. Morbi nec dolor vel neque consectetur porta at quis massa. Duis accumsan dictum nisl, sed efficitur nibh maximus id. </p>
        </div>
        <div class="row" style="margin-top:4%;">
          <div class="col l3 m3 s6">
            <img src="<?php echo base_url();?>assets/img/ungu_kotak.png" width="100%" style="padding-right:5%; padding-left:5%;">
            <div class="header">Career Story</div>
          </div>
          <div class="col l3 m3 s6">
            <img src="<?php echo base_url();?>assets/img/oren_kotak.png" width="100%" style="padding-right:5%; padding-left:5%;">
            <div class="header">Career Chat</div>
          </div>
          <div class="col l3 m3 s6">
            <img src="<?php echo base_url();?>assets/img/ungu_kotak.png" width="100%" style="padding-right:5%; padding-left:5%;">
            <div class="header">Career Coaching</div>
          </div>
          <div class="col l3 m3 s6">
            <img src="<?php echo base_url();?>assets/img/oren_kotak.png" width="100%" style="padding-right:5%; padding-left:5%;">
              <div class="header">Career Class</div>
              <span  class="header">with</span>
              <img src="<?php echo base_url();?>assets/img/cimb.png" width="40%">
          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div id="story" class="container center  section scrollspy">
        <div class="container">
          <h2  class="header">Career Story</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum.Ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero.</p>
        </div>
        <div class="row">
          
          <?php foreach ($post as $data) { ?>
          <div class="col s6 m3 l3 left" >
            <div>
              <div style="height:200px;"><img src="<?php echo base_url();?>assets/img/post/<?php echo $data->img?>" style="height:200px;;max-width:100%;object-fit: cover"></div>
			  <div style="font-size:1.2em;font-weight:bold"><?php echo $data->title ?></div>
              <p style="text-align:center"><?php echo $data->content_text ?></p>
			</div>
          </div>
          <?php
             } ?>
        </div>
        <div>
          <a href="<?php echo base_url()?>blog" class="waves-effect waves-light btn-large" style="background-color:#fbb515;">artikel lainnya</a>
        </div>
      </div>  
      <div id="chat" style=" margin-top:3%; margin-bottom:0px;" class="relative section scrollspy">  
        <div class="absolute" style="z-index:2; left:51%; top:73%;">
          <a class="waves-effect waves-light btn-large" style="background-color:#fbb515;">artikel lainnya</a>
        </div>     
        <div>
          <img src="<?php echo base_url();?>assets/img/unguhp.png" width="100%">
        </div>
      </div>

      <div id="coaching" style=" margin-top:0px;" class="relative  section scrollspy">  
        <div class="absolute" style="z-index:2; left:51%; top:72%;">
          <a href="<?php echo base_url()?>cvcoaching" class="waves-effect waves-light btn-large" style="background-color:#8d3c98;">artikel lainnya</a>
        </div>     
        <div>
          <img src="<?php echo base_url();?>assets/img/putihmeja.png" width="100%">
        </div>
      </div>

      <div id="class" style=" margin-top:0px; " class="relative  section scrollspy"> 
        <div class="absolute" style="z-index:2; left:8.5%; top:43%; right:50%; overflow:hidden;">
          <div>
            <p style="font-size:1.2vw; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero. </p>
          </div>
          <div>
            <a class="waves-effect waves-light btn-large" style="background-color:#fbb515;">artikel lainnya</a>
          </div>
        </div>     
        <div>
          <img src="<?php echo base_url();?>assets/img/ngomong.png" width="100%">
        </div>
      </div>

      <div id="contact" class="container center section scrollspy">
        <h3>
          <div class="header">Contact</div>
        </h3>
        <div class="row" style="margin-top:3%;">
          <div class="col l2 m3 s12">
            <a href="#fb"><div class="row" style="margin-top:-20px;">
				<div class="col 12 m12 s6">
				  <div class="col 12 m6 s4">
					<img src="<?php echo base_url();?>assets/img/facebook.png" width="100%">
				  </div>
				  <div class="col 12 m6 s8 left-align black-text" style="padding-top:8%;">
					CareerClass
				  </div>
				</div>
            </div></a>
            <a href="#tw"><div class="row" style="margin-top:-20px;">
				<div class="col 12 m12 s6">
				  <div class="col 12 m6 s4">
					<img src="<?php echo base_url();?>assets/img/twitter.png" width="100%">
				  </div>
				  <div class="col 12 m6 s8 left-align black-text" style="padding-top:7%;">
					@CareerClass.id
				  </div>
				</div>
            </div></a>
            <a href="#ig"><div class="row" style="margin-top:-20px;">
				<div class="col 12 m12 s6">
				  <div class="col 12 m6 s4">
					<img src="<?php echo base_url();?>assets/img/instagram.png" width="100%">
				  </div>
				  <div class="col 12 m6 s8 left-align black-text" style="padding-top:7%;">
					@CareerClass.id
				  </div>
				</div>
            </div></a>
            <a href="#yt"><div class="row" style="margin-top:-20px;">
				<div class="col 12 m12 s6">
				  <div class="col 12 m6 s4">
					<img src="<?php echo base_url();?>assets/img/youtube.png" width="100%">
				  </div>
				  <div class="col 12 m6 s8 left-align black-text" style="padding-top:7%;">
					CareerClass
				  </div>
				</div>
            </div></a>
            <a href="#ln"><div class="row" style="margin-top:-20px;">
				<div class="col 12 m12 s6" >
				  <div class="col 12 m6 s4">
					<img src="<?php echo base_url();?>assets/img/line.png" width="100%">
				  </div>
				  <div class="col 12 m6 s8 left-align black-text" style="padding-top:7%;">
					@CareerClass.id
				  </div>
				</div>
            </div></a>
          </div>
          <div class="col l1 m1 s0"></div>
          <div class="col l9 m8 s12">
            <div class="row">
			<?php if($this->session->flashdata('message')!=NULL){ ?>
		<div class="row">
			<div class="col s12 m12 l12 blue darken-4 white-text">
				  <h6><?php echo $this->session->flashdata('message') ?></h6>
			</div>
		</div>
		<?php } ?>
			<?php echo form_open_multipart('Home/sendContact');?>
              <div class="input-field col l12 m12 s12 left-align">
                <input id="name" name="name" type="text" class="validate">
                <label for="last_name">Name</label>
              </div>
              <div class="input-field col l12 m12 s12 left-align">
                <input id="email" name="email" type="email" class="validate">
                <label for="last_name">Email</label>
              </div>
              <div class="input-field col l12 m12 s12 left-align">
                <input id="subject" name="subject" type="text" class="validate">
                <label for="last_name">Subject</label>
              </div>
              <div class="input-field col s12 m12 s12 left-align">
                <textarea id="isi" name="isi" class="materialize-textarea"></textarea>
                <label for="textarea1">Message</label>
              </div>
				<div class="input-field col s12 center">
				  <input id="first_name" type="submit" class="waves-effect waves-light btn blue darken-4">
				</div>
              <script type="text/javascript">
                  $(document).ready(function() {
                    Materialize.updateTextFields();
                  });
              </script>
              </form>
            </div>
          </div>
        </div>
      </div>


      <?php echo $footer;?>
    </body>
  </html>