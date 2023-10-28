<!DOCTYPE html>
<?php
  include "function.php";
  session_start();

  $query = "SELECT * FROM tb_mahasiswa;";
  $sql = mysqli_query($conn, $query);

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Mahasiswa Universitas Sriwijaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b6077f8324.js" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.6/datatables.min.js"></script>
  </head>
  <!-- DATATABLES -->
  <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
  </script>
  <body>
    <!-- NAVBAR -->
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
    
    <!-- CONTENT -->
    <section style="margin-top: 6rem">
      <div class="container">
        <h1 class="text-center mb-4">Daftar Mahasiswa Universitas Sriwijaya</h1>
        <div class="ms-4">
          <a href="kelola/" type="button" class="btn btn-success mb-3"><i class="fa-solid fa-plus"></i> Tambahkan</a>
        </div>
        <?php
          if (isset($_SESSION['eksekusi'])):
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo $_SESSION['eksekusi']; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
          session_destroy();
          endif;
        ?>
        <div class="table-responsive mt-2 mb-5">
          <table id="example" class="table align-middle cell-border row-border hover" style="font-size: 2vmin">
            <thead>
              <tr>
                <th scope="col"><center>No.</center></th>
                <th scope="col"><center>NIM</center></th>
                <th scope="col"><center>Nama</center></th>
                <th scope="col"><center>Jenis Kelamin</center></th>
                <th scope="col"><center>Fakultas</center></th>
                <th scope="col"><center>Jurusan</center></th>
                <th scope="col"><center>Alamat</center></th>
                <th scope="col"><center>Kampus</center></th>
                <th scope="col"><center>Aksi</center></th>
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
                <td style="max-width: 240px"><?php echo $result["alamat"] ?></td>
                <td><?php echo $result["domisili_kampus"] ?></td>
                <td>                 
                    <div class="tombol mt-2 mb-2" style="width: 10vmin; margin: auto;">
                      <a href="kelola/?ubah=<?php echo $result["id_mahasiswa"] ?>" type="button" class="btn btn-primary btn-sm align-items-center" style="display: flex; justify-content: center; font-size: 2vmin"><i class="fa-solid fa-pencil me-1" style="font-size: 2vmin"></i>  Ubah</a>
                      <a href="process/?hapus=<?php echo $result["id_mahasiswa"] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" type="button" class="btn btn-danger btn-sm align-items-center" style="display: flex; justify-content: center; font-size: 2vmin"><i class="fa-solid fa-trash pe-1" style="font-size: 2vmin"></i>  Hapus</a>
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
      </div>
    </section>

    <script>

    </script>
  </body>
</html>
