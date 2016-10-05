<!DOCTYPE html>
  <html>
    <head>
      <?php echo $header;?>
	<link href="<?php echo base_url()?>assets/css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body>
      <?php echo $navbar;?>
    
      <div>
        <img src="<?php echo base_url();?>assets/img/bann_pertama.png" width="100%">
      </div>
      <div class="container center">
        <div class="container">
          <h3><span class="header orange-text">career</span><span class="header purple-text">class</span><span class="header orange-text">.id</span></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero. Nullam consectetur augue vitae dui imperdiet vestibulum vitae at erat. Morbi nec dolor vel neque consectetur porta at quis massa. Duis accumsan dictum nisl, sed efficitur nibh maximus id. </p>
        </div>
        <div class="row" style="margin-top:4%;">
          <div class="col l3 m4 s6">
            <img src="<?php echo base_url();?>assets/img/ungu_kotak.png" width="100%" style="padding-right:5%; padding-left:5%;">
            <div class="header">Career Story</div>
          </div>
          <div class="col l3 m4 s6">
            <img src="<?php echo base_url();?>assets/img/oren_kotak.png" width="100%" style="padding-right:5%; padding-left:5%;">
            <div class="header">Career Chat</div>
          </div>
          <div class="col l3 m4 s6">
            <img src="<?php echo base_url();?>assets/img/ungu_kotak.png" width="100%" style="padding-right:5%; padding-left:5%;">
            <div class="header">Career Coaching</div>
          </div>
          <div class="col l3 m4 s6">
            <img src="<?php echo base_url();?>assets/img/oren_kotak.png" width="100%" style="padding-right:5%; padding-left:5%;">
              <div class="header">Career Class</div>
              <span  class="header">with</span>
              <img src="<?php echo base_url();?>assets/img/cimb.png" width="40%">
          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="container center">
        <div class="container">
          <h2  class="header">Career Story</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum.Ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero.</p>
        </div>
        <div class="row">
          
          <?php $x=0; for ($x=0; $x < 4; $x++) { ?>
          <div class="col s6 m3 l3 left" >
            <div>
              <div><img src="<?php echo base_url();?>assets/img/orang.png" width="100%"></div>
              <p style="text-align:left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero.</p>
               </div>
          </div>
          <?php
             } ?>
        </div>
        <div>
          <a class="waves-effect waves-light btn" style="background-color:#8d3c98;">artikel lainnya</a>
        </div>
      </div>  
      <div style=" margin-top:3%; margin-bottom:0px;" class="relative">  
        <div class="absolute" style="z-index:2; left:51%; top:80%;">
          <a class="waves-effect waves-light btn-large" style="background-color:#fbb515;">artikel lainnya</a>
        </div>     
        <div>
          <img src="<?php echo base_url();?>assets/img/unguhp.png" width="100%">
        </div>
      </div>

      <div style=" margin-top:0px;" class="relative">  
        <div class="absolute" style="z-index:2; left:51%; top:80%;">
          <a class="waves-effect waves-light btn-large" style="background-color:#8d3c98;">artikel lainnya</a>
        </div>     
        <div>
          <img src="<?php echo base_url();?>assets/img/putihmeja.png" width="100%">
        </div>
      </div>

      <div style=" margin-top:0px;" class="relative">  
        <div class="absolute" style="z-index:2; left:8.5%; top:43%; right:50%">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae ipsum ultrices justo malesuada consequat et id velit. Proin ex nulla, pellentesque et finibus in, vehicula vitae libero. </p>
          <a class="waves-effect waves-light btn-large" style="background-color:#fbb515;">artikel lainnya</a>
        </div>     
        <div>
          <img src="<?php echo base_url();?>assets/img/ngomong.png" width="100%">
        </div>
      </div>

      <div class="container center">
        <h3>
          Contact
        </h3>
        <div class="row" style="margin-top:3%;">
          <div class="col l2 m3 s5">
            <a href="#fb"><div class="row">
              <div class="col l4 m3 s4">
                <img src="<?php echo base_url();?>assets/img/facebook.png" width="100%">
              </div>
              <div class="col l8 m9 s8 left-align black-text" style="padding-top:8%;">
                CareerClass
              </div>
            </div></a>
            <a href="#tw"><div class="row">
              <div class="col l4 m3 s4">
                <img src="<?php echo base_url();?>assets/img/twitter.png" width="100%">
              </div>
              <div class="col l8 m9 s8 left-align black-text" style="padding-top:7%;">
                @CareerClass.id
              </div>
            </div></a>
            <a href="#ig"><div class="row">
              <div class="col l4 m3 s4">
                <img src="<?php echo base_url();?>assets/img/instagram.png" width="100%">
              </div>
              <div class="col l8 m9 s8 left-align black-text" style="padding-top:7%;">
                @CareerClass.id
              </div>
            </div></a>
            <a href="#yt"><div class="row">
              <div class="col l4 m3 s4">
                <img src="<?php echo base_url();?>assets/img/youtube.png" width="100%">
              </div>
              <div class="col l8 m9 s8 left-align black-text" style="padding-top:7%;">
                CareerClass
              </div>
            </div></a>
            <a href="#ln"><div class="row">
              <div class="col l4 m3 s4">
                <img src="<?php echo base_url();?>assets/img/line.png" width="100%">
              </div>
              <div class="col l8 m9 s8 left-align black-text" style="padding-top:7%;">
                @CareerClass.id
              </div>
            </div></a>
          </div>
          <div class="col l1 m1 s1"></div>
          <div class="col l9 m8 s7">
            <div class="row">
            <form>
              <div class="input-field col l12 m12 s12 left-align">
                <input id="name" name="name" type="text" class="validate">
                <label for="last_name">Last Name</label>
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
                <label for="textarea1">Textarea</label>
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