<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Mahasiswa Baru </title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap" />
        </p>
        <p>
            <label for="nim">nim: </label>
            <input type="text" name="nim" placeholder="Masukkan nim" />
        </p>
        <p>
            <label for="jurusan">jurusan: </label>
            <select name="jurusan">
                <option>informatika</option>
                <option>teknik sipil</option>
                <option>akuntansi</option>
                <option>psikologi</option>
                <option>hukum</option>
            </select>
            
        </p>
        <p>
            <label for="prodi">prodi: </label>
            <select name="prodi">
                <option>S1 Sistem informasi</option>
                <option>S1 Teknik sipil</option>
                <option>S1 Akuntansi</option>
                <option>S1 Psikologi</option>
                <option>S1 Hukum</option>
            </select>
        
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>