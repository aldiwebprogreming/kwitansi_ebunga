  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> dfd </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="nof"><?= $all ?></h3>

                <p>All Kwitansi</p>
              </div>
              <div class="icon">
                <i class="ion ion-card"></i>
              </div>
              <a href="#" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $kwitansiHariIni ?></h3>

                <p>Kwitansi Anda Hari Ini</p>
              </div>
              <div class="icon">
                <i class="ion ion-card"></i>
              </div>
              <a href="<?= base_url() ?>kwitansi/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $kwitansiAnda ?></h3>

                <p>Jumlah Kwitansi Anda</p>
              </div>
              <div class="icon">
                <i class="ion ion-card"></i>
              </div>
              <a href="<?= base_url() ?>kwitansi/data_kwitansi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

         
          <!-- card pengunjung hari ini -->
           <div class="col-lg-6 col-6" id="pengunjunghariini">
           
           
           </div>

           <!-- end card -->

          <!-- card jumlah pengunjung-->
          <div class="col-lg-6 col-6" id="jumlahpengunjung">
              
          </div>
          <!-- end card -->


          <!-- card visitor online -->
          <div class="col-lg-6 col-6" id="online">
            
            
          </div>


          <!-- end card -->




            <!-- /.card -->

          <!-- /.col-md-6 -->
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

  <!-- Main Footer -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
    setInterval(function(){            

        data_pengunjung();
        jumlah_pengunjung();
         online()
         message();
         notf_promo();
    }, 100 );
})

function data_pengunjung(){
  $.get("<?= base_url() ?>dashbord/data_pengunjung", function(data, success){
    $("#pengunjunghariini").html(data);
  });
}

function jumlah_pengunjung(){
  $.get("<?= base_url() ?>dashbord/jumlah_pengunjung", function(data,success){
      $("#jumlahpengunjung").html(data);
  });
}

function online(){
  $.get("<?= base_url() ?>dashbord/online", function(data, success){
      $("#online").html(data);

  });
}

 function notf_promo(){

      $.get("<?= base_url() ?>Dashbord/notf_promo", function(data,success){

        $("#nof").html(data);
      });
    }


</script>