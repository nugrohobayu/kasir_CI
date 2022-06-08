<?php $this->load->view('element/head');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Beranda
      </h1>
     <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon"><i class="fa fa-cart-arrow-down"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Kasir</span>
              <span class="info-box-number"><?php echo $suppliers;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pelanggan</span>
              <span class="info-box-number"><?php echo $customers;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-file"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Produk</span>
              <span class="info-box-number"><?php echo $products;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-bars"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kategori Produk</span>
              <span class="info-box-number"><?php echo $categories;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
	  <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">H-7 Jatuh Tempo Pembayaran</h3>

              <div class="box-tools pull-right">
                <button data-widget="collapse" class="btn btn-box-tool" type="button"><i class="fa fa-minus"></i></button>
                <button data-widget="remove" class="btn btn-box-tool" type="button"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <!-- strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong -->
                  </p>

                  <div class="chart">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
						  <th>Nomor Invoice</th>
						  <th>Nama Pelanggan</th>
						  <th>Telepon</th>
						  <th>Total Produk</th>
						  <th>Total</th>
						  <th>Jatuh Tempo</th>
						</tr>
						</thead>
						<tbody>
						<?php if(isset($tunggakans) && is_array($tunggakans)){ ?>
						  <?php foreach($tunggakans as $tunggakan){?>
							<tr>
							  <td><?php echo $tunggakan->id;?></td>
							  <td><?php echo $tunggakan->customer_name;?></td>
							  <td><?php echo $tunggakan->customer_phone;?></td>
							  <td><?php echo $tunggakan->total_item;?></td>
							  <td>Rp<?php echo number_format($tunggakan->total_price);?></td>
							  <td><?php echo $tunggakan->pay_deadline_date;?></td>
							</tr>
						  <?php } ?>
						<?php } ?>
						</tbody>
					  </table>
					  <div class="clearfix">
						<a href="<?php echo site_url('tunggakan');?>" class="btn btn-warning" style="float: right;">Tampilkan Semua</a>
					  </div>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
				  <div class="info-box bg-green">
					<span class="info-box-icon"><i class="fa fa-shopping-bag"></i></span>
					<div class="info-box-content">
					  <span class="info-box-text">Penjualan Harian</span>
					  <span class="info-box-number"><?php echo count($penjualan_harian);?></span>
					</div>
				  </div>
				  <div class="info-box bg-green">
					<span class="info-box-icon"><i class="fa fa-shopping-basket"></i></span>
					<div class="info-box-content">
					  <span class="info-box-text">Penjualan Bulanan</span>
					  <span class="info-box-number"><?php echo count($penjualan_bulanan);?></span>
					</div>
				  </div>
				  <div class="info-box bg-red">
					<span class="info-box-icon"><i class="fa fa-exchange"></i></span>
					<div class="info-box-content">
					  <span class="info-box-text">Retur Penjualan</span>
					  <span class="info-box-number"><?php echo count($sales_retur);?></span>
					</div>
				  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('element/footer');?>