<?php
  include "koneksi.php";

  $query = "SELECT * FROM tb_mahasiswa ORDER BY nim ASC;";
  $sql = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Mahasiswa Universitas Sriwijaya</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b6077f8324.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <section>
      <nav class="navbar navbar-expand-lg fixed-top shadow" style="background-color: rgb(230, 153, 0);">
        <div class="container align-items-center">
          <a class="navbar-brand" href="#">
              <img src="img/logo/unsri.png" alt="Logo" width="36" height="30" class="d-inline-block align-text-top" />
              Universitas Sriwijaya
          </a>
        </div>
      </nav>
    </section>
    
    <section style="margin-top: 6rem">
      <div class="container">
        <h1 class="text-center mb-4">Daftar Mahasiswa Universitas Sriwijaya</h1>
        <div class="table-responsive">
          <table class="table table-hover mt-3 align-middle table-bordered" style="font-size: 2vmin;">
            <thead>
              <tr>
                <th scope="col"><center>No.</center></th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kampus</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i = 1;
                while($result = mysqli_fetch_assoc($sql)) {
              ?>
              <tr>
                <th scope="row"><center><?php echo $i ?>.</center></th>
                <td><?php echo $result["nim"] ?></td>
                <td><?php echo $result["nama_mahasiswa"] ?></td>
                <td><?php echo $result["jenis_kelamin"] ?></td>
                <td><?php echo $result["fakultas"] ?></td>
                <td><?php echo $result["jurusan"] ?></td>
                <td><?php echo $result["alamat"] ?></td>
                <td><?php echo $result["domisili_kampus"] ?></td>
                <td>                 
                    <div class="tombol mt-2 mb-2">
                      <a href="kelola/?ubah=<?php echo $result["id_mahasiswa"] ?>" type="button" class="btn btn-primary btn-sm mb-2"><i class="fa-solid fa-pencil"></i> Ubah</a>
                      <a href="process/?hapus=<?php echo $result["id_mahasiswa"] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>  Hapus</a>
                    </div>
                </td>
              </tr>
              <?php
                $i++;
                }
              ?>
            </tbody>
          </table>
        </div>
        <div class="text-end">
          <a href="kelola/" type="button" class="btn btn-success me-4" style="margin-top: 0.5rem"><i class="fa-solid fa-plus"></i> Tambahkan</a>
        </div>
      </div>
    </section>
    
    
  </body>
</html>
