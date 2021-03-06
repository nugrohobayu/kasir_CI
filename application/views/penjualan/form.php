<?php $this->load->view('element/head');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transaksi Penjualan
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Transaksi Penjualan</a></li>
        <li class="active">Transaksi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs">
          <li role="presentation" class="active"><a href="<?php echo site_url('penjualan/create');?>">Tambah</a></li>
          <li role="presentation"><a href="<?php echo site_url('penjualan');?>">List</a></li>
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

            <?php if(!empty($penjualan)){?>
            <form id="transaction-form" class="form-horizontal" method="POST" action="<?php echo site_url('penjualan/update').'/'.$penjualan[0]->id;?>">
            <?php }else{?>
            <form id="transaction-form" class="form-horizontal" method="POST" action="<?php echo site_url('penjualan/add_process');?>">
            <?php } ?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="kode">Nomor Invoice</label>
                    <div class="col-sm-8">
                      <input type="text" name="id" value="<?php echo !empty($code_penjualan) ? $code_penjualan : '';?>" class="form-control" disabled/>
                      <input type="hidden" name="penjualan_id" id="penjualan_id" value="<?php echo !empty($code_penjualan) ? $code_penjualan : '';?>"/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="category_id">Pelanggan</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="customer_id" name="customer_id">
                        <?php if(isset($customers) && is_array($customers)){?>
                          <?php foreach($customers as $item){?>
                            <option value="<?php echo $item->id;?>" <?php if(!empty($penjualan) && $item->id == $penjualan[0]->custumer_id) echo 'selected="selected"';?>>
                              <?php echo $item->customer_name;?>
                            </option>
                          <?php }?>
                        <?php }?>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="date">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="text" value="<?php echo date('Y-m-d H:i:s');?>" id="date" class="form-control" disabled/>
                      <input type="hidden" name="supplier_date" value="<?php echo date('Y-m-d H:i:s');?>" id="supplier_date" class="form-control"/>
                    </div>
                  </div>
                  
                  <!-- <div class="form-group">
                    <label class="col-sm-4 control-label" for="category_id">Metode Pembayaran</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="is_cash" name="is_cash">
                        <option value="1" <?php if(!empty($penjualan) && $penjualan[0]->is_cash == true) echo 'selected="selected"';?>>
                          Cash
                        </option>
                        <option value="0" <?php if(!empty($penjualan) && $penjualan[0]->is_cash == false) echo 'selected="selected"';?>>
                          Bayar Nanti
                        </option>
                      </select>
                    </div>
                  </div>  -->

                </div>
                <div class="col-md-11 col-md-offset-1">
                  <h3 class="content-title">Transaksi Penjualan </h3>
                  <div class="content-process">
                    <table class="table">
                      <thead>
                        <tr>
                          <td>Kategori</td>
                          <td>Daftar Menu</td>
                          <td>Jumlah</td>
                          <td>Harga Beli Satuan</td>
                          <td></td>
                        </tr>
                      </thead>
                      <tbody id="transaksi-item">
                        <tr>
                          <td>
                            <select class="form-control" id="transaksi_category_id" name="category_id">
                              <option value="0">
                                Silahkan Pilih Kategori
                              </option>
                              <?php if(isset($kategoris) && is_array($kategoris)){?>
                                <?php foreach($kategoris as $item){?>
                                  <option value="<?php echo $item->id;?>">
                                    <?php echo $item->category_name;?>
                                  </option>
                                <?php }?>
                              <?php }?>
                            </select>
                          </td>
                          <td>
                            <select class="form-control" id="transaksi_product_id" name="product_id"></select>
                          </td>
                          <td>
                            <input type="number" id="jumlah" class="form-control" name="jumlah" min="1" value="1"/>
                          </td>
                          <td>
                            <select class="form-control" id="sale_price" name="sale_price"></select>
                          </td>
                          <td>
                            <a href="#" class="btn btn-warning" id="tambah-barang">Beli</a>
                          </td>
                        </tr>
                        <?php if(!empty($carts) && is_array($carts)){?>
                            <?php foreach($carts['data'] as $k => $cart){?>
                              <tr id="<?php echo $k;?>" class="cart-value">
                                <td><?php echo $cart['category_name'];?></td>
                                <td><?php echo $cart['name'];?></td>
                                <td><?php echo $cart['qty'];?></td>
                                <td>Rp<?php echo number_format($cart['price']);?></td>
                                <td><span class="btn btn-danger btn-sm transaksi-delete-item" data-cart="<?php echo $k;?>">x</span></td>
                              </tr>
                            <?php }?>
                        <?php }?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td>Total </td>
                          <td id="total-pembelian"><?php echo !empty($carts) ? 'Rp'.number_format($carts['total_price']) : '';?></td>
                          
                        </tr>
                        <tr>
                        <td>Uang Diterima </td>
                        <td>
                        <input type="number" placeholder="" id="uang-terima"> 
                        </td>
                        </tr>

                        <script src="" type="text/javascript">
                            function kembali(jumlah){
                              var total = document.getElementById('total-pembelian');
                              var terima = document.getElementById('total');
                              var hasil = document.getElementById('hasil');
                              hasil.innerHTML = terima.value-total.value;
                            }
                        </script>

                        <tr>
                        <td>Kembalian</td>
                        <td id="kembali"  ></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-md-3 col-md-offset-4">
                  <a class="btn btn-danger" href="<?php echo site_url('penjualan');?>">Batal</a>
                  <a class="btn btn-primary pull-right" href="#" id="submit-transaksi">Bayar</a>
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