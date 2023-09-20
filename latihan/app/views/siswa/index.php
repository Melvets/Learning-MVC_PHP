<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Siswa</h3>

            <?php foreach($data['siswa'] as $data) : ?>
                <ul>
                    <li><?= $data['nama']; ?></li>
                    <li><?= $data['nis']; ?></li>
                    <li><?= $data['email']; ?></li>
                    <li><?= $data['jurusan']; ?></li>
                </ul>
            <?php endforeach; ?>    

        </div>
    </div>
</div>