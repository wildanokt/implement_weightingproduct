<section>
    <div class="container">
        <h2>Hasil Rekomendasi</h2>
        <ul class="list-group my-3">
            <?php
            $i = 1;
            foreach ($rekomendasi as $key => $item) {
                if ($i < 4) { ?>
                    <li class="list-group-item"><?= $key ?><span class="float-right badge badge-success">Rekomendasi <?= $i ?></span></li>
                <?php } else { ?>
                    <li class="list-group-item"><?= $key ?></li>
            <?php }
                $i++;
            } ?>
        </ul>
        <a href="<?= base_url() ?>" class="btn btn-success m-2">Kembali</a>
    </div>
</section>