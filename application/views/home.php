
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Kwitansi</title>
  </head>
  <body>
        

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Kwitansi ebunga</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <!-- <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul> -->
          </div>
        </nav>

        <div class="section mt-4">
          <div class="container">
            <form method="post" action="<?= base_url() ?>kwitansi/cetak">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pesanan</label>
                  <input type="text" class="form-control" id="" aria-describedby="" placeholder="Masukan penerimam pesanan" required="" name="pesanan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nilai Pesanan</label>
                  <input type="number" class="form-control" id="" placeholder="Masukan nilai pembelian" required="" name="nilai_pesanan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Untuk Pembayaran</label>
                  <textarea class="form-control" name="untuk_pembayaran" placeholder="Masukan keterangan untuk pembayaran"></textarea>
                </div>
                <div class="form-group">
               
                  <input type="submit" name="kirim"  class="btn btn-primary" value="Cetak">
               
              </div>
              </form>
          </div>
        </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
</html>