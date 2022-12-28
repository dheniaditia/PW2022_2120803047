<?php

$conn = mysqli_connect("localhost", "root", "", "project_uas");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }
  return $rows;
}


function tambah($_data) {
  global $conn;
  $harga = htmlspecialchars($_data["harga"]);
  $produk = htmlspecialchars($_data["produk"]);
  $spesifikasi = htmlspecialchars($_data["spesifikasi"]);
  $rilis = htmlspecialchars($_data["rilis"]);

  $gambar = htmlspecialchars($_data["gambar"]);


  $query = "INSERT INTO admin
              VALUES
              ('', '$produk', '$harga', '$spesifikasi', '$rilis', '$gambar')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM admin WHERE id = $id");

  return mysqli_affected_rows($conn);
}


function ubah($_data) {
  global $conn;

  $id = $_data["id"];
  $harga = htmlspecialchars($_data["harga"]);
  $produk = htmlspecialchars($_data["produk"]);
  $spesifikasi = htmlspecialchars($_data["spesifikasi"]);
  $rilis = htmlspecialchars($_data["rilis"]);
  $gambar = htmlspecialchars($_data["gambar"]);


  $query = "UPDATE admin SET
              harga = '$harga',
              produk  = '$produk',
              spesifikasi = '$spesifikasi',
              rilis = '$rilis',
              gambar = '$gambar'
            WHERE id = $id
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword) {
  $query = "SELECT * FROM admin
            WHERE
            produk LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            spesifikasi LIKE '%$keyword%' OR
            rilis LIKE '%$keyword%' 
            ";
  return query($query);
}

function registrasi($data) {
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn,$data["password"]);
  $password2 = mysqli_real_escape_string($conn,$data["password2"]);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

  if ( mysqli_fetch_assoc($result) ) {
    echo "<script>
            alert('username telah terdaftar');
          </script>";

      return false;
  }

  if ( $password !== $password2){
    echo "<script>
            alert('konfirmasi password tidak sesuai');
          </script>";

      return false;
  }
  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

  return mysqli_affected_rows($conn);
}

?>