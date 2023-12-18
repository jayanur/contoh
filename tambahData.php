<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halaman Input Data</h1>
    <h2>Input Data Mahasiswa</h2>
    <div class="kotak">
        <form action="simpanData.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="nim">Nim</label>
                    </td>
                    <td>
                        <input type="number" id="nim" name="nim" placeholder="Masukan Nim" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">Nama</label>
                    </td>
                    <td>
                        <input type="text" id="nama" name="nama" placeholder="Masukan Nama" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jk">Jenis Kelamin</label>
                    </td>
                    <td>
                        <input type="text" id="jk" name="jk" placeholder="Masukan Jenis Kelamin" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prodi">Prodi</label>
                    <td>
                        <input type="text" id="prodi" name="prodi" placeholder="Masukan Prodi" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat">Alamat</label>
                    </td>
                    <td>
                        <textarea type="alamat" id="alamat" name="alamat" placeholder="Masukan Alamat" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit">Simpan</button>
                    </td>
                </tr>  
            </table>
        </form>
    </div>
</body>
</html>