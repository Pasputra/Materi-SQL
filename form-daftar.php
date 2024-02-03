<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi PPDB by Webpro</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <header>
        <h1>Webpro 7</h1>
        <h3>Penerimaan siswa baru</h3>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <h4>Formulir PPDB</h4>
    <div>
        <form action="proses-pendaftaran.php" method="post">
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" require>
            </div>
            <div>
                <label for="">Alamat Lengkap</label>
                <textarea name="alamat" cols="30" rows="5" require></textarea>
            </div>
            <div>
                <label for="">Jenis Kelamin</label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                <input type="radio" name="jenis_kelamin" value="Alien/Mahluk Luar Bumi">Alien/Mahluk Luar Bumi
            </div>
            <div>
                <label for="">Agama</label>
                <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Atheis">Atheis/Tidak Beragama</option>
                    <option value="Agama Lain">Agama lain</option>
                </select>
            </div>
            <div>
                <label for="">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" require>
            </div>
            <div>
                <input type="reset">  
                <input type="submit" name="simpan" value="Simpan">
            </div>
        </form>
    </div>  
    <footer>
        <hr>
        <i>Programming is fun &copy;by Studentday Programmig Web
    </footer>   
</body>
</html>