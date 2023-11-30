<html>
    <title>Coffe Shop Kynn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <head>
        <body>
          <nav class="navbar navbar-expand-lg bg-black m-3" style="border-radius:5px;">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="home.php">Home</a>
                  </li>
                  
                  
                </ul>
                <div class="log">
                  <a href="index.php" class="btn btn-outline-dark btn-outline-info">Log Out</a>
                </div>
                <!-- <form class="d-flex" role="search">
                 
                  <button class="btn btn-outline-danger bg-priemphesis text-light" type="submit">Logout</button>
                </form> -->
              </div>
            </div>
          </nav>
          <div class="awal">
            <img src="image/steak.jpg" alt="">
          </div>
          <a href="#Produk" class>Product</a>
          <h3><b>List Menu Toko Steak Kynnn</b></h3>
          

          
            <div class="container" id="Produk">
              <div class="row">
              <?php
            $datasteak = [
              ["Tenderloin Steak","",70000 ,"image/tenderloin.jpg"],
              ["Sirloin Steak", "...",200000 ,"image/sirlion.jpg"],
              ["Chiken Steak", "...",35000 ,"image/chiken.jpg"],
              ["Wagyu Steak", "...",500000,"image/wagyu.jpg"],
              ["Rib Eye Steak", "...",1000000,"image/ribeye.jpg"],
              ["Tomahawk Steak", "...",2000000,"image/tomahawk.jpg"]
             ];

               foreach($datasteak as $tampil => $data){
              ?>

              <!-- Card -->

              <div class="card mb-3 bg-black text-light" style="max-width: 49%; margin: 5px; align-item: centers;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="<?=$data[3]?>" class="img-fluid rounded-start mt-5" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?=$data[0]?></h5>
                      <p class="card-text"><?=$data[1]?></p>
                      <p class="card-number"><b>Rp. <?=$data[02]?></b></p>
                      <p class="card-text"><small class="text-body-light">Last updated 3 mins ago</small></p>

                      <a href="transaksi.php?id=<?=$tampil?>" class="btn btn-outline-dark btn-light">Pilih Untuk Transaksi</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="col-lg-3 col-sm-12">
                <div class="card title">
                  <img src=<?=$data[3]?> alt="gambar">
                  <h4><b><?=$data[0]?></b></h4>
                  <div class="card-body">
                  <p class="card-text"><?=$data[1]?></p>
                  <h3><b>Rp<?=$data[2]?></b></h3>
                  <a href="transaksi.php?id=<?=$tampil?>" class="btn btn-outline-dark btn-secondary">Pilih obat</a>
                  </div>
                </div>
              </div> -->

              <?php } ?>
  
               
              <footer>
                <p>&copy; 2023 KynX. Hak Cipta Dilindungi.</p>
              </footer>
    </head>
</html>