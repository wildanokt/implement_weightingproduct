<section>
    <div class="container">
        <div class="row my-3">
            <h3>Data Bobot</h3>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Kriteria</th>
                        <th scope="col">Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jarak</td>
                        <td><?= $bobot['jarak'] ?></td>
                    </tr>
                    <tr>
                        <td>Harga tiket masuk </td>
                        <td><?= $bobot['htm'] ?></td>
                    </tr>
                    <tr>
                        <td>Rating </td>
                        <td><?= $bobot['rating'] ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Kolam </td>
                        <td><?= $bobot['jumlah_kolam'] ?></td>
                    </tr>
                    <tr>
                        <td>Kualitas air </td>
                        <td><?= $bobot['jumlah_kolam'] ?></td>
                    </tr>
                    <tr class="">
                        <td><b>Total Bobot</b> </td>
                        <td><b><?= $total_bobot ?></b></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row my-3">
            <h3>Data Prioritas Bobot</h3>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Kriteria</th>
                        <th scope="col">Prioritas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jarak</td>
                        <td><?= $prioritas['jarak'] ?></td>
                    </tr>
                    <tr>
                        <td>Harga tiket masuk </td>
                        <td><?= $prioritas['htm'] ?></td>
                    </tr>
                    <tr>
                        <td>Rating </td>
                        <td><?= $prioritas['rating'] ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Kolam </td>
                        <td><?= $prioritas['jumlah_kolam'] ?></td>
                    </tr>
                    <tr>
                        <td>Kualitas air </td>
                        <td><?= $prioritas['jumlah_kolam'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row my-3">
            <h3>Data Alternatif</h3>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Jarak (KM)</th>
                        <th scope="col">Harga Tiket Masuk (Rupiah)</th>
                        <th scope="col">Rating (1-10)</th>
                        <th scope="col">Jumlah Kolam</th>
                        <th scope="col">Kualitas Air (1-10)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $item) { ?>
                        <tr>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['jarak'] ?></td>
                            <td><?= $item['htm'] ?></td>
                            <td><?= $item['rating'] ?></td>
                            <td><?= $item['jumlah_kolam'] ?></td>
                            <td><?= $item['kualitas_air'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row my-3">
            <h3>Vector Si</h3>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Jarak (KM)</th>
                        <th scope="col">Harga Tiket Masuk (Rupiah)</th>
                        <th scope="col">Rating (1-10)</th>
                        <th scope="col">Jumlah Kolam</th>
                        <th scope="col">Kualitas Air (1-10)</th>
                        <th scope="col">Vector SI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($si as $item) { ?>
                        <tr>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['jarak'] ?></td>
                            <td><?= $item['htm'] ?></td>
                            <td><?= $item['rating'] ?></td>
                            <td><?= $item['jumlah_kolam'] ?></td>
                            <td><?= $item['kualitas_air'] ?></td>
                            <td><?= $item['vector_si'] ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total Vector SI</td>
                        <td><?= $total_si ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row my-3">
            <h3>Vector Vi dan ranking</h3>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Vector Vi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1;
                    foreach ($rekomendasi as $key => $item) { ?>
                        <tr>
                            <td><?= $num ?></td>
                            <td><?= $key ?></td>
                            <td><?= $item ?></td>
                        </tr>
                    <?php $num++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>