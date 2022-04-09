<h1>Tambah Mahasiswa</h1>

<form action="done" method="POST">
    @csrf
    NIM <input type="text" name=nim placeholder="NIM"> <br>
    Nama <input type="text" name=nama placeholder="Nama"> <br>
    Jenis Kelamin<br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>    
    </select> <br>
    Alamat<br><textarea name="alamat" cols="50px" rows="10px"></textarea> <br>

    <button type="submit" name="tambah">Tambah