<?= $this->extend('layout');?>
<?= $this->section('main')?>

<div class="container">
  <h3>Review dan Submit Order</h3>
  <hr />
  <table>
    <tr>
      <td>Menjadi Master Mewing</td>
      <td>@1</td>
      <td>Rp800,000</td>
    </tr>
  </table>
  <h3 class="mt-3">Total</h3>
  <hr />
  <span>Rp800,000</span>
  <h3 class="mt-3">Alamat Penerima</h3>
  <hr />
  <p>Jln Simp. Sungai Duren, Mr.Jambi</p>
  <h3 class="mt-3">Metode Bayar</h3>
  <hr />
  <p>Transfer Bank</p>
  <p>No Rekening: Jhon Smith, BNI, 10881223</p>
  <div class="mt-5">
    <form action="<?= base_url('submit')?>" method="POST">
    <button type="submit" class="btn btn-success">Order</button>
    </form>
  </div>
</div>

<?= $this->endSection();?>
