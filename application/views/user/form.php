<?php $this->load->view('element/head');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
        <li class="active">Tambah</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="<?php echo site_url('user/create');?>">Tambah</a></li>
            <li role="presentation"><a href="<?php echo site_url('user');?>">List</a></li>
          </ul>
		  <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
              <?php if($this->session->flashdata('form_false')){?>
                <div class="alert alert-danger text-center">
                  <strong><?php echo $this->session->flashdata('form_false');?></strong>
                </div>
              <?php } ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(!empty($user)){?>
            <form class="form-horizontal" method="POST" action="<?php echo site_url('user/save').'/'.$user['id'];?>">
            <?php }else{?>
            <form class="form-horizontal" method="POST" action="<?php echo site_url('user/save');?>">
            <?php } ?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="kode">Kode</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo !empty($user) ? $user['id'] : $code_user;?>" id="kode" class="form-control" disabled/>
                      <input type="hidden" name="customer_id" value="<?php echo !empty($user) ? $user['id'] : $code_user;?>" id="customer_id" class="form-control"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Nama</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo !empty($user) ? $user['customer_name'] : '';?>" name="customer_name" placeholder="Nama" id="name" class="form-control" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="address">Alamat</label>
                    <div class="col-sm-8">
                      <textarea name="customer_address" placeholder="Alamat" id="address" class="form-control"/><?php echo !empty($user) ? $user['customer_address'] : '';?></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="date">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo !empty($user) ? $user['date'] : date('Y-m-d H:i:s');?>" id="date" class="form-control" disabled/>
                      <input type="hidden" name="customer_date" value="<?php echo !empty($user) ? $user['date'] : date('Y-m-d H:i:s');?>" id="customer_date" class="form-control"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="phone">Telepon</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo !empty($user) ? $user['customer_phone'] : '';?>" name="customer_phone" placeholder="Telepon" id="phone" class="form-control"/>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-md-3 col-md-offset-4">
                  <a class="btn btn-danger" href="<?php echo site_url('user');?>">Batal</a>
                  <button class="btn btn-warning pull-right" type="submit">Simpan</button>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
		</div>
        <!-- /.col -->
      </div>
	  <!-- row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('element/footer');?>