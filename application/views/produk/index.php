<?php $this->load->view('element/head');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Menu 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Daftar Menu</a></li>
        <li class="active">List</li>
      </ol>
    </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs">
                        <li role="presentation"><a href="<?php echo site_url('produk/create');?>">Tambah</a></li>
                        <li role="presentation" class="active"><a href="<?php echo site_url('produk');?>">List</a></li>
                    </ul>
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Tabel</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="<?php echo site_url('produk?search=true');?>" method="GET">
                                <input type="hidden" class="form-control" name="search" value="true"/>
                                <div class="box-body pad">
                                    <?php echo search_form('product');?>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="submit">&nbsp</label>
                                            <input type="submit" value="Cari" class="form-control btn btn-warning">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="submit">&nbsp</label>
                                            <a href="<?php echo site_url('produk/export_csv').get_uri();?>" class="form-control btn btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>QTY</th>
                                    <th>Harga Jual</th>
                                    <th>Harga GoFood</th>
                                    <th>Harga GrabFood</th>
                                    <th>Harga ShoppeFood</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(isset($produks) && is_array($produks)){ ?>
                                    <?php foreach($produks as $produk){?>
                                        <tr>
                                            <td><?php echo $produk->id;?></td>
                                            <td><?php echo $produk->product_name;?></td>
                                            <td><?php echo $produk->product_desc;?></td>
                                            <td><?php echo $produk->product_qty;?></td>
                                            <td><?php echo $produk->sale_price;?></td>
                                            <td><?php echo $produk->sale_price_type1;?></td>
                                            <td><?php echo $produk->sale_price_type2;?></td>
                                            <td><?php echo $produk->sale_price_type3;?></td>
                                            <td>
                                                <a href="<?php echo site_url('produk/edit').'/'.$produk->id;?>" class="btn btn-xs btn-warning">Edit</a>
                                                <a onclick="return confirm('Are you sure you want to delete this product?');" href="<?php echo site_url('produk/delete').'/'.$produk->id;?>" class="btn btn-xs btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                  <!--  <th>Kode</th>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>QTY</th>
                                    <th>Price</th>
                                    <th>Price 1</th>
                                    <th>Price 2</th>
                                    <th>Price 3</th>
                                    <th>Action</th> -->
                                </tr>
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