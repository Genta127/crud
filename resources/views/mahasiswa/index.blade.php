<a href="create">Add Mahasiswa</a>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
    </tr>
    @foreach ($mahasiswa as $w )
        <tr>
            <td>{{ $w->id }}</td>
            <td>{{ $w->nim }}</td>
            <td>{{ $w->nama }}</td>
            <td>{{ $w->jenis_kelamin }}</td>
            <td>{{ $w->alamat }}</td>
        </tr>    
    @endforeach
    
</table>