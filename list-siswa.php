<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahaiswa Baru</title>
</head>

<body>
    <header>
        <h3>Mahasiswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>nim</th>
            <th>jurusan</th>
            <th>prodi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_diri";
        $query = mysqli_query($db, $sql);

        while($mahasiswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mahasiswa['nama']."</td>";
            echo "<td>".$mahasiswa['nim']."</td>";
            echo "<td>".$mahasiswa['jurusan']."</td>";
            echo "<td>".$mahasiswa['prodi']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$mahasiswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$mahasiswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>