<section>
    <div class="container">
        <h2>Tambah Alternatif</h2>
        <form action="<?= base_url('tambah') ?>" class="my-2" method="post">
            <div class="form-group">
                <label for="nama">Nama lokasi wisata</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama lokasi wisata">
            </div>
            <div class="form-group">
                <label for="jarak">Jarak dari pusat kota (KM)</label>
                <input type="text" name="jarak" class="form-control" id="jarak" placeholder="Jarak dari pusat kota">
            </div>
            <div class="form-group">
                <label for="htm">Harga tiket masuk (Rupiah)</label>
                <input type="text" name="htm" class="form-control" id="htm" placeholder="Harga tiket masuk">
            </div>
            <div class="form-group">
                <label for="jumlah_kolam">Jumlah kolam renang</label>
                <input type="text" name="jumlah_kolam" class="form-control" id="jumlah_kolam" placeholder="Jumlah kolam renang">
            </div>
            <div class="form-group">
                <label for="kualitas_air">Kualitas air (1 - 10)</label>
                <input type="text" name="kualitas_air" class="form-control" id="jumlah_kolam" placeholder="Kualitas Air">
            </div>
            <div class="form-group">
                <label for="rating">Rating keseluruhan (1 - 10)</label>
                <input type="text" name="rating" class="form-control" id="rating" placeholder="Rating keseluruhan">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</section>