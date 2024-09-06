<main role="main" class="container">
<?php $this->load->view('layouts/_alert'); ?>
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Checkout Berhasil
                </div>
                <div class="card-body">
                    <h5>Nomor Order : <?= $content->invoice ?></h5>
                    <p>Terima kasih Sudah berbelanja</p>
                    <p>Silahkan lakukan Pembayaran untuk kami proses</p>
                    <ul>
                        <li>Lakukan Pembayaran Pada rekening <strong>BRI 7393748348</strong>a/n PT. Jaya tbk</li>
                        <li>Sertakan keterangan dengan nomor order: <strong> <?= $content->invoice ?></strong></li>
                        <li>Total Pembayaran: <strong>Rp<?= number_format($content->total,0,',','.')?>,-</strong></li>
                    </ul>
                    <p>Jika sudah, Kirimkan bukti transfer di halaman Konfirmasi atau bisa <a href="<?= base_url("/myorder/detail/$content->invoice")?>">Klik Disini</a></p>
                    <a href="<?= base_url('/') ?>" class="btn btn-primary"><i class="fas fa-angle-left"></i>Kembali</a>
                </div>
            </div>
          
        </div>
      </div>
    </main>