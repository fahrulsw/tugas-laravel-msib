<h3 align="center">Daftar Nilai Mahasiswa</h3>
<table border="1" align="center" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            @php
            $judul = ['No', 'Nama', 'Nilai', 'Keterangan'];
            $no = 1;
            @endphp
            @foreach ($judul as $jdl)
            <td>{{$jdl}}</td>
            @endforeach
        </tr>
    </thead>
    <tbody>
        
        @foreach ($siswa as $s)
        @php
        $ket = $s['nilai'] >= 60 ? 'Lulus' : 'Gagal';
        $warna = ($no % 2 == 1) ? 'skyblue' : 'yellow';
        @endphp
        <tr bgcolor="{{$warna}}">
            <td>{{$no++}}</td>
            <td>{{ $s['nama'] }}</td>
            <td>{{ $s['nilai'] }}</td>
            <td>{{$ket}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    