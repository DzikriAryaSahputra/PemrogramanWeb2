  <?= $this->extend('layout');?>

  <?= $this->section('main')?>
  <div class="container">
    <div class="row bg-primary-subtle">
      <div class="col-6 p-5">
        <h1>Selamat Datang Di Toko Buku Online Sigma</h1>
        <p>Kami Menyediakan Berbagai Jenis Buku Dari Berbagai Penerbit.</p>
        <button class="btn btn-warning">Lihat Produk</button>
      </div>
      <div class="col-6 p-4">
        <h1>Temukan Buku Yang Ingin Anda Baca</h1>
        <form action="<?= base_url('search')?>" method="GET">
          <div class="mb-3">
            <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Buku">
          </div>
          <div class="mb-3">
            <select name="kategori" id="kategori" class="form-control">
              <option value="">-- Pilih Kategori--</option>
              <option value="">Romance</option>
              <option value="">Action</option>
            </select>
          </div>
          <div class="mb-3">
            <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang" class="form-control">
          </div>
          <div class="mb-3">
            <button class="btn btn-primary">Cari</button>
          </div>
        </form>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12">
        <h2 class="mb-3">Buku Best Seller</h2>
        <div class="row">
          <div class="col-4">
          <div class="card">
              <img src="<?= base_url() ?>images/6.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">bibi gils</h5>
                <p class="card-text">Rp 43.0000</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="<?= base_url() ?>images/1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Menjadi Master Mewing</h5>
                <p class="card-text">Rp 800.0000</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
           </div>
          <div class="col-4">
          <div class="card" >
              <img src="<?= base_url() ?>images/2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cantik itu luka</h5>
                <p class="card-text">Rp 50.0000</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-4">
          <div class="card">
              <img src="<?= base_url() ?>images/3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cerita-Cerita Bahagia</h5>
                <p class="card-text">Rp 60.0000</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-4">
          <div class="card" >
              <img src="<?= base_url() ?>images/4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">The star and i</h5>
                <p class="card-text">Rp 90.0000</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-4">
          <div class="card">
              <img src="<?= base_url() ?>images/5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Aku pergi</h5>
                <p class="card-text">Rp 40.0000</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection();?>