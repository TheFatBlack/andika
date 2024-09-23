<!DOCTYPE html>
<html lang="en">
<title>Get and Post</title>
</head>

<body>

    <h1>Mengirimkan data dengan method Get</h1>
    <a href="index.php?halaman=link1&nama=apip">link1</a>
    <hr>
    <h1>Mengirimkan data dengan method Post</h1>
    <form action="index.php?halaman=link2" method="post">
        <label for="nama">Nama</label> <br>
        <input type="text" name="nama" id="nama" required><br><br>
        <label for="kelas">Kelas</label> <br>
        <select name="kelas" id="kelas" requiered>
            <option value="kelas">X RPL1</option>
            <option value="kelas">X RPL2</option>
            <option value="kelas">XI RPL1</option>
            <option value="kelas">XI RPL2 </option>
        </select><br><br>
        <label for="jenis_kelamin">Jenis Kelamin</label><br>
        <select name="jenis_jelamin" id="jenis_kelamin" requiered>
            <option value="jenis_kelamin">Laki-Laki</option>
            <option value="jenis_kelamin">Perempuan</option>
        </select>
        <br><br>
        <input type=" text" name="kelas" id="kelas">
        <button type="submit">kirim</button>
    </form>
</body>

</html>