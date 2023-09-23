<div class="container mt-3">
    <div class="row">
        <div class="col-6">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Siswa
            </button>
            
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