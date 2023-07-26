<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="">
    <div>
      <label for="nama">Nama Lengkap</label>
      <input type="text" name="nama" id="nama">
    </div>
    <div>
      <label for="lahir">Tempat tanggal lahir</label>
      <input type="text" name="lahir" id="lahir">
      <input type="date" name="date" id="date">
    </div>
    <div>
      <label for="alamat">Alamat</label>
      <input type="text" name="alamat" id="alamat">
    </div>
    <div>
      <label for="gender">Jenis Kelamin</label>
      <input type="radio" name="laki-laki" id="laki-laki" value="laki-laki">
      laki-laki
      <input type="radio" name="perempuan" id="perempuan" value="perempuan">
      perempuan
    </div>
    <div>
      <div>
        <label for="agama">Agama</label>
        <select name="agama" id="agama">
          <option value="islam"> islam</option>
          <option value="kristen">kristen</option>
        </select>
      </div>
      <div>
        <label for="hobi">Hobi</label>
        <input type="checkbox" name="hobi1" id="hobi1">
        Baca Buku
        <input type="checkbox" name="hobi2" id="hobi2">
        Olahraga
        <input type="checkbox" name="hobi3" id="hobi3">
        Main Game
        <input type="checkbox" name="hobi4" id="hobi4">
        Hiking
      </div>
    </div>
    <button>Tampilkan</button>
    <button>Reset</button>
  </form>
</body>
</html>