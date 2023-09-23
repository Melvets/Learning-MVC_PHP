<div class="container mt-3">

    <div class="row">

      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>

    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Siswa
            </button>
            
            <h3>Daftar Siswa</h3>

            <ul class="list-group">
                <?php foreach($data['siswa'] as $data) : ?>
                    <li class="list-group-item">
                        <?= $data['nama']; ?>
                        <a class="badge bg-danger text-decoration-none float-end ms-1" href="<?= BASEURL; ?>/siswa/hapus/<?= $data['id']; ?>" onclick="return confirm('yakin?')" >Hapus</a>
                        <a class="badge bg-primary text-decoration-none float-end ms-1" href="<?= BASEURL; ?>/siswa/detail/<?= $data['id']; ?>">Detail</a>
                    </li>
                <?php endforeach; ?>    
            </ul>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/siswa/tambah" method="post">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan" aria-label="Default select example">
                <option selected>Pilih jurusan</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                <option value="Pemasaran">Pemasaran</option>
                <option value="Usaha Layanan Pariwisata">Usaha Layanan Pariwisata</option>
                <option value="Manajemen Perkantoran dan Layanan Bisnis">Manajemen Perkantoran dan Layanan Bisnis</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>