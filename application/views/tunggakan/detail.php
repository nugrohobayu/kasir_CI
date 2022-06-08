<?php $this->load->view('element/head');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tunggakan Transaksi Penjualan
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Tunggakan Transaksi Penjualan</a></li>
        <li>List</li>
        <li class="active">Detail</li>
      </ol>
    </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="<?php echo site_url('tunggakan');?>">List</a></li>
                    </ul>
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Detail Tunggakan Transaksi <?php echo $details[0]->id;?> <span class="bg-green"><?php echo $details[0]->is_cash == 1 ? "SUDAH LUNAS" : "";?></span></h3>
                            <div class="pull-right">
                                <span><a href="<?php echo site_url('tunggakan');?>" class="btn btn-sm btn-default">Back</a></span>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nomor Invoice</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Total QTY</th>
                                    <th>Total Harga</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Tunggakan</th>
                                    <th>Tanggal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo $details[0]->id;?></td>
                                    <td><?php echo $details[0]->customer_name;?></td>
                                    <td><?php echo $details[0]->total_item;?></td>
                                    <td>Rp<?php echo number_format($details[0]->total_price);?></td>
                                    <td><?php echo $details[0]->is_cash == 1 ? "Cash" : "Credit";?></td>
                                    <td class="bg-red"><i><?php echo $details[0]->pay_deadline_date;?></i></td>
                                    <td><?php echo $details[0]->date;?></td>
                                </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h4>List Produk</h4>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Quantity</th>
                                    <th>Harga/item</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(isset($details) && is_array($details)){ ?>
                                    <?php foreach($details as $transaksi){?>
                                        <tr>
                                            <td><?php echo $transaksi->product_name;?></td>
                                            <td><?php echo $transaksi->category_name;?></td>
                                            <td><?php echo $transaksi->quantity;?></td>
                                            <td>Rp<?php echo number_format($transaksi->price_item);?></td>
                                            <td>Rp<?php echo number_format($transaksi->subtotal);?></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th colspan="4" align="center">Total</th>
                                    <th>Rp<?php echo number_format($transaksi->total_price);?></th>
                                </tr>
                                </tfoot>
                            </table>
                            <?php if($details[0]->is_cash == 0){?>
                                <div class="text-center">
                                    <a href="<?php echo site_url('tunggakan/update_lunas').'/'.$details[0]->id;?>" onclick="return confirm('Yakin menandai ini sebagai lunas?');" class="btn btn-success">LUNAS?</a>
                                </div>
                            <?php }?>
                        </div>
                        <!-- /.box-body -->
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