<!DOCTYPE html>

<?php
    include '../koneksi.php';

    $id_mahasiswa = '';
    $nim = '';
    $nama_mahasiswa = '';
    $jenis_kelamin = '';
    $fakultas = '';
    $jurusan = '';
    $alamat = '';
    $domisili_kampus = '';

    if (isset($_GET['ubah'])) {
        $id_mahasiswa = $_GET['ubah'];

        $query = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $nim = $result["nim"];
        $nama_mahasiswa = $result["nama_mahasiswa"];
        $jenis_kelamin = $result["jenis_kelamin"];
        $fakultas = $result["fakultas"];
        $jurusan = $result["jurusan"];
        $alamat = $result["alamat"];
        $domisili_kampus = $result["domisili_kampus"];
    }
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Mahasiswa Universitas Sriwijaya</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b6077f8324.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- NAVBAR -->
    <section>
      <nav class="navbar navbar-expand-lg fixed-top justify-content-center shadow" style="background-color: rgb(230, 153, 0);">
        <div class="container align-items-center">
          <a class="navbar-brand" href="#">
              <img src="../img/logo/unsri.png" alt="Logo" width="36" height="30" class="d-inline-block align-text-top" />
              Universitas Sriwijaya
          </a>
        </div>
      </nav>
    </section>

    <section style="margin-top: 6rem">
        <div class="container">
            <form action="../process/" method="POST">
                <?php
                if (isset($_GET['ubah'])) {
                ?>
                <h1 class="text-center mb-4">Ubah Data Mahasiswa</h1>
                <?php
                    } else {
                ?>
                <h1 class="text-center mb-4">Tambahkan Data Mahasiswa</h1>
                <?php
                    }
                ?>
                <input type="hidden" value="<?php echo $id_mahasiswa ?>" name="id_mahasiswa">
                <div class="row mb-3 align-items-center">
                    <label for="nim" class="col-sm-2 col-form-lable">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" name="nim" class="form-control" value="<?php echo $nim ?>" id="nim" required placeholder="Contoh: 09021182328020">
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <label for="nama" class="col-sm-2 col-form-lable">Nama</label>
                    <div class="col-sm-10">
                        <input type="text"  name="nama_mahasiswa" class="form-control" value="<?php echo $nama_mahasiswa ?>" id="nama" required placeholder="Contoh: Muhammad Arief Pratama">
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <label for="jkel" class="col-sm-2 col-form-lable">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="jkel" required name="jenis_kelamin">
                            <option <?php if ($jenis_kelamin == '') echo "selected"; ?> value="" disabled>Jenis Kelamin</option>
                            <option <?php if ($jenis_kelamin == "Laki-laki") echo "selected"; ?> value="Laki-laki">Laki-laki</option>
                            <option <?php if ($jenis_kelamin == "Perempuan") echo "selected"; ?> value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <label for="fakultas" class="col-sm-2 col-form-lable">Fakultas</label>
                    <div class="col-sm-10">
                        <input type="text" name="fakultas" class="form-control" value="<?php echo $fakultas ?>" id="fakultas" required placeholder="Contoh: Fakultas Ilmu Komputer">
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <label for="jurusan" class="col-sm-2 col-form-lable">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" name="jurusan" class="form-control" value="<?php echo $jurusan ?>" id="jurusan" required placeholder="Contoh: Teknik Informatika">
                    </div>
                </div>
                <div class="row mb-3 align-items-top">
                    <label for="alamat" class="col-sm-2 col-form-lable">Alamat Lengkap</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="alamat" required id="alamat" rows="3"><?php echo $alamat ?></textarea>
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <label for="kampus" class="col-sm-2 col-form-lable">Letak Kampus</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="domisili" name="domisili_kampus" required>
                            <option <?php if ($domisili_kampus == '') echo "selected"; ?> value="" disabled>Letak Kampus</option>
                            <option <?php if ($domisili_kampus == 'Indralaya') echo "selected"; ?> value="Indralaya">Indralaya</option>
                            <option <?php if ($domisili_kampus == 'Palembang') echo "selected"; ?> value="Palembang">Palembang</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3 mt-4 align-items-center">
                    <div class="col text-end me-3">
                        <?php
                            if (isset($_GET['ubah'])) {
                        ?>
                        <button type="sumbit" name="aksi" value="edit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan</button>
                        <?php
                            } else {
                        ?>
                        <button type="sumbit" name="aksi" value="add" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Tambahkan</button>
                        <?php
                            }
                        ?>
                        <a href="../" type="button" class="btn btn-danger"><i class="fa-solid fa-reply"></i> Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
  </body>
</html>
