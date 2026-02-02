<table border="1" cellpadding="10" cellspacing="0">
    <h1 align="center">Data Dosen</h1>
    <tr>
        <th>Nama Dosen</th>
        <th>Email</th>
        <th>NoHp</th>
    </tr>

    {{-- Perulangan untuk menampilkan semua data dosen --}}
    @foreach($dosen as $d)
    <tr>
        <td>{{ $d['Nama'] }}</td>
        <td>{{ $d['Email'] }}</td>
        <td>{{ $d['NoHp'] }}</td>
    </tr>
    @endforeach
</table>