
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>E-Menu</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <div class="section-body">
                <h2 class="section-title">E - Menu </h2>
                <p class="section-lead">Pesan Menu Cukup Scan Barcode dan Pilih Semaumu Dari Mejamu!</p>
              </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                  <div class="card">
                    <div class="card-header">
                      <h4>Silahkan Pilih Menu Makanan dan Minuman</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          @foreach ($menu as $data)
                          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                            <article class="article">
                              <div class="article-header">
                                <div class="article-image" data-background="assets/img/byurger.jpg" style="background-image: url(&quot;assets/img/news/img08.jpg&quot;);">
                                </div>
                                <div class="article-title">
                                  <h2><a href="#">{{ $data->nama }}</a></h2>
                                </div>
                              </div>
                              <div class="article-details">
                                <p>Kategori:  {{ $data->kategori }}</p>
                                <label>Rp. {{ $data->harga }}</label>
                                <div class="article-cta">
                                  <a href="#" class="btn btn-primary">Pilih</a>
                                </div>
                              </div>
                            </article>
                          </div>
                          @endforeach
                        </div>
                        
                    </div>
                    <div class="card-footer text-center">
                      <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="card">
                    <div class="card-header">
                      <h4>Pesanan Anda</h4>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                          <label>Atas Nama</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="far fa-user"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Nama">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Nomor Meja</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-th-large"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Nomor Meja">
                          </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                              <tbody><tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Action</th>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Nasi Padang</td>
                                <td><div class="form-group">
                                    <input type="text" class="form-control">
                                  </div></td>
                                <td>Rp. 50000</td>
                                <td><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                              </tr>
                            </tbody></table>
                          </div>
                      </div>
                    <div class="card-footer text-center">
                      <h5>Total = Rp. 30000</h5>
                      <button class="btn btn-success btn-lg mt-3" type="submit">Selesai</button>
                    </div>
                  </div>
                </div>
              </div>
          
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Made by <a href="#">Crafthon Dev</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>