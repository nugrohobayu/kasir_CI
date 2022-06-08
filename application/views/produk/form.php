<?php $this->load->view('element/head');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Produk
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Produk</a></li>
        <li class="active">Tambah</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="<?php echo site_url('produk/create');?>">Tambah</a></li>
            <li role="presentation"><a href="<?php echo site_url('produk');?>">List</a></li>
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
            <?php if(!empty($produk)){?>
            <form class="form-horizontal" method="POST" action="<?php echo site_url('produk/save').'/'.$produk['id'];?>">
            <?php }else{?>
            <form class="form-horizontal" method="POST" action="<?php echo site_url('produk/save');?>">
            <?php } ?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="kode">Kode</label>
                    <div class="col-sm-8">
                      <input type="text" name="product_id" value="<?php echo !empty($produk) ? $produk['id'] : '';?>" placeholder="Kode"  id="kode_produk" class="form-control" autocomplete="off" required/>
                      <span class="help-inline label label-danger" id="status_kode"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Nama</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo !empty($produk) ? $produk['product_name'] : '';?>" name="product_name" placeholder="Nama" id="name" class="form-control" required/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="date">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo !empty($produk) ? $produk['date'] : date('Y-m-d H:i:s');?>" id="date" class="form-control" disabled/>
                      <input type="hidden" name="product_date" value="<?php echo !empty($produk) ? $produk['date'] : date('Y-m-d H:i:s');?>" id="product_date" class="form-control"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="category_id">Kategori Produk</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="category_id" name="category_id">
                        <?php if(isset($category) && is_array($category)){?>
                          <?php foreach($category as $item){?>
                            <option value="<?php echo $item->id;?>" <?php if(!empty($produk) && $item->id == $produk['category_id']) echo 'selected="selected"';?>>
                              <?php echo $item->category_name;?>
                            </option>
                          <?php }?>
                        <?php }?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="address">Deskripsi</label>
                    <div class="col-sm-10">
                      <textarea name="product_desc" placeholder="Deskripsi" id="desc" class="form-control"/><?php echo !empty($produk) ? $produk['product_desc'] : '';?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="address">Quantity</label>
                    <div class="col-sm-10">
                      <input type="number" value="<?php echo !empty($produk) ? $produk['product_qty'] : '';?>" name="product_qty" placeholder="Quantity" id="qty" class="form-control"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="address">Harga Jual</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo !empty($produk) ? $produk['sale_price'] : '';?>" name="sale_price" placeholder="Harga Jual" id="sale" class="form-control" required/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="address">Harga GoFood</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo !empty($produk) ? $produk['sale_price_type1'] : '';?>" name="sale_price_type1" placeholder="Harga GoFood" id="product_sale_type1" class="form-control"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="address">Harga GrabFood</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo !empty($produk) ? $produk['sale_price_type2'] : '';?>" name="sale_price_type2" placeholder="Harga GrabFood" id="product_sale_type2" class="form-control"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="address">Harga ShoppeFood</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo !empty($produk) ? $produk['sale_price_type3'] : '';?>" name="sale_price_type3" placeholder="Harga ShoppeFood" id="product_sale_type3" class="form-control"/>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-md-3 col-md-offset-4">
                  <a class="btn btn-danger" href="<?php echo site_url('produk');?>">Batal</a>
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