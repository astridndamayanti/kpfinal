<table>
    <thead>
    <tr>
        <th colspan="5">{{ $judul->tugas->mapel->mapel }} : {{ $judul->tugas->judul }}</th>
    </tr>
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>Nilai</th>
    </tr>
    </thead>
    <tbody>
    @foreach($siswa as $fs)
        <tr>
            <td>{{ $fs->siswa->nis }}</td>
            <td>{{ $fs->siswa->nama }}</td>
            <td>{{ $fs->siswa->rombel->rombel }}</td>
            <td>{{ $fs->siswa->rayon->rayon }}</td>
            <td>{{ $fs->nilai }}</td>
        </tr>
    @endforeach
    </tbody>
</table>