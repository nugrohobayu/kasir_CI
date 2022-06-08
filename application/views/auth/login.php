<?php $this->load->view('element/head');?>
<div class="container">
  <div class="col-md-6">
    <img src="<?php echo base_url()?>assets/login.png" alt=""  style="width: 60%; display: block; margin-left: auto; margin-right: auto; margin-top: 15em;">
  </div>
  <div class="col-md-6">
    <body class="bg-gradient-light">

      <div class="login-box " style="margin-top: 18em;">
        <div class="login-logo">
          <b>Selamat Datang </b>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body ">
          <p class="login-box-msg">Silahkann Masuk ke Akun Anda</p>
          <?php if($this->session->flashdata('login_false')){?>
            <div class="alert alert-danger alert-dismissible">
              <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
              <h4>
                <i class="icon fa fa-ban"></i>Alert!
              </h4>
              <?php echo $this->session->flashdata('login_false');?>
            </div>
          <?php } ?>
          <form action="<?php echo site_url('auth/login_process');?>" method="post">
            <div class="form-group has-feedback">
              <input type="text" name="username" class="form-control" placeholder="Username">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                  <label>
                  <!--  <input type="checkbox" name="remember_me"> Remember Me -->
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-warning btn-user btn-block">Login</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <!-- <a href="#">I forgot my password</a><br>
          <a href="register.html" class="text-center">Register a new membership</a>-->
        </div>
        <!-- /.login-box-body -->
      </div>
    </body
  ></div>
</div>
<?php $this->load->view('element/footer');?>