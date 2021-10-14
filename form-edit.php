<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_diri WHERE id=$id";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit mahaSiswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit mahaSiswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $mahasiswa['nama'] ?>" />
        </p>
        <p>
            <label for="nim">nim: </label>
            <textarea name="nim"><?php echo $mahasiswa['nim'] ?></textarea>
        </p>
        <p>
            <label for="jurusan">jurusan: </label>
            <?php $jurusan = $mahasiswa['jurusan']; ?>
            <select name="jurusan">
                <option <?php echo ($jurusan == 'Sistem informasi') ? "selected": "" ?>>Sistem informasi</option>
                <option <?php echo ($jurusan == 'Teknik sipil') ? "selected": "" ?>>Teknik sipil</option>
                <option <?php echo ($jurusan == 'Akuntansi') ? "selected": "" ?>>Akuntansi</option>
                <option <?php echo ($jurusan == 'psikologi') ? "selected": "" ?>>psikologi</option>
                <option <?php echo ($jurusan == 'Hukum') ? "selected": "" ?>>Hukum</option>
            </select>
           
        </p>
        <p>
            <label for="prodi">prodi: </label>
            <?php $prodi = $mahasiswa['prodi']; ?>
            <select name="prodi">
                <option <?php echo ($prodi == 'S1 Sistem informasi') ? "selected": "" ?>>S1 Sistem informasi</option>
                <option <?php echo ($prodi == 'S1 Teknik sipil') ? "selected": "" ?>>S1 Teknik sipil</option>
                <option <?php echo ($prodi == 'S1 Akuntansi') ? "selected": "" ?>>S1 Akuntansi</option>
                <option <?php echo ($prodi == 'S1 Psikologi') ? "selected": "" ?>>S1 Psikologi</option>
                <option <?php echo ($prodi == 'S1 Hukum') ? "selected": "" ?>>S1 Hukum</option>
            </select>
        </p>
        <p>
      
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>