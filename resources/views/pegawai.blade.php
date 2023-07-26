<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>id</th>
      <th>Nama</th>
      <th>Jabatan</th>
      <th>Umur</th>
      <th>Alamat</th>
    </tr>
    @foreach($pegawai as $x)
    <tr>
      <td>{{$x->pegawai_id}}</td>
      <td>{{$x->pegawai_nama}}</td>
      <td>{{$x->pegawai_jabatan}}</td>
      <td>{{$x->pegawai_umur}}</td>
      <td>{{$x->pegawai_almat}}</td>
    </tr>
    <td>
      <a href="/pegawai/edit/$pegawai_id">EDIT</a>
      <a href="/pegawai/delet/$pegawai_id">HAPUS</a>
    </td>
    @endforeach
  </table>
</body>
</html>