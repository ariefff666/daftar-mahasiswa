<?php
    include 'koneksi.php';

    function tambah_data($data) {
        $nim = $data['nim'];
        $nama_mahasiswa = $data['nama_mahasiswa'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $fakultas = $data['fakultas'];
        $jurusan = $data['jurusan'];
        $alamat = $data['alamat'];
        $domisili_kampus = $data['domisili_kampus'];

        $query = "INSERT INTO tb_mahasiswa VALUES(null, '$nim', '$nama_mahasiswa', '$jenis_kelamin', '$fakultas', '$jurusan', '$alamat', '$domisili_kampus')";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }

    function ubah_data($data) {
        $id_mahasiswa = $data["id_mahasiswa"];
        $nim = $data["nim"];
        $nama_mahasiswa = $data["nama_mahasiswa"];
        $jenis_kelamin = $data["jenis_kelamin"];
        $fakultas = $data["fakultas"];
        $jurusan = $data["jurusan"];
        $alamat = $data["alamat"];
        $domisili_kampus = $data["domisili_kampus"];

        $query = "UPDATE tb_mahasiswa SET id_mahasiswa = '$id_mahasiswa', nim = '$nim', nama_mahasiswa = '$nama_mahasiswa', jenis_kelamin = '$jenis_kelamin', fakultas = '$fakultas', jurusan = '$jurusan', alamat = '$alamat', domisili_kampus = '$domisili_kampus' WHERE id_mahasiswa = '$id_mahasiswa';";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }

    function hapus_data($data) {
        $id_mahasiswa = $data["hapus"];
        $query = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa';";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }
?>