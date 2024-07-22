<?php

class db
{
  private $koneksi;
  function __construct()
  {
    $this->koneksi = $koneksi = new mysqli("localhost", "root", "", "db_pelatihan");
  }
  function get_user($username, $password)
  {
    $data = $this->koneksi->query("SELECT * FROM tbl_user WHERE username='$username' and password='$password'");
    return $data;
  }
  // mahasiswa
  function get_allMhs()
  {
    $data = $this->koneksi->query("SELECT * FROM tbl_mahasiswa");
    return $data;
  }

  function add_mhs($nim, $nama, $alamat, $jurusan)
  {
    $this->koneksi->query("INSERT INTO tbl_mahasiswa(nim,nama,alamat,jurusan) VALUES('$nim','$nama','$alamat', '$jurusan')");
    return true;
  }

  function update_mhs($nim, $nama, $alamat, $jurusan)
  {
    $this->koneksi->query("UPDATE tbl_mahasiswa SET nama = '$nama', alamat = '$alamat', jurusan = '$jurusan' WHERE nim='$nim'");
    return true;
  }

  function get_MhdByNim($nim)
  {
    $data = $this->koneksi->query("SELECT * FROM tbl_mahasiswa WHERE nim='$nim'");
    return $data;
  }

  function del_mhs($nim)
  {
    $this->koneksi->query("DELETE FROM tbl_mahasiswa WHERE nim='$nim'");
    return true;
  }

  // dosen
  function get_allDosen()
  {
    $data = $this->koneksi->query("SELECT * FROM tbl_dosen");
    return $data;
  }

  function add_dosen($kode_dosen, $nama, $alamat)
  {
    $this->koneksi->query("INSERT INTO tbl_dosen(kd_dosen,nama,alamat) VALUES('$kode_dosen','$nama','$alamat')");
    return true;
  }

  function update_dosen($kode_dosen, $nama, $alamat)
  {
    $this->koneksi->query("UPDATE tbl_dosen SET nama = '$nama', alamat = '$alamat' WHERE kd_dosen='$kode_dosen'");
    return true;
  }

  function get_DosenBykd($kode_dosen)
  {
    $data = $this->koneksi->query("SELECT * FROM tbl_dosen WHERE kd_dosen='$kode_dosen'");
    return $data;
  }

  function del_dosen($kode_dosen)
  {
    $this->koneksi->query("DELETE FROM tbl_dosen WHERE kd_dosen='$kode_dosen'");
    return true;
  }
}
