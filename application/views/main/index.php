<section>
    <div class="container">
        <h2>Data Rekomendasi</h2>
        <?= $this->session->flashdata('message') ?>
        <ul class="list-group my-3">
            <?php foreach ($items as $item) { ?>
                <li class="list-group-item"><?= $item['nama'] ?> <a href="<?= base_url('hapus/' . $item['id']) ?>" class="float-right badge badge-danger">Hapus</a></li>
            <?php } ?>
        </ul>
        <a href="<?= base_url('tambah') ?>" class="btn btn-primary m-2">Tambah Data</a>
        <a href="<?= base_url('update') ?>" class="btn btn-warning m-2">Ubah Bobot</a>
        <a href="<?= base_url('hasil') ?>" class="btn btn-success m-2">Lihat Hasil Rekomendasi</a>
    </div>
</section>