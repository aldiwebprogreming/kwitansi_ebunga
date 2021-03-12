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
                  <h3 >Cetak kwitansi</h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                   <div class="col-lg-6">
                    <form method="post" action="<?= base_url() ?>kwitansi/cetak">
                        <label>Pesanan</label>
                        <input type="text" id="cek" name="pesanan" class="form-control" /><br />

                        <label>Harga Pesanan</label>
                        <input type="number" id="cek" name="nilai_pesanan" class="form-control" /><br />
                        
                        <label>Untuk Pembayaran</label>
                        <input type="text" id="cek" name="untuk_pembayaran" class="form-control"/><br />   


                        <input type="submit" id="kirim" name="kirim" class="btn btn-primary" value="Submit" disabled="disabled"/>
                    </form>
                     <!-- <form method="post" action="<?= base_url() ?>kwitansi/cetak">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Pesanan</label>

                          <input type="text" id="cek" class="form-control" placeholder="Masukan penerimam pesanan" required="" name="pesanan">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Harga Pesanan</label>

                          <input type="number" id="cek" class="form-control"  placeholder="Masukan nilai pembelian" required="" name="nilai_pesanan">
                          <small>Masukan harga tanpa (Rp) dan (.,)</small>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Untuk Pembayaran</label>
                          <textarea id="cek" class="form-control"  name="untuk_pembayaran" placeholder="Masukan keterangan untuk pembayaran"></textarea>
                        </div>
                        <div class="form-group">
                       
                          <input type="submit" id="add_data" name="kirim" class="btn btn-primary" value="Cetak" disabled="disabled">
                       
                      </div>
                    </form> -->


                
                </div>

                <div class="col-lg-6" id="dataK" style="display: none;">
                    <h3>Data Kwitansi</h3>
                     <table id="" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Pesanan</th>
                  <th>Harga</th>
                  <th>Untuk Pembayaran</th>
                  <th>Opsi</th>
                
                </tr>
                </thead>
                <tbody>
                
                <tr> 
                    <td>dfd</td>
                    <td>dfdfdf</td>
                    <td>dfdfd</td>
                    <td><a href="<?= base_url() ?>operator/hapus?id" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Cetak Kwitansi</a></td>
                </tr>

                      
            
                </tbody>
                <tfoot>
              </table>


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

<script>
  $(document).ready(function(){

    $("#kirim").click(function(){

      $("#dataK").show();

    })
  })
</script>


<script>
 $(document).ready(function() {
    $('form > input#cek').keyup(function() {
        var empty = false;
        $('form > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('#kirim').attr('disabled', 'disabled');
        } else {
            $('#kirim').removeAttr('disabled');
        }
    });
})()
</script>