<?php
require 'koneksi.php';

$id = $_GET["id"];
$read_sql = "SELECT * FROM mahasiswa WHERE id = $id";

$result = mysqli_query($conn, $read_sql);

$mahasiswa = [];

while ($row = mysqli_fetch_assoc($result)) {
    $mahasiswa[] = $row;
}

$mahasiswa = $mahasiswa[0];

if (isset($_POST["submit"])) {
    $nim = htmlspecialchars($_POST["nim"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $kelas = htmlspecialchars($_POST["kelas"]);
    $prodi = htmlspecialchars($_POST["prodi"]);

    $update_sql = "UPDATE mahasiswa SET nim = '$nim', nama='$nama', kelas='$kelas', prodi = '$prodi' WHERE id='$id'";
    $result = mysqli_query($conn, $update_sql);

    if ($result) {
        echo "<script>
            alert('Data berhasil diupdate!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diupdate!');
            document.location.href = 'update.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h3>Update Data</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mahasiswa["id"]; ?>">
        <label for="nim">NIM</label><br>
        <input type="nim" name="nim" id="nim" value="<?= $mahasiswa["nim"]; ?>"><br><br>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" value="<?= $mahasiswa["nama"]; ?>"><br><br>
        <label for="kelas">Kelas</label><br>
        <input type="radio" name="kelas" <?= $mahasiswa['kelas'] == "A" ? "checked" : "" ?> value="A">A
        <input type="radio" name="kelas" <?= $mahasiswa['kelas'] == "B" ? "checked" : "" ?> value="B">B
        <input type="radio" name="kelas" <?= $mahasiswa['kelas'] == "C" ? "checked" : "" ?> value="C">C<br><br>
        <label for="prodi">Prodi</label><br>
        <input type="text" name="prodi" id="prodi" value="<?= $mahasiswa["prodi"]; ?>"><br><br>
        <button type="submit" name="submit">Update</button>
    </form>
</body>

</html>