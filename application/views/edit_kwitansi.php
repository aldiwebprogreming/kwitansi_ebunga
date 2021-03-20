  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 >Edit data kwitansi</h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">
                <div class="row">

                  <?php foreach ($edit as $data) {
                    
                  } ?>
                   <div class="col-lg-6">

                  <form method="post" action="">
                        
                  <br>
                   <div class="form-groub">
                    <label>Telah Terima Dari</label>
                    <input type="text" name="pesanan" class="form-control" placeholder="Masukan keterangan pesanan" value="<?= $data['pesanan'] ?>">
                    <small style="color: red"><?php echo form_error('pesanan'); ?></small>
                   </div>

                   <br>
                   <div class="form-groub">
                    <label>Harga Pesanan</label>
                    <input type="number" name="nilai_pesanan" class="form-control" placeholder="Masukan harga pesanan" value="<?= $data['nilai_pesanan'] ?>">
                   </div>
                  <small style="color: red"><?php echo form_error('nilai_pesanan'); ?></small>
                   <small>Masukan harga tanpa (Rp) dan (.,).</small>
                   <br>
                    <br>


                   <div class="form-groub">
                    <label>Untuk Pembayaran</label>
                    <textarea class="form-control" name="untuk_pembayaran" placeholder="Masukan keterengan untuk pembayaran"><?= $data['untuk_pembayaran'] ?></textarea>
                     <small style="color: red"><?php echo form_error('untuk_pembayaran'); ?></small>
                   </div>

                     <div class="form-groub">
                    <label>Tanggal</label>
                    <input type="date" name="tgl" class="form-control" value="<?= $data['tanggal'] ?>">
                  
                   </div>


                


                   <br>
                   <div class="form-groub">
                    <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                   </div>


                    </form>
                
                </div>
              </div>
              </div>
            </div>
          </div>         
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

