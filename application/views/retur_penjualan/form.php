<?php $this->load->view('element/head');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Retur Transaksi Penjualan
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Retur Transaksi Penjualan</a></li>
        <li>Tambah</li>
        <li class="active">Detail</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="<?php echo site_url('retur_penjualan/create');?>">Tambah</a></li>
            <li role="presentation"><a href="<?php echo site_url('retur_penjualan');?>">List</a></li>
          </ul>
		  <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Retur Penjualan</h3>
              <?php if($this->session->flashdata('form_false')){?>
                <div class="alert alert-danger text-center">
                  <strong><?php echo $this->session->flashdata('form_false');?></strong>
                </div>
              <?php } ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(!empty($edit) && $edit){?>
            <form id="transaction-form" class="form-horizontal" method="POST" action="<?php echo site_url('retur_penjualan/update').'/'.$code_retur_penjualan;?>">
            <?php }else{?>
            <form id="transaction-form" class="form-horizontal" method="POST" action="<?php echo site_url('retur_penjualan/add_process');?>">
            <?php } ?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="kode">ID</label>
                    <div class="col-sm-8">
                      <input type="text" name="id" value="<?php echo !empty($code_retur_penjualan) ? $code_retur_penjualan : '';?>" class="form-control" disabled/>
                      <input type="hidden" name="retur_id" id="retur_id" value="<?php echo !empty($code_retur_penjualan) ? $code_retur_penjualan : '';?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="kode">Nomor Invoice</label>
                     <div class="col-sm-8">
                       <input type="text" name="id" value="<?php echo !empty($code_penjualan) ? $code_penjualan : '';?>" class="form-control" disabled/>
                       <input type="hidden" name="retur_code" id="retur_code" value="<?php echo !empty($code_penjualan) ? $code_penjualan : '';?>"/>
                     </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="date">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo !empty($date) ? $date : date('Y-m-d H:i:s');?>" id="date" class="form-control" disabled/>
                      <input type="hidden" name="retur_date" value="<?php echo !empty($date) ? $date : date('Y-m-d H:i:s');?>" id="retur_date" class="form-control"/>
                    </div>
                  </div>
                  <?php if(!empty($edit) && $edit){?>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="date">Pengembalian Barang</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="is_return" id="is_return">
                            <option value="1" <?php echo (int)$details[0]->is_return == 1 ? "selected" : "";?>>Ya</option>
                            <option value="0" <?php echo (int)$details[0]->is_return == 0 ? "selected" : "";?>>Tidak</option>
                        </select>
                    </div>
                  </div>
                  <?php } ?>
                </div>
                <div class="col-md-11 col-md-offset-1">
                  <h3 class="content-title">List Produk yang ingin diretur</h3>
                  <div class="content-process">
                    <table class="table">
                      <thead>
                        <tr>
                          <td>Kategori</td>
                          <td>Nama Barang</td>
                          <td>Jumlah</td>
                          <td>Harga Beli Satuan</td>
                          <td>Aksi</td>
                        </tr>
                      </thead>
                      <tbody id="transaksi-item">
                        <?php if(!empty($carts) && is_array($carts)){?>
                            <?php foreach($carts['data'] as $k => $cart){?>
                              <tr id="<?php echo $k;?>" class="cart-value">
                                <td><?php echo $cart['category_name'];?></td>
                                <td><?php echo $cart['name'];?></td>
                                <td><input type="number" row-id="<?php echo $k;?>" class="retur_penjualan_qty" value="<?php echo $cart['qty'];?>" max="<?php echo $cart['qty'];?>" min="1"/></td>
                                <td>Rp<?php echo number_format($cart['price']);?></td>
                                <td><span class="btn btn-danger btn-sm transaksi-delete-item" data-cart="<?php echo $k;?>">x</span></td>
                              </tr>
                            <?php }?>
                        <?php }?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td>Total Penjualan</td>
                          <td id="total-pembelian"><?php echo !empty($carts) ? 'Rp'.number_format($carts['total_price']) : '';?></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-md-3 col-md-offset-4">
                  <a class="btn btn-danger" href="<?php echo site_url('retur_penjualan');?>">Batal</a>
                  <a class="btn btn-warning pull-right" href="#" id="submit-transaksi">Simpan</a>
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