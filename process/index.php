<?php
    include "../koneksi.php";

    if (isset($_POST["aksi"])) {
        if ($_POST["aksi"] == "add") {
            $nim = $_POST['nim'];
            $nama_mahasiswa = $_POST['nama_mahasiswa'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $fakultas = $_POST['fakultas'];
            $jurusan = $_POST['jurusan'];
            $alamat = $_POST['alamat'];
            $domisili_kampus = $_POST['domisili_kampus'];

            $query = "INSERT INTO tb_mahasiswa VALUES(null, '$nim', '$nama_mahasiswa', '$jenis_kelamin', '$fakultas', '$jurusan', '$alamat', '$domisili_kampus')";
            $sql = mysqli_query($conn, $query);

            if ($sql) {
                header("location: ../");
            } else {
                echo $query;
            }
        } else if ($_POST["aksi"] == "edit") {
            // var_dump($_POST["nama_mahasiswa"]);

            $id_mahasiswa = $_POST["id_mahasiswa"];
            $nim = $_POST["nim"];
            $nama_mahasiswa = $_POST["nama_mahasiswa"];
            $jenis_kelamin = $_POST["jenis_kelamin"];
            $fakultas = $_POST["fakultas"];
            $jurusan = $_POST["jurusan"];
            $alamat = $_POST["alamat"];
            $domisili_kampus = $_POST["domisili_kampus"];

            $query = "UPDATE tb_mahasiswa SET id_mahasiswa = '$id_mahasiswa', nim = '$nim', nama_mahasiswa = '$nama_mahasiswa', jenis_kelamin = '$jenis_kelamin', fakultas = '$fakultas', jurusan = '$jurusan', alamat = '$alamat', domisili_kampus = '$domisili_kampus' WHERE id_mahasiswa = '$id_mahasiswa';";
            $sql = mysqli_query($conn, $query);
            
            if ($sql) {
                header("location: ../");
            } else {
                echo $query;
            }
        }
    }

    if (isset($_GET["hapus"])) {
        $id_mahasiswa = $_GET["hapus"];
        $query = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("location: ../");
        } else {
            echo $query;
        }
        //echo "Hapus Data  <a href='../'>HOME</a>";
    }
?>