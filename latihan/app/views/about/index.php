<div class="container">
    <div class="card mt-3">
        <h1 class="card-header" >Halaman about</h1>
        <div class="d-flex">
            <div class="col-1 card-body">
                <img class="rounded shadow" src="<?= BASEURL; ?>/img/Eula.jpg" alt="Eula">
            </div>
            <div class="col-11 card-body">
                <ul>
                    <li class="mt-1">Nama: <?= $data['nama']; ?></li>
                    <li class="mt-1">Status: <?= $data['status']; ?></li>
                    <li class="mt-1">Alamat: <?= $data['alamat']; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>