<table border="1"> 

    <tr>
        <td>ID</td>
        <td>{{$siswa->id}}</td>
    </tr>
    
    <tr>
        <td>Nama Siswa</td>
        <td>
            {{$siswa->nama}}
        </td>
</tr>

<tr>
    <td>Jurusan</td>
    <td>
        {{$siswa->jurusan->nama}}
    </td>
</tr>
<tr>
    <td>Jurusan</td>
    <td>
        {{$siswa->jurusan->nama}}
    </td>
</tr>
<tr>
    <td>Jenis</td>
    <td>
        {{$siswa->jenis_kelamin}}
    </td>
</tr>
<tr>
    <td>email</td>
    <td>
        {{$siswa->email}}
    </td>
</tr>

<tr>
    <td>NISN</td>
    <td>
        {{$siswa->nisn}}
    </td>
</tr>
<tr>
    <td>Tempat tanggal lahir</td>
    <td>
        {{$siswa->tempat_lahir}},
        {{$siswa->tanggal_lahir}}
    </td>
</tr>
<tr>
    <td>Alamat</td>
    <td>
        {{$siswa->alamat}}
    </td>
</tr>
<tr>
    <td>Asal Sekolah</td>
    <td>
        {{$siswa->asal_sekolah}}
    </td>
</tr>
</table>