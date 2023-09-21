<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Siswa</h3>

            <ul class="list-group">
                <?php foreach($data['siswa'] as $data) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $data['nama']; ?>
                        <a class="badge bg-primary text-decoration-none" href="<?= BASEURL; ?>/siswa/detail/<?= $data['id']; ?>">Detail</a>
                    </li>
                <?php endforeach; ?>    
            </ul>

        </div>
    </div>
</div>