<?php
require 'koneksi.php';

if (isset($_POST["hapus"])) {
    $delete_sql = "DELETE FROM mahasiswa";
    $result = mysqli_query($conn, $delete_sql);

    if ($result) {
        echo "<script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal dihapus!');
            document.location.href = 'index.php';
        </script>";
    }
}