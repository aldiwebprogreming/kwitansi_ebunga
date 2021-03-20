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
                  <h3 >Cetak Kwitansi</h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">

               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 20px;">
                  Tambah Kwitansi
              </button>
              

            <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Kwitansi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <form method="post" action="<?= base_url() ?>Kwitansi/cetak">

                  <?php 
                    
                    foreach ($query as $data) {}
                    $date = date('d');
                    if ($date == 01) {
                        $no = 1;
                      ?>
                        <input type="hidden" name="nomor" value="<?= $no; ?>">
                    <?php } else {?>


                   <?php 

                      if ($cek_nomor == null) { 

                        $no = 1;
                      ?>    

                   <input type="hidden" name="nomor" value="<?= $no; ?>">
                 <?php } else {

                      foreach ($nomor as $kode) {}
                      $no =  $kode['nomor'] +1;
                    ?>

                    <input type="hidden" name="nomor" value="<?= $no++; ?>">

                  <?php } } ?>

                   <input type="hidden" name="id_user" value="<?= $data['id'] ?>">

                  <br>
                   <div class="form-groub">
                    <label>Telah Terima Dari</label>
                    <input type="text" name="pesanan" class="form-control" placeholder="Masukan keterangan pesanan" required="" maxlength="48">
                   </div>

                   <br>
                   <div class="form-groub">
                    <label>Harga Pesanan</label>
                    <input type="number" name="nilai_pesanan" class="form-control" placeholder="Masukan harga pesanan" required="">
                   </div>
                   <small>Masukan harga tanpa (Rp) dan (.,).</small>
                   <br>
                    <br>


                   <div class="form-groub">
                    <label>Untuk Pembayaran</label>
                    <textarea class="form-control" name="untuk_pembayaran" placeholder="Masukan keterengan untuk pembayaran" required="" maxlength="158"></textarea>
                   </div>

                    <div class="form-groub">
                      <label>Tanggal</label>
                      <input type="date" name="tgl" class="form-control" placeholder="Masukan tanggal">
                    </div>

                    <!-- <br>
                   <div class="form-groub">
                    <label>Momor Terbit</label>
                   <input type="text" name="no_terbit" class="form-control">
                   </div> -->


               
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                </div>

                  </form>
              </div>
            </div>
          </div>

        <!-- Modal -->
            
              <!--   <a href="<?= base_url() ?>operator/add_operator" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah Operator</a> -->
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Pesanan</th>
                  <th>Nilai Pesanan</th>
                  <th>Untuk Pembayaran</th>
                  <th>Tanggal Terbit</th>
                  <th>Opsi</th>
                
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; ?>
                 <?php foreach ($kwitansi as $data) { ?>
                <tr> 
                    <td><?= $no++; ?></td>
                    <td><?= $data['pesanan'] ?></td>
                    <td><?= $data['nilai_pesanan'] ?></td>
                    <td><?= $data['untuk_pembayaran'] ?></td>
                    <td><?= $data['tgl_terbit'] ?></td>
                    
                    <td>
                  <!--     
                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal<?= $data['id'] ?>" style="">
                    Hapus
                     </button> -->

                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaldet<?= $data['id'] ?>" style="">
                    Detail
                     </button>


                     <!--  <a href="<?= base_url() ?>kwitansi/edit?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a> -->

                      <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?= base_url() ?>kwitansi/edit?id=<?= $data['id'] ?>">Edit</a>
                         <!--  <a class="dropdown-item" href="#">Print</a> -->
                          <a  target= "_blank" class="dropdown-item" href="<?= base_url() ?>kwitansi/cetak_kwitansi?id=<?= $data['id'] ?>">Cetak PDF</a>
                      </div>

                      <!-- <a href="<?= base_url() ?>kwitansi/cetak_kwitansi" class="btn btn-primary" target="_blank">Cetak</a> -->
                    </td>
                    
                   
                </tr>

          <!--   Modal Delet -->
            <div class="modal fade" id="modal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><b>Delete Kwitansi</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5>Yakin ingin menghapus data ini ?</h5>

                 <form method="post" action="<?= base_url() ?>Kwitansi/hapus_kwitansi">   
                 <input type="hidden" name="hapus" value="<?= $data['id'] ?>">            
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" name="kirim" class="btn btn-primary" value="Yes">
                </div>

                  </form>
              </div>
            </div>
          </div>

        <!-- Modal -->




        <!--   Modal Detail -->
            <div class="modal fade" id="modaldet<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><b>Detail kwitansi</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <style>
                    hr{
                      background-color: orange;
                    }
                  </style>

                  <label>Nomor : </label>
                  <p> <?= $data['no_kwitansi'] ?> </p>
                  <hr>

                  <label>Telah terima dari : </label>
                  <p> <?= $data['pesanan'] ?> </p>
                  <hr>

                  <label>Uang sejumlah : </label>
                  <p> <?= $data['terbilang'] ?> Rupiah </p>
                    <hr>

                   <label>Untuk pembayaran : </label>
                  <p> <?= $data['untuk_pembayaran'] ?>  </p>
                    <hr>

                    <?php $angka = $data['nilai_pesanan']; ?>
                   <label>Terbilang : </label>
                  <p>Rp <?= number_format($angka,0,',','.'); ?>,-</p>
                  <hr>

                  <label>Tanggal Kwitansi : </label>
                  <p> <?= $data['tanggal'] ?>  </p>
                    
                

                  
                             
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>

                  </form>
              </div>
            </div>
          </div>

        <!-- Modal -->
            

              <?php } ?>

                    
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Pesanan</th>
                  <th>Nilai Pesanan</th>
                  <th>Untuk Pembayaran</th>
                  <th>Tanggal Terbit</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            </div>
          </div>         
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.conte
      <td><</td>nt -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<script src="<?php echo base_url() ?>assets/alert.js"></script>
  <!-- <script>

   // function tambah(){
   //  $("#tambah").click(function(){

   //    swal("Maaf!", " promo tidak dapat ditambah", "error");
   //  })
   // }
  </script> -->
