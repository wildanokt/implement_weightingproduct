<section>
    <div class="container">
        <h2>Update Bobot</h2>
        <form action="<?= base_url('update') ?>" class="my-2" method="post">
            <input type="hidden" name="id" value="1">
            <div class="form-group">
                <label for="jarak">Jarak dari pusat kota (KM)</label>
                <input type="text" name="jarak" class="form-control" id="jarak" placeholder="Jarak dari pusat kota" value="<?= $jarak ?>">
            </div>
            <div class="form-group">
                <label for="htm">Harga tiket masuk (Rupiah)</label>
                <input type="text" name="htm" class="form-control" id="htm" placeholder="Harga tiket masuk" value="<?= $htm ?>">
            </div>
            <div class="form-group">
                <label for="jumlah_kolam">Jumlah kolam renang</label>
                <input type="text" name="jumlah_kolam" class="form-control" id="jumlah_kolam" placeholder="Jumlah kolam renang" value="<?= $jumlah_kolam ?>">
            </div>
            <div class="form-group">
                <label for="kualitas_air">Kualitas air (1 - 10)</label>
                <input type="text" name="kualitas_air" class="form-control" id="jumlah_kolam" placeholder="Kualitas Air" value="<?= $kualitas_air ?>">
            </div>
            <div class="form-group">
                <label for="rating">Rating keseluruhan (1 - 10)</label>
                <input type="text" name="rating" class="form-control" id="rating" placeholder="Rating keseluruhan" value="<?= $rating ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</section>