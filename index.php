<?php
if(isset($_POST["submit"])){
    //cek berhasil ditambah ato nda
    <script>
      alert($_POST['nisn'])
    </script>


}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah siswa</title>
    </head>
    <body>
        <h1>Tambah Siswa</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nisn">nisn : </label>
                    <input type="text" name="nisn" id="nisn" required>
                </li>
                <li>
                    <label for="nama">nama : </label>
                    <input type="text" name="nama" id="nama" required>
                </li>
                <li>
                    <label for="email">email : </label>
                    <input type="text" name="email" id="email" required>
                </li>
                <li>
                    <label for="kelas">kelas : </label>
                    <input type="text" name="kelas" id="kelas" required>                    
                </li>
                <li>
                    <button type="submit" name="submit">tambah</button>
                </li>

    </body>
</html>
