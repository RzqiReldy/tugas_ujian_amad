<div class="container m-5">
              <form class="bg-success-subtle">
              <div class="row mb-3 g-3 text-dark">
                        <label for="input1" class="col-sm-2 col-form-label ms-4">No. Transaksi</label>
                  <div class="col-sm-5">
                        <input type="text" class="form-control" id="input1" name="input1" placeholder="Masukkan Nomer Transaksi" required>
                  </div>
                  </div>
                  <div class="row mb-3 text-dark">
                      <label for="input2" class="col-sm-2 col-form-label ms-4">Tanggal Transaksi</label>
                  <div class="col-sm-5">
                  <input type="date" class="form-control" id="input2" name="input2" required>
                  </div>
                  </div>
              <div class="row mb-3 text-dark">
                  <label for="input3" class="col-sm-2 col-form-label ms-4">Nama Costumer</label>
                  <div class="col-sm-5">
            <input type="text" class="form-control" id="input3" name="input3" placeholder="Masukkan Nama Anda" required>
          </div>
          </div>
            <div class="row mb-3 text-dark">
              <label for="input4" class="col-sm-2 col-form-label ms-4">Pilihan obat</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="Masukkan Obat Pilihan Anda" value="<?=$datasteak[$id][0]?>" readonly>
              </div>
            </div>
            <div class="row mb-3 text-dark">
              <label for="input5" class="col-sm-2 col-form-label ms-4">Harga Obat</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="hargaobat" placeholder="Harga Obat" value="<?=$datasteak[$id][2]?>" readonly>
              </div>
            </div>
            <div class="row mb-3 text-dark">
              <label for="input6" class="col-sm-2 col-form-label ms-4">Jumlah</label>
              <div class="col-sm-5">
                <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Pembelian Obat" required>
              </div>
            </div>
            
            <div class="col-md-5 ms-md-auto">
              <button type="button" class="btn btn-outline-success btn-light mb-3" onclick="hitungtotal()"> Hitung Total Harga</button>
            </div>

          </form>
          
        


          <form class="m-5">
            <div class="row mb-3 text-dark">
              <label for="input6" class="col-sm-2 col-form-label">Total Harga</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" id="totalhargaobat">
              </div>
            </div>
            <div class="row mb-3 text-dark">
                <label for="input6" class="col-sm-2 col-form-label">Pembayaran</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" id="pembayaran" >
              </div>
            </div>
            <div class="row mb-3 text-dark">
              <label for="input6" class="col-sm-2 col-form-label">Kembalian</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" id="kembalian">
            </div>
            <div class="col-md-5 ms-md-auto">
            <button type="button" class="btn btn-outline-success btn-light mb-3" onclick="hitungKembalian()"> Hitung Kembalian</button>
            </div>
            </form>
            <!-- Button trigger modal -->
            <div class="col-md-5 ms-md-auto">
            <button type="button" class="btn btn-outline-success btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Pembayaran Berhasil
            </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Notifikasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Transaksi Berhasil</p>
                    <p>Silahkan Kembali Ke Home</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal" ><a href="home.php" style="text-decoration:none; color:aliceblue" >Close</a></button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>