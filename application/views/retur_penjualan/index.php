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
        <li class="active">List</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs">
            <li role="presentation"><a href="<?php echo site_url('retur_penjualan/create');?>">Tambah</a></li>
            <li role="presentation" class="active"><a href="<?php echo site_url('retur_penjualan');?>">List</a></li>
          </ul>
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Tabel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php echo site_url('retur_penjualan?search=true');?>" method="GET">
                <input type="hidden" class="form-control" name="search" value="true"/>
                <div class="box-body pad">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="id">Nomor Invoice</label>
                      <input type="text" class="form-control" name="id" value="<?php echo !empty($_GET['id']) ? $_GET['id'] : '';?>"/>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Tanggal Mulai</label>
                      <div class="input-group date">
                        <input type="text" class="form-control datepicker-transaksi" name="date_from" value="<?php echo !empty($_GET['date_from']) ? $_GET['date_from'] : '';?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Tanggal Selesai</label>
                      <div class="input-group date">
                        <input type="text" class="form-control datepicker-transaksi" name="date_end" value="<?php echo !empty($_GET['date_end']) ? $_GET['date_end'] : '';?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="submit">&nbsp</label>
                      <input type="submit" value="Cari" class="form-control btn btn-warning">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="submit">&nbsp</label>
                      <a href="<?php echo site_url('retur_penjualan/export_csv');?>" class="form-control btn btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</a>
                    </div>
                  </div>
                </div>
              </form>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nomor Invoice</th>
                  <th>Total Item</th>
                  <th>Total Harga</th>
                  <th>Status</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($penjualans) && is_array($penjualans)){ ?>
                  <?php foreach($penjualans as $penjualan){?>
						<tr>
						  <td><?php echo $penjualan->id;?></td>
						  <td>
							<?php echo $penjualan->sales_id;?>
							<a target="_blank" href="<?php echo site_url('penjualan/detail').'/'.$penjualan->sales_id;?>" class="btn btn-xs btn-warning">
							  detail
							</a>
						  </td>
						  <td><?php echo $penjualan->total_item;?></td>
						  <td>Rp<?php echo number_format($penjualan->total_price);?></td>
						  <td><?php echo $penjualan->is_return == 1 ? "Selesai" : "Belum Selesai";?></td>
						  <td><?php echo $penjualan->date;?></td>
						  <td>
							<?php if($penjualan->is_return == 0){?>
								<a href="<?php echo site_url('retur_penjualan/edit').'/'.$penjualan->id;?>" class="btn btn-xs btn-default">Konfirmasi</a>
							<?php }else{ ?>
								<span class="btn-xs btn-success">Complete</span>		
							<?php } ?>
							
							<a onclick="return confirm('Are you sure you want to delete this penjualan?');" href="<?php echo site_url('retur_penjualan/delete').'/'.$penjualan->id;?>" class="btn btn-xs btn-danger">Hapus</a>
						  </td>
						</tr>
                  <?php } ?>
                <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="text-center">
              <?php echo $paggination;?>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('element/footer');?>